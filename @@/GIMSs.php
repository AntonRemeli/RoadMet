	
<?php   

$MOD="GIMS.php";
$L="en";
include "LM.php";
include "log.php";
//include "stations_last_data.php";
//echo $gim.' gim '.$gim = $_GET['gim'];
//$ido1=$_GET['ido1'];
//$ido2=$_GET['ido2'];
//$gim=$_GET['gim'];
if($ido2=='' or $ido2>time() ) $ido2=time();
$L=$_GET['L'];
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

include "userd.php";

//st_id st_Ort StrNo Lat Latm Alt Altm KlimaZ cty county StrM xps_k1 xps_k2 xps_kw xps_ki xps_kl xps_kat xps_kst xps_krh st_txt h Typ GSMno GPRSno BCUno FBSno HGTno Raino megj 
$queryS = "SELECT * FROM stations  where cty=$cty ORDER BY StrNo ";
if($cty==0) $queryS = "SELECT * FROM stations  where h=='999' ORDER BY StrNo ";
if($cty==-2) $queryS = "SELECT * FROM stations  where h<'999' ORDER BY StrNo ";
if($cty==-3) $queryS = "SELECT * FROM stations   ORDER BY StrNo ";
if($cty==50) $queryS = "SELECT * FROM stations  where st_id>'9500' && GSMno>'' ORDER BY StrNo ";
if($gim==999) $queryS = "SELECT * FROM stations  where cty>$cv && cty<$ccv ORDER BY StrNo ";
 $reS = mysqli_query($sql_connect,$queryS);
//echo  'number of stations: '.	$nn = mysqli_num_rows($reS);


$n=0;?>
	<script type="text/javascript">
var m=0;
var mm=0;
var stID=[];
var nn=0;
nn=<?php  echo mysqli_num_rows($reS)?>;
//alert(m+' '+nn);
</script>
<small>
<?php  
while ( $rowS = mysqli_fetch_array($reS, MYSQLI_ASSOC)){
	$n++;
//	echo ' '.$n.'<small>_'.$rowS[st_id].'</small>';
		$stID[$n]=$rowS[st_id];
		$ctys[$n]=$rowS[cty];

?>
	<script type="text/javascript">
	m=<?php  echo $n?>;	
//	gim=<?php  echo $gim?>;	
 stID[m]=<?php  echo $stID[$n]?>;
// ctys[m]=<?php  echo $ctys[$n]?>;
//alert('gim '+gim);
//alert('m'); //ovde alert NIKAKO NE IDE!!
//alert(m+'  '+stID[m]+'ctys[m] '+ctys[m]);
</script>

<?php  
}
if($n<2) //3064: GIS Lagos
{?>
	<script type="text/javascript">
	m=2;
nn=2;
 stID[m]=<?php  echo $stID[1]?>+1;
</script>
<?php  }
mysqli_close ($sql_connect);
// echo '  gim '. $gim;
?></small>

<script type="text/javascript">
//alert(m+' '+nn);
</script>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta http-equiv="CONTENT-LANGUAGE" content="hr"/>
<link rel="stylesheet" type="text/css" media="all" href="js/calendar-win2k-cold-1.css" title="win2k-cold-1" />

<title>Keresztes M</title>





<style type="text/css">

