<?php 
include "protected/config/connect.php";

	$result = mysql_query("SHOW COLUMNS FROM contact");
 	$i = 0;
 	$csv_output ="";
	if (mysql_num_rows($result) > 0) {
	while ($row = mysql_fetch_assoc($result)) {
	$csv_output .= $row['Field'].";";
	$i++;}
	}
	$csv_output .= "\n";
	 $values = mysql_query("SELECT * FROM contact where id_landing =".$_GET['landing_id']." ORDER BY date desc");
	 
	while ($rowr = mysql_fetch_row($values)) {
	for ($j=0;$j<$i;$j++) {
	$csv_output .= $rowr[$j]."; ";
	}
	$csv_output .= "\n";
	}
	 
	
	$filename = "contactos_landing_dm_".$_GET['landing_id'].date("d-m-Y_H-i",time());
	 
	header("Content-type: application/vnd.ms-excel");
	header("Content-disposition: csv" . date("Y-m-d") . ".csv");
	header( "Content-disposition: filename=".$filename.".csv");
	 
	print $csv_output;

?>