<?php  
	$rowmair_dew_temp+=$rowm[air_dew_temp];
	$rowmair+=$rowm[air];
	$rowmhum+=$rowm[hum];
	$rowmrel_hum+=$rowm[rel_hum];
	$rowmsurft+=$rowm[surft];
	$rowmsurfdt+=$rowm[surfdt];
	$rowmsurf_freez_temp+=$rowm[surf_freez_temp];
	$rowmsurf_salt_sat+=$rowm[surf_salt_sat];
	$rowmsurf_salt_pri+=$rowm[surf_salt_pri];
	$rowmsurf_condition+=$rowm[surf_condition];
if($rowm[surf_condition]>0)	$rowmsurf_conditionv+=$rowm[surf_condition];
if($rowm[surf_condition]<0)	$rowmsurf_conditionx+=$rowm[surf_condition];
	$rowmsurf_water_depth+=$rowm[surf_water_depth];
	$rowmrain_int+=$rowm[rain_int];
	$rowmprecip_stat+=$rowm[precip_stat];
	$rowmAccuV+=$rowm[AccuV];
	$rowmValue_7=$rowm[Value_7];
//	$rowmValue_6+=$rowm[Value_6];
//	$rowmValue_5+=$rowm[Value_5];
	$rowmValue_6+=$rowm[Value_6]/1;
	$rowmValue_5+=$rowm[Value_5]/1;
//	$rowmValue_6+=$rowm[Value_6]/1000;
//	$rowmValue_5+=$rowm[Value_5]/1000;
	$rowmValue_4+=$rowm[Value_4];
//if($rowm[Value_3]>0.6)	$rowmValue_3+=$rowm[Value_3];
//if($rowm[Value_3]<0.7)	$rowmValue_3+=$rowm[Value_3]/2+0.7; //3081: V3 hamis tueskeek
if($rowm[Value_3]>0.59)	$rowmValue_3+=$rowm[Value_3];
//if($rowm[Value_3]>0.59)	$rowmValue_3+=$rowm[Value_3]/1000;
if($rowm[Value_3]<0.6)	$rowmValue_3+=$rowm[Value_3]/2+0.6; 
	$rowmValue_4p+=$rowm[Value_4];
//	$rowmValue_3p+=$rowm[Value_3]-5;
//	$rowmValue_3p+=$rowm[Value_3]/1000;
if($rowm[precip_imp_int]<$rowmprecip_imp_int*10)	$rowmValue_3p+=$rowm[Value_3]/1000;
	$rowmValue_2p+=$rowm[Value_2];
	$rowmValue_2+=$rowm[Value_2];
	$rowmValue_1+=$rowm[Value_1];
	$rowmValue_0+=$rowm[Value_0];
//	$rowmprecip_imp_int+=$rowm[precip_imp_int];
if($rowm[precip_imp_int]<$rowmprecip_imp_int*10)	$rowmprecip_imp_int+=$rowm[precip_imp_int];
	$rowmprecip_imp_lng+=$rowm[precip_imp_lng];
	$rowmsurf_temp+=$rowm[surf_temp];
	$rowmprecip_stat1+=$rowm[precip_stat1];
	$rowmprecip_stat2+=$rowm[precip_stat2];
	$rowmprecip_stat3+=$rowm[precip_stat3];


if($rowm[wind1]<155)	$rowmwind1+=$rowm[wind1]/2;
if($rowm[wind2]<155)	$rowmwind2+=$rowm[wind2]/2;
if($rowm[wind3]<360)	$rowmwind3+=$rowm[wind3];
	
//if($rowm[wind4]>$rowm[wind3])	$rowmwind4+=-360+$rowm[wind4]; else 
if($rowm[wind4]<360)	$rowmwind4+=$rowm[wind4];
//if($rowm[wind5]<$rowm[wind3])	$rowmwind5+=360+$rowm[wind5]; else 
if($rowm[wind5]<360)	$rowmwind5+=$rowm[wind5];
	$rowmsnow+=$rowm[snow];



?>
