function TickTack(){
// delay = document.forms[0].ora.value * 3600 + document.forms[0].nap.value * 3600 * 24
delay = -300 ;
datum = new Date();
ido = datum.getTime();
ido = (ido-ido%1000)/1000;
ido = ido-delay;
ido = ido-ido%900;
wstd = 1;  /// dva sata zuri leti, a jedan zimi
vrefin = ido-wstd*3600;

}
TickTack();

idos = vrefin;

m = 1;
Phval = 390;
Phvar = 390;


function ot(){

if (m > 3)  otp(); else
if(Phval > 383 ) /*ota()*/otr(); else
 otp();
}




// OMSZactual:

function ota(){

if(m > 3){m=0}

if (idos > vrefin-1200) seq= 13900; else
seq = 900;


getymi();
//document.slikar.src = "http://195.56.65.42/radar/aktuell/gross/rg" + idos + ".jpg";
//document.slikar.src = "http://www.met.hu/data/brod/dat/brod"+ymi1+"_"+ymi2+".jpg";
document.slikar.src = "http://www.met.hu/data/brod/brod"+ymi1+"_"+ymi2+".jpg";
document.slikar2.src = "http://www.met.hu/data/brod/brod"+ymi1+"_"+ymi2+".jpg";
//http://www.met.hu/data/brod/brod20070207_1100.jpg
//document.slikar.src = "http://www.met.hu/getfile.php?dp=d&u=1&f=YJFI"+ymi1c+ymi2h+ymi2m+"s4GA";

idos += 900;
if(idos > vrefin){ TickTack(); idos=vrefin-9800; Phval = 390; m += 1};
}






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

Phvar += ((Phvar < 180)? 6 : 12);

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
d.setTime(idos*1000);
yr = d.getYear();
mo = d.getMonth();
dy = d.getDate();
hr = d.getHours();
mi = d.getMinutes();
mi = mi - mi%15;



yr += ((yr<200) ? 1900 : 0 );
mo += 1;
mos = "" + ((mo<10) ? "0" : "") + mo;
dys = "" + ((dy<10) ? "0" : "") + dy;
hrs = "" + ((hr<10) ? "0" : "") + hr;
min = "" + ((mi<10) ? "0" : "") + mi;

ymi = yr + mos + dys + hrs + min;
ymi1 = yr + mos + dys ;
ymi2 = hrs + min; 

}







function animax(){
seq = 60;
/*
idos -= 300;
ota();
idos += 300;
*/
	
if (idos > vrefin)
document.slikar.src = "http://eurmet.hu/lfhiany.gif"; else
document.slikar.src = "http://eurmet.hu/hianyzik.gif";

/*
document.slikar.src = "http://www.met.hu/data/brod/brod"+Pymi1+"_"+Pymi2+".jpg";
document.slikar2.src = "http://www.met.hu/data/brod/brod"+Pymi1+"_"+Pymi2+".jpg";
document.slika9205.src = "/TescoJPG/9205_"+PymL+"00.jpg";
document.slika9206.src = "/TescoJPG/9205_"+PymL+"00.jpg";
*/

}

