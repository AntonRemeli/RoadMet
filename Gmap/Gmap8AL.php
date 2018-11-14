
<? include("GmapStart.php");

$act="Gmap4.php"; 
if (isset($_GET['act'])) $act = $_GET['act'];

 
$b8a="<big>";
$c8a="</big>";
 include("GmapHead.php"); 
?>


<? include("GmapUpd.php"); ?>

<table>
    <div id="map" style="width: 1100px; height: 00px"></div>
 
 
<script language="JavaScript" type="text/javascript" src="wz_tooltip.js"></script>



<? $C1=-1; $C2=9; 	 include("GmapBox.php"); 

//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//	c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	
//	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	
//	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	
//	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

?>

<? while($roys = mysql_fetch_array($reys, MYSQL_ASSOC)) { ?>

<tr>
<td>
<form name="input2" action="Gmap8AL.php?act=<?echo $act;?>" method="get"> 

<a title="ÁLLOMÁSképek" href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>

<input name="act" type="hidden" size="3" id="act" value="<?echo $act;?>">
<small>
<input type="text" size="8" name="Hszin" value="<?echo $roys['Hszin'];?>">
<a title="Bejárási képek" href=<?echo $roys[p3];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>

<input type="text" size="5" name="Allsz" value="<?echo $roys['Allsz'];?>">
<input type="text" size="5" name="Adsz" value="<?echo $roys['Adsz'];?>">
<input type="text" size="13" name="SIM" value="<?echo $roys['SIM'];?>">
<input type="text" size="13" name="IMEI" value="<?echo $roys['IMEI'];?>">
<input type="text" size="13" name="Pluvio" value="<?echo $roys['Pluvio'];?>">
<input type="text" size="15" name="HgClip" value="<?echo $roys['HgClip'];?>">
<input type="text" size="8" name="Stemp" value="<?echo $roys['Stemp'];?>">
<input type="text" size="8" name="Shum" value="<?echo $roys['Shum'];?>">

<input type="hidden" name="No" value="<?echo $roys['No'];?>">
<input type="hidden" name="L" value="<?echo $roys['L'];?>">

<input type="hidden" name="KOVIZIG" value="<?echo $roys['KOVIZIG'];?>">
<input type="hidden" name="Pcim" value="<?echo $roys['Postaicim'];?>">
<input type="hidden" name="serv6AL" value="1">
<input type="submit" value="Ment" >
<a title="Adatlap-kép" href=<?echo $roys[p4];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>

<b><a title="ÁLLOMÁSADATLAP" href="Gmap8ALap.php?Hszin=<?echo $roys['Hszin'];?>&Allsz=<?echo $roys['Allsz'];?>&Adsz=<?echo $roys['Adsz'];?>&SIM=<?echo $roys['SIM'];?>&IMEI=<?echo $roys['IMEI'];?>&Pluvio=<?echo $roys['Pluvio'];?>&HgClip=<?echo $roys['HgClip'];?>&Stemp=<?echo $roys['Stemp'];?>&Shum=<?echo $roys['Shum'];?>&KOVIZIG=<?echo $roys['KOVIZIG'];?>&KeritesOldal=<?echo $roys['KeritesOldal'];?>&OTT_HGT_Talaj_Szel2=<?echo $roys['OTT_HGT_Talaj_Szel2'];?>&Almero=<?echo $roys['Almero'];?>" target="_blank" > ALap </a></b>


<?echo $roys['Latitude'];?>,<?echo $roys['Longitude'];?>
</small>
<?echo $roys['Helyszin'];?>
</form></td></tr>
     <?
}
?> 

<? while($roys = mysql_fetch_array($reys2, MYSQL_ASSOC)) { ?>

<tr>
<td>
<form name="input2" action="Gmap8AL.php?act=<?echo $act;?>" method="get"> 

<a href=<?echo $roys[p1];?> target="_blank"> <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<../kepek/buttons/st_group.gif>&quot;)" ></a>

<input name="act" type="hidden" size="3" id="act" value="<?echo $act;?>">
<small>
<input type="text" size="8" name="Hszin" value="<?echo $roys['Hszin'];?>">

<input type="text" size="5" name="Allsz" value="<?echo $roys['Allsz'];?>">
<input type="text" size="5" name="Adsz" value="<?echo $roys['Adsz'];?>">
<input type="text" size="13" name="SIM" value="<?echo $roys['SIM'];?>">
<input type="text" size="13" name="IMEI" value="<?echo $roys['IMEI'];?>">
<input type="text" size="13" name="Pluvio" value="<?echo $roys['Pluvio'];?>">
<input type="text" size="15" name="HgClip" value="<?echo $roys['HgClip'];?>">
<input type="text" size="8" name="Stemp" value="<?echo $roys['Stemp'];?>">
<input type="text" size="8" name="Shum" value="<?echo $roys['Shum'];?>">

<input type="hidden" name="No" value="<?echo $roys['No'];?>">
<input type="hidden" name="L" value="<?echo $roys['L'];?>">

<input type="hidden" name="HRSZ" value="<?echo $roys['HRSZ'];?>">
<input type="hidden" name="Pcim" value="<?echo $roys['Postaicim'];?>">
<input type="hidden" name="serv6AL" value="1">
<input type="submit" value="Ment" >

<b><a title="ÁLLOMÁSADATLAP" href="Gmap8ALap.php?Hszin=<?echo $roys['Hszin'];?>&Allsz=<?echo $roys['Allsz'];?>&Adsz=<?echo $roys['Adsz'];?>&SIM=<?echo $roys['SIM'];?>&IMEI=<?echo $roys['IMEI'];?>&Pluvio=<?echo $roys['Pluvio'];?>&HgClip=<?echo $roys['HgClip'];?>&Stemp=<?echo $roys['Stemp'];?>&Shum=<?echo $roys['Shum'];?>&KOVIZIG=<?echo $roys['KOVIZIG'];?>&KeritesOldal=<?echo $roys['KeritesOldal'];?>&OTT_HGT_Talaj_Szel2=<?echo $roys['OTT_HGT_Talaj_Szel2'];?>&Almero=<?echo $roys['Almero'];?>" target="_blank" > ALap </a></b>


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





