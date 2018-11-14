

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Google Maps</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCddL1teplqjI2MWveHfp404xMMLokLh24" type="text/javascript"></script>
  </head>
  <body onunload="GUnload()">

   
 <big>  VKKI állomások térképe </big> <a href="Gmap5.php">Állomásnevek elrejtése</a> 
<a href="https://picasaweb.google.com/117622346755157324675/000VKKIProjekt?locked=true" target="_blank"><img src=Picasa.jpg  border=0  onmouseover="this.T_LEFT=true; return escape( &quot; <img src=https://lh6.googleusercontent.com/-mksKMcaN4og/T1SFH5Z3HNE/AAAAAAAAGcI/jaFVIQW-9A4/s144-c/000VKKI141Helyszin.jpg> &quot;  )" ></a>
<a href="Gmap4.php">Állomásnevek megjelenítése</a>

<?
$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);

//	$query = "SET CHARACTER SET latin2";
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	


//  	Helyszin	szbeton	kule_zsko	oszlop	mnap	datum	t1	A	B	t2	t3	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8 Betonoszlop  Betonzsak

//$querys = "SELECT * FROM VKKI where A<2 and A>0";
//$querys = "SELECT * FROM VKKI0 where No>-1 order by No asc ";
//$querys = "SELECT * FROM VKKI where No>0  ";
//$querys = "SELECT * FROM VKKI where A>7 and A<19 ";
//$querys = "SELECT * FROM VKKI20120421 ";
//$querys = "SELECT * FROM VKKI where Bejaras>6000 ";
$querys = "SELECT * FROM VKKI where Betonozas>'' and Betonozas<'3' ";
//$querys = "SELECT * FROM VKKI where Beuzemeles='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ";
//$querys = "SELECT * FROM VKKI where Betonozas='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ";
//$querys = "SELECT * FROM VKKI where Atadas='             ' ";
  $querys = "SELECT * FROM VKKI where Atadas='             ' ";

$reys = mysql_query($querys);
mysql_close ($sql_connect);

while($roys = mysql_fetch_array($reys, MYSQL_ASSOC))

{
$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

//  	Helyszin	szbeton	kule_zsko	oszlop	mnap	datum	t1	A	B	t2	t3	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8
/*
echo $uA="4".$roys['A'];echo "...";
echo $uB="4".$roys['B'];echo "...";
echo $No=$roys['No'];echo "...";
echo $HRSZ=$roys['HRSZ'];echo "...";
echo $Postaicim=$roys['Postaicim'];echo "...";
echo $Bos2=2*$roys['KeritesOldal'];echo "<br>";
echo $Bzs6=6*$roys['OTT_HGT_Talaj_Szel2'];echo "<br>";
echo $A6=7000+$roys['No'];echo "<br>";
echo $Bej=$roys['Bejaras'];echo "<br>";
*/
echo $No=$roys['No'];echo "...";echo $No=$roys['Betonozas'];echo "...";echo "<br>";

 $queryr = "UPDATE VKKI SET  Atadas='' WHERE No='$No' ";
// $queryr = "UPDATE VKKI SET  Bejaras='$Bej' WHERE No='$No' ";
// $queryr = "UPDATE VKKI SET  Betonozas='.     .', Beuzemeles='.     .', Atadas='.     .',  WHERE No='$No' ";
 // $queryr = "UPDATE VKKI SET  Bejaras='$uA', Betonozas='$uB', Beuzemeles='$uB', Atadas='$uB'  WHERE No='$No' ";
 // $queryr = "UPDATE VKKI SET  A='$A6'  WHERE No='$No' ";
//  $queryr = "UPDATE VKKI SET  HRSZ='$HRSZ', Postaicim='$Postaicim', L='$L'  WHERE No='$No' ";
//  $queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uAtad', HRSZ='$uHRSZ', Postaicim='$uPcim', L='$uL', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uAtad', HRSZ='$uHRSZ', Postaicim='$uPcim', L='$uL', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB' WHERE No='$No' ";
$resr = mysql_query($queryr);

//	header("Location: Gmap4.php");
	
	mysql_close ($sql_connect);
} 

?>
</table>
  </body>

</html>





