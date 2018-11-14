<?php  
//error_reporting(E_ALL);

error_reporting(0);
include "LM.php";
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$treshold=time()-86400;

//  id  user_name  name  query  description  phone  text  station_id  last_alert  Mtime  Mdate  
$queryal = "SELECT * FROM alert where user_name='$lgn' order by station_id, id ";
$resal = mysqli_query($sql_connect,$queryal);
$loopal=0;

while($rowsal = mysqli_fetch_array($resal, MYSQLI_ASSOC))
{  //AAA
	$query = $rowsal[query];
	$ar = $rowsal[id];
	$ur = $rowsal[user_name];
       	$stNo = $rowsal[station_id];
 if((time()-$rowsal[Mtime])>5400 )
	{  //BBB 
		//  id station_id measure_time mta mtp air_temp air_dew_temp rel_hum precip_imp_int precip_imp_lng surf_temp surf_deep_temp surf_salt_sat surf_salt_pri surf_water_depth surf_freez_temp surf_condition Value_7 Value_6 Value_5 Value_4 Value_3 Value_2 Value_1 Value_0 precip_stat1 precip_stat2 precip_stat3 door_contact AccuV hum air surft surfdt 
 $queryLD = "SELECT  * FROM  last_data where station_id=$rowsal[station_id] order by station_id  ";
 $reLD = mysqli_query($sql_connect,$queryLD);

$rowLD = mysqli_fetch_array($reLD);
{    /// measure START

if($rowLD[mta]>$treshold )
{   	// treshold START
	$measure="stations.S".$stNo;
//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
$querym2 = "SELECT  *  FROM  $measure  where station_id=$stNo and measure_time=$rowLD[mta] " ;
$rem2 = mysqli_query($sql_connect,$querym2);
$rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC);
	$air_dew_temp[$stNo]=$rowm[air_dew_temp];
	$air[$stNo]=$rowm[air];
	$hum[$stNo]=$rowm[hum];
	$_salt_sat[$stNo]=$rowm[surf_salt_sat];
	$surf_salt_pri[$stNo]=$rowm[surf_salt_pri];
	$surf_condition[$stNo]=$rowm[surf_condition];
	$surf_water_depth[$stNo]=$rowm[surf_water_depth];
	$rain_int[$stNo]=$rowm[rain_int];
	$precip_stat[$stNo]=$rowm[precip_stat];

$fd = fopen("<?php echo $hE; ?>/Arm/Rqq".$rowsal[id].".php", "w") or die("Can't open file");
fwrite($fd, "<?php    ".$rowsal[query]."  ".$rowsal[S]."a=1; else  ".$rowsal[S]."a=0; ?>");
fclose($fd);
$loopal++;
//echo "xxx ".$ar;
	include "../Arm/Rqq".$ar.".php";
if($a)
{   //CCC 
	if($ur==$lgn)
	{	//DDD
?>
  <script type="text/javascript" src="../js/B3pop.js"></script>	
	<script type="text/javascript" language="JavaScript">
 setTimeout('openPopWin("Riaszt.php?rid=<?php  print($ar);?>", 400, 500, "resizable",80,40)',1);
    </SCRIPT>
<?php  
	}   //DDDend
?>
   <tr>  <td class="smallgreyBold"><a href="Riaszt.php?rid=<?php  print($ar);?>" target="_blank"><?php  echo $OMSZ ;?><?php  echo " ".$stNo." ".$query." <b> ". $RIASZTÁS;?></a> </td></tr> </b>
<?php  
}   //CCCend
 echo "  riasztási feltétele nem teljesült.";
}   //treshold END
sleep(1);
}  //measure END 
	} // BBBend     
 else echo " ".$rowsal[station_id]."  állomás ".$rowsal[id]." számú <b> ".$rowsal[query]." </b> nyugtázott riasztása másfél óráig le van parkolva <br>";
} /// AAAend
mysqli_close ($sql_connect);
?>


  
