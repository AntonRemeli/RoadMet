Lat="<?echo $roys['Latitude'];?>";
Lng="<?echo $roys['Longitude'];?>";
No ="<?echo $roys['No'];?>";

Fej="<?echo $Fej;?>";
Lab="<?echo $Lab;?>";
<? $Beton=$roys['Betonozas'];?>
Lista="<?echo $roys['Helyszin'];?>";
//Hely="<?echo $roys['Helyszin'];?>";
Hely="<?echo $k.' '.$roys['Helyszin'];?>";
//Hely2="<?echo $k.'  '.$roys['Bejaras'].' '.$roys['Betonozas'].' '.$roys['Beuzemeles'].' '.$roys['Atadas'].' '.$roys['Helyszin'].' >>>>> '.$roys['L'];?>";
//Hely2="<?echo $k.'  '.$roys['Bejaras'].' '.$roys['Betonozas'].' '.$roys['Beuzemeles'].' '.$roys['Atadas'].' '.$roys['Helyszin'].' >>>>> '.$roys['L'];?>";
//Hely2="<?echo $k.'  '.$roys['Bejaras'].' '.$roys['Betonozas'].' '.$roys['Beuzemeles'].' '.$roys['Atadas'].' >>>>> '.$roys['L'].' <<"+
"<a href='.$roys[p1].' target=_blank> <img src=Picasa.jpg width=10 height=10 border=0  ></a>  <<  '.$roys['Helyszin'].' ---> '.$roys['c'];?>";

//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//  c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	
// N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta
//	Betonzsak	BetonzsakPaletta	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz


<? $ABC="C";
if($roys['OTT_HGT_Talaj_Szel2']=="1") $ABC="A";
if($roys['OTT_HGT_Talaj_Szel2']=="2") $ABC="B";
$K="0";
if($roys['KeritesOldal']>0) $K=1;
$Bejaras="2012.0".$roys['Bejaras'][0].".".$roys['Bejaras'][1]."".$roys['Bejaras'][2]." ".$roys['Bejaras'][4]."".$roys['Bejaras'][5]."h";
$Betonozas="2012.0".$roys['Betonozas'][0].".".$roys['Betonozas'][1]."".$roys['Betonozas'][2]." ".$roys['Betonozas'][4]."".$roys['Betonozas'][5]."h";
$Beuzemeles="2012.0".$roys['Beuzemeles'][0].".".$roys['Beuzemeles'][1]."".$roys['Beuzemeles'][2]." ".$roys['Beuzemeles'][4]."".$roys['Beuzemeles'][5]."h";
?>

Hely2="<?echo $roys['KOVIZIG'].' | '.$roys['No'].' '.$roys['Hszin'].' | '.$Bejaras.' | '.$Betonozas.' | '.$Beuzemeles.' | '.$ABC.' | '.$K.' | '.$roys['Almero'].' | '.$roys['c'].' | '.$roys['cBej'].' | '.$roys['cBet'].' | '.$roys['cBeu'].' | '.$roys['cBez'];?>";

