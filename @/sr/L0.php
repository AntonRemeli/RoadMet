<?php  
$c=0;
$cy=52;
$cc=52;

if (isset($_GET['L'])) $L=$_GET['L'];
else  $L="sr";

include "LM".$L.".php";

$Ldir='sr/';

$UTMET=$Ldir.'login.php?L='.$L;

$header='header("Location: '.$Ldir.'login.php?L='.$L.'")';


$UTMETFÕszerver='ARMET centrala';

$Lsw= 0;

$StrMsw= 1;
?>
