
<?php   

$ido2=time();

//  	station_id	measure_time	mta	mtp	rel_hum	air_dew_temp	air_temp	surf_temp	surf_deep_temp	surf_freez_temp	surf_salt_pri	surf_salt_sat	surf_condition	Value_7	Value_6	Value_5	Value_4	Value_3	Value_2	Value_1	Value_0	rain_int	surf_water_depth	precip_stat	precip_imp_int	precip_imp_lng	AccuV	door_contact	precip_stat1	precip_stat2	precip_stat3	wind1	wind2	wind3	wind4	wind5	snow	hum	air	surft	surfdt	xps_time

	$queryLD = "SELECT * FROM  last_data  where   station_id=$stNo ";
 $reLD = mysqli_query($sql_connect,$queryLD);
$rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC);

//$measure_time[$stNo]=$rowLD[mta];
$measure_time[$stNo]=$rowLD[measure_time];
//$measure_time[$stNo]=1111111111;

	$air_dew_temp[$stNo]=$rowLD[air_dew_temp];
	$air[$stNo]=$rowLD[air];
	$hum[$stNo]=$rowLD[hum];
	$surft[$stNo]=$rowLD[surft];
	$surfdt[$stNo]=$rowLD[surfdt];


	$surf_freez_temp[$stNo]=$rowLD[surf_freez_temp];
	$surf_salt_sat[$stNo]=$rowLD[surf_salt_sat];
	$surf_salt_pri[$stNo]=$rowLD[surf_salt_pri];

	$surf_condition[$stNo]=$rowLD[surf_condition];
	$surf_water_depth[$stNo]=$rowLD[surf_water_depth];
	$rain_int[$stNo]=$rowLD[rain_int];
	$precip_stat[$stNo]=$rowLD[precip_stat];


  $AccuV[$stNo] = $rowLD[AccuV];

	//needed for wind&presentweather detectors:

	$wind1[$stNo] = $rowLD[wind1];
	$wind2[$stNo] = $rowLD[wind2];
	$wind3[$stNo] = $rowLD[wind3];
	$wind4[$stNo] = $rowLD[wind4];
	$wind5[$stNo] = $rowLD[wind5];
	$snow[$stNo] = $rowLD[snow];


 	$Value_0[$stNo] = $rowLD[Value_0];
	$Value_1[$stNo] = $rowLD[Value_1];
	$Value_2[$stNo] = $rowLD[Value_2];
	$Value_3[$stNo] = $rowLD[Value_3];
	$Value_4[$stNo] = $rowLD[Value_4];
	$Value_5[$stNo] = $rowLD[Value_5];
	$Value_6[$stNo] = $rowLD[Value_6];
	$Value_7[$stNo] = $rowLD[Value_7];

	// Midvalues:
/*
	$air_tempM[$stNo]=$rowLD[air_temp];
	$rel_humM[$stNo]=$rowLD[rel_hum];
	$surf_tempM[$stNo]=$rowLD[surf_temp];
	$surf_deep_tempM[$stNo]=$rowLD[surf_deep_temp];
*/



?>
