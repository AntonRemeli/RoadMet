<?php  
$gg=0;
while ($gg<5)
{
echo $gg++;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

// $query = "SELECT  * FROM stations  where st_id>9500 and st_id<9633 order by st_id ";
// PZ 2282 U XML formatu se neke postaje ponavljaju pa bih Vas molio da to prepravite tako da nemamo dupliciranih podataka.

$query = "SELECT distinct(st_id) FROM stations  where (st_id>9500 and st_id<9506) or (st_id>9506 and st_id<9530) or (st_id>9530 and st_id<9596)order by st_id ";


$resultID = mysqli_query($sql_connect,$query) or die("Data not found.");

$xml_output0 = "<?php  xml version=\"1.0\"?>\n";
$xml_output0 .= "<markers>\n";

$xml_output = "<?php  xml version=\"1.0\"?>\n";
$xml_output .= "<markers>\n";

$b = array("Á" ,"á" ,"É" ,"é" ,"Í" ,"í" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú"      ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" ,">"   ,"<"   ,"" ,"" ,"Ð" ,"ð" ,"" ,"" ,"È" ,"è" ,"Æ" ,"æ" ,"ÅŸ");
$u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã­","Ã","Ã³","Ã","Ã¶","Å","Å","&#218;","Ãº","Ã","ÃŒ","Å°","Å±","Â€","&gt;","&lt;","Å ","Å¡","Ä","Ä","Åœ","ÅŸ","Ä","Ä","Ä","Ä","ÅŸ");
 
for($x = 0 ; $x < mysqli_num_rows($resultID) ; $x++){
echo " ".$row['st_id'];
    $row = mysqli_fetch_assoc($resultID);
    $xml_output0 .= "\t<marker st_id=\"". $row['st_id'] ."\" ";
    $str = str_replace($b, $u, $row['StrNo']);
//    $str= $row['StrNo'];
    if($str[0]=="" || $str[0]=="-" || $str[0]=="+")	    $str= str_replace($b, $u, $row['st_Ort']);
    $xml_output0 .= " StrNo=\"". $str ."\" ";

//$b = array("Á", "á" ,"É" ,"é" ,"Í" ,"í" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú" ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" ,">" ,"<");
//$u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã­","Ã","Ã³","Ã","Ã¶","Å","Å","Ã","Ãº","Ã","ÃŒ","Å°","Å±","o","&gt;","&lt;");
        $rowst_Ort = str_replace($b, $u, $row['st_Ort']);
        $rowTyp = str_replace($b, $u, $row['Typ']);

    $xml_output0 .= " st_Ort=\"". $rowst_Ort ."\" ";
    $xml_output0 .= " Lng=\"". $row['Lng'] ."\" ";
    $xml_output0 .= " Lat=\"". $row['Lat'] ."\" ";
    $xml_output0 .= " Xeov=\"". $row['Xeov'] ."\" ";
    $xml_output0 .= " Yeov=\"". $row['Yeov'] ."\" ";
    $xml_output0 .= " Typ=\"". $rowTyp ."\" ";
    
//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  

$rowst_id=$row['st_id'];
$querys = "SELECT * FROM last_data where station_id=$rowst_id ";
$resultIDs = mysqli_query($sql_connect,$querys) or die("Data not found.");

    $rows = mysqli_fetch_assoc($resultIDs);
  $xml_output0 .= " id=\"". $rows['station_id'] ."\" ";  // NEEDED LINE, NO EXPLANATION, WITHOUT IT str_replace($b, $u, FUNCTIONS STRANGELY //did not help?
/*  
    $xml_output .= " \t<marker id=\"". $rows['station_id'] ."\" ";
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
    $xml_output .= " rain_int=\"". round($rows['rain_int']) ."\" ";
 PZ 2270: Molio bih Vas da u xml-u dobijem podatke u onim vrijednostima koje vidim na stranici
 */ 
    $xml_output .= " \t<marker id=\"". $rows['station_id'] ."\" ";
    $xml_output .= " xps_time=\"". $rows['xps_time'] ."\" ";
    $xml_output .= " hum=\"". round($rows['hum'],1) ."\" ";
    $xml_output .= " air_dew_temp=\"". round($rows['air_dew_temp'],1) ."\" ";
    $xml_output .= " air=\"". round($rows['air'],1) ."\" ";
    $xml_output .= " surft=\"". round($rows['surft'],1) ."\" ";
    $xml_output .= " surfdt=\"". round($rows['surfdt'],1) ."\" ";
    $xml_output .= " surf_freez_temp=\"". round($rows['surf_freez_temp'],1) ."\" ";
//    $xml_output .= " surf_salt_sat=\"". round($rows['surf_salt_sat'],1) ."\" ";
    $xml_output .= " surf_salt_pri=\"". round($rows['surf_salt_pri'],1) ."\" ";

    $xml_output .= " surf_condition=\"". round($rows['surf_condition'],1) ."\" ";
    $xml_output .= " rain_int=\"". round($rows['rain_int'],1) ."\" ";
    $xml_output .= " precip_stat=\"". round($rows['precip_stat']) ."\" ";
    $xml_output .= " surf_water_depth=\"". round($rows['surf_water_depth'],1) ."\" ";
    $xml_output .= " AccuV=\"". round($rows['AccuV'],1) ."\" ";

    $xml_output .= "\t\n/>";
    $xml_output0 .= "\t\n/>";
}

$xml_output .= "</markers>";

$xml_output0 .= "</markers>";


$yr=date('y',time());
$mth=date('m',time());
$day=date('d',time());
$dtst0=$yr."".$mth."".$day;
$dtst=round((time()-1000000000)/300-.5);

$fd = fopen("<?php echo $hE; ?>/@/hr/Data/dataNEW.xml", "w") or die("Can't open file");
fwrite($fd, $xml_output);
fclose($fd);


echo "               file written to  31.220.111.193/42es/@/hr/Data/dataNEW ".$dtst;
mysqli_close ($sql_connect);

sleep(300);
}


?>
