<?php  
/*$c=50;
$cy=52;
$cc=52;*/

if (isset($_GET['L'])) $L=$_GET['L'];
else  $L="hr";

include "LM".$L.".php";

$Ldir='hr/';

$UTMET=$Ldir.'login.php?L='.$L;

$header='header("Location: '.$Ldir.'login.php?L='.$L.'")';


$UTMETFÕszerver='Hrvatski CestaMET';

$Lsw= 0;

$StrMsw= 0;
?>
