<?php  
error_reporting(0);


$Hr=date('H',$measure_time[$stNo]);
$Df=1;
if (($Hr>6) && ($Hr<19)) $Df=2;
$Df/=2;

//if($numr>0 && $measure_time[$stNo]>$measure_time0[$stNo])	{
if( $measure_time[$stNo]>$measure_time0[$stNo])	{
       $measure_timeD[$stNo]= $measure_time[$stNo]-$measure_time0[$stNo] ;

       if($measure_timeD[$stNo]<100)   $measure_timeD[$stNo]=20;
          $air_tempD[$stNo]= $air_temp[$stNo]-$air_temp0[$stNo] ;
	  $rel_humD[$stNo]= $rel_hum[$stNo]-$rel_hum0[$stNo] ;
  $surf_tempD[$stNo]= $surf_temp[$stNo]-$surf_temp0[$stNo] ;
}
	  $surf_tempD6[$stNo]= $surf_temp01[$stNo]-$surf_temp06[$stNo] ;
//	  $surf_tempD[$stNo]= $surft[$stNo]-$surft0[$stNo] ;
	  $surf_tempDX[$stNo]=(17*$surf_tempDX[$stNo]+$surf_tempD[$stNo])/18 ;
//	  $surf_water_depthD[$stNo]= $surf_water_depth[$stNo]-$surf_water_depth0[$stNo] ;

	  $rel_humDX[$stNo]=(17*$rel_humDX[$stNo]+$rel_humD[$stNo])/18;
//	  $surf_water_depthDX[$stNo]=(17*$surf_water_depthDX[$stNo]+$surf_water_depthD[$stNo])/18;

include ("clc_hod.php");	  // huge oscillatons dumper
include ("clc_arh.php");	  // air, road temperature & humidity  ALI ARH MORA PRVI ??   NEEEEEE !!!!!//
//include ("clc_hod.php");	  // huge oscillatons dumper

if($surf_tempD[$stNo]*$surf_tempD[$stNo]<0.1){
//           $surf_tempD[$stNo]=1;
//           $surf_tempD[$stNo]=$surft[$stNo];
//           $surf_tempD[$stNo]=$surft0[$stNo];
//2011okt15	  $surf_tempD[$stNo]= $sT-$surft0[$stNo] ;
//2011okt15	  $surf_tempDX[$stNo]=(17*$surf_tempDX[$stNo]+$surf_tempD[$stNo])/18 ;
}

