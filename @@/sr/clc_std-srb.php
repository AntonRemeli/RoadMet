<?php  
error_reporting(0);	

//--------------- STANDARD  Data to Web Variables   START


	
  	$st_upc[$stNo]  ="#BDBA7D"; 	// Default values for RoadSurfaceCondition
	if ($surf_condition[$stNo]==5) $st_upa[$stNo]="vodoto�an"; 
	if ($surf_condition[$stNo]==4) $st_upa[$stNo]="vodoto�an"; 
	if ($surf_condition[$stNo]==3) $st_upa[$stNo]="mokar"; 
	if ($surf_condition[$stNo]==2.5) $st_upa[$stNo]="slanovla�an"; 
	if ($surf_condition[$stNo]==2) $st_upa[$stNo]="vla�an"; 
	if ($surf_condition[$stNo]==1.5) $st_upa[$stNo]="vlaga"; 
	if ($surf_condition[$stNo]==1) $st_upa[$stNo]="suh"; 
	if ($surf_condition[$stNo]==-1) $st_upa[$stNo]="pothla�en"; 
	if ($surf_condition[$stNo]==-1.5) $st_upa[$stNo]="sklizak"; 
	if ($surf_condition[$stNo]==-2) $st_upa[$stNo]="sklizak"; 
	if ($surf_condition[$stNo]==-2.5) $st_upa[$stNo]="slanosklizak"; 
	if ($surf_condition[$stNo]==-3) $st_upa[$stNo]="zale�en"; 
	if ($surf_condition[$stNo]==-3.5) $st_upa[$stNo]="inje";    ///3057 N�mraza
	if ($surf_condition[$stNo]==-4) $st_upa[$stNo]="sne�an"; 
	if ($surf_condition[$stNo]==-5) $st_upa[$stNo]="sne�an"; 

 //	$rain_int[$stNo]=$rain_int[$stNo]*(1+$surf_water_depth[$stNo]);

	$st_cst[$stNo] = "--";
	$dh=0.05;
	if ($precip_stat[$stNo]==5)      $st_cst[$stNo] = "Lije";
	if ($precip_stat[$stNo]==4)      $st_cst[$stNo] = "Ki�a";
	if ($precip_stat[$stNo]==3)      $st_cst[$stNo] = "Sipi";
	if ($precip_stat[$stNo]==2)      $st_cst[$stNo] = "Magla";
	if ($precip_stat[$stNo]==1)      $st_cst[$stNo] = "Rosa";
	if ($precip_stat[$stNo]==0)      $st_cst[$stNo] = "--";
	if ($precip_stat[$stNo]==-1)     $st_cst[$stNo] = "Inje";
  if ($precip_stat[$stNo]==-2)       $st_cst[$stNo] = "Susne�ica";
  if ($precip_stat[$stNo]==-2.5)     $st_cst[$stNo] = "Lednaki�a";
  if ($precip_stat[$stNo]==-3)     $st_cst[$stNo] = "Provejava";
  if ($precip_stat[$stNo]==-4)     $st_cst[$stNo] = "Sne�i";
  if ($precip_stat[$stNo]==-5)     $st_cst[$stNo] = "Mecava";

 $Pta_Hpt="Rvl/Tkn:";
 $Lh�_Uh�="Tvz/Tkl:";
 $Th�_Fpt="Tlo/Tzl:";
 $Vt�_Up�="Sol/Stp:";
 $T�p_Vrv="Nap/Vod:";
 $Csi_Cst="Kop/Vrp:";


  
  if ($Value_7[$stNo]==-1)
  {
 $Pta_Hpt="Rvl/Tkn:";
 $Lh�_Uh�="Tvz/Tpt:";
 $Th�_Fpt="IntVt/U:";
 $Vt�_Up�="PrVetra:";
 $T�p_Vrv="Min/Max:";
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