<?if($act=="Gmap5bej.php"){?> Hely2="<?echo $k.'  '.$roys['Bejaras'].' >>>>> '.$roys['L'].' <<"+
"<a href='.$roys[p3].' target=_blank> <img src=Picasa.jpg width=10 height=10 border=0  ></a><< '.$roys['Helyszin'].' ---> '.$roys['c'];?>"
<?}?>
<?if($act=="Gmap5bet.php"){?> Hely2="<?echo $k.'  '.$roys['Betonozas'].' >>>>> '.$roys['L'].' <<<<  '.$roys['Helyszin'].' ---> '.$roys['c'];?>"
<?}?>
<?if($act=="Gmap5ark.php"){
$ha=$Beton[0];
$ho=$Beton[0];
$na=$Beton[1]*10+$Beton[2]-$ucBej;
$no=$Beton[1]*10+$Beton[2]-1;
if($na<1) {$na+=30; $ha-=1;}
if($no<1) {$no+=30; $ho-=1;}
if($na<10) {$na="0".$na;}
if($no<10) {$no="0".$no;}

?> Hely2="<?echo $roys['No']?> >> "+ 
//" <b><a title='EGYSZERŰSÍTETT MUNKASZERZŐDÉS' href='Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>' target='_blank' > EMSz </a></b> "+ 
// " 2012.0<?echo $Beton[0];?>.<?echo $Beton[1]*10+$Beton[2]+7;?> <?echo $roys['cBej'].' munkanap, TAJsz:  '.$roys['Taj'].', Asz: '.$roys['Asz'].' | '.$roys['GtorNeve'].' >> '.$roys['Tel'].' '.$roys['Hszin'];?> "
 "<? echo $roys['Hszin'];?> 2012.0<?echo $ha;?>.<?echo $na;?> <?echo $roys['cBej'].' munkanap,  '.$roys['GtorNeve'].' >> '.$roys['SzSz'];?> "
<?}?>
<?if($act=="Gmap5beu.php"){?> Hely2="<?echo $k.' >>  '.$roys['Beuzemeles'].'"+
" >>> '.$roys['Allsz'].'-'.$roys['Hszin'].' <<<  '.$roys['Tel'].'  "+
//" >>>> '.$roys['L'].' <<<<  '.$roys['Tel'].' <<<<  '.$roys['Helyszin'].' "+
" ---> '.$roys['cBeu'];?>"
<?}?>
<?if($act=="Gmap5bez.php"){?> Hely2="<?echo $k.'  '.$roys['Atadas'].' >>>>> '.$roys['L'].' <<<<  '.$roys['Helyszin'].' ---> '.$roys['c'].' ---> '.$roys['cBej'].' ---> '.$roys['cBet'].' ---> '.$roys['cBeu'].' ---> '.$roys['cBez'];?>"
<?}?>

<?if($act=="Gmap5csvX.php"){?> Hely2="<?echo $roys['No'].' ;  '.$roys['CEM'].' ;  '.$roys['Nev'].' ;  '.$roys['Allsz'].' ;  '.$roys['GtorNeve'].' ;  '.$roys['Tel'].';  '.$roys['Latitude'].';  '.$roys['Longitude'];?>"
<?}?>

<?if($act=="Gmap5csvY.php"){?> Hely2="<?echo $roys['KOVIZIG'].' ;  '.$roys['No'].' ;  '.$roys['CEM'].' ;  '.$roys['Nev'].' ;  '.$roys['Allsz'].' ;  '.$roys['GtorNeve'].' ;  '.$roys['Tel'].';  '.$roys['Latitude'].';  '.$roys['Longitude'].';  '.$roys['OTT_HGT_Talaj_Szel2'].';  '.$roys['Almero'].';  '.$roys['AntennaDb'].';  '.$roys['KeritesOldal'].';  '.$roys['Adsz'].';  '.$roys['SIM'].';  '.$roys['IMEI'].';  '.$roys['Pluvio'].';  '.$roys['HgClip'].';  '.$roys['Stemp'].';  '.$roys['Shum'].';  '.$roys['Bejaras'].';  '.$roys['Betonozas'].';  '.$roys['Beuzemeles'].';  '.$roys['Foldkabel'].';  '.$roys['c'];?>"
<?}?>

//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//  c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	
// N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta
//	Betonzsak	BetonzsakPaletta	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

<?if($act=="Gmap5csv.php"){?> Hely2="<?echo $roys['KOVIZIG'].' ;  '.$roys['No'].' ;  '.$roys['CEM'].' ;  '.$roys['Nev'].' ;  '.$roys['Allsz'].' ;  '.$roys['GtorNeve'].' ;  '.$roys['Tel'].';  '.$roys['cBej'].';  '.$roys['SzSz'].';  '.$roys['Latitude'].';  '.$roys['Longitude'].';  '.$roys['OTT_HGT_Talaj_Szel2'].';  '.$roys['Almero'].';  '.$roys['AntennaDb'].';  '.$roys['KeritesOldal'].';  '.$roys['Adsz'].';  '.$roys['SIM'].';  '.$roys['IMEI'].';  '.$roys['Pluvio'].';  '.$roys['HgClip'].';  '.$roys['Stemp'].';  '.$roys['Shum'].';  '.$roys['Bejaras'].';  '.$roys['Betonozas'].';  '.$roys['Beuzemeles'].';  '.$roys['Foldkabel'].';  '.$roys['c'];?>"
<?}?>

