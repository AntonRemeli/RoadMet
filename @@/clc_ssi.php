<?php  
//#################################  the old SSI pawement sensor:  ##################################START

//if($Value_1[$stNo]<$Value_0[$stNo]) $Value_1[$stNo]=$Value_0[$stNo];


if($Value_0[$stNo]<=0) $Value_0[$stNo]=.13;
if($Value_1[$stNo]<=0) $Value_1[$stNo]=.12;
if($Value_2[$stNo]<=0) $Value_2[$stNo]=.11;
if($Value_3[$stNo]<=0) $Value_3[$stNo]=.1;
if($Value_4[$stNo]<=0) $Value_4[$stNo]=.13;
if($Value_5[$stNo]<=0) $Value_5[$stNo]=.12;
if($Value_6[$stNo]<=0) $Value_6[$stNo]=.11;
if($Value_7[$stNo]<=0) $Value_7[$stNo]=.1;

/*			// too restrictive:
if($Value_1[$stNo]<$Value_0[$stNo]) $Value_1[$stNo]=6.6;
if($Value_2[$stNo]<$Value_1[$stNo]) $Value_2[$stNo]=6.6;
if($Value_2[$stNo]<$Value_0[$stNo]) $Value_2[$stNo]=6.6;

if($Value_5[$stNo]<$Value_4[$stNo]) $Value_5[$stNo]=6.6;
if($Value_6[$stNo]<$Value_5[$stNo]) $Value_6[$stNo]=6.6;
if($Value_6[$stNo]<$Value_4[$stNo]) $Value_6[$stNo]=6.6; 
 */
/*
if($Value_2[$stNo]<$Value_1[$stNo]) $Value_2[$stNo]=6.6;
if($Value_2[$stNo]<$Value_0[$stNo]) $Value_2[$stNo]=6.6;
if($Value_1[$stNo]<$Value_0[$stNo]) $Value_1[$stNo]=$Value_2[$stNo];
 */

if($Value_0[$stNo]>6.9) $Value_0[$stNo]=$Value_0[$stNo]-1.3;
if($Value_1[$stNo]>6.9) $Value_1[$stNo]=$Value_1[$stNo]-1.3;
if($Value_2[$stNo]>6.9) $Value_2[$stNo]=$Value_2[$stNo]-1.3;

//if($Value_3[$stNo]<0.7) $Value_3[$stNo]=0.7+$Value_3[$stNo]/2; //3081: V3 hamis tueskeek
if($Value_3[$stNo]<0.6) $Value_3[$stNo]=0.6+$Value_3[$stNo]/2;
if($Value_3[$stNo]>=2) $Value_3[$stNo]=3*$Value_3[$stNo]/10;
if($Value_3[$stNo]>=3.44) $Value_3[$stNo]=1.3*$Value_3[$stNo]/10;

//$Value_3[$stNo]=0.7; //3081: V3 hamis tueskeek

if($Value_4[$stNo]>6.9) $Value_4[$stNo]=$Value_4[$stNo]-1.3;
if($Value_5[$stNo]>6.9) $Value_5[$stNo]=$Value_5[$stNo]-1.3;
if($Value_6[$stNo]>6.9) $Value_6[$stNo]=$Value_6[$stNo]-1.3;

$ScW=0;
//$Sc=0;
$Sc=$k5*5;/*
if($Value_0[$stNo]<2)  $ScW=0.01/$Value_0[$stNo];     //salinity measured on the surface, watery salt
if($Value_1[$stNo]<6.5)  $ScW=2/$Value_1[$stNo];     //salinity measured on the surface, main salt
if($Value_2[$stNo]<6.5)  $ScW=19/$Value_2[$stNo];     //salinity measured on the surface, main salt
if($Value_4[$stNo]<1)  $Sc=.0001/$Value_4[$stNo];     //salinity measured in the salt measuring cavity, very watery salt
if($Value_5[$stNo]<6.5)  $Sc=.003/$Value_5[$stNo];     //salinity measured in the salt measuring cavity, watery salt
if($Value_6[$stNo]<6.5)  $Sc=3.3/$Value_6[$stNo];     //salinity measured in the salt measuring cavity, real salt
//2654: 9154 Nyírmihálydi havas lett 2010-01-13 19 órakor*/

//if($Value_0[$stNo]<2)  $ScW=0.01/$Value_0[$stNo];     //salinity measured on the surface, watery salt
if($Value_1[$stNo]<6.3)  $ScW=1/$Value_1[$stNo];     //salinity measured on the surface, main salt
if($Value_2[$stNo]<6.3)  $ScW=9/$Value_2[$stNo];     //salinity measured on the surface, main salt
//if($Value_4[$stNo]<1)  $Sc=.0001/$Value_4[$stNo];     //salinity measured in the salt measuring cavity, very watery salt
//if($Value_5[$stNo]<6.5)  $Sc=.003/$Value_5[$stNo];     //salinity measured in the salt measuring cavity, watery salt
//if($Value_5[$stNo]<6.5 && $k5>0)  $Sc=.003/$Value_5[$stNo];     //salinity measured in the salt measuring cavity, watery salt
if($Value_6[$stNo]<6.3)  $Sc=3.3/$Value_6[$stNo];     //salinity measured in the salt measuring cavity, real salt


if($ScW>$Sc) $Sc=$ScW;
//$Sc/=2;

$sTk=1;
if($sT>10) $sTk=10/$sT;
//$Sc=25*$st_k1*sqrt($Sc/25)*$sTk;         //calibrated salt amount
$Sc=35*$st_k1*sqrt(sqrt($Sc/35))*$sTk;         //calibrated salt amount

if($Value_0[$stNo]<6.3) $simp=6.5-$Value_0[$stNo];
if($Value_1[$stNo]<6.3) $simp=6.5+(6.5-$Value_0[$stNo]);
$simp*=9;
$simp+=1;
if($Value_4[$stNo]<6.3) $wimp=6.5-$Value_4[$stNo];
if($Value_5[$stNo]<6.3) $wimp=6.5+(6.5-$Value_5[$stNo]);

$mW=0;
if($Value_0[$stNo]<6.3) $mW=2*(6.5-$Value_0[$stNo])/10;
if($Value_1[$stNo]<6.3) $mW=1.3+2*(6.5-$Value_1[$stNo])/10;
//if($Value_2[$stNo]<6.5) $mW=0;
//$mW=0;
$mWs=0;
if($Value_4[$stNo]<6.3) $mWs=2*(6.5-$Value_4[$stNo])/10;
if($Value_5[$stNo]<6.3) $mWs=1+2*(6.5-$Value_5[$stNo])/10;
$mWs=$st_kw*$mWs;
if($mWs>$mW) $mW=$mWs;

//$mW*=2;

//$mW=0;
$V3=1.25*$Value_3[$stNo];
if( $Value_3[$stNo]<0.8 && $Value_4[$stNo]<3) $V3=1;
if($V3>1.4) $V3=1.4;
$mW=$mW*$V3*$V3*$V3;
//$mW+=0.12*$V3*$V3*$V3*$V3*$V3;
//$mW+=0.06*$V3*$V3*$V3*$V3*$V3;

if($V3<1.2 && $V3>0.8 && $Value_0[$stNo]>6.3) $mW=0;
// $V3=1;
//if($V3>1) $mW+=5*$V3*$V3*$V3*$V3*$V3;
//$mW*=2;
//#################################  the old SSI pawement sensor:  ################################## END
  

?>
