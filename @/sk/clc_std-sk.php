<?php  
error_reporting(0);	


//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==5) $st_upa[$stNo]="mokro"; 
	if ($surf_condition[$stNo]==4) $st_upa[$stNo]="mokro"; 
	if ($surf_condition[$stNo]==3) $st_upa[$stNo]="mokro"; 
	if ($surf_condition[$stNo]==2.5) $st_upa[$stNo]="sol'ná vlhkos";
	if ($surf_condition[$stNo]==2) $st_upa[$stNo]="vlhkejie"; 
	if ($surf_condition[$stNo]==1.5) $st_upa[$stNo]="vlhko"; 
	if ($surf_condition[$stNo]==1) $st_upa[$stNo]="sucho"; 
	if ($surf_condition[$stNo]==-1) $st_upa[$stNo]="podchladeno"; 
	if ($surf_condition[$stNo]==-1.5) $st_upa[$stNo]="mykŸavo"; 
	if ($surf_condition[$stNo]==-2) $st_upa[$stNo]="klzko"; 
	if ($surf_condition[$stNo]==-2.5) $st_upa[$stNo]="sol'ná klzkos"; 
	if ($surf_condition[$stNo]==-3) $st_upa[$stNo]="poŸadovica"; 
	if ($surf_condition[$stNo]==-3.5) $st_upa[$stNo]="Námraza";    ///3057 Námraza
	if ($surf_condition[$stNo]==-4) $st_upa[$stNo]="sneh"; 
	if ($surf_condition[$stNo]==-5) $st_upa[$stNo]="sneh"; 

 //	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "--";
	$dh=0.05;
	if ($precip_stat[$stNo]==5)      $st_cst[$stNo] = "Lejak";
	if ($precip_stat[$stNo]==4)      $st_cst[$stNo] = "Dáï";
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "Mrholenie";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "Hmla";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Topenie";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "Mráz";
	if ($precip_stat[$stNo]==-1.5)     $st_cst[$stNo] = "Padajúci mráz";
  if ($precip_stat[$stNo]==-2)     $st_cst[$stNo] = "Dáï so snehom";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "Krúpy";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "Slabé sneenie";
  if ($precip_stat[$stNo]==-4)     $st_cst[$stNo] = "Sneenie";
  if ($precip_stat[$stNo]==-5)     $st_cst[$stNo] = "Silné sneenie";

 $Pta_Hpt="Rel/Ros:";  //%rel.Feuchte/Taupunkt
 $Lhõ_Uhõ="Tvz/Tce:";  //Lufttemp./Fahrbahntemp.
 $Thõ_Fpt="HlT/Bmr:";  //Tieftemp./Gefrierpunkt
 $Vté_Upá="Sol/Sce:";  //Chem.Faktor/Straßenzustand
 $Táp_Vrv="Nap/Vfi:";  //Spannung/Wasserfilm
 $Csi_Cst="InZ/Dru:";  //Niederschlagsintensität/Niederschlagtyp


  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Rel/Ros:";
 $Lhõ_Uhõ="Tvz/Tce:";
 $Thõ_Fpt="Rýv/Výv:";   //Rýchlos vetra/Výka vetra
 $Vté_Upá="Smervet:";   //Smer vetra
 $Táp_Vrv="Min/Max:";
 $Csi_Cst="ViditeŸ:";   //ViditeŸnos
 
 $surfdt[$stNo]=$Value_2[$stNo]/10;
 $surf_freez_temp[$stNo]=$Value_3[$stNo]/10;
 $surf_salt_pri[$stNo]=$Value_4[$stNo]*10;
 $st_upa[$stNo]="(Stupeò)";
 $AccuV[$stNo]=$Value_5[$stNo]*10;
 $surf_water_depth[$stNo]=$Value_6[$stNo]*10;
 $rain_int[$stNo]=$Value_1[$stNo]*100;
 $st_cst[$stNo]="Meter";
 
 if($rain_int[$stNo]<10.0) $rain_int[$stNo]="---";
  }




//--------------- STANDARD  Data to Web Variables   END


?>