//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//  c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	
// N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta
//	Betonzsak	BetonzsakPaletta	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

Ozs4="<? if($roys['Ozsalu40Paletta']>'') echo $roys['Ozsalu40Paletta'].'R '.$roys['Ozsalu40es']; else echo $roys['Ozsalu40es'];?>";
Ozs3="<? if($roys['Ozsalu30Paletta']>'') echo $roys['Ozsalu30Paletta'].'R '.$roys['Ozsalu30as']; else echo $roys['Ozsalu30as'];?>";
Ozs2="<? if($roys['Ozsalu20Paletta']>'') echo $roys['Ozsalu20Paletta'].'R '.$roys['Ozsalu20as']; else echo $roys['Ozsalu20as'];?>";
Bzs="<? if($roys['BetonzsakPaletta']>'') echo $roys['BetonzsakPaletta'].'R '.$roys['Betonzsak']; else echo $roys['Betonzsak'];?>";

A="<? echo $roys['Allsz'];?>";
B="<? echo $roys['B'];?>";
//A_="<? if($roys['Allsz']>'') echo $roys['Allsz'].'/'; else echo $roys['Allsz'];?>";
//B_="<? if($roys['B']=='') echo '__'; else echo $roys['B'];?>";

      var point = new GLatLng(Lat,Lng);
 iconsm.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
var name = "<?echo $roys['Helyszin'];?>";
var InfoHTML = 'Helyszín: <b>'+Hely+'</b>'+
'<form name="input" action="<?echo $act;?>" method="get">'+
' Bejárás: &nbsp;&nbsp;&nbsp;&nbsp;<input name="Bej" type="text" size="4" id="Bej" value="<?echo $roys['Bejaras'];?>">'+ 
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beüzemelés: <input name="Beu" type="text" size="4" id="Beu" value="<?echo $roys['Beuzemeles'];?>">'+
'<br> Betonozás: <input name="Bet" type="text" size="4" id="Bet" value="<?echo $roys['Betonozas'];?>">'+ 
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Átadás: <input name="Bez" type="text" size="4" id="Bez" value="<?echo $roys['Atadas'];?>">'+
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Mehet" >'+
'<br>HRSZ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="HRSZ" type="text" size="33" id="HRSZ" value="<?echo $roys['HRSZ'];?>">'+
'<br>Postaicím:&nbsp;&nbsp;&nbsp; <input name="Pcim" type="text" size="33" id="Pcim" value="<?echo $roys['Postaicim'];?>">'+
'<br>Koordináta:&nbsp; <input name="Lat" type="text" size="11" id="Lat" value="<?echo $roys['Latitude'];?>">'+
'&nbsp;&nbsp;&nbsp;&nbsp;<input name="Lng" type="text" size="11" id="Lng" value="<?echo $roys['Longitude'];?>">'+
'<br>Megjegyzés: <input name="c" type="text" size="33" id="c" value="<?echo $roys['c'];?>">'+
'<br><a href=javascript:kozelebb();><?echo "Ráközelít"?></a>'+
'<input name="p1" type="hidden" size="2" id="p1" value="<?echo $roys['p1'];?>">'+
'<input name="p2" type="hidden" size="2" id="p2" value="<?echo $roys['p2'];?>">'+
'<input name="p3" type="hidden" size="2" id="p3" value="<?echo $roys['p3'];?>">'+
'<input name="p4" type="hidden" size="2" id="p4" value="<?echo $roys['p4'];?>">'+
'<input name="p5" type="hidden" size="2" id="p5" value="<?echo $roys['p5'];?>">'+
'<input name="p6" type="hidden" size="2" id="p6" value="<?echo $roys['p6'];?>">'+
'<input name="p7" type="hidden" size="2" id="p7" value="<?echo $roys['p7'];?>">'+
' <input type="hidden" name="Hely" value="<?echo $roys['Helyszin'];?>"> '+
' <input type="hidden" name="No" value="<?echo $roys['No'];?>"> '+
' <input type="hidden" name="A" value="<?echo $roys['Allsz'];?>"> '+
' <input type="hidden" name="B" value="<?echo $roys['B'];?>"> '+
' <input type="hidden" name="serv" value="1">'+
'<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=50 height=50 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>'+
'<a href=<?echo $roys[p2];?> target="_blank"> <img src="<?echo $roys['p2'];?>" width="50" height="50" border="0" ></a>'+
'<a href=<?echo $roys[p3];?> target="_blank"> <img src=Picasa.jpg width=50 height=50 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>'+
'<img src="<?echo $roys['p4'];?>" width="50" height="50" border="0">'+
'<img src="<?echo $roys['p5'];?>" width="50" height="50" border="0">'+
'<img src="<?echo $roys['p6'];?>" width="50" height="50" border="0">'+
'</form>';

