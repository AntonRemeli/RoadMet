
<?php  

//$ido1s=mktime(0,0,0,11,1,2007);
//$ido2s=mktime(0,0,0,2,1,2008);
//if (isset($_GET['ido1']) && isset($_GET['ido2']))	{$ido1s = $_GET['ido1']; $ido2s = $_GET['ido2'];}


if (isset($_GET['bn']))				$bn = $_GET['bn'];
if (isset($_GET['bv']))				$bv = $_GET['bv'];
if (isset($_GET['lgn']))			$lgn = $_GET['lgn'];
if (isset($_GET['pwd']))			$pwd = $_GET['pwd'];
if (isset($_GET['usn']))			$usn = $_GET['usn'];
if (isset($_GET['pass']))			$pass = $_GET['pass'];
if (isset($_GET['cty']))			$cty = $_GET['cty'];
if (isset($_GET['régg']))			$regg = $_GET['régg'];
if (isset($_GET['strm']))			$strm = $_GET['strm'];
if (isset($_GET['cmd']))			$cmd = $_GET['cmd'];
if (isset($_GET['th']))				$th = $_GET['th'];
if (isset($_GET['dd']))				$dd = $_GET['dd'];
if (isset($_GET['dd1s']))			$dd1s = $_GET['dd1s'];
if (isset($_GET['dd2s']))			$dd2s = $_GET['dd2s'];
//if (isset($_GET['ido1']))		echo "ido1: ".		$ido1 = $_GET['ido1'];
//if (isset($_GET['ido2']))		echo "ido2: ".		$ido2 = $_GET['ido2'];
//if (isset($_GET['ido1s']))			$ido1s = $_GET['ido1s'];
//if (isset($_GET['ido2s']))			$ido2s = $_GET['ido2s'];  //depreciated 2.11.2011
if (isset($_GET['add']))			$add = $_GET['add'];
if (isset($_GET['gim']))   			$gim = $_GET['gim'];
if (isset($_GET['stk']))			$stk = $_GET['stk'];
if (isset($_GET['c']))				$c = $_GET['c'];
if (isset($_GET['cc']))				$cc = $_GET['cc'];
if (isset($_GET['cal']))			$cal = $_GET['cal'];
if (isset($_GET['GSW']))			$GSW = $_GET['GSW'];
if (isset($_GET['KIB']))			$KIB = $_GET['KIB'];
if (isset($_GET['qYr']))			$qYr = $_GET['qYr'];
if (isset($_GET['qMt']))			$qMt = $_GET['qMt'];
if (isset($_GET['qDy']))			$qDy = $_GET['qDy'];
//if (isset($_GET['qYr']))	echo "qYr: ".	$qYr = $_GET['qYr'];
//if (isset($_GET['qMt']))	echo "qMt: ".	$qMt = $_GET['qMt'];
//$aT = 1;
//if (isset($_GET['aT']))			$aT = $_GET['aT'];
if (isset($_GET['aa']))			$aa = $_GET['aa'];
//if($aa==0){
//if($KIB==1){
if($cmd>1){
if (isset($_GET['ido1']))			$ido1 = $_GET['ido1'];
if (isset($_GET['ido2']))			$ido2 = $_GET['ido2'];
if (isset($_GET['in_ido1']))	$in_ido1 = $_GET['in_ido1'];	
if($in_ido1=='') $in_ido1=$ido1;
}
$aa=0;

$tm1s = time()-15*86400;

//echo "\n Yrs: ".
$Yrs=date("y",time());
//echo "\n Mts: ".
$Mts=date("m",time());
//echo "\n Dys: ".
$Dys=date("d",time());

if($qYr=='') $qYr=date("y",time());
if($qMt=='') $qMt=date("m",time());
if($qDy=='') $qDy=date("d",time());


//echo "ido2: ".$ido2;
$tm2s = $ido2-0.15*86400;


if ($tm1<2) 		$tm1=date('Y-m-d',$tm1s);


if ($cty=='')		$cty = $ct;
if ($cmd=='')		$cmd = 1;
if ($th=='')		$th = 1;
if ($dd1s=='')		$dd1s = 9025;
if ($dd2s=='')		$dd2s = 9544;
if ($dd!='')		{$dd1s = $dd-1; $dd2s = $dd+1;}
if ($ido1=='')		$ido1 = time()-86400;
//if ($ido2=='')		$ido2 = time()+7200;
if ($ido2=='')		$ido2 = time();
if ($ido1>=$ido2)	{	$ido1 = time()-86400;		$ido2 = time();}
if ($add=='')		$add = 60;
if ($stk=='')		$stk = 0;
//if ($dd='')		$dd = $stNo;

 include "sess.php";



?>
