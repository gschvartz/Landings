<?php 

include 'callrest.php';

/**************************************************************************/

if($_GET['p']!='cl' && $_GET['p']!='es'){
	$country = "com.".$_GET['p'].""; 
}

$data = array('name' => ''.$_POST['name'].'',
			  'email' => ''.$_POST['contact_mail'].'',
			  'phoneArea' => ''.$_POST['areacode'].'',
			  'phoneNumber' => ''.$_POST['phone'].'',
			  'location' => ''.$_POST['selProvincia'].'',
			  'comments' => 'DM360 | Modelo de Interes: '.$_POST['selModelo'].' | comentario: '.$_POST['comentarios'].'',
			  'company' => ''.$concesionaria['idu_site'].'',
			 );                                        

CallRest('http://www.demotores.'.$country.'/frontend/specialoffer/contact.json', $data, $method='POST');
/*                          

//$ch = curl_init('http://www.demotores.'.$country.'/frontend/specialoffer/contact.json');                                                                      
  $ch = curl_init('http://10.155.3.151:8080/frontend/specialoffer/contact.json');
*/
?>