BODY { font-family: Arial; font-size: small;
background-color: #CCCCFF;}

A:hover {color: red; text-decoration: underline; }
small {color: grey;	font-weight: bold;}
H1 {
font-size:24pt; font-family: Monotype Corsiva, Verdana, Arial, Helvetica, sans-serif;}

</style>



<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAsJslf1rg2HPVPtLD-KcKkhSMrx5xKmVqOnWIWISNyI4i3aXgNRT6O1mDlaPhFgQFnVJNEnU53qGzHg" type="text/javascript">
</script>

<script type="text/javascript">
//alert("xxxx2");

// *********************************************************************** // GS00err module:


onerror=handleErr
var txt=""
function handleErr(msg,url,l,st_id,Ort,StrNo,Lng,Lat)
{
txt="There was an error on this page.\n\n"
txt+="Error: " + msg + "\n"
txt+="URL: " + url + "\n"
txt+="Line: " + l + "\n\n"

var st_id = markers12[i].getAttribute("st_id");
txt+="st_id: " + st_id + "\n\n"

var Ort = markers12[i].getAttribute("Ort");
txt+="Hely: " + Ort + "\n\n"

var StrNo = markers12[i].getAttribute("StrNo");
txt+="Ut: " + StrNo + "\n\n"

var Lng = markers00[i].getAttribute("Lng");
txt+="lng: " + Lng + "\n\n"

var Lat = markers00[i].getAttribute("Lat");
txt+="lat: " + Lat + "\n\n"

txt+="Click OK to continue.\n\n"
alert(txt)
return true
}
  	var map;
	var geoXml = new GGeoXml("http://keresztes.miki.googlepages.com/wgs84_pkod1_gen10b.kml");

// *********************************************************************** // GS00err moduleEND

	function datumF(d){
		var dt = new Date();

dt.setTime(d);
dyr = dt.getYear()+1900;
dmo = dt.getMonth();
ddy = dt.getDate();
dhr = dt.getHours();
dmi = dt.getMinutes();
dmi = dmi - dmi%5;
dmi = "" + ((dmi<10) ? "0" : "") + dmi;
dhr = "" + ((dhr<10) ? "0" : "") + dhr;
ddy = "" + ((ddy<10) ? "0" : "") + ddy;
dmo += 1;
dmo = "" + ((dmo<10) ? "0" : "") + dmo;
dyr += ((dyr<200) ? 1900 : 0 );
dy=dyr-2000;
dy= "" + ((dy<10) ? "0" : "") + dy;
<?php  if($L=='hu'){?>		 
 dtm=dyr+"."+dmo+"."+ddy+" "+dhr+":"+dmi;
<?php  }
else{?>
 dtm=dhr+":"+dmi+" "+ddy+"."+dmo+"."+dyr;
<?php  }?>
/*alert ("now: datumF(d), d dt dtm")
alert ("now: datumF(d), d= "+d)
alert ("now: datumF(d), dt= "+dt)
alert ("now: datumF(d), dtm= "+dtm)
alert ("now: datumF(d), d dt dtm = "+d+"  "+dt+"  "+dtm)*/
return dtm;

}

function pause(millis) 
{
var date = new Date();
var curDate = null;

do { curDate = new Date(); } 
while(curDate-date < millis);
} 

	function SetAttrSq(){
	   for(i=2;i<7;i++)
	   {
SetAttr(i)
//	setTimeout("alert(i+': '+attr)",1000);
pause(1000);
	   }
	}






// *********************************************************************** // GS01run module:

//gim=<?php  echo $gim;?>;
//gim=0;
	function SetTime(a){
	switch(a){
		case 0: gim=0;  break;
		case 1: gim=1;  break;
		case 2: gim=2;  break;
		case 3: gim=4;  break;
		case 4: gim=8;  break;
		case 5: gim=24;  break;
		case 6: gim=72;  break;
		case 7: gim=288;  break;
		deafault: break;
	}
xmlLoad();
SetAttr(gat);
	}


	var stp=1;
	var mul=1;
	var mu=""; 
	var at1=1;
	var at2=1;
	
function SetAttr(a){
	// no data reload ? :  
//	DataLoad();

	switch(a){
		case 1: attr="air"; at1=1; at2=1;    stp=1; mul=1;  mu="°C";  break;
		case 2: attr="surft";  at1=1; at2=1;    stp=1; mul=1;  mu="°C"; break;
		case 3: attr="surf_freez_temp";  at1=1; at2=1;    stp=1; mul=1;  mu="°C"; break;
		case 4: attr="surf_salt_pri";  at1=1; at2=1;    stp=1; mul=1;  mu="gr/m2"; break;
		case 5: attr="hum";  at1=1; at2=1;    stp=5; mul=1;  mu="%"; break;
		case 6: attr="rain_int";  at1=-1; at2=1;    stp=1; mul=1;  mu="mm/h"; break;
		case 7: attr="surf_water_depth";  at1=-1; at2=1;    stp=1; mul=10;  mu="dmm"; break;
		deafault: break;
	}

	SetAttrV();
	SetScale();
	map.addOverlay(geoXml);	

	dt=dtst*300000+1000000000000; datumF(dt); 
//CreateStations0();

	CreateStations(markers12); // alert("actual data "+dtst+"   "+dt+"   "+dtm);
	if(gim>0){
dtstm=dtst-11*gim;  dt=dtstm*300000+1000000000000; datumF(dt);  CreateStations(markers01); alert(" <?php   echo $helyzetkép?> 01 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers02);  alert(" <?php   echo $helyzetkép?> 02 ("+dtstm+")  "+dtm); 
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers03);  alert(" <?php   echo $helyzetkép?> 03 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers04);  alert(" <?php   echo $helyzetkép?> 04 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers05);  alert(" <?php   echo $helyzetkép?> 05 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers06);  alert(" <?php   echo $helyzetkép?> 06 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers07);  alert(" <?php   echo $helyzetkép?> 07 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers08);  alert(" <?php   echo $helyzetkép?> 08 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers09);  alert(" <?php   echo $helyzetkép?> 09 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers10);  alert(" <?php   echo $helyzetkép?> 10 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers11);  alert(" <?php   echo $helyzetkép?> 11 ("+dtstm+")  "+dtm);
     dtstm+=1*gim;  dt=dtstm*300000+1000000000000; datumF(dt); CreateStations(markers12);  alert(" <?php   echo $helyzetkép?> 12 ("+dtstm+")  "+dtm);
  	}
//	SetFlags();	
//	FillList();
	document.getElementById("side_bar").innerHTML = side_bar_html;
}


// *********************************************************************** // GS01run moduleEND




// *********************************************************************** GS02init module:


function init() {
     if (GBrowserIsCompatible()) {
G_NORMAL_MAP.getTileLayers()[0].getOpacity = function () {return 0.9;};
	map = new GMap2(document.getElementById("map_canvas"));
document.getElementById("map_canvas").style.backgroundImage = "url(eurmet_logo.jpg)";
//        map.setCenter(new GLatLng(47.476, 18.967), 16);
//map.setCenter(new GLatLng(47.476, 18.967), 7);
//CreateStations(markers12); 
CreateStations0();
//alert('Latinit '+Lati); alert('Lnginit '+Lngi);
       map.setCenter(new GLatLng(Lati, Lngi), 7);
          var logoname = '<a href="http://www.boreas.hu" target="_blank">Boreas </a> &nbsp;&nbsp;&nbsp;  <a href="http://eurmet.hu/A.htm" target="_blank">EurMet </a>';
          var logoaddress = "2030 Érd,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2040 Budaörs, <br/>Favágó u. 58 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Szépkilátó u 6";
	  var logohtml = "<H1><i>"+logoname+"</i></H1><small>"+logoaddress+"</small>";
<?php  if($gim=='') $gim=0;?> 
<?php  if($gim<0){?>   map.setCenter(new GLatLng(47.476, 18.967), 7);     map.openInfoWindowHtml(map.getCenter(),logohtml); <?php  }; $gim=0;?> 
	  

// HERE IS THE EURMET EUROPE-TOUR:	
<?php  if( $_GET['gim']==-1){?>	var Latim=47.476/2+Lati/2;  var Lngim=18.967/2+Lngi/2; //alert(Latim+'  '+Lngim);
window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 14);  }, 7000);
window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 11);   }, 13000);
window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 7);   }, 17000);
window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 5);   }, 20000);
window.setTimeout( function() { map.panDirection(-1, 0);                        }, 22000);
window.setTimeout( function() { map.panDirection(0, -1);                        }, 24000);
window.setTimeout( function() { map.panDirection(1, 0);                         }, 26000);
window.setTimeout( function() { map.panDirection(1, 0);                         }, 28000);
window.setTimeout( function() { map.panDirection(0, 1);                         }, 30000);
window.setTimeout( function() { map.panDirection(0, 1);                         }, 32000);
window.setTimeout( function() { map.panDirection(0, 1);                         }, 34000);
window.setTimeout( function() { map.panDirection(-1, 0);                        }, 36000);
window.setTimeout( function() { map.panDirection(-1, 0);                        }, 38000);
window.setTimeout( function() { map.panDirection(0, -1);                        }, 40000);
window.setTimeout( function() { map.panDirection(1, -1);                        }, 42000);
window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 6);  }, 44000);
window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 7);  }, 46000);
//window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 8);  }, 48000);
//window.setTimeout( function() { map.setCenter(new GLatLng(47.476, 18.967), 9);  }, 50000);
//window.setTimeout( function() { map.setCenter(new GLatLng((47.476+Lati)/2, (18.967+Lngi)/2), 7);  }, 50000);
window.setTimeout( function() { map.setCenter(new GLatLng(Latim, Lngim), 6);  }, 50000);
<?php  };$gim=0;?> 
 
	var mapTypeControl = new GMapTypeControl();
        var BottomLeft = new GControlPosition(G_ANCHOR_BOTTOM_LEFT, new GSize(320,3));
        map.addControl(mapTypeControl, BottomLeft);
 	//map.addControl(new GOverviewMapControl(new GSize(200,200)));
       	map.addOverlay(geoXml);
       	geocoder = new GClientGeocoder();
	map.enableContinuousZoom();
	map.enableDoubleClickZoom();
	map.addControl(new GScaleControl(300));
	var ovSize=new GSize(200, 150)
	var ovMap=new GOverviewMapControl(ovSize);
	map.addControl(ovMap);
	var mini=ovMap.getOverviewMap();
	//ovMap.hide();
	map.hideControls();
	GEvent.addListener(map, "mouseover", function(){map.showControls();});
	GEvent.addListener(map, "mouseout", function(){map.hideControls();});
        SetAttr(1);	
