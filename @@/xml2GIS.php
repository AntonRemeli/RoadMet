<?php  
$gg=0;
while ($gg<5)
{
echo $gg++;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }



//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  


$query = "SELECT * FROM stations  where st_id>9025 and st_id<9633 order by StrNo,st_id ";
//$query = "SELECT * FROM stations  where st_id>9025 and st_id<9199 order by StrNo ";
//$resultID = mysqli_query($sql_connect,$query, $conn) or die("Data not found.");
$resultID = mysqli_query($sql_connect,$query) or die("Data not found.");

$xml_output0 = "<?php  xml version=\"1.0\"?>\n";
$xml_output0 .= "<markers>\n";


$xml_output = "<?php  xml version=\"1.0\"?>\n";
$xml_output .= "<markers>\n";

//$b = array("Á" ,"á" ,"É" ,"é" ,"Í" ,"í" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú"      ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" ,">"   ,"<"   ,"" ,"" ,"Ð" ,"ð" ,"" ,"" ,"È" ,"è" ,"Æ" ,"æ" ,"ÅŸ");
//$u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã­","Ã","Ã³","Ã","Ã¶","Å","Å","&#218;" ,"Ãº","Ã","ÃŒ","Å°","Å±","Â€","&gt;","&lt;","Å ","Å¡","Ä","Ä","Åœ","ÅŸ","Ä","Ä","Ä","Ä","ÅŸ");
//3067 GIS keine sk-Buchstaben / xml2GIS.php modifiziert / problematisch

//  $b = array("Á" ,"á" ,"É" ,"é" ,"Í" ,"í" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú"      ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" ,">"   ,"<"   ,"" ,"" ,"Ð" ,"ð" ,"Æ" ,"æ"        ,"Ä"  ,"ä"  ,"È"  ,"è"  ,"Ï"   ,"ï"   ,"Å"   ,"å"   ,"Œ"   ,"Ÿ"   ,"Ò"   ,"ò"   ,"Ô"   ,"ô"   ,"À"   ,"à"   ,""  ,""   ,"Ý"  ,"ý"  ,""  ,""   ,"ÅŸ","Ä","Å¡","Ï" ,""  ,""   );
//  $u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã­","Ã","Ã³","Ã","Ã¶","Å","Å","&#218;" ,"Ãº","Ã","ÃŒ","Å°","Å±","Â€","&gt;","&lt;","Å ","Å¡","Ä","Ä","Ä","Ä"       ,"Ã" ,"Ã€" ,"Ä" ,"Ä" ,"Ä"  ,"Ä"  ,"Ä¹"  ,"Äº"  ,"Äœ"  ,"ÄŸ"  ,"Å"  ,"Å"  ,"Ã"  ,"ÃŽ"  ,"Å"  ,"Å"  ,"Å€" ,"Å¥"  ,"Ã" ,"Ãœ" ,"Åœ" ,"ÅŸ"  ,"ÅŸ","Ä","Å¡","Ä","Å ","Å¡"  );
//3067.1 einige falsche Buchstaben / nem mindegy a felsorolási sorrend / xml2GIS.php modifiziert / entsprechend

  $b = array("Á" ,"á" ,"É" ,"é" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú"      ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" ,">"   ,"<"           ,"Ä"  ,"ä"  ,"Å"   ,"å"   ,"Œ"   ,"Ÿ"   ,"Ò"   ,"ò"   ,"Ô"   ,"ô"   ,"À"   ,"à"   ,""  ,""   ,"Ý"  ,"ý"  ,""  ,"" ,"" ,"" ,"Ï"   ,"ï" ,"Í" ,"í" ,"È"  ,"è" ,"Ð" ,"ð" ,"Æ" ,"æ"        );
  $u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã³","Ã","Ã¶","Å","Å","&#218;" ,"Ãº","Ã","ÃŒ","Å°","Å±","Â€","&gt;","&lt;"        ,"Ã" ,"Ã€" ,"Ä¹"  ,"Äº"  ,"Äœ"  ,"ÄŸ"  ,"Å"  ,"Å"  ,"Ã"  ,"ÃŽ"  ,"Å"  ,"Å"  ,"Å€" ,"Å¥"  ,"Ã" ,"Ãœ" ,"Åœ" ,"ÅŸ","Å ","Å¡","Ä"  ,"Ä","Ã","Ã­","Ä" ,"Ä","Ä","Ä","Ä","Ä"        );


 
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

    $xml_output .= "\t\n/>";
    $xml_output0 .= "\t\n/>";

 
}

$xml_output .= "</markers>";

$xml_output0 .= "</markers>";

//echo $xml_output;
//$handle = fopen("info.txt", "w");
/*
$fp = fopen("<?php echo $hE; ?>/GIS/dataNEW3.xml", "w") or die("Can't open file");
fwrite($fp, $xml_output);
fclose($fp);
*/
$yr=date('y',time());
$mth=date('m',time());
$day=date('d',time());
$dtst0=$yr."".$mth."".$day;
$dtst=round((time()-1000000000)/300-.5);
$fd0 = fopen("<?php echo $hE; ?>/GDT/dataNEW".$dtst0.".xml", "w") or die("Can't open file");
fwrite($fd0, $xml_output0);
fclose($fd0);
$fd = fopen("<?php echo $hE; ?>/GDT/dataNEW".$dtst.".xml", "w") or die("Can't open file");
fwrite($fd, $xml_output);
fclose($fd);
$dtst++;
$fd = fopen("<?php echo $hE; ?>/GDT/dataNEW".$dtst.".xml", "w") or die("Can't open file");
fwrite($fd, $xml_output);
fclose($fd);

echo "               file written to  31.220.111.193/42es/GDT/dataNEW ".$dtst;
mysqli_close ($sql_connect);

sleep(300);
}


?>
