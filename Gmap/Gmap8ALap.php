
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>VKKI projekt</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCddL1teplqjI2MWveHfp404xMMLokLh24" type="text/javascript"></script>
  </head>
  <body>
<?
 $No=$_GET['No'];



	$uHszin = $_GET['Hszin'];

	$uAllsz = $_GET['Allsz'];
	$uAdsz = $_GET['Adsz'];
	$uSIM = $_GET['SIM'];
	$uIMEI = $_GET['IMEI'];
	$uPluvio = $_GET['Pluvio'];
	$uHgClip = $_GET['HgClip'];
	$uStemp = $_GET['Stemp'];
	$uShum = $_GET['Shum'];
	$uKOVIZIG = $_GET['KOVIZIG'];
	$uKeritesOldal = $_GET['KeritesOldal'];
	$uAlmero = $_GET['Almero'];

 $ABC="C";
if($_GET['OTT_HGT_Talaj_Szel2']=="1") $ABC="A";
if($_GET['OTT_HGT_Talaj_Szel2']=="2") $ABC="B";

?>

<table width="600">

<tr align="left"><td width=70% >
<b>ÁLLOMÁSADATLAP</b>
</td>
<td width=30% align="right" ><img src="../Pic/Combit.png" width="100" height="65" border="0"></td></tr>
<br>
</table>
<table width="600">
<tr>
<td width=90% align="center"><br>
<br>
<b>KEOP 2.2.2.-4 Hidrometeorológiai hálózat automatizálása <br><br>

</b> 
</td>
</tr>
</table>

<table width="600">



<br>
<br>
<b>1. Az állomás adatai:</b> 
<br><br>
1.1. Az állomás neve: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?echo $uHszin;?></b><br>
1.2. Az állomás azonosítója: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?echo $uAllsz;?><br>
1.3. VIZIG: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?echo $uKOVIZIG;?><br>

<br><br>

<b>2. Az állomás műszerezettsége:</b> 
<br><br>
Konfiguráció:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?echo $ABC;?></b><br><br>
Az állomás meteorológiai műszerei: <br><br>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Csapadékmérő<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?if($ABC>"A") echo "Léghőmérséklet és relatív páratartalom mérő";?><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?if($ABC>"B") echo "Talajhő és talajnedvességmérő";?><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?if($_GET['OTT_HGT_Talaj_Szel2']>"3") echo "Szélirány-és szélerősségmérő";?><br>

Az állomáson felszerelt eszközök felsorolása:<br>

</table>
<table  width="600" border=1>
<tr>
<td>Sorszám:</td>
<td>Megnevezés:</td>
<td>Telepítve:</td>
<td>Gyártási szám:</td>
</tr>

<tr>
<td>1</td>
<td>OTT Pluvio2 csapadékmérő</td>
<td>Igen</td>
<td><?echo $uPluvio;?></td>
</tr>



<tr>
<td>2</td>
<td>Rotronic HygroClip léghőmérséklet<br>és relatív páratartalom mérő</td>
<td> <?if($uHgClip=="-") echo "Nem"; if($uHgClip!="-") echo "Igen";?></td>
<td><?echo $uHgClip;?></td>
</tr>



<tr>
<td>3</td>
<td>ST talajhőfok érzékelő Tad8 illesztővel</td>
<td> <?if($$ABC!="C") echo "Nem"; if($$ABC=="C") echo "Igen";?></td>
<td><?echo $uStemp;?></td>
</tr>



<tr>
<td>4</td>
<td>Decagon EC-5 talajnedvesség érzékelő</td>
<td> <?if($$ABC!="C") echo "Nem"; if($$ABC=="C") echo "Igen";?></td>
<td><?echo $uShum;?></td>
</tr>



<tr>
<td>5</td>
<td>u-TEK DC02 adatgyűjtő</td>
<td> <?if($uAdsz=="-") echo "Nem"; if($uAdsz!="-") echo "Igen";?></td>
<td><?echo $uAdsz;?></td>
</tr>



<tr>
<td>6</td>
<td>SIERRA FASTRACK Xtend FXT0009 modem</td>
<td> <?if($uIMEI=="-") echo "Nem"; if($uIMEI!="-") echo "Igen";?></td>
<td><?echo $uIMEI;?></td>
</tr>



<tr>
<td>7</td>
<td>SIM-kártya</td>
<td> <?if($uSIM=="-") echo "Nem"; if($uSIM!="-") echo "Igen";?></td>
<td><?echo $uSIM;?></td>
</tr>

<?
if($uAlmero=="1") {;?>
<tr>
<td>8</td>
<td>EH1-f doboz (betáplálási hely mérővel)</td>
<td>Igen</td>
<td></td>
</tr>

<?}
if($uAlmero!="1") {;?>
<tr>
<td>8</td>
<td>EH1 doboz (betáplálási hely)</td>
<td>Igen</td>
<td></td>
</tr>
<?}?>

<tr>
<td>9</td>
<td>EH2 doboz (műszerkerti végpont)</td>
<td>Igen</td>
<td></td>
</tr>

<tr>
<td>10</td>
<td>Adatgyűjtő doboz</td>
<td>Igen</td>
<td></td>
</tr>

<tr>
<td>11</td>
<td>Meteorológiai oszlop</td>
<td>Igen</td>
<td></td>
</tr>


<tr>
<td>12</td>
<td>Keresztkar sugárzásvédő ernyővel</td>
<td> <?if($uHgClip=="-") echo "Nem"; if($uHgClip!="-") echo "Igen";?></td>
<td></td>
</tr>



<tr>
<td>13</td>
<td>Csapadékmérő tartó</td>
<td>Igen</td>
<td></td>
</tr>


<tr>
<td>14</td>
<td>Kerítés, kapuval</td>
<td> <?if($uKeritesOldal=="0") echo "Nem"; if($uKeritesOldal!="0") echo "Igen";?></td>
<td></td>
</tr>





</table>




 </body>
