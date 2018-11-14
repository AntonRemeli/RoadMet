<?php  
// air, road temperature & humidity:
//3992 BHS otkačio:

// if($air_tempD[$stNo]*$air_tempD[$stNo]> $measure_timeD[$stNo]/10 )	  $air_temp[$stNo]= $air_temp0[$stNo]+$air_tempD[$stNo]/10 ; 
 //if($air_tempD[$stNo]*$air_tempD[$stNo]> $measure_timeD[$stNo]/10 )	  if($air_tempN[$stNo]<11) {$air_temp[$stNo]= $air_temp0[$stNo]+$air_tempD[$stNo]/10 ; $air_tempN[$stNo]++;} else $air_tempN[$stNo]=0;
// if($rel_humD[$stNo]*$rel_humD[$stNo]> $measure_timeD[$stNo] )	 $rel_hum[$stNo]= $rel_hum0[$stNo]+$rel_humD[$stNo]/10 ;
////  if($surf_tempD[$stNo]*$surf_tempD[$stNo]> $measure_timeD[$stNo]/20 )	$surf_temp[$stNo]= $surf_temp0[$stNo]+$surf_tempD[$stNo]/10 ;

// if($air_tempD[$stNo]*$air_tempD[$stNo]> $measure_timeD[$stNo]*2 )	  $air_temp[$stNo]= $air_temp0[$stNo] ;  //4022: nem tud beindulni a hőmérséklet
//if($air_tempD[$stNo]*$air_tempD[$stNo]> $measure_timeD[$stNo]*2 )	if($air_tempNN[$stNo]<11) {  $air_temp[$stNo]= $air_temp0[$stNo] ; $air_tempNN[$stNo]++;} else $air_tempNN[$stNo]=0;
// if($rel_humD[$stNo]*$rel_humD[$stNo]> $measure_timeD[$stNo]*10 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] ;
////  if($surf_tempD[$stNo]*$surf_tempD[$stNo]> $measure_timeD[$stNo] )	$surf_temp[$stNo]= $surf_temp0[$stNo] ;

//  if($surf_tempD[$stNo]*$surf_tempD[$stNo]> $measure_timeD[$stNo]/240 )	$surf_temp[$stNo]= $surf_temp0[$stNo] ;

//// if($surf_tempD[$stNo]> $surf_tempD6[$stNo]*$surf_tempD6[$stNo] ||  $surf_tempD[$stNo]< -$surf_tempD6[$stNo]*$surf_tempD6[$stNo] )	$surf_temp[$stNo]= $surf_temp0[$stNo]+$surf_tempD[$stNo]/4 ;

$vx=0;
$aT=$air_temp[$stNo]+$st_kat;
//$sT=$surf_temp[$stNo]+$st_kst;

//   $sT=$surf_temp[$stNo]*0.001+$surf_temp0[$stNo]*0.999+$st_kst;  //ez csak keeslelteti, de nem egyengeti a fogakat
   $sT=($surf_temp[$stNo]+$st_kst)*0.3+$surft0[$stNo]*0.7;  //ez egyengeti a fogakat
//   $sT=($surf_temp[$stNo]+$st_kst)*0.001+$surft0[$stNo]*0.999;  //ez egyengeti a fogakat
//if($aT>50 && $sT>20 && $sT<90) $aT=20+($sT-20)/2;
//if($aT>50 && $sT<=20) $aT=$sT;
//if($aT>50 && $sT>-20) $aT=$sT/3*2;
if($aT*$aT>2400 && $sT>-20 && $sT<60 )	  $aT= $air_temp0[$stNo] ;//+ $air_tempD[$stNo]/10000;
//if($aT<$sT-20 && $sT>-20 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;
//if($aT-$sT>7) $sT=$aT*3/2;  //3837:	-3	hiányzó BHS borítja a vítzéteget	megoldani	clc_arh módosítva	2011-05-30 01:00:00	megfelelő nedvességérzékelés
//if($aT-$sT>7) $sT=$aT*1.1;	
//if($aT-$sT>7 && $AccuV[$stNo]>11.5 && $AccuV[$stNo]<15.5) $sT=$aT*(1.1+(14.2-$AccuV[$stNo])/10);  //3895:	-3	hamis szonda legyen napsugárzásfüggő
//if($aT-$sT>7 && $bgrnd>$g  && $AccuV[$stNo]>15.5) $sT=$aT*(1.1+(580-$bgrnd)/100);  //3895:	-3	hamis szonda legyen napsugárzásfüggő  
//if($aT-$sT>7 && $AccuV[$stNo]>10 && $AccuV[$stNo]<15.5) $sT=$aT*(1.1+($AccuV[$stNo]-10)/10+($bgrnd-500)/100);  //3895:	-3	hamis szonda legyen napsugárzásfüggő
//if($aT-$sT>7 && $AccuV[$stNo]>10 && $AccuV[$stNo]<15.5) $sT=$aT*(1.1+($bgrnd-500)/100+($AccuV[$stNo]-12)/10);  //3895:	-3	hamis szonda legyen napsugárzásfüggő
//if($aT>0) $aTk=1; else $aTk=-1;

