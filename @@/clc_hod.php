<?php  
 
	  // huge oscillatons dumper:
   
 	  
/*	  if($stNo==9032){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}

//  if(($surf_temp[$stNo]-0-$air_temp[$stNo])*($surf_temp[$stNo]-0-$air_temp[$stNo])>99)  $surf_temp[$stNo]= -60+$air_temp[$stNo]*5/4;
   if(($surf_temp[$stNo]-0-$aT)*($surf_temp[$stNo]-0-$aT)>99)  $surf_temp[$stNo]= 0+$aT*5/4;
	  }
 */
	  if($stNo==9037){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}

 if(($surf_temp[$stNo]-25-$air_temp[$stNo])*($surf_temp[$stNo]-25-$air_temp[$stNo])>33)  $surf_temp[$stNo]= 25+$air_temp[$stNo]*5/4;
	  }
	/*  
	  if($stNo==9048){
 if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	 { $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo]; }
	  }
		  
	  if($stNo==9051){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>5 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/10000;

if($rel_hum[$stNo]+$air_temp[$stNo]<50) $rel_hum[$stNo]=80;
	  }
 */
	  
	  if($stNo==9052){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>13 )	{  $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo]/10000;}

 if(($surf_temp[$stNo]-0-$air_temp[$stNo])*($surf_temp[$stNo]-0-$air_temp[$stNo])>199)  $surf_temp[$stNo]= 0+$air_temp[$stNo]*5/4;
	  }
	  
	  if($stNo==9056){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{  $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo]/10000;}

 if(($surf_temp[$stNo]-0-$air_temp[$stNo])*($surf_temp[$stNo]-0-$air_temp[$stNo])>99)  $surf_temp[$stNo]= 0+$air_temp[$stNo]*5/4;
	  }
	  
	  if($stNo==9081){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}

// if(($surf_temp[$stNo]-10-$air_temp[$stNo])*($surf_temp[$stNo]-10-$air_temp[$stNo])>99)  $surf_temp[$stNo]= 10+$air_temp[$stNo]*5/4;
	  }
/*
	  if($stNo==9092){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>5 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;
 if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	  $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo]/10000;

 if(($surf_temp[$stNo]-25-$air_temp[$stNo])*($surf_temp[$stNo]-25-$air_temp[$stNo])>33)  $surf_temp[$stNo]= 25+$air_temp[$stNo]*5/4;
	  }
 */
	  	  
	  if($stNo==9094){
  $surf_temp[$stNo]= 100+$air_temp[$stNo]*5/4;
	  }

	  
	  if($stNo==9104){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>3 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}

 if(($surf_temp[$stNo]-80-$air_temp[$stNo])*($surf_temp[$stNo]-80-$air_temp[$stNo])>33)  $surf_temp[$stNo]= 80+$air_temp[$stNo]*5/4;	  }
/*	   
	  if($stNo==9133){
 if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>1)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  
// if($air_tempD[$stNo]*$air_tempD[$stNo]>1 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;
	  
}
 
	   
	  if($stNo==9137){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/10000;

if($rel_hum[$stNo]+$air_temp[$stNo]<50) $rel_hum[$stNo]=80;
}
   
	  
	  if($stNo==9143){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/10000;

if($rel_hum[$stNo]+$air_temp[$stNo]<50) $rel_hum[$stNo]=80;
}
 */ 
	  if($stNo==9161){
 
   if(($surf_temp[$stNo]-0-$aT)*($surf_temp[$stNo]-0-$aT)>99)  $surf_temp[$stNo]= 0+$aT*5/4;
	  }

	  	  if($stNo==9191){
  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];
}

//  if(($surf_temp[$stNo]-0-$air_temp[$stNo])*($surf_temp[$stNo]-0-$air_temp[$stNo])>99)  $surf_temp[$stNo]= -60+$air_temp[$stNo]*5/4;
   if(($surf_temp[$stNo]-0-$aT)*($surf_temp[$stNo]-0-$aT)>299)  $surf_temp[$stNo]= 0+$aT*5/4;
	  }
	  
	  if($stNo==9229){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/10000;

if($rel_hum[$stNo]+$air_temp[$stNo]<50) $rel_hum[$stNo]=80;
}
	  
