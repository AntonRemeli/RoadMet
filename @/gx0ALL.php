<?php  
// error_reporting(E_ALL);
 error_reporting(0);

        $dd = $_SERVER['argv'][1]/1;
	$ido1 = $_SERVER['argv'][2];
	$ido2 = $_SERVER['argv'][3];
	$L = $_SERVER['argv'][4];
	$lgn = $_SERVER['argv'][5];

	
include ("<?php echo $hE; ?>/MKA/graph/jpgraph.php");
include ("<?php echo $hE; ?>/MKA/graph/jpgraph_line.php");

//	include "session.php";
//include "sess.php";
//echo $sess;

//include "gf2gf.php".$sess."&L=".$L;
//include "gf2gf.php".$sess;
include "gf2gf.php";

?>