//opasan na nuli! if($surf_temp[$stNo]==0 && $surf_tempD[$stNo]==$sT && $AccuV[$stNo]<15.5 && $bgrnd>400 && $bgrnd<900) $sT=-20+($aT+20)*(1+($bgrnd-500)/400+($AccuV[$stNo]-12)/40);  //3895:	-3	hamis szonda legyen napsugárzásfüggő
//if($surf_tempD[$stNo]==0 &&  $surf_tempDD[$stNo]==0 && $AccuV[$stNo]<15.5 && $bgrnd>500 && $bgrnd<700) $sT=$aT*(1+($bgrnd-500)/100+($AccuV[$stNo]-12)/10);  //3895:	-3	hamis szonda legyen napsugárzásfüggő //3912 nincs hamis úthőm.
//opasan na nuli! if($surf_temp[$stNo]==0 && $surf_tempD[$stNo]==0 &&  $surf_tempDD[$stNo]==0 &&  $AccuV[$stNo]<15.5 && $bgrnd>900) $sT=-20+($aT+20)*(1+($AccuV[$stNo]-12)*($AccuV[$stNo]-12)/20);  //3895:	-3	hamis szonda legyen napsugárzásfüggő  //3912 nincs hamis úthőm.

// FAKE $sT:

if( $AccuV[$stNo]<15.5 && $aT*$aT<2500)
{ 
//$kTg=$aT+20; //leti je premalo, a zimi dobro
$kTg=$aT+40;
//$kTd=$aT-10;  // 4210: aT povuče sT gore 
$kTd=$aT-15;   
//if(($precip_stat2[$stNo]==0 && $precip_stat3[$stNo]==0 && $surf_temp[$stNo]==0 && $surf_tempD[$stNo]==0 && $surf_tempDD[$stNo]==0) ||  ($surf_temp[$stNo]>$kTg || $surf_temp[$stNo]<$kTd) )
if(($precip_stat2[$stNo]==0 && $precip_stat3[$stNo]==0 && $surf_temp[$stNo]==0 ) ||  ($surf_temp[$stNo]>$kTg || $surf_temp[$stNo]<$kTd) )
{  $vx=1;

$sT0=-20+($aT+20)*(1+($AccuV[$stNo]-12)*($AccuV[$stNo]-12)/40);

if($bgrnd>400 && $bgrnd<900) $sT0=-20+($aT+20)*(1+($bgrnd-400)/4000+($AccuV[$stNo]-12)/40);   //3895:	-3	hamis szonda legyen napsugárzásfüggő

 $sT=0.1*$sT0+0.9* $surft0[$stNo];
$sT=$sT+$st_kst/10;
}
}

//if($aT*$aT>2500 && $sT*$sT<3600 )	  $aT= $sT*(1-($sT+20)/150); //-->2 clc_hod

//if($aT*$aT>2500 && $sT*$sT>3600 )	  {$aT= $air_temp0[$stNo]; $sT=$surft0[$stNo]; }
if($aT*$aT>2500 && $sT*$sT>3600 )	  {$aT= 0; $sT=0; }
//if($air_temp[$stNo]>9900  )	  {$aT= 1;}


		$bgrnd=100*$Value_3[$stNo]; 
$g=532+$aT/3;

//$aT=20;
//3334.1  	-3  	beszakadó utszondahőmérsékletek minden 20.percben  	vasalás ideiglenes leállítása   	clc_arh,xps módosítva  	2010-12-03 08:00:00
/*
$surf_tempD6[$stNo]=($surf_temp0[$stNo]-$surf_temp06[$stNo])/6;
$surf_tempD2[$stNo]=$surf_tempD[$stNo]*$surf_tempD[$stNo];

if($surf_tempD[$stNo]*$surf_tempD6[$stNo]<0 && $surf_tempD2[$stNo]>0.23 && $surf_tempD2[$stNo]<0.61 ) $sTkr[$stNo]=-$surf_tempD[$stNo];
$sT=$surf_temp[$stNo]+$st_kst+$sTkr[$stNo];
/*
//3334  	-3  	a felszíni hőmérséklet mérésben az újabb útszondákon. +- 1C fokot ugrál a mért hőmérséklet  	vasalás  	clc_arh,xps módosítva  	2010-11-30 11:00:00  	tűrhető:
if($surf_tempD[$stNo]*$surf_tempD6[$stNo]<0 && $surf_tempD2[$stNo]>0.35 && $surf_tempD2[$stNo]<0.61 && $nn[$stNo]==0) {
$nn[$stNo]=6;
}
if($nn[$stNo]>0) {
$nn[$stNo]--;
$sT=$surf_temp00[$stNo]+$surf_tempD6[$stNo]+$st_kst;
}

if($nn[$stNo]==0 && $surf_tempD2[$stNo]<1.2*$surf_tempD6[$stNo]*$surf_tempD6[$stNo]) $sT=$surf_temp[$stNo]+$st_kst; 
if($nn[$stNo]==0 && $surf_tempD2[$stNo]>1.2*$surf_tempD6[$stNo]*$surf_tempD6[$stNo]) $sT=$surf_temp00[$stNo]+1*$surf_tempD6[$stNo]+$st_kst; 
$surf_temp00D[$stNo]=$sT-$st_kst-$surf_temp00[$stNo];
$surf_temp00[$stNo]=$sT-$st_kst;
*/

