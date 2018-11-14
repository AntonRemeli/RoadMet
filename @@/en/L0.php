<?php  
$c=0;
$ct=14;
$cc=30;

if (isset($_GET['L'])) $L=$_GET['L'];
else  $L="en";

include "LM".$L.".php";


$Ldir='';

$UTMET=$Ldir.'login.php?L='.$L;

$header='header("Location: '.$Ldir.'login.php?L='.$L.'")';


$UTMETFÕszerver='ARMET HEADserver';

$Lsw= 1;

$StrMsw= 1;
?>
