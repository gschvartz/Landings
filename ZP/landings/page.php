<?php include 'protected/config/front_page.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<? 
$message="";
$display_form="";
if(isset($_POST['submit']) && $_POST['submit']!=""){
    $message = "Los datos se enviaron correctamente";
    //var_dump($_POST);
    $display_form ="style='display:none;'";



    saveContact($_POST['name'],$_POST['surname'],$_POST['contact_mail'],$_POST['comentarios'],$_POST['areacode'],$_POST['phone'],$_GET['p'],$_POST['selProvincia'],$_POST['cstm_campo'],$_GET['font'],
       $landing['id'],$inmobiliaria['id'],$landing['title'],$inmobiliaria['name'],$_POST['receive']);   
    
    $para = ' '.$inmobiliaria['email'].' ';
    $titulo = 'Contacto de ZonaProp360';

    $cabeceras  = 'From: ZonaProp 360';
    
    $txtProvincia = (isset($landing['show_states']) && $landing['show_states'] == 1)? "Estado:           ".$_POST['selProvincia']."" : "";
    $txtCstm = (isset($landing['allow_select']) && $landing['allow_select'] == 1)? "".$landing['lbl_select']."           ".$_POST['cstm_campo']."" : "";

    $msg=' 
    Nombre:           '.$_POST['name'].' 
    Apellido:         '.$_POST['surname'].' 
    E-Mail:           '.$_POST['contact_mail'].' 
    Telefono:         '.$_POST['areacode'].' - '. $_POST['phone'].'
    Pais:             '.$_GET['p'].'
    '.$txtProvincia.'
    '.$txtCstm.'   
    Comentarios:      '.$_POST['comentarios'].' ';


    mail($para, $titulo, $msg, $cabeceras);

    //include 'postingJson.php';

    }

    if(isset($landing['color_background_content']) && $landing['color_background_content']!=""){
        $back_content =  $landing['color_background_content'];
    }else{
        $back_content = "transparent";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?= $landing['title']?></title>
<link href="/style_dm.css" rel="stylesheet" type="text/css" />
<?=$landing['font_content_google']?>
<?=$landing['font_header_google']?>
<?=$landing['font_footer_google']?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
    function clearThis(target){
        target.value= "";
    }

     function lettersOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
          return false;
       }
       return true;
     }

     function numbersOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 57 || charCode < 48) {
          return false;
       }
       return true;
     }

      function checkForm(form)
      {

        var msg="";
        var error=0;
        // validation fails if the input is blank
        if(form.name.value == '' || form.name.value == 'NOMBRE') {

          msg=" - Nombre\n";
          form.name.focus();
        }
        if(form.surname.value == '' || form.surname.value == 'APELLIDO') {

          msg+=" - Apellido\n";
          form.surname.focus();
        }

        if(form.areacode.value == '' || form.areacode.value == 'COD. AREA') {

          msg+=" - C\xF3digo de area\n";
          form.areacode.focus();
        }

        if(form.phone.value == '' || form.phone.value == 'TEL\xC9FONO') {

          msg+=" - Tel\xE9fono\n";
          form.phone.focus();
        }

        // regular expression to match only alphanumeric characters and spaces
        var re = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
        
        // validation fails if the mail field doesn't match our regular expression
        if(!re.test(form.contact_mail.value || form.contact_mail.value=='' || form.contact_mail.value=='E-MAIL')) {

          msg+=" - E-mail\n";
          form.contact_mail.focus();
        }
        <?php if(isset($landing['show_states']) && $landing['show_states'] == 1){ ?>
        if(document.getElementById('selProvincia').value == 'PROVINCIA') {
          msg+=" - Provincia\n";
        }
        <? } ?>

        <?php if(isset($landing['allow_select']) && $landing['allow_select'] == 1){ ?>
        var val = "<?php echo $landing['lbl_select']?>";  
        if(document.getElementById('cstm_campo').value == val) {
          msg+=" - "+val+"\n";
        }
        <? } ?>

        
        // validation was successful
        if(msg!=''){
            alert("complete correctamente los siguientes campos\n" + msg);
            return false;
        }else{
            return true;
        }
      }
</script>
</head>
<body style="margin-top:0;background: url('/images/<?=$landing['img_background']?>');	background-repeat: no-repeat;background-position: center top;">

<div class="main_content">
  	<div class="header"></div>
    <div class="content">
    	<div style="margin-top: 10px;padding-left:20px;float:inherit;font-size:<?=$landing['font1']?>px;height:120px;"><font style="<?=$landing['font_family_header']?>" color="<?=$landing['color_head']?>"><?=$landing['title_header']?></font></div>
