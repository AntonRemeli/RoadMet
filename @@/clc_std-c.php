<?php  
error_reporting(0);	


//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==5)  $st_upc[$stNo]="#6666ff";
	if ($surf_condition[$stNo]==4)  $st_upc[$stNo]="#6666ff";
	if ($surf_condition[$stNo]==3)  $st_upc[$stNo]="#42A0FF";
	if ($surf_condition[$stNo]==4 && $surft[$stNo]<-1)  $st_upc[$stNo]="#6666ff";
	if ($surf_condition[$stNo]==3 && $surft[$stNo]<-1)  $st_upc[$stNo]="#42A0FF";
	if ($surf_condition[$stNo]==4 && $surft[$stNo]<-1 && $surft[$stNo]>-4 && ($surf_freez_temp[$stNo]-$surft[$stNo]>-2))  $st_upc[$stNo]="#6666ff";
	if ($surf_condition[$stNo]==3 && $surft[$stNo]<-1 && $surft[$stNo]>-4 && ($surf_freez_temp[$stNo]-$surft[$stNo]>-2))  $st_upc[$stNo]="#42A0FF";
	if ($surf_condition[$stNo]==2.5)  $st_upc[$stNo]="#99CCFF";
	if ($surf_condition[$stNo]==2)  $st_upc[$stNo]="#44bbFF";
	if ($surf_condition[$stNo]==1.5)  $st_upc[$stNo]="#99CCFF";
	if ($surf_condition[$stNo]==1)  $st_upc[$stNo]="#FDF8BB";
	if ($surf_condition[$stNo]==-1)  $st_upc[$stNo]="#ff8888";
	if ($surf_condition[$stNo]==-1.5)  $st_upc[$stNo]="#ff8888";
	if ($surf_condition[$stNo]==-2)  $st_upc[$stNo]="#ff5555";
	if ($surf_condition[$stNo]==-2.5)  $st_upc[$stNo]="#ff5555";
	if ($surf_condition[$stNo]==-3)  $st_upc[$stNo]="#ff2222";
	if ($surf_condition[$stNo]==-3.5)  $st_upc[$stNo]="#ff2222";
	if ($surf_condition[$stNo]==-4)  $st_upc[$stNo]="#ffffff";
	if ($surf_condition[$stNo]==-5)  $st_upc[$stNo]="#ffffff";

 //	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_csc[$stNo] = "#D0CEA4";
	$dh=0.05;
	if ($precip_stat[$stNo]==5)      $st_csc[$stNo] = "#6666ff";
	if ($precip_stat[$stNo]==4)      $st_csc[$stNo] = "#42A0FF";
	if ($precip_stat[$stNo]==3)      $st_csc[$stNo] = "#44bbFF";
	if ($precip_stat[$stNo]==2)      $st_csc[$stNo] = "#99CCFF";
	if ($precip_stat[$stNo]==1)      $st_csc[$stNo] = "#FDF8BB";
	if ($precip_stat[$stNo]==0)      $st_csc[$stNo] = "#D0CEA4";
	if ($precip_stat[$stNo]==-1)     $st_csc[$stNo] = "#ffcccc";
  if ($precip_stat[$stNo]==-2)     $st_csc[$stNo] = "#ffaaaa";
  if ($precip_stat[$stNo]==-2.5)   $st_csc[$stNo] = "#ff8888";
  if ($precip_stat[$stNo]==-3)     $st_csc[$stNo] = "#ff5555";
  if ($precip_stat[$stNo]==-4)     $st_csc[$stNo] = "#ff2222";
  if ($precip_stat[$stNo]==-5)     $st_csc[$stNo] = "#ff0000";





//--------------- STANDARD  Data to Web Variables   END


?>