/*	  if($stNo==9233){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/100000;

if($rel_hum[$stNo]+$air_temp[$stNo]<50) $rel_hum[$stNo]=80;
}*/

/*		  
	  if($stNo==99501){
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;

//if($surf_temp0[$stNo]<-20 or $surf_temp0[$stNo]>60) $surf_temp0[$stNo]=0;

  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	$surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo]/10000;

//if($air_temp0[$stNo]<-20 or $air_temp0[$stNo]>40) $air_temp0[$stNo]=$surf_temp0[$stNo];


 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 && ($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $surf_tempD[$stNo]/10;
// if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>10)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/100000;

if($rel_hum[$stNo]+$air_temp[$stNo]<40) $rel_hum[$stNo]=80;
	  }

	  
	  if($stNo==9512){
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;

if($surf_temp0[$stNo]<-20 or $surf_temp0[$stNo]>60) $surf_temp0[$stNo]=0;

  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	$surf_temp[$stNo]= $surf_temp0[$stNo] ;

if($air_temp0[$stNo]<-20 or $air_temp0[$stNo]>40) $air_temp0[$stNo]=$surf_temp0[$stNo];


 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 && ($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] ;
// if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>10)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/100000;

if($rel_hum[$stNo]+$air_temp[$stNo]<40) $rel_hum[$stNo]=80;
	  }

  
	  if($stNo==99504){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000;

if($rel_hum[$stNo]+$air_temp[$stNo]<50) $rel_hum[$stNo]=80;
	  }
*//*
	  if($stNo==9505){
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 && ($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/100000;
 if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>80)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  

 if($rel_humD[$stNo]*$rel_humD[$stNo]>50 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/100000;


if($rel_hum[$stNo]+$air_temp[$stNo]<40) $rel_hum[$stNo]=80;
	  }


  if($stNo==99514){

//  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}


 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 && ($air_temp[$stNo]<-10 or $air_temp[$stNo]>40))	  $air_temp[$stNo]= $air_temp0[$stNo] ;


// if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>50)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/5/3;	  

if($rel_hum[$stNo]<50 or $rel_hum[$stNo]>100  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5*2;

	  }



 if($stNo==99501){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] ;
 if($rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] )	 $rel_hum[$stNo]= $rel_hum0[$stNo] ;
// if($rel_hum[$stNo]>80 )	 $rel_hum[$stNo]= 55 ;
// if($rel_hum[$stNo]<0 )	 $rel_hum[$stNo]= 99 ;

}	  

	  	  
//	  if($stNo==9520){
//  $surf_temp[$stNo]= $air_temp[$stNo]*5/4;
//	  }




 if($stNo==99501){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>150 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000000;

}	  



 if($stNo==9502){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>150 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000000;

}	  




	  if($stNo==99522){
if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>50)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/5/3;	  
//if($air_temp[$stNo]*$air_temp[$stNo]>2000)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;
 //if($rel_humD[$stNo]*$rel_humD[$stNo]>5 )	 $rel_hum[$stNo]= $rel_hum0[$stNo];// + $rel_humD[$stNo]/100000;

//if($rel_hum[$stNo]+$surf_temp[$stNo]<50  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5/2;
//if($rel_hum0[$stNo] < 30) $rel_hum0[$stNo] = 80;//-$surf_temp[$stNo];
if($rel_hum[$stNo]<50 or $rel_hum[$stNo]>100  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5*2;

 	  }


	  if($stNo==99523){
 if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>50)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/5/3;	  


if($rel_hum[$stNo]<50 or $rel_hum[$stNo]>100  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5*2;

	  }



 if($stNo==9535 or $stNo==9539){

if($air_temp[$stNo]*$air_temp[$stNo]>2500 && $surf_temp[$stNo]*$surf_temp[$stNo]<3600 )	  {
$air_temp[$stNo]= $surf_temp[$stNo]*(1-($surf_temp[$stNo]+20)/150);
 $rel_hum[$stNo]= 80-$surf_temp[$stNo];
if($precip_stat2[$stNo]<11000) $rel_hum[$stNo]+= $precip_stat2[$stNo]/$st_kw*10;
if($precip_stat1[$stNo]>1) $rel_hum[$stNo]+= sqrt($precip_stat1[$stNo]);

}
}
  */

	  	  if($stNo==9512 or $stNo==9538){     //or $stNo==9519
// 	  	  if($stNo==9512 or $stNo==9538 or $stNo==9541){     //or $stNo==9519
 if($air_temp[$stNo]*$air_temp[$stNo]>3600 && $air_temp0[$stNo]*$air_temp0[$stNo]<3600)	  $air_temp[$stNo]= $air_temp0[$stNo];

   if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>111 or $surf_temp[$stNo]==0 or $surf_temp[$stNo]*$surf_temp[$stNo]>3600  or $surf_tempD[$stNo]*$surf_tempD[$stNo]>16 ) 
