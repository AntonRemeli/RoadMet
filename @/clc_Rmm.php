<?php  

//#################################  the BPW Boreas Present Weather sensor:  ##################################START

//PZ2663.1: BPW magla: fog>10 , maglasipi: fog~100, int>10, lng<5. saturacija: count=0.  snijeg: lng>10, int<5. kisasipivelikakap: lng>10, int<5, aT>3

$fog=0;
		$count=100*$Value_2[$stNo];     //count 0-9999    cseppszám
		$bgrnd=100*$Value_3[$stNo];     //count 500-600    átesési idő 
		$fog=100*$Value_4[$stNo];     //count 0-999         átlagos cseppméret
//		$lng=100*$Value_5[$stNo];     //count 0-999          nedvesség
//		$int=100*$Value_6[$stNo];     //count 0-999           fénysorompó intenzitás

		$v7=$Value_7[$stNo];     //count 0-999

//PZ2663.1: BPW magla: fog>10 , maglasipi: fog~100, int>10, lng<5. saturacija: count=0.  snijeg: lng>10, int<5. kisasipivelikakap: lng>10, int<5, aT>3

//#################################  the BPW Boreas Present Weather sensor:  ################################## END
 
		$int=$precip_imp_int[$stNo]; 
		$lng=$precip_imp_lng[$stNo];
$Rmm = 0;
//$Rip = 0;						//rain intensity
//$Ri = 0;					
//if($count<1000) { $int++; $lng++; } //3344.2  	-3  	kod stanice 9521 Most Repaš je vijavica tako jaka da je BPW saturirao, te nemamo stanje padalina  	dorada algoritma  	 	2010-12-03 09:00:00

//if($int<9999 && $int>0 && $lng>0) 	{$Rip=2*sqrt(sqrt($int*sqrt($lng)));$Ri=30*$int*sqrt($lng);}
//if($int<9999 && $int>0 && $lng>0) 	{$Rip=2*sqrt($int*$lng);$Ri=30*$int*sqrt($lng);}
//if($int<9999 && $int*$lng>11) 	{$Rip=2*sqrt($int*$lng);$Ri=30*$int*sqrt($lng);}
//if($int<9999 && $int*$lng>11 && $lng>$int && $int>1) 	{$Rip=2*sqrt($int*$lng);$Ri=30*$int*sqrt($lng);}

//if($int<9999 && $int*$lng>31 && ($lng>$int || $lng>6) && $int>1) 	{$Rip=2*sqrt($int*$lng);$Ri=30*$int*sqrt($lng);}
//if($int<9990 && $int*$lng>31 && ($lng>$int || $lng>6) && $int>1) 	{$Rip=2*sqrt($int*$lng);$Ri=30*$int*sqrt($lng);}
//if($int<199 && $int*$lng>31 && ($lng>$int || $lng>6) && $int>1 && $lng<199) 	{$Rip[$stNo]=2*sqrt($int*$lng);$Ri[$stNo]=30*$int*sqrt($lng);}
if($int<199 && $int*$lng>31 && ($lng>$int || $lng>6) && $int>1 && $lng<199 && $AccuV[$stNo]<13.9)  $Rip[$stNo]+=10*sqrt(sqrt(sqrt($int*$lng)));
//if($int<9999 && $int>0 && $lng>0) 	$Rip=2*sqrt(sqrt($int*sqrt($lng)));
//if($int<9999 && $int>0 && $lng>0) 	$Rip=3*sqrt(sqrt(sqrt($int*$lng)));
//if($int<9999 && $int>0 && $lng>0) 	$Rip=5*sqrt(sqrt(sqrt(sqrt($int*$lng))));
//if($int<13 && $lng>13) $Rip/=10;
//if($int>113 && $lng==1) $Rip/=10;

