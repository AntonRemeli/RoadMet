
<?if (isset($_GET['serv'])) echo " Módosítva: ".$_GET['Hely']." ".$_GET['Lat']." ".$_GET['Lng'];



if (isset($_GET['serv']))
{
        $No=$_GET['No'];

	$uHely = $_GET['Hely'];

/*	$uA = $_GET['A'];
	$uB = $_GET['B'];
	$uBej = $_GET['Bej'];
	$uBet = $_GET['Bet'];
	$uBeu = $_GET['Beu'];
	$uAtad = $_GET['Atad'];

 if ($uA>0 and $uA!='__')  { $tA1 = date("Y.m.d H:i",(round((1333180800+$uA*86400-7200)/60)*60));
 			 $tA2 = date("Y.m.d H:i",(round((1333180800+$uA*86400+14*86400-7200)/60)*60));}

 if ($uB>0 and $uB!='__')  { $tB1 = date("Y.m.d H:i",(round((1333180800+$uB*86400-7200)/60)*60));
			$tB=0; if($uB<8) $tB=1;
   			 $tB2 = date("Y.m.d H:i",(round((1333180800+$uB*86400+10+7*86400+$tB*86400-7200)/60)*60));}
*/			

	$uHRSZ = $_GET['HRSZ'];
	$uPcim = $_GET['Pcim'];
	$uLat = $_GET['Lat'];
	$uLng = $_GET['Lng'];
	$uc = $_GET['c'];
	$ucBej = $_GET['cBej'];
	$ucBet = $_GET['cBet'];
	$ucBeu = $_GET['cBeu'];
	$ucBez = $_GET['cBez'];
	$up1 = $_GET['p1'];
	$up2 = $_GET['p2'];
	$up3 = $_GET['p3'];
	$up4 = $_GET['p4'];
	$up5 = $_GET['p5'];
	$up6 = $_GET['p6'];
	$up7 = $_GET['p7'];
	$up8 = $_GET['p8'];
	$up9 = $_GET['p9'];

	$uBej = $_GET['Bej'];
	$uBet = $_GET['Bet'];
	$uBeu = $_GET['Beu'];
	$uBez = $_GET['Bez'];


$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

// 	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta

  $queryr = "UPDATE VKKI SET c='$uc',  Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uBez', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng',  p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//  $queryr = "UPDATE VKKI SET c='$uc', cBej='$ucBej', cBet='$ucBet', cBeu='$ucBeu', cBez='$ucBez', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uBez', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng',  p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";

//  $queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$tA1', Betonozas='$tB1', Beuzemeles='$tB2', Atadas='$tA2', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9',  Ozsalu40es='$uOzs4' , Ozsalu40Paletta='$uOzs4P',  Ozsalu30as='$uOzs3' , Ozsalu30Paletta='$uOzs3P',  Ozsalu20as='$uOzs2' , Ozsalu20Paletta='$uOzs2P', Betonzsak='$uBzs', BetonzsakPaletta='$uBzsP'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uAtad', HRSZ='$uHRSZ', Postaicim='$uPcim', L='$uL', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB' WHERE No='$No' ";
$resr = mysql_query($queryr);

//	header("Location: Gmap4.php");
	
	mysql_close ($sql_connect);
} 


if (isset($_GET['serv7']))
{
        $No=$_GET['No'];

	$uHely = $_GET['Hely'];

//	$uA = $_GET['A'];
//	$uB = $_GET['B'];
			

	$uHRSZ = $_GET['HRSZ'];
	$uPcim = $_GET['Pcim'];
	$uLat = $_GET['Lat'];
	$uLng = $_GET['Lng'];
	$uc = $_GET['c'];
	$ucBej = $_GET['cBej'];
	$ucBet = $_GET['cBet'];
	$ucBeu = $_GET['cBeu'];
	$ucBez = $_GET['cBez'];
	$up1 = $_GET['p1'];
	$up2 = $_GET['p2'];
	$up3 = $_GET['p3'];
	$up4 = $_GET['p4'];
	$up5 = $_GET['p5'];
	$up6 = $_GET['p6'];
	$up7 = $_GET['p7'];
	$up8 = $_GET['p8'];
	$up9 = $_GET['p9'];

	$uBej = $_GET['Bej'];
	$uBet = $_GET['Bet'];
	$uBeu = $_GET['Beu'];
	$uBez = $_GET['Bez'];


$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

// 	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta

  $queryr = "UPDATE VKKI SET c='$uc',  cBej='$ucBej', cBet='$ucBet', cBeu='$ucBeu', cBez='$ucBez',  Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uBez', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng',  p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//  $queryr = "UPDATE VKKI SET c='$uc', cBej='$ucBej', cBet='$ucBet', cBeu='$ucBeu', cBez='$ucBez', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uBez', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng',  p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";

//  $queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$tA1', Betonozas='$tB1', Beuzemeles='$tB2', Atadas='$tA2', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9',  Ozsalu40es='$uOzs4' , Ozsalu40Paletta='$uOzs4P',  Ozsalu30as='$uOzs3' , Ozsalu30Paletta='$uOzs3P',  Ozsalu20as='$uOzs2' , Ozsalu20Paletta='$uOzs2P', Betonzsak='$uBzs', BetonzsakPaletta='$uBzsP'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uAtad', HRSZ='$uHRSZ', Postaicim='$uPcim', L='$uL', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB' WHERE No='$No' ";
$resr = mysql_query($queryr);

//	header("Location: Gmap4.php");
	
	mysql_close ($sql_connect);
} 


