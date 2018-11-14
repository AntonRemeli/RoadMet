<?php  

//3085.1: LMsk.php Zeitwähler modifizieren

$elõre_visszaléptetés="vpred-vzad-skok";
$átlagértékek="priemerná hodnota";
$NincsAdat='<br><br>Nema upotrebljivih mernih podataka za dati period<br><br> ';


$aadi="minúty";
$aadt="10 minút";
$aadh="hodiny";
$aads="6 hodín";	
$aadn="denný";
$aadw="týdenný";
$aadm="mesaèný";
$aadq="tvrroèný";	
$aady="roèný";	

$vadi="jedna minúta";
$vadt="10 minút";
$vadh="jedna hodina";
$vads="6 hodín";	
$vadn="jeden deò";
$vadw="jeden týdeò";
$vadm="jeden mesiac";
$vadq="tvrrok";	
$vady="jeden rok";	

$Észrevétel =' Poznámka / Chyba / Otázka: ';
$Válasz='Odpoveï:';


$hibaleírás = 'opis chyby:';
$tennivaló = 'úloha:';
$munkajegyzet = 'poznámka:';
$mikor = 'kedy:';
$zárójelentés = 'mienka:';
$áttét = 'ïalia úloha:';



$Riasztás = 'Alarm:';

$szövegg = 'text (max.120 slov)';


$lokális ='lokálny alarm';

$lokálistelefonszámra = 'lokálny alarm a sms správa na èíslo:';


$Egyérvényesriasztásikritériumban = 'korektný alarm má by bodkou ukonèený.\r\posledné krytérium \"ïalie krytérium\" opciu môte doda.';

$zárójelelhelyezése  = 'zátvorky napísa';

$zárójeltörlése = 'zátvorky zmaza';

$kritériumtörlése = 'zmaza krytérium';

$Riasztásküldése = 'Odosla alarm';

$Nincsnyitottzárójel = 'Chýba zaèiatoèná zátvorka!';

$Nincsbezártzárójel = 'Cýba uzatváracie zátvorka!';

$Nemadottmegtelefonszámot = 'Nezadali ste telefónne èíslo!';

$Nemadottmegriasztásiszöveget = 'Nezadali ste text alarmu!';

$Ariasztásszövegemaximum ='Dåka alarmového textu môe by max 125 znakov!';

$AzÖnáltalmegadottriasztásikritérium = 'Alarmove krytérium je nasledovné:';

$Kívánjaelmenteni = 'Chcete uloi?';

$Kéremadjamegmilyennévre = 'Zadajte pod akým menom má by uloený alarm';

$aléghõmérséklet = 'teplota vzduchu';

$apáratartalom ='relatívna vlhkos';

$aharmatpont = 'bod topenia';

$azútpályahõmérséklet = 'templota cesty';

$avegyitényezõ = 'mnostvo soli';

$afagypont = 'templota mrznutia';

$acsapadékintenzitás = 'int. zráok ';

$avízréteg = 'voda na ceste';

$azútállapot = 'stav cesty';

$nagyobb = 'v§èia ako';

$kisebb = 'menia ako';

$egyenlõ = 'rovné';

$nemegyenlõ = 'nie je rovné';

$nagyobbvagyegyenlõ = 'v§èia alebo rovná';

$kisebbvagyegyenlõ = 'menia alebo rovná';

$értéknél = 'hodnoty ';

$nél = ' ';

$nál = ' ';

$tovább = 'ïalie';

$és = 'a';

$vagy = 'alebo';

$kritériumhozzáadása = 'doda krytérium';

$mentés = "uloit'";

$amikor ='keï';




$BepillantásAlarm = ' pohŸad do funkcie  <i> Systémové alarmy </i>   :';

$Leazoldalaljára = ' Na koniec strany ';

$alábbiállomásai = ' ïalie stanice sú pripravené k alarmom ';

