
<? include("GmapStart.php");

$act="Gmap4.php"; 
if (isset($_GET['act'])) $act = $_GET['act'];

 
$b9="<big>";
$c9="</big>";
 include("GmapHead.php"); 
?>

 


<?// include("GmapUpd.php"); ?>
 


<? $C1=-1; $C2=4; 	 include("GmapBox.php"); 

//	Helyszin	Allsz	Adsz	SIM	IMEI	Pluvio	HgClip	Stemp	Shum	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	
//	c	cBej	cBet	cBeu	cBez	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	
//	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	
//	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta	
//	Hszin	GtorNeve	Lnev	Taj	Asz	SzHely	SzDat	An	LakC	Tel	SzSz

?>

<a title="ÁLLOMÁSképek" href=<?echo $roys[p1];?> target="_blank">
 <img src=Picasa.jpg width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=../kepek/buttons/st_group.gif> &quot;)" ></a>



<table>

<? while($roys = mysql_fetch_array($reys, MYSQL_ASSOC)) { ?>

<tr><td>
<?echo $roys['No'];?></td><td>
<?echo $roys['Allsz'];?>
</td><td>
<a title="ÁLLOMÁSképek" href=<?echo $roys[p1];?> target="_blank">
 <img src=<?echo $roys[p2];?> width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<?echo $roys[p2];?>> &quot;)" ></a>

</td><td>
<?echo $roys['KOVIZIG'];?>
</td><td>
<a title="Bejárási képek" href=<?echo $roys[p3];?> target="_blank"> 
 <img src=<?echo $roys[p4];?> width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<?echo $roys[p4];?>> &quot;)" ></a>

</td><td>
 <?echo $roys['Hszin'];?>
</td><td>
<a title="Adatlap-kép" href=<?echo $roys[p5];?> target="_blank">
 <img src=<?echo $roys[p6];?> width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<?echo $roys[p6];?>> &quot;)" ></a>
</td><td>
<b><a title="ÁLLOMÁSADATLAP" href="Gmap6ALap.php?Hszin=<?echo $roys['Hszin'];?>&Allsz=<?echo $roys['Allsz'];?>&Adsz=<?echo $roys['Adsz'];?>&SIM=<?echo $roys['SIM'];?>&IMEI=<?echo $roys['IMEI'];?>&Pluvio=<?echo $roys['Pluvio'];?>&HgClip=<?echo $roys['HgClip'];?>&Stemp=<?echo $roys['Stemp'];?>&Shum=<?echo $roys['Shum'];?>&KOVIZIG=<?echo $roys['KOVIZIG'];?>&KeritesOldal=<?echo $roys['KeritesOldal'];?>&OTT_HGT_Talaj_Szel2=<?echo $roys['OTT_HGT_Talaj_Szel2'];?>&Almero=<?echo $roys['Almero'];?>" target="_blank" > ALap </a></b>
</td><td>
<small><small><?echo $roys['Latitude'];?>,<?echo $roys['Longitude'];?></small>
</td><td>
<b><a title="EGYSZERŰSÍTETT MUNKASZERZŐDÉS" href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > 
EMSz <?echo $roys['cBej'];?> </a></b>
</td><td>
<?echo $roys['Helyszin'];?></small>


</td></tr>
     <?
}
?> 


<? while($roys = mysql_fetch_array($reys2, MYSQL_ASSOC)) { ?>

<tr><td>
<?echo $roys['No'];?></td><td>
<?echo $roys['Allsz'];?>
</td><td>
<a title="ÁLLOMÁSképek" href=<?echo $roys[p1];?> target="_blank">
 <img src=<?echo $roys[p2];?> width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<?echo $roys[p2];?>> &quot;)" ></a>

</td><td>
<?echo $roys['KOVIZIG'];?>
</td><td>
<a title="Bejárási képek" href=<?echo $roys[p3];?> target="_blank"> 
 <img src=<?echo $roys[p4];?> width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<?echo $roys[p4];?>> &quot;)" ></a>

</td><td>
 <?echo $roys['Hszin'];?>
</td><td>
<a title="Adatlap-kép" href=<?echo $roys[p5];?> target="_blank">
 <img src=<?echo $roys[p6];?> width=20 height=20 border=0 onmouseover="this.T_LEFT=true;return escape(&quot;<img src=<?echo $roys[p6];?>> &quot;)" ></a>
</td><td>
<b><a title="ÁLLOMÁSADATLAP" href="Gmap6ALap.php?Hszin=<?echo $roys['Hszin'];?>&Allsz=<?echo $roys['Allsz'];?>&Adsz=<?echo $roys['Adsz'];?>&SIM=<?echo $roys['SIM'];?>&IMEI=<?echo $roys['IMEI'];?>&Pluvio=<?echo $roys['Pluvio'];?>&HgClip=<?echo $roys['HgClip'];?>&Stemp=<?echo $roys['Stemp'];?>&Shum=<?echo $roys['Shum'];?>&KOVIZIG=<?echo $roys['KOVIZIG'];?>&KeritesOldal=<?echo $roys['KeritesOldal'];?>&OTT_HGT_Talaj_Szel2=<?echo $roys['OTT_HGT_Talaj_Szel2'];?>&Almero=<?echo $roys['Almero'];?>" target="_blank" > ALap </a></b>
</td><td>
<small><small><?echo $roys['Latitude'];?>,<?echo $roys['Longitude'];?></small>
</td><td>
<b><a title="EGYSZERŰSÍTETT MUNKASZERZŐDÉS" href="Gmap5efosz.php?Bejar=<?echo $roys['Bejaras'];?>&Beton=<?echo $roys['Betonozas'];?>&cBej=<?echo $roys['cBej'];?>&Hszin=<?echo $roys['Hszin'];?>&GtorNeve=<?echo $roys['GtorNeve'];?>&Lnev=<?echo $roys['Lnev'];?>&Taj=<?echo $roys['Taj'];?>&Asz=<?echo $roys['Asz'];?>&SzHely=<?echo $roys['SzHely'];?>&SzDat=<?echo $roys['SzDat'];?>&An=<?echo $roys['An'];?>&LakC=<?echo $roys['LakC'];?>&Tel=<?echo $roys['Tel'];?>&SzSz=<?echo $roys['SzSz'];?>" target="_blank" > 
EMSz <?echo $roys['cBej'];?> </a></b>
</td><td>
<?echo $roys['Helyszin'];?></small>


</td></tr>
     <?
}
?> 




</table>

<script language="JavaScript" type="text/javascript" src="wz_tooltip.js"></script>


  </body>

</html>





