<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Képek</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="omsz, mûhold, radar, égkép, villám, hõmérséklet, front, meteorologia, met">
<style type="text/css" media="all">
  @import "egykep.css";
</style>
<script language="JavaScript"><!--

function findObj(n, d){
  var p,i,x;
  if(!d) d=document;
  if((p=n.indexOf("?"))>0&&parent.frames.length){ d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n];
  for(i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n);
  return x;
}

var kf=Array("20091010_1945.jpg","20091010_1930.jpg","20091010_1915.jpg","20091010_1900.jpg","20091010_1845.jpg","20091010_1830.jpg","20091010_1815.jpg","20091010_1800.jpg","20091010_1745.jpg","20091010_1730.jpg","20091010_1715.jpg","20091010_1700.jpg");
var fd=Array("Frissítve: 2009. október 10. 21:55 (19:55 UTC)","Frissítve: 2009. október 10. 21:40 (19:40 UTC)","Frissítve: 2009. október 10. 21:25 (19:25 UTC)","Frissítve: 2009. október 10. 21:10 (19:10 UTC)","Frissítve: 2009. október 10. 20:55 (18:55 UTC)","Frissítve: 2009. október 10. 20:40 (18:40 UTC)","Frissítve: 2009. október 10. 20:25 (18:25 UTC)","Frissítve: 2009. október 10. 20:10 (18:10 UTC)","Frissítve: 2009. október 10. 19:55 (17:55 UTC)","Frissítve: 2009. október 10. 19:40 (17:40 UTC)","Frissítve: 2009. október 10. 19:25 (17:25 UTC)","Frissítve: 2009. október 10. 19:10 (17:10 UTC)");
var nImg=kf.length, cImg=0, curImg=0, ply=0;
var tmr=null, delayTime=500, dlymul=1, dir=-1;
var Imgs=new Array(nImg);

function doneload(){ cImg++; /*var o=findObj("statusz"); if(o) o.innerHTML="("+nImg+"/"+cImg+")";*/ gotoImg(curImg);}

if(curImg>nImg-1){ if((curImg=nImg-1)<0) curImg=0;}
for(i=nImg,j=curImg;i>0;i--){ Imgs[j]=new Image(); Imgs[j].onload=doneload; Imgs[j].src="http://met.hu/img/brod/brod"+kf[j]; j=(j+1)%nImg;}

function gotoImg(i,s){if(typeof s=="undefined") s=1; if(Imgs[curImg=i].complete){ if(s) stopLoop(); var o=findObj("loopimg"); if(o){ o.src=Imgs[i].src; o=findObj("frissdatum"); if(o) o.innerHTML=fd[i]; }}}

function stepImg(d,s){if(typeof s=="undefined") s=1; c=curImg+(d*dir); if(c<0) c=nImg-1; if(c<0||c>=nImg) c=0; dlymul=((c==0&&dir<0)||(c==nImg-1&&dir>0))?4:1; gotoImg(c,s);}

function playLoop(){
	if(tmr){ clearTimeout(tmr); tmr=null; }
	stepImg(1,0);
	tmr=setTimeout("playLoop()", delayTime*dlymul);
}
function startLoop(t){ if(t>0) delayTime=t; dlymul=1; playLoop();}
function stopLoop(){ if(tmr){ clearTimeout(tmr); tmr=null; } var o=findObj("selectlst"); if(o) o.selectedIndex=curImg;}

var rftime=3600000, rf="http://met.hu/kepek/index.php?id=brod&mod=&mpx=1280";
function pgreload(){ document.location.href=rf+""+((tmr)?("&lp="+delayTime):"&ci="+curImg); }
function pgonload(){
	setTimeout("pgreload()", rftime); if(ply) startLoop(ply); else gotoImg(curImg);
}
//-->
</script>
</head>
<body onload="pgonload()">

<table class='kulso' cellspacing=0 cellpadding=0>
	<tr><td><div class='time' title='UTC: Egyezményes Világidõ, HLT: Magyarországi idõ= télen+1, nyáron +2 óra'><FORM name='WSTC'><input size='150' name='WSClock' class='pontos_ido'></FORM><SCRIPT language=javascript>
// Web Server Time Script designed by szfo ver2
// Last updated: 2007-05-23

