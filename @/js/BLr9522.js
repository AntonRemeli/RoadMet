/*
<?

//define the path as relative
$path = "/drv0/html/TescoJPG/";

//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

//echo "Directory Listing of $path <img src='hr/cesting-logo.gif' ><br/>";
$n=0;
//running the while loop
while ($file = readdir($dir_handle)) 
{
	$n++;
	$fileList[$n]=$file;
//   echo $file."<br/>";
}

//echo "Reverse Directory Listing of $path<br/>";
$p=0;
for ($k=$n;$p<9;$k--)
   {
	   if($fileList[$k][2]=='2'){
$p++;
//	echo "<img src='http://195.56.65.42/TescoJPG/$fileList[$k]' > ".$p.": ".$fileList[$k]."<br/>";

$S9522List[$p]=$fileList[$k];

}
}        

//closing the directory
closedir($dir_handle);


?>
*/

//document.write("<?echo 'aaaaaaaaaa'; ?>");

function LTickTack()
{
//Ldelay =  -900 ;
Ldelay =  0 ;
Ldatum = new Date();
Lido = Ldatum.getTime();
Lido = (Lido-Lido%1000)/1000;
Lido = Lido-Ldelay;
Lido = Lido-Lido%900;

Lvrefin = Lido;
}

LTickTack();

Lidos = Lvrefin;
getLymi();

//alert("Start7: "+Lymi);
document.slika9522.src  = "http://195.56.65.42//TescoJPG/9522.jpg";
document.slike9522.src  = "http://195.56.65.42//TescoJPG/9522.jpg";


function Lot(){
if(Lseq<2){ LTickTack(); Lseq = 1110;	Lidos=Lvrefin; getLymi(); 
//alert("TimeStart7: "+Lymi+"   "+ Lvrefin);
};
getLymi();
document.slika9522.src  = "http://195.56.65.42//TescoJPG/9522_"+Lymi+"00.jpg";
document.slike9522.src  = "http://195.56.65.42//TescoJPG/9522_"+Lymi+"00.jpg";

Lidos += 900;
Lseq = 222;

if(Lidos > Lvrefin+1800){ LTickTack(); Lseq = 111;	Lidos=Lvrefin-5000;
// alert("TimeXXXZZ: "+Lymi+"   "+ Lvrefin);
};
if (Lidos > Lvrefin-900) {Lseq= 1122;
//alert("Time: "+Lymi);
};

}

function getLymi(){
Ld = new Date();
Ld.setTime(Lidos*1000);
Lyr = Ld.getYear();
Lmo = Ld.getMonth();
Ldy = Ld.getDate();
Lhr = Ld.getHours();
Lmi = Ld.getMinutes();
Lmi = Lmi - Lmi%15;



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
Lidos += 900;
Lseq = 111;
if (Lidos > Lvrefin-900) {Lseq= 1122; /*alert("Tix: "+Lymi);*/}

if(Lidos > Lvrefin+1800){ LTickTack();  Lseq = 111; Lidos=Lvrefin-5000};
	
//getLymi();
document.slika9522.src  = "http://195.56.65.42//TescoJPG/9522.jpg";
document.slike9522.src  = "http://195.56.65.42//TescoJPG/9522.jpg";
//alert("Tx: "+Lymi);
}