//window.setTimeout( SetAttr(2), 70000);

	}
}

// *********************************************************************** GS02init moduleEND


// *********************************************************************** // GS03data module:
//alert('GS03data module:');
function round ( val, precision ) {
    var precision = (round.arguments.length > 1) ? round.arguments[1] : 0;
    return Math.round(val * Math.pow(10, precision))/Math.pow(10, precision);
}
//IE:
try   {	
xmlDoc00=new ActiveXObject("Microsoft.XMLDOM");  
xmlDoc01=new ActiveXObject("Microsoft.XMLDOM");  
xmlDoc02=new ActiveXObject("Microsoft.XMLDOM"); 
xmlDoc03=new ActiveXObject("Microsoft.XMLDOM"); 
xmlDoc04=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc05=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc06=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc07=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc08=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc09=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc10=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc11=new ActiveXObject("Microsoft.XMLDOM");    
xmlDoc12=new ActiveXObject("Microsoft.XMLDOM"); 
}
catch(e)
{
//FF:
	try   {	
		xmlDoc00=document.implementation.createDocument("","",null);      
		xmlDoc01=document.implementation.createDocument("","",null);      
		xmlDoc02=document.implementation.createDocument("","",null);   
		xmlDoc03=document.implementation.createDocument("","",null);      
		xmlDoc04=document.implementation.createDocument("","",null);     
		xmlDoc05=document.implementation.createDocument("","",null);     
		xmlDoc06=document.implementation.createDocument("","",null);      
		xmlDoc07=document.implementation.createDocument("","",null);      
		xmlDoc08=document.implementation.createDocument("","",null);      
		xmlDoc09=document.implementation.createDocument("","",null);      
		xmlDoc10=document.implementation.createDocument("","",null);     
		xmlDoc11=document.implementation.createDocument("","",null);    
		xmlDoc12=document.implementation.createDocument("","",null);    
	}
  catch(e)
    {    alert(e.message);    }
}
xmlDoc00.async=false;
xmlDoc01.async=false;
xmlDoc02.async=false;
xmlDoc03.async=false;
xmlDoc04.async=false;
xmlDoc05.async=false;
xmlDoc06.async=false;
xmlDoc07.async=false;
xmlDoc08.async=false;
xmlDoc09.async=false;
xmlDoc10.async=false;
xmlDoc11.async=false;
xmlDoc12.async=false;

