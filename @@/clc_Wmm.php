<?php  
//if($V3>0.95) $mW+=0.07*$V3*$V3*$V3*$V3*$V3;
//if($V3<0.95 && $stNo!=9073 && $stNo!=9091 && $stNo!=9103 && $stNo!=9124 && $stNo!=9142) $mW=0;
$Wmm=1*$mW;
//$Wmm=2*sqrt(sqrt($mW));

$sS0=$surf_salt_pri0[$stNo];		// residual salt
//$fT0=-0.1-1.92*sqrt($sS0)*1;   //  residual salt freezing temperature
//$fT0=-0.1-20*pow($sS0/25,1.22);   //  residual salt freezing temperature
$fT0=-0.1-20*pow($sS0/45,1.22);   //  residual salt freezing temperature

//$f0n=1+10*sqrt((-$fT0)/10);   //2458: túlerõs a vízréteg sóredukciója    sqrt(0.1/10)=0.1,
$f0n=1+2*sqrt((-$fT0)/10);   //2458: túlerõs a vízréteg sóredukciója    sqrt(0.1/10)=0.1, túlerős a vízréteg sóredukció
//$f0=sqrt($f0n); //2551: bru sósan kevesebb vizet mérjen
//$f0=1+sqrt(sqrt($f0n*$f0n*$f0n));//$f0=$f0n;
//if($st_kw>10 && $st_kw<1000) 
	$f0=$f0n;  //2507: brs sósan kevesebb vizet mérjen
//3096: melegben csökken a vízréteg, ami hiba lehet 
/*
$st_k2T=$st_k2;        //hõmérsékletfüggõ vízérzékenység
//if($sT>0)$st_k2T=$st_k2*(1-(sqrt($sT/30)));
if($sT>15)$st_k2T=$st_k2/sqrt($sT)/2;
if($sT>30)$st_k2T=0;
 */
$st_k2T=$st_k2; //PZ3297: csökkenő vízréteg az elhúzódó esővel, esővel növekvő vízrétegszorzó, nélküle csökkenő
//$st_k2r[$stNo]=$st_k2r[$stNo]+$st_k2*($Rmm/100-0.01);
//if($st_k2r[$stNo]>1/(0.1+$Wmm)*$st_k2) $st_k2r[$stNo]=1/(0.1+$Wmm)*$st_k2;
//if($st_k2r[$stNo]<$st_k2) $st_k2r[$stNo]=$st_k2;
//$st_k2T=$st_k2r[$stNo]/10;
//$st_k2T=$st_k2r[$stNo]/1;
//	$Wmm=10*$st_k2T/$f0*$Wmm/$f0;  	// calibrated waterfilm, salt correction TADAMMM
//	$Wmm=5*$st_k2T/$f0*$Wmm/$f0;  	// calibrated waterfilm, salt correction TADAMMM
	$Wmm=1*$st_k2T/$f0*$Wmm/$f0;  	// 2495: legyen szárazabb
//	$Wmm=0.1*$st_k2T/$f0*$Wmm/$f0;  	// 2495: legyen meeg szárazabb
//$Wmm=3*$st_k2T/$f0*$Wmm/$f0;   //PZ-2548: 9529: Od 15 sati preuzeo sam smijenu deurstva ,te na svim mjernim stanicama pokazuje se suh kolnik a nije istina jer kia pada satima i kolnik je mokar //if($st_kw<10) {$Wmm=3*$Wmm; $cF=10*$Wmm;}
//PZ2747: uracunati oborine u Wmm
//if(($surf_tempD[$stNo]<0.1 || $sT>3) && $wimp>500 ) $Wmm+=$Rmmx[$stNo]/10*$st_kl/2;
//if($surf_tempD[$stNo]<0.1  && $wimp>500 ) $Wmm+=sqrt($Rmmx[$stNo])/2*$st_kl/2; //2957: 2C fölött nincs esohozam

if($surf_tempD[$stNo]<0.1  && $simpD>3 && $aT<3 ) $Wmm+=sqrt($Rmmx[$stNo])/40; //*$st_kl/2;
//if($sT>3) $Wmm+=sqrt($Rmmx[$stNo])/10*$st_kl/2;//2957: 2C fölött nincs esohozam
//if($sT>3) $Wmm+=sqrt($Rmmx[$stNo])/100*$st_kl/2;
//if($sT>3) $Wmm+=sqrt($Rmmx[$stNo])/100*$st_kl/$sT;
 $Wmmp=10*sqrt($Rmmx[$stNo])*$st_kl/(10+($sT-5)*($sT-5));
//$Wmm+=$Wmmp;

