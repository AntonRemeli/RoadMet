<?php       // NE SME GORE PRAZAN RED !!
//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

$loop=0;
while ($rowm = mysqli_fetch_array($sss_prv, MYSQLI_ASSOC))
{

	$measure_time[$loop]=$rowm[measure_time];
//	$air_temp[$loop]=$rowm[air_temp];  //4050: xps_stp ipak ne daje dobre vrijednosti//4208:  tako je
	$air_temp[$loop]=$rowm[air];
//	$rel_hum[$loop]=$rowm[rel_hum];
	$rel_hum[$loop]=$rowm[hum];
 if($stNo==9502 )	$rel_hum[$loop]=$rowm[rel_hum];
	$hum[$loop]=$rowm[hum];
	$precip_imp_int[$loop]=$rowm[precip_imp_int];
	$precip_imp_lng[$loop]=$rowm[precip_imp_lng];
	$surf_temp[$loop]=$rowm[surf_temp];
//	$surf_temp[$loop]=$rowm[surft];
	$surft[$loop]=$rowm[surft];
	$surf_deep_temp[$loop]=$rowm[surf_deep_temp];
	$surf_salt_sat[$loop]=$rowm[surf_salt_sat];
	$surf_salt_pri[$loop]=$rowm[surf_salt_pri];
	$surf_water_depth[$loop]=$rowm[surf_water_depth];

	$Value_0[$loop] = $rowm[Value_0];
	$Value_1[$loop] = $rowm[Value_1];
	$Value_2[$loop] = $rowm[Value_2];
	$Value_3[$loop] = $rowm[Value_3];
	$Value_4[$loop] = $rowm[Value_4];
	$Value_5[$loop] = $rowm[Value_5];
	$Value_6[$loop] = $rowm[Value_6];
	$Value_7[$loop] = $rowm[Value_7];
	$precip_stat2[$loop] = $rowm[precip_stat2];
	$precip_stat3[$loop] = $rowm[precip_stat3];
        $loop++;
}

  $surf_salt_pri0[$stNo] =  $surf_salt_pri[0];

$ido1R=$measure_time[0];
        $measure_time0[$stNo]=$measure_time[0];
	$air_temp0[$stNo]=$air_temp[0];
//if($rel_hum[0]<20) $rel_hum0= 80;
//else $rel_hum0=$rel_hum[0];
	$rel_hum0[$stNo]=$rel_hum[0];
	$hum0[$stNo]=$hum[0];
	$surf_temp0[$stNo]=$surf_temp[0];
	$surft0[$stNo]=$surft[0];
	$surf_deep_temp0[$stNo]=$surf_deep_temp[0];
$surf_water_depth0[$stNo]=$surf_water_depth[0];
	$precip_stat30[$stNo] = $precip_stat3[0];
	$Rmmx[$stNo] = $Value_5[0];
	$Rmmk[$stNo] = $Value_6[0];
 
        $measure_timeD[$stNo]=120;
	$air_tempD[$stNo]=0;
	$rel_humD[$stNo]=0;
	$surf_tempD[$stNo]=0;
	$air_tempDD[$stNo]=0;
	$rel_humDD[$stNo]=0;
	$surf_tempDD[$stNo]=0;
	$surf_deep_tempD[$stNo]=0;
	// $suaDD[$stNo]=0;
	// $suaD[$stNo]=0;
	// $Wm0[$stNo]=0;

$sim[$stNo]=1;
$sir[$stNo]=0;
$kiss[$stNo]=1;

if($rel_hum0[$stNo]>111) $rel_hum0[$stNo]=40;



//include "mid_csActM.php";  //to use the Midvalues

//  	station_id	measure_time	mta	mtp	rel_hum	air_dew_temp	air_temp	surf_temp	surf_deep_temp	surf_freez_temp	surf_salt_pri	surf_salt_sat	surf_condition	Value_7	Value_6	Value_5	Value_4	Value_3	Value_2	Value_1	Value_0	rain_int	surf_water_depth	precip_stat	precip_imp_int	precip_imp_lng	AccuV	door_contact	precip_stat1	precip_stat2	precip_stat3	wind1	wind2	wind3	wind4	wind5	snow	hum	air	surft	surfdt	xps_time

	$queryLM = "SELECT * FROM  last_data  where   station_id=$stNo ";

 $reLM = mysqli_query($sql_connect,$queryLM);
$rowLM = mysqli_fetch_array($reLM, MYSQLI_ASSOC);

	$ido1wM=$rowLM[mta]-120;

	// Midvalues:

	$air_tempM[$stNo]=$rowLM[air_temp];
	$rel_humM[$stNo]=$rowLM[rel_hum];
	$surf_tempM[$stNo]=$rowLM[surf_temp];
if($surf_tempM[$stNo]*$surf_tempM[$stNo]>3600) $surf_tempM[$stNo]=7;//$rowLM[air_temp];

	$surf_deep_tempM[$stNo]=$rowLM[surf_deep_temp];

$stk[$stNo]=$rowLM[door_contact];
if($stk[$stNo]>2) $stk[$stNo]=2;


             ?>
