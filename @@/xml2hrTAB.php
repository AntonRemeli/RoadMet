<?php 
echo "xml2hrTAB.php running: ".time();
error_reporting(0);
//error_reporting(E_ALL);

//include "sql_connect_latin2.php";
	
		$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); 
if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();  } 

 
include "sel_st_data.php";



$xml_output = "<?xml version=\"1.0\"?>\n";
$xml_output .= "<markers>\n";


$mth=date('m',time());
$wsHr=7200;
if (($mth>3) && ($mth<10)) $wsHr= 3600 ;

 $ido2 = time();
// $ido1 = $ido2 - 3600; // Molio bih Vas da na slijedećem XML file-u http://195.56.65.42/@/hr/Data/dataTAB.xml omogućite da se osvježava svakih 20 min te da daje podatke za to razdoblje.
 $ido1 = $ido2 - 1200;
// $ido1 = $ido2 - 10200;

 $ido1w = $ido1 - $wsHr +3600  ;
 $ido2w = $ido2 - $wsHr +3600  ;

//Za stanice 9534 Veternica,9536 Ivanec i 9537 Varaždin Breg bi trebali u XML-u dodati i podatke za brzinu i smjer vjetra.





for($dd = 9500 ; $dd < 9542 ; $dd++)
{
//3377 Možete li u onom XML-u za prikaz svih podataka svih postaja ostaviti samo slijedeće postaje:9503 9519 9501 9514 9518 9504 9502 9517 9527 9532 9516 9531 9525 9520 9526 9521 9524 9515 9533 9513 9523 9522 9534   Ostale izbacite hvala:
if($dd>9505 && $dd<9513) $dd=9513;
if($dd>9529 && $dd<9531) $dd=9531;
//if($dd>9539 && $dd<9541) $dd=9999;
if($dd>9541 && $dd<9544) $dd=9999;

echo " . . . dd++ : ".$dd." . . . ";
$measure="stations.S".$dd;
//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
//  id  station_id      measure_time    rel_hum air_dew_temp    air_temp        surf_temp       surf_deep_temp  surf_freez_temp surf_salt_pri   surf_salt_sat        surf_condition  Value_7 Value_6 Value_5 Value_4 Value_3 Value_2 Value_1 Value_0 rain_int        surf_water_depth        precip_stat precip_imp_int   precip_imp_lng  AccuV   door_contact    precip_stat1    precip_stat2    precip_stat3    wind1   wind2   wind3   wind4   wind5   snowhum      air     surft   surfdt  xps_time

// $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w  and hum>0 and surf_freez_temp<0 order by measure_time ";
// $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1 and measure_time<$ido2  and hum>0 and surf_freez_temp<0 order by measure_time ";   //4216:  Ako još možete osposobiti da se te stanice uvrste u XML na adresi http://195.56.65.42/@/hr/Data/dataTAB.xml bez obzira što nemaju temperaturu i vlagu.
 $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1 and measure_time<$ido2  and surf_freez_temp<0 order by measure_time ";

//$rem2 = mysqli_query($sql_connect,$querym2);
	
	if ($rem2 = mysqli_query($sql_connect,$querym2)) {
    printf("Select returned %d rows.\n", mysqli_num_rows($rem2));

 
		
		
//	$rows = mysqli_fetch_assoc($rem2);	
		
		
		
$stNo=$dd;

//while ($rowm = mysqli_fetch_array($rem2, MYSQL_ASSOC))
while ($rowm = mysqli_fetch_assoc($rem2))
  {                                                                     //looping measure START:
echo " . . . . . . . stNo : ".$stNo." . . . ";
 include "sft0_xps.php";
  $today[$stNo] =date("H:i",(round(($measure_time[$stNo])/60)*60))." ".date("d.m.Y",$measure_time[$stNo]+22);
    
 $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 ;

include "hr/clc_std-hr.php";

    $xml_output .= " \t<marker id=\"". $dd ."\" ";
    $xml_output .= " xps_time=\"". $today[$stNo] ."\" ";
    $xml_output .= " hum=\"". round($hum[$stNo],1) ."\" ";
    $xml_output .= " air_dew_temp=\"". round($air_dew_temp[$stNo],1) ."\" ";
    $xml_output .= " air=\"". round($air[$stNo],1) ."\" ";
    $xml_output .= " surft=\"". round($surft[$stNo],1) ."\" ";
    $xml_output .= " surfdt=\"". round($surfdt[$stNo],1) ."\" ";
    $xml_output .= " surf_freez_temp=\"". round($surf_freez_temp[$stNo],1) ."\" ";
    $xml_output .= " surf_salt_pri=\"". round($sSp,1) ."\" ";
    $xml_output .= " surf_water_depth=\"". round($surf_water_depth[$stNo],1) ."\" ";
    $xml_output .= " surf_condition=\"". $st_upa[$stNo]."\" ";
    $xml_output .= " rain_int=\"". round($rain_int[$stNo],1) ."\" ";
    $xml_output .= " precip_stat=\"". $st_cst[$stNo] ."\" ";
    $xml_output .= " AccuV=\"". round($AccuV[$stNo],1) ."\" ";
if($wind1[$stNo]>''){
    $xml_output .= " brzina_vjetra=\"". $wind1[$stNo] ."\" ";
    $xml_output .= " smjer_vjetra=\"". $wind3[$stNo] ."\" ";}
    $xml_output .= "\t\n/>";
  }                                                                                 //looping measure END

// free result set 

    mysqli_free_result($rem2);
}

}

mysqli_close ($sql_connect);

$xml_output .= "</markers>";

$fd = fopen("/var/www/html/42es/@/hr/Data/dataTAB.xml", "w") or die("Can't open file");
fwrite($fd, $xml_output);
fclose($fd);

echo "               file written to  /var/www/html/42es/@/hr/Data/dataTAB ";

//sleep(3600);
//sleep(1200);
//sleep(600);
sleep(1200);

?>
