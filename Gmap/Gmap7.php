
<? include("GmapStart.php"); 
$act="Gmap4.php"; 
if (isset($_GET['act'])) $act = $_GET['act'];

$b7="<big>";
$c7="</big>";
 include("GmapHead.php"); 
 ?>

<? include("GmapUpd.php"); ?>

<table>
    <div id="map" style="width: 1100px; height: 00px"></div>
 
 
<script language="JavaScript" type="text/javascript" src="wz_tooltip.js"></script>



<? $C1=-1; $C2=9; 	 include("GmapBox.php"); 

//	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	
//     Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz
?>

<? while($roys = mysql_fetch_array($reys, MYSQL_ASSOC)) { ?>

<tr>
<td>
<form name="input2" action="Gmap7.php?act=<?echo $act;?>" method="get"> 

<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>
<input name="A" type="hidden" size="3" id="A" value="<?echo $roys['A'];?>"readonly>
<input name="B" type="hidden" size="3" id="B" value="<?echo $roys['B'];?>">
<input name="act" type="hidden" size="3" id="act" value="<?echo $act;?>">

<input name="Bej" type="text" size="4" id="Bej" value="<?echo $roys['Bejaras'];?>">
<input name="Bet" type="text" size="4" id="Bet" value="<?echo $roys['Betonozas'];?>">
<input name="Beu" type="text" size="4" id="Beu" value="<?echo $roys['Beuzemeles'];?>">
<input name="Bez" type="text" size="4" id="Bez" value="<?echo $roys['Atadas'];?>">

<input name="p1" type="text" size="2" id="p1" value="<?echo $roys['p1'];?>">
<input name="p2" type="text" size="2" id="p2" value="<?echo $roys['p2'];?>">
<input name="p3" type="text" size="2" id="p3" value="<?echo $roys['p3'];?>">
<input name="p4" type="text" size="2" id="p4" value="<?echo $roys['p4'];?>">
<input name="p5" type="text" size="2" id="p5" value="<?echo $roys['p5'];?>">
<input name="p6" type="text" size="2" id="p6" value="<?echo $roys['p6'];?>">
<input name="p7" type="hidden" size="2" id="p7" value="<?echo $roys['p7'];?>">
<input type="hidden" name="No" value="<?echo $roys['No'];?>">
<input type="hidden" name="L" value="<?echo $roys['L'];?>">

<input type="hidden" name="HRSZ" value="<?echo $roys['HRSZ'];?>">
<input type="hidden" name="Pcim" value="<?echo $roys['Postaicim'];?>">
<input type="hidden" name="serv7" value="1">
<input type="submit" value="Mehet" >

<input type="text" name="c" value="<?echo $roys['c'];?>">
<input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">
<input type="text" size="12" name="cBet" value="<?echo $roys['cBet'];?>">
<input type="text" size="12" name="cBeu" value="<?echo $roys['cBeu'];?>">
<input type="text" size="12" name="cBez" value="<?echo $roys['cBez'];?>">


<input name="Lat" type="text" size="6" id="Lat" value="<?echo $roys['Latitude'];?>"> 
<input name="Lng" type="text" size="6" id="Lng" value="<?echo $roys['Longitude'];?>"> 

<?echo $roys['Helyszin'];?>
</form></td></tr>
     <?
}
?> 


<? while($roys = mysql_fetch_array($reys2, MYSQL_ASSOC)) { ?>

<tr>
<td>
<form name="input2" action="Gmap7.php?act=<?echo $act;?>" method="get"> 
<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>

<input name="A" type="hidden" size="3" id="A" value="<?echo $roys['A'];?>"readonly>
<input name="B" type="hidden" size="3" id="B" value="<?echo $roys['B'];?>">
<input name="act" type="hidden" size="3" id="act" value="<?echo $act;?>">

<input name="Bej" type="text" size="4" id="Bej" value="<?echo $roys['Bejaras'];?>">
<input name="Bet" type="text" size="4" id="Bet" value="<?echo $roys['Betonozas'];?>">
<input name="Beu" type="text" size="4" id="Beu" value="<?echo $roys['Beuzemeles'];?>">
<input name="Bez" type="text" size="4" id="Bez" value="<?echo $roys['Atadas'];?>">

<input name="p1" type="text" size="2" id="p1" value="<?echo $roys['p1'];?>">
<input name="p2" type="text" size="2" id="p2" value="<?echo $roys['p2'];?>">
<input name="p3" type="text" size="2" id="p3" value="<?echo $roys['p3'];?>">
<input name="p4" type="hidden" size="2" id="p4" value="<?echo $roys['p4'];?>">
<input name="p5" type="hidden" size="2" id="p5" value="<?echo $roys['p5'];?>">
<input name="p6" type="hidden" size="2" id="p6" value="<?echo $roys['p6'];?>">
<input name="p7" type="hidden" size="2" id="p7" value="<?echo $roys['p7'];?>">
<input type="hidden" name="No" value="<?echo $roys['No'];?>">
<input type="hidden" name="L" value="<?echo $roys['L'];?>">

<input type="hidden" name="HRSZ" value="<?echo $roys['HRSZ'];?>">
<input type="hidden" name="Pcim" value="<?echo $roys['Postaicim'];?>">
<input type="hidden" name="serv7" value="1">
<input type="submit" value="Mehet" >

<input type="text" name="c" value="<?echo $roys['c'];?>">
<input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">
<input type="text" size="12" name="cBet" value="<?echo $roys['cBet'];?>">
<input type="text" size="12" name="cBeu" value="<?echo $roys['cBeu'];?>">
<input type="text" size="12" name="cBez" value="<?echo $roys['cBez'];?>">

<input name="Lat" type="text" size="6" id="Lat" value="<?echo $roys['Latitude'];?>"> 
<input name="Lng" type="text" size="6" id="Lng" value="<?echo $roys['Longitude'];?>"> 

<?echo $roys['Helyszin'];?>
</form>


</td></tr>
     <?
}
?> 
</table>
  </body>

</html>





