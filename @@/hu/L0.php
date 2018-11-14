<?php  
/*$c=0;
$ct=14;
$cc=30;*/

if (isset($_GET['L'])) $L=$_GET['L'];
else  $L="hu";

include "LM".$L.".php";


$Ldir='';

$UTMET=$Ldir.'login.php?L='.$L;

$header='header("Location: '.$Ldir.'login.php?L='.$L.'")';


$UTMETFÕszerver='UTMET FÕszerver';

$Lsw= 1;

$StrMsw= 1;

//$KIB= 1;

//$qYr= 10;




?>
