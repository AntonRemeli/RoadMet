<?php  
// $dp=9538;
//$stNo=9538;
//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  
// Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  
//precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  


//function rfa($dp){

// automatsko ubravljanje "a" znakom:

$all_nev="/home/xps/VJT".$dp."aHRa.dat";
$allomanyr = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
//fclose($allomanyr); //rossz helyen!

if(fgets($allomanyr, 4) == 1) {
fclose($allomanyr);
$all_nev="/home/xps/VJT".$dp."aHR.dat";
$allomany = fopen($all_nev, "w") or die("  GREŠKA:  $all_nev fajl ne može se otvorit!");
$all_out="/home/xps/VJT".$dp."aHR.out";
$allomanyout = fopen($all_out, "r") or die("  GREŠKA:  $all_nev fajl ne može se otvorit!");
$allomanyt = fopen($all_nev."t", "w") or die("  GREŠKA:  $all_nev fajl ne može se upisat!");
//if($surf_water_depth[$stNo]>0.06999 && $air[$stNo]>4) { // namjesto +4C zraka biti ce +1C cesta
if($surf_water_depth[$stNo]>0.06999 && $surft[$stNo]>1) {
		$belevalo = "\x2"."20000000";
		fwrite($allomany, $belevalo);
//		break;
}
//elseif($surf_water_depth[$stNo]>-0.06999 && $air[$stNo]<4) {// namjesto +4C zraka biti ce +1C cesta
elseif($surf_water_depth[$stNo]>-0.06999 && $surft[$stNo]<1) {
		$belevalo = "\x2"."10000000";
		fwrite($allomany, $belevalo);
//		break;
}
else {
		$belevalo = "\x2"."00000000";
		fwrite($allomany, $belevalo);
//		break;
}
$belevalot = "\n".time();
//		fwrite($allomany, $belevalot);   // ovo blokira znak
		fwrite($allomanyt, $belevalot);   

fclose($allomany);
fclose($allomanyt);
$out="S: no controll";
$out=fgets($allomanyout, 33);
fclose($allomanyout);

$dpa=$dp.'a';
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//	id	stNo	automanual	instr	out	date	timestamp

$queryINS = "INSERT VJT SET  stNo='$dpa', automanual=1,  instr='$belevalo',  putout='$out', date=$belevalot ";
//$queryINS = "INSERT VJT SET  stNo='$dpa', automanual=1,  instr='$belevalo', date=$belevalot ";
//$queryINS = "INSERT VJT SET  stNo='$dpa', automanual=1,  instr='$belevalo' ";
$resINS = mysqli_query($sql_connect,$queryINS);
	mysqli_close ($sql_connect);
}

// automatsko ubravljanje "b" znakom:

$all_nev="/home/xps/VJT".$dp."bHRa.dat";
$allomanyr = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
//fclose($allomanyr);  //rossz helyen!

if(fgets($allomanyr, 4) == 1) {
fclose($allomanyr);
$all_nev="/home/xps/VJT".$dp."bHR.dat";
$allomany = fopen($all_nev, "w") or die("GREŠKA:  $all_nev fajl ne može se upisat!");
$all_out="/home/xps/VJT".$dp."bHR.out";
$allomanyout = fopen($all_out, "r") or die("  GREŠKA:  $all_nev fajl ne može se otvorit!");
$allomanyt = fopen($all_nev."t", "w") or die("GREŠKA:  $all_nev fajl ne može se upisat!");
//if($surf_water_depth[$stNo]>0.06999 && $air[$stNo]>4) {// namjesto +4C zraka biti ce +1C cesta
if($surf_water_depth[$stNo]>0.06999 && $surft[$stNo]>1) {
//		$belevalo = "\x2"."20000000"."\x2".$measure_time[$stNo];
		$belevalo = "\x2"."20000000";
		fwrite($allomany, $belevalo);
//		break;
}
//elseif($surf_water_depth[$stNo]>-0.06999 && $air[$stNo]<4) {// namjesto +4C zraka biti ce +1C cesta
elseif($surf_water_depth[$stNo]>-0.06999 && $surft[$stNo]<1) {
		$belevalo = "\x2"."10000000";
		fwrite($allomany, $belevalo);
//		break;
}
else {
		$belevalo = "\x2"."00000000";
		fwrite($allomany, $belevalo);
//		break;
}
$belevalot = "\n".time();
//		fwrite($allomany, $belevalot);      // ovo blokira znak
		fwrite($allomanyt, $belevalot);     

fclose($allomany);
fclose($allomanyt);
$out="S: no controll";
$out=fgets($allomanyout, 33);
fclose($allomanyout);

$dpb=$dp.'b';
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryINS = "INSERT VJT SET  stNo='$dpb', automanual=1,  instr='$belevalo',  putout='$out', date=$belevalot ";
//$queryINS = "INSERT VJT SET  stNo='$dpb', automanual=1,  instr='$belevalo', date=$belevalot ";
//$queryINS = "INSERT VJT SET  stNo='$dpb', automanual=1,  instr='$belevalo' ";
$resINS = mysqli_query($sql_connect,$queryINS);
	mysqli_close ($sql_connect);

}

//fclose($allomanyr);}

?>
