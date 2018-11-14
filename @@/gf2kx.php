<?php  

include ("../graph/jpgraph.php");
include ("../graph/jpgraph_line.php");

$cty = $_GET['cty'];
$lgn = $_GET['lgn'];

   $dd = $_GET['dd'];
   $add = $_GET['add'];
$ido1 = $_GET['ido1'];
$ido2 = $_GET['ido2'];

//$aT = $_GET['aT'];
//$BPW = $_GET['BPW'];
$GSW = $_GET['GSW'];

// include "gf2sess.php";  //neæe iæi, jer gf2kx.php dobija atribute koji se ne prenose na gf2sess.php
// IPAK IDE:  gf2gf.php NE VOLI PRAZNE REDOVE POSLE  " ? > "  ... a i ovaj modul ima prazne redove iza

if($_GET['GSW']==0) include "gf2gf.php";
if($_GET['GSW']==1) include "gf2gfBPW.php";
if($_GET['GSW']==2) include "gf2gfBWS.php";
if($_GET['GSW']==3) include "gf2gfBHS.php";
if($_GET['GSW']==4) include "gf2gfBRSSI.php";
if($_GET['GSW']==5) include "gf2gfBRSso.php";
else  include "gf2gf.php";

// include "gf2gw.php";

?>


