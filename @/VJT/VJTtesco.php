<HTML><HEAD><TITLE></TITLE></HEAD>
<?php   session_start();

$_SESSION[atomatikus_e]="mod ismeretlen";
$_SESSION[szerverparancs]="szerver parancs";
$_SESSION[szerverbelyeg]="szerver b�lyeg";
$_SESSION[VJTparancs]="VJT parancs";
$_SESSION[VJTbelyeg]="VJT b�lyeg";

function wf($x){

$all_nev="/home/xps/TESCOa.txt";
$allomany = fopen($all_nev, "w") or die("HIBA: A $all_nev allomanyt nem lehet megirni!");
if($x==-1) fwrite($allomany, "1");
else fwrite($allomany, "0");
fclose($allomany);

$all_nev="/home/xps/TESCO.dat";
$allomany = fopen($all_nev, "w") or die("HIBA: A $all_nev �llom�nyt nem lehet meg�rni!");
	switch ($x){
	case -1:					/* samo dok se ne napravi pravi AUTOMATIZAM!*!*!*!*!*!*!*!*!*!*/
	case 0:
		$belevalo = time()."\n0\n0";
		fwrite($allomany, $belevalo);
		break;
	case 1:
		$belevalo = time()."\n0\n1";
		fwrite($allomany, $belevalo);
		break;
	case 2:
		$belevalo = time()."\n1\n0";
		fwrite($allomany, $belevalo);
		break;
	case 3:
		$belevalo = time()."\n1\n1";
		fwrite($allomany, $belevalo);
		break;
	}
fclose($allomany);
}

function rf(){

$all_nev="/home/xps/TESCOa.txt";
$allomany = fopen($all_nev, "r") or die("HIBA: A $all_nev allomanyt nem lehet olvasni!");
if(fgets($allomany, 4) == 1) $_SESSION[automatikus_e]="Automatikus";
else $_SESSION[automatikus_e]="Manualis";
fclose($allomany);

$all_nev="/home/xps/TESCO.dat";
$allomany = fopen($all_nev, "r") or die("HIBA: A $all_nev �llom�nyt nem lehet olvasnsni!");
$_SESSION[szerverbelyeg] = fgets($allomany, 128);
$szam1 = fgets($allomany, 4);
$szam2 = fgets($allomany, 4);
fclose($allomany);
if($szam1==0 && $szam2==0) $_SESSION[szerverparancs]="�res t�bla.";
if($szam1==0 && $szam2==1) $_SESSION[szerverparancs]="Munka t�bla.";
if($szam1==1 && $szam2==0) $_SESSION[szerverparancs]="Cs�sz�s t�bla.";
if($szam1==1 && $szam2==1) $_SESSION[szerverparancs]="V�ltogat� t�bla.";
}

if($_POST[jelszo]!="tarnok1234") echo("<BODY bgcolor=red>Hozz�f�r�s megtagadva!</BODY>");
else {

	if($_POST[parancsok]){
		if($_POST[parancsok]==1) wf(-1);/*00*/
		else if($_POST[parancsok]==2) wf(1);/*01*/
		else if($_POST[parancsok]==3) wf(2);/*10*/
		else if($_POST[parancsok]==4) wf(0);/*00*/
	}

	rf();

echo("<BODY bgcolor=lightgrey> Hozz�f�r�s enged�lyezve!
<table width=90% border=3>
<tr>
<td>Vezerlesi mod:</td>
<td>".$_SESSION[automatikus_e]."</td>
</tr>
<tr>
<td>A vez�rlok�zpontba kik�ld�tt parancs, id�b�lyeg:<br></td>
<td>".$_SESSION[szerverparancs]."</td>
<td>".$_SESSION[szerverbelyeg]."</td>
</tr>
<tr>
<td>Legfrissebb, t�bl�n fogadott parancs, id�b�lyeg:</td>
<td>".$_SESSION[VJTparancs]."</td>
<td>".$_SESSION[VJTbelyeg]."</td>
</tr>
</table>
</BODY>
");
}
?>
</HTML> 