if (isset($_GET['servBejaras']))
{
        $No=$_GET['No'];

	$uc = $_GET['c'];
	$ucBej = $_GET['cBej'];
	$uHszin = $_GET['Hszin'];
	$uGtorNeve = $_GET['GtorNeve'];
	$uLnev = $_GET['Lnev'];
	$uTaj = $_GET['Taj'];
	$uAsz = $_GET['Asz'];
	$uCEM = $_GET['CEM'];
	$uSzHely = $_GET['SzHely'];
	$uSzDat = $_GET['SzDat'];
	$uAn = $_GET['An'];
	$uLakC = $_GET['LakC'];
	$uTel = $_GET['Tel'];
	$uSzSz = $_GET['SzSz'];

$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

//	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	cBej	cBet	cBeu	cAtad	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

  $queryr = "UPDATE VKKI SET   c='$uc',cBej='$ucBej', Hszin='$uHszin',	GtorNeve='$uGtorNeve',	Lnev='$uLnev',	Taj='$uTaj',	Asz='$uAsz',	CEM='$uCEM',	SzHely='$uSzHely',	SzDat='$uSzDat',	An='$uAn',	LakC='$uLakC',	Tel='$uTel',	SzSz='$uSzSz'  WHERE No='$No' ";

$resr = mysql_query($queryr);

	mysql_close ($sql_connect);
} 



if (isset($_GET['servBetonozas']))
{
        $No=$_GET['No'];
	$uOzs4 = $_GET['Ozs4'];
	$uOzs4P = $_GET['Ozs4P'];
	$uOzs3 = $_GET['Ozs3'];
	$uOzs3P = $_GET['Ozs3P'];
	$uOzs2 = $_GET['Ozs2'];
	$uOzs2P = $_GET['Ozs2P'];
	$uBzs = $_GET['Bzs'];
	$uBzsP = $_GET['BzsP'];

	$ucBet = $_GET['cBet'];

$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

// 	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta

  $queryr = "UPDATE VKKI SET   cBet='$ucBet',  Ozsalu40es='$uOzs4' , Ozsalu40Paletta='$uOzs4P',  Ozsalu30as='$uOzs3' , Ozsalu30Paletta='$uOzs3P',  Ozsalu20as='$uOzs2' , Ozsalu20Paletta='$uOzs2P', Betonzsak='$uBzs', BetonzsakPaletta='$uBzsP'  WHERE No='$No' ";

$resr = mysql_query($queryr);

	mysql_close ($sql_connect);
} 


if (isset($_GET['servBeuzemeles']))
{
        $No=$_GET['No'];

	$uc = $_GET['c'];
	$ucBet = $_GET['cBet'];
	$ucBeu = $_GET['cBeu'];
	$uBej = $_GET['Bej'];
	$uBet = $_GET['Bet'];
	$uBeu = $_GET['Beu'];
	$uBez = $_GET['Bez'];


$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

// 	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta

  $queryr = "UPDATE VKKI SET   Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uBez', c='$uc', cBet='$ucBet', cBeu='$ucBeu'  WHERE No='$No' ";

$resr = mysql_query($queryr);

	mysql_close ($sql_connect);
} 


