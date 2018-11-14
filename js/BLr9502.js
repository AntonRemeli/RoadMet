

function LTickTack()
{
Ldelay =  300 ;
Ldatum = new Date();
Lido = Ldatum.getTime();
Lido = (Lido-Lido%1000)/1000;
Lido = Lido-Ldelay;
Lido = Lido-Lido%300;

Lvrefin = Lido;
}

LTickTack();

Lidos = Lvrefin;



function Lot(){

	
getLymi();
document.slika9502.src  = "http://195.56.65.42//TescoJPG/9502_"+Lymi+"00.jpg";
document.slike9502.src  = "http://195.56.65.42//TescoJPG/9502_"+Lymi+"00.jpg";

Lidos += 300;
Lseq = 222700;
if (Lidos > Lvrefin-1900) {Lseq= 1122900; /*alert("Time: "+Lymi);*/}

if(Lidos > Lvrefin){ LTickTack(); Lseq = 11111;	Lidos=Lvrefin-5000};
//alert("Time: "+Lymi);
}

function getLymi(){
Ld = new Date();
Ld.setTime(Lidos*1000);
Lyr = Ld.getYear();
Lmo = Ld.getMonth();
Ldy = Ld.getDate();
Lhr = Ld.getHours();
Lmi = Ld.getMinutes();
Lmi = Lmi - Lmi%5;



Lyr += ((Lyr<200) ? 1900 : 0 );
Lmo += 1;
Lmos = "" + ((Lmo<10) ? "0" : "") + Lmo;
Ldys = "" + ((Ldy<10) ? "0" : "") + Ldy;
Lhrs = "" + ((Lhr<10) ? "0" : "") + Lhr;
Lmin = "" + ((Lmi<10) ? "0" : "") + Lmi;

Lymi = Lyr + Lmos + Ldys + Lhrs + Lmin;
//document.write(Lymi);

}


function Lanimax(){
Lidos += 300;
Lseq = 11111;
if (Lidos > Lvrefin-1900) {Lseq= 1122900; /*alert("Tix: "+Lymi);*/}

if(Lidos > Lvrefin){ LTickTack();  Lseq = 11111; Lidos=Lvrefin-5000};
	
getLymi();
//document.slika9502.src  = "http://195.56.65.42//TescoJPG/9502_"+Lymi+"00.jpg";
//document.slike9502.src  = "http://195.56.65.42//TescoJPG/9502_"+Lymi+"00.jpg";
//alert("Tx: "+Lymi);
document.slika9502.src  = "http://195.56.65.42//@/hr/megnezemhr.gif";
document.slike9502.src  = "http://195.56.65.42//@/hr/megnezemhr.gif";



}




