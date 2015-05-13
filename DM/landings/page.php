<?php include 'protected/config/front_page.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<? 
$message="";
$display_form="";

if(isset($_POST['submit']) && $_POST['submit']!=""){
  if($_POST['invalidConversion']==""){
    $message = "Los datos se enviaron correctamente";
    //var_dump($_POST);
    $display_form ="style='display:none;'";
    if($_POST['comentarios']=='COMENTARIO'){
      $_POST['comentarios'] = "";
    }


    /* guardo los datos del contacto */
    /*saveContact($_POST['name'],$_POST['surname'],$_POST['contact_mail'],$_POST['comentarios'],$_POST['areacode'],$_POST['phone'],$_POST['selModelo'],$_GET['p'],$_POST['selProvincia'],$_GET['font'],
       $landing['id'],$concesionaria['id'],$landing['title'],$concesionaria['name']);
       */
    saveContact($_POST['name'],$_POST['surname'],$_POST['contact_mail'],$_POST['comentarios'],$_POST['areacode'],$_POST['phone'],$_POST['selModelo'],$_GET['p'],$_POST['selProvincia'],$_GET['font'],
       $landing['id'],$concesionaria['id'],$landing['title'],$concesionaria['name'],$_POST['receive']);   
    
    /*$model = new Contact;

        $model->first_name = $_POST['name'];
        $model->last_name = $_POST['surname'];
        $model->email = $_POST['contact_mail'];
        $model->comment = $_POST['comentarios'];
        $model->phone = $_POST['areacode'].' - '. $_POST['phone'];
        $model->model = $_POST['selModelo'];
        $model->country = $_GET['p'];
        $model->states = $_POST['selProvincia'];
        $model->font = $_GET['font'];
        $model->id_landing = $landing['id'];
        $model->id_concesionaria = $concesionaria['id'];
        $model->name_landing = $landing['title'];
        $model->name_concesionaria = $concesionaria['name'];

        var_dump($model);
        die;
        $model->save();
*/
    // Varios destinatarios '.$concesionaria['email'].' 

    $para = ' '.$concesionaria['email'].' ';
    $titulo = 'Contacto de DeMotores360';

    $cabeceras  = 'From: DeMotores 360';
    

    $msg=' 
    Nombre:           '.$_POST['name'].' 
    Apellido:         '.$_POST['surname'].' 
    E-Mail:           '.$_POST['contact_mail'].' 
    Telefono:         '.$_POST['areacode'].' - '. $_POST['phone'].'
    Pais:             '.$_GET['p'].' 
    Estado:           '.$_POST['selProvincia'].' 
    Modelo de Auto:   '.$_POST['selModelo'].' 
    Comentarios:      '.$_POST['comentarios'].' ';


    mail($para, $titulo, $msg, $cabeceras);

    include 'postingJson.php';
  }
}
    //fin if submit
    if(isset($landing['color_background_content']) && $landing['color_background_content']!=""){
        $back_content =  $landing['color_background_content'];
    }else{
        $back_content = "transparent";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?= $landing['title']?></title>
<link href="style_dm.css" rel="stylesheet" type="text/css" />
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
       if (charCode > 57 || (charCode < 48 && charCode > 31)) {
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
        }
        if(form.surname.value == '' || form.surname.value == 'APELLIDO') {

          msg+=" - Apellido\n";
        }

        if(form.areacode.value == '' || form.areacode.value == 'COD. AREA') {

          msg+=" - C\xF3digo de area\n";
        }

        if(form.phone.value == '' || form.phone.value == 'TEL\xC9FONO') {

          msg+=" - Tel\xE9fono\n";

        }

        // regular expression to match only alphanumeric characters and spaces
        var re = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
        
        // validation fails if the mail field doesn't match our regular expression
        if(!re.test(form.contact_mail.value || form.contact_mail.value=='' || form.contact_mail.value=='E-MAIL')) {

          msg+=" - E-mail\n";
        }
        <?php if(isset($landing['allow_state']) && $landing['allow_state'] == 1){ ?>
        if(document.getElementById('selProvincia').value == 'PROVINCIA') {
          msg+=" - Provincia\n";
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
<body style="margin-top:0;background: url('images/<?=$landing['img_background']?>');	background-repeat: no-repeat;background-position: center top;">

<div class="main_content">
  	<div class="header"></div>
    <div class="content">
    	<div style="margin-top: 10px;padding-left:20px;float:inherit;font-size:<?=$landing['font1']?>px;height:120px;"><font face="Arial, Helvetica, sans-serif" color="<?=$landing['color_head']?>"><?=$landing['title_header']?></font></div>
<div style="padding-left:20px;font-size:<?=$landing['font2']?>px;margin-top:50px;"><font face="Arial, Helvetica, sans-serif" color="<?=$landing['color_foot']?>"><?=$landing['title_footer']?></font>.</div>
<div style="border-radius:6px;width: 603px;background-color:<?=$back_content?>;padding:10px;margin:20px;font-size:<?=$landing['font_content']?>px;margin-top:290px;"><font face="Arial, Helvetica, sans-serif" color="<?=$landing['color_content']?>"><?=$landing['content']?></font></div>
<div id="image_gallery">
<? while($item = mysql_fetch_array($images)){?>
    <a href="?id=<?=$item['id']?>&p=<?=$_GET['p']?>&font=<?=$_GET['font']?>"><img src="images/<?=$item['img_background']?>"></a>
<? } ?>
</div>
    </div>
    <div class="form" style="background:url('images/<?=$landing['img_1']?>'); background-repeat: no-repeat;">
      <div class="form_content">
        <div class="message" style="color:red;"><?=$message?></div>
    	<form method="post" id="form" name="form" action="" onSubmit="return checkForm(this);" <?=$display_form?> >
       	  <input name="name" type="text" class="textfield" id="name" value="NOMBRE" onfocus="if(this.value == 'NOMBRE') {this.value=''}" onblur="if(this.value == ''){this.value ='NOMBRE'}"  maxlength="25" onkeypress="return lettersOnly(event)" style="background-color:#CCC; margin-top:105px; width:250px; margin-left:10px" />
            
          <input name="surname" type="text" class="textfield" id="surname" value="APELLIDO" onfocus="if(this.value == 'APELLIDO') {this.value=''}" onblur="if(this.value == ''){this.value ='APELLIDO'}"  maxlength="25" onkeypress="return lettersOnly(event)" style="background-color:#CCC; margin-top:5px; width:250px; margin-left:10px" />
          
          <input name="areacode" type="text" class="textfield" id="areacode" value="COD. AREA" onfocus="if(this.value == 'COD. AREA') {this.value=''}" onblur="if(this.value == ''){this.value ='COD. AREA'}"  maxlength="8" onkeypress="return numbersOnly(event)" style="background-color:#CCC; margin-top:5px; width:70px; margin-left:10px" />
            
          <input name="phone" type="text" class="textfield" id="phone" value="TEL&Eacute;FONO" onfocus="if(this.value == 'TEL&Eacute;FONO') {this.value=''}" onblur="if(this.value == ''){this.value ='TEL&Eacute;FONO'}" maxlength="16" onkeypress="return numbersOnly(event)" style="background-color:#CCC; margin-top:5px; width:154px; margin-left:2px" />

          <input name="contact_mail" type="text" class="textfield" id="contact_mail" value="E-MAIL" onfocus="if(this.value == 'E-MAIL') {this.value=''}" onblur="if(this.value == ''){this.value ='E-MAIL'}"  maxlength="100" style="background-color:#CCC; margin-top:5px; width:250px; margin-left:10px" />
           <?php 
            if(isset($landing['allow_state']) && $landing['allow_state'] == 1){
           ?> 
              <select name="selProvincia" class="dropdown" id="selProvincia" style="background-color:#CCC; margin:5px 0 0 10px; width:270px; padding:5px">
                <option value="PROVINCIA" selected="selected">PROVINCIA</option>
  				    <? include 'getCountries.php'; ?>    
  			     </select>
           <? } ?>

           <?php 
            if(isset($landing['allow_models']) && $landing['allow_models'] == 1){
           ?> 
        			<select name="selModelo" class="dropdown" id="selProvincia" style="background-color:#CCC; margin:5px 0 0 10px; width:270px; padding:5px">
                      <option value="" selected="selected">MODELO</option>
                      <?php foreach($modelos as $model){?>
                      		<option value="<?=$model?>"><?=$model?></option>
                      <? } ?>
        			</select>
          <? } ?>
          
          <?php 
            if(isset($landing['allow_comment']) && $landing['allow_comment'] == 1){
           ?>   
                <textarea name="comentarios" cols="" rows="2" class="textarea" onfocus="if(this.value == 'COMENTARIO') {this.value=''}" onblur="if(this.value == ''){this.value ='COMENTARIO'}" maxlength="200" style="background-color:#CCC; margin:5px 0 0 10px; width:260px; padding:5px;height: 45px;">COMENTARIO</textarea>
           <? } ?> 
            <div class="check">
            	<div style="float:left">
                	<input name="receive" type="checkbox" checked="checked" value="1"/>
                </div>
<div style="width:220px; float:right">
                	<font face="Arial, Helvetica, sans-serif" size="1" color="#333333">Acepto que me env&iacute;en informaci&oacute;n sobre novedades, servicios y promociones de DeMotores.com</font>
                </div>
                <div align="center">
                  <input type="image" src="images/<?=$landing['img_2']?>" width="244" height="51" border="0" style="margin-top:10px;cursor:pointer;">
                </div>
                <input id="invalidConversion" type="text" name="invalidConversion" value="">
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
    if(!empty($landing['adwords_code'])){
      echo $landing['adwords_code'];
    }else{
      echo $concesionaria['adwords_code'];
    }
}?>
</body>
</html>


