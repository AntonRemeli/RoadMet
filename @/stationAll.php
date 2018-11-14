<?php  

$MOD="stationAll.php";
include "LM.php";
include "log.php";



$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

include "userd.php";
mysqli_close ($sql_connect);

/*
//echo "L0 login: ".
	$login=$_GET['lgn'];
//echo " pass: ".
	$passw=$_GET['pwd'];

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  

$queryW = "SELECT * FROM users  where user='$login' ";

$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);
mysqli_close ($sql_connect);

$c=$rowW[c];
$cc=$rowW[cc];
 */

if($lgn!='Xps') {?>
 <table width="100%" border="1" cellspacing="1" cellpadding="2"  align="center" class="smallgreyBold">
<?php  }?>
<?php  if($strm=='root') {?>

<table><?php  }?><tr>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=0';?>">i:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=0';?>">h:</a></td>
      <!--td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=0';?>">sid:</a></td-->
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=1';?>">Sno:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=2';?>">Ort:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=3';?>">kmsz:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=18';?>">Lng:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=19';?>">Lat:</a></td>
      <td width="2%" align="right"><a title="klímaterület" href="<?php  echo $INDEX;?>&cmd=77&th=4';?>">KlimaZ:</a></td>
      <td width="2%" align="right"><a title="megyeszám" href="<?php  echo $INDEX;?>&cmd=77&th=5';?>">Msz:</a></td>
      <td width="2%" align="right"><a title="megye" href="<?php  echo $INDEX;?>&cmd=77&th=5';?>">Megye:</a></td>
      <td width="2%" align="right"><a title="ÜMszám" href="<?php  echo $INDEX;?>&cmd=77&th=6';?>">ÜMsz:</a></td>
      <td width="2%" align="right"><a title="Üzemmérnökség" href="<?php  echo $INDEX;?>&cmd=77&th=6';?>">ÜMség:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=7';?>">GSM:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=8';?>">GPRS:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=9';?>">BCU:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=10';?>">FBS:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=11';?>">HGT:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=12';?>">Rain:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=13';?>">SWtyp:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=14';?>">Tipus:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=15';?>">Megj:</a></td>
      <td width="2%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=16';?>">ToDo:</a></td>
      <td width="1%" align="right"><a href="<?php  echo $INDEX;?>&cmd=77&th=17';?>">Ráf:</a></td>
</tr>


<?php  
	$cmd = $_GET['cmd'];
	$th = $_GET['th'];
if (isset($_GET['station']))
{
	//echo "_GET['station']: ".$_GET['station'];
	$h = $_GET['h'];
	$sid = $_GET['sid'];
	$qqsid = $_GET['qqsid'];
	$st_id = $_GET['st_id'];
	$st_Ort = $_GET['st_Ort'];
	$StrNo = $_GET['StrNo'];
	$Lng = $_GET['Lng'];
	$Lat = $_GET['Lat'];
	$KlimaZ = $_GET['KlimaZ'];
	$cty = $_GET['cty'];
//	$county = $_GET['county'];
	$StrM = $_GET['StrM'];
	$GSMno = $_GET['GSMno'];
	$GPRSno = $_GET['GPRSno'];	
	$BCUno = $_GET['BCUno'];	
	$FBSno = $_GET['FBSno'];	
	$HGTno = $_GET['HGTno'];	
	$Raino = $_GET['Raino'];
	$SWno = $_GET['SWno'];
	$Typ = $_GET['Typ'];
	$megj = $_GET['megj'];
	$ToDo = $_GET['ToDo'];
	$st_txt = $_GET['st_txt'];
	

	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

	if($sid!=$qqsid) {
//		echo "aaaaaaaaaaaaaaaaa $sid bbb  $qqsid ";
		$querysid = "UPDATE stations SET   sid=$sid WHERE sid=$qqsid  "; 
		$resid = mysqli_query($sql_connect,$querysid);}

$queryrs = "UPDATE stations SET  st_id=$st_id, cty=$cty, h='$h', st_Ort='$st_Ort', StrNo='$StrNo', KlimaZ='$KlimaZ', Lng='$Lng', Lat='$Lat', StrM='$StrM', GSMno='$GSMno', GPRSno='$GPRSno', BCUno='$BCUno', FBSno='$FBSno', HGTno='$HGTno', Raino='$Raino', SWno='$SWno', Typ='$Typ', megj='$megj', ToDo='$ToDo', st_txt='$st_txt' WHERE sid='$sid'  ";


$resrs = mysqli_query($sql_connect,$queryrs);

	header("Location: admin_error_report.php");
	
	mysqli_close ($sql_connect);
 
} 



$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


