<? include("GmapStart.php"); 
 $act="Gmap4.php";
$b4="<big>";
$c4="</big>";
 include("GmapHead.php"); 
?>
 
<? include("GmapUpd.php"); ?>

<? include("GmapJava.php"); ?>


<? $C1=0; $C2=9;  include("GmapBox.php"); ?>


<? $k=0; while($roys = mysql_fetch_array($reys, MYSQL_ASSOC)) {  
if($roys['No']< 142 and $roys['Bejaras']<1000 and $roys['Betonozas']!='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' and $roys['CEM']==2) $k++;

   $Fej=$roys['A']; $Lab=$roys['Helyszin']; if (!isset($_GET['serv'])) include("GmapPlot.php"); 
else if(($_GET['Lng']-$roys['Longitude'])*($_GET['Lng']-$roys['Longitude'])<0.5 and ($_GET['Lat']-$roys['Latitude'])*($_GET['Lat']-$roys['Latitude'])<0.5)  include("GmapPlot.php"); 
}
?> 
<? $k=''; while($roys = mysql_fetch_array($reys2, MYSQL_ASSOC)) {  

   $Fej=$roys['A'];  $Lab=$roys['Helyszin']; if (!isset($_GET['serv'])) include("GmapPlot.php"); 
else if(($_GET['Lng']-$roys['Longitude'])*($_GET['Lng']-$roys['Longitude'])<0.5 and ($_GET['Lat']-$roys['Latitude'])*($_GET['Lat']-$roys['Latitude'])<0.5)  include("GmapPlot.php"); 
}
?> 
  
<?include("GmapEnd.php");?>
   



