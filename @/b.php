<?php  
 $dp=9538;
$stNo=9538;
if($stNo==$dp){ //rfa($dp);
//function rfa($dp){
echo $all_nev="/home/xps/VJT".$dp."aHRa.dat";
$allomanyr = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
//$allomanyr = fopen("VJT9513HR", "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");

//echo $all_nev="/home/xps/VJT".$dp."aHRa.dat";
//$allomanyr = fopen($all_nev, "r") or die("  GREŠKA:  $all_nev fajl ne može se otvorit!");
if(fgets($allomanyr, 4) == 1) {
echo $all_nev="/home/xps/VJT".$dp."aHR.dat";
$allomany = fopen($all_nev, "w") or die("  GREŠKA:  $all_nev fajl ne može se upisat!");
if($surf_water_depth[$stNo]>0.06999 && $surft[$stNo]>4) {
		$belevalo = "\x2"."21110000";
		fwrite($allomany, $belevalo);
		break;}
if($surf_water_depth[$stNo]>0.06999 && $surft[$stNo]<4) {
		$belevalo = "\x2"."11110000";
		fwrite($allomany, $belevalo);
		break;}
else {
		$belevalo = "\x2"."01110000";
		fwrite($allomany, $belevalo);
		break;}
fclose($allomany);
}
$all_nev="/home/xps/VJT".$dp."bHRa.dat";
$allomany = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
if(fgets($allomany, 4) == 1) {
$all_nev="/home/xps/VJT".$dp."bHR.dat";
$allomany = fopen($all_nev, "w") or die("GREŠKA:  $all_nev fajl ne može se upisat!");
if($surf_water_depth[$stNo]>0.06999 && $surft[$stNo]>4) {
		$belevalo = "\x2"."21110000";
		fwrite($allomany, $belevalo);
		break;}
if($surf_water_depth[$stNo]>0.06999 && $surft[$stNo]<4) {
		$belevalo = "\x2"."11110000";
		fwrite($allomany, $belevalo);
		break;}
else {
		$belevalo = "\x2"."01110000";
		fwrite($allomany, $belevalo);
		break;}
fclose($allomany);
}
}
//fclose($allomanyr);}

?>
