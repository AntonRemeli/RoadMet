

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



function Lot(StId){

	
getLymi();

document.slika.src  = "http://195.56.65.42//TescoJPG/"+StId+"_"+Lymiu+"00.jpg";
document.slike.src  = "http://195.56.65.42//TescoJPG/"+StId+"_"+Lymiu+"00.jpg";

//document.slika9502.src  = "http://195.56.65.42//TescoJPG/9502_"+Lymih+"00.jpg";
//document.slike9502.src  = "http://195.56.65.42//TescoJPG/9502_"+Lymih+"00.jpg";

//document.slika9205.src  = "http://195.56.65.42//kepek/logo1.jpg";
//document.slike9205.src  = "http://195.56.65.42//kepek/logo1.jpg";
//document.slika9502.src  = "http://195.56.65.42//kepek/logo1.jpg";
//document.slike9502.src  = "http://195.56.65.42//kepek/logo1.jpg";

Lidos += 300;
Lseq = 100;
if (Lidos > Lvrefin-900) Lseq= 2900;
if(Lidos > Lvrefin){ LTickTack(); Lseq = 1;	Lidos=Lvrefin-36000};


}

function getLymi(){
Ld = new Date();
Ld.setTime(Lidos*1000);
Lyr = Ld.getYear();
Lmo = Ld.getMonth();
Ldy = Ld.getDate();
Lhr = Ld.getHours();
Lmi = Ld.getMinutes();
Lmiu = Lmi - Lmi%5;
Lmih = Lmi - Lmi%30;



Lyr += ((Lyr<200) ? 1900 : 0 );
Lmo += 1;
Lmos = "" + ((Lmo<10) ? "0" : "") + Lmo;
Ldys = "" + ((Ldy<10) ? "0" : "") + Ldy;
Lhrs = "" + ((Lhr<10) ? "0" : "") + Lhr;
Lminu = "" + ((Lmiu<10) ? "0" : "") + Lmiu;
Lminh = "" + ((Lmih<10) ? "0" : "") + Lmih;

Lymiu = Lyr + Lmos + Ldys + Lhrs + Lminu;
Lymih = Lyr + Lmos + Ldys + Lhrs + Lminh;

}


function Lanimax(StId){
Lidos += 300;
Lseq = 1;
if (Lidos > Lvrefin-900) Lseq= 900; 

if(Lidos > Lvrefin){ LTickTack();  Lseq = 1; Lidos=Lvrefin-36000};
	
getLymi();

document.slika.src  = "http://195.56.65.42//TescoJPG/"+StId+"_"+Lymiu+"00.jpg";
document.slike.src  = "http://195.56.65.42//TescoJPG/"+StId+"_"+Lymiu+"00.jpg";


}