$nyugtázottriasztásai =' potvrdenie alarmu ';

$Visszaazoldaltetejére ='Na zaèiatok strany';

$AzÚTMETrendszerbebeléptek ='Zalogovali ste sa na CestnaMet';


$a = 'v ';

$ikmásodpercben ='. sekundy, alarm èíslo ';

$számúriasztáslekérdezés ='';

$RIASZTÁS = 'ALARM';

$riasztásifeltételenemteljesült = ' alarmove krytérium nepasuje';




$vissza ='nazad k skupinovému stavu!';

$fel ='ARGIS zemepisna mapa!';


$Nincskiv ='Nezvolený kraj, prosím vyberte kraj!';


$service = '&stm=9500&stn=9555&st1=-4&st2=-1&tm1=1&tm2=3&zrk=&serv0=2&ns=';


$ÚTIF='ARGIS';

$térinformatikaimegjelenítés=' živé zemepisné zobrazenie';


/*
$b = array("Á" ,"á" ,"É" ,"é" ,"Í" ,"í" ,"Ó" ,"ó" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"Ú" ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"€" , ">"  ,"<"   ,"" ,"" ,"Ð" ,"ð" ,"" ,"" ,"È" ,"è" ,"Æ" ,"æ");
$u = array("Ã","Ã¡","Ã","Ã©","Ã","Ã­","Ã","Ã³","Ã","Ã¶","Å","Å","Ã","Ãº","Ã","ÃŒ","Å°","Å±","Â€","&gt;","&lt;","Å ","Å¡","Ä","Ä","Åœ","ÅŸ","Ä","Ä","Ä","Ä");
 */


$b = array("Á" ,"á" ,"Ä" ,"ä" ,"D'" ,"d'" ,"É" ,"é" ,"Í" ,"í" ,"L`" ,"l`" ,"L~" ,"l~" ,"N`" ,"n`" ,"Ó" ,"ó" ,"Ô" ,"ô" ,"Ö" ,"ö" ,"Õ" ,"õ" ,"R'" ,"r'" ,"T'" ,"t'" ,"Ú" ,"ú" ,"Ü" ,"ü" ,"Û" ,"û" ,"Ý" ,"ý" , "€" , ">"  ,"<"   ,"" ,"" ,"Ð" ,"ð" ,"" ,"" ,"È" ,"è" ,"Æ" ,"æ");

$u = array("Ã" ,"Ã¡" ,"Ã" ,"Ã€" ,"Ä" ,"Ä" ,"Ã" ,"Ã©" ,"Ã" ,"Ã­" ,"Ä¹" ,"Äº" ,"Äœ" ,"ÄŸ" ,"Å" ,"Å" ,"Ã" ,"Ã³" ,"Ã" ,"ÃŽ" ,"Ã" ,"Ã¶" ,"Ã" ,"ÃŽ" ,"Ã" ,"Ãµ" ,"Å" ,"Å" ,"Å€" ,"Å¥" ,"Ã" ,"Ãº" ,"Ã" ,"ÃŒ" ,"Ã" ,"Ã»" ,"Ã" ,"Ãœ" , "Â€" , ">"  ,"<"   ,"Å " ,"Å¡" ,"Ã" ,"Ã°" ,"Åœ" ,"ÅŸ" ,"Ã" ,"Ãš" ,"Ã" ,"ÃŠ");

$u = array("Ã" ,"Ã¡" ,"Ã" ,"Ã€" ,"Ä" ,"Ä" ,"Ã" ,"Ã©" ,"Ã" ,"Ã­" ,"Ä¹" ,"Äº" ,"Äœ" ,"ÄŸ" ,"Å" ,"Å" ,"Ã" ,"Ã³" ,"Ã" ,"Ã¶" ,"Ã" ,"Ãµ" ,"Å" ,"Å" ,"Å€" ,"Å¥" ,"Ã" ,"Ãº" ,"Ã" ,"ÃŒ" ,"Ã" ,"Ã»" ,"Ã" ,"Ãœ" , "Â€" , ">"  ,"<"   ,"Å " ,"Å¡" ,"Ã" ,"Ã°" ,"Åœ" ,"ÅŸ" ,"Ã" ,"Ãš" ,"Ã" ,"ÃŠ"); 

