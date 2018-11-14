<?php  

	$gst_hpt[$loop]=$rowmair_dew_temp/$li;
	$gsx_air[$loop]=$rowmair/$li;
//if($gsx_air[$loop]>37) $gsx_air[$loop]=(($gsx_air[$loop]-30)-10);
if($gsx_air[$loop]>34) $gsx_air[$loop]=34+(($gsx_air[$loop]-34)/3);
	$gsx_hum[$loop]=$rowmhum/$li/4+$tt-25;
	$gsx_hun[$loop]=$rowmrel_hum/$li/4+$tt-25;
	$gsx_hup[$loop]=$rowmrel_hum/$li/100+$tt-5;
	$gsx_surft[$loop]=$rowmsurft/$li;
if($gsx_surft[$loop]>34) $gsx_surft[$loop]=34+(($gsx_surft[$loop]-34)/10);
	$gsx_surfdt[$loop]=$rowmsurfdt/$li;


	$gst_fpt[$loop]=$rowmsurf_freez_temp/$li;
	$gsurf_salt_sat[$loop]=$rowmsurf_salt_sat/$li;
	$gsurf_salt_pri[$loop]=$rowmsurf_salt_pri/$li;
	$gst_upn[$loop]=$rowmsurf_condition/$li+$bt;
	$gsurf_water_depth[$loop]=10*$rowmsurf_water_depth/$li+$bt;//-0.6;
	$gst_rain[$loop]=$tt+0.1-$rowmrain_int/$li;
	$gst_csn[$loop]=$rowmprecip_stat/$li;

//$gst_upnx[$loop]=2*$bt-$gst_upn[$loop]-5;
//$gst_upnv[$loop]=$gst_upn[$loop]-6;
$gst_upnx[$loop]=-$rowmsurf_conditionx/$li+$bt-5.5;
$gst_upnv[$loop]=$rowmsurf_conditionv/$li+$bt-5.8;
	$gst_rainfog[$loop]=$tt+19;
//if($gst_rain[$loop]>30.3)	$gst_rainfog[$loop]=$tt+5;
if($gst_csn[$loop]>1.5 && $gst_csn[$loop]<2.5)	$gst_rainfog[$loop]=$tt+5;
	

	$gst_AccV[$loop] = 10*$rowmAccuV/$li-110;
	if($rowmAccuV/$li>20)  $gst_AccV[$loop]=$rowmAccuV/$li/10 ;


	$gst_Value_6[$loop]=2+30/$q-$rowmValue_6/$li;     // 2+30/2-6.6=10   vályu, "capacitive"
	$gst_Value_5[$loop]=2+30/$q-$rowmValue_5/$li;
	$gst_Value_4[$loop]=2+30/$q-$rowmValue_4/$li;
//	$gst_Value_3[$loop]=10*2*$rowmValue_3/$li;	// 10*2*0.8=16  száraz, 20 nedves
	$gst_Value_3[$loop]=5+10*1*$rowmValue_3/$li;	// 5+10*0.8=13  száraz, 15 nedves

	if($rowmValue_4p/$li<0.1) $gst_Value_4p[$loop]=100*$rowmValue_4p/$li;
	elseif($rowmValue_4p/$li<1) $gst_Value_4p[$loop]=10+10*$rowmValue_4p/$li; 
	else $gst_Value_4p[$loop]=20+$rowmValue_4p/$li;					//pnk,  fog

	if($rowmValue_3p/$li<0.1) $gst_Value_3p[$loop]=100*$rowmValue_3p/$li; 
	elseif($rowmValue_3p/$li<1) $gst_Value_3p[$loop]=10+10*$rowmValue_3p/$li; 
	else $gst_Value_3p[$loop]=20+$rowmValue_3p/$li;					//okr,   bgrnd

	if($rowmValue_2p/$li<1) $gst_Value_2p[$loop]=10*$rowmValue_2p/$li; 
	elseif($rowmValue_2p/$li<10) $gst_Value_2p[$loop]=10+1*$rowmValue_2p/$li; 
	else $gst_Value_2p[$loop]=20+0.1*$rowmValue_2p/$li;				 //red,   count
//$fog-$bgrnd+500>9
//if($gst_Value_4p[$loop]>9 or $rowmValue_2p/$li<10)	$gst_rainfog[$loop]=$tt+5;
//if($gst_Value_4p[$loop]-$gst_Value_2p[$loop]+7>9 or $rowmValue_2p/$li<10)	$gst_rainfog[$loop]=$tt+5;
//if($gst_Value_4p[$loop]-$gst_Value_3p[$loop]+5>9 or $rowmValue_2p/$li<10)	$gst_rainfog[$loop]=$tt+5;

// $gst_Value_4p[$loop]=14+10*$rowmValue_4p/$li;
// $gst_Value_3p[$loop]=13+10*$rowmValue_3p/$li;
 