//temperature plausibility correction
//if ($aT>25 || $aT<-25) $aT=3*$sT/4;
//if ($sT>30 || $sT<-25) $sT=4*$aT/3;
/*
//  OVDE TREBA:

// 	  $humD[$stNo]= $rH-$hum[$stNo] ;  
	  $humD[$stNo]= $hum[$stNo]- $hum0[$stNo] ;
	  $humDX[$stNo]=(17*$humDX[$stNo]+$humD[$stNo])/18;
//	  $surf_water_depthD[$stNo]= $Wmm-$surf_water_depth[$stNo] ;
	  $surf_water_depthD[$stNo]= $surf_water_depth[$stNo]-$surf_water_depth0[$stNo] ;
	  $surf_water_depthDX[$stNo]=(27*$surf_water_depthDX[$stNo]+$surf_water_depthD[$stNo])/28;
*/

    if($measure_time[$stNo]!=0)
    {	 //ccccccccccccccccccccccccccccccccccccccccccccccccc START:

if( $st_kw<10)   include ("clc_ssi.php"); 	// the old SSI pawement sensor:

if($st_kw>10 and $st_kw<1000)   include ("clc_brs.php");   	// the new Boreas pawement sensor:

//if($st_kw>1000)    include ("clc_bru.php"); 	// the upgraded Boreas pawement sensor:
if($st_kw>999)    include ("clc_bru.php"); 	// the upgraded Boreas pawement sensor:

include "clc_Wmm.php";
//if($stNo==9539) include "clc_Rmm9.php";
//else 
include "clc_Rmm.php";
//include "clc_Bpw.php";

  //tako i TU ne sme:
	  $humD[$stNo]= $rH-$hum[$stNo] ;
	  $humDX[$stNo]=(17*$humDX[$stNo]+$humD[$stNo])/18;
	  $surf_water_depthD[$stNo]= $Wmm-$surf_water_depth[$stNo] ;
	  $surf_water_depthDX[$stNo]=(27*$surf_water_depthDX[$stNo]+$surf_water_depthD[$stNo])/28;

// feedback to Sc:
if($sT<-3 && $surf_water_depthDX[$stNo]>2/100 && $humDX[$stNo]<2/10 && $Value_0[$stNo]<6.4 && $Rmm<0.1) $k5=1; else $k5=0;

//----- START ---------- ACTUAL/next XPS7N Data to Web Variables

	$hum[$stNo] 	= $rH;
	$air[$stNo] 	= $aT; //$Sc;//
	$surft[$stNo]= $sT; //$cW-10;//$sS;//
	$air_dew_temp[$stNo] 	= $dT;  //  $Wm*10;//$sSx;//
//	$air_dew_temp[$stNo] 	= $surf_tempM[$stNo];  //  $Wm*10;//$sSx;//   BADBADBADBADBAD zaboravio ovako!!
//$air_dew_temp[$stNo] 	= $a;
//	$air_dew_temp[$stNo] 	=(1* $rel_humDD[$stNo]+0*$surf_tempDD[$stNo])*10;
//$air_dew_temp[$stNo] 	= $surf_tempDD[$stNo];
//$air_dew_temp[$stNo] 	= $air_tempDD[$stNo];

	$surf_water_depth[$stNo] =$Wmm;// 	= $Wmmd;
//	$surf_salt_sat[$stNo] = $sS;

//	$surf_salt_sat[$stNo] = $Rmm;
//	$surf_salt_sat[$stNo] = $simp;
//	$surf_salt_sat[$stNo] = $vx;
//	$surf_salt_sat[$stNo] = $measure_timeD[$stNo]/100;
//	$surf_salt_sat[$stNo] = $aT/10;
//	$surf_salt_sat[$stNo] = $air_temp[$stNo]/100;
//	$surf_salt_sat[$stNo] = $air_tempD[$stNo]*10;
//	$surf_salt_sat[$stNo] = $air_temp06[$stNo];
//	$surf_salt_sat[$stNo] = $AccuV[$stNo]/1;
//	$surf_salt_sat[$stNo] = $bgrnd/1000;

//	$surf_salt_sat[$stNo] = $rH/10;
//	$surf_salt_sat[$stNo] = $int/10;
//	$surf_salt_sat[$stNo] = $mWs*100;
//	$surf_salt_sat[$stNo] = $wimpi;
//	$surf_salt_sat[$stNo] = $f0*10;
//	$surf_salt_sat[$stNo] = $sT0;
//	$surf_salt_sat[$stNo] = $sTkr[$stNo]*10;
//	$surf_salt_sat[$stNo] = $surft0[$stNo]*1;
//	$surf_salt_sat[$stNo] = $surf_temp[$stNo]*10;
//	$surf_salt_sat[$stNo] = $surf_tempM[$stNo];
//	$surf_salt_sat[$stNo] = $stk[$stNo]*10;
//	$surf_salt_sat[$stNo] = $surf_tempD[$stNo]*10;
//	$surf_salt_sat[$stNo] = $surf_tempD[$stNo]*$surf_tempD[$stNo]*10;
//	$surf_salt_sat[$stNo] = $surf_temp00D[$stNo]*$surf_temp00D[$stNo]*10;
//	$surf_salt_sat[$stNo] = $surf_tempD6[$stNo]*$surf_tempD6[$stNo]*100;
//	$surf_salt_sat[$stNo] = $surf_tempD6[$stNo];
//	$surf_salt_sat[$stNo] = $surf_tempDD[$stNo];
//	$surf_salt_sat[$stNo] = $surf_tempDX[$stNo]*100;
//	$sSp=$surf_salt_pri[$stNo]*($rowm[surf_water_depth]+0.2);
//	$surf_salt_sat[$stNo] = $rowm[surf_water_depth]*10;
//	$surf_salt_sat[$stNo] = $surf_salt_pri[$stNo]*($rowm[surf_water_depth]+0.2);	
//	$surf_salt_sat[$stNo] = $surf_salt_pri[$stNo];
//	$surf_salt_sat[$stNo] = $Sc*1;
//	$surf_salt_sat[$stNo] = $fog;
//	$surf_salt_sat[$stNo] = $lng;
//	$surf_salt_sat[$stNo] = $Wmmd[$stNo]*10;
//	$surf_salt_sat[$stNo] = $mW*10;
//if($stNo==9522) 	$surf_salt_sat[$stNo] = $Rmmx[$stNo]*1;
//	$surf_salt_sat[$stNo] = $V3*10;
//	$surf_salt_sat[$stNo] = $Rmmx[$stNo]*1;
//	$surf_salt_sat[$stNo] = $Rmmk[$stNo]*1;
//	$surf_salt_sat[$stNo] = $RmmZ/10;
//	$surf_salt_sat[$stNo] = $Rip[$stNo]/1;
//	$surf_salt_sat[$stNo] = $Ripk[$stNo]*1;
//	$surf_salt_sat[$stNo] = 0.12*$V3*$V3*$V3*$V3*$V3*10;
//	$surf_salt_sat[$stNo] = $Value_3[$stNo]*10;
//	$surf_salt_sat[$stNo] = $Sc;
//	$surf_salt_sat[$stNo] = $sS0;
//	$surf_salt_sat[$stNo] = $sS0*$kis;
//	$surf_salt_sat[$stNo] = $kis*10;
//	$surf_salt_sat[$stNo] = $kiss[$stNo]*10;
//	$surf_salt_sat[$stNo] = $kif*10;
//	$surf_salt_sat[$stNo] = $ki*1000;
//	$surf_salt_sat[$stNo] = $Df*10;
//	$surf_salt_sat[$stNo] = $measure_timeD[$stNo]/60;
//	$surf_salt_sat[$stNo] = 1000*$kif*$ki*$Df*$measure_timeD[$stNo]/600;
//	$surf_salt_sat[$stNo] = $DDM;
//	$surf_salt_sat[$stNo] = $wimp;
//	$surf_salt_sat[$stNo] = $precip_stat3[$stNo]/100;
//	$surf_salt_sat[$stNo] = $Wmmp*1;
//	$surf_salt_sat[$stNo] = $Value_3[$stNo]*10;
//	$surf_salt_sat[$stNo] =$rel_humD[$stNo]/100;
//	$surf_salt_sat[$stNo] =$rel_humDX[$stNo]*10;
//	$surf_salt_sat[$stNo] =$rel_hum0[$stNo]/10+20;
//	$surf_salt_sat[$stNo] =$rel_hum00[$stNo]*10;
	$surf_salt_sat[$stNo] =$rel_hum[$stNo]/10;
//	$surf_salt_sat[$stNo] =$hum[$stNo]/10+20;
//	$surf_salt_sat[$stNo] =$rH/10+20;
//	$surf_salt_sat[$stNo] =$humDX[$stNo]*10;
//	$surf_salt_sat[$stNo] =$surf_water_depthDX[$stNo]*100;
//	$surf_salt_sat[$stNo] =$surf_water_depthD[$stNo]*100;
//	$surf_salt_sat[$stNo] =$surf_water_depthDa[$stNo]*100;
//	$surf_salt_sat[$stNo] =$surf_water_depthx[$stNo]*10;
//	$surf_salt_sat[$stNo] =$precip_stat1[$stNo];
//	$surf_salt_sat[$stNo] =$si[$stNo];
//	$surf_salt_sat[$stNo] =$sir[$stNo];
//	$surf_salt_sat[$stNo] =$sim[$stNo]*10;
//	$surf_salt_sat[$stNo] = $simp;
//	$surf_salt_pri[$stNo]= $sS+0.0001;  //PZ3290: suha sol u blagom porastu

	$surf_salt_pri[$stNo]= $sS;

//	$surf_freez_temp[$stNo] 	= $mW*100;  //   $Rm;//
	$surf_freez_temp[$stNo] 	= $fT;  //   $Rm;//
//PZ2650: Dana 10.01.2009 mjerna stanica Buèje javlja susnjeicu i snijeg, kolnik u 17,15 sati mjestimièno vlaan, magla, oborina nije bilo PZ2650.1:  Dana 11.01.2009 mjerna stanica batrina javlja kiu i susnjeicu a oborina nije bilo 	
$Rmm0=$rain_int[$stNo];	
if($Rmm0==-0.5) $rn=0;
//if($Rmm0<-1 && $rn<11 )	{$rain_int[$stNo] = $Rmm + $Rmm0 + 0.05; $rn++;}
//if($Rmm0<-0.1 && $rn<11 && $Rmm<0.1 )	{$rain_int[$stNo] = $Rmm + $Rmm0 + 0.005; $rn++;} //2749: köd eszi a csapadékot,leválasztani egymástól
//	else	{$rain_int[$stNo] = $Rmm; $rn=0;}
$rain_int[$stNo] = $Rmm;

//----- END ---------- ACTUAL/next XPS7N Data to Web Variables
/*
          $surf_water_depthD[$stNo]= $surf_water_depth[$stNo]-$surf_water_depth0[$stNo] ;
if($measure_timeD[$stNo]<900){
    if($surf_water_depthD[$stNo]*600/$measure_timeD[$stNo]>.05)    $surf_water_depth[$stNo]=$surf_water_depth0[$stNo]+$surf_water_depthD[$stNo]/4*$measure_timeD[$stNo]/1500 ;
	if($surf_water_depthD[$stNo]*600/$measure_timeD[$stNo]<-.05)   $surf_water_depth[$stNo]=$surf_water_depth0[$stNo]+$surf_water_depthD[$stNo]/8*$measure_timeD[$stNo]/1500 ;
}
*/

	if ($Hr==13 || $Hr==4) 
	{
		$DDM++;
		if($DDM==0)
		{	$surf_tempDDM[$stNo]=$surf_tempDD[$stNo];
		  $air_tempDD[$stNo]=0;
		$surf_tempDD[$stNo]=0;
		}
	}
	if ($Hr!=13 && $Hr!=4) $DDM=-1;	
 
 	  $air_tempDD[$stNo]+= $air_tempD[$stNo];
	  $surf_tempDD[$stNo]+=  $surf_tempD[$stNo];


        $surf_temp06[$stNo]= $surf_temp05[$stNo] ;
        $surf_temp05[$stNo]= $surf_temp04[$stNo] ;
        $surf_temp04[$stNo]= $surf_temp03[$stNo] ;
        $surf_temp03[$stNo]= $surf_temp02[$stNo] ;
        $surf_temp02[$stNo]= $surf_temp01[$stNo] ;
        $surf_temp01[$stNo]= $surf_temp0[$stNo] ;
        $surf_temp0[$stNo]= $surf_temp[$stNo] ;
        $surft0[$stNo]= $surft[$stNo] ;
//         $surf_temp0[$stNo]= $sT-$st_kst;

        $air_temp06[$stNo]= $air_temp05[$stNo] ;
        $air_temp05[$stNo]= $air_temp04[$stNo] ;
        $air_temp04[$stNo]= $air_temp03[$stNo] ;
        $air_temp03[$stNo]= $air_temp02[$stNo] ;
        $air_temp02[$stNo]= $air_temp01[$stNo] ;
        $air_temp01[$stNo]= $air_temp0[$stNo] ;
        $air_temp0[$stNo]= $air_temp[$stNo] ;


//         $air_temp0[$stNo]= $air_temp[$stNo] ;
	 $rel_hum01[$stNo]= $rel_hum0[$stNo] ;
	 $rel_hum0[$stNo]= $rel_hum[$stNo] ;

$surf_salt_pri0[$stNo]=$surf_salt_pri[$stNo];

    $surf_water_depth0[$stNo]= $surf_water_depth[$stNo] ;
    $measure_time0[$stNo]= $measure_time[$stNo] ;

$rS=1;
if($surf_water_depth[$stNo]>0.06999) $rS=1.5;
if($surf_water_depth[$stNo]>0.09999) $rS=2;
if($sS>5 && $surf_water_depth[$stNo]>0.01 && $wimp>1000) $rS=2.5;
if($surf_water_depth[$stNo]>0.25) $rS=3;
if($surf_water_depth[$stNo]>1.25) $rS=4;
//if($sT<$fT-1.5 || $sT<-11.7 ) $rS=-$rS;
//if($sT<$fT-0.5 ) $rS=-$rS;
if($sT<$fT-0.2 ) $rS=-$rS;
$surf_condition[$stNo]  = $rS;

/*
        if ($precip_imp_int[$stNo] < 0    )    $rain_int[$stNo]-=  0.01;
        if ($precip_imp_int[$stNo] == 0.01)    $rain_int[$stNo]+=  0.01;
*/


	$precip_stat[$stNo] = 0;
	$dh=0.5;  //3072: klein Regen - mrholenie
	$dhh=2.5;
	$dhhh=9.5;
//	$precip_stat[$stNo] = 2;  //fog
	if (($air[$stNo]>=2.5) && ($rain_int[$stNo]>$dh) && ($surft[$stNo]>0) )      $precip_stat[$stNo] = 3;    // "Esõ
	if (($air[$stNo]>=2.5) && ($rain_int[$stNo]>$dhh) && ($surft[$stNo]>0) )      $precip_stat[$stNo] = 4;    // "Esõ
	if (($air[$stNo]>=2.5) && ($rain_int[$stNo]>$dhhh) && ($surft[$stNo]>0) )      $precip_stat[$stNo] = 5;    // "Esõ"

//	if ( ($Rmm>0) && $rS>1  )     { $precip_stat[$stNo] = 3; }   // "Esõ"
	//	if ( ($rain_int[$stNo]>11) && $rS>1  )     { $precip_stat[$stNo] = 3; }   // "Esõ"
$kf=2.5;
if($air[$stNo]<0) $kf=(0-$air[$stNo])/3;
//        if ($surft[$stNo]>$air[$stNo]+3-$kf && $hum[$stNo]>99.98-$kf && $rain_int[$stNo]<$dh && (($surf_tempDD[$stNo]<1 && $surf_tempDD[$stNo]>0.31 && $surf_tempDDM[$stNo]*$surf_tempDDM[$stNo]<4) ||($surf_tempDD[$stNo]<-$surf_tempDDM[$stNo]+1)) )     { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}   // "Köd"


//if ($v7!=-2 && $surft[$stNo]>$air[$stNo]+3-$kf && $hum[$stNo]>99.98-$kf && $rain_int[$stNo]<$dh && (( $surf_tempDD[$stNo]>0.31 && $surf_tempDDM[$stNo]*$surf_tempDDM[$stNo]<4) ||($surf_tempDD[$stNo]<-$surf_tempDDM[$stNo]+1)) )     $precip_stat[$stNo] = 2; // "Köd" {$fogNo[$stNo] = 2;     $rain_int[$stNo]=-0.5;}
if ($v7!=-2 && $surft[$stNo]>$air[$stNo]-$kf && $hum[$stNo]>99.98-$kf && $rain_int[$stNo]<$dh && (( $surf_tempDD[$stNo]>0.31 && $surf_tempDDM[$stNo]*$surf_tempDDM[$stNo]<4) ||($surf_tempDD[$stNo]<-$surf_tempDDM[$stNo]+1)) )     $precip_stat[$stNo] = 2; // "Köd" {$fogNo[$stNo] = 2;     $rain_int[$stNo]=-0.5;}
//PZ2663.1: BPW magla: fog>10 , maglasipi: fog~100, int>10, lng<5. saturacija: count=0.  snijeg: lng>10, int<5. kisasipivelikakap: lng>10, int<5, aT>3
//if($precip_imp_int[$stNo]>33 && $precip_imp_lng[$stNo]<33 && $Raino[0]=='B' && $Raino[2]=='W')  { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}
//if($precip_imp_int[$stNo]==0 && $precip_imp_lng[$stNo]==0 && $Raino[0]=='B' && $Raino[2]=='W')  { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}
//if($count<10 && $v7==-2 && $surft[$stNo]>$air[$stNo]+3-$kf && $hum[$stNo]>99.98-$kf && $rain_int[$stNo]<$dh)  $precip_stat[$stNo] = 2;  //$rain_int[$stNo]=-0.5;
if($count<10 && $v7==-2 && $Raino[2]=='W' && $surft[$stNo]>$air[$stNo]+3-$kf && $hum[$stNo]>99.98-$kf && $rain_int[$stNo]<$dh)  $precip_stat[$stNo] = 2;  //$rain_int[$stNo]=-0.5;

//if($fog-$bgrnd+512>7 && $v7==-2 && $bgrnd<$g) { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}
//if($fog>7 && $lng<33 && $v7==-2 && $bgrnd<$g) { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}
//if( $lng<33 ) { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}
//if($fog>8 && $lng<33 && $lng>0  && $v7==-2 && $bgrnd<$g) { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-5;}
//if($fog>10  && $v7==-2 && $bgrnd<$g && $rain_int[$stNo]<$dh && $hum[$stNo]>99.98-8*$kf) $precip_stat[$stNo] = 2; // $rain_int[$stNo]=-0.5;
if($fog>10  && $v7==-2  && $Raino[2]=='W' && $bgrnd<$g && $hum[$stNo]>99.98-8*$kf) $precip_stat[$stNo] = 2; // $rain_int[$stNo]=-0.5; //3956: esőben is lehet köd
//if($v7==-2 && $fog-$bgrnd+500>9  && $bgrnd<$g  && $hum[$stNo]>99.98-8*$kf)  $precip_stat[$stNo] = 2;  //$rain_int[$stNo]=-0.5;
//if($int>33 && $lng<33 && $fog>18 && $v7==-2 && $bgrnd<$g) { $precip_stat[$stNo] = 2;  $rain_int[$stNo]=-0.5;}
//if($int>33 && $lng<33 && $fog>18 && $v7==-2 && $surft[$stNo]<2 ) { $precip_stat[$stNo] = 2; //$fogNo[$stNo] = 2;  //$rain_int[$stNo]=-0.5;}
//if($int>33 && $lng<33 && $fog>18 && $v7==-2 && $surft[$stNo]<2 ) { $precip_stat[$stNo] = 2; //$fogNo[$stNo] = 2;  //$rain_int[$stNo]=-0.5;}
//if($int>33 && $lng<33 && $fog>18+$aT && $v7==-2 && $surft[$stNo]<2 )  $precip_stat[$stNo] = 2; //$fogNo[$stNo] = 2;  //$rain_int[$stNo]=-0.5;
if($int>33 && $lng<33 && $fog>18+$aT && $v7==-2 && $Raino[2]=='W' && $surft[$stNo]<2 ) $precip_stat[$stNo] = 2; //$fogNo[$stNo] = 2;  //$rain_int[$stNo]=-0.5;


	if (($surft[$stNo]>0) && ($surft[$stNo]<$s_air[$stNo]) && ($rain_int[$stNo]<$dh))      $precip_stat[$stNo] = 1;    // "Harmat"

  //      if ($rain_int[$stNo]==0)     $precip_stat[$stNo] = 0;        // "--"

	if ($v7!=-2 && $surft[$stNo]<0 && $surft[$stNo]<$air[$stNo]-1.5 && $rel_hum[$stNo]>97 && $rain_int[$stNo]<$dh)    {$precip_stat[$stNo] = -1; } // "Dér"  $rain_int[$stNo]=-0.05;
//	if (($surft[$stNo]<0) && ($surft[$stNo]<$air[$stNo]-1.5)  && ($rain_int[$stNo]<$dh))    {$precip_stat[$stNo] = -1;  $rain_int[$stNo]=-0.5;} // "Dér"

       	if (($air[$stNo]>.5) && ($air[$stNo]<1.5) && ($rain_int[$stNo]>$dh))   $precip_stat[$stNo] = -2;         // "Hvs.esõ"

	if (($air[$stNo]>1.5) && ($rain_int[$stNo]>$dh) && ($surft[$stNo]<-.5))   $precip_stat[$stNo] = -2.5;         // "Jgs.esõ"

	if (($air[$stNo]<=.5) && ($rain_int[$stNo]>$dh))    $precip_stat[$stNo] = -3;   // "Hó"
	if (($air[$stNo]<=.5) && ($rain_int[$stNo]>$dhh))    $precip_stat[$stNo] = -4;   // "Hó"
	if (($air[$stNo]<=.5) && ($rain_int[$stNo]>$dhhh))    $precip_stat[$stNo] = -5;   // "Hó"


	}      //cccccccccccccccccccccccccccccccccccccccccEND
?>
