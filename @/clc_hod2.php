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
	  if($stNo==9501){
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

  
	  if($stNo==9504){
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


  if($stNo==9514){

//  if($surf_tempD[$stNo]*$surf_tempD[$stNo]>5 )	{ $surf_tempD[$stNo]/=10000; $surf_temp[$stNo]= $surf_temp0[$stNo] + $surf_tempD[$stNo];}


 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 && ($air_temp[$stNo]<-10 or $air_temp[$stNo]>40))	  $air_temp[$stNo]= $air_temp0[$stNo] ;


// if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>50)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/5/3;	  

if($rel_hum[$stNo]<50 or $rel_hum[$stNo]>100  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5*2;

	  }



 if($stNo==9501){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] ;
 if($rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] )	 $rel_hum[$stNo]= $rel_hum0[$stNo] ;
// if($rel_hum[$stNo]>80 )	 $rel_hum[$stNo]= 55 ;
// if($rel_hum[$stNo]<0 )	 $rel_hum[$stNo]= 99 ;

}	  

	  	  
//	  if($stNo==9520){
//  $surf_temp[$stNo]= $air_temp[$stNo]*5/4;
//	  }




 if($stNo==9501){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>150 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000000;

}	  



 if($stNo==9502){
 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>150 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000000;

}	  




	  if($stNo==9522){
if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>50)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/5/3;	  
//if($air_temp[$stNo]*$air_temp[$stNo]>2000)  $air_temp[$stNo]= $surf_temp[$stNo]*4/5;	  
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/10000;
 //if($rel_humD[$stNo]*$rel_humD[$stNo]>5 )	 $rel_hum[$stNo]= $rel_hum0[$stNo];// + $rel_humD[$stNo]/100000;

//if($rel_hum[$stNo]+$surf_temp[$stNo]<50  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5/2;
//if($rel_hum0[$stNo] < 30) $rel_hum0[$stNo] = 80;//-$surf_temp[$stNo];
if($rel_hum[$stNo]<50 or $rel_hum[$stNo]>100  ) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*4/5*2;

 	  }
  */

	  if($stNo==9523){
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

	  	  if($stNo==9519){
   if(($surf_temp[$stNo]-0-$aT)*($surf_temp[$stNo]-0-$aT)>111 or $surf_temp[$stNo]==0 )  $surf_temp[$stNo]= 0+$aT*5/4;
	  }


$stk0=$stk;
//$stk=10/(1+($surf_temp[$stNo]-$surf_tempM[$stNo])*($surf_temp[$stNo]-$surf_tempM[$stNo]));
$stk=($surf_temp[$stNo]-$surf_tempM[$stNo])*($surf_temp[$stNo]-$surf_tempM[$stNo])/10;
//$stk=$stk*$stk;
//$stk=0.001*$stk+0.999*$stk0;


	  if($stNo==9501 or $stNo==9512 or $stNo==9516 or $stNo==9517 or $stNo==9518 or $stNo==9519 or $stNo==9521 or $stNo==9522 or $stNo==9523  or $stNo==9534 ){
// if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] ;
if(($surf_temp[$stNo]-$air_temp[$stNo])*($surf_temp[$stNo]-$air_temp[$stNo])>150)  $air_temp[$stNo]=  $air_temp0[$stNo] + $surf_tempD[$stNo]*4/7;	  

//if($rel_hum[$stNo]<40  ) $rel_hum[$stNo]=$rel_hum[$stNo]*$st_krh;
//if($rel_hum[$stNo]<50-$air_temp[$stNo] ) $rel_hum[$stNo]=0.99*$rel_hum0[$stNo] - $surf_tempD[$stNo]*18;
//if($rel_hum[$stNo]<80-$air_temp[$stNo] && $surf_tempD[$stNo]<0.1) $rel_hum[$stNo]=$rel_hum0[$stNo] ;
//if($rel_hum[$stNo]<80-$air_temp[$stNo] && $rel_humD[$stNo]<0 && $surf_tempD[$stNo]<0.01) $rel_hum[$stNo]=$rel_hum0[$stNo] ;
//if($rel_humD[$stNo]<-100) $rel_hum[$stNo]=$rel_hum0[$stNo]-$rel_humD[$stNo]/10;
//if($rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] ) $rel_hum[$stNo]=$rel_hum0[$stNo]; 
//if($rel_hum[$stNo]>99  ) $rel_hum[$stNo]=0.999*$rel_hum0[$stNo] - $surf_tempD[$stNo]*1;

if($rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] + 20 - $stk) $rel_hum[$stNo]=$rel_hum0[$stNo] - $surf_tempD[$stNo]*38;
//if($rel_hum[$stNo]<99 && $rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] + 20 - $stk) $rel_hum[$stNo]=80-$air_temp[$stNo] + 10 - $stk - $surf_tempD[$stNo]*38;
//if( $rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] - $stk) $rel_hum[$stNo]=100-$air_temp[$stNo] - $stk - $surf_tempD[$stNo]*38;
//if( $rel_hum0[$stNo]*$st_krh<70-$air_temp[$stNo] - $stk) $rel_hum0[$stNo]=80;
//if( $rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] - $stk) $rel_hum[$stNo]=$rel_hum0[$stNo] - $stk - $surf_tempD[$stNo]*38;
//if( $rel_hum[$stNo]*$st_krh<80-$air_temp[$stNo] - $stk) $rel_hum[$stNo]=$rel_hum0[$stNo] - $stk ;

//if($rel_hum[$stNo]*$st_krh<70-$air_temp[$stNo] && $rel_humD[$stNo]<0.01) $rel_hum[$stNo]=$rel_hum0[$stNo] ;


 $rel_hum[$stNo]=0.1*$rel_hum[$stNo]+0.9* $rel_hum0[$stNo];

if($rel_hum[$stNo]>100) $rel_hum[$stNo]=100;

$rel_hum00[$stNo]=$rel_hum[$stNo]-$rel_hum0[$stNo];

if($rel_hum00[$stNo]<-1) $rel_hum[$stNo]=$rel_hum0[$stNo];

 $air_temp[$stNo]=0.1*$air_temp[$stNo]+0.9* $air_temp0[$stNo];

//if($rel_humD[$stNo]<-100) $rel_hum[$stNo]=$rel_hum0[$stNo]-$rel_humD[$stNo]/10;
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
*/

 if($stNo==9537){

 if($air_tempD[$stNo]*$air_tempD[$stNo]>10 )	  $air_temp[$stNo]= $air_temp0[$stNo] + $air_tempD[$stNo]/1000000;
 if($rel_humD[$stNo]*$rel_humD[$stNo]>150 )	 $rel_hum[$stNo]= $rel_hum0[$stNo] + $rel_humD[$stNo]/1000000;

}	  
 
$air_tempM[$stNo]= $air_temp[$stNo]*0.001+$air_tempM[$stNo]*0.999;
$surf_tempM[$stNo]= $surf_temp[$stNo]*0.001+$surf_tempM[$stNo]*0.999;
$surf_deep_tempM[$stNo]= $surf_deep_temp[$stNo]*0.001+$surf_deep_tempM[$stNo]*0.999;
$rel_humM[$stNo]= $rel_hum[$stNo]*0.001+$rel_humM[$stNo]*0.999;

if($precip_stat1[$stNo]>4) $precip_stat1[$stNo]=4;

?>