var date = new Date();
yr = date.getYear();//+1900;
mo = date.getMonth();
dy = date.getDate();
hr = date.getHours();
mi = date.getMinutes();
mi = mi - mi%5;
mi = "" + ((mi<10) ? "0" : "") + mi;
hr = "" + ((hr<10) ? "0" : "") + hr;
dy = "" + ((dy<10) ? "0" : "") + dy;
mo += 1;
mo = "" + ((mo<10) ? "0" : "") + mo;
yr += ((yr<200) ? 1900 : 0 );
//alert("yr: "+yr);

y=yr-2000;
y= "" + ((y<10) ? "0" : "") + y;

dtst0=y+""+mo+""+dy;
//alert("dtst0: "+dtst0);

dat2=<?php  echo $ido2;?>;
dat2e=dat2*1000;
//datumD(dat2e);
//alert("vvv");
dtst=round((dat2-1000000100)/300)-0;
//dtst=round((date-1000000300000)/300000)-0;
gat=1;
gim=<?php   echo $gim;?>;
xmlLoad();
function xmlLoad(){
//	alert("gim:"+gim+" gat: "+gat+"\n looping last hour 5min data up to:  "+yr+"."+mo+"."+dy+" "+hr+":"+mi+"   \n\n last .xml datastring: dataNEW"+dtst+"  \n\n click OK to continue");

//xmlDoc00.load("..\/GDT\/dataNEW3.xml"); 
//xmlDoc00.load("..\/GDT\/dataNEW000000.xml");
xmlDoc00.load("..\/GDT\/dataNEW"+dtst0+".xml"); 

dtst-=11*gim; xmlDoc01.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc02.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc03.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc04.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc05.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc06.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc07.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc08.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc09.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc10.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc11.load("..\/GDT\/dataNEW"+dtst+".xml"); 
dtst+=1*gim;  xmlDoc12.load("..\/GDT\/dataNEW"+dtst+".xml"); 

 markers00 = xmlDoc00.documentElement.getElementsByTagName("marker");
 markers01 = xmlDoc01.documentElement.getElementsByTagName("marker");
 markers02 = xmlDoc02.documentElement.getElementsByTagName("marker");
 markers03 = xmlDoc03.documentElement.getElementsByTagName("marker");
 markers04 = xmlDoc04.documentElement.getElementsByTagName("marker");
 markers05 = xmlDoc05.documentElement.getElementsByTagName("marker");
 markers06 = xmlDoc06.documentElement.getElementsByTagName("marker");
 markers07 = xmlDoc07.documentElement.getElementsByTagName("marker");
 markers08 = xmlDoc08.documentElement.getElementsByTagName("marker");
 markers09 = xmlDoc09.documentElement.getElementsByTagName("marker");
 markers10 = xmlDoc10.documentElement.getElementsByTagName("marker");
 markers11 = xmlDoc11.documentElement.getElementsByTagName("marker");
 markers12 = xmlDoc12.documentElement.getElementsByTagName("marker");
}


// *********************************************************************** // GS03data module END
 


// *********************************************************************** // GS04class module:
//alert('GS04class module:');
    var attr="";
    var class1=0;
    var class2=0;
    var class3=0;
    var class4=0;
    var class5=0;
    var class6=0;
    var class7=0;
    var class8=0;
    var class9=0;
  	   var n=9;//osztályok száma
	   var avg=0;
	   var avg2=0;
	   var min=0;
	   var min2=0;
	   var curr=0;
	   var curr2=0;
	   var stime=0;
	   var b=0;
 
