<?php  
error_reporting(0);	

//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==5) $st_upa[$stNo]="vodotoéan"; 
	if ($surf_condition[$stNo]==4) $st_upa[$stNo]="vodotoéan"; 
	if ($surf_condition[$stNo]==3) $st_upa[$stNo]="mokar"; 
	if ($surf_condition[$stNo]==2.5) $st_upa[$stNo]="slanovlažan"; 
	if ($surf_condition[$stNo]==2) $st_upa[$stNo]="vlažan"; 
	if ($surf_condition[$stNo]==1.5) $st_upa[$stNo]="vlaga"; 
	if ($surf_condition[$stNo]==1) $st_upa[$stNo]="suh"; 
	if ($surf_condition[$stNo]==-1) $st_upa[$stNo]="pothlaðen"; 
	if ($surf_condition[$stNo]==-1.5) $st_upa[$stNo]="sklizak"; 
	if ($surf_condition[$stNo]==-2) $st_upa[$stNo]="sklizak"; 
	if ($surf_condition[$stNo]==-2.5) $st_upa[$stNo]="slanosklizak"; 
	if ($surf_condition[$stNo]==-3) $st_upa[$stNo]="zaleðen"; 
	if ($surf_condition[$stNo]==-3.5) $st_upa[$stNo]="inje";    ///3057 Námraza
	if ($surf_condition[$stNo]==-4) $st_upa[$stNo]="snežan"; 
	if ($surf_condition[$stNo]==-5) $st_upa[$stNo]="snežan"; 

 //	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "--";
	$dh=0.05;
	if ($precip_stat[$stNo]==5)      $st_cst[$stNo] = "Lije";
	if ($precip_stat[$stNo]==4)      $st_cst[$stNo] = "Kiša";
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "Sipi";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "Magla";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Rosa";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "Inje";
  if ($precip_stat[$stNo]==-2)       $st_cst[$stNo] = "Susnežica";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "Lednakiša";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "Provejava";
  if ($precip_stat[$stNo]==-4)     $st_cst[$stNo] = "Sneži";
  if ($precip_stat[$stNo]==-5)     $st_cst[$stNo] = "Mecava";

 $Pta_Hpt="Rvl/Tkn:";
 $Lhõ_Uhõ="Tvz/Tkl:";
 $Thõ_Fpt="Tlo/Tzl:";
 $Vté_Upá="Sol/Stp:";
 $Táp_Vrv="Nap/Vod:";
 $Csi_Cst="Kop/Vrp:";


  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Rvl/Tkn:";
 $Lhõ_Uhõ="Tvz/Tpt:";
 $Thõ_Fpt="IntVt/U:";
 $Vté_Upá="PrVetra:";
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
