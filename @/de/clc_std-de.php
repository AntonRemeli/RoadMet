<?php  
error_reporting(0);	


//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==4) {$st_upa[$stNo]="Überschwemmung"; $st_upc[$stNo]="#6666ff";}
	if ($surf_condition[$stNo]==3) {$st_upa[$stNo]="wässerig"; $st_upc[$stNo]="#42A0FF";}
	if ($surf_condition[$stNo]==2.5) {$st_upa[$stNo]="salznaß"; $st_upc[$stNo]="#99CCFF";}
	if ($surf_condition[$stNo]==2) {$st_upa[$stNo]="naß"; $st_upc[$stNo]="#99CCFF";}
	if ($surf_condition[$stNo]==1.5) {$st_upa[$stNo]="feucht"; $st_upc[$stNo]="#99CCFF";}
	if ($surf_condition[$stNo]==1) {$st_upa[$stNo]="trocken"; $st_upc[$stNo]="#FDF8BB";}
	if ($surf_condition[$stNo]==-1) {$st_upa[$stNo]="unterkßhlt"; $st_upc[$stNo]="#ff8888";}
	if ($surf_condition[$stNo]==-1.5) {$st_upa[$stNo]="rutschig"; $st_upc[$stNo]="#ff8888";}
	if ($surf_condition[$stNo]==-2) {$st_upa[$stNo]="rutschig"; $st_upc[$stNo]="#ff5555";}
	if ($surf_condition[$stNo]==-2.5) {$st_upa[$stNo]="salzrutschig"; $st_upc[$stNo]="#ff5555";}
	if ($surf_condition[$stNo]==-3) {$st_upa[$stNo]="eisig"; $st_upc[$stNo]="#ff2222";}
	if ($surf_condition[$stNo]==-4) {$st_upa[$stNo]="Schnee"; $st_upc[$stNo]="#ffffff";}

 	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "--";
	$dh=0.05;
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "Regen";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "Nebel";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Tau";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "Reif";
  if ($precip_stat[$stNo]==-2)     $st_cst[$stNo] = "Schneeregen";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "Eisregen";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "Schnee";

 $Pta_Hpt="Ref/Tau:";  //%rel.Feuchte/Taupunkt
 $Lhõ_Uhõ="Lft/Fbt:";  //Lufttemp./Fahrbahntemp.
 $Thõ_Fpt="Tft/Gfp:";  //Tieftemp./Gefrierpunkt
 $Vté_Upá="Chf/Str:";  //Chem.Faktor/Straßenzustand
 $Táp_Vrv="Spn/Wsf:";  //Spannung/Wasserfilm
 $Csi_Cst="Nsi/Nst:";  //Niederschlagsintensität/Niederschlagsart


  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Ref/Tau:";
 $Lhõ_Uhõ="Lft/Fbt:";
 $Thõ_Fpt="WndG/Wb:";   //Windgeschwindigkeit/Windböe
 $Vté_Upá="WndRich:";   //Windrichtung
 $Táp_Vrv="Min/Max:";
 $Csi_Cst="Sichtwt:";   //Sichtweite 
 
 $surfdt[$stNo]=$Value_2[$stNo]/10;
 $surf_freez_temp[$stNo]=$Value_3[$stNo]/10;
 $surf_salt_pri[$stNo]=$Value_4[$stNo]*10;
 $st_upa[$stNo]="(Grad)";
 $AccuV[$stNo]=$Value_5[$stNo]*10;
 $surf_water_depth[$stNo]=$Value_6[$stNo]*10;
 $rain_int[$stNo]=$Value_1[$stNo]*100;
 $st_cst[$stNo]="Meter";
 
 if($rain_int[$stNo]<10.0) $rain_int[$stNo]="---";
  }




//--------------- STANDARD  Data to Web Variables   END


?>
