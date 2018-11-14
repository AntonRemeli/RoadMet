<?php   

$xml_output = "<?php  xml version=\"1.0\"?>\n";
$xml_output .= "<markers>\n";
/*
$mth=date('m',time());
$wsHr=7200;
if (($mth>3) && ($mth<10)) $wsHr= 3600 ;

 $ido2 = time();
 $ido1 = $ido2 - 3600;
 $ido1w = $ido1 - $wsHr +3600  ;
 $ido2w = $ido2 - $wsHr +3600  ;

for($dd = 9500 ; $dd < 9536 ; $dd++)
{
include "sql_connect_latin2.php";
 
include "sel_st_data.php";

$measure="stations.S".$dd;
//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

 $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w  and hum>0 and surf_freez_temp<0 order by measure_time ";

$rem2 = mysqli_query($sql_connect,$querym2);
 
$stNo=$dd;

while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))
  {										//looping measure START:
 include "sft0_xps.php";
  $today[$stNo] =date("H:i",(round(($measure_time[$stNo])/60)*60))." ".date("d.m.Y",$measure_time[$stNo]+22);
    
 $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 

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

    $xml_output .= "\t\n/>";
  }                                                                                 //looping measure END
mysqli_close ($sql_connect);
 }
*/
$xml_output .= "</markers>";

$fd = fopen("<?php echo $hE; ?>/@/hr/Data/dataTAB.xml", "w") or die("Can't open file");
fwrite($fd, $xml_output);
fclose($fd);

echo "               file written to  31.220.111.193/42es/@/hr/Data/dataTAB ";

sleep(3600);

?>


