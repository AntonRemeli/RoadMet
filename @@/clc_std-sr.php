<?php  
error_reporting(0);	

//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==5) $st_upa[$stNo]="vodotočan"; 
	if ($surf_condition[$stNo]==4) $st_upa[$stNo]="vodotočan"; 
	if ($surf_condition[$stNo]==3) $st_upa[$stNo]="mokar"; 
	if ($surf_condition[$stNo]==4 && $surft[$stNo]<-1) $st_upa[$stNo]="slanomokar"; 
	if ($surf_condition[$stNo]==3 && $surft[$stNo]<-1) $st_upa[$stNo]="slanovlažan"; 
	if ($surf_condition[$stNo]==2.5) $st_upa[$stNo]="slanovlažan"; 
	if ($surf_condition[$stNo]==2) $st_upa[$stNo]="vlažan"; 
	if ($surf_condition[$stNo]==1.5) $st_upa[$stNo]="vlaga"; 
	if ($surf_condition[$stNo]==1) $st_upa[$stNo]="suv"; 
	if ($surf_condition[$stNo]==-1) $st_upa[$stNo]="pothlađen"; 
	if ($surf_condition[$stNo]==-1.5) $st_upa[$stNo]="klizav"; 
	if ($surf_condition[$stNo]==-2) $st_upa[$stNo]="klizav"; 
	if ($surf_condition[$stNo]==-2.5) $st_upa[$stNo]="slanoklizav"; 
	if ($surf_condition[$stNo]==-3) $st_upa[$stNo]="moguća poledica"; 
	if ($surf_condition[$stNo]==-3.5) $st_upa[$stNo]="inje";   ///3057 Námraza
	if ($surf_condition[$stNo]==-4) $st_upa[$stNo]="zavejan"; 
	if ($surf_condition[$stNo]==-5) $st_upa[$stNo]="zavejan"; 

 //	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "..";
	$dh=0.05;
	if ($precip_stat[$stNo]==5)      $st_cst[$stNo] = "Lije";
	if ($precip_stat[$stNo]==4)      $st_cst[$stNo] = "Kiša";
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "Sipi";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "Magla";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Rosa";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "Inje";
  if ($precip_stat[$stNo]==-2)       $st_cst[$stNo] = "Susnežica";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "Ledenakiša";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "Provejava";
  if ($precip_stat[$stNo]==-4)     $st_cst[$stNo] = "Sneži";
  if ($precip_stat[$stNo]==-5)     $st_cst[$stNo] = "Mećava";

 $Pta_Hpt="Rvv/Tkn:";
 $Lhõ_Uhõ="Tvz/Tpu:";
 $Thõ_Fpt="Tlo/Tzl:";
 $Vté_Upá="So/Stp:";
 $Táp_Vrv="Nap/Vod:";
 $Csi_Cst="Kop/Vop:";
$Uhõ_Fpt='Tpu/Tzl';
$Lhõ_Pta='Tvz/Rvv';
$Wnd_wDr='Bvt/Svt';
  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Rvz/Tkn:";
 $Lhõ_Uhõ="Tzr/Tkl:";
 $Thõ_Fpt="IntVj/U:";
 $Vtč_Upá="PrVjtra:";
 $Táp_Vrv="Min/Max:";
 $Csi_Cst="Vidljiv:";
 
 $surfdt[$stNo]=$Value_2[$stNo]/10;
 $surf_freez_temp[$stNo]=$Value_3[$stNo]/10;
 $surf_salt_pri[$stNo]=$Value_4[$stNo]*10;
 $st_upa[$stNo]="(stu)";
 $AccuV[$stNo]=$Value_5[$stNo]*10;
 $surf_water_depth[$stNo]=$Value_6[$stNo]*10;
 $rain_int[$stNo]=$Value_1[$stNo]*100;
 $st_cst[$stNo]="metar";
 
 if($rain_int[$stNo]<10.0) $rain_int[$stNo]="---";
  }




//--------------- STANDARD  Data to Web Variables   END


?>
