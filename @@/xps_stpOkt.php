 <table width="100%" border="0" cellspacing="1" cellpadding="2"  align="center">

<?php  
error_reporting(0);
//error_reporting(E_ALL);

while (1)
{
	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	$ido2T=time()+600;
//	$ido1T=$ido2T-3600*24;


//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
$queryLD = "SELECT  *  FROM  last_data  where  measure_time<$ido2T and measure_time>mta ";
//and station_id>9025 and station_id<9233 and station_id>9500 and station_id<9505

$reLD = mysqli_query($sql_connect,$queryLD);
mysqli_close ($sql_connect);

while ($rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC))
//   looping last_data START
{
	$dd=$rowLD[station_id];
	$measure_timeLD=$rowLD[measure_time];
	$mtaLD=$rowLD[mta];

	$ido1T=$rowLD[mta]-3600;
	$ido1R=$rowLD[mta]-3600;

     
	$stNo= $dd;
$sta="stations.S".$stNo;

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


include "sel_st_data.php";


// id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time 

// $sss_prv = mysqli_query($sql_connect,"SELECT  *  FROM  $sta  where measure_time>$ido1T and measure_time<$ido2T order by measure_time ");
//2882: indoktalanul be- v.kiugrik sooo
$sss_prv = mysqli_query($sql_connect,"SELECT  *  FROM  $sta  where measure_time>$ido1T and measure_time<$ido2T and xps_time>'0000-00-00 00:00:00' order by -measure_time ");

include "xps_stp0.php";

if($ido1R+23*3600<$ido2T)   $surf_salt_pri0[$stNo] = 0 ;


// id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

$querym2 = "SELECT  *  FROM  $sta  where  measure_time>=$ido1R && measure_time<$ido2T  order by measure_time ";
$rem2 = mysqli_query($sql_connect,$querym2);


mysqli_close ($sql_connect);

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$num_rows = mysqli_num_rows($rem2);
$numr=0;
$mtaLD0=$ido1R;

while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))

//looping measure START:
{
	$row_id[$stNo]=$rowm[id];
$mtaLD=$mtaLD0;
$mtaLD0=$rowm[measure_time];
	$measure_time[$stNo]=$rowm[measure_time];
	$xps_time[$stNo]=$rowm[xps_time];

	$air_temp[$stNo]=$rowm[air_temp];
	$rel_hum[$stNo]=$rowm[rel_hum];
	$precip_imp_int[$stNo]=$rowm[precip_imp_int];
	$precip_imp_lng[$stNo]=$rowm[precip_imp_lng];
	$surf_temp[$stNo]=$rowm[surf_temp];
	$surf_deep_temp[$stNo]=$rowm[surf_deep_temp];
	$AccuV[$stNo]=$rowm[AccuV];	//3895:	-3	hamis szonda legyen napsugárzásfüggő


	$Value_0[$stNo] = $rowm[Value_0];
	$Value_1[$stNo] = $rowm[Value_1];
	$Value_2[$stNo] = $rowm[Value_2];
	$Value_3[$stNo] = $rowm[Value_3];
	$Value_4[$stNo] = $rowm[Value_4];
	$Value_5[$stNo] = $rowm[Value_5];
	$Value_6[$stNo] = $rowm[Value_6];
	$Value_7[$stNo] = $rowm[Value_7];
	$precip_stat1[$stNo] = $rowm[precip_stat1];
	$precip_stat2[$stNo] = $rowm[precip_stat2];
	$precip_stat3[$stNo] = $rowm[precip_stat3];
	
  echo "\n".$xps_time[$stNo] = date("Y.m.d",time()+22)." ".date("H:i:s",time());
 
echo "  station:   ".$dd;
echo "  timeW:      ".$ido1R;
echo "  timemid:      ".$measure_time[$stNo];
echo "  sspr:      ".$surf_salt_pri0[$stNo];

	include "clc_xps.php";
	include "meaSet.php";

$res42upS = mysqli_query($sql_connect,"UPDATE $sta SET $Set  WHERE measure_time=$measure_time[$stNo]");

  $surf_salt_pri0[$stNo] =  $surf_salt_pri[$stNo];
  $precip_stat30[$stNo] = $precip_stat3[$stNo];


$numr++;
if($numr==$num_rows) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd");
}
// looping  measure END

//if($numr==$num_rows) $resa42upd = mysqli_query($sql_connect,"UPDATE last_data SET $laSet	WHERE  station_id=$dd");

 mysqli_close ($sql_connect);

 $dp=9536;
if($stNo==$dp) include "VJTauto.php";

}
//looping last_data END

sleep(10);
}



 

 
             ?>