var d = new Date();
var time = d.getTime()/1000-3600;
var stIDo=0;
function SetAttrV() //define the class range
{
//var markers12dotlength=11;	
	avg=0;
	stIDo=0;
	    for(var n=1;n<nn+1;n++){// alert(n+'   '+stID[n]);
	   for(b=0;b<markers12.length;b++)
	   {
	   if ( markers00[b].getAttribute("st_id") == stID[n] && stID[n]!=stIDo)
		   { 
			   stIDo=stID[n]; 

		   curr0=mul*markers12[b].getAttribute(attr)*at1;
		   		if(curr0>-33 && curr0<111) min=curr0;
		avg=avg+parseFloat(min);
// alert(n+' stID:  '+stID[n]+'   curr0: '+curr0+'  avg:   '+avg);
	   }
	   }
	    }
	   avg2=avg/mm;
	avg=0;
	stIDo=0;
	    for(var n=1;n<nn+1;n++){// alert(n+'   '+stID[n]);
	   for(b=0;b<markers12.length;b++)
	   {
		   if ( markers00[b].getAttribute("st_id") == stID[n] && stID[n]!=stIDo)
		   { 
			   stIDo=stID[n]; 
		curr2=mul*markers12[b].getAttribute(attr)*at1;
		   stime=markers12[b].getAttribute("measure_time");
		   min2=avg2;
if(curr2>avg2-10*stp && curr2<avg2+10*stp && stime > time) min2=curr2;
avg=avg+parseFloat(min2);
//alert(mm+' '+n+' stID:  '+stID[n]+'   curr2: '+curr2+'  avg:   '+avg);
//alert(mm+'  '+n+' stID:'+stID[n]+'ctys[n] '+ctys[n]);

		}
	   }
	    }
	avg=avg/mm;

//alert('b  '+b+' nn  '+nn+' avg: '+avg);	   
	   class1=at1*Math.round(avg-12*stp);
	   class2=at1*Math.round(avg-6*stp);
	   class3=at1*Math.round(avg-3*stp);
	   class4=at1*Math.round(10*(avg-stp))/10;
	   class5=at1*Math.round(10*avg)/10+" \n"+mu;
	   class6=at1*Math.round(10*(avg+stp))/10;
	   class7=at1*Math.round(avg+3*stp);
	   class8=at1*Math.round(avg+6*stp);
	   class9=at1*Math.round(avg+12*stp);
}


// *********************************************************************** // GS04class&attrV module END



// *********************************************************************** // GS05scale module:

function SetScale(){
	document.getElementById("class1").innerHTML =class1;
	document.getElementById("class2").innerHTML =class2;
	document.getElementById("class3").innerHTML =class3;
	document.getElementById("class4").innerHTML =class4;
	document.getElementById("class5").innerHTML =class5;
	document.getElementById("class6").innerHTML =class6;
	document.getElementById("class7").innerHTML =class7;
	document.getElementById("class8").innerHTML =class8;
	document.getElementById("class9").innerHTML =class9;
}



// *********************************************************************** // GS05scale moduleEND


// *********************************************************************** // GS06flags module:
 
    var flag1="flags/f-4.png";
    var flag2="flags/f-3.png";
    var flag3="flags/f-2.png";
    var flag4="flags/f-1.png";
    var flag5="flags/f-0.png";
    var flag6="flags/f+1.png";
    var flag7="flags/f+2.png";
    var flag8="flags/f+3.png";
    var flag9="flags/f+4.png";

    var bflag1="flags/g-4.png";
    var bflag2="flags/g-3.png";
    var bflag3="flags/g-2.png";
    var bflag4="flags/g-1.png";
    var bflag5="flags/g-0.png";
    var bflag6="flags/g+1.png";
    var bflag7="flags/g+2.png";
    var bflag8="flags/g+3.png";
    var bflag9="flags/g+4.png";
   
    var flags=[flag1,flag2,flag3,flag4,flag5,flag6,flag7,flag8,flag9];
    var bflags=[bflag1,bflag2,bflag3,bflag4,bflag5,bflag6,bflag7,bflag8,bflag9];
    
    if(at1<0){
     flags=[flag9,flag8,flag7,flag6,flag5,flag4,flag3,flag2,flag1];
     bflags=[bflag9,bflag8,bflag7,bflag6,bflag5,bflag4,bflag3,bflag2,bflag1];
    }

//out of use:
    function SetFlags() {/* map.clearOverlays();*/ 	map.addOverlay(geoXml);	
   alert(" <?php   echo $helyzetkép?> 01"); CreateStations(markers01); 
   alert(" <?php   echo $helyzetkép?> 02"); CreateStations(markers02); 
    CreateStations(markers03);  
    CreateStations(markers04);  
    CreateStations(markers05); 
    CreateStations(markers06);  
    CreateStations(markers07); 
    CreateStations(markers08); 
    CreateStations(markers09); 
    CreateStations(markers10); pause(3000); 
    CreateStations(markers11); pause(3000); 
    CreateStations(markers12); 
    }
 
// *********************************************************************** // GS06flags moduleEND


// *********************************************************************** // GS07Stations module:

    var point = [];

//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
		var st_id = [];
		var Typ = [];
		var st_Ort = [];
                var StrNo = [];
                var Lng = [];
		var Lat = [];
		var cty = [];

		var Lati = 0;
		var Lngi = 0;
    
//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time 
		var xps_time = [];
		var air = [];
		var surft = [];
		var surf_freez_temp = [];
		var surf_salt_pri = [];
		var hum = [];
		var rain_int = [];
		var surf_water_depth = [];