//if( $Raino[0]=='B' && $Raino[2]=='W' && rand(1, 100)>0 )  $Rip+=$Rmmx[$stNo]*3/4;  //3436  	-3  	az eső túl tüskés  	a többi mérésre is rá kell húzni  	
//if( $Raino[0]=='B' && $Raino[2]=='W' && $Rip==0 && $Rmmk[$stNo]<9)  {$Rip=$Rmmx[$stNo]; $Rmmk[$stNo]++;}
//if( $Raino[0]=='B' && $Raino[2]=='W' && $Rip==0 && $Rmmk[$stNo]<9)  {$Rip=$Rmmx[$stNo]; $Rmmk[$stNo]++;}
if( $Raino[0]=='B' && $Raino[2]=='W'  && $Rip[$stNo]<$Rmmx[$stNo] && $Rmmk[$stNo]<9)  {$Rip[$stNo]=$Rmmx[$stNo]; $Rmmk[$stNo]++;}
elseif( $Raino[1]=='B' && $Raino[3]=='W' && $Rip[$stNo]<$Rmmx[$stNo] && $Rmmk[$stNo]<9)  {$Rip[$stNo]=$Rmmx[$stNo]; $Rmmk[$stNo]++;}
else $Rmmk[$stNo]=0;

if( $Raino[0]=='B' && $Raino[2]=='D' && $AccuV[$stNo]<13.3 )
//if( $Raino[0]=='B' && $Raino[2]=='D' && $surf_water_depthDa[$stNo]>0.0051*$measure_timeD[$stNo]/600)
{
	if($int==1 && $surf_water_depthD[$stNo]>-0.051*$measure_timeD[$stNo]/600) $Rip[$stNo]=238; 
 $Rip[$stNo]*=0.7; 
//	if($int==0.01) $Rip=5; //Mjerna postaja Erdut I Dra pokazuju snijeg, njega nema. Molim korekciju
	if($int==0.01 && $sT>-2) $Rip[$stNo]=55; 
	if($int==-0.01) $Rip[$stNo]=0.1;
	if($aT>$sT) $Rip[$stNo]/=1+$aT-$sT;
}
//if($Value_7[$stNo]==-2 && $Value_3[$stNo]>5.12 && $precip_imp_lng[$stNo]<5) $Rmm=0;

//$Rmm = sqrt($Rip) *($Wmm-0.01)*10;		 //rain intensity
//$Rmm = $st_kl* $Rip *($Wmm-0.01)*1;		 //rain intensity
$Rmm = $st_kl* $Rip[$stNo] *(1+$Wmm-0.01)*1;	
$RmmZ=$Rmm;
//$Rmmz=$Rmm;	 //rain intensity
//$Rmm = $st_kl* sqrt($Rip) *($Wmm-0.01)*10;		 //rain intensity
//$Rmm = $st_kl* sqrt(sqrt($Rip)) *($Wmm-0.01)*10;		 //rain intensity
//if($sT<0 || $v3>0.8) $Rmm+= $st_kl* $Rip/3;
//if($sT<$fT || $bgrnd<530) $Rmm+= $st_kl*sqrt($Rip)*10;  //2959: esõ, ha bgrnd~512min

//if($sT<$fT || $bgrnd<530) $Rmm+= $st_kl*$Rip*10;  //2959: esõ, ha bgrnd~512min
//if($sT<$fT) $Rmm = $st_kl* $Rip; //3441: havazik, de alig jelzi, habár a BPW érzékeli
//$Rmm =$st_kl* $Rmm *(1+10*$Wmmd)*($Wmm-0.01)*($Wmm-0.01)*1000;		 //rain intensity

$sTd=0.84211;
//if($surf_tempD[$stNo]<$sTd and $Rmm>0.5 and $Wmm>0.04 ) $Rmm*=($sTd-$surf_tempD[$stNo]);
//else $Rmm=0;

