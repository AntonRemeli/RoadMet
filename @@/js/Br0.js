function TickTack(){
// delay = document.forms[0].ora.value * 3600 + document.forms[0].nap.value * 3600 * 24
delay =  900 ;
datum = new Date();
ido = datum.getTime();
ido = (ido-ido%1000)/1000;
ido = ido-delay;
ido = ido-ido%900;
wstd = 2;  /// dva sata zuri leti, a jedan zimi
vrefin = ido-3600-wstd*3600;
}
TickTack();

 ota();


// OMSZactual:

function ota(){
TickTack();
idos = vrefin;
getymi();
if (document.slikar!=null)
{//			http://193.6.202.24/img/brod//brod20080403_1130.jpg
//  http://193.6.202.24/img/brod/brod20091008_1945.jpg
//  http://193.6.202.24/img/brod/brod20091010_0600.jpg  Nincs jogosultsága a lap megtekintésére. Lehet, hogy a megadott hitelesíto adatok nem teszik lehetové az Ön számára a könyvtár vagy a lap megtekintését.
document.slikar.src  = "http://193.6.202.24/img/brod/brod"+ymi1+"_"+ymi2+".jpg";
document.slikar2.src  = "http://193.6.202.24/img/brod/brod"+ymi1+"_"+ymi2+".jpg";
}
}



idos = vrefin;

m = 1;
Phval = 390;


function ot(){

if (m > 3)  otp(); else
if(Phval > 383 ) otr(); else
 otp();
}



/*
// OMSZactual:

function otr(){

if(m > 3){m=0}

if (idos > vrefin-1200) seq= 13900; else
seq = 900;

getymi();

document.slikar.src = "http://193.6.202.24/img/brod/brod"+ymi1+"_"+ymi2+".jpg";
document.slikar2.src = "http://193.6.202.24/img/brod/brod"+ymi1+"_"+ymi2+".jpg";
idos += 900;
if(idos > vrefin){ TickTack(); idos=vrefin-9800; Phval = 390; m += 1};
}
*/

// WZprognosis:

function otp(){

if(Phval > 383 ){Phval = 0; m=1}

Phval += ((Phval < 180)? 6 : 12);

if (Phval == 06) seq= 8900; else
if (Phval < 36) seq= 1900; else
if (Phval < 166) seq= 600; else
seq = 200;
Phva = ((Phval < 9)? "0" : "")+Phval;
document.slikar.src = "http://www.wetterzentrale.de/pics/Rtavn"+Phva+"4.png";
document.slikar2.src = "http://www.wetterzentrale.de/pics/Rtavn"+Phva+"4.png";
}

function otr(){

if(Phvar > 191 ){Phvar = 0; m=4}

Phvar += ((Phval < 180)? 6 : 12);

if (Phvar == 06) seq= 8900; else
if (Phvar < 36) seq= 1900; else
if (Phvar < 166) seq= 600; else
seq = 200;
Phva = ((Phvar < 9)? "0" : "")+Phvar;
document.slikar.src = "http://www.wetterzentrale.de/pics/Rtavn"+Phva+"5.png";
document.slikar2.src = "http://www.wetterzentrale.de/pics/Rtavn"+Phva+"5.png";
}



function getymi(){
d = new Date();
d.setTime((idos+3600)*1000);
yr = d.getYear();
mo = d.getMonth();
dy = d.getDate();
hr = d.getHours();
hl = hr + wstd;
mi = d.getMinutes();
mi = mi - mi%15;

yr += ((yr<200) ? 1900 : 0 );

mo += 1;
mos = "" + ((mo<10) ? "0" : "") + mo;

dys = "" + ((dy<10) ? "0" : "") + dy;

hrs = "" + ((hr<10) ? "0" : "") + hr;

min = "" + ((mi<10) ? "0" : "") + mi;


ymi1 = yr + mos + dys ;
ymi2 = hrs + min;
}




function animax(){
seq = 60;

	
if (idos > vrefin)
document.slikar.src = "http://eurmet.hu/lfhiany.gif"; else
document.slikar.src = "http://eurmet.hu/hianyzik.gif";

}