switch($th)
	{
	case 0:       		$wi='h' ;  				break;
	case 1:       		$wi='st_id' ;  				break;
	case 2:       		$wi='st_Ort' ; 				break;
	case 3:       		$wi='StrNo' ;  				break;
	case 4:       		$wi='KlimaZ' ;  			break;
	case 5:       		$wi='cty' ;  				break;
	case 6:       		$wi='StrM' ;  				break;
	case 7:       		$wi='GSMno' ;  				break;
	case 8:       		$wi='GPRSno' ; 				break;
	case 9:       		$wi='BCUno' ;  				break;
	case 10:       		$wi='FBSno' ;  				break;
	case 11:       		$wi='HGTno' ;  				break;
	case 12:       		$wi='Raino' ;  				break;
	case 13:       		$wi='SWno' ;  				break;
	case 14:       		$wi='Typ' ;  				break;
	case 15:       		$wi='megj' ;  				break;
	case 16:       		$wi='ToDo' ;  				break;
	case 17:       		$wi='st_txt' ;  			break;
	case 18:       		$wi='Lng' ;  			break;
	case 19:       		$wi='Lat' ;  			break;
		
	}

//       		$queryst = "SELECT * FROM stations where cty>0 ORDER BY $wi ";
//  sid  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
      		$querysta = "SELECT * FROM stations where st_id>9025  && cty=$cty ORDER BY $wi, h, st_id ";
if($cty==0) $querysta = "SELECT * FROM stations  where h=='999' ORDER BY  st_id ";
if($cty==-2) $querysta = "SELECT * FROM stations  where h<'999' ORDER BY h ";
if($cty==-3) $querysta = "SELECT * FROM stations  ORDER BY  st_id ";
if($cty==21) $querysta = "SELECT * FROM stations  where (st_txt>100 && st_txt<1000) || (st_txt>-1000 && st_txt<-100) ORDER BY st_id ";
if($cty==25) $querysta = "SELECT * FROM stations  where st_txt>-100 && st_txt<0  ORDER BY st_id ";
if($cty==99) $querysta = "SELECT * FROM stations  where st_txt>-100 && st_txt<0 && cty>50 && cty<70  ORDER BY -st_txt ";
if($cty==50) $querysta = "SELECT * FROM stations  where cty>'50' ORDER BY st_id ";
//if($cty==50) $querysta = "SELECT * FROM stations  where st_id>'9500' ORDER BY st_id ";
//      		$querysta = "SELECT * FROM stations where st_id>9025 && h<'a' && cty=$cty ORDER BY $wi, h, st_id ";
//      		$querystd = "SELECT * FROM stations where cty>-1 && cty<33 ORDER BY $wi, h, st_id ";
//      		$querystd = "SELECT distinct st_id,  st_Ort,  StrNo,  Lat,  Latm,  ,  Altm,  KlimaZ,  StrM,  xps_k1,  xps_k2,  xps_kw,  xps_ki,  xps_kl,  xps_kat,  xps_kst,  xps_krh,  st_txt,  h,  Typ,  GSMno,  GPRSno, BCUno,  FBSno,  HGTno,  Raino,  megj FROM stations where cty>-1 && cty<22 ORDER BY $wi, h, st_id ";
	$querystd = "SELECT distinct st_id,  st_Ort,  StrNo,  Lng,  Lat,  Xeov,  Yeov,  KlimaZ,  StrM,  xps_k1,  xps_k2,  xps_kw,  xps_ki,  xps_kl,  xps_kat,  xps_kst,  xps_krh,  st_txt,  h,  Typ,  GSMno,  GPRSno, BCUno,  FBSno,  HGTno,  Raino, SWno,  megj, ToDo, st_txt FROM stations where cty>$c && cty<$cc ORDER BY $wi, h, st_id ";
if($cty==22)	$querystd = "SELECT distinct st_id,  st_Ort,  StrNo,  Lng,  Lat,  Xeov,  Yeov,  KlimaZ,  StrM,  xps_k1,  xps_k2,  xps_kw,  xps_ki,  xps_kl,  xps_kat,  xps_kst,  xps_krh,  st_txt,  h,  Typ,  GSMno,  GPRSno, BCUno,  FBSno,  HGTno, Raino, SWno,  megj, ToDo,  st_txt FROM stations where  where h<'a' ORDER BY h  ";

//		if($lgn!='Xps') $queryst=$querystd; //  2306 jav.
		if($lgn!='Xps') $queryst=$querysta; 
		else $queryst=$querysta;
$rest = mysqli_query($sql_connect,$queryst);


$loop=0;
while ($rows = mysqli_fetch_array($rest, MYSQLI_ASSOC))
{

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
	
$queryW = "SELECT * FROM users  where strm='$rows[StrM]' ";

$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);

// echo "qqqqqqqqq $loop ";
$qh=$rows[h];
$qsid=$rows[sid];
$qst_id=$rows[st_id];
$qst_Ort=$rows[st_Ort];
$qStrNo=$rows[StrNo];
$qLng=$rows[Lng];
$qLat=$rows[Lat];
$qKlimaZ=$rows[KlimaZ];
$qcty=$rows[cty];
$qcounty=$rowW[county];
$qStrM=$rows[StrM];
$qcDept=$rowW[cDept];
$qGSMno=$rows[GSMno];
$qGPRSno=$rows[GPRSno];
$qBCUno=$rows[BCUno];
$qFBSno=$rows[FBSno];
$qHGTno=$rows[HGTno];
$qRaino=$rows[Raino];
$qSWno=$rows[SWno];
$qTyp=$rows[Typ];
$qmegj=$rows[megj];
$qToDo=$rows[ToDo];
$qst_txt=$rows[st_txt];