<div style="padding-left:20px;font-size:<?=$landing['font2']?>px;margin-top:50px;"><font style="<?=$landing['font_family_footer']?>" color="<?=$landing['color_foot']?>"><?=$landing['title_footer']?></font></div>
<div style="border-radius:6px;width: 603px;background-color:<?=$back_content?>;padding:10px;margin:20px;font-size:<?=$landing['font_content']?>px;margin-top:290px;"><font style="<?=$landing['font_family_content']?>" color="<?=$landing['color_content']?>"><?=$landing['content']?></font></div>
<div id="image_gallery">
<? while($item = mysql_fetch_array($images)){?>
    <a href="?id=<?=$item['id']?>&p=<?=$_GET['p']?>&font=<?=$_GET['font']?>"><img src="/images/<?=$item['img_background']?>"></a>
<? } ?>
</div>
    </div>
    <div class="form" style="background:url('/images/<?=$landing['img_1']?>'); background-repeat: no-repeat;">
      <div class="form_content">
        <div class="message" style="color:red;"><?=$message?></div>
    	<form method="post" id="form" name="form" action="" onSubmit="return checkForm(this);" <?=$display_form?> >
       	  <input name="name" type="text" class="textfield" id="name" value="NOMBRE" onfocus="clearThis(this)"  maxlength="25" onkeypress="return lettersOnly(event)" style="background-color:#CCC; margin-top:105px; width:250px; margin-left:10px" />
            
          <input name="surname" type="text" class="textfield" id="surname" value="APELLIDO" onfocus="clearThis(this)"  maxlength="25" onkeypress="return lettersOnly(event)" style="background-color:#CCC; margin-top:5px; width:250px; margin-left:10px" />
            
          <input name="areacode" type="text" class="textfield" id="areacode" value="COD. AREA" onfocus="clearThis(this)"  maxlength="8" onkeypress="return numbersOnly(event)" style="background-color:#CCC; margin-top:5px; width:70px; margin-left:10px" />
            
          <input name="phone" type="text" class="textfield" id="phone" value="TEL&Eacute;FONO" onfocus="clearThis(this)" maxlength="16" onkeypress="return numbersOnly(event)" style="background-color:#CCC; margin-top:5px; width:154px; margin-left:2px" />

          <input name="contact_mail" type="text" class="textfield" id="contact_mail" value="E-MAIL" onfocus="clearThis(this)"  maxlength="100" style="background-color:#CCC; margin-top:5px; width:250px; margin-left:10px" />
           <?php 
            if(isset($landing['show_states']) && $landing['show_states'] == 1){
           ?> 
            <select name="selProvincia" class="dropdown" id="selProvincia" style="background-color:#CCC; margin:5px 0 0 10px; width:270px; padding:5px">
              <option value="PROVINCIA" selected="selected">PROVINCIA</option>
				    <? include 'getCountries.php'; ?>    
			     </select>
          <? }else{ ?>
              <input name="selProvincia" type="hidden" id="selProvincia" value="" />
          <? } ?>
          <?php 
          if($landing['allow_select']){
            if (count($combo)>1){ ?>
        			<select name="cstm_campo" clearThiss="dropdown" id="cstm_campo" style="background-color:#CCC; margin:5px 0 0 10px; width:270px; padding:5px">
                      <option value="<?=$landing['lbl_select']?>" selected="selected"><?=$landing['lbl_select']?></option>
                      <?php foreach($combo as $item){?>
                      		<option value="<?=$item?>"><?=$item?></option>
                      <? } ?>
        			</select>
            <? }else{ ?>
               <input name="cstm_campo" type="text" class="textfield" id="cstm_campo" value="<?=$landing['lbl_select']?>" onfocus="clearThis(this)"  maxlength="25" style="background-color:#CCC; margin-top:5px; width:250px; margin-left:10px" />  
            <? }
            }else{ ?>
              <input name="cstm_campo" type="hidden" id="cstm_campo" value="" />
            <? } ?>
            
            <textarea name="comentarios" cols="" rows="2" class="textarea"  maxlength="200" style="background-color:#CCC; margin:5px 0 0 10px; width:260px; padding:5px;height: 45px;"></textarea>
            <div class="check">
            	<div style="float:left">
                	<input name="receive" type="checkbox" checked="checked" value="1"/>
                </div>
<div style="width:220px; float:right">
                	<font face="Arial, Helvetica, sans-serif" size="1" color="#333333">Acepto que me env&iacute;en informaci&oacute;n sobre novedades, servicios y promociones de DeMotores.com</font>
                </div>
                <div align="center">
                  <input type="image" src="/images/<?=$landing['img_2']?>" width="244" height="51" border="0" style="margin-top:10px;cursor:pointer;">
                </div>
            </div>
            <input type="hidden" name="submit" value="1">
        </form>
    </div>
    </div>
    <div style="clear: both;font-family: Verdana,Geneva,sans-serif;font-size: 9px;font-weight: bold;padding-left: 28px;padding-top: 100px;width: 96%;">
            <?=$landing['legales']?>
    </div>
</div>
<?if(isset($_POST['submit']) && $_POST['submit']!=""){
    echo $landing['adwords'];
}?>
</body>
</html>


