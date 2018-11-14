<?php   

$xml_output = "<?php  xml version=\"1.0\"?>\n";
$xml_output .= "<markers>\n";

$mth=date('m',time());
$wsHr=7200;
if (($mth>3) && ($mth<10)) $wsHr= 3600 ;

 $ido2 = time();
 $ido1 = $ido2 - 3600;
 $ido1w = $ido1 - $wsHr +3600  ;
 $ido2w = $ido2 - $wsHr +3600  ;

//include "sql_connect_latin2.php";
	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); 
if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();  }  
	
//include "sel_st_data.php";


mysqli_close ($sql_connect);

$xml_output .= "</markers>";

$fd = fopen("/var/www/html/42es/@/hr/Data/dataTAB.xml", "w") or die("Can't open file");
fwrite($fd, $xml_output);
fclose($fd);

echo "               file written to  31.220.111.193/42es/@/hr/Data/dataTAB ";

sleep(3600);

?>


