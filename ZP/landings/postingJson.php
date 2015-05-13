<?php 


function CallRest($url, $data = false, $method = 'GET')
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if (!empty($data))
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if (!empty($data))
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    return curl_exec($curl);
}
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