//if($Ri>0 && $Ripk[$stNo]<25)  {$Ri--; $Ripk[$stNo]++;}
//if($Ri[$stNo]>1.2 && $Ripk[$stNo]<10)  {$Ri[$stNo]=sqrt($Ri[$stNo]);$Rip[$stNo]=sqrt($Rip[$stNo]); $Ripk[$stNo]++;}
if($Rip[$stNo]>1.001 && $Ripk[$stNo]<10)  {$Rip[$stNo]*=0.97; $Ripk[$stNo]++;}
//if($Ri[$stNo]>1.2 || $Ripk[$stNo]<25)  { $Ripk[$stNo]++;}
else {$Ripk[$stNo]=0;  $Rip[$stNo]=0; }

//$Rmmz=$Rmm;	
$Rw=0;
if($surf_water_depthDa[$stNo]>0.01*$measure_timeD[$stNo]/600) $Rw=10*sqrt((1+$Rip[$stNo])*$surf_water_depthDa[$stNo]/$measure_timeD[$stNo]*600);
if($Wmm/$f0>0.49 && $Wmm>0.4) $Rw+=10*($Wmm-0.4);
if($Ripk[$stNo]>0) $Rmm+=sqrt($Rw)/(1+$surf_salt_pri0[$stNo]); //$Rip+=$Rmm/111
if( $st_kl>10 ) $Rmm+=10*$st_kl*sqrt($Rw)/(1+$surf_salt_pri0[$stNo]); //$Rip+=$Rmm/111;
if(  $st_kl<0.1) $Rmm+=1/$st_kl*sqrt($Rw)/(1+$surf_salt_pri0[$stNo]); //$Rip+=$Rmm/111;

$RmmZ=$Rmm;
//3439 növekvő vízréteg esőmultiplikátor:
//if($surf_water_depthD[$stNo]>0.051*$measure_timeD[$stNo]/600) $Rmm*=$surf_water_depthD[$stNo]/$measure_timeD[$stNo]*0.051;

//$Rmm=1.73*($Wmm-0.01)*10;
if(($Raino[0]=='B' && $Raino[2]=='W') || ($Raino[1]=='B' && $Raino[3]=='W'))
{
//	if($bgrnd<500) $bgrnd+=60; //PZ2624:9533 sol je prebrzo iskopnila
//$g=552;
//$g=552+$aT;
$g=532+$aT/3;
//if($aT<-2) $g=583; else $g=542; //PZ2630: BPW ne vidi danju snijeg
//if($bgrnd<$g) $Rmm+= $Rip*($Wmm-0.01);
//if($Rip==0) $Rmm = 0;
//if($bgrnd>$g && 2*$int>$lng) $Rmm = 0;
//if($bgrnd>$g || 2*$int>$lng) $Rmm = 0;
//if($bgrnd>$g || $int>$lng+4) $Rmm = 0;
//20120108// if($bgrnd>$g || $int>$lng+144) $Rmm = 0;
if(($bgrnd>$g || $int>$lng+144) && $AccuV[$stNo]>13.9) $Rmm = 0;
//if($aT<0.5  && $lng<4 && $Rmmk[$stNo]==0) $Rmm = 0;

//if($int>33 && $lng<33 && $fog>18) $Rmm=0;
//if ($aT<1 && 2*$int>$lng && $lng>1) $Rmm=0;
//20120108// if ($aT<1 && 2*$int>$lng && $lng>1 && $fog>18) $Rmm=0;
}
//$RmmZ=$Rmm;
//$Rmmz=$Rmm;
//if( $Raino[0]=='B' && $Raino[2]=='W' && 2*$int>$lng) $Rmm = 0;
//if( $Raino[0]=='B' && $Raino[2]=='W' && ($int>$lng+9 || $int>100) ) {$Rmm = 0; $Rip=0;}
//if( $V3<1 ) {$Rmm = 0; $Rip=0;} //2905: IRSS: nem igaz hogy eso volt
//if( $Raino[0]=='B' && $Raino[2]=='W' ) {$Rmm = 0; $Rip=0;}
//if( $V3<1 && $sT>$fT ) $Rmm = 0;  //2905: IRSS: nem igaz hogy eso volt
//if( $V3<1 && $sT>$fT && $surf_water_depth0[$stNo]<0.001 ) $Rmm = 0;  //2966: túlszáradó v3 miatt elszárad az esõjel
//if($Rmm==0) $Rip=0;
// $Rmm/=3;
 if($aT<2.5) $Rmm*=0.8;
 if($aT<1.5) $Rmm*=0.8;
 if($aT<0.5) $Rmm*=0.8;