$helyzetkÃ©p ='zmeraný stav';


$rakozelit='priblíÅŸ';

$LhÅm='Vzduch';

$ÃhÅm='Cesta';

$Fpont="L'ad";

$pÃ¡ra="Vlhkost'";

$VÃ­zr='Voda';

$csap = "DÃ¡ÅŸd'";

$grso ='MnoÅŸstvo soli';


$OrszÃ¡g='Krajina';

$VÃROSFALUneve='meno mesta';

$keres="Hl'adaj";




$ÃºtkmszelvÃ©ny='Cesta km+m';

$Megj='PoznÃ¡mka';

$szUTMETmÃ©rÅhely='MeteohlÃ¡ska';


$Hely='LokalizÃ¡cia';

$ÃtÃ¡llapota='Stav cesty';

$Grafikon='Graficky';

$Statisztika='tatistika';

$Egyebek='Zbytok';

$sÃºt='Cesta';

$air_tempp='Temp.vzduchu';

$surf_tempp='Temp.cesty';

$surf_salt='Bod mrznutia';

$air_hum='Rel.vlhkos';

$surf_water_depthh='Vodný film';

$RELOAD = 'zapni vÅ¡etky stanice';

$cv=50;
$ccv=99;


$ln='sk'; 
$Lng='Slovensky'; 
$ARMETFÕszerver='ARMET hlavný server';



$KÉREMAZONOSÍTSAMAGÁT="Prosím identifikujte sa ! <b> System sa vráti na prvú stranu:</b> ";

$OMSZelorejelzése='predpoveï Slovenského meteorologického ústavu ';

$MarOMSZ='Radar (DWD, Obsah je licenène chránený)';

$Atartalomel='Kliknú na obrázok ';

$MaSzHoSzRad='Slovenske radarové obrázky';

if(date("m",time())>11 || date("m",time())<2){
$logingif='BuekAR2.jpg';
$BUEK=' Veselé vianoce a astný nový rok Vám praje';
} else {
$logingif='login.gif';
$BUEK='Prajeme Vám úspenú prácu';
}

$Felhasználó='Užívateľ:';

$Jelszó='Heslo:';

$Ügyeletesneve='Služba:';

$BelépésazÚTMETrendszerbe='Vstup do ARMET Systému';

$ahrefRiaszt='<a  href="<?php echo $hE; ?>/riaszt.html"><b>....................Instalácia <big><big><u> ARMET Browsers </u></big></big> zum <i><big>ALARM SYSTEM</big></i>-hez</a></b><br><br>';

$böngészõ='prehliadaè:';


$tükör='Prihlásený do ARMET SERVERA:';
$polig='ku ';
$lota='vstúpte:';



$AMp='Meteorologický portál správy ciest ';


$A=''; 
$MKht=' Portál cestnej meteorológie ';
$MKhr=' <img alt="logo" src="hr/elektromodul-promet.jpg" width="181" height="34" align="center"
    title="'.$AMp.'" border="0"> ';
$ump='<br> Slovenskej správy ciest';

$bgcolor='bgcolor="#5CCCF2"';

$aszo=' Èas vaho poèítaèa ';
$pkv='Minút neskoro !! <br>Prosíme Vás, opravte si Vá èas.';
$psv='Minút skôr !! <br>Prosíme Vás, opravte si Vá èas.';

