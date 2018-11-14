
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>VKKI projekt</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCddL1teplqjI2MWveHfp404xMMLokLh24" type="text/javascript"></script>
  </head>
  <body>
<?
	$Bejar = $_GET['Bejar'];
	$Beton = $_GET['Beton'];
	$ucBej = $_GET['cBej'];
	$uHszin = $_GET['Hszin'];
	$uGtorNeve = $_GET['GtorNeve'];
	$uLnev = $_GET['Lnev'];
	$uTaj = $_GET['Taj'];
	$uAsz = $_GET['Asz'];
	$uSzHely = $_GET['SzHely'];
	$uSzDat = $_GET['SzDat'];
	$uAn = $_GET['An'];
	$uLakC = $_GET['LakC'];
	$uTel = $_GET['Tel'];
	$uSzSz = $_GET['SzSz'];
?>

<table width="600">

<tr align="left"><td width=70% >
<b>EurMet Tanácsadó és Szolgáltató Kft.</b>
<br>2040 Budaörs, Szépkilátó u. 6.
<br>
<br>Adószám: 13351674-2-13 
</td>
<td width=30% align="right" ><img src="../Pic/EurMet2g.png" width="100" height="65" border="0"></td></tr>
<br>
</table>
<table width="600">
<tr>
<td width=90% align="center"><br>
<br>
<b>EGYSZERŰSÍTETT MUNKASZERZŐDÉS <br><br>
<?echo $uHszin;?><br>
</b> 
</td>
</tr>
</table>

<table width="600">


<br>
<br>
<b>Munkavállaló adatai:</b> 
<br><br>
neve és utóneve:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?echo $_GET['GtorNeve'];?></b><br>
születési neve: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?echo $_GET['Lnev'];?><br>
TAJ-száma:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['Taj'];?><br>
adóazonosító jele:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['Asz'];?><br>
születési helye, ideje:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['SzHely'];?>, <?echo $_GET['SzDat'];?><br>
anyja születési neve: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['An'];?><br>
lakóhelye:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['LakC'];?><br>
telefon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['Tel'];?><br>
bankszámla:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $_GET['SzSz'];?><br>

<br><br>

<b>Alkalmi munka tárgya:</b>	20cm széles és 50cm mély árok ásása <b><?echo $uHszin;?></b> 
<br>meteorológioai kert áramellátásának kialakításához. Becsült munkanapok száma: <b><?echo $ucBej;?></b>,
<br> ami banki (v.postai) utalás útján kézbesítendő <?echo $ucBej;?>*7000 Ft munkabér a munkaviszony teljes idejére.
<br>A bejelentési kötelezettségnek az EurMet Kft. a munkaviszony megkezdése előtt fog eleget tenni,
<br>a 2010. évi LXXV. egyszerűsített foglalkoztatási törvény előírásai szerint, és a személyi jövedelemadó-
<br>és járulékfizetési kötelezettségeknek eleget téve a 7. § (2) bekezdésében meghatározott egyszerűsített
<br> foglalkoztatásra irányuló munkaviszony alapján a (2) bekezdésben meghatározott közterhet megfizeti.

<?
$ha=$Beton[0];
$ho=$Beton[0];
$na=$Beton[1]*10+$Beton[2]-$ucBej;
$no=$Beton[1]*10+$Beton[2]-1;
if($na<1) {$na+=30; $ha-=1;}
if($no<1) {$no+=30; $ho-=1;}
if($na<10) {$na="0".$na;}
if($no<10) {$no="0".$no;}


?>
<br>
<br>Munkaviszony kezdete:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2012.0<?echo $ha;?>.<?echo $na;?>
<br>Munkaviszony megszűnésének napja: &nbsp;&nbsp;&nbsp;2012.0<?echo $ho;?>.<?echo $no;?>


<br><br><br><br>
kelt: <?echo $uHszin;?>, 2012.0<?echo $Bejar[0];?>.<?echo $Bejar[1]."".$Bejar[2];?>

</table>

<table width="600" ><tr>
<td align="center"><br><br><br><br><br><br><br> munkavállaló</td>
<td align="center"><img src="../Pic/ARpecsOK4.jpg" width="200" height="130" border="0"><br>munkaadó</td>
</tr>


</table>


 </body>
