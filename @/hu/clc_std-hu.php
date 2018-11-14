<?php  
error_reporting(0);	


//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==5) $st_upa[$stNo]="vízátfolyás"; 
	if ($surf_condition[$stNo]==4) $st_upa[$stNo]="vízátfolyás"; 
	if ($surf_condition[$stNo]==3) $st_upa[$stNo]="vizes"; 
	if ($surf_condition[$stNo]==4 && $surft[$stNo]<-1) $st_upa[$stNo]="sóvizes"; 
	if ($surf_condition[$stNo]==3 && $surft[$stNo]<-1) $st_upa[$stNo]="sónedves"; 
	if ($surf_condition[$stNo]==4 && $surft[$stNo]<-1 && $surft[$stNo]>-4 && ($surf_freez_temp[$stNo]-$surft[$stNo]>-2)) $st_upa[$stNo]="latyakos"; 
	if ($surf_condition[$stNo]==3 && $surft[$stNo]<-1 && $surft[$stNo]>-4 && ($surf_freez_temp[$stNo]-$surft[$stNo]>-2)) $st_upa[$stNo]="latyak"; 
	if ($surf_condition[$stNo]==2.5) $st_upa[$stNo]="sónedves";
	if ($surf_condition[$stNo]==2) $st_upa[$stNo]="nedves";
	if ($surf_condition[$stNo]==1.5) $st_upa[$stNo]="nyirkos"; 
	if ($surf_condition[$stNo]==1) $st_upa[$stNo]="száraz"; 
	if ($surf_condition[$stNo]==-1) $st_upa[$stNo]="túlhült"; 
	if ($surf_condition[$stNo]==-1.5) $st_upa[$stNo]="sikos"; 
	if ($surf_condition[$stNo]==-2) $st_upa[$stNo]="sikos"; 
	if ($surf_condition[$stNo]==-2.5) $st_upa[$stNo]="sósikos"; 
	if ($surf_condition[$stNo]==-3) $st_upa[$stNo]="jeges"; 
	if ($surf_condition[$stNo]==-3.5) $st_upa[$stNo]="dér";   ///3057 Námraza
	if ($surf_condition[$stNo]==-4) $st_upa[$stNo]="havas"; 
	if ($surf_condition[$stNo]==-5) $st_upa[$stNo]="havas"; 

 //	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "..";
	$dh=0.05;
	if ($precip_stat[$stNo]==5)      $st_cst[$stNo] = "Zápor";
	if ($precip_stat[$stNo]==4)      $st_cst[$stNo] = "Esõ";
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "Szemerkél";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "Köd";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Harmat";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "Dér";
  if ($precip_stat[$stNo]==-2)     $st_cst[$stNo] = "Hvs.esõ";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "Jgs.esõ";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "Szálingózik";
  if ($precip_stat[$stNo]==-4)     $st_cst[$stNo] = "Hó";
  if ($precip_stat[$stNo]==-5)     $st_cst[$stNo] = "Hóvihar";

 $Pta_Hpt="Pta/Hpt:";
 $Lhõ_Uhõ="Lhõ/Uhõ:";
 $Thõ_Fpt="Thõ/Fpt:";
 $Vté_Upá="Vté/Upá:";
 $Táp_Vrv="Táp/Vrv:";
 $Csi_Cst="Csi/Cst:";
$Uhõ_Fpt='Uhõ/Fpt';
$Lhõ_Pta='Lhõ/Pta';
$Wnd_wDr='SzS/SzI';
  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Pta/Hpt:";
 $Lhõ_Uhõ="Lhõ/Uhõ:";
 $Thõ_Fpt="SzélS/L:";
 $Vté_Upá="SzIrány:";
 $Táp_Vrv="Min/Max:";
 $Csi_Cst="Látótáv:";
 
 $surfdt[$stNo]=$Value_2[$stNo]/10;
 $surf_freez_temp[$stNo]=$Value_3[$stNo]/10;
 $surf_salt_pri[$stNo]=$Value_4[$stNo]*10;
 $st_upa[$stNo]="(fok)";
 $AccuV[$stNo]=$Value_5[$stNo]*10;
 $surf_water_depth[$stNo]=$Value_6[$stNo]*10;
 $rain_int[$stNo]=$Value_1[$stNo]*100;
 $st_cst[$stNo]="méter";
 
 if($rain_int[$stNo]<10.0) $rain_int[$stNo]="---";
  }




//--------------- STANDARD  Data to Web Variables   END


?>
