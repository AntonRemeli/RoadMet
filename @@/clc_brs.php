<?php  
      
//#################################  the new Boreas pawement sensor:  ##################################  START
$wimp=$precip_stat2[$stNo];         //"capacitive" signal of the "pit"
$simp=$precip_stat3[$stNo];         //conductive signal for salt
$simp0=$precip_stat30[$stNo];
/*
 if($stNo==9502 or $stNo==9504 or $stNo==9540){
$simp-=2;
$simp0-=2;
}
*/
if($wimp<0 or $wimp>32000)  $wi[$stNo]=10;
if($simp<0 or $simp>1000)  $si[$stNo]=10;
$wi[$stNo]--;
$si[$stNo]--;
$wimp=0;
$simp=$sim[$stNo];   //=1 as defined in xps_stp0.php
if($wi[$stNo]<=0) $wimp=$precip_stat2[$stNo];   	//"capacitive" signal of the "pit"
if($si[$stNo]<=0) $simp=$precip_stat3[$stNo];	//conductive signal for salt
 if($stNo==9502 or $stNo==9504 or $stNo==9540){
$simp-=2;
$simp0-=2;
}

if($simp<$sim[$stNo] && $sir[$stNo]<1) {$sim[$stNo]=$simp; $sir[$stNo]=10; }  //NEDOVOLJNO:  $sir[$stNo]=10; 

if($sim[$stNo]<1 && $sir[$stNo]>0)  $sir[$stNo]--;

 if($simp>0 && $sim[$stNo]<0.9)  $sim[$stNo]+=0.1;




$Sc=0;    	//conductive salt concentration
$sTT=2;
//if($sT>10) $sTT=2+$sT/2;
//if($simp>3+$sTT) $Sc=($simp-3-$sTT)/(0+10*$sTT);   //PZ-2611: brs felszín kevés sót generál
if($simp>3+$sTT) $Sc=($simp-3-$sTT)/$sTT;

$ScW=0;		//"capacitive" salt concentration
if($wimp>$st_kw*0.01) $ScW=25*($wimp-$st_kw*0.01)/$st_kw;
//$ScW=25*(sqrt($ScW));

$wimpi=$wimp;
$wimp=$wimp/$st_kw*2000;

//if($ScW>$Sc) $Sc=$ScW;
$sTk=1;
if($sT>10) $sTk=10/$sT;
//$Sc=$st_k1*$Sc*$sTk;         //calibrated salt amount
$Sc=35*$st_k1*sqrt(sqrt($Sc/35))*$sTk;         //calibrated salt amount
$Sc/=2;
$mW=0;

//$mW=sqrt(($simp-1)/1);				//just moist
if($sir[$stNo]<1) $mW=sqrt(($simp-$sim[$stNo])/1);				//just moist
//$mW=sqrt(($simp-0)/1);				//just moist
//if($sT>1) $mW=$sT/1*$mW;
if($sT>1) $mW=($sT+9)/10*$mW;
$mWs=0;
//$mWs=sqrt(sqrt(($wimpi-1)/3));				//just moist
$mWs=sqrt(sqrt(($wimpi-0)/3));				//just moist
if($mWs<0.0001) $mWs=0.0001;
// if($mWs>$mW) $mW=$mWs;  //4051: BRScap prebacuje na -32000 kad ovlaži
if($mWs>$mW && $simpW>0)  $mW=$mWs;

$V3=1.25*(0.7+$precip_stat1[$stNo]/10);
$V3=1.3*(0.7+$precip_stat1[$stNo]/10);
if($V3>1.4) $V3=1.4;
$mW=$mW*$V3*$V3*$V3;
//###########################  the new Boreas pawement sensor  ###############################   END


?>
