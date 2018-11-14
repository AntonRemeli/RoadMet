
<table width=700 >
<td align="left">
<?php     //php START ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$MOD="Rus.php";
include "LM.php";
include "log.php";
/*
$rStrM="u";
$login=$_GET['lgn'];
$passw=$_GET['pwd'];
if ($login=='' || $passw=='')
{
	header("Location: utmet.php");
}
//int mktime ([ int $hour [, int $minute [, int $second [, int $month [, int $day [, int $year [, int $is_dst ]]]]]]] )
 */

$ido1s=mktime(0,0,0,11,1,2007);
$ido2s=mktime(0,0,0,2,1,2009);


	$dd1s = 9025;
	$dd2s = 9233;
if($lgn=="Xps") $dd2s = 9999;

if (isset($_GET['dd']) && $_GET['dd']>1)
{
   $dd1s = $_GET['dd']-1;
   $dd2s = $_GET['dd']+1;
}
if (isset($_GET['dd1']) && isset($_GET['dd2']))
{
   $dd1s = $_GET['dd1'];
   $dd2s = $_GET['dd2'];
}

if($dd2s-$dd1s==2) $dd=$dd1s+1;


if (isset($_GET['ido1']) && isset($_GET['ido2']))
{
	$ido1s = $_GET['ido1'];
	$ido2s = $_GET['ido2'];
if($ido2s-$ido1s<100000) $ido1s=mktime(0,0,0,02,10,2010);
}
	$kada1=date('Y-m-d H:i:s',$ido1s);
	$kada2=date('Y-m-d H:i:s',$ido2s);
 
 include("mid_fej.php"); 
 include("mid_dat.php"); 


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$queryW = "SELECT * FROM users   where user='$lgn' ";
//  Id  user  pass  county  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email   
$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);



//$queryR = "SELECT * FROM usRegs   where rId=$rowW[reg] ";
//  rId  rDept  rBusinessStreet  rBusinessCity  rBusinessPostalCode  rPhn  rFax  rEmail  rFom  rOv
$queryR = "SELECT * FROM usRegs   where rId=$regg ";

$resR = mysqli_query($sql_connect,$queryR);
$rowR = mysqli_fetch_array($resR, MYSQLI_ASSOC);

echo "<h3><big>".$rowR[rDept]."</big></h3><h3>  területén végzett szervízmunkák áttekintése 
	(<small> ".$kada1=date('Y-m-d ',$ido1s)." -- ".$kada2=date('Y-m-d ',$ido2s)."</small>): </h3> <br>";