// $surf_temp[$stNo]= 0+$air_temp[$stNo]*5/7;
 $surft[$stNo]= 0+$air_temp[$stNo]*5/7;

//if($stNo==9512) $surf_temp[$stNo]=0.01*$surf_temp[$stNo]+0.99*$surf_temp0[$stNo];
if($stNo==9512) $surft[$stNo]=0.01*$surft[$stNo]+0.99*$surft0[$stNo];

//$surf_tempD[$stNo]=$surf_temp[$stNo]-$surf_temp0[$stNo];
$surftD[$stNo]=$surft[$stNo]-$surft0[$stNo];


// if($rel_humD[$stNo]*$rel_humD[$stNo]>50 && $rel_hum0[$stNo]>60)	 $rel_hum[$stNo]= $rel_hum0[$stNo];  // tako ne sme!

if($rel_humD[$stNo]*$rel_humD[$stNo]>50 && $rel_hum0[$stNo]>60)	 $rel_hum[$stNo]= $rel_hum0[$stNo]+$rel_humD[$stNo]/10;

	  }


//echo  " ".
$stk0[$stNo]=$stk[$stNo];
//$stk[$stNo]=10/(1+($surf_temp[$stNo]-$surf_tempM[$stNo])*($surf_temp[$stNo]-$surf_tempM[$stNo]));
//$stk[$stNo]=($surf_temp[$stNo]-$surf_tempM[$stNo])*($surf_temp[$stNo]-$surf_tempM[$stNo])/10;
$stk[$stNo]=($surft[$stNo]-$surf_tempM[$stNo])*($surft[$stNo]-$surf_tempM[$stNo])/10;
//$stk[$stNo]=$stk[$stNo]*$stk[$stNo];
$stk[$stNo]=0.001*$stk[$stNo]+0.999*$stk0[$stNo];


//	  if($stNo==9501 or $stNo==9512 or $stNo==9516 or $stNo==9517 or $stNo==9518 or $stNo==9519 or $stNo==9521 or $stNo==9522 or $stNo==9523  or $stNo==9539 ){
	  if($stNo==99501 or $stNo==9502 or $stNo==99512 or $stNo==99516 or $stNo==99517 or $stNo==99518 or $stNo==99519 or $stNo==99521 or $stNo==99522 or $stNo==99523  or $stNo==99535 or $stNo==99539 ){
//if($air_temp[$stNo]*$air_temp[$stNo]>3600) $air_temp[$stNo]= $surf_temp[$stNo]*4/5;
if($air_temp[$stNo]*$air_temp[$stNo]>3600) $air_temp[$stNo]= $surft[$stNo]*4/5;

 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 && $air_temp0[$stNo]*$air_temp0[$stNo]<3600 )	  $air_temp[$stNo]= $air_temp0[$stNo]/2 + $surf_temp[$stNo]*4/10 ;
// if($air_temp[$stNo]*$air_temp[$stNo]>3600 && $air_temp0[$stNo]*$air_temp0[$stNo]<3600 )	  $air_temp[$stNo]= $air_temp0[$stNo] ;
//if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>150)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/7;	  
//if($air_temp[$stNo]*$air_temp[$stNo]>3600) $air_temp[$stNo]= $air_temp0[$stNo];
//if($air_temp[$stNo]*$air_temp[$stNo]>3600) $air_temp[$stNo]= $surf_temp[$stNo]*4/5;
if($rel_hum[$stNo]>111) $rel_hum[$stNo]=0;

