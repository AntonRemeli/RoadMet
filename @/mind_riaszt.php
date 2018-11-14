<html>
<head>

</head>


<body  bgcolor="#D3f2B6"   >



<table width="100%">
<tr><td><a name="toPs" href="#toLs" target="_self"> <b> <?php  echo $Leazoldalaljára?><?php   echo ">>";?></b>  </a></td></tr>
</table>

<?php  
//error_reporting(E_ALL);

include "LM.php";
//echo "aaaaa".$L;
error_reporting(0);

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$gM=$_GET['megye'];

$querus = "SELECT * FROM users ";
$reus = mysqli_query($sql_connect,$querus);

while($rous = mysqli_fetch_array($reus, MYSQLI_ASSOC))
{
$uid = $rous[Id];
$usr[$uid] = $rous[user];
$county[$uid] = $rous[county];
$Dept[$uid] = $rous[cDept];
$Tel[$uid] = $rous[cPhn];
if($usr[$uid]==$lgn) {$uid0 = $rous[Id]; $cnt0=$county[$uid]; }
if($county[$uid]>$county0 && $county[$uid]==$gM) $uidM[$gM] = $rous[Id];
//if($usr[$uid]==$lgn && $county[$uid]==$_GET['megye']) $uid0 = $rous[Id];

$county0=$county[$uid];
}
//echo $usrid = $uid0;
$usrid = $_GET['uid'];
if(!$_GET['uid']) $usrid = $uid0;
//if($_GET['megye']<>$cnt0) $usrid = $uidM[$gM];

//$lgn = $_SESSION['lgn'];
//echo "lgn: ".$lgn." ;     riasztásra készenlétben: ";
?>
<table width="100%">
<tr>
   <td width="10%" valign=middle onClick="LeftU()"  onDblClick="LeftUU()" ><img src="../kepek/buttons/aL.png" width=8 height=14 > </td>
   <td width="80%"> <?php   echo " ".$uid0." / ".$usrid.":<b>  ".$Dept[$usrid]." </b> (".$Tel[$usrid].") <?php  echo $alábbiállomásai?>: ";?> </td>
   <td  width="10%" valign=middle onClick="RightU()" onDblClick="RightUU()" ><img src="../kepek/buttons/aR.png" width=8 height=14 > </td>
  
	   </tr>
</table>

<?php  

$treshold=time()-86400;

//  id  user_name  name  query  description  phone  text  station_id  last_alert  Mtime  Mdate  
$queryal = "SELECT * FROM alert where user_name='$usr[$usrid]' order by station_id, id ";
$resal = mysqli_query($sql_connect,$queryal);
$loopal=0;


