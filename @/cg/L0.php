<?php  
/*$c=50;
$cy=52;
$cc=52;*/

if (isset($_GET['L'])) $L=$_GET['L'];
else  $L="cg";

include "LM".$L.".php";

$Ldir='cg/';

$UTMET=$Ldir.'login.php?L='.$L;

$header='header("Location: '.$Ldir.'login.php?L='.$L.'")';


$UTMETFÕszerver='Crnogorski PutMET';

$Lsw= 0;

$StrMsw= 0;
?>