var servertime=1255204518000;
var localtime=new Date();
var localms=localtime.getTime();
var timediff=servertime-localms;
var napok = new Array();
napok[0]="vasárnap";
napok[1]="hétfõ";
napok[2]="kedd";
napok[3]="szerda";
napok[4]="csütörtök";
napok[5]="péntek";
napok[6]="szombat";
var honapok = new Array();
honapok[0]="január";
honapok[1]="február";
honapok[2]="március";
honapok[3]="április";
honapok[4]="május";
honapok[5]="június";
honapok[6]="július";
honapok[7]="augusztus";
honapok[8]="szeptember";
honapok[9]="október";
honapok[10]="november";
honapok[11]="december";
function show()
{
var localtime=new Date();
var localms=localtime.getTime();
var komp=localms+timediff;
var Cdate=new Date(komp);
var hours=Cdate.getUTCHours()
var minutes=Cdate.getUTCMinutes()
var seconds=Cdate.getUTCSeconds()
var hlthour=Cdate.getUTCHours()+2;
var year=Cdate.getFullYear();
var month=honapok[Cdate.getMonth()];
var day=Cdate.getDate();
var fullday=napok[Cdate.getDay()];
if (hlthour==24) hlthour=0;
if (hlthour==25) hlthour=1;
if (hours<=9)
hours="0"+hours;
if (hlthour<=9)
hlthour="0"+hlthour;
if (minutes<=9)
minutes="0"+minutes;
if (seconds<=9)
seconds="0"+seconds;
document.WSTC.WSClock.value=year+". "+month+" "+day+". "+fullday+"   Magyarországi idõ: "+hlthour+":"+minutes+":"+seconds+" | Egyezményes idõ: "+hours+":"+minutes+":"+seconds+" UTC"
setTimeout("show()",1000)
}
show()
//-->
</SCRIPT></div><div class='navtop'>
		<ul>
			<li><a href='/info/'>Elérhetõségek</a></li>
			<li><a href='/contacts/'>Kapcsolatok</a></li>
			<li><a href='/sidemap/'>Oldaltérkép</a></li>
		</ul>
	</div></td></tr>
	<tr>
		<td>
			<table cellspacing=0 cellpadding=0 class='cont' width='100%' border=0>
				<tr><td class='cont-header' colspan='100%'><a href='/index.php' title=' Fõoldal: http://www.met.hu/ '><div class='methu'></div></a></td></tr>				
        <tr>
          <td colspan='100%'><div class='navbg'>
            <div class='kezelo'>
              <div class='vissza'><a href='javascript:stepImg(-1)' title=' Elõzõ produktum '><img align='absmiddle' src='/images/ikon/fpr.gif' border=0></a> </div>
              <div class='valaszt'>
	<select id='selectlst' name='files' onchange='gotoImg(this.selectedIndex)' title='2009-10-10 19:45 UTC'><option value='0' selected title='2009-10-10 19:45 UTC'> 2009. október 10. 21:45 (19:45 UTC)</option><option value='1' title='2009-10-10 19:30 UTC'> 2009. október 10. 21:30 (19:30 UTC)</option><option value='2' title='2009-10-10 19:15 UTC'> 2009. október 10. 21:15 (19:15 UTC)</option><option value='3' title='2009-10-10 19:00 UTC'> 2009. október 10. 21:00 (19:00 UTC)</option><option value='4' title='2009-10-10 18:45 UTC'> 2009. október 10. 20:45 (18:45 UTC)</option><option value='5' title='2009-10-10 18:30 UTC'> 2009. október 10. 20:30 (18:30 UTC)</option><option value='6' title='2009-10-10 18:15 UTC'> 2009. október 10. 20:15 (18:15 UTC)</option><option value='7' title='2009-10-10 18:00 UTC'> 2009. október 10. 20:00 (18:00 UTC)</option><option value='8' title='2009-10-10 17:45 UTC'> 2009. október 10. 19:45 (17:45 UTC)</option><option value='9' title='2009-10-10 17:30 UTC'> 2009. október 10. 19:30 (17:30 UTC)</option><option value='10' title='2009-10-10 17:15 UTC'> 2009. október 10. 19:15 (17:15 UTC)</option><option value='11' title='2009-10-10 17:00 UTC'> 2009. október 10. 19:00 (17:00 UTC)</option>
	</select></div>
              <div class='elore'><a href='javascript:stepImg(1)' title=' Következõ produktum '><img align='absmiddle' src='/images/ikon/fne.gif' border=0></a>    <a href='javascript:stopLoop()' title=' Hurokfilm lejátszás megállítása '><img align='absmiddle' src='/images/ikon/stop.gif' border=0></a> <a href='javascript:startLoop(1000)' title=' Hurokfilm lejátszás (lassú) '><img align='absmiddle' src='/images/ikon/loop1.gif' border=0></a> <a href='javascript:startLoop(500)' title=' Hurokfilm lejátszás (közepes) '><img align='absmiddle' src='/images/ikon/loop2.gif' border=0></a> <a href='javascript:startLoop(250)' title=' Hurokfilm lejátszás (gyors) '><img align='absmiddle' src='/images/ikon/loop3.gif' border=0></a> </div>
              <div id='statusz'></div>
            </div>
            <div class='nav'>
              <ul>
                <li><a href='http://met.hu/kepek/download.php?l=doc&amp;f=Radar_ismerteto.pdf' title=' Ismertetõ [~800 Kbyte] ' target='_blank'><img src='/images/ikon/info.gif' border=0></a></li>
                <li>
	<select name='vmi' onchange="window.open(this.value,'_parent')" title=' Képek '><option DISABLE> -Képlista-</option>
      <option value='index.php?id=brod' selected title='brod'> Radar térkép (Magyarország)</option>
      <option value='index.php?id=blhh' title='blhh'> Villám térkép (Magyarország)</option>
      <option value='index.php?id=bMa9' title='bMa9'> Mûhold térkép (infra felhõkép)</option>
      <option value='index.php?id=BMHc' title='BMHc'> Mûhold térkép (nappali kompozit)</option>
      <option value='index.php?id=mhTh' title='mhTh'> Hõmérséklet térkép (Magyarország)</option>
      <option value='index.php?id=pdhd' title='pdhd'> Frontvonalak (Európa)</option>
      <option value='index.php?id=bybp' title='bybp'> Égkép (Budapest)</option>
      <option value='index.php?id=bykk' title='bykk'> Égkép (Kékestetõ)</option>
      <option value='index.php?id=bybg' title='bybg'> Égkép (Balatongyörök)</option>
      <option value='index.php?id=bysi' title='bysi'> Égkép (Siófok)</option>
      <option value='index.php?id=bykv' title='bykv'> Égkép (Kaposvár)</option>
      <option value='index.php?id=byud' title='byud'> Égkép (Szeged)</option>
      <option value='index.php?id=mmTb' title='mmTb'> Hõmérséklet térkép (elõrejelzés)</option>
      <option value='index.php?id=mmBa' title='mmBa'> Csapadék térkép (elõrejelzés)</option>
      <option value='index.php?id=mmCc' title='mmCc'> Szél térkép (elõrejelzés)</option>
      <option value='index.php?id=mmBw' title='mmBw'> Balatoni szél térkép (elõrejelzés)</option>
      <option value='index.php?id=mmVa' title='mmVa'> Látástávolság térkép (elõrejelzés)</option>
      <option value='index.php?id=fuhm' title='fuhm'> UV-B sugárzás térkép (elõrejelzés)</option>
      <option value='index.php?id=fmes' title='fmes'> 24 órás európai (elõrejelzés)</option>
	</select></li>
                <li>
	<select name='csops' onchange="window.open(this.value,'_parent');" title=' Csoportok '><option DISABLE> -Csoportok-</option>
      <option value='index.php?mod=tablo&mpx=1280&id=brod' title='tablo'> Tabló </option>
      <option value='index.php?mod=&mpx=1280&id=brod' title=''> Egyedi kép </option>
      <option value='index.php?mod=muhold&mpx=1280' title='muhold'> Mûhold képek </option>
      <option value='index.php?mod=egkep&mpx=1280' title='egkep'> Égképek </option>
      <option value='index.php?mod=elorejelzes&mpx=1280' title='elorejelzes'> Elõrejelzések </option>
      <option value='index.php?mod=frisskepek&mpx=1280' title='frisskepek'> Legfrissebb képek </option>
	</select></li>
              </ul>
            </div></div></div>
          </div></td>
        </tr>
        <tr><td colspan=2 class='frame' id='loopdiv'><img id='loopimg' src='/images/ikon/loading.gif'/></td></tr>
        <tr class='lrw'><td>  <span id='frissdatum'></span></td><td align='right'>[brod]  </td></tr>
			</table>
		</td>
	</tr><tr>
		<td class='footer' valign='top' align='center'><p></p>
			2009 Országos Meteorológiai Szolgálat    <a href='/admin/descript/ismerteto.php?tema=copyright_ism' class='menusarga' target='_blank'><u>copyright</u></a><BR>
			Készült: OMSZ Távközlési és Informatikai Fõosztály, 2009
			<br>Webmester:&nbsp;<a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#119;&#101;&#98;&#109;&#97;&#115;&#116;&#101;&#114;&#64;&#109;&#101;&#116;&#46;&#104;&#117;&#63;&#115;&#117;&#98;&#106;&#101;&#99;&#116;&#61;&#87;&#101;&#98;&#111;&#108;&#100;&#97;&#108;&#108;&#97;&#108;&#32;&#107;&#97;&#112;&#99;&#115;&#111;&#108;&#97;&#116;&#111;&#115;&#32;&#233;&#115;&#122;&#114;&#101;&#118;&#233;&#116;&#101;&#108;&#101;&#107;' class='menu'>&#119;&#101;&#98;&#109;&#97;&#115;&#116;&#101;&#114;&#64;&#109;&#101;&#116;&#46;&#104;&#117;</a></td>
	</tr>
	<tr>
		<td class='footer' colspan='100%'>
			<table width='100%' cellspacing=0 cellpadding=6>
				<tr>
					<td align=left valign='top' class='footer' width='30%'>
						<a href='/omsz.php?almenu_id=info&amp;pid=info_main' class='footer'>1024 Budapest, Kitaibel Pál u. 1.<BR>
						Postacím:1525 Budapest,<BR>
						Pf. 38. </a><BR>
					</td>
					<td align='center' width='40%'><a href='http://met.hu/omsz.php?almenu_id=omsz&amp;pid=about'><img border=0 src='http://met.hu/images/hp/omszlogo.gif' width=80 height=38 alt='omsz logo'></a></td>
					<td valign='top' align='right' class='footer' width='30%'>
						<a href='/info/' class='menu'>Elérhetõségek:</a><br>
						Telefon: (1) 346-4600<BR>
						Fax: (1) 346-4669</td>
				</tr>
			</table>
		</td>
	</tr></table></body>
</html>