//if($sT>3) $Wmm+=sqrt($Rmmx[$stNo])*$st_kl/$sT*$Wmm;
//if($st_k2>10) $Wmm+=$st_k2*$Rmmx[$stNo]/10*$st_kl/$sT;  //2832:  viiz halott uutszondaahoz //3475: viiz halott uutszondaahoz nem működik
if($surf_tempDX[$stNo]<0.1  && $st_k2>10) $Wmm+=$st_k2*$Rmmx[$stNo]/100*$st_kl/(1+($sT-5)*($sT-5))/10;  //2832:  viiz halott uutszondaahoz //3475: viiz halott uutszondaahoz nem működik
//if($stNo==9522) $Wmm=0+1;
//if($stNo==9522) $Wmm+=1;


//$Wmmd0[$stNo]=$Wmm-$surf_water_depth0[$stNo];
//if($Wmmd0[$stNo]<-0.01 && $rH>80 && $V3>1) $Wmm=$Wmm-$surf_water_depthD[$stNo]*$rH/100;      // 2251: rH>90%-on nehezen száradjon
//if($Wmmd0[$stNo]<-0.01 && $rH>80 && $sT<0) $Wmm=$surf_water_depth0[$stNo]*sqrt($rH/100);      // 2251: rH>90%-on nehezen száradjon
//if($Wmmd0[$stNo]<-0.01 && $rH>90 && $sT<0 && $Wmm<0.1) $Wmm=$surf_water_depth0[$stNo]*sqrt($rH/100);      // 2251: rH>90%-on nehezen száradjon  //3475.1> de lasabban száradjon
//if($Wmmd0[$stNo]<-0.01 && $surf_tempD[$stNo]<0.1 && $Wmm<0.15) $Wmm+=$st_k2*$surf_water_depth0[$stNo]*sqrt($rH/100)/10; 
//if($Wmmd0[$stNo]<-0.01 && $surf_tempD[$stNo]<0.1 && $Wmm<0.15) $Wmm+=1*$surf_water_depth0[$stNo]*sqrt($rH/100)/1; //3948> csúnya indokolatlan vízrétegnövekmény a kisebb st_k2-vel
//20120108//   if($Wmmd0[$stNo]<0.001 && $surf_tempD[$stNo]<0.1 && $Wmm<0.35 && ($st_krh-1)*($st_krh-1)<0.05) $Wmm*=1.15*sqrt($rH/100)/1;

//  if(($st_krh-1)*($st_krh-1)<0.05  && $Wmm<0.1) $Wmm+= $Wmm*sqrt($rH/100)*10;  
//3466: VANI SIJE SUNCE (OD 7h) CESTA STUHA ,A STANICA JO? UVIJEK POKAZUJE MOKAR KOLNIK ( U 10h) STANJE NISTE PROVJERILI NITI POPRAVILI JO? OD 7 MJ.2010. GODINE .ISTA JE BESKORISNA,DAPA?E ?AK I VEOMA ?TETNA ZA NAS. JASTREBARSKO(9533) 2011-02-08 11:05
//if($rH<90 && $sT>0 ) $Wmm*=($rH/100)*($rH/100)*($rH/100)*($rH/100);      // 2251: rH<70%-on gyorsabban száradjon
//if($rH<90 && $aT>0 ) $Wmm*=($rH/100)*($rH/100)*($rH/100)*($rH/100);      // 2251: rH<70%-on gyorsabban száradjon
//if($rH<90 ) $Wmm*=($rH/100)*($rH/100)*($rH/100)*($rH/100);      // 2251: rH<70%-on gyorsabban száradjon
// if($st_k2<10) 

//20120108//   if( ($st_krh-1)*($st_krh-1)<0.05) $Wmm*=($rH/100)*($rH/100)*($rH/100)*($rH/100);      // 2251: rH<70%-on gyorsabban száradjon
  if( ($st_krh-1)*($st_krh-1)<0.05  && $st_k2<10) $Wmm*=($rH/100)*($rH/100)*($rH/100)*($rH/100);      // 2251: rH<70%-on gyorsabban száradjon




//$Wmm=1*$mW;
//if($Wmm<0) $Wmm=0;
//$ks=0.4;  //if($Wmm>0.2) $Wmm=0.2*sqrt(sqrt($Wmm/0.2));
$ks=0.6;  //if($Wmm>0.2) $Wmm=0.2*sqrt(sqrt($Wmm/0.2));
if($Wmm>$ks) $Wmm=$ks*sqrt(sqrt($Wmm/$ks));    //security brake
if($Wmm>2*$ks) $Wmm=2*$ks*sqrt(sqrt(sqrt(sqrt($Wmm/$ks))));    //security brake
//$Wmm=0;
//$Wmm=$mW/10;
if($Wmm<0) $Wmm=0;



