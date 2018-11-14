<?php  
//xxxxx
//echo " xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxps_at.php ";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

 
include "sel_st_data.php";

 
	$sta="stations.S".$stNo;

//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
//$sss_prv = mysqli_query($sql_connect,"SELECT  *  FROM  measure  where station_id=$dd and measure_time>=$ido1w-18000 and measure_time<$ido1w order by -measure_time ");
$sss_prv = mysqli_query($sql_connect,"SELECT  *  FROM  $sta  where measure_time>$ido1w0 and measure_time<=$ido1w and xps_time>'0000-00-00 00:00:00'  order by -measure_time ");


include "xps_stp0.php";


//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
 
$querym2 = "SELECT  *  FROM  $sta  where  measure_time>$ido1w and measure_time<$ido2w order by measure_time ";
$rem2 = mysqli_query($sql_connect,$querym2);
$num_rows = mysqli_num_rows( $rem2 ); 
//echo " num_rows : ".$num_rows;
$numr=0;
$mtaLD0=$ido1w;

// mysqli_close ($sql_connect); 

while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))

//looping measure START:
{
//$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//if($measure_time[$stNo]<$rowm[measure_time]) 
//{
	$measure_time[$stNo]=$rowm[measure_time];
	$xps_time[$stNo]=$rowm[xps_time];
$mtaLD=$mtaLD0;
$mtaLD0=$rowm[measure_time];

	$air_temp[$stNo]=$rowm[air_temp];
	$rel_hum[$stNo]=$rowm[rel_hum];
	$precip_imp_int[$stNo]=$rowm[precip_imp_int];
	$precip_imp_lng[$stNo]=$rowm[precip_imp_lng];
	$surf_temp[$stNo]=$rowm[surf_temp];
	$surf_deep_temp[$stNo]=$rowm[surf_deep_temp];
	$AccuV[$stNo]=$rowm[AccuV];	//3895:	-3	hamis szonda legyen napsugárzásfüggő

	$Value_0[$stNo] = $rowm[Value_0];
	$Value_1[$stNo] = $rowm[Value_1];
	$Value_2[$stNo] = $rowm[Value_2];
	$Value_3[$stNo] = $rowm[Value_3];
	$Value_4[$stNo] = $rowm[Value_4];
//	$Rmmx[$stNo] = $rowm[Value_5];  // future
//	$Rmmk[$stNo] = $rowm[Value_6];
	$Value_7[$stNo] = $rowm[Value_7];
	$precip_stat1[$stNo] = $rowm[precip_stat1];
	$precip_stat2[$stNo] = $rowm[precip_stat2];
	$precip_stat3[$stNo] = $rowm[precip_stat3];
if($stNo==9541) $precip_stat3[$stNo] = $rowm[precip_stat3]-2;
	
	$xps_time[$stNo] = date("Y.m.d",time()+22)." ".date("H:i:s",time());

$surf_water_depth[$stNo]=$surf_water_depth0[$stNo];
$surf_water_depthx[$stNo]=$surf_water_depth0[$stNo];

	
	include "clc_xps.php";
	include "meaSet.php";



$res42upS = mysqli_query($sql_connect,"UPDATE $sta SET $Set  WHERE measure_time=$measure_time[$stNo]");


//	$surf_salt_pri0[$stNo] =  $surf_salt_pri[$stNo];
 	$precip_stat30[$stNo] = $precip_stat3[$stNo];
//}
$numr++;
//if($numr==$num_rows) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd");
//if($numr==$num_rows && $ido2>=time()) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd");
//if($numr==$num_rows && $ido2>time()-600) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd"); //KATASTROFA:  && $ido2>time()-600
if($numr==$num_rows && $ido2w>time()-600) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd");
	//;if($numr==$num_rows) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd && measure_time=$rowmet");
}
 mysqli_close ($sql_connect); 

//looping measure END
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?>