$scrvar='
var dayarray=new Array("NedeŸa","Pondelok","Utorok","Streda","tvrtok","Piatok","Sobota")
var montharray=new Array("Január", "Február", "Marec", "Apríl", "Máj", "Jún", "Júl", "August", "September", "Október", "November", "December")
var aszo="Hodiny Váho poèítaèa ukazujú"
var pkv="Minút neskoro !! <br>Prosíme Vás, opravte si Vá èas."
var psv="Minút skôr !! <br>Prosíme Vás, opravte si Vá èas."
';

$scrdat='
var cdate=" "+rok+" "+mesiac+" "+deò+", "+deò+", "+hodina+":"+minuta+":"+sekunda+" <br>UnixTime (sec von 1970): "+ido+"  "+idoF+" </div>"
';


$FÕszerver='Hlavný server';


$Szerver='Server';

$státusz='Status';

$TÜKÖRszerver='zrkadlový server';

$POLIGLOTAszerver='POLIGLOTA server';

$Felhasználó='Meno';

$Terület='Teritórium';


$Ittvm='Tu zmeníte oblas';

$OMSZadatai='Dáta Slovenského meteorologického ústavu';

$MarWZ='Radar / Európska zráková predpoveï';

$Ma5HT='';

$Ma5FH='';

$KiLép='Výstup z ARMET Systému';

$OMSZ='SHMU Meteogram';

$EMSel='Predpoveï poèasia z centrály';

$EMSEWS='';

$Idõképek='Obrazy o poèasí';

$Kilépés='Výstup';

$Riasztás='Alarm';


$Oldalfrissítés='Obnovenie dát';

$Raadas='<i> Dodatok : </i> Najnovie údaje ARMET meteostaníc:';

$Bepill='NáhŸad k  <i>  E x p e r t e n  S y s t é m u </i> :';


$Nincsmérésiadat='iadne údaje';

$állomáslma='Najnovie údaje meteostanice';

$Grafikonmka='Klikni na oblas k vstupu ku grafom';

$Táblázatmkd='Klikni na oblas k vstupu k tabuŸke';

$Ptapáratartalom='Rel = %  Rel. vlhkos';

$Lhõléghõmérséklet='Tvz = °C Teplota vzduchu';

$Thõtalajhõmérséklet='Hlt = °C Håbková teplota';

$Vtévegyitényezõ='Sol = gr/m2 Koncent. soli';

$Vrvvízréteg='Vvf = mm Výka vodného filmu';

$Hptharmatpont='Ros = °C Rosný bod';

$Uhõútpályahõm='Tce = °C Tepl.cesty.';

$Fptfagypont='Bmr = °C Bod mrznutia';

$UpáÚtpályaállapot='Sce = Stav cesty';

$Csicsapadék='Inz = mm/h Intenzita zráok';

$Táptápfeszültség='Nap = Napätie';

$CstCsapadéktipus='Dru = Druh zráok';



$scroll='	
 <b><i></b> </i>
&nbsp;&nbsp;&nbsp;
Zdravíme naich uívateŸov, ARMET webová stránka je trvalo obnovovaná. 
<b> Vae pripomienky k systému ARMET s ochotou príjmeme !</b><br>
<b> Od roku 2004 vyvýja EurMet s.r.o.  priebene EXPERTEN SYSTEM stavu povrchu ciest. 
Naim strategickým cieŸom je poskytova v Európe spoŸahlivý cestný meteorologický systém.    </b>
';


$scroll20080519='	
 <b><i> Pondelok, 1 Apríl 2010 ,</b> </i>
&nbsp;&nbsp;&nbsp;
Zdravíme naich uívateŸov, ARMET webová stránka je trvalo obnovovaná. 
<b> Vae pripomienky k systému ARMET s ochotou príjmeme !</b><br>
<b> Od roku 2001 vyvýja EurMet GmbH  priebene EXPERTEN SYSTEM stavu povrchu ciest. 
Naim strategickým cieŸom je poskytova v Európe spoŸahlivý cestný meteorologický systém.    </b>
';



$Grafikonmegtek='Grafický prehŸad';

