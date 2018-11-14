<?php  
/*
//echo "L0 login: ".
	$login=$_GET['lgn'];
//echo " pass: ".
	$passw=$_GET['pwd'];

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  

$queryW = "SELECT * FROM users  where user='$login' ";

$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);

$c=$rowW[c];
$cc=$rowW[cc];
$strm=$rowW[strm];
 */

include "userd.php";


//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

//$querys = "SELECT * FROM stations where st_id=$dd and cty>='$c' and cty<='$cc'";
//if($cty=='' or $lgn=='Xps' or $strm=='root') $querys = "SELECT * FROM stations where st_id=$dd  ";
$querys = "SELECT * FROM stations where st_id=$dd ";


$res = mysqli_query($sql_connect,$querys);

$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
$st_county_id=$rows[cty];
$st_county_name=$rows[county];
$st_typ=$rows[Typ];
$st_txt=$rows[st_txt];
$st_ort=$rows[st_Ort];
//$st_ort="AA";
$BCUno=$rows[BCUno];
$FBSno=$rows[FBSno];
$HGTno=$rows[HGTno];
$Raino=$rows[Raino];
//$st_id=$station;

$st_k1=$rows[xps_k1];
$st_k2=$rows[xps_k2];
$st_kw=$rows[xps_kw];
$st_ki=$rows[xps_ki];
$st_kl=$rows[xps_kl];

$st_kat=$rows[xps_kat];
$st_kst=$rows[xps_kst];
$st_krh=$rows[xps_krh];
/*
$rel_hum_prv = 0;
$air_temp_prv = 0;
$surf_temp_prv = 0;
$precip_imp_int_prv = 0;
$precip_imp_lng_prv = 0;

$rel_hum_amo = 0;
$air_temp_amo = 0;
$surf_temp_amo = 0;
$rel_hum_amo_spd = 0;
$air_temp_amo_spd = 0;
$surf_temp_amo_spd = 0;

  $surf_salt_pri0 =  0 ;
 */
//mysqli_close ($sql_connect);

?>
