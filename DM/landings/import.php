<div style="font-size:20px;font-weight:bold;">Importador de Contactos de Landings al Store de Promociones de DeMotores</div>
<br><br>
<div style="font-size:16px;">A continuacion cargue un archivo .csv delimitado por comas que contenga el siguiente encabezado:</div>
<br>
<div style="font-size:14px;background:#999999;">nombre,email,codigoArea,telefono,provincia,comentrios,idu,modelo,pais</div>

<form style="float:left;margin-top:20px;" action="" method="post" enctype="multipart/form-data">
<input type="file" name="csv" value="" /><br>
<input style="margin-top:20px;" type="submit" name="submit" value="Importar" /></form>

<?php
include 'callrest.php';
if ( isset($_POST["submit"]) ) {
   if (isset($_FILES["csv"])) {

        if ($_FILES["csv"]["error"] > 0) {
            echo "Return Code: " . $_FILES["csv"]["error"] . "<br />";

        }else{
        		
			    $name = $_FILES['csv']['name'];
			    
			    $tmp = explode('.', $_FILES['csv']['name']);
				$ext = end($tmp);

			    $type = $_FILES['csv']['type'];
			    $tmpName = $_FILES['csv']['tmp_name'];

			    // chequeo si el archvo es csv
			    if($ext === 'csv'){
 					
			        if(($handle = fopen($tmpName, 'r')) !== FALSE) {
			            
			            set_time_limit(0);

			            $row = 0;
			            while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
			                // number of fields in the csv
			                $num = count($data);
			                if($row != 0){
				                
				                $contact = array('name' => ''.$data[0].'',
											  'email' => ''.$data[1].'',
											  'phoneArea' => ''.$data[2].'',
											  'phoneNumber' => ''.$data[3].'',
											  'location' => ''.$data[4].'',
											  'comments' => 'DM360 | Modelo de Interes: '.$data[7].' | comentario: '.$data[5].'',
											  'company' => ''.$data[6].'',
											 );                                        

					                if($data[8]!='cl' && $data[8]!='es'){
										$country = "com.".$data[8]."";
									}else{
										$country = "".$data[8]."";
									}

								CallRest('http://www.demotores.'.$country.'/frontend/specialoffer/contact.json', $contact, $method='POST');
								
							}
							
			                /*var_dump($contact);
			                echo $data[8];
			                echo "<br><br>";*/
			                // inc the row
			                $row ++;
			            }
			            $row --;
			            echo "<div style='color:green;'>Se enviaron ".$row." contactos.</div>";
			            fclose($handle);
			        }
			    }
			}
	}
}		
?>