//if($rel_humD[$stNo]+$surf_tempD[$stNo]
//if($rel_hum[$stNo]<40  ) $rel_hum[$stNo]=$rel_hum[$stNo]*$st_krh;
//if($rel_hum[$stNo]<50-$air_temp[$stNo] ) $rel_hum[$stNo]=0.99*$rel_hum0[$stNo] - $surf_tempD[$stNo]*18;
//if($rel_hum[$stNo]<80-$air_temp[$stNo] && $surf_tempD[$stNo]<0.1) $rel_hum[$stNo]=$rel_hum0[$stNo] ;
//if($rel_hum[$stNo]<80-$air_temp[$stNo] && $rel_humD[$stNo]<0 && $surf_tempD[$stNo]<0.01) $rel_hum[$stNo]=$rel_hum0[$stNo] ;
//if($rel_humD[$stNo]<-100) $rel_hum[$stNo]=$rel_hum0[$stNo]-$rel_humD[$stNo]/10;
//if($rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] ) $rel_hum[$stNo]=$rel_hum0[$stNo]; 
//if($rel_hum[$stNo]>99  ) $rel_hum[$stNo]=0.999*$rel_hum0[$stNo] - $surf_tempD[$stNo]*1;

//if($rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] + 20 - $stk[$stNo]) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*38;
//if($rel_hum[$stNo]<99 && $rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] + 20 - $stk[$stNo]) $rel_hum[$stNo]=80-$air_temp[$stNo] + 10 - $stk[$stNo] - $surf_tempD[$stNo]*38;
//if( $rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] - $stk[$stNo]) $rel_hum[$stNo]=100-$air_temp[$stNo] - $stk[$stNo] - $surf_tempD[$stNo]*38;
//if( $rel_hum[$stNo]<70-$air_temp[$stNo] - 10*($stk[$stNo]-1)+10*$surf_water_depth0[$stNo] && $stNo!=9512) 
if( $rel_hum[$stNo]<70-$air_temp[$stNo]*1 - 10*($stk[$stNo]-1)+10*$surf_water_depth0[$stNo]) 
//$rel_hum[$stNo]=$rel_hum0[$stNo] - 1*($stk[$stNo]-1) - $surf_tempD[$stNo]*3+1*$surf_water_depth0[$stNo];
//$rel_hum[$stNo]=$rel_hum0[$stNo] - 1*($stk[$stNo]-1) - $surf_tempD[$stNo]*38+1*$surf_water_depth0[$stNo];
//$rel_hum[$stNo]=$rel_hum0[$stNo] - 1*($stk[$stNo]-1) +1*$surf_water_depth0[$stNo];
//$rel_hum[$stNo]=$rel_hum0[$stNo] - ($stk[$stNo]-2)/10 +1*$surf_water_depth0[$stNo] - $surf_tempD[$stNo]*38/5 ;
$rel_hum[$stNo]=$rel_hum0[$stNo] - ($stk[$stNo]-2)/10 +1*$surf_water_depth0[$stNo] - $surftD[$stNo]*38/5 ;
//$rel_hum[$stNo]=$rel_hum0[$stNo] ;

// $rel_hum[$stNo]=0.1*$rel_hum[$stNo]+0.9* $rel_hum0[$stNo];
// $rel_hum[$stNo]=0.01*$rel_hum[$stNo]+0.99* $rel_hum0[$stNo];

//$asD=1-5*($air_temp[$stNo]-$surf_temp[$stNo])/1000;
//$asD=1-2*($air_temp[$stNo]-$surf_temp[$stNo])/1000;
$asD=1-2*($air_temp[$stNo]-$surft[$stNo])/1000;

//$rel_hum[$stNo]*= $asD ;

//$rel_hum[$stNo]=0.01*$rel_hum[$stNo]+0.99* $rel_hum0[$stNo];
//$rel_hum[$stNo]=0.1*$rel_hum[$stNo]+0.9* $rel_hum0[$stNo];
$rel_hum[$stNo]=0.3*$rel_hum[$stNo]+0.7* $rel_hum0[$stNo];

