
<?php  
echo "xps_stp running, time(): ".time();
error_reporting(0);
//error_reporting(E_ALL);
$m=0;
while (1)
{
//echo " new turn:  ".$m++." . . . /n ";
	$sql_conn=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	$ido2w=time()+600;
// echo " ido2w : ".$ido2w."  ";	
//	$ido1T=$ido2w-3600*24;
echo "\n . . . new turn :  ".$m++." ido2w : ".$ido2w." . . . ";

//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
$queryLD = "SELECT  *  FROM  last_data  where  measure_time<$ido2w and measure_time>mta and station_id>9500  ";
//$queryLD = "SELECT  *  FROM  last_data  where  station_id>9500  ";
//and station_id>9025 and station_id<9233 and station_id>9500 and station_id<9505

$reLD = mysqli_query($sql_conn,$queryLD);

mysqli_close ($sql_conn);
	
//while ($rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC))
	while ($rowLD = mysqli_fetch_assoc($reLD))
// printf(" +++++++++++++Select returned %d rows.\n", mysqli_num_rows($reLD));		
//   looping last_data START
{
	printf(" ------------- Select returned %d rows.\n", mysqli_num_rows($reLD));	
	$dd=$rowLD[station_id];
	$measure_timeLD=$rowLD[measure_time];
	$mtaLD=$rowLD[mta];

//	$ido1w=$rowLD[mta]-1200;

	$ido1w=$rowLD[mta]-120;
echo " ido1w : ".$ido1w."   dd : ".$dd."   measure_timeLD : ".$measure_timeLD."   mtaLD : ".$mtaLD."  ";		
//	$ido1w=$rowLD[mta]-1200-120;
$ido1w0 = $ido1w -720;
///////	$ido1w=$rowLD[mta]-3600;

   $stNo= $dd;  
echo	"stNo : ".$stNo." ... ";
include "xps_at.php";



 $dp=9536;
if($stNo==$dp) include "VJTauto.php";

}
	// free result set 

    mysqli_free_result($reLD);
//looping last_data END


//  sleep(30);
	sleep(100);
}



 

 
             ?>

