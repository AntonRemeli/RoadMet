

<? include("GmapStart.php");
 $act="Gmap5beu.php";  
$b5beu="<big>";
$c5beu="</big>";
 include("GmapHead.php"); 
 ?>

<? include("GmapUpd.php"); ?>

<? include("GmapJava.php"); ?>


<? $C1=0; $C2=4;  include("GmapBox.php"); ?>

// 	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta

<? $k=0; while($roys = mysql_fetch_array($reys, MYSQL_ASSOC)) {  
if($roys['No']< 142 and $roys['Bejaras']<1000 and $roys['Betonozas']!='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' and $roys['CEM']==2) $k++;

  $Fej=""; $Lab=""; if($roys['Bejaras']<1000) {$Fej=$roys['Bejaras']."<big><big>".$k."</big></big>".$roys['Beuzemeles']; $Lab=$roys['Betonozas']."/".$roys['Atadas'];} 
if (!isset($_GET['serv'])) include("GmapPlot.php"); 
else if(($_GET['Lng']-$roys['Longitude'])*($_GET['Lng']-$roys['Longitude'])<0.851 and ($_GET['Lat']-$roys['Latitude'])*($_GET['Lat']-$roys['Latitude'])<0.5305)  include("GmapPlot.php"); 
// include("GmapPlot.php"); 
}
?> 
  
<? $k=''; while($roys = mysql_fetch_array($reys2, MYSQL_ASSOC)) {  

  $Fej=""; $Lab=""; if($roys['Bejaras']<1000) {$Fej=$roys['Bejaras']."<big><big>".$k."</big></big>".$roys['Beuzemeles']; $Lab=$roys['Betonozas']."/".$roys['Atadas'];} 
if (!isset($_GET['serv'])) include("GmapPlot.php"); 
else if(($_GET['Lng']-$roys['Longitude'])*($_GET['Lng']-$roys['Longitude'])<0.851 and ($_GET['Lat']-$roys['Latitude'])*($_GET['Lat']-$roys['Latitude'])<0.5305)  include("GmapPlot.php"); 
// include("GmapPlot.php"); 
}
?> 
  
<?include("GmapEnd.php");?>
   
   

