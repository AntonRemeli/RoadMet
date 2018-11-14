<?php  
   
//############################  the new capacitive Boreas pawement sensor:  ##############################  START
/*
$wimp=$precip_stat2[$stNo];   	//"capacitive" signal of the "pit"
if($wimp<0 or $wimp>32000) $wimp=0;
$simp=$precip_stat3[$stNo];	//conductive signal for salt
if($simp<0 or $simp>2000) $simp=0;
$simp0=$precip_stat30[$stNo];	//conductive signal for salt
if($simp0<0 or $simp0>2000) $simp0=0;
*/
$wimp=$precip_stat2[$stNo]; 
$simp=$precip_stat3[$stNo];
$simp0=$precip_stat30[$stNo];

/*
if($wimp>$st_kw && $st_kw>666) {
$simp+=sqrt(sqrt($wimp-$st_kw));
$simp0+=sqrt(sqrt($wimp-$st_kw)) ;
}
*/
/*
 if($stNo==9502 or $stNo==9504 or $stNo==9540){
$simp-=2;
$simp0-=2;
}

 if($stNo==9538){
$simp-=7;
$simp0-=7;
}
*/
if($wimp<0 or $wimp>32000)  $wi[$stNo]=10;
if($simp<0 or $simp>1000)  $si[$stNo]=10;
$wi[$stNo]--;
$si[$stNo]--;
$wimp=0;
$simp=1;
$simp=$sim[$stNo];   //=1 as defined in xps_stp0.php
if($wi[$stNo]<=0) $wimp=$precip_stat2[$stNo];   	//"capacitive" signal of the "pit"
if($si[$stNo]<=0) $simp=$precip_stat3[$stNo];	//conductive signal for salt

/*
if($wimp>$st_kw && $st_kw>666) {
$simp+=sqrt(sqrt($wimp-$st_kw)) ;
$simp0+=sqrt(sqrt($wimp-$st_kw));
}

 if($stNo==9502 or $stNo==9504 or $stNo==9540){
$simp-=2;
$simp0-=2;
}
*/

 if($stNo==9502){
$simp -=1;
$simp0 -=1;
}

 if($stNo==9538){
$simp -=2;
$simp0 -=2;
}

if($stNo==9541){
$simp +=1;
$simp0 +=1;
}
 if($simp<$sim[$stNo] && $sir[$stNo]<1) {$sim[$stNo]=$simp; $sir[$stNo]=10; }  //NEDOVOLJNO:  $sir[$stNo]=10; 


if($sim[$stNo]<1 && $sir[$stNo]>0)  $sir[$stNo]--;

 if($simp>0 && $sim[$stNo]<0.9)  $sim[$stNo]+=0.1;

//if($simp>$wimp) $simp=$wimp/10;  //PZ3293: 9503 Jugovo polje dupli konduktivni trn 16 studenog u 15h15min...da ali ubija $simp ako je cap neosetljiv
$simpD=$simp-$simp0;
if($simpD>3*($simp0+1)) $simp=3*($simp0+1);  //PZ3289: 9509 Erdut konduktivni trn, lažna sol 4.11.2010 u 16h

$mW=0;


$Sc=0;    	//conductive salt concentration
//if($simp>10) $Sc=($simp-10)/(0+100);
$sTT=1;
//if($sT>0) $sTT=1+$sT/5;  //tuulerooes sT-effektus
//if($sT>10) $sTT=1+$sT/50;
//if($simp>7+$sTT) $Sc=1*($simp-7-$sTT)/(0+100*$sTT);

// PZ:2453 minuszban nem nedvesedhet az úttest, hacsak nem a sózástól
//if($sT<0 && $simp>1) $simp=($simp-1)*(1-$sT);   //badbadbad

//if($simp>7+$sTT) $Sc=1*($simp-7-$sTT)/(0+100*$sTT);  //tiszta víz is felnyomja 50-ig
//$simpS=37;
//$simpS=3;
$simpS=37;
$simpW=0;
$simpW=($simp-0)/$simpS;
if($sir[$stNo]<1) $simpW=($simp-$sim[$stNo])/$simpS;   //ne bash, sad vec OK
//$mW=4*sqrt($simpW); //3475: viiz halott uutszondaahoz nem működik
//if($simpW>0) $mW=4*sqrt($simpW); //3934: vodeni sloj slabo prati cond
if($simpW>0) $mW=20*sqrt($simpW/10);
if($sT>1) $mW=($sT+9)/10*$mW;
//$mW=$simp;
//if($simp>3*$simpS+$sTT) $Sc=1*($simp-$simpS-$sTT)/(0+100*$sTT);
if($simp>1*$simpS+$sTT) $Sc=1*($simp-$simpS-$sTT)/(0+100*$sTT);
//$Sc=$Sc*$Sc;
$Sc=10*sqrt($Sc);