var xps_timei='';
    var side_bar_html = "";
    var gmarkers12 = [];
    var htmK=[];
    var htmG=[];
    var Aszoveg0=[];
    var Aszoveg1=[];
    var Aszoveg2=[];
    var closer = '<a href=javascript:kozelebb();><?php  echo $rakozelit?></a>'
	    //	    var markers00dotlength=11;
	    var stIDn=0;
    function CreateStations(markers){
	    for(var n=1;n<nn+1;n++){// alert(n+'   '+stID[n]);
		    for(var i=0;i<markers00.length;i++){ 
//alert(markers00[i].getAttribute("cty"));
//			    if ( markers00[i].getAttribute("st_id") == stID[n] && markers00[i].getAttribute("cty") > <?php  echo $cv?> && markers00[i].getAttribute("cty") < <?php  echo $ccv?> && stID[n]!=stIDn){ stIDn=stID[n]; // alert(n+' !!  '+stID[n]);
			    if ( markers00[i].getAttribute("st_id") == stID[n] && stID[n]!=stIDn){ stIDn=stID[n]; // alert(n+' !!  '+stID[n]);
point[i] = new GLatLng(parseFloat(markers00[i].getAttribute("Lat")), parseFloat(markers00[i].getAttribute("Lng")));
		st_id[i] = markers00[i].getAttribute("st_id");
		Typ[i] = markers00[i].getAttribute("Typ");
		st_Ort[i] = markers00[i].getAttribute("st_Ort");
                StrNo[i] = markers00[i].getAttribute("StrNo");
                Lng[i] = markers00[i].getAttribute("Lng"); //Lngi = Lng[i] ;// alert('Lngi '+Lngi);
		Lat[i] = markers00[i].getAttribute("Lat"); //Lati = Lat[i] ;// alert('Lati '+Lati);

           xps_time[i]=markers[i].getAttribute("xps_time");
           air[i]=markers[i].getAttribute("air");
	   surft[i]=markers[i].getAttribute("surft");
	   surf_freez_temp[i]=markers[i].getAttribute("surf_freez_temp");
	   surf_salt_pri[i]=markers[i].getAttribute("surf_salt_pri");
	   hum[i]=markers[i].getAttribute("hum");
	   rain_int[i]=markers[i].getAttribute("rain_int");
	   surf_water_depth[i]=markers[i].getAttribute("surf_water_depth");

Aszoveg0[i]= ""+st_Ort[i]+ "\n "+xps_time[i]+": \n"+air[i]+" . . . . . .  °C airT \n"+surft[i]+" . . . . . .  °C srfT \n"+surf_freez_temp[i]+" . . . . . .  °C frzT \n"+surf_salt_pri[i]+" . . . . . .  gr/m2 salt \n"+hum[i]+" . . . . . .  %rHum \n"+rain_int[i]+" . . . . . .  mm/h Rain \n"+surf_water_depth[i]+" . . . . . .  mm Water \n";

Aszoveg1[i]="<small><small><div style='width:100px'>" + st_id[i] + " <b> "+ st_Ort[i] +"</b> <br />" + StrNo[i] +" road km+m <br />" + Typ[i] + "<br />  " + Lng[i] + " Longitude<br />   " + Lat[i] + " Latitude<br/> <b><i> " + closer + "</b></i>&nbsp; </div></small></small>";

Aszoveg2[i]= "<small><small>"+xps_time[i]+":<br/>"+air[i]+" . . . . . .  °C airT<br/>"+surft[i]+" . . . . . .  °C srfT<br/>"+surf_freez_temp[i]+" . . . . . .  °C frzT<br/>"+surf_salt_pri[i]+" . . . . . .  gr/m2 salt<br/>"+hum[i]+" . . . . . .  %rHum<br/>"+rain_int[i]+" . . . . . .  mm/h Rain<br/>"+surf_water_depth[i]+" . . . . . .  mm Water<br/></small></small>";

		   
htmG[i]="<img src=../IMG/"+st_id[i]+".png width=450 height=300/>";
htmK[i]="<img src=../KEP/"+st_id[i]+".JPG width=100/>";

		map.addOverlay(createMarker(markers,point[i], i));
	InsertRowToSideBar(i);
		}
    	    }
}
	    }

    
	    // *********************************************************************** // GS07Stations moduleEND


           // *********************************************************************** // GS07Stations0 moduleSART

    function CreateStations0(){
Lngi = 0;
Lati = 0;
stIDn= 0;
mm = 0;
	    for(var n=1;n<nn+1;n++){// alert(n+'   '+stID[n]);
		    for(var i=0;i<markers00.length;i++){ 
			    if(markers00[i].getAttribute("st_id")==stID[n] && stID[n]!=stIDn){ stIDn=stID[n]; mm++;
			    }
    	    }
	    }

	    for(var n=1;n<nn+1;n++){// alert(n+'   '+stID[n]);
		    for(var i=0;i<markers00.length;i++){ 
			    if(markers00[i].getAttribute("st_id")==stID[n] && stID[n]!=stIDn){ stIDn=stID[n];
                Lngi += markers00[i].getAttribute("Lng")/mm ;// alert('Lngi '+Lngi);
		Lati += markers00[i].getAttribute("Lat")/mm ;// alert('Lati '+Lati);
//		alert(mm+' '+n+' '+stID[n]+' Lngi '+ Lngi+' Lati '+Lati+' '+markers00[i].getAttribute("st_id")+' '+markers00[i].getAttribute("Lng")+' '+markers00[i].getAttribute("Lat")+' '+markers00[i].getAttribute("st_Ort"))
			    }
    	    }
	    }
    }
// *********************************************************************** // GS07Stations0 moduleEND


