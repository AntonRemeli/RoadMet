<?php  

//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

/*
		 
*/

$Set="
		rel_hum='$rowm[rel_hum]', 
		air_dew_temp='$air_dew_temp[$stNo]', 
		air_temp='$rowm[air_temp]', 
		surf_temp='$rowm[surf_temp]', 
		surf_deep_temp='$rowm[surf_deep_temp]', 
		surf_freez_temp='$surf_freez_temp[$stNo]', 
		surf_salt_pri='$surf_salt_pri[$stNo]', 
		surf_salt_sat='$surf_salt_sat[$stNo]', 
		surf_condition='$surf_condition[$stNo]', 
		Value_7='$rowm[Value_7]',  
		Value_6='$Rmmk[$stNo]',  
		Value_5='$Rmmx[$stNo]',  
		Value_4='$rowm[Value_4]',  
		Value_3='$rowm[Value_3]',  
		Value_2='$rowm[Value_2]',  
		Value_1='$rowm[Value_1]',  
		Value_0='$rowm[Value_0]', 
		rain_int='$rain_int[$stNo]', 
		surf_water_depth='$surf_water_depth[$stNo]', 
		precip_stat='$precip_stat[$stNo]',  
		precip_imp_int='$rowm[precip_imp_int]', 
		precip_imp_lng='$rowm[precip_imp_lng]', 
		AccuV='$rowm[AccuV]', 
		door_contact='0',
		precip_stat1='$rowm[precip_stat1]',  
		precip_stat2='$rowm[precip_stat2]',  
		precip_stat3='$rowm[precip_stat3]',
		hum='$hum[$stNo]', 
		air='$air[$stNo]', 
		surft='$surft[$stNo]', 
		surfdt='$surf_deep_temp[$stNo]', 
		xps_time='$xps_time[$stNo]'	
		";


$SetM="
		rel_hum='$rel_humM[$stNo]', 
		air_dew_temp='$air_dew_temp[$stNo]', 
		air_temp='$air_tempM[$stNo]', 
		surf_temp='$surf_tempM[$stNo]', 
		surf_deep_temp='surf_deep_tempM[$stNo]', 
		surf_freez_temp='$surf_freez_temp[$stNo]', 
		surf_salt_pri='$surf_salt_pri[$stNo]', 
		surf_salt_sat='$surf_salt_sat[$stNo]', 
		surf_condition='$surf_condition[$stNo]', 
		Value_7='$rowm[Value_7]',  
		Value_6='$Rmmk[$stNo]',  
		Value_5='$Rmmx[$stNo]',  
		Value_4='$rowm[Value_4]',  
		Value_3='$rowm[Value_3]',  
		Value_2='$rowm[Value_2]',  
		Value_1='$rowm[Value_1]',  
		Value_0='$rowm[Value_0]', 
		rain_int='$rain_int[$stNo]', 
		surf_water_depth='$surf_water_depth[$stNo]', 
		precip_stat='$precip_stat[$stNo]',  
		precip_imp_int='$rowm[precip_imp_int]', 
		precip_imp_lng='$rowm[precip_imp_lng]', 
		AccuV='$rowm[AccuV]', 
		door_contact='$stk[$stNo]',
		precip_stat1='$rowm[precip_stat1]',  
		precip_stat2='$rowm[precip_stat2]',  
		precip_stat3='$rowm[precip_stat3]',
		hum='$hum[$stNo]', 
		air='$air[$stNo]', 
		surft='$surft[$stNo]', 
		surfdt='$surf_deep_temp[$stNo]', 
		xps_time='$xps_time[$stNo]'	
		";


//if($stNo>9535 && $stNo<9540 ){
//if($stNo>9535 && $stNo<9555 ){

if($stNo>9541 && $stNo<9555 ){

$Set="
		rel_hum='$rowm[rel_hum]', 
		air_dew_temp='$air_dew_temp[$stNo]', 
		air_temp='$rowm[air_temp]', 
		surf_temp='$rowm[surf_temp]', 
		surf_deep_temp='$rowm[surf_deep_temp]', 
		surf_freez_temp='$surf_freez_temp[$stNo]', 
		surf_salt_pri='$surf_salt_pri[$stNo]', 
		surf_salt_sat='$surf_salt_sat[$stNo]', 
		surf_condition='$surf_condition[$stNo]', 
		Value_7='$rowm[Value_7]',  
		Value_6='$rowm[Value_6]',  
		Value_5='$rowm[Value_5]',  
		Value_4='$rowm[Value_4]',  
		Value_3='$rowm[Value_3]',  
		Value_2='$rowm[Value_2]',  
		Value_1='$rowm[Value_1]',  
		Value_0='$rowm[Value_0]', 
		rain_int='$rain_int[$stNo]', 
		surf_water_depth='$surf_water_depth[$stNo]', 
		precip_stat='$precip_stat[$stNo]',  
		precip_imp_int='$rowm[precip_imp_int]', 
		precip_imp_lng='$rowm[precip_imp_lng]', 
		AccuV='$rowm[AccuV]', 
		door_contact='0',
		precip_stat1='$rowm[precip_stat1]',  
		precip_stat2='$rowm[precip_stat2]',  
		precip_stat3='$rowm[precip_stat3]',
		wind1='$rowm[wind1]',
		wind2='$rowm[wind2]',
		wind3='$rowm[wind3]',
		wind4='$rowm[wind4]',
		wind5='$rowm[wind5]',

		snow='$rowm[snow]',
		hum='$hum[$stNo]', 
		air='$air[$stNo]', 
		surft='$surft[$stNo]', 
		surfdt='$surf_deep_temp[$stNo]', 
		xps_time='$xps_time[$stNo]'	
		";
}

//		door_contact='$fogNo[$stNo]', 


if($mtaLD>time()) $mtaLD= time()-30;

$rowmet=$rowm[measure_time];
if($rowm[measure_time]>time()) $rowmet= $mtaLD+60;
$laSet="
	mtp='$mtaLD', 
	mta='$rowmet',
	measure_time='$rowmet', 
		".$SetM;



$meaSet="
		id='$row_id[$stNo]', 
		station_id='$station', 
		measure_time='$rowmet', 
		".$Set;
		
		?>