// temperature dependence compensation:
// if($sT>-15) $wimp=$wimp-2*($sT+15)*$st_kw/100;   
if($sT>-15) $wimp=$wimp-2*($sT+15)*$st_kw/1000;   


$ScW=0;		//capacitive salt concentration
if($sT<5 && $wimp<16666){
$th=0.9+$sT/50;
//if($wimp>$st_kw*$th) $ScW= ($wimp-$st_kw*$th)/$st_kw; 
//if($wimp>$st_kw*$th && $simp<$simpS+$sTT) {$ScW= ($wimp-$st_kw*$th)/$st_kw; $mW=0.1*sqrt($simpW);} //csak felszáradó só esetén megy a felső tartományba
//if($wimp>$st_kw*$th && $simp>$simpS+$sTT  && $simp<3*$simpS+$sTT) {$ScW= 0; $Sc= 0; $mW=4*sqrt($simpW);} 
//if($simp>3*$simpS+$sTT)  $mW=0.1*sqrt($simpW); 
//$ScW=$ScW*$ScW*$ScW*$ScW*25/1;
//$ScW*=225;
//$ScW=$ScW*25;
}
//if($ScW>$Sc) $Sc=$ScW;
//$Sc/=5;

$sTk=1;
//if($sT>1) $sTk=1/$sT;   //PZ2644: 9520 sa 25g u 9h pao na 15g pa opet na 25g u 16h iako nije soljen popodne
//if($sT>5) $sTk=5/$sT; 
//$Sc=25*$st_k1*sqrt($Sc/25)*$sTk*1;         //calibrated salt amount
//$Sc=25*$st_k1*sqrt(sqrt($Sc/25))*$sTk*1;         //calibrated salt amount
$Sc=35*$st_k1*sqrt(sqrt($Sc/35))*$sTk*1;         //calibrated salt amount
if($sT>1) $Sc/=$sT;
//$mW=0;
/*
if($simp<10) $mW=($simp-1)/10;		//wet without salt
if($simp>9) $mW=1+($simp-9)/100; 		//wet with salt
if($simp>109) $mW=2+($simp-109)/1000;	//salty wet
 */
//$mW=sqrt(sqrt(($simp-1)/10));				//just moist
//$mW=sqrt(sqrt(sqrt(($simp-1)/1)));				//just moist, 9502 Osijek, 21.01.u 17h most bio mjestimice sklizak, bio je udes
//$mW=10*sqrt(sqrt(($simp-1)/1000));				//just moist
//$mW=10*sqrt(sqrt(($simp-1)/100));				//just moist

//$mW=0;
//$mWs=$wimp/$st_kw/1;				//just moist
$mWs=($wimp-$st_kw/40)/$st_kw;				//2916: mali cap, suvie vode

//$mWs=0.2*sqrt(sqrt(sqrt($mWs)));  //3475: viiz halott uutszondaahoz nem működik
// if($mWs>0) $mWs=0.2*sqrt(sqrt(sqrt($mWs)));
//if($mWs>0) $mWs=0.2*sqrt($mWs); //3931 vízrétegvastagság és csapadékkalibrációt követően  a szitáló eső túlerős lett
if($mWs>0) $mWs=2*sqrt($mWs); //3990 simp sklizne voda, wimp nedovoljan

//$mWs=0.2*sqrt(sqrt(sqrt(sqrt(sqrt($mWs)))));
//if($wimp>6666) $mW=($wimp+400-$st_kw)/6666/1;				//aataazott cap
//if($wimp>6666 && $st_kw<16666) $mWs=1;				//aataazott cap
//if($wimp>6666 && $st_kw>16666)       	$mWs=sqrt(sqrt($fT/10*$fT/10))*$rH/100*$rH/100*$rH/100;				//aataazott cap
//$mW=sqrt(sqrt($mW));
//if($mWs<0.0001) $mWs=0.0001;
//if($mWs>$mW )  $mW=$mWs;   //4051: BRScap prebacuje na -32000 kad ovlaži
//if($mWs>$mW && $simpW>0)  $mW=$mWs;

//$mW/=2;
$mW/=1;

//$mW=3;
//$V3=1.25*$Value_3[$stNo];
//$V3=1.25*(0.7+$precip_stat1[$stNo]/10);
$V3=1.35*(0.7+$precip_stat1[$stNo]/10);
if($V3>1.4) $V3=1.4;
if($wimp>6666 && $st_kw>16666)  $V3=0.9;
if($simp>1 && $V3<1.1) $V3=1.1;
$mW=$mW*$V3*$V3*$V3;
//$mW+=0.12*$V3*$V3*$V3*$V3*$V3;
//$mW+=0.06*$V3*$V3*$V3*$V3*$V3;

//###########################  the new capacitive Boreas pawement sensor  ###############################   END

?>
