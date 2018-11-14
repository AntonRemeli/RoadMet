

<?php  
//echo
	$dd = $_GET['dd'];
//echo
	$sid = $_GET['sid'];
//echo
	$cty = $_GET['cty'];
//echo
	$lgn = $_GET['lgn'];
	$cmd = $_GET['cmd'];
	$ido1 = $_GET['ido1'];
        $ido2 = $_GET['ido2'];

if (isset($_GET['station']))
{ 
	$h = $_GET['h'];
	$GSMno = $_GET['GSMno'];
	$GPRSno = $_GET['GPRSno'];	
	$BCUno = $_GET['BCUno'];	
	$FBSno = $_GET['FBSno'];	
	$HGTno = $_GET['HGTno'];	
	$Raino = $_GET['Raino'];
	$SWno = $_GET['SWno'];
	$st_txt = $_GET['st_txt'];
	$megj = $_GET['megj'];
	$ToDo = $_GET['ToDo'];
	

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	

	//$queryrs = "UPDATE station SET  h='$h',GSMno='$GSMno', GPRSno='$GPRSno', BCUno='$BCUno', FBSno='$FBSno', HGTno='$HGTno', Raino='$Raino' WHERE MSno=$MSno";
//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
	
//	$queryrs = "UPDATE stations SET  h='$h',GSMno='$GSMno', GPRSno='$GPRSno', BCUno='$BCUno', FBSno='$FBSno', HGTno='$HGTno', Raino='$Raino'  WHERE sid='$sid' && GSMno>'' && cty>$c && cty<$cc  ";
	
//	$queryrs = "UPDATE stations SET  h='$h',GSMno='$GSMno', GPRSno='$GPRSno', BCUno='$BCUno', FBSno='$FBSno', HGTno='$HGTno', Raino='$Raino', SWno='$SWno'  WHERE sid='$sid' ";
	$queryrs = "UPDATE stations SET GSMno='$GSMno' WHERE sid='$sid' ";

$queryrs = "UPDATE stations SET  h='$h', GPRSno='$GPRSno', BCUno='$BCUno', FBSno='$FBSno', HGTno='$HGTno', Raino='$Raino', SWno='$SWno'  WHERE st_id=$dd ";

	$resrs = mysqli_query($sql_connect,$queryrs);
	//cannot update all at once, so there is the appendix:
$resrt = mysqli_query($sql_connect,"UPDATE stations SET  st_txt='$st_txt' WHERE st_id=$dd");
$resrm = mysqli_query($sql_connect,"UPDATE stations SET   megj='$megj', ToDo='$ToDo' WHERE st_id=$dd");


//	header("Location: index.php?cmd=$cmd&dd=$dd&ido1=$ido1&ido2=$ido2#tocI");
//	header("Location: index.php?cmd=$cmd&dd=$stno&ido1=$ido1&ido2=$ido2");
	header("Location: $INDEX.'#tocI'");
	
	mysqli_close ($sql_connect);
 
} 




$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//echo "L0 login: ".
	$login=$_GET['lgn'];
//echo " pass: ".
	$passw=$_GET['pwd'];

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  

$queryW = "SELECT * FROM users  where user='$login' ";

$resW = mysqli_query($sql_connect,$queryW);
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);
mysqli_close ($sql_connect);

$c=$rowW[c];
$cc=$rowW[cc];
	mysqli_close ($sql_connect);
/* */
//2430: station.php -kihúzva user lekérdezése mert benne van userd.php-ban
//include "userd.php";

//echo 'zzzzzzzzzzzzzzzzzzzz'.$dd.'c '.$c.'cc '.$cc;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	

//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

//$queryst = "SELECT * FROM station where MSno=$MSno";
$queryst = "SELECT * FROM stations where st_id=$dd && GSMno>'' && cty>$c && cty<$cc ";
$rest = mysqli_query($sql_connect,$queryst);

if( mysqli_num_rows( $rest)>0) {

$loop=0;
while ($rows = mysqli_fetch_array($rest, MYSQLI_ASSOC))
{
		
$qh=$rows[h];
$qsid=$rows[sid];
$qdd=$rows[st_id];
$qGSMno=$rows[GSMno];
$qGPRSno=$rows[GPRSno];
$qBCUno=$rows[BCUno];
$qFBSno=$rows[FBSno];
$qHGTno=$rows[HGTno];
$qRaino=$rows[Raino];
$qSWno=$rows[SWno];//3005: SWno megjelenítése
$qst_txt=$rows[st_txt];
$qmegj=$rows[megj];
$ToDo=$rows[ToDo];//3003: ToDo megjelenítése

$loop++;
}
 mysqli_close ($sql_connect);
?>
<table>

<tr bgcolor="#FDF8BB">
  <form name="stationice" method="get" action="index.php?cmd=$cmd&dd=$dd&ido1=$ido1&ido2=$ido2#tocI" >

<?php   include "FormInput.php";?>
  <input type="hidden" name="sid" value="<?php  echo $qsid;?>">

      <td width="1%"><a title="állomáskód"><input name="h" type="text" size="1" id="h" value="<?php  echo $qh;?>"></a></td>
      <td width="1%"><a title="állomásszám"><input name="dd" type="text" size="1" id="dd" value="<?php  echo $qdd;?>"></a></td>
      <td width="2%"><a title="mobilszám"><input name="GSMno" type="text" size="8" id="GSMno" value="<?php  echo $qGSMno;?>"></a></td>
      <td width="2%"><a title="modemszám"><input name="GPRSno" type="text" size="9" id="GPRSno" value="<?php  echo $qGPRSno;?>"></a></td>
      <td width="2%"><a title="vezérlömodulszám"><input name="BCUno" type="text" size="8" id="BCUno" value="<?php  echo $qBCUno;?>"></a></td>
      <td width="2%"><a title="útszondaszám"><input name="FBSno" type="text" size="8" id="FBSno" value="<?php  echo $qFBSno;?>"></a></td>
      <td width="2%"><a title="pára-léghöm.szám"><input name="HGTno" type="text" size="8" id="HGTno" value="<?php  echo $qHGTno;?>"></a></td>
      <td width="2%"><a title="csapadékméröszám"><input name="Raino" type="text" size="8" id="Raino" value="<?php  echo $qRaino;?>"></a></td>
 <td width="2%"><a title="SWverzió"><input name="SWno" type="text" size="2" id="SWno" value="<?php  echo $qSWno;?>"></a></td>

      <td width="2%"><a title="állomásleírás"><input name="megj" type="text" size="<?php  if($ToDo=='') echo'44'; else echo '24';?>" id="megj" value="<?php  echo $qmegj;?>"></a></td>
      <td width="2%"><a title="tennivaló"><input name="ToDo" type="text" size="<?php  if($ToDo>'') echo'24'; else echo '1';?>" id="ToDo" value="<?php  echo $ToDo;//3003: ToDo megjelenítése ?>"></a></td>
      <td width="1%"><a title="költségszám"><input name="st_txt" type="text" size="1" id="st_txt" value="<?php  echo $qst_txt;?>"></a></td>
      <td width="1%"><a title="változtatások indítása"><input type="submit" name="Submit" value=" RS. "></a></td>

  <input type="hidden" name="station" value="1">


</form>


</tr>


</table>

<?php  }?>