//$ki=0.001*$st_ki*1; //2459: túlgyors a sókopás
//$ki=0.001*$st_ki*22;  //PZ-2548: 9529: Od 15 sati preuzeo sam smijenu deurstva ,te na svim mjernim stanicama pokazuje se suh kolnik a nije istina jer kia pada satima i kolnik je mokar 
$ki=0.001*$st_ki*22*2;  //PZ-2548: 9529: Od 15 sati preuzeo sam smijenu deurstva ,te na svim mjernim stanicama pokazuje se suh kolnik a nije istina jer kia pada satima i kolnik je mokar 
//2552: hidegen kevésbbé kopjon:
if($sT<-1) $ki=$ki/sqrt($sT*$sT);
//PZ2558: registrirane oborine vie peru sol:
//if($Rmm>1) $ki=$ki*$Rmm*$Rmm; //PZ2558.3: Rmm da uveca ki:
if($Rmmx[$stNo]>1 ) $ki=$ki*sqrt($Rmmx[$stNo]);

//PZ2558.1: ki malo za niske Sc i sT:
if($sS0<10) $ki=$ki*sqrt($sS0/10);

if(($sT-$aT)*($sT-$aT)<100){
//PZ-2539:  vie soli na suvljem K+
 //  	$Sc=(100+($sT-$aT)*10)*$Sc/$rH; 
//	$Sc=(100+($sT-$aT)*10)*$Sc/$rH; 
}
//if($Sc>25) $Sc=25;
//$Sc/=2;
$Sc/=3;
//$cF=-0.1-1.92*sqrt($sS0);          // actually measured freezing temperature
$cF=-0.1-20*pow($Sc/35,1.22);          // actually measured freezing temperature


//if($Wmm>$ks/3)  $ki=$ki*$Wmm/$ks;//*$sS0; 	//salt loss coefficient
					// residual salt impregnated into the pawement, but slightly diminishing 
//if($Wmm>$ks) $kif=10;   //PZ-2606: 9527 Gornje Jelenje u 30-10 reimu javlja sS<Sc led!
//	$kif=3*$Wmm;			// residual salt corrected with loss coefficient on wet pawement
//	$kif=1*$Wmm;			// residual salt corrected with loss coefficient on wet pawement
	$kif=1*$Wmm+0.01*$sS0;		// residual salt corrected with loss coefficient on wet and dry pawement
$kis=1-$kif*$ki*$Df*$measure_timeD[$stNo]/6000;   // PZ-2624 9533 sol je prebrzo iskopnila
//$kis=1-$kif*$ki*$Df*$measure_timeD[$stNo]/2;   // PZ-2624 9533 sol je prebrzo iskopnila
if($kis<0.1) $kis=0.1;
// PZ:2453 minuszban nem nedvesedhet az úttest, hacsak nem a sózástól

//$kiss[$stNo]*=$kis;	
$sS=$sS0*$kis;		// residual salt corrected with loss coefficient on wet pawement
//$Sc*=$kis;		// residual salt corrected with loss coefficient on wet pawement

//if($Sc>$sS && $Sc<$sS+4 && ($V3>1 || $stNo==9073 || $stNo==9091 || $stNo==9103 || $stNo==9124 || $stNo==9142)) $sS=$Sc;
//if($Sc>$sS+4 && ($V3>1  || $stNo==9073 || $stNo==9091 || $stNo==9103 || $stNo==9124 || $stNo==9142)) $sS=$sS+4;  //PZ-2606: 9527 Gornje Jelenje u 30-10 reimu javlja sS<Sc led!

if($Sc>$sS && $Sc<$sS+4 && ($V3>1)) $sS=$Sc;
if($Sc>$sS+4 && ($V3>1)) $sS=$sS+4;  //PZ-2606: 9527 Gornje Jelenje u 30-10 reimu javlja sS<Sc led!


if($sS>35) $sS=35;

//$fT=-0.1-1.92*sqrt($sS)*1;   //  residual salt freezing temperature
//$fT=-0.1-20*pow($sS/25,1.22);   //  residual salt freezing temperature
//$fT=-0.1-20*pow($sS/45,1.22);   //  residual salt freezing temperature
//$sSw=$sS/(1+$Wmm);  //2780: fT =/=f(sS), fT=f(sS,Wmm)
$sSw=$sS;
$fT=-0.1-20*pow($sSw/35,1.22);   //  residual salt freezing temperature