while($rowsal = mysqli_fetch_array($resal, MYSQLI_ASSOC))
{  //AAA
//echo "station_id: ".$rowsal[station_id];

 if((time()-$rowsal[Mtime])>5400 )
	{  //BBB 
//echo "station_id2: ".$rowsal[station_id];
		
		//  id station_id measure_time mta mtp air_temp air_dew_temp rel_hum precip_imp_int precip_imp_lng surf_temp surf_deep_temp surf_salt_sat surf_salt_pri surf_water_depth surf_freez_temp surf_condition Value_7 Value_6 Value_5 Value_4 Value_3 Value_2 Value_1 Value_0 precip_stat1 precip_stat2 precip_stat3 door_contact AccuV hum air surft surfdt 
 $queryLD = "SELECT  * FROM  last_data where station_id=$rowsal[station_id] order by station_id  ";
 $reLD = mysqli_query($sql_connect,$queryLD);

$rowLD = mysqli_fetch_array($reLD);
{    /// measure START

if($rowLD[mta]>$treshold )

{   	// treshold START

	$measure="stations.S".$dd;
$stNo = $dd;
//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

$querym2 = "SELECT  *  FROM  $measure  where station_id=$rowsal[station_id] and measure_time=$rowLD[mta] " ;
$rem2 = mysqli_query($sql_connect,$querym2);

$rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC);

	$air_dew_temp[$stNo]=$rowm[air_dew_temp];
	$air[$stNo]=$rowm[air];
	$hum[$stNo]=$rowm[hum];
	$surft[$stNo]=$rowm[surft];
	$surfdt[$stNo]=$rowm[surfdt];


	$surf_freez_temp[$stNo]=$rowm[surf_freez_temp];
	$surf_salt_sat[$stNo]=$rowm[surf_salt_sat];
	$surf_salt_pri[$stNo]=$rowm[surf_salt_pri];

	$surf_condition[$stNo]=$rowm[surf_condition];
	$surf_water_depth[$stNo]=$rowm[surf_water_depth];
	$rain_int[$stNo]=$rowm[rain_int];
	$precip_stat[$stNo]=$rowm[precip_stat];

/*
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w+') or die("can't open file");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);
// */

$fd = fopen("<?php echo $hE; ?>/Arm/Rqq".$rowsal[id].".php", "w") or die("Can't open file");
fwrite($fd, "<?php    ".$rowsal[query]."  ".$rowsal[S]."a=1; else  ".$rowsal[S]."a=0; ?>");
fclose($fd);

/*
$fp = fopen("<?php echo $hE; ?>/Arm/Rqq.php", "r+"); 

while($buf = fgets($fp))
{ 
if(preg_match("/strawberry/", $buf))
	{ 
	fputs($fp,"                                                                                                                                                                                        "); 
//	fputs($fp, "newline"); 
	} 
} 

$fp2 = fopen("<?php echo $hE; ?>/Arm/Rqq.php", "r+"); 

while($buf2 = fgets($fp2))
{ 
if(preg_match("/strawberry/", $buf2))
	{ 
	fputs($fp2,$rowsal[query]); 
//	fputs($fp, "newline"); 
	} 
} 

 */



?>
<table width="100%">
<tr>
<td width="10%"> <?php  print($rowsal[station_id]);?><td></td>
<td width="90%">
<IFRAME name="x" src="Rq.php<?php  echo $sess?>&qq=<?php  print($rowsal[query]);?>&L=<?php  echo $L?>&dd=<?php  print($rowsal[station_id]);?>&mt=<?php  print($rowLD[mta]);?>&ar=<?php  print($rowsal[id]);?>&ur=<?php  print($rowsal[user_name]);?>" width="100%" align="left" style="position:relative;  height:40px; top:-3px; left:0px">   </IFRAME>
</td>
</tr>
</table> 
<?php  
	$loopal++;	
}   //treshold END
}  //measure END 

	} // BBBend 
 // else echo " ".$rowsal[station_id]." számú állomás <b> nyugtázott </b> riasztása másfél óráig le van parkolva <br>";
 else echo " ".$rowsal[station_id]."  állomás ".$rowsal[id]." számú <b> ".$rowsal[query]." </b> nyugtázott riasztása másfél óráig le van parkolva <br>";
} /// AAAend


?>

             



<script type="text/javascript">

usrid="<?php  echo $_GET['uid']; ?>";

dd="<?php  echo $_GET['dd']; ?>";

<?php   if(!$_GET['uid']) echo "usrid=".$uid0.";"; ?>

</script>

<?php   include "ArrowLRd.php";?>


<table  width="100%"> 
<tr>
<td><b><?php  print($Dept[$usrid]);?></b>  <?php  echo $nyugtázottriasztásai?>:</td>
</tr>
</table> 

<table  width="100%"> 
<?php  
//  nyid  alid  stid  user  cDept  who  altime  aldate  megj  
 
$querny = "SELECT * FROM nyugta where user='$usr[$usrid]' order by stid, altime ";
$renys = mysqli_query($sql_connect,$querny);

while($ronys = mysqli_fetch_array($renys, MYSQLI_ASSOC))
{
?>
<tr>
<td><?php  echo "  ".$stid = $ronys[stid];?></td>
<td><?php  echo "  / ".$alid = $ronys[alid];?></td>
<td><?php  echo " .  .  .  .  .  . ".$who = $ronys[who];?></td>
<?php  $raldate =date("Y.m.d",$ronys[altime]+22)." ".date("H:i",(round(($ronys[altime])/60)*60));?>
<td><?php  echo " .  .  .  .  .  . ".$aldate = $raldate;?></td>
</tr>
<?php  
}
mysqli_close ($sql_connect);
?>

 </table> 


<table  width="100%" align="left"> 


<tr><td>
<a name="toLs" href="#toPs" target="_self"> <b><?php   echo "<<";?> <?php  echo $Visszaazoldaltetejére?> </b>  </a></td></tr>
<tr><td></td><td> <b> <?php  echo $AzÚTMETrendszerbebeléptek?>:</b></td></tr>

<?php  
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//	uLid	strm	user	pasd	pase	pasf	cDept	who	usrIP	Ltime	Ldate
$queruL = "SELECT * FROM usrLogs where user='$usr[$usrid]'  order by -Ltime ";
$reuLs = mysqli_query($sql_connect,$queruL);
while($rouLs = mysqli_fetch_array($reuLs, MYSQLI_ASSOC))
{
?>
<tr>
<td><?php  echo " ".$rouLs[Ldate];?></td>
<td><b><?php  echo " &nbsp;&nbsp;&nbsp;&nbsp; ".$rouLs[who];?></b></td>
<td><?php  echo " &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs[cDept];?></td>


</tr>
<?php  
}
mysqli_close ($sql_connect);
?>

 </table>  


</body>
</html> 

  