if($rel_hum[$stNo]>100) $rel_hum[$stNo]=100;
/*
	  $rel_humDM[$stNo]= $rel_hum[$stNo]-$rel_humM[$stNo] ;
//if($rel_humDM[$stNo]*$rel_humDM[$stNo]>49) $rel_hum[$stNo]= $rel_humM[$stNo]+ $rel_humDM[$stNo]/20 ;

	  $rel_humDD[$stNo]= 0.1*$rel_humD[$stNo]+0.9*$rel_humDD[$stNo] ;
  $surf_tempD[$stNo]= $surf_temp[$stNo]-$surf_temp0[$stNo] ;
$surf_tempDD[$stNo]=0.01*$surf_tempD[$stNo]+0.99*$surf_tempDD[$stNo];
$a=0;
if(10*$rel_humDD[$stNo]<$surf_tempDD[$stNo]) {$a=5; $rel_hum[$stNo]=$rel_hum0[$stNo]-0*$rel_humD[$stNo];}
	  $rel_humD[$stNo]= $rel_hum[$stNo]-$rel_hum0[$stNo] ;
	  $rel_humDD[$stNo]= 0.1*$rel_humD[$stNo]+0.9*$rel_humDD[$stNo] ;


if($air_tempDD[$stNo]<0 && $rel_humD[$stNo]<0 && $surf_water_depthDX[$stNo]>-0.001) $rel_hum[$stNo]=$rel_hum0[$stNo]-0.1*$rel_humD[$stNo];
if($AccuV[$stNo]>13.7) $rel_hum[$stNo]*=1-($AccuV[$stNo]-13.7)/1000;
if($surf_tempDX[$stNo]>0.01) $rel_hum[$stNo]*=1-sqrt(100*$surf_tempDX[$stNo])/100;
$rel_hum[$stNo]=0.1*$rel_hum[$stNo]+0.9* $rel_hum0[$stNo];
if($rel_hum[$stNo]>100) $rel_hum[$stNo]=100;


$rel_humD[$stNo]= $rel_hum[$stNo]-$rel_hum0[$stNo];
*/
 	  }

/*
	  if($stNo==9534){
if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>50)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/7;	  
//if($air_temp[$stNo]*$air_temp[$stNo]>2000)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;
 //if($rel_humD[$stNo]*$rel_humD[$stNo]>5 )	 $rel_hum[$stNo]= $rel_hum0[$stNo];// + $rel_humD[$stNo]/100000;

//if($rel_hum[$stNo]+$surf_temp[$stNo]<50  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5/2;
//if($rel_hum0[$stNo] < 30) $rel_hum0[$stNo] = 80;//-$surf_temp[$stNo];
if($rel_hum[$stNo]<40  ) $rel_hum[$stNo]=$rel_hum[$stNo]*$st_krh;
if($rel_hum[$stNo]<50 or $rel_hum[$stNo]>100  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*18;


 $rel_hum[$stNo]=0.1*$rel_hum[$stNo]+0.9* $rel_hum0[$stNo];
 $air_temp[$stNo]=0.1*$air_temp[$stNo]+0.9* $air_temp0[$stNo];

 	  }


 if($stNo==9537){

 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>150 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000000;

}	  
 

 if($stNo==9515 ){
*/
 if($stNo==9534 ){
$asd = $air_temp[$stNo]-$surf_temp[$stNo];
if($asd * $asd >36) $air_temp[$stNo]= $surf_temp[$stNo]*4/5;
 if($air_tempD[$stNo]*$air_tempD[$stNo]>1 )	  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;
}

$air_tempM[$stNo]= $air_temp[$stNo]*0.001+$air_tempM[$stNo]*0.999;
//$surf_tempM[$stNo]= $surf_temp[$stNo]*0.001+$surf_tempM[$stNo]*0.999;
$surf_tempM[$stNo]= $surft[$stNo]*0.001+$surf_tempM[$stNo]*0.999;
$surf_deep_tempM[$stNo]= $surf_deep_temp[$stNo]*0.001+$surf_deep_tempM[$stNo]*0.999;
$rel_humM[$stNo]= $rel_hum[$stNo]*0.01+$rel_humM[$stNo]*0.99;

if($precip_stat1[$stNo]>4) $precip_stat1[$stNo]=4;

 if($stNo==9541 ){
 if($surf_temp[$stNo]==0 )	{ $surf_temp[$stNo]= $surf_temp0[$stNo];}
// if($surf_tempD[$stNo]*$surf_tempD[$stNo]>1 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}
}
// if($surf_tempD[$stNo]*$surf_tempD[$stNo]>1 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_tempM[$stNo] + $surf_tempD[$stNo]*0;}}

?>
