<?php  
$gg=0;
while ($gg<5)
{
echo $gg++;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

// $query = "SELECT  * FROM stations  where st_id>9500 and st_id<9633 order by st_id ";
// PZ 2282 U XML formatu se neke postaje ponavljaju pa bih Vas molio da to prepravite tako da nemamo dupliciranih podataka.

//$query = "SELECT distinct(st_id) FROM stations  where (st_id>9500 and st_id<9506) or (st_id>9506 and st_id<9530) or (st_id>9530 and st_id<9596)order by st_id ";

//  id  date  time  station_id  name  county  type  contact  description  user  reply_to  
 $query = "SELECT  * FROM report  where station_id>9500 and station_id<9633 order by time ";


$resultID = mysqli_query($sql_connect,$query) or die("Data not found.");

$xml_output0 = "<?php  xml version=\"1.0\"?>\n";
$xml_output0 .= "<markers>\n";

$b = array("Á" ,"á" ,"É" ,"é" ,"Í" ,"í" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú"      ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" ,">"   ,"<"   ,"" ,"" ,"Ð" ,"ð" ,"" ,"" ,"È" ,"è" ,"Æ" ,"æ" ,"ÅŸ","\"");
$u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã­","Ã","Ã³","Ã","Ã¶","Å","Å","&#218;","Ãº","Ã","ÃŒ","Å°","Å±","Â€","&gt;","&lt;","Å ","Å¡","Ä","Ä","Åœ","ÅŸ","Ä","Ä","Ä","Ä","ÅŸ","'");
 
for($x = 0 ; $x < mysqli_num_rows($resultID) ; $x++){
echo "... ".$row['station_id'];
    $row = mysqli_fetch_assoc($resultID);
	$xml_output0 .= "\t<marker id=\"". $row['id'] ."\" ";

	$xml_output0 .= " station_id=\"". $row['station_id'] ."\" ";
 	$xml_output0 .= " type=\"". $row['type'] ."\" ";
 	$xml_output0 .= " reply_to=\"". $row['reply_to'] ."\" ";


        $row_name = str_replace($b, $u, $row['name']);
        $row_county = str_replace($b, $u, $row['county']);
        $row_description = str_replace($b, $u, $row['description']);
        $row_user = str_replace($b, $u, $row['user']);
        $row_contact = str_replace($b, $u, $row['contact']);

    $xml_output0 .= " name=\"". $row_name ."\" ";
    $xml_output0 .= " county=\"". $row_county ."\" ";
    $xml_output0 .= " description=\"". $row_description ."\" ";
    $xml_output0 .= " user=\"". $row_user ."\" ";
    $xml_output0 .= " contact=\"". $row_contact ."\" ";
   

    $xml_output0 .= "\t\n/>";
}

$xml_output0 .= "</markers>";


$yr=date('y',time());
$mth=date('m',time());
$day=date('d',time());
$dtst0=$yr."".$mth."".$day;
$dtst=round((time()-1000000000)/300-.5);

$fd = fopen("<?php echo $hE; ?>/@/hr/Data/forum.xml", "w") or die("Can't open file");
fwrite($fd, $xml_output0);
fclose($fd);


echo "               file written to  31.220.111.193/42es/@/hr/Data/forum ".$dtst;
mysqli_close ($sql_connect);

sleep(600);
}


?>
