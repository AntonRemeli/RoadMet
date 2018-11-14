

<script >


	L="<?php  echo $L; ?>";
	lgn="<?php  echo $lgn; ?>";
	pwd="<?php  echo $pwd; ?>";
	usn="<?php  echo $usn; ?>";
	pass="<?php  echo $pass; ?>";
	cty="<?php  echo $cty; ?>";
	cmd="<?php  echo $cmd; ?>";
	dd="<?php  echo $dd; ?>";
	dd1s="<?php  echo $dd1s; ?>";
	dd2s="<?php  echo $dd2s; ?>";
	ido1="<?php  echo $ido1+1; ?>";
	ido2="<?php  echo $ido2+1; ?>";
	ido1s="<?php  echo $ido1s; ?>";
	ido2s="<?php  echo $ido2s; ?>";



sess="?L="+L+"&lgn="+lgn+"&pwd="+pwd+"&usn="+usn+"&pass="+pass+"&cty="+cty+"&cmd="+cmd+"&dd="+dd+"&dd1s="+dd1s+"&dd2s="+dd2s+"&ido1="+ido1+"&ido2="+ido2+"&ido1s="+ido1s+"&ido2s="+ido2s;


p = 'index.php'+sess+'&L=';

function switchHu(){window.location = p + 'hu';}
function switchEn(){window.location = p + 'en';}
function switchFr(){window.location = p + 'fr';}
function switchDe(){window.location = p + 'de';}
function switchIt(){window.location = p + 'it';}
function switchNo(){window.location = p + 'no';}
function switchYu(){window.location = p + 'yu';}
function switchEs(){window.location = p + 'es';}
function switchNl(){window.location = p + 'nl';}
function switchHr(){window.location = p + 'hr';}
function switchPt(){window.location = p + 'pt';}
function switchSk(){window.location = p + 'sk';}
function switchCz(){window.location = p + 'cz';}
function switchSi(){window.location = p + 'si';}
function switchRo(){window.location = p + 'ro';}
function switchRu(){window.location = p + 'ru';}
function switchPl(){window.location = p + 'pl';}


</script>


   <div class="menu1" cellspacing="0" cellpadding="2" width="1%">

 <td class="header" width="1%" onmouseover="showmenu('section8')" onmouseout="hidemenu('section8')"> 
<img  src="../Pic/png/uk.png"  title="English" height="1" onClick=switchEn();>
  
   <table class="menu" id="section8"  cellpadding="0" ><tr>
<td class="menu"><img  src="../Pic/png/uk.png"  title="English"  onClick=switchEn();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/ie.png"   title="Ireland"  onClick=switchEn();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/fr.png"   title="Francais"  onClick=switchFr();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/lu.png"   title="Luxembourg"  onClick=switchFr();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/de.png"  title="Deutsch"  onClick=switchDe();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/at.png"   title="Österreich"  onClick=switchDe();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/es.png"  title="Espanol"  onClick=switchEs();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/pt.png" title="Portugues"  onClick=switchPt();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/it.png"    title="Taliano"  onClick=switchIt();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/hu.png"  title="Magyar"  onClick=switchHu();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/hr.png"  title="Hrvatski"  onClick=switchHr();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/cz.png"  title="Èeki"  onClick=switchEn();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/sk.gif" title="Slovensky" onClick=switchSk() width="28" height="18" border="1";></td></tr><tr>
<td class="menu"><img  src="../Pic/png/si.png"  title="Slovenèina"  onClick=switchEn();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/ru.gif"  title="Ruski"  onClick=switchRu()  width="28" height="18" border="1";></td></tr><tr>
<td class="menu"><img  src="../Pic/png/yu.png"  title="Srpski"  onClick=switchYu();></td></tr><tr>
<td class="menu"><img  src="../Pic/png/ro.gif"  title="Romanian"  onClick=switchEn() width="28" height="18" border="1";></td></tr><tr>
<td class="menu"><img  src="../Pic/png/no.png"   title="Norway"  onClick=switchNo();></td></tr>

   </table>
  </td> </div>
  
<?php  /*     
<img  src="../Pic/png/uk.png"  title="English"  onClick=switchEn();>
<img  src="../Pic/png/ie.png"   title="Ireland"  onClick=switchEn();>
<img  src="../Pic/png/fr.png"    title="Francais"  onClick=switchFr();>
<img  src="../Pic/png/lu.png"   title="Luxembourg"  onClick=switchFr();>
<img  src="../Pic/png/de.png"  title="Deutsch"  onClick=switchDe();>
<img  src="../Pic/png/at.png"   title="Österreich"  onClick=switchDe();>
<img  src="../Pic/png/es.png"  title="Espanol"  onClick=switchEs();>
<img  src="../Pic/png/pt.png" title="Portugues"  onClick=switchPt();>

<img  src="../Pic/png/it.png"    title="Taliano"  onClick=switchIt();>
<img  src="../Pic/png/hu.png"  title="Magyar"  onClick=switchHu();>
<img  src="../Pic/png/hr.png"  title="Hrvatski"  onClick=switchHr();>
<img  src="../Pic/png/cz.png"  title="Èeki"  onClick=switchEn();>
<img  src="../Pic/png/sk.gif" title="Slovensky" onClick=switchSk() width="28" height="18" border="1";>
<img  src="../Pic/png/si.png"  title="Slovenèina"  onClick=switchEn();>
<img  src="../Pic/png/ru.gif"  title="Ruski"  onClick=switchRu()  width="28" height="18" border="1";>
<img  src="../Pic/png/yu.png"  title="Srpski"  onClick=switchYu();>
<img  src="../Pic/png/ro.gif"  title="Romanian"  onClick=switchEn() width="28" height="18" border="1";>
<img  src="../Pic/png/no.png"   title="Norway"  onClick=switchNo();>
 */?>
