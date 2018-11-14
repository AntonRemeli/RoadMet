  <?php  
  while (1){
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	  $ido1 = time()-122*3600; //86400;
//	  $ido2 = time()+7200;
	  $ido2 = time()+0;
	  echo	"\n".$ido1."  ".$ido2."  >>>  ";


//st_id st_Ort StrNo Lat Latm Alt Altm KlimaZ cty county StrM xps_k1 xps_k2 xps_kw xps_ki xps_kl xps_kat xps_kst xps_krh st_txt h Typ GSMno GPRSno BCUno FBSno HGTno Raino megj 
//$query = "SELECT st_id FROM stations where st_id>9117 and st_id<9124 ";
//$query = "SELECT st_id FROM stations ";
$query = "SELECT distinct(st_id) FROM stations where st_id>9535 ";


//$query = "SELECT id FROM station_data ";
$res = mysqli_query($sql_connect,$query);


while ( $rows = mysqli_fetch_row($res))
// looping station START:
{
 $station=$rows[0] ;
//#echo ("<br><img src='gx2MKA.php?dd=");
//echo ($station."  ido1= ".$ido1."  ido2= ".$ido2."\n");
 echo ($station)." ";
//$mojstr = "php5 31.220.111.193/42es/@/gx2MKA.php ".$station." ".$ido1." ".$ido2;
$mojstr = "/usr/bin/php5 31.220.111.193/42es/@/gx2MKA.php ".$station." ".$ido1." ".$ido2;
exec($mojstr);

 }
//looping station END

mysqli_close ($sql_connect);


sleep(300);
}

             ?>
