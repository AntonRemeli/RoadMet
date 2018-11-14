<?php  

error_reporting(0);


if (isset($_GET['dd']))        $dd = $_GET['dd'];
   $stNo= $dd;

if (isset($_GET['ido1']))	$ido1 = $_GET['ido1'];
if (isset($_GET['in_ido1']))	 $in_ido1 = $_GET['in_ido1'];

if (isset($_GET['ido2']))	$ido2 = $_GET['ido2'];


//$mth=date('m',time());
$mth=date('m',$ido1 );
$wsHr=0;
if (($mth>3) && ($mth<11)) $wsHr= 3600 ;  	//nyáron 1h hozzáadás

 $ido1w = $ido1 + $wsHr   ;
$ido1w0 = $ido1w -720;  //-36000;
 $ido2w = $ido2 + $wsHr + 600  ;    			//nyáron 1h hozzáadás


//if($in_ido1!=$ido1){
if($in_ido1>$ido1){
	$ido1w=$in_ido1-120;
//	$ido1w=$in_ido1-1200-120;
$ido1w0 = $ido1w -720;
	$ido2w=$in_ido1+600;
}

//$ido2x = $ido2w-7200;		//now = now+2hr - 2hr
//echo "now: ".date('Y.M.d',$ido2x)."  ".date('H:i',$ido2x)."  ";

include "xps_at.php";

?>
