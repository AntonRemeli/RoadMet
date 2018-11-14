<?php  
$c=0;
$ct=14;
$cc=30;

if (isset($_GET['L'])) $L=$_GET['L'];
else  $L="sk";

include "LM".$L.".php";


//$Ldir=''; //3069: X vystup Fehler
$Ldir='sk/'; 

$UTMET=$Ldir.'login.php?L='.$L;

$header='header("Location: '.$Ldir.'login.php?L='.$L.'")';


$UTMETFÕszerver='ARMET Hlavný server';

$Lsw= 1;

$StrMsw= 1;
?>