//var Bejaras = 'Helyszín: <b>'+Hely+'</b>'

var Bejaras = 'Helyszín: '+
'<a href=<?echo $roys[p3];?> target="_blank"> <img src=Picasa.jpg width=15 height=15 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>'+
'<b>'+Hely+'</b><form name="input" action="<?echo $act;?>" method="get">'+
'Megjegyzés: <input type="text" size="33" name="c" value="<?echo $roys['c'];?>">'+
' <input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">'+
'<br>Hszin: <input type="hidden" size="11" name="Hszin" value="<?echo $roys['Hszin'];?>">'+
'GtorNeve: <input type="text" size="11" name="GtorNeve" value="<?echo $roys['GtorNeve'];?>">'+
' <input type="text" size="11" name="Lnev" value="<?echo $roys['Lnev'];?>">'+
'<br>Taj: <input type="text" size="11" name="Taj" value="<?echo $roys['Taj'];?>">'+
'Asz: <input type="text" size="11" name="Asz" value="<?echo $roys['Asz'];?>">'+
'CEM: <input type="text" size="1" name="CEM" value="<?echo $roys['CEM'];?>">'+
'<br>SzHely: <input type="text" size="11" name="SzHely" value="<?echo $roys['SzHely'];?>">'+
'SzDat: <input type="text" size="11" name="SzDat" value="<?echo $roys['SzDat'];?>">'+
'<br>An: <input type="text" size="11" name="An" value="<?echo $roys['An'];?>">'+
'LakC: <input type="text" size="11" name="LakC" value="<?echo $roys['LakC'];?>">'+
'<br>Tel: <input type="text" size="11" name="Tel" value="<?echo $roys['Tel'];?>">'+
'SzSz: <input type="text" size="11" name="SzSz" value="<?echo $roys['SzSz'];?>">'+
' <input type="hidden" name="servBejaras" value="1">'+
' <input type="hidden" name="No" value="<?echo $roys['No'];?>"> '+
'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Mehet" >'+
'<br><a href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > <big>EGYSZERŰSÍTETT MUNKASZERZŐDÉS</big></a> '+
'</form>';