if (isset($_GET['servAtadas']))
{
        $No=$_GET['No'];

	$uc = $_GET['c'];
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

$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

//	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	cBej	cBet	cBeu	cAtad	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

  $queryr = "UPDATE VKKI SET   cBej='$ucBej', Hszin='$uHszin',	GtorNeve='$uGtorNeve',	Lnev='$uLnev',	Taj='$uTaj',	Asz='$uAsz',	SzHely='$uSzHely',	SzDat='$uSzDat',	An='$uAn',	LakC='$uLakC',	Tel='$uTel',	SzSz='$uSzSz'  WHERE No='$No' ";

$resr = mysql_query($queryr);

	mysql_close ($sql_connect);
} 


if (isset($_GET['servSz']))
{
        $No=$_GET['No'];

	$uHely = $_GET['Hely'];


	$uHRSZ = $_GET['HRSZ'];
	$uPcim = $_GET['Pcim'];
	$uLat = $_GET['Lat'];
	$uLng = $_GET['Lng'];
	$uc = $_GET['c'];
	$ucBej = $_GET['cBej'];
	$ucBet = $_GET['cBet'];
	$ucBeu = $_GET['cBeu'];
	$ucBez = $_GET['cBez'];

	$uBej = $_GET['Bej'];
	$uBet = $_GET['Bet'];
	$uBeu = $_GET['Beu'];
	$uBez = $_GET['Bez'];

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


$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

// 		Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	cBej	cBet	cBeu	cBez	Latitude	Longitude	
//     t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	
//    Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	
//    Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

  $queryr = "UPDATE VKKI SET c='$uc', cBej='$ucBej', cBet='$ucBet', cBeu='$ucBeu', cBez='$ucBez', 
Hszin='$uHszin',	GtorNeve='$uGtorNeve',	Lnev='$uLnev',	Taj='$uTaj',	Asz='$uAsz',	SzHely='$uSzHely',	SzDat='$uSzDat',	An='$uAn',	LakC='$uLakC',	Tel='$uTel',	SzSz='$uSzSz' 
  WHERE No='$No' ";

//  $queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$tA1', Betonozas='$tB1', Beuzemeles='$tB2', Atadas='$tA2', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9',  Ozsalu40es='$uOzs4' , Ozsalu40Paletta='$uOzs4P',  Ozsalu30as='$uOzs3' , Ozsalu30Paletta='$uOzs3P',  Ozsalu20as='$uOzs2' , Ozsalu20Paletta='$uOzs2P', Betonzsak='$uBzs', BetonzsakPaletta='$uBzsP'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uAtad', HRSZ='$uHRSZ', Postaicim='$uPcim', L='$uL', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB' WHERE No='$No' ";
$resr = mysql_query($queryr);

//	header("Location: Gmap4.php");
	
	mysql_close ($sql_connect);
} 


if (isset($_GET['serv6AL']))
{
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


$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	

//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//	c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	
//	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	
//	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	
//	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

  $queryr = "UPDATE VKKI SET Hszin='$uHszin',	Allsz='$uAllsz',	Adsz='$uAdsz',	SIM='$uSIM',	IMEI='$uIMEI',	Pluvio='$uPluvio',	HgClip='$uHgClip',	Stemp='$uStemp',	Shum='$uShum'
  WHERE No='$No' ";

//  $queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$tA1', Betonozas='$tB1', Beuzemeles='$tB2', Atadas='$tA2', HRSZ='$uHRSZ', Postaicim='$uPcim', Latitude='$uLat', Longitude='$uLng', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9',  Ozsalu40es='$uOzs4' , Ozsalu40Paletta='$uOzs4P',  Ozsalu30as='$uOzs3' , Ozsalu30Paletta='$uOzs3P',  Ozsalu20as='$uOzs2' , Ozsalu20Paletta='$uOzs2P', Betonzsak='$uBzs', BetonzsakPaletta='$uBzsP'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB', Bejaras='$uBej', Betonozas='$uBet', Beuzemeles='$uBeu', Atadas='$uAtad', HRSZ='$uHRSZ', Postaicim='$uPcim', L='$uL', c='$uc', p1='$up1', p2='$up2', p3='$up3', p4='$up4', p5='$up5', p6='$up6', p7='$up7', p8='$up8', p9='$up9'  WHERE No='$No' ";
//$queryr = "UPDATE VKKI SET A='$uA', B='$uB' WHERE No='$No' ";
$resr = mysql_query($queryr);

//	header("Location: Gmap4.php");
	
	mysql_close ($sql_connect);
} 


?>
