<?php   

$dump = "";

$mth=date('m',time());
$wsHr=7200;
if (($mth>3) && ($mth<11)) $wsHr= 3600 ;

 $ido2 = time();
 $ido1 = $ido2 - 4*365*86400;
 $ido1w = $ido1 - $wsHr +3600  ;
 $ido2w = $ido2 - $wsHr +3600  ;


for($stNo = 9501 ; $stNo < 9535 ; $stNo++)
{ 
//3377 Možete li u onom XML-u za prikaz svih podataka svih postaja ostaviti samo slijedeće postaje:9503 9519 9501 9514 9518 9504 9502 9517 9527 9532 9516 9531 9525 9520 9526 9521 9524 9515 9533 9513 9523 9522 9534   Ostale izbacite hvala:
if($stNo>9504 && $stNo<9513) $stNo=9513;
if($stNo>9527 && $stNo<9531) $stNo=9531;
if($stNo>9535 && $stNo<9544) $stNo=9999;


include "sql_connect_latin2.php";
 
include "sel_st_data.php";

$fs = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumps.csv", "r") or $fs = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumps.csv", "w+")  or die("Can't open dataDumps.csv file to read");
/* isOK:
echo " \n read stNor: ";
echo $stNor=fread($fs,4);
echo "\n";
*/
//isBAD: echo " \n read stNor: ".$stNor=fread($fs,4)."\n";


$stNor=fread($fs,4);
echo " \n read stNor: ".$stNor."\n"; //thatsOK!


fclose($fs);
if($stNor>$stNo) $stNo=$stNor;

$fs = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumps.csv", "w+") or die("Can't open dataDumps.csv file to write");
fwrite($fs, $stNo."\n");
fclose($fs);


$ft = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumpt".$stNo.".csv", "r") or $ft = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumpt".$stNo.".csv", "w+") or die("Can't open dataDumpt".$stNo.".csv file");
$ido1r=fread($ft,10);
echo " read dataDumpt".$stNo.".csv start: ".$ido1r." starttime, ido1w: ".$ido1w." endtime, ido2w: ".$ido2w."\n";
if($ido1r<$ido1w) fwrite($ft, $ido1w."\n");
fclose($ft);

$ido1s[$stNo]=$ido1w;

if($ido1r>$ido1w) { echo "xxxxxxxxxxxxxxxxxxxxxxxxx ido1wr>ido1w \n";
 $ido2p = time() - $wsHr +3600  ;
$ftw = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumpw".$stNo.".csv", "a") or die("Can't open dataDumpw".$stNo.".csv file");
fwrite($ftw, $stNo." starttime: ".$ido1w." readstarttime: ".$ido1r." processed at: ".$ido2p."\n");
fclose($ftw);
$ido1s[$stNo]=$ido1r;
}

$measure="stations.S".$stNo;
//  id  station_id  measure_time  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

 $querym2 = "SELECT  *  FROM  $measure  where station_id=$stNo and measure_time>$ido1s[$stNo] and measure_time<=$ido2w  and hum>0 and surf_freez_temp<0 order by measure_time ";

$rem2 = mysqli_query($sql_connect,$querym2);

$fd = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDump".$stNo.".csv", "a") or die("Can't open dataDump".$stNo.".csv file");

while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))
  {									//looping measure START:
 include "sft0_xps.php";
  $today[$stNo] =date("H:i",(round(($measure_time[$stNo])/60)*60))." ".date("d.m.Y",$measure_time[$stNo]+22);
    
 $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 ;

include "hr/clc_std-hr.php";

    $dump = " ". $stNo ."\t";
    $dump .= " | ". $today[$stNo] ."\t";
    $dump .= " | ". round($hum[$stNo],1) ."\t";
    $dump .= " | ". round($air_dew_temp[$stNo],1) ."\t";
    $dump .= " | ". round($air[$stNo],1) ."\t";
    $dump .= " | ". round($surft[$stNo],1) ."\t";
    $dump .= " | ". round($surfdt[$stNo],1) ."\t";
    $dump .= " | ". round($surf_freez_temp[$stNo],1) ."\t";
    $dump .= " | ". round($sSp,1) ."\t";
    $dump .= " | ". round($surf_water_depth[$stNo],1) ."\t";
    $dump .= " | ". round($rain_int[$stNo],1) ."\t";
    $dump .= " | ". round($AccuV[$stNo],1) ."\t";
    $dump .= " | ". $st_upa[$stNo]."\t";
    $dump .= " | ". $st_cst[$stNo] ."\t";
    $dump .= "\n";
fwrite($fd, $dump);
$ft = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumpt".$stNo.".csv", "w") or die("Can't open dataDumpt".$stNo.".csv file");
fwrite($ft, $measure_time[$stNo]."\n");
fclose($ft);
     }  //looping measure END
                                                                        
mysqli_close ($sql_connect);

fclose($fd);

echo "               file written to  31.220.111.193/42es/@/hr/Data/dataDump".$stNo."\n";

}


$fs = fopen("<?php echo $hE; ?>/@/hr/Dump/dataDumps.csv", "w") or die("Can't open dataDumps.csv file");
fwrite($fs, "9501\n");
fclose($fs);

sleep(100);


?>


