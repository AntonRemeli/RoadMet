<?php  
error_reporting(0);	


//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==4) {$st_upa[$stNo]="flood"; $st_upc[$stNo]="#6666ff";}
	if ($surf_condition[$stNo]==3) {$st_upa[$stNo]="water"; $st_upc[$stNo]="#42A0FF";}
	if ($surf_condition[$stNo]==2.5) {$st_upa[$stNo]="saltwet"; $st_upc[$stNo]="#99CCFF";}
	if ($surf_condition[$stNo]==2) {$st_upa[$stNo]="wet"; $st_upc[$stNo]="#99CCFF";}
	if ($surf_condition[$stNo]==1.5) {$st_upa[$stNo]="damp"; $st_upc[$stNo]="#99CCFF";}
	if ($surf_condition[$stNo]==1) {$st_upa[$stNo]="dry"; $st_upc[$stNo]="#FDF8BB";}
	if ($surf_condition[$stNo]==-1) {$st_upa[$stNo]="undercooled"; $st_upc[$stNo]="#ff8888";}
	if ($surf_condition[$stNo]==-1.5) {$st_upa[$stNo]="slippery"; $st_upc[$stNo]="#ff8888";}
	if ($surf_condition[$stNo]==-2) {$st_upa[$stNo]="slippery"; $st_upc[$stNo]="#ff5555";}
	if ($surf_condition[$stNo]==-2.5) {$st_upa[$stNo]="saltslippery"; $st_upc[$stNo]="#ff5555";}
	if ($surf_condition[$stNo]==-3) {$st_upa[$stNo]="frozen"; $st_upc[$stNo]="#ff2222";}
	if ($surf_condition[$stNo]==-4) {$st_upa[$stNo]="snow"; $st_upc[$stNo]="#ffffff";}

 	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "--";
	$dh=0.05;
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "rain";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "fog";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Rope";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "rime";
  if ($precip_stat[$stNo]==-2)     $st_cst[$stNo] = "snowy rain ";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "sleety rain";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "snow";

 $Pta_Hpt="Reh/Dew:";  //%rel.Feuchte/Taupunkt
 $Lhõ_Uhõ="Art/Pwt:";  //Lufttemp./Fahrbahntemp.
 $Thõ_Fpt="Grt/Frp:";  //Tieftemp./Gefrierpunkt
 $Vté_Upá="Chf/Rds:";  //Chem.Faktor/Straßenzustand
 $Táp_Vrv="Vlt/Wtf:";  //Spannung/Wasserfilm
 $Csi_Cst="Pri/Prt:";  //Niederschlagsintensität/Niederschlagtyp


  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Reh/Dew:";
 $Lhõ_Uhõ="Art/Pwt:";
 $Thõ_Fpt="WndS/Wb:";   //Windgeschwindigkeit/Windböhe
 $Vté_Upá="WndDir:";   //Windrichtung
 $Táp_Vrv="Min/Max:";
 $Csi_Cst="VisRng:";   //Sichtweite 
 
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
