

<?php  

error_reporting(0);
//error_reporting(E_ALL);
	include "sql_connectMd.php";
$gg=501;
while ($gg<555)
{
echo " \n ".$gg++;
echo " startW ";
echo $StID="S00".$gg;

$sta="Meteodata.Last_data";
$ql = mysqli_query($sql_connect,"INSERT INTO $sta (StID) VALUES ('$StID') ");


sleep(0);
}
mysqli_close ($sql_connectMd);


 

 
             ?>