$Táblázatmegtek='TabuŸkový prehŸad';

$állomáslegfr='Najnovie údaje meteostanice';

$Táblázatmegteknyilacskára='K tabuŸkovému prehŸadu poui ípku';

$TESCOkamera='K náhŸadu TESCO webkamery a tabuŸkového prehŸadu ';

$TESCOkörhídiBoreas='TESCO Webobrázky-tabuŸka';

$állomáswebkamerájának='Boreas meteostanice:';

$ötpercesgyakoriságúhelyzetképtáblázata='';



$Legfrisebbmérésiadatok='prehŸad najnovích údajov na konci tabuŸky: >>';

$Visszatáblázattetejére =' Návrat k tabuŸke ';

$Visszanapelejére =' Návrat 24 hodín ';


$HIBALISTA='Zoznam chýb';

$REKLAMÁCIÓK='REKLAMÁCIE';

$klímaterület='/ Klimatické pásmo:';

$Csoportstátusz='Skupinový<br> status';

$Mérésgrafikon='Nameraný<br> graf';

$Méréstáblázat="Nameraná<br> tabul'ka";

$Állomásstatisztika='tatistika<br>stanice';

$Riasztásállítása='Nastavenie<br> alarmov';

$Hibajelentés='Chybové<br> hlásenie';



$Idõ=' čas, datum';

$Páratart='relatívna<br>vlhkos(%)';

$Harmatpontt='rosný <br>bod(°°C)';

$Levegõhõm='teplota<br>vzduchu(°°C)';

$Útpályahõm='teplota<br>cesty(°°C)';

$Talajhõm='håbková teplota (°°C)';

$Fagypont='bod mrznutia(°°C) ';

$Vegyit='chemický<br>faktor<br>g/m<small><sup>2</sup></small>';

$Útállapot='stav cesty';

$Csapadék='zráky<br>(mm/h)';

$Csapadéktipus='druh<br>zráok ';

$Vízréteg='vodný film<br>(mm)';

$Táp='napätie (V) ';



$TápVw='Napätie';

$Relparaw='Rel.vlhkos';

$Fagypontw='Bod mrznutia';

$Úthõmw='Tepl.cesty.';

$Léghõmw='Tepl.vzduchu.';

$Harmatpontw='Rosný bod';

$Csapadékmmhw='Zráky';

$Vízrétegmmdw='Vodný film';


//$Regionálisáttekintés='Regionálny prehŸad';

$Szervízmunkák='Servisné úlohy ...  ';

//$Teljesítésigazolás='Potvrdi výkon';

//$Állomástáblázat='PrehŸad staníc';




$Adat='';

$listázásdátum='Kalendár';

$tól='';

$Kezdõidõválasztása='Od èasu';

$Záróidõkiválasztása='Do èasu';

$pppdátum='... dátum';

$ig='';



$kepeklogo1gif=' src="sk/vizitka2.jpg"  ';

$wh01=' width="77" height="22" ';

$httpkozuthu='http://';




$i="'";

$httpakmimethu='http://www.shmu.sk/sk/?page=1&id=meteo_gpredpoved_sk';
$httpmethu='http://www.shmu.sk/sk/?page=1&id=meteo_num_mgram';

$kepekbuttonsbutton_omszgif='<img src="./sk/SHMUlogo.JPG"';

$zaglif='onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape(\'<img src=./sk/shmu.jpg>\')"';


$SATphp='http://www.shmu.sk/sk/?page=1&id=meteo_druzica';

$Radarphp='http://www.shmu.sk/sk/?page=1&id=meteo_radar#tab';

//$radarIMG='   width="222" height="148"  onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=http://vrijeme.hr/bradar-anim.gif>'.$i.')"';

//$radarIMG=' <img name="slikar" src="http://www.shmu.sk/img/skmap2b2.jpg" width="333" height="148"  onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=http://www.shmu.sk/img/skmap2b2.jpg>'.$i.')"';


