<?php
include "protected/config/connect.php";

$id = $_GET['id'];

function getLandingById($id){
	$sql="select * from landing where id=".$id;
	
	$row = mysql_query($sql);
	$item = mysql_fetch_array($row);
	
	return $item;
}

function getConcesionariaModelsByIdLanding($id){
	$sql="SELECT concesionaria.models FROM concesionaria INNER JOIN landing
		  ON landing.id_concesionaria = concesionaria.id WHERE landing.id=".$id;
	
	$row = mysql_query($sql);
	$item = mysql_fetch_array($row);
	
	return $item[0];
}

function getConcesionariaByLandingId($id){
	$sql="SELECT *, c.adwords_code FROM concesionaria AS c INNER JOIN landing ON landing.id_concesionaria = c.id WHERE landing.id=".$id;
	$rows = mysql_query($sql);
	$item = mysql_fetch_array($rows);
	
	return $item;
}

function getImagesLandingsByConcesionariaId($id,$img_landing){
	$sql="select img_background, id FROM landing WHERE id_concesionaria = $id AND img_background <> '$img_landing'";
	$row = mysql_query($sql);

	return $row;
}

function saveContact($name,$surname,$contact_mail,$comentarios,$areacode,$phone,$selModelo,$p,$selProvincia,$font,$landing_id,$concesionaria_id,$landing_title,$concesionaria_name,$receive){

	$sql="INSERT into contact (first_name,last_name,email,comment,phone,model,country,states,font,id_landing,
		id_concesionaria,name_landing,name_concesionaria,receive,date)
		  VALUES ('".$name."','".$surname."','".$contact_mail."','".$comentarios."','".$areacode."-".$phone."','".$selModelo."','".$p."','".$selProvincia."','".$font."',
       '".$landing_id."','".$concesionaria_id."','".$landing_title."','".$concesionaria_name."','".$receive."','".date("Y-m-d")."')";
	
	mysql_query($sql);	
}


$landing = getLandingById($id);
$modelos = explode( ',', getConcesionariaModelsByIdLanding($id)); 

$concesionaria = getConcesionariaByLandingId($id);

$images = getImagesLandingsByConcesionariaId($landing['id_concesionaria'], $landing['img_background']);


?>