// if($aT>$sT) $Rmm/=1+$aT-$sT;


//$RmmZ=$Rmm;
// if($aT<1.5 && $lng<10 && $st_kw>1000) $Rmm=0;   //suviše restriktivno
// if($aT<1.5 && $lng<5 && $int>5 && $st_kw>1000) $Rmm=0;   
// if($aT<1.5 && $lng<5 && $st_kw>1000 && $fog>22) $Rmm=0;   
//  if($aT<1.5 && $lng<5 && $st_kw>1000) $Rmm=0;   //3432:  snježi povremeno, BPD je suviše potisnut
//  if($aT<1.5 && $lng<5 && $st_kw>10) $Rmm/=2;   
 //if($surf_tempDX[$stNo]>0.01 && $surf_temp[$stNo]>0 &&  $Wmm<0.04) $Rmm=0;
// $Rmm/=1; //3337  	-3  	Mnogo ljudi se žali na rad BPW-a. Naime registrira krive padaline i čudne količine oborina, najčešće prevelike. Ukoliko nešto možete poboljšati bilo bi odlično.  	kontrola  	clc_Rmm modificiran, smanjen koeficijent za padaline  	2010-11-30 21:00:00  	odgovarajući izlaz
$Rmm/=20;
//$Rmmz=$Rmm;
//$Rmm/=48;
// if($Rmm<.5  ) $Rmm=0;
// if($Rmm<.05  ) $Rmm=0;   //tu jos ne
//20120108// if($surf_tempD[$stNo]>0.1 ) $Rmm=0; //4000:  u 10 sati i 50 minuta stanica pokazuje 2 cm  i provijava sve crveno označeno a ja stojinm kraj nje na sunxcu temp +2 bez vjetra mirno ugodno    ----pitanje---kako to???
//20120108// if($surf_tempD[$stNo]>0.1  || $AccuV[$stNo]>12.7) $Rmm=0;
//if($Wmm>0 ) $Rmm+=$Wmm;  //3974: lažna kiša preterala: redukcija sa solju i vlagom zraka

if( $AccuV[$stNo]<13.9) {     //4000:  u 10 sati i 50 minuta stanica pokazuje 2 cm  i provijava sve crveno označeno a ja stojinm kraj nje na sunxcu temp +2 bez vjetra mirno ugodno    ----pitanje---kako to???
if($Wmm>0 ) $Rmm+=$Wmm/(1+$sS0);
//if($rH>95) $Rmm=$Rmm/(1+$rH-95);
//if($surf_water_depthDa[$stNo]>0) $Rmm+=10*$surf_water_depthDa[$stNo]; //3932: treba veća kiša kada je BPW neispravan
if($surf_water_depthDa[$stNo]>0) $Rmm+=10*$surf_water_depthDa[$stNo]/(1+$sS0/10); //3932: treba veća kiša kada je BPW neispravan
}
//$RmmZ=$Rmm*20;
//$Rmmz=$Rmm;
//if($Wmm>0 && $Wmm<0.1) $Rmm*=$Wmm; //3931 vízrétegvastagság és csapadékkalibrációt követően  a szitáló eső túlerős lett
//if($Wmm>0 && $Wmm<0.2) $Rmm*=($Wmm/0.2)*($Wmm/0.2); 
//if($Wmm>0 && $Wmm<0.2) $Rmm*=($Wmm/0.2+0.3)*($Wmm/0.2+0.3); 
//if( $Wmm<1) $Rmm*=($Wmm+0.3)*($Wmm+0.3); 
//if( $Wmm<1) $Rmm*=($Wmm+0.1); 
if( $Wmm<1) $Rmm*=($Wmm+0.1);    //4049: BPW neispravan lazne oborine na suh kolnik

 if($aT>$sT) $Rmm/=1+$aT-$sT;   //4201:  13.12.2013. u 03.20 sati susnježica na veternici ,a kad ono noć potpuno vedra i suha ,čak se ni magla ne vuče.
   
 if($Rmm<.25  ) $Rmm=0;