$radarIMG='<img name="slikar" src="http://vrijeme.hr/bradar.gif" onload="setTimeout('.$i.'ot()'.$i.', seq)" onError="animax()"   width="222" height="148"
title="'.$MarWZ.'" alt="'.$MarWZ.'" onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img name=slikar2 src=http://vrijeme.hr/bradar.gif>'.$i.')"';



$K1img='';

$K2img='';

$köd = 'Hmla';
$led='Stav cesty, mokro, klzko (èervena)';


$TápV='Napätie(V)';

$Relpara='Rel.vlhkos(%)';

//$Fagypont='Bod mrznutia(°°C)';   ///2976:  doppeldefinition

$Úthõm='Tepl.cesty(°°C)';

$Léghõm='Tepl.vzduchu(°°C)';

$Harmatpont="Rel.vlhkost'";

$Csapadékmmh='Zrázky(mm/h)';

$Vízrétegmmd='Vodný film(mm/10)';

$ÚtállapoNAPÓRA='Stav cesty | Deò/Hodina';



$Rum=' Hodina:Min  %vlhkos  Ros.bod. Tep.vzduchu Tepl.cesty Håbk.tepl. Bod mrznutia.  Sol Stav cesty Dáï Vodný film.';



$service = '&stm=9500&stn=9555&st1=-4&st2=-1&tm1=1&tm2=3&zrk=&serv0=2&ns=';

$SzervizLista = 'Servisný prehŸad';

$állomásszám = 'zaèiatoèná stanica';

$kezdöállomás ='koneèná stanica';

$alsóhibakód ='dolný kod chyby';

$felsöhibakód ='horný kód chyby';

$oszlopszélesség ='írka ståpca';

$alsószervizkód ='dolný servisný kód';

$felsõszervizkód ='horný servisný kód';

$régiószürö ='regionálny filter';

$nyomtatható ='oblas tlaèe';

$alsóköltség ='dolné náklady';

$felsõköltség ='horné náklady';

$kezdöidö ='zaèiatok cesty';

$záróidö ='koniec cesty';

$hibaszürö ='hnn chybový filter ';
$szoftverfejlesztésnek =' alebo 0 pre SW korekciu';




$MeghibásodottUTMETállomások='Vypnuté meteohlásky';

$óra='hodina';

$hét='týdeò';


$Tervezettszervizbevetések='Plánovaný servis';

$helyszín='miesto';

$nyomtassKi='tlaè!';


$Jelentésazelvégzettszervizmunkákról='Správa o servisnom zásahu.';


$ÉszrevételHibabejelentés='Poznámka / Chybové hládenie';

$Név='Meno';

$Megyeváros='Kraj / miesto';

$Bejelentésjellege='Druh reklamácie';

$Kéremválaszon='Prosím vyberte';

$Weboldalhiba='Chyba web strany';

$Állomáshiba='Chyba meteohlásky';

$Észrevételkérdés='Poznámka-otázka';

$Kritikajavaslat='Kritika, návrh';

$Elérhetõség='Kontakt';

$Észrevételrészletesleírása='Detialý opis reklamácie';

$Elküld='Odoli';

$Törlés='Zma';


$Megye='Kraj';

$Datum='Dátum';

$Felhasználóihibajelentés='Chyba užívateľa';

$UTMETválasz='Odpoveï správcu';



$Állomásszám='Èíslo meteohlásky';

$Helység='Miesto';

$Tipus='Typ';

$Helyszín='Miesto';

$Földrajziszélesség='Zemepisná írka';
	
$Földrajzihosszúság='Zemepisná dåka';

$Klima='Podnebie';

$MagyarKözútKht='Slovenské cesty';

$Mérnökség='Správa ciest';

$ISzhelység='PSÈ';

$Címutca='Ulica';

$Telefon='Telefón';

$Fax='Fax';