//2688: 9074 Ásotthalom folyamatosan visszanedvesedo vályu csakis sós lehet!
//if($surf_water_depthD[$stNo]>0.01 && ($rel_humD[$stNo]>0.1 || $rH>95) && $surf_tempD[$stNo]<0 && $sT<$fT-0.2 && $sT>$dT) $sS+=0.321;
//2900: vizes, mégsem fagy -4C-on!lopakodó sózás algoritmusának kikapcsolása:
//if($surf_water_depthD[$stNo]>0.02 && ($rel_humD[$stNo]>1 || $rH>95) && $surf_tempD[$stNo]<0 && $sT<$fT+0.2) $sS+=0.321*$st_k1;
//if( $surf_tempD[$stNo]<-0.2  && $sT<$fT+2) $sS+=11.321;  //2833: gyors sT esees = soo
//if( $surf_tempD[$stNo]<-0.6  && $sT<$fT+2) $sS+=11.321;  //2833: gyors sT esees = soo
//if( $surf_tempD[$stNo]<-0.6  && $sT<$fT+2 && $Wmm>0.05) $sS+=11.321;  //2833: gyors sT esees = soo
//if( $surf_tempDX[$stNo]<-0.1  && $sT<$fT+2 && $Wmm>0.05) $sS+=11.321;  //2833.1: gyors sT esees = soo+
////2900: vizes, mégsem fagy -4C-on!lopakodó sózás algoritmusának kikapcsolása:
//if( $surf_tempDX[$stNo]<-0.1 && $surf_tempD[$stNo]<-0.4 && $sT<$fT+2 && $Wmm>0.05) $sS+=11.321*$st_k1;  //2833.1: gyors sT esees = soo+
//if($sT<$fT-0.0052 && ($simp>3.2 || $wimp>1717)) $sS+=0.321*(1+sqrt(sqrt($simp)))*$st_k1;
//if($sT<$fT-0.0052 && ($simp>3.2 || $wimp>2717 || $V3>1.2)) $sS+=0.321*(1+sqrt(sqrt($simp)))*$st_k1;
//if($sT<$fT-0.0052 && ($simp>9.2 || $wimp>3717 )) $sS+=0.321*(1+sqrt(sqrt($simp)))*$st_k1; //3331: Bučje: nije led ako ima signal u minusu
$st_kwL=$st_kw;

if($st_kwL>7700) $st_kwL=7700;
//if($sT<$fT-0.0052 && ($simp>5.2 || $wimp>$st_kwL/3)) $sS+=0.321*(1+sqrt(sqrt($simp)))*$st_k1; //3460  	-3  	lažna poledica  	porast vlage ispod fT znači sol
//if($sT<$fT-0.0052 &&  $simpD>0) $sS+=1.321*(1+sqrt(sqrt($simp)))*$st_k1; //4015 lažna sol
//if($sT<$fT-0.0052 &&  $simp>1 &&  $simpD>0) $sS+=1.321*(1+sqrt(sqrt($simp)))*$st_k1; 
if($sT<$fT-0.0052 &&  $simp>5.1 &&  $simpD>0) $sS+=1.321*(1+sqrt(sqrt($simp)))*$st_k1; 

//if($V3>1 && $simp<0.2)  $sS-=0.01; // GENERATES ERROR BY GOING TO sS negative
//if($V3>1 && $simp<0.2)  $sS*=0.99;
//if($V3>1.3 && $simp<1.2 && $sT>$fT-1 && $surf_tempD[$stNo]<0 )  $sS*=0.95;

// NEPOTREBNO? IPAK TERBA!   $surf_water_depthD[$stNo]=$Wmm-$surf_water_depth0[$stNo];

 //         $surf_water_depthDa[$stNo]= $Wmm-$surf_water_depth0[$stNo] ;
          $surf_water_depthDa[$stNo]= $Wmm-$surf_water_depth[$stNo] ;
if($measure_timeD[$stNo]<900){
//    if($surf_water_depthD[$stNo]*600/$measure_timeD[$stNo]>.05)    $Wmm=$surf_water_depth0[$stNo]+$surf_water_depthD[$stNo]/4*$measure_timeD[$stNo]/1500 ;
//    if($surf_water_depthD[$stNo]*600/$measure_timeD[$stNo]<-.05)   $Wmm=$surf_water_depth0[$stNo]+$surf_water_depthD[$stNo]/8*$measure_timeD[$stNo]/1500 ;
//  4016: sonda se presporo suši
    if($surf_water_depthDa[$stNo]*600/$measure_timeD[$stNo]>.08)    $Wmm=$surf_water_depth0[$stNo]+$surf_water_depthDa[$stNo]/2*$measure_timeD[$stNo]/1500 ;
    if($surf_water_depthDa[$stNo]*600/$measure_timeD[$stNo]<-.08)   $Wmm=$surf_water_depth0[$stNo]+$surf_water_depthDa[$stNo]/3*$measure_timeD[$stNo]/1500 ;
}
?>
