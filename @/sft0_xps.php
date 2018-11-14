<?php  
	$measure_time[$stNo]=$rowm[measure_time];
	$xps_time[$stNo]=$rowm[xps_time];

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
	$precip_imp_int[$stNo]=$rowm[precip_imp_int];
	$precip_imp_lng[$stNo]=$rowm[precip_imp_lng];


	$AccuV[$stNo] = $rowm[AccuV];
	$wind1[$stNo] = $rowm[wind1];
	$wind2[$stNo] = $rowm[wind2];
	$wind3[$stNo] = $rowm[wind3];
	$wind4[$stNo] = $rowm[wind4];
	$wind5[$stNo] = $rowm[wind5];
	$snow[$stNo] = $rowm[snow];


$rel_hum[$stNo] = $rowm[rel_hum];
$air_temp[$stNo] = $rowm[air_temp];
$surf_temp[$stNo] = $rowm[surf_temp];


$precip_stat1[$stNo] = $rowm[precip_stat1];
$precip_stat2[$stNo] = $rowm[precip_stat2];
$precip_stat3[$stNo] = $rowm[precip_stat3];

	
 	$Value_0[$stNo] = $rowm[Value_0];
	$Value_1[$stNo] = $rowm[Value_1];
	$Value_2[$stNo] = $rowm[Value_2];
	$Value_3[$stNo] = $rowm[Value_3];
	$Value_4[$stNo] = $rowm[Value_4];
	$Value_5[$stNo] = $rowm[Value_5];
	$Value_6[$stNo] = $rowm[Value_6];
	$Value_7[$stNo] = $rowm[Value_7];

	if ($rowm[surf_salt_pri]!= 0.0)   $surf_salt_pri0[$stNo] =  $rowm[surf_salt_pri];


  ?>
