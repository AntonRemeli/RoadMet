
<?php   
//echo '<br> <b>'.'calibrate.php '.'</b>';
 error_reporting(0);

$MOD="calibrate.php";
include "LM.php";
include "log.php";
?>


<?php  


if (isset($_GET['calibrate']))
{
	$in_K1 = $_GET['in_K1'];
	$in_K2 = $_GET['in_K2'];	
	
	$in_Kw = $_GET['in_Kw'];	
	$in_Ki = $_GET['in_Ki'];	
	$in_Kl = $_GET['in_Kl'];	
	$in_Kat = $_GET['in_Kat'];	
	$in_Kst = $_GET['in_Kst'];	
	$in_Krh = $_GET['in_Krh'];

	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

	

//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
	$res = mysqli_query($sql_connect, "UPDATE stations SET xps_k1=$in_K1, xps_k2=$in_K2, xps_kw=$in_Kw, xps_ki=$in_Ki, xps_kl=$in_Kl, xps_kat=$in_Kat, xps_kst=$in_Kst, xps_krh=$in_Krh WHERE st_id=$dd");

	mysqli_close ($sql_connect);

	header("Location: $INDEX&cal=1#tocI");
//	header("Location: $INDEX&cal=#tocI");
}	

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//echo "VVVVVVVVVVVVVVVVVVVVVVVVVV..........";
//	include "sess.php";

	include "sel_st_data.php";


 mysqli_close ($sql_connect);

//$sess=$sess."&GSW=".$GSW;
	
?>
  <form name="calibration" method="get" action="calibrate.php<?php  print("$sess");?>#tocI">

      <td width="5%"><a title="sóérzékenység"><input name="in_K1" type="text" size="5" id="st_K1" value="<?php  echo $st_k1;?>"></a></td>
      <td width="5%" align="right">i:</td>
      <td width="5%"><a title="sókopás"><input name="in_Ki" type="text" size="5" id="st_Ki" value="<?php  echo $st_ki;?>"></a></td>
      <td width="5%" align="right">w:</td>
      <td width="5%"><a title="kapacitív vízérzékenység a vályuban"><input name="in_Kw" type="text" size="5" id="st_Kw" value="<?php  echo $st_kw;?>"></a></td>
      <td width="5%" align="right">2:</td>
      <td width="5%"><a title="felszíni vezetöképesség"><input name="in_K2" type="text" size="5" id="st_K2" value="<?php  echo $st_k2;?>"></a></td>
      <td width="5%" align="right">l:</td>
      <td width="5%"><a title="esöszorzó"><input name="in_Kl" type="text" size="5" id="st_Kl" value="<?php  echo $st_kl;?>"></a></td>
      <td width="5%" align="right">at:</td>
      <td width="5%"><a title="léghöm.korrekció"><input name="in_Kat" type="text" size="5" id="st_Kat" value="<?php  echo $st_kat;?>"></a></td>
      <td width="5%" align="right">st:</td>
      <td width="5%"><a title="úthöm.korrekció"><input name="in_Kst" type="text" size="5" id="st_Kst" value="<?php  echo $st_kst;?>"></a></td>
      <td width="5%" align="right">rh:</td>
      <td width="5%"><a title="légnedv.szorzó"><input name="in_Krh" type="text" size="5" id="st_Krh" value="<?php  echo $st_krh;?>"></a></td>

      <td width="11%"><a title="rekalibráció indítása"><input type="submit" name="Submit" value=" OK "></a><?php  echo " ".$GSW?></td>
     <td width="15%"><a title="kezdöidö"><input name="in_ido1" type="text" size="8"  value="<?php  echo '';?>"></a></td>

      <td width="8%"><a href="<?php  echo $INDEX;?>&cmd=55"><img src="../kepek/buttons/st_alarm.gif" width="30" height="30" border="0"></a></td>


<?php   include "FormInput.php";?>

  <input type="hidden" name="calibrate" value="1">

</form>
*