//var Betonozas = 'aaaaaaaa  ';
var Betonozas = 'Helyszín: <b>'+Hely+'</b>'+
'<form name="input" action="<?echo $act;?>" method="get">'+
'<br>Oszlopzsalu40es: <input name="Ozs4" type="text" size="1" id="Ozs4" value="<?echo $roys['Ozsalu40es'];?>">'+
' <input name="Ozs4P" type="text" size="1" id="Ozs4P" value="<?echo $roys['Ozsalu40Paletta'];?>">'+
'&nbsp;Oszlopzsalu30as: <input name="Ozs3" type="text" size="1" id="Ozs3" value="<?echo $roys['Ozsalu30as'];?>">'+
' <input name="Ozs3P" type="text" size="1" id="Ozs3P" value="<?echo $roys['Ozsalu30Paletta'];?>"> Rak-'+
'<br>Oszlopzsalu20as: <input name="Ozs2" type="text" size="1" id="Ozs2" value="<?echo $roys['Ozsalu20as'];?>">'+
' <input name="Ozs2P" type="text" size="1" id="Ozs2P" value="<?echo $roys['Ozsalu20Paletta'];?>">'+
'&nbsp;Betonzsák25kg: &nbsp;&nbsp;<input name="Bzs" type="text" size="1" id="Bzs" value="<?echo $roys['Betonzsak'];?>">'+
' <input name="BzsP" type="text" size="1" id="BzsP" value="<?echo $roys['BetonzsakPaletta'];?>"> lap'+
'<br> Kapu két oszloppal:&nbsp;&nbsp;&nbsp; <input name="Kap" type="text" size="1" id="Kap" value="<?echo $K=$roys['Ozsalu30as']/2;?>"readonly>'+
'&nbsp;&nbsp;Kerítésoszlop:&nbsp;&nbsp;&nbsp;&nbsp; <input name="Ozs2" type="text" size="1" id="Ozs2" value="<?echo $roys['Ozsalu20as'];?>"readonly>'+
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Mehet" >'+
'<br>Megjegyzés: <input name="cBet" type="text" size="33" id="cBet" value="<?echo $roys['cBet'];?>">'+
' <input type="hidden" name="servBetonozas" value="1">'+
' <input type="hidden" name="No" value="<?echo $roys['No'];?>"> '+
'</form>';

var Arokasas = 'Helyszín: <b>'+Hely+'</b>'+
'<form name="input" action="<?echo $act;?>" method="get">'+
'Megjegyzés: <input type="text" size="15" name="c" value="<?echo $roys['c'];?>"> <input type="text" size="15" name="cBet" value="<?echo $roys['cBet'];?>">'+
' <input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">'+
'<br>Hszin: <input type="hidden" size="11" name="Hszin" value="<?echo $roys['Hszin'];?>">'+
'GtorNeve: <input type="text" size="11" name="GtorNeve" value="<?echo $roys['GtorNeve'];?>">'+
' <input type="text" size="11" name="Lnev" value="<?echo $roys['Lnev'];?>">'+
'<br>Taj: <input type="text" size="11" name="Taj" value="<?echo $roys['Taj'];?>">'+
'Asz: <input type="text" size="11" name="Asz" value="<?echo $roys['Asz'];?>">'+
'<br>SzHely: <input type="text" size="11" name="SzHely" value="<?echo $roys['SzHely'];?>">'+
'SzDat: <input type="text" size="11" name="SzDat" value="<?echo $roys['SzDat'];?>">'+
'<br>An: <input type="text" size="11" name="An" value="<?echo $roys['An'];?>">'+
'LakC: <input type="text" size="22" name="LakC" value="<?echo $roys['LakC'];?>">'+
'<br>Tel: <input type="text" size="11" name="Tel" value="<?echo $roys['Tel'];?>">'+
'SzSz: <input type="text" size="22" name="SzSz" value="<?echo $roys['SzSz'];?>">'+
' <input type="hidden" name="servAtadas" value="1">'+
' <input type="hidden" name="No" value="<?echo $roys['No'];?>"> '+
'<br><b><a href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > EGYSZERŰSÍTETT MUNKASZERZŐDÉS</a> '+
'</b>&nbsp;&nbsp;&nbsp;<input type="submit" value="Mehet" >'+
'</form>';