// *********************************************************************** // GS08marker module:

 function createMarker(markers, point, i) {
        var iconom1 = new GIcon();
        iconom1.iconSize = new GSize(24, 42);
        iconom1.iconAnchor = new GPoint(1, 42);
        iconom1.infoWindowAnchor = new GPoint(3, 2);
	iconom1.shadow = "icon_mini_20_shadow4.gif";
	iconom1.shadowSize = new GSize(15, 22);
        var szinesicon = new GIcon(iconom1);
	

	   var attrValue=markers[i].getAttribute(attr)*at1*mul;
	  if (attrValue <= class1*at1 )      { szinesicon.image = flag1;}
          else if (attrValue <= class2*at1 ) { szinesicon.image = flag2;}
          else if (attrValue <= class3*at1 ) { szinesicon.image = flag3;}
          else if (attrValue <= class4*at1 ) { szinesicon.image = flag4;}
          else if (attrValue <= class5*at1 ) { szinesicon.image = flag5;}
          else if (attrValue <= class6*at1 ) { szinesicon.image = flag6;}
          else if (attrValue <= class7*at1 ) { szinesicon.image = flag7;}
          else if (attrValue <= class8*at1 ) { szinesicon.image = flag8;}
          else				 { szinesicon.image = flag9;}

  	
          var marker = new GMarker(point,{ icon:szinesicon, title:Aszoveg0[i]} );
 
		  var infoTabs = new Array();

	          var point = new GLatLng(parseFloat(markers00[i].getAttribute("Lat")), parseFloat(markers00[i].getAttribute("Lng")));
 

GEvent.addListener(marker, "click", function() {
	infoTabs[infoTabs.length] = new GInfoWindowTab("Grafikon","<table><tr><td>"+htmG[i]+"</td><td> "+ htmK[i]+" "+Aszoveg1[i]+" "+Aszoveg2[i]+"</td></tr></table>" );  
          marker.openInfoWindowTabsHtml(infoTabs);
 });

          gmarkers12[i] = marker;
         return marker;
}

// *********************************************************************** // GS08marker moduleEND


    //     var marker = new GMarker(point,{ icon:szinesicon, title:Aszoveg0[i]} );


// *********************************************************************** // GS09list module:

    var srcIMG="";

function MouseOver(i){
	srcIMG=gmarkers12[i].getIcon().image;
	for(var k=0;k<9;k++){ 		if(srcIMG==flags[k]){gmarkers12[i].setImage(bflags[k]);}	}
}

function MouseOut(i){	gmarkers12[i].setImage(srcIMG);}


function InsertRowToSideBar(i){
	side_bar_html += '<a href="javascript:myclick(' + i + ')" onmouseover="MouseOver('+i+')" onmouseout="MouseOut('+i+')" title="'+Aszoveg0[i]+'" >' + " " +StrNo[i] + '</a><br />';
}
  function myclick(i) {	gmarkers12[i].openInfoWindowHtml("<table><tr><td>"+htmG[i]+"</td><td>"+htmK[i]+" "+Aszoveg1[i]+" "+Aszoveg2[i]+"</td></tr></table>");     }

function FillList(){
//var	gmarkers12dotlength=11;
	document.getElementById("side_bar").innerHTML = "";
	for(var l=0;l<gmarkers12.length;l++){
		InsertRowToSideBar(l);
	}
	document.getElementById("side_bar").innerHTML = side_bar_html;
}



// *********************************************************************** // GS09list moduleEND

    function uzemmernokseg() {      map.setZoom(10);    }
    function regio() {  map.setZoom(8);    }
    function orszag() {map.setCenter(new GLatLng(Lati, Lngi), 7);}

function kozelebb(){ map.zoomIn();map.zoomIn();map.zoomIn();}


function findLocation(address) {      document.forms[0].q.value = address;      showLocation();    }

function showLocation() {      geocoder.getLocations(document.forms[0].q.value, addAddressToMap);    }

 function addAddressToMap(response) {
      if (!response || response.Status.code != 200) {
        alert("Sajnálom, ezt a címet/helységnevet nem tudtam értelmezni!");
      } else {
        place = response.Placemark[0];
        point = new GLatLng(place.Point.coordinates[1],
                            place.Point.coordinates[0]);
        map.setCenter(point, 12);
      }
    }


</script>



  <script type="text/javascript" src="js/calendar.js"></script>

  <!-- language for the calendar -->
  <script type="text/javascript"src="js/calendar-hu8.js"></script>

  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="js/calendar-setup8.js"></script>


<?php  // include "ShowDate.php";?>



</head>
<body onload="init(); " >

 <form  onsubmit="showLocation(); return false;" method="get" action="" >

 <select name="gim" class="smallgreyBold"  >
<?php  
	$gim = $_GET['gim'];
//$ad=round($gim/86400)."d";    onChange="document.idogep.submit()"
  			switch($gim)
  			{
  				case -1:	$ad="EurLoop";  break;
  				case 0:		$ad="recent data";  break;
  				case 1:		$ad="last hour";  break;
  				case 2:		$ad="last 2 hours";   break;
  				case 3:		$ad="last 4 hours";  break;
  				case 4:		$ad="last 8 hours";   break;
  				case 5:		$ad="last day";   break;
   				case 6:		$ad="last 3 days";   break;
   				case 7:		$ad="last 12 days";   break;
			}
  			 
