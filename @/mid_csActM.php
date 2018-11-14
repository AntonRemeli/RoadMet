
<?php   

$ido2=time();

//  	station_id	measure_time	mta	mtp	rel_hum	air_dew_temp	air_temp	surf_temp	surf_deep_temp	surf_freez_temp	surf_salt_pri	surf_salt_sat	surf_condition	Value_7	Value_6	Value_5	Value_4	Value_3	Value_2	Value_1	Value_0	rain_int	surf_water_depth	precip_stat	precip_imp_int	precip_imp_lng	AccuV	door_contact	precip_stat1	precip_stat2	precip_stat3	wind1	wind2	wind3	wind4	wind5	snow	hum	air	surft	surfdt	xps_time

	$queryLD = "SELECT * FROM  last_data  where   station_id=$stNo ";
 $reLD = mysqli_query($sql_connect,$queryLD);
$rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC);




	// Midvalues:

//	$air_tempM[$stNo]=$rowLD[air_temp];
//	$rel_humM[$stNo]=$rowLD[rel_hum];
//	$surf_tempM[$stNo]=$rowLD[surf_temp];
//	$surf_deep_tempM[$stNo]=$rowLD[surf_deep_temp];




?>