$EMail='E-Mail';

$Fagyosnapok='Dni pod bodom mrazu';

$között='';

$Mérésiidõ='Dátum';

$Léghõmérséklet='Templota vzduchu';

$Útpályahõmérséklet='Templota cesty';

$Átlaghõmérséklet='Priemerná teplota vzduchu';

$mérésiadatalapján='vzahuje sa k nameraným údajom';

$Télinapok='Zimné dni od';



$Napiátlaghõmérséklet='Denný priemer ';

$Átlagléghõmérséklet='Vzduch (°C)';
$Minléghõmérséklet='Min';
$Maxléghõmérséklet='Max';
$Difléghõmérséklet='Dif';

$Átlagútpályahõmérséklet='Cesta (°C)';
$Minútpályahõmérséklet='Min';
$Maxútpályahõmérséklet='Max';
$Difútpályahõmérséklet='Dif';

$Átlagpaara='Vlhkosť (%)';

$Átlagcsapadeek='Zrážky (mm)';

$Darab='Číslo merania';

$Haviátlaghõmérséklet='Štatistika';

$average='Priemer';

$max='Max';

$min='Min';

$maxNo='Číslo maxima';

$minNo='Číslo minima';


$Azállomásrendelkezésreállása='Pripravenos stanice';

$intervallumban='';

$Kimaradáskezdete='Zaèiatok výpadku';

$Kimaradásvége='Koniec výpadku';

$Kimaradástartama='Trvanie výpadku';

$Összóra='Spolu hodiny';

$Teljesítettóraszázalék='funkèné hodiny (percentuálne )';

$Teljesítettmérésvártadat='Realizované merania / oèakávane merania';

$mérés='merané od oèakávanych  ';

$vártadatból='';



$TESCOfeliratra ='Klikni na snímok pre zobrazenie vetkých fotiek';

$TESCOkamera ='Najnovie fotky z cesty:';

$TESCOvisszalapozás ='pre zobrazenie starích fotiek klikni "<< vzad " napis';

$visszalapozás ='<< vzad || ';

$TESCOfrissítéséhez ='Tu klikni pre obnovenie fotiek';

$képek ='fotky od';

$tõl = '   -  do ';

$ig = '';

$Válaszol='Odpoveï';


$datemdH[$pp]=$ppdy[$pp].'.'.$ppmt[$pp].' '.$pphr[$pp].':'.$ppmi[$pp];
$dateYmdH[$pp]=$ppdy[$pp].' '.$ppmt[$pp].' '.$ppyr[$pp].' '.$pphr[$pp].':'.$ppmi[$pp];


$date0YmdHi=$pp0dy.'.'.$pp0mt.'.'.$pp0yr.' '.$pp0hr.':'.$pp0mi;

$date1Hi=$pp1hr.':'.$pp1mi;

$TESCOújabb ='pre zobrazenie novích fotiek klikni "napred >> " napis';

$elõrelapozás =' || napred >> ';



$todotx='Je plánovaná kontrola meteohlásky spojená s kalibráciou. Prosíme o úèas èlena správy ciest,';	
$todutx=' pre zabezpeèenie jazdného pruhu. Plánované na:';
$diagtx='Funkèná meteorologická stanica pre cestnú dopravu. ';	






$sTdsc[1] ='</big>Plánovaný servis<big>';
$sTdsc[2] ='Odhadovaný stav meteohlásky ';
$sTdsc[3] ='</big>Kalibraèný formulár<big> ';
$sTdsc[4] ='Záruèný list ';
$sTdsc[5] ='';

$sTdscA ='   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><big><big><big><big>';
$sTdscB =' </b></big></big></big></big>	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  broj: <big><big><b>'. $_GET['svid'] .' </b></big></big> ';

$szerviz ='servis';
$számú ='';
$Felkérésbe ='Servisný zásah';