//$queryU = "SELECT * FROM users   where reg=$rowW[reg] order by strm";
$queryU = "SELECT * FROM users   where reg=$regg order by strm";
if($lgn=="Xps"  && ($regg=='' || $regg==0)) $queryU = "SELECT * FROM users   order by strm";
//  Id  user  pass  county  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email   
$resU = mysqli_query($sql_connect,$queryU);
while ($rowU = mysqli_fetch_array($resU, MYSQLI_ASSOC))
{  //UM START ..............................................................

//	echo "<table><b>". $rowU[cDept]."</b></table><table>";
	
//	$queryS = "SELECT * FROM station_extra  where  StrM=$rowU[strm] ";
//  MS_No  OrtNo  Ort  Typ  StrNo  Kmm  m  Lat  Latm  Alt  Altm  KlimaZ  cCompany  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  StrM  
	
	//  sid  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
 	$queryS = "SELECT * FROM stations  where  StrM=$rowU[strm] ";
  
	$resS = mysqli_query($sql_connect,$queryS);
while ($rowS = mysqli_fetch_array($resS, MYSQLI_ASSOC))
{     // ST START   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if ( $rowS[st_id]>$dd1s && $rowS[st_id]<$dd2s && $rowS[StrM]==$rowU[strm] )
{
if($rStrM!=$rowU[strm])	echo "<table><br> <br> <b>". $rowU[cDept]."</b></table><table border='1' cellspacing='0' cellpadding='3' >";
$rStrM=$rowU[strm];
?>

<tr <?php   if($rowS[st_txt]<-99)  echo 'bgcolor="#0000cc"'; ?><?php   if($rowS[st_txt]<-8 || $rowS[st_txt]==-1)  echo 'bgcolor="#cc0000"'; ?><?php   if($rowS[st_txt]<-1 && $rowS[st_txt]>-9)  echo 'SZERVÍZ FOLYAMATBAN!'; ?>>
	<td width="2%"> <?php  echo $rowS[st_id];?></td>
	<td width="2%">   </td>
	<td width="32%">  <b>  <?php  echo $rowS[st_Ort];?> </b> <br>  <?php  echo  $rowS[StrNo];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td width="42%"> <b>   <?php  echo  $rowS[megj];?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td width="22%"><b><?php   if($rowS[st_txt]<-99 || $rowS[st_txt]>99)  echo 'NINCS SZERZODÉS!'; ?><?php   if($rowS[st_txt]<-8 && $rowS[st_txt]>-99)  echo 'BEAVATKOZÁS SZÜKSÉGES!'; ?><?php   if($rowS[st_txt]==-1)  echo 'BEAVATKOZÁS SZÜKSÉGES!'; ?><?php   if($rowS[st_txt]<-1 && $rowS[st_txt]>-9)  echo 'bgcolor="#00cc00"'; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<tr>	
<?php  	
}

$querys = "SELECT * FROM servs where stno=$rowS[st_id] and kada>'$kada1' and kada<'$kada2' and stat>-222 ";
//$querys = "SELECT * FROM servs where stno=$rowS[MS_No]  ";
//  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   

$ress = mysqli_query($sql_connect,$querys);

while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
//$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
{     // SVS START  ###########################################################################
		
$qsvid=$rows[svid];
$qstno=$rows[stno];
$qstat=$rows[stat];
$qstxt=$rows[stxt];
//$qtodo=$rows[todo];
$qdone=$rows[done];
$qdiag=$rows[diag];
$qkada=$rows[kada];
$qsvCd=$rows[svCd];

if ( $rows[stno]>$dd1s && $rows[stno]<$dd2s )
{   // if START  iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
/*
	echo "<table><b>". $rowU[cDept]."</b></table><table>";
 
	echo "<tr><td></td><td>". $rowS[MS_No]."</td>";
	echo "<td>    ". $rowS[Ort]."</td>";
	echo "<td>    ". $rowS[StrNo]."</td>";
*/	
// <form name="service" method="get" action="index.php?cmd=$cmd&lgn=$login">

?>

	<tr border='1' cellspacing='0' cellpadding='3'
<?php   if($qstat<-99)  echo 'bgcolor="#0000cc"'; ?>
<?php   if($qstat<-8 && $qstat>-99)  echo 'bgcolor="#cc0000"'; ?>
<?php   if($qstat==-1)  echo 'bgcolor="#cc0000"'; ?>
<?php   if($qstat<-1 && $qstat>-9)  echo 'bgcolor="#00cc00"'; ?>
>


      <td width="2%"><?php  echo $qsvid;?></td>
      <td width="2%"><?php  echo $qstat;?></td>
      <td width="32%"><?php  echo $qstxt;?></td>
      <td width="42%"><?php  echo $qdone;?></td>
      <td width="22%"><?php  echo $qkada;?></td>
   <td width="1%"><a href='servRpt.php<?php  echo $sess;?>&svid=<?php  echo $qsvid;?>&svC=<?php  echo $qsvCd;?>' target="blank" ><?php  if($regZ==$reg) echo "<img src='../kepek/buttons/sm_ki4.gif' width='80' height='25' border='0'>";?></a></td>  

</tr>

<?php  
}  // if END  iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
}   // SVS END  ###########################################################################

}      // ST END   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

if ( $rowS[MS_No]>$dd1s && $rowS[MS_No]<$dd2s && $rowS[StrM]==$rowU[strm] )
{	
?>
</table>
<?php  
}
}    //UM END ..............................................................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



mysqli_close ($sql_connect);


 //php END: ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>
</td>
</table>

<table>
<td align="right">
 <a href="<?php  echo $INDEX;?>&cmd=25;?>"><h3><?php  echo $rowR[rDept];?><br> teljesítési igazolásának nyomtatása </h3></a> 
</td>
</table>