?>
<option value='<?php   echo $gim;?>' selected ><?php   echo $ad;?></option>
<option value="0" onClick="SetTime(0)" >recent data</option>
<option value="1" onClick="SetTime(1)" >last hour</option>
<option value="2" onClick="SetTime(2)" >last 2 hours</option>
<option value="3" onClick="SetTime(3)" >last 4 hours</option>
<option value="4" onClick="SetTime(4)" >last 8 hours</option>
<option value="5" onClick="SetTime(5)" >last day</option>
<option value="6" onClick="SetTime(6)" >last 3 days</option>
<option value="7" onClick="SetTime(7)" >last 12 days</option>


</select>


<input type="button" value="<?php  echo $Ország;?>" onclick="orszag(7)"/>
<input type="button" value="2 x Zoom" onclick="regio(8)"/> 
<input type="button" value="8 x Zoom" onclick="uzemmernokseg(10)"/> 



<a href='GIMS.php<?php   echo $sess;?>&gim=999&ido2=<?php  echo $ido2;?>'><big><b><?php  echo $RELOAD?></b></big></a>



<input type="text" name="q" value="<?php  echo $VÁROSFALUneve;?>"  class="address_input" size="20"/> 
<input type="submit" name="find" value="<?php  echo $keres;?>"/> 
</form>
 

<table border="0">
<?php  /* the left-side colour-palette for 9 classes: */?>
<tr>
<td border="0" style="font-size:70%"><BR />
<div id="class9">ertek9</div><BR /><BR /><BR />
<div id="class8">ertek8</div><BR /><BR /><BR />
<div id="class7">ertek7</div><BR /><BR /><BR />
<div id="class6">ertek6</div><BR /><BR /><BR />
<div id="class5">ertek5</div> <BR /><BR /> <BR /><BR />
<div id="class4">ertek4</div><BR /><BR /><BR />
<div id="class3">ertek3</div><BR /><BR /><BR />
<div id="class2">ertek2</div><BR /><BR /><BR />
<div id="class1">ertek1</div><BR />
</td>

<td border="0" width="15">
<img src="flags/c+4.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c+3.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c+2.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c+1.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c-0.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c-1.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c-2.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c-3.png" align="middle" alt="szinskála" width="15" height="55"/>
<img src="flags/c-4.png" align="middle" alt="szinskála" width="15" height="55"/>
</td>
<?php  /* main Google-map:  */?>
<td>
<div id="map_canvas" style="width: 800px; height: 500px"></div>
</td>
<td>
<?php  /* the right-side station side_bar:  */?>

<div id ="side_bar" style="overflow:auto;height:500px; width:100px; font-size:70% " align="left" bgcolor="#FFFFFF"  valign="top"
style="text-decoration: underline; color: #444444;">

</div>
 
</td>

</tr>
</table>
 
<form  name="idogep2" action="GIMS.php<?php   echo $sess;?>&gim=0&ido2=<?php  echo $ido2;?>" method="get"  >

<?php   include "FormInput.php";?>

<!-- ido2  calendar:  -->

			  <td valign=middle>                  
  <img src="../kepek/space.gif" width=5 height=1><input type="hidden" name="ido2" id="f_date_b" readonly="1" /></td>
 			<td valign=middle><img src="../kepek/img.gif" id="f_trigger_b" style="cursor: pointer; border: 0px solid red;" title="<?php  echo  str_replace($b, $u, $Timekivaalaszt);?>"     alt="<?php  echo  str_replace($b, $u, $Timekivaalaszt) ;?>"
      			onmouseover="this.style.background='red'" onmouseout="this.style.background=''" /></td><td valign=middle> </td>

<!-- ido2  calendar:  -->
		<script type="text/javascript">
    		Calendar.setup({
	        inputField     :    "f_date_b",     // id of the input field
    	    ifFormat       :    "%s",      // format of the input field
        	button         :    "f_trigger_b",  // trigger for the calendar (button ID)
        	align          :    "Br",           // alignment (defaults to "Bl")
        	singleClick    :    true
		});

		</script>


<?php  include "ArrowLRd.php"; 

 if($L=='hu')  $todat =date("Y.m.d",$ido2+22)." ".date("H:i",(round(($ido2)/60)*60));
 else  $todat =date("H:i",(round(($ido2)/60)*60))." ".date("d.m.Y",$ido2+22);
?>

 <input type="submit" name="dtm" onclick=" dt=dtst*300000+1000000000000; datumF(dt);" value=" <?php   echo $todat?>  "/> 

<!--span id="clock2"></span--> 


<input type="radio" name="gat" value="1" checked onClick="SetAttr(1)"/> <?php  echo $Lhőm;?> |
<input type="radio" name="gat" value="2" onClick="SetAttr(2)"/> <?php  echo $Úhőm;?> |
<input type="radio" name="gat" value="3" onClick="SetAttr(3)"/> <?php  echo $Fpont;?> |
<input type="radio" name="gat" value="4" onClick="SetAttr(4)"/> <?php  echo $grso;?> |
<input type="radio" name="gat" value="5" onClick="SetAttr(5)"/> <?php  echo $pára;?> |
<input type="radio" name="gat" value="6" onClick="SetAttr(6)"/> <?php  echo $csap;?> |
<input type="radio" name="gat" value="7" onClick="SetAttr(7)"/> <?php  echo $Vízr;?> | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</form> 



</body>
</html>



