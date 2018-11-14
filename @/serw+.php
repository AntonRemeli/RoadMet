<?php  

	$sad = time();

    $sada =date("Y-m-d",$sad+22)." ".date("H:i",(round(($sad)/60)*60));
    $sadah =date("Y-m-d",$sad+22)." ".date("H:i",(round(($sad)/3600)*3600));



if (isset($_GET['inserv']))
{
//	echo "aaaaaaaa".
		$stno= $_GET['stno'];	

		$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
$queryst = "SELECT * FROM stations where st_id=$stno";

$rest = mysqli_query($sql_connect,$queryst);
$rowst = mysqli_fetch_array($rest, MYSQLI_ASSOC);
$megj=$rowst[megj];


//  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   

		if($stno>9000) {
if($stno>9500)  include "hr/LMhr.php";
			$queryr = "INSERT INTO servs SET  stno=$stno, kada='$sadah', dinp='$sada', todo='$todotx', todu='$todutx', diag='$megj' ";
		}
		else  $queryr = "INSERT INTO servs SET  stno=$stno, kada='$sadah', dinp='$sada' ";
$resr = mysqli_query($sql_connect,$queryr);
	
	mysqli_close ($sql_connect);

} 
?>