//if($rowmValue_3/$li>1.99)		$gst_Value_3[$loop]=3*2*$rowmValue_3/$li;
//if($rowmValue_3/$li>3.44)		$gst_Value_3[$loop]=1.3*2*$rowmValue_3/$li;
//if($rowmValue_3/$li>1.99)		$gst_Value_3[$loop]=4*$rowmValue_3/$li;
//if($rowmValue_3/$li>3.44)		$gst_Value_3[$loop]=1.8*$rowmValue_3/$li;
if($rowmValue_3/$li>1.99)		$gst_Value_3[$loop]=5+3*$rowmValue_3/$li;
if($rowmValue_3/$li>3.44)		$gst_Value_3[$loop]=5+1.3*$rowmValue_3/$li;
	$gst_Value_2[$loop]=12+30/$q-$rowmValue_2/$li;   // 12+30/2-6.6=20      felszín,conductive
	$gst_Value_1[$loop]=12+30/$q-$rowmValue_1/$li;
	$gst_Value_0[$loop]=12+30/$q-$rowmValue_0/$li;

	$gst_precip_imp_int[$loop]=$tt-$rowmprecip_imp_int/$li;
if($rowmprecip_imp_int/$li<0.1) 	$gst_precip_imp_int[$loop]=$tt-3;
if($rowmprecip_imp_int/$li==0) 	$gst_precip_imp_int[$loop]=$tt;
if($rowmprecip_imp_int/$li<0) 	$gst_precip_imp_int[$loop]=$tt-2;
if($rowmprecip_imp_int/$li>10) 	$gst_precip_imp_int[$loop]=$tt-10-$rowmprecip_imp_int/$li/10;
if($rowmprecip_imp_int/$li>100) 	$gst_precip_imp_int[$loop]=$tt-20-$rowmprecip_imp_int/$li/100;
if($rowmprecip_imp_int/$li>1000) 	$gst_precip_imp_int[$loop]=$tt-30-$rowmprecip_imp_int/$li/1000;

	$gst_precip_imp_lng[$loop]=$tt-$rowmprecip_imp_lng/$li-0.2;
if($rowmprecip_imp_lng/$li>10) 	$gst_precip_imp_lng[$loop]=$tt-10-$rowmprecip_imp_lng/$li/10-0.2;
if($rowmprecip_imp_lng/$li>100) 	$gst_precip_imp_lng[$loop]=$tt-20-$rowmprecip_imp_lng/$li/100-0.2;
if($rowmprecip_imp_lng/$li>1000) 	$gst_precip_imp_lng[$loop]=$tt-30-$rowmprecip_imp_lng/$li/1000-0.2;


$gst_surf_temp[$loop]=$rowmsurf_temp/$li;
//if($gst_surf_temp[$loop]>34) $gst_surf_temp[$loop]=34;//+int(($gst_surf_temp[$loop]-35)/10);

	$gst_precip_stat1[$loop]=$rowmprecip_stat1/$li+12; //nem f0l0sleg   //v3
if($gst_precip_stat1[$loop]>16) $gst_precip_stat1[$loop]=16;
	$gst_precip_stat20[$loop]=$rowmprecip_stat2/$li;			//cap
		if($gst_precip_stat20[$loop]>9) $gst_precip_stat20[$loop]=9;
	$gst_precip_stat21[$loop]=$rowmprecip_stat2/$li/10;
		if($gst_precip_stat21[$loop]>9) $gst_precip_stat21[$loop]=9;
	$gst_precip_stat22[$loop]=$rowmprecip_stat2/$li/100;
		if($gst_precip_stat22[$loop]>9) $gst_precip_stat22[$loop]=9;
	$gst_precip_stat23[$loop]=$rowmprecip_stat2/$li/1000;
 $gst_precip_stat24[$loop]= $rowmprecip_stat2/$li/1000;
	if($rowmprecip_stat2/$li>$st_kw)	 $gst_precip_stat24[$loop]= $rowmprecip_stat2/$li/1000 + ($rowmprecip_stat2/$li-$st_kw)/10;

	$gst_precip_stat30[$loop]=$rowmprecip_stat3/$li/1+10;			//cond
		if($gst_precip_stat30[$loop]>19) $gst_precip_stat30[$loop]=19;
	$gst_precip_stat31[$loop]=$rowmprecip_stat3/$li/10+10;
		if($gst_precip_stat31[$loop]>19) $gst_precip_stat31[$loop]=19;
	$gst_precip_stat32[$loop]=$rowmprecip_stat3/$li/100+10;
//	$gst_precip_stat32[$loop]=15;
	//	if($gst_precip_stat31[$loop]>19) $gst_precip_stat31[$loop]=19;



	$wind1[$loop]=30-$rowmwind1/$li;
	$wind2[$loop]=30-$rowmwind2/$li;
$ww=0;
if($wind1[$loop]>29) $ww=30;
	$wind3[$loop]=$ww+30-$rowmwind3/$li/9/2;
	$wind4[$loop]=$ww+30-$rowmwind4/$li/9/2;
	$wind5[$loop]=$ww+30-$rowmwind5/$li/9/2;
	$snow[$loop]=$rowmsnow/$li/10-9.5;

	$lip4[$loop]=($wind4[$loop-1]-$wind4[$loop])*($wind4[$loop-1]-$wind4[$loop]);

	// meas/avg:
	$lip[$loop]=$li-10.2;
	if($li>10) $lip[$loop]=$li/10;
	if($li>100) $lip[$loop]=$li/10+10;

	// meas/hr:
	$loK[$loop]=$loM-10.2;
	if($loM>10) $loK[$loop]=$loM/10;
	if($loM>100) $loK[$loop]=$loM/10+10;
	
	
?>
