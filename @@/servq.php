<?php  
//  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd  

$qsvid=$rowS[svid];
$qstno=$rowS[stno];
$qstat=$rowS[stat];
$qstxt=$rowS[stxt];
$qtodo=$rowS[todo];
$qdone=$rowS[done];
$qdonk=$rowS[donk];
//echo 
	$qdiag=$rowS[diag];
$qwho=$rowS[who];
$qkada=$rowS[kada];
$qdinp=$rowS[dinp];
//echo 
$qsTyp=$rowS[sTyp];
$qsvCd=$rowS[svCd];


// 2008-08-22 13:00:00

$qYrs=$qkada[0]."".$qkada[1]."".$qkada[2]."".$qkada[3];

$qMth=$qkada[5]."".$qkada[6];
$qDay=$qkada[8]."".$qkada[9];
$qHrs=$qkada[11]."".$qkada[12];
$qMin=$qkada[14]."".$qkada[15];
$qSec=$qkada[17]."".$qkada[18];

$qkadU=mktime($qHrs,$qMin,$qSec,$qMth,$qDay,$qYrs,-1);
//$qkadU=mktime(13,0,0,11,14,2008,-1);
$qkad1=$qkadU-3600*4;
$qkad2=$qkadU+3600*20;
$qkat1=$qkadU-3600*1;
$qkat2=$qkadU+3600*4;
?>
