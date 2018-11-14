<HTML><HEAD><TITLE></TITLE></HEAD>
<?php   
$MOD="VJTesco.php";
include "LM.php";
include "sel_st_data.php?dd=".$_GET['dd'];
session_start();

echo "Znak <b><i>".$dd." ".$st_ort." ...".$st_county_name." </b></i>";
$_SESSION[atomatikus_e]="mod nepoznat";
$_SESSION[szerverparancs]="naredba centrale";
$_SESSION[szerverbelyeg]="vrijeme centrale";
$_SESSION[VJTparancs]="Promjenljiva naredba";
$_SESSION[VJTbelyeg]="Unix vrijeme";

function wfa($x,$dd){

//$all_nev="/home/xps/TESCOa.txt";
//$all_nev="/home/xps/VJT1HRa.dat";
$all_nev="/home/xps/VJT".$dd."aHRa.dat";
$allomany = fopen($all_nev, "w") or die("GREŠKA:  $all_nev fajl ne može se upisat!");
if($x==-1) fwrite($allomany, "1");
else fwrite($allomany, "0");
fclose($allomany);

if($x>-1){
//$all_nev="/home/xps/TESCO.dat";
//$all_nev="/home/xps/VJT1HR.dat";
$all_nev="/home/xps/VJT".$dd."aHR.dat";
$allomany = fopen($all_nev, "w") or die("GREŠKA:  $all_nev fajl ne može se upisat!");
	switch ($x){
	case -1: break;					/* samo dok se ne napravi pravi AUTOMATIZAM!*!*!*!*!*!*!*!*!*!*/
	case 0:
		$belevalo = "\x2"."00000000";
		fwrite($allomany, $belevalo);
		break;
	case 1:
		$belevalo = "\x2"."10000000";
		fwrite($allomany, $belevalo);
		break;
	case 2:
		$belevalo = "\x2"."20000000";
		fwrite($allomany, $belevalo);
		break;
	case 3:
		$belevalo = "\x2"."30000000";
		fwrite($allomany, $belevalo);
		break;
		}
fclose($allomany);
}
}
function rfa($dd){

//$all_nev="/home/xps/TESCOa.txt";
//$all_nev="/home/xps/VJT1HRa.dat";
$all_nev="/home/xps/VJT".$dd."aHRa.dat";
$allomany = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
if(fgets($allomany, 4) == 1) $_SESSION[automatikus_e]="Automatsko";
else $_SESSION[automatikus_e]="Manualno";
fclose($allomany);

//$all_nev="/home/xps/TESCO.dat";
//$all_nev="/home/xps/VJT1HR.dat";
$all_nev="/home/xps/VJT".$dd."aHR.dat";
$allomany = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
//$_SESSION[szerverbelyeg] = fgets($allomany, 128);
$szam1 = fgets($allomany, 9);
//$szam2 = fgets($allomany, 4);
fclose($allomany);
if($szam1[1]==0 ) $_SESSION[szerverparancs]="Znak isključen.";
if($szam1[1]==1) $_SESSION[szerverparancs]="Poledica.";
if($szam1[1]==2) $_SESSION[szerverparancs]="Sklizak kolnik.";
if($szam1[1]==3) $_SESSION[szerverparancs]="Trepćući znak.";
}

//if($_POST[jelszo]!="tarnok1234") echo("<BODY bgcolor=red>Hozzáférés megtagadva!</BODY>");
if($_POST[jelszo]!="tabla1234") echo("<BODY bgcolor=red>Pristup nije dozvoljen!</BODY>");
else 
{

	if($_POST[parancsok]){
		if($_POST[parancsok]==1) wfa(-1,$dd);/*00*/
		else if($_POST[parancsok]==2) wfa(1,$dd);/*01*/
		else if($_POST[parancsok]==3) wfa(2,$dd);/*10*/
		else if($_POST[parancsok]==4) wfa(0,$dd);/*00*/
		else if($_POST[parancsok]==5) wfa(0,$dd);/*00*/
	}

	rfa($dd);

echo("<BODY bgcolor=lightgrey align=center> 
<table width=90% border=3>
<tr>
<td>Upravljanje table:</td>
<td>".$_SESSION[automatikus_e]."</td>
</tr>
<tr>
<td>Izdata naredba, kada:<br></td>
<td>".$_SESSION[szerverparancs]."</td>
<td>".$_SESSION[szerverbelyeg]."</td>
</tr>
<tr>
<td>Primljena naredba, kada:</td>
<td>".$_SESSION[VJTparancs]."</td>
<td>".$_SESSION[VJTbelyeg]."</td>
</tr>
</table>
</BODY>
");
}
?>
</HTML> 

