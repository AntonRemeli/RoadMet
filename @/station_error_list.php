
<html>
<head>
<title>UTMET - Szerver</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="js/style" rel="stylesheet" type="text/css">
<body bgcolor="#D3D2B6" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
  <div align="center"> </div>
<h1><?php   echo $MeghibásodottUTMETállomások;?> :</h1> 
 						<table width="650" height="25" border="0" cellspacing="2">
              				<tr align="center"> 
                				<td width="25%" bgcolor="#CCFF99" class="midgreyBoldCopy"> &gt; 2 <?php   echo $óra;?></td>
                				<td width="25%" bgcolor="#FFFF66" class="midgreyBoldCopy">&gt; 12 <?php   echo $óra;?></td>
                				<td width="25%" bgcolor="#FF9900" class="midgreyBoldCopy">&gt; 24 <?php   echo $óra;?></td>
                				<td width="25%" bgcolor="#FF0000" class="midgreyBoldCopy">&gt; 1 <?php   echo $hét;?></td>
              				</tr>

<?php  


$MOD="station_error_list.php";
include "LM.php";
include "log.php";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
 
$local_time=time();
$start_time=time()-365*86400;
$end_time=time()-7200;
$st1=9000+10*$c;
 $st2=9000+10*$cc;


//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

$queryl = "SELECT * FROM last_data where  measure_time>$start_time and measure_time<$end_time and station_id>$st1 and station_id<$st2  order by station_id";
$resl = mysqli_query($sql_connect,$queryl);
while (	$rowsl = mysqli_fetch_array($resl, MYSQLI_ASSOC))
{
	$station_time=$rowsl[measure_time];
	$station_id=$rowsl[station_id];

//  sid  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
								
$query = "SELECT * FROM stations where st_id=$station_id and st_id>$st1 and st_ort!='' ORDER BY st_id ";								
$res = mysqli_query($sql_connect,$query);
$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
$st_id=$rows[st_id];
$st_Ort=$rows[st_Ort];
if($st_Ort>''){
								$color = "";
								$color_dsc="";	
		if ($local_time-$station_time>7200)	{$color = "#CCFF99"; $color_dsc="&gt;2".$óra;}
		if ($local_time-$station_time>43200)	{$color = "#FFFF66"; $color_dsc="&gt;12".$óra;}
		if ($local_time-$station_time>86400)	{$color = "#FF9900"; $color_dsc="&gt;24".$óra;}
		if ($local_time-$station_time>604800)	{$color = "#FF0000"; $color_dsc="&gt;1".$hét;}
						?>							              					
              				<tr bgcolor="<?php  echo $color;?>"> 
<td width="87" height="20" align="center" class="smallgreyBold"><a href="<?php   echo $INDEX;?>&cmd=2&dd=<?php   echo $st_id;?>" target="_blank"><?php   echo $st_id;?></a></td>
<td width="200" height="20" align="left" class="midgreyBoldCopy"><a href="<?php   echo $INDEX;?>&cmd=4&dd=<?php   echo $st_Ort;?>" target="_blank"><?php   echo $st_Ort;?></a></td>
			
<td width="209" height="20" class="midgreyBoldCopy" align=center><?php   echo date("Y-m-d H:i",$station_time);?></td>
<td width="68" height="20" align="center" valign="middle" class="midgreyBoldCopy"><?php   echo $color_dsc;?></td>
              				</tr>              			
<?php  } }	?>
             			</table>
  
</body>
</body>	  
</html>
<?php  
				mysqli_close ($sql_connect);


//	include "servAll.php";
//	include "servLst.php";

?>





