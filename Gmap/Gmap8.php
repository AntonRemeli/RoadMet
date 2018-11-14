
<? include("GmapStart.php"); 
$act="Gmap4.php"; 
if (isset($_GET['act'])) $act = $_GET['act'];

$b8="<big>";
$c8="</big>";
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
<form name="input2" action="Gmap8.php?act=<?echo $act;?>" method="get"> 

<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>
<input name="A" type="hidden" size="3" id="A" value="<?echo $roys['A'];?>"readonly>
<input name="B" type="hidden" size="3" id="B" value="<?echo $roys['B'];?>">
<input name="act" type="hidden" size="3" id="act" value="<?echo $act;?>">
<small>
<input type="text" size="8" name="Hszin" value="<?echo $roys['Hszin'];?>">
<input type="text" size="5" name="c" value="<?echo $roys['c'];?>"> <input type="text" size="5" name="cBet" value="<?echo $roys['cBet'];?>">
<input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">

<input type="text" size="8" name="GtorNeve" value="<?echo $roys['GtorNeve'];?>">
<input type="text" size="5" name="Lnev" value="<?echo $roys['Lnev'];?>">
<input type="text" size="8" name="Taj" value="<?echo $roys['Taj'];?>">
<input type="text" size="8" name="Asz" value="<?echo $roys['Asz'];?>">
<input type="text" size="8" name="SzHely" value="<?echo $roys['SzHely'];?>">
<input type="text" size="5" name="SzDat" value="<?echo $roys['SzDat'];?>">
<input type="text" size="5" name="An" value="<?echo $roys['An'];?>">
<input type="text" size="22" name="LakC" value="<?echo $roys['LakC'];?>">
<input type="text" size="11" name="Tel" value="<?echo $roys['Tel'];?>">
<input type="text" size="22" name="SzSz" value="<?echo $roys['SzSz'];?>">

<input type="hidden" name="No" value="<?echo $roys['No'];?>">
<input type="hidden" name="L" value="<?echo $roys['L'];?>">

<input type="hidden" name="HRSZ" value="<?echo $roys['HRSZ'];?>">
<input type="hidden" name="Pcim" value="<?echo $roys['Postaicim'];?>">
<input type="hidden" name="servSz" value="1">
<input type="submit" value="Ment" >

<b><a title="EGYSZERŰSÍTETT MUNKASZERZŐDÉS" href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > EMSz </a></b>


<?echo $roys['Latitude'];?>,<?echo $roys['Longitude'];?>
</small>
12.0<?echo $roys['Betonozas'][0];?>.<?echo $roys['Betonozas'][1]*10+$roys['Betonozas'][2]+7;?> <?echo $roys['Helyszin'];?>
</form></td></tr>
     <?
}
?> 

<? while($roys = mysql_fetch_array($reys2, MYSQL_ASSOC)) { ?>

<tr>
<td>
<form name="input2" action="Gmap8.php?act=<?echo $act;?>" method="get"> 

<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>
<input name="A" type="hidden" size="3" id="A" value="<?echo $roys['A'];?>"readonly>
<input name="B" type="hidden" size="3" id="B" value="<?echo $roys['B'];?>">
<input name="act" type="hidden" size="3" id="act" value="<?echo $act;?>">
<small>
<input type="text" size="8" name="Hszin" value="<?echo $roys['Hszin'];?>">
<input type="text" size="5" name="c" value="<?echo $roys['c'];?>"> <input type="text" size="5" name="cBet" value="<?echo $roys['cBet'];?>">
<input type="text" size="1" name="cBej" value="<?echo $roys['cBej'];?>">

<input type="text" size="8" name="GtorNeve" value="<?echo $roys['GtorNeve'];?>">
<input type="text" size="5" name="Lnev" value="<?echo $roys['Lnev'];?>">
<input type="text" size="8" name="Taj" value="<?echo $roys['Taj'];?>">
<input type="text" size="8" name="Asz" value="<?echo $roys['Asz'];?>">
<input type="text" size="8" name="SzHely" value="<?echo $roys['SzHely'];?>">
<input type="text" size="5" name="SzDat" value="<?echo $roys['SzDat'];?>">
<input type="text" size="5" name="An" value="<?echo $roys['An'];?>">
<input type="text" size="22" name="LakC" value="<?echo $roys['LakC'];?>">
<input type="text" size="11" name="Tel" value="<?echo $roys['Tel'];?>">
<input type="text" size="22" name="SzSz" value="<?echo $roys['SzSz'];?>">

<input type="hidden" name="No" value="<?echo $roys['No'];?>">
<input type="hidden" name="L" value="<?echo $roys['L'];?>">

<input type="hidden" name="HRSZ" value="<?echo $roys['HRSZ'];?>">
<input type="hidden" name="Pcim" value="<?echo $roys['Postaicim'];?>">
<input type="hidden" name="servSz" value="1">
<input type="submit" value="Ment" >

<b><a title="EGYSZERŰSÍTETT MUNKASZERZŐDÉS" href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > EMSz </a></b>


<?echo $roys['Latitude'];?>,<?echo $roys['Longitude'];?>
</small>
<?echo $roys['Helyszin'];?>
</form></td></tr>
     <?
}
?> 


</table>
  </body>

</html>