?>

<tr>
<?php   if($strm=='root') {?>

<form name="stationice" method="get" action="<?php  echo $INDEX;?>&cmd=77&th=<?php  echo $th;?>#tocI">

<?php   include "FormInput.php";?>
 
  <input type="hidden" name="station" value="1">
  <input type="hidden" name="qqsid" value="<?php  echo $qsid;?>">
      <td width="64" height="20" align="left"><?php  echo $loop;?></td>
      <td width="2%"><input name="h" type="text" size="14" id="h" value="<?php  echo $qh;?>	"></td>
      <td width="2%"><input name="sid" type="text" size="2" id="sid" value="<?php  echo $qsid;?>"></td>
      <td width="2%"><input name="st_id" type="text" size="2" id="st_id" value="<?php  echo $qst_id;?>"></td>
      <td width="2%"><input name="st_Ort" type="text" size="14" id="st_Ort" value="<?php  echo $qst_Ort;?>"></td>
      <td width="2%"><input name="StrNo" type="text" size="11" id="StrNo" value="<?php  echo $qStrNo;?>"></td>
      <td width="2%"><input name="Lng" type="text" size="11" id="Lng" value="<?php  echo $qLng;?>"></td>
      <td width="2%"><input name="Lat" type="text" size="11" id="Lat" value="<?php  echo $qLat;?>"></td>
      <td width="2%"><a title="KlimaZ=<?php  echo $qKlimaZ;?>"><input name="KlimaZ" type="text" size="11" id="KlimaZ" value="<?php  echo $qKlimaZ;?>"></a></td>
      <td width="2%"><a title="aaaaa<?php  echo $qcounty;?>"><input name="cty" type="text" size="1" id="cty" value="<?php  echo $qcty;?>"></a></td>
      <td width="2%"><a title="<?php  echo $qcDept;?>"><input name="StrM" type="text" size="1" id="StrM" value="<?php  echo $qStrM;?>"></a></td>
      <td width="2%"><input name="GSMno" type="text" size="11" id="GSMno" value="<?php  echo $qGSMno;?>"></td>
      <td width="2%"><input name="GPRSno" type="text" size="15" id="GPRSno" value="<?php  echo $qGPRSno;?>"></td>
      <td width="2%"><input name="BCUno" type="text" size="19" id="BCUno" value="<?php  echo $qBCUno;?>"></td>
      <td width="2%"><input name="FBSno" type="text" size="12" id="FBSno" value="<?php  echo $qFBSno;?>"></td>
      <td width="2%"><input name="HGTno" type="text" size="12" id="HGTno" value="<?php  echo $qHGTno;?>"></td>
      <td width="2%"><input name="Raino" type="text" size="12" id="Raino" value="<?php  echo $qRaino;?>"></td>
      <td width="2%"><input name="SWno" type="text" size="12" id="SWno" value="<?php  echo $qSWno;?>"></td>
      <td width="2%"><input name="Typ" type="text" size="22" id="Typ" value="<?php  echo $qTyp;?>"></td>
      <td width="2%"><input name="megj" type="text" size="32" id="megj" value="<?php  echo $qmegj;?>"></td>
      <td width="2%"><input name="ToDo" type="text" size="32" id="ToDo" value="<?php  echo $qToDo;?>"></td>
      <td width="1%"><input name="st_txt" type="text" size="1" id="st_txt" value="<?php  echo $qst_txt;?>"></td>

      <td width="1%"><input type="submit" name="Submit" value=" RS<?php  echo $loop;?>"></td>

</form><?php  }?>

<?php  if($lgn!='Xps') {?>
	
      <td width="64" height="20" align="left"><?php  echo $loop;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qh;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qst_id;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qst_Ort;?>;</td>
      <td width="264" height="20" align="left"><?php  echo $qStrNo;?>;</td>
      <td width="264" height="20" align="left"><?php  echo $qLng;?>;</td>
      <td width="264" height="20" align="left"><?php  echo $qLat;?>;</td>
      <td width="264" height="20" align="left"><?php  echo $qKlimaZ;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qcty;?>;</td>
      <td width="164" height="20" align="left"><?php  echo $qcounty;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qStrM;?>;</td>
      <td width="164" height="20" align="left"><?php  echo $qcDept;?>;</td>
      <td width="164" height="20" align="left"><?php  echo $qGSMno;?>;</td>
      <td width="164" height="20" align="left"><?php  echo $qGPRSno;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qBCUno;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qFBSno;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qHGTno;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qRaino;?>;</td>
      <td width="64" height="20" align="left"><?php  echo $qSWno;?>;</td>
      <td width="264" height="20" align="left"><?php  echo $qTyp;?>;</td>
      <td width="364" height="20" align="left"><?php  echo $qmegj;?>;</td>
      <td width="364" height="20" align="left"><?php  echo $qToDo;?>;</td>
      <td width="364" height="20" align="left"><?php  echo $qst_txt;?>;</td>

<?php  }?>


</tr>

<?php  
$loop++;
}
 mysqli_close ($sql_connect);
?>
</table>