$helyszínn ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
mjesto: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$útkmsz ='cesta,km+m poz.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$földrajzi ='zemepisná åkaa i írka,&nbsp;&nbsp;';

$XY ='X-Y koordinate,&nbsp;&nbsp;&nbsp;&nbsp;';
$klímazóna ='klimatska zóna:';

//$területileg ='teritorijalno nadljena cestarina';
//$regionális ='regionalna centrala';
$területileg ='';
$regionális ='Užívateľ';
$cím ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  adresa: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

$kalibrálási[1] = ''; 
$kalibrálási[2] = ''; 
$kalibrálási[3] = 'kalibraèný postup: Boreas1 automaticka kalibraèna stanica, UTMET dátová banka, 2 a 20g/m2 roztok soli.'; 
$kalibrálási[4] = 'RoadMet meteohláska intalovana servisným pertnerom má 1rok záruku na komponenty.'; 
 
$megfelelõ[1] =''; 
$megfelelõ[2] ='';
$megfelelõ[3] ='(keï je správne kalibrovaná sonda zobrazí sa bod mrznutia -10°C,  pri zamraèenom bez veternom poèasí, templota vzduchu a cestnej sondy súveŸmi blízke)';   
$megfelelõ[4] ='(v prípade ak sa vyskytne chyba na senzoroch tie budú vymenené bezplatne. Vlasník je zodpovedný za profesionálnu montá, demontá senzorov a preberá transportné náklady.)';   



$qstxt0[1] ='Prosíme o kontrolu Boreas meteohlásky';
$qstxt0[2] ='Plánovaná je konrola Boreas meteohlásky';
$qstxt0[3] ='Plánovaná je kalibrácia Boreas meteohlásky';
$qstxt0[4] ='Plánovaná je intalácia Boreas meteohlásky';

$qtodo0[4] = 'Prosíme o prítomnos zamestnanca správy ciest na zabezpeèenie dopravy pri servisnom zásahu:';
$qtodo0[4] = 'Prosíme o prítomnos zamestnanca správy ciest na zabezpeèenie dopravy pri servisnom zásahu:';
$qtodo0[4] = 'Prosíme o prítomnos zamestnanca správy ciest na zabezpeèenie dopravy pri servisnom zásahu:';
$qtodo0[4] = 'Prosíme o prítomnos zamestnanca správy ciest na zabezpeèenie dopravy pri servisnom zásahu:';



$Felkérés ='Poiadavka:';
$Hibaleírás[1] ='Prosíme:';
$Hibaleírás[2] ='Opis úlohy:';
$Hibaleírás[3] ='Opis poruchy:';
$Hibaleírás[4] ='Opis práce:';
$Zárójelentés ='Vyhodnotenie';

$hívószám ='&nbsp; tel.èíslo:&nbsp;';
$vezérlõ = 'ovládací modul:';
$hygrotemp ='&nbsp;hygrotemp:&nbsp; ';
$modem ='&nbsp;modem:&nbsp;';
$útszonda ='cestná sonda:';
$csapadékmérõ ='&nbsp;zrákomer:&nbsp;';
$Állomásstátusz='Stav meteostanice';
$kezdeményezte ='Zásah vyiadal:';

$tanúsítja[1] = ' Dotaz vyiadal:';
$tanúsítja[2] = ' Zásah vyiadal:';
$tanúsítja[3] = ' Kalibrácia potvrdená:';
$tanúsítja[4] = ' Záruka potvrdená:';
$végezte[1] ='Úloha splnená:';
$végezte[2] ='Vykonal meranie:';
$végezte[3] ='Vykonal meranie:';
$végezte[4] ='Intaláciu vykonal:';

$nyugtázza ='Splnenie úlohy potvrdzuje:';
$Aláírás ='Podpis:';
$Kelt ='Dátum vyhotovenia:';
$tstmp = date("d.m.Y",strtotime($rowS[kada] . " GMT")-3600);









?>