//var Beuzemeles = 'Beuzemeles  ';
var Beuzemeles = 'Helyszín: <b>'+Hely+'</b>'+
'<form name="input" action="<?echo $act;?>" method="get">'+
' Bejárás: &nbsp;&nbsp;&nbsp;&nbsp;<input name="Bej" type="text" size="4" id="Bej" value="<?echo $roys['Bejaras'];?>">'+ 
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beüzemelés: <input name="Beu" type="text" size="4" id="Beu" value="<?echo $roys['Beuzemeles'];?>">'+
'<br> Betonozás: <input name="Bet" type="text" size="4" id="Bet" value="<?echo $roys['Betonozas'];?>">'+ 
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Átadás: <input name="Bez" type="text" size="4" id="Bez" value="<?echo $roys['Atadas'];?>">'+
'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Mehet" >'+
'<br>Megjegyzés: <input type="text" size="15" name="c" value="<?echo $roys['c'];?>"> <input type="text" size="15" name="cBet" value="<?echo $roys['cBet'];?>">'+
'<br>Megjegyzés: <input name="cBeu" type="text" size="33" id="cBeu" value="<?echo $roys['cBeu'];?>">'+
' <input type="hidden" name="servBeuzemeles" value="1">'+
' <input type="hidden" name="No" value="<?echo $roys['No'];?>"> '+
'</form>';


//var Atadas = 'Atadas  ';
var Atadas = 'Helyszín: <b>'+Hely+'</b>'+
'<form name="input" action="<?echo $act;?>" method="get">'+
'Megjegyzés: <input type="text" size="15" name="c" value="<?echo $roys['c'];?>"> <input type="text" size="15" name="cBet" value="<?echo $roys['cBet'];?>">'+
' <input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">'+
'<br>Hszin: <input type="hidden" size="11" name="Hszin" value="<?echo $roys['Hszin'];?>">'+
'GtorNeve: <input type="text" size="11" name="GtorNeve" value="<?echo $roys['GtorNeve'];?>">'+
' <input type="text" size="11" name="Lnev" value="<?echo $roys['Lnev'];?>">'+
'<br>Taj: <input type="text" size="11" name="Taj" value="<?echo $roys['Taj'];?>">'+
'Asz: <input type="text" size="11" name="Asz" value="<?echo $roys['Asz'];?>">'+
'<br>SzHely: <input type="text" size="11" name="SzHely" value="<?echo $roys['SzHely'];?>">'+
'SzDat: <input type="text" size="11" name="SzDat" value="<?echo $roys['SzDat'];?>">'+
'<br>An: <input type="text" size="11" name="An" value="<?echo $roys['An'];?>">'+
'LakC: <input type="text" size="22" name="LakC" value="<?echo $roys['LakC'];?>">'+
'<br>Tel: <input type="text" size="11" name="Tel" value="<?echo $roys['Tel'];?>">'+
'SzSz: <input type="text" size="22" name="SzSz" value="<?echo $roys['SzSz'];?>">'+
' <input type="hidden" name="servAtadas" value="1">'+
' <input type="hidden" name="No" value="<?echo $roys['No'];?>"> '+
'<br><b><a href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > EGYSZERŰSÍTETT MUNKASZERZŐDÉS</a> '+
'</b>&nbsp;&nbsp;&nbsp;<input type="submit" value="Mehet" >'+
'</form>';


//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//  c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	
// N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta
//	Betonzsak	BetonzsakPaletta	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz


//var csv = 'csv  ';
var csv = ''+
'<a href=<?echo $roys[p2];?> target="_blank"> <img src="<?echo $roys['p2'];?>" width="50" height="50" border="0" ></a>'+
'<?echo $roys['No'];?>;<br>'+
'<?echo $roys['Nev'];?>;<br>'+
'<?echo $roys['Allsz'];?>;<br>'+
'<?echo $roys['GtorNeve'];?>;<br>'+
'<?echo $roys['Tel'];?>;<br>'+
'<?echo $roys['Latitude'];?>;<br>'+
'<?echo $roys['Longitude'];?>;<br>'+
'<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=50 height=50 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>'+
'<a href=<?echo $roys[p3];?> target="_blank"> <img src=Picasa.jpg width=50 height=50 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>'+
'';


