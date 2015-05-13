<?php
include "protected/config/connect.php";

$id = $_GET['id'];

function getLandingById($id){
	$sql="select * from landing where id=".$id;
	
	$row = mysql_query($sql);
	$item = mysql_fetch_array($row);
	
	return $item;
}

function getInmobiliariaByLandingId($id){
	$sql="select * from inmobiliaria inner join landing on landing.id_inmobiliaria = inmobiliaria.id WHERE landing.id=".$id;
	$rows = mysql_query($sql);
	$item = mysql_fetch_array($rows);
	
	return $item;
}

function getImagesLandingsByInmobiliariaId($id,$img_landing){
	$sql="select img_background, id FROM landing WHERE id_inmobiliaria = $id AND img_background <> '$img_landing'";
	$row = mysql_query($sql);

	return $row;
}

function saveContact($name,$surname,$contact_mail,$comentarios,$areacode,$phone,$p,$selProvincia,$cstm_campo,$font,$landing_id,$inmobiliaria_id,$landing_title,$inmobiliaria_name,$receive){

	$sql="INSERT into contact (first_name,last_name,email,comment,phone,country,states,cstm_field,font,id_landing,
		id_inmobiliaria,name_landing,name_inmobiliaria,receive,date)
		  VALUES ('".$name."','".$surname."','".$contact_mail."','".$comentarios."','".$areacode."-".$phone."','".$p."','".$selProvincia."','".$cstm_campo."','".$font."',
       '".$landing_id."','".$inmobiliaria_id."','".$landing_title."','".$inmobiliaria_name."','".$receive."','".date("Y-m-d")."')";
	
	mysql_query($sql);	
}


$landing = getLandingById($id);
$combo = explode( ',', $landing['content_select']); 

$inmobiliaria = getInmobiliariaByLandingId($id);

$images = getImagesLandingsByInmobiliariaId($landing['id_inmobiliaria'], $landing['img_background']);


?>