//$RmmZ=$Rmm*20;
if($Rmm==0) $Rip[$stNo]=0;

//$Rmmz=$Rmm;
// $Rmmx[$stNo]=$Rmm;
 $Rmmx[$stNo]=$Rip[$stNo]/1;

if($Rmmx[$stNo]<$Rmm) $Rmmx[$stNo]=$Rmm;

//if($v7==-2 && $count<9000) { $int++; $lng++; $Rmm=0.1;} //3344.2  	-3  	kod stanice 9521 Most Repaš je vijavica tako jaka da je BPW saturirao, te nemamo stanje padalina  	dorada algoritma  	 	2010-12-03 09:00:00
//if($v7==-2 && $count<8000) { $fog+=22; $Rmm=0;} 
//if($v7==-2 && $count<9000 && $aT<-2) { $int++; $lng++; $Rmm=0.1;} //3344.2  	-3  	kod stanice 9521 Most Repaš je vijavica tako jaka da je BPW saturirao, te nemamo stanje padalina  	dorada algoritma  	 	2010-12-03 09:00:00
//if($v7==-2 && $count<8000 && $aT<-2) { $fog+=22; $Rmm=0;} 
if($Raino[0]=='B' && $Raino[2]=='W' && $count<9000 && $aT<-2) { $int++; $lng++; $Rmm=0.1;} //3344.2  	-3  	kod stanice 9521 Most Repaš je vijavica tako jaka da je BPW saturirao, te nemamo stanje padalina  	dorada algoritma  	 	2010-12-03 09:00:00
if($Raino[0]=='B' && $Raino[2]=='W' && $count<8000 && $aT<-2) { $fog+=22; $Rmm=0;} 
//$Rmm=2;
 //$RmmZ=$Rmm*20;
 // if($Rmm<0.5 || $rH<70 || $air_tempD[$stNo]>0 || $rel_humD[$stNo]<0) $Rmm=0;
//if($Rmm<0.5 || $rH<70 || $air_tempD[$stNo]>1 || $rel_humD[$stNo]<-1) $Rmm=0;

//if($Value_7[$stNo]!=-2 && $st_kw>10 && $int==1 && $surf_water_depthD[$stNo]>0) $Rmm+=1;
//if( $st_kw<10 && $int>0) $Rmm+=1;

/*
if($Rmm>1) {$n[$stNo]=0;$Rmm1[$stNo]=0;} 
if($Rmm>$Rmm1[$stNo]) $Rmm1[$stNo]=$Rmm;  

if($Rmm1[$stNo]>0 && $n[$stNo]<0.7*600/$measure_timeD[$stNo]) $n[$stNo]++;  else {$n[$stNo]=0;$Rmm1[$stNo]=0;}
$Rmm=11*$Rmm1[$stNo]/(11+$n[$stNo]);  
 */
//if($Rmm<0.5 || $rH<70 || $air_tempD[$stNo]>1 || $rel_humD[$stNo]<-1) $Rmm=0;
//if($int==2 && $Raino[0]=='B' && $Raino[2]=='D') $Rmm=0;
//PZ2663.1: BPW magla: fog>10 , maglasipi: fog~100, int>10, lng<5. saturacija: count=0.  snijeg: lng>10, int<5. kisasipivelikakap: lng>10, int<5, aT>3
//if($precip_imp_int[$stNo]>33 && $precip_imp_lng[$stNo]<33 && $Raino[0]=='B' && $Raino[2]=='W') $Rmm=0;

/* */

?>
