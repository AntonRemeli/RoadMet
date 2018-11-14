

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
document.slika9205.src  = "http://195.56.65.42//TescoJPG/9205_"+Lymi+"00.jpg";
document.slike9205.src  = "http://195.56.65.42//TescoJPG/9205_"+Lymi+"00.jpg";

Lidos += 300;
Lseq = 100;
if (Lidos > Lvrefin-900) Lseq= 2900;
if(Lidos > Lvrefin){ LTickTack(); Lseq = 1;	Lidos=Lvrefin-3600};


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

}


function Lanimax(){
Lidos += 300;
Lseq = 1;
if (Lidos > Lvrefin-900) Lseq= 900; 

if(Lidos > Lvrefin){ LTickTack();  Lseq = 1; Lidos=Lvrefin-3600};
/*	
getLymi();
document.slika9205.src  = "http://195.56.65.42//TescoJPG/9205_"+Lymi+"00.jpg";
document.slike9205.src  = "http://195.56.65.42//TescoJPG/9205_"+Lymi+"00.jpg";
*/
document.slika9205.src  = "http://195.56.65.42//TescoJPG/9205b.jpg";
document.slike9205.src  = "http://195.56.65.42//TescoJPG/9205b.jpg";


}




