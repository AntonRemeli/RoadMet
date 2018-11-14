<?php  

include "../@/sql_connect.php";


//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  


$query = "SELECT * FROM stations  where st_id>9025 and st_id<9633 order by StrNo ";
//$query = "SELECT * FROM stations  where st_id>9025 and st_id<9199 order by StrNo ";
//$resultID = mysqli_query($sql_connect,$query, $conn) or die("Data not found.");
$resultID = mysqli_query($sql_connect,$query) or die("Data not found.");

$xml_output = "<?php  xml version=\"1.0\"?>\n";
$xml_output .= "<markers>\n";
 
for($x = 0 ; $x < mysqli_num_rows($resultID) ; $x++){
    $row = mysqli_fetch_assoc($resultID);
    $xml_output .= "\t<marker st_id=\"". $row['st_id'] ."\" ";
    $str= $row['StrNo'];
    if($str=="")	    $str="Road km+m";
    $xml_output .= " StrNo=\"". $str ."\" ";

$b = array("Á", "á", "É", "é", "Í", "í", "Ó", "ó", "Ö", "ö", "Õ", "õ", "Ú", "ú", "Ü", "ü", "Û", "û", "€", ">", "<");
$u = array("Ã", "Ã¡", "Ã", "Ã©", "Ã", "Ã­", "Ã", "Ã³", "Ã", "Ã¶", "Å", "Å", "Ã", "Ãº", "Ã", "ÃŒ", "Å°", "Å±","o","&gt;","&lt;");

        $rowst_Ort = str_replace($b, $u, $row['st_Ort']);
        $rowTyp = str_replace($b, $u, $row['Typ']);

    $xml_output .= " st_Ort=\"". $rowst_Ort ."\" ";
    $xml_output .= " Lng=\"". $row['Lng'] ."\" ";
    $xml_output .= " Lat=\"". $row['Lat'] ."\" ";
    $xml_output .= " Xeov=\"". $row['Xeov'] ."\" ";
    $xml_output .= " Yeov=\"". $row['Yeov'] ."\" ";
    $xml_output .= " Typ=\"". $rowTyp ."\" ";

    
//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

$rowst_id=$row['st_id'];
$querys = "SELECT * FROM last_data where station_id=$rowst_id ";
$resultIDs = mysqli_query($sql_connect,$querys) or die("Data not found.");

    $rows = mysqli_fetch_assoc($resultIDs);
    $xml_output .= " id=\"". $rows['station_id'] ."\" ";
    $xml_output .= " measure_time=\"". $rows['measure_time'] ."\" ";
    $xml_output .= " xps_time=\"". $rows['xps_time'] ."\" ";
    $xml_output .= " rel_hum=\"". round($rows['rel_hum']) ."\" ";
    $xml_output .= " hum=\"". round($rows['hum']) ."\" ";
    $xml_output .= " air=\"". round($rows['air']) ."\" ";
    $xml_output .= " air_temp=\"". round($rows['air_temp']) ."\" ";
    $xml_output .= " surft=\"". round($rows['surft']) ."\" ";
    $xml_output .= " surf_temp=\"". round($rows['surf_temp']) ."\" ";
    $xml_output .= " surf_freez_temp=\"". round($rows['surf_freez_temp']) ."\" ";
    $xml_output .= " surf_salt_pri=\"". round($rows['surf_salt_pri']) ."\" ";
    $xml_output .= " surf_salt_sat=\"". round($rows['surf_salt_sat']) ."\" ";
    $xml_output .= " surf_water_depth=\"". round($rows['surf_water_depth'],1) ."\" ";


    $xml_output .= "\t/>";
}

$xml_output .= "</markers>";

echo $xml_output;
//$handle = fopen("info.txt", "w");

$fp = fopen("../GDT/dataNEW3.xml", "w") or die("Can't open file");
fwrite($fp, $xml_output);
fclose($fp);
 

mysqli_close ($sql_connect);


?>