<?if($roys['CEM']==1) {;?>      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";<?}?>
<?if($roys['CEM']==2) {;?>      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";<?}?>
<?if($roys['CEM']==3) {;?>      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_orange.png";<?}?>
<?if($roys['CEM']==4) {;?>      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_red.png";<?}?>
<?if($roys['CEM']==4 and $roys['Allsz']>0) {;?>      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_red.png";<?}?>
<?if($roys['Bejaras']<'1' and $roys['CEM']==1) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_green.png";<?}?>
<?if($roys['Bejaras']<'1' and $roys['CEM']==2) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_blue.png";<?}?>
<?if($roys['Bejaras']<'1' and $roys['CEM']==3) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_orange.png";<?}?>
<?if($roys['Bejaras']<'1' and $roys['CEM']>3) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_red.png";<?}?>


<?if($act=="Gmap5csv.php"){?>  
<?if( $roys['OTT_HGT_Talaj_Szel2']==1) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_green.png";<?}?>
<?if( $roys['OTT_HGT_Talaj_Szel2']==2) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_blue.png";<?}?>
<?if( $roys['OTT_HGT_Talaj_Szel2']==3) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_orange.png";<?}?>
<?if( $roys['OTT_HGT_Talaj_Szel2']>3) {;?>        iconbig.image = "http://www.mapbuilder.net/img/icons/marker_20_red.png";<?}?>



<?}?>


//     var markerL = createMarkerL(point,InfoHTML)
//      map.addOverlay(markerL);

//    var markerT = createTabbedMarker(point,[InfoHTML,"xxxx"],["<?echo $roys['No'];?>", "<?echo $roys['No'];?> masodik"])
//   var markerT = createTabbedMarker(point,[InfoHTML],[""])
<?if($act=="Gmap4.php"){?>     var markerT = createTabbedMarker(point,[InfoHTML,Bejaras,Betonozas,Beuzemeles,Atadas],["<?echo $roys['No'].'/'.$roys['Allsz'];?>", "Bejárás", "Betonozás", "Szerelés", "Átadás"]); map.addOverlay(markerT); <?}?>
<?if($act=="Gmap5bej.php"){?>    var markerT = createTabbedMarker(point,[Bejaras,InfoHTML],["Bejárás","<?echo $roys['No'].'/'.$roys['Allsz'];?>"]); map.addOverlay(markerT);<?}?>
<?if($act=="Gmap5bet.php"){?>    var markerT = createTabbedMarker(point,[Betonozas,InfoHTML],["Betonozás","<?echo $roys['No'].'/'.$roys['Allsz'];?>"]); map.addOverlay(markerT);<?}?>
<?if($act=="Gmap5ark.php"){?>    var markerT = createTabbedMarker(point,[Arokasas,InfoHTML],["Árokásás","<?echo $roys['No'].'/'.$roys['Allsz'];?>"]); map.addOverlay(markerT);<?}?>
<?if($act=="Gmap5beu.php"){?>    var markerT = createTabbedMarker(point,[Beuzemeles,InfoHTML],["Szerelés","<?echo $roys['No'].'/'.$roys['Allsz'];?>"]); map.addOverlay(markerT);<?}?>
<?if($act=="Gmap5bez.php"){?>    var markerT = createTabbedMarker(point,[Atadas,InfoHTML],["Átadás","<?echo $roys['No'].'/'.$roys['Allsz'];?>"]); map.addOverlay(markerT);<?}?>
<?if($act=="Gmap5csv.php"){?>    var markerT = createTabbedMarker(point,[csv],["CSVadatok","<?echo $roys['No'].'/'.$roys['Allsz'];?>"]); map.addOverlay(markerT);<?}?>



  var marker = createMarker(point,Hely2,InfoHTML,iconbig)
      map.addOverlay(marker);

  function kozelebb(){ map.zoomIn();map.zoomIn();map.zoomIn();}

   
<?//if($roys['Bejaras']<'6000);{?>
   // === Plot the Elabels ===
      var label = new ELabel(new GLatLng(Lat,Lng), box("#dd0000",Fej,Lab), null, new GSize(-40,33));
      map.addOverlay(label); 
<?//}?>