//temperature plausibility correction
//if ($aT>40 || $aT<-20) $aT=3*$sT/4;
//if ($sT>80 || $sT<-20) $sT=4*$aT/3;

// salt conductivity corrector:
// $st_k2s = $st_k2/33;
// if ($Value_6[$stNo]<0.5)   $st_k2s = $st_k2/33 *5/6 * $Value_6[$stNo]/0.5 * $Value_6[$stNo]/0.5 * $Value_6[$stNo]/0.5 + $st_k2/33 *1/6 
//
//



$rH=$rel_hum[$stNo]*$st_krh; //relative humidity with simple calibration correction
//if($aT*$aT>2500 && $sT*$sT<3600 )	  $rH= 80-$sT;  //-->2 clc_hod
//if($air_temp[$stNo]>9900  )	  $rH= 1;

//if($rH<20 && $aT>-20) $rH=20+(40-$aT)*2; //3837:	-3	hiányzó BHS borítja a vítzéteget	megoldani	clc_arh módosítva	2011-05-30 01:00:00	megfelelő nedvességérzékelés	
if($rH<20 && $aT>-20) $rH=40+(40-$aT); 
//rel.humidity plausibility correction
/*
$Tf=1;
if($precip_imp_int[$stNo]<0 || $precip_imp_int[$stNo]==0.01) $Tf=0.5;
//if($Tf==0.5 && ($rH<90-3*$Tf*($aT+$sT) || $rH>1000) && $aT<15) $rH=97-3*$Tf*($aT+$sT);
if($Tf==0.5 && ($rH<80-3*$Tf*($aT+$sT) || $rH>1000) && $aT<15) $rH=80-3*$Tf*($aT+$sT);
//if($rH>1000 || $rH<80-3*$Tf*($aT+$sT) ) $rH=90-3*$Tf*($aT+$sT);
//if($rH>1000 || $rH<60-2*$Tf*($aT+$sT) ) $rH=60-2*$Tf*($aT+$sT);
if($rH>1000 || $rH<60-$Tf*($aT+3*$sT) ) $rH=60-$Tf*($aT+3*$sT);
 */

//if($st_kw<1000 & $aT<0) $rH=$rH*(100-$aT/3)/100;
if($st_kw<10 & $aT<0) $rH=$rH*(100-$aT)/100;

//if($rH>110) $rH=110;
//if($rH>95) $rH=100-3*sqrt(sqrt((110-$rH)/15));
//if($rH>102) $rH=102;
//if($rH>98) $rH=100-2*sqrt(sqrt((102-$rH)/4));
//if($rH>98) $rH=100-2*((102-$rH)/4)*((102-$rH)/4)*((102-$rH)/4);
//if($rH>98) $rH=100-2*((110-$rH)/12)*((110-$rH)/12)*((110-$rH)/12)*((110-$rH)/12)*((110-$rH)/12);
//$rHf=0.1+$rH/100;

$tH=96;
$sH=100;
if($rH>$sH) $rH=$sH;
//if($rH>98) $rH=100-2*(($sH-$rH)/($sH-98))*(($sH-$rH)/($sH-98))*(($sH-$rH)/($sH-98))*(($sH-$rH)/($sH-98));
//if($rH>$tH) $rH=100-(100-$tH)*(($sH-$rH)/($sH-$tH))*(($sH-$rH)/($sH-$tH))*(($sH-$rH)/($sH-$tH))*(($sH-$rH)/($sH-$tH)); //deact.20111119
//if($rH>$tH) $rH=$tH+(100-$tH)*sqrt(sqrt(($sH-$rH)/($sH-$tH)));

//humidity measured by the capacitive surface:

$v3=$Value_3[$stNo];

$simp=2;
$simp=$precip_stat3[$stNo];
if($simp==1) $v3=0.8;

if($Value_3[$stNo]<=0.7)  $v3=$rHf-0.1;
if($v3<=0.7)  $v3=0.7;

if($v3>3.4) $v3=1.1;
if($v3>2) $v3=$v3/3;
$sHf=2.5*($v3-0.62);
if($sHf>1.05) $sHf=1.05;




$dT=log($rH/100)/5417.118;
$dT=1/(273.16+$aT)-$dT;
$dT=1/$dT-273.16;


/*

//relative humidity in case of wrong sensor:

//if($Value_6[$stNo]>5)
{
if(2*$rHf-0.1<$sHf) 
{
	$rH=22*($sHf+2.95);
//	if($rH<60) $rH=60;
if($rH>100) $rH=100;
$rHf=0.1+$rH/100;
}
}
 */


  

?>
