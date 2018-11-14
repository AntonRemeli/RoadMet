
<?php   
 

//echo "\n Yrs: ".
$Yrs=date("y",time());
//echo "\n Mts: ".
$Mts=date("m",time());
//echo "\n Dys: ".
$Dys=date("d",time());


if($qYr>'')
{
$time1Y = time()-($Yrs-$qYr)*365*86400;

$DyY=date("d",$time1Y);

$time1Y-= ($DyY-$Dys)*86400;

//if($qYr<8) $time1Y-= 86400;
//if($qYr<4) $time1Y-= 86400;
}


if($qMt>'')
{
$time1Y = $time1Y-($Mts-$qMt)*30*86400;

$DyY=date("d",$time1Y);

$time1Y-= ($DyY-$Dys)*86400;
}


if($qDy>'')
{
$time1Y = $time1Y-($Dys-$qDy)*86400;

$DyY=date("d",$time1Y);

//$time1Y-= ($DyY-$Dys)*86400;
}

//$time1Y +=222;

$ido2=$time1Y;
$ido1=$ido2-86400;

//	id	station_id	measure_time	rel_hum	air_dew_temp	air_temp	surf_temp	surf_deep_temp	surf_freez_temp	surf_salt_pri	surf_salt_sat	surf_condition	Value_7	Value_6	Value_5	Value_4	Value_3	Value_2	Value_1	Value_0	rain_int	surf_water_depth	precip_stat	precip_imp_int	precip_imp_lng	AccuV	door_contact	precip_stat1	precip_stat2	precip_stat3	hum	air	surft	surfdt	xps_time
$sta="stations.S".$stNo;
//echo "..".$stNo;
$qs = mysqli_query($sql_connect,"SELECT  *  FROM  $sta  where  measure_time<$time1Y   order by -measure_time limit 1  ");
$r = mysqli_fetch_array($qs, MYSQLI_ASSOC);

$measure_time[$stNo]=$r[measure_time];


	$air_dew_temp[$stNo]=$r[air_dew_temp];
	$air[$stNo]=$r[air];
	$hum[$stNo]=$r[hum];
	$surft[$stNo]=$r[surft];
	$surfdt[$stNo]=$r[surfdt];


	$surf_freez_temp[$stNo]=$r[surf_freez_temp];
	$surf_salt_sat[$stNo]=$r[surf_salt_sat];
	$surf_salt_pri[$stNo]=$r[surf_salt_pri];

	$surf_condition[$stNo]=$r[surf_condition];
	$surf_water_depth[$stNo]=$r[surf_water_depth];
	$rain_int[$stNo]=$r[rain_int];
	$precip_stat[$stNo]=$r[precip_stat];


  $AccuV[$stNo] = $r[AccuV];

	//needed for wind&presentweather detectors:
 	$Value_0[$stNo] = $r[Value_0];
	$Value_1[$stNo] = $r[Value_1];
	$Value_2[$stNo] = $r[Value_2];
	$Value_3[$stNo] = $r[Value_3];
	$Value_4[$stNo] = $r[Value_4];
	$Value_5[$stNo] = $r[Value_5];
	$Value_6[$stNo] = $r[Value_6];
	$Value_7[$stNo] = $r[Value_7];


