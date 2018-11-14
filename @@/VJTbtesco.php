<HTML><HEAD><TITLE></TITLE></HEAD>
<?php   
$MOD="VJTesco.php";
include "LM.php";
include "sel_st_data.php?dd=".$_GET['dd'];
session_start();

echo "Znak <b><i>".$dd."b ".$_GET['st_ort']." ...".$st_county_name."..".$_GET['usn']." </b></i>";
$_SESSION[atomatikus_e]="mod nepoznat";
$_SESSION[szerverparancs]="naredba centrale";
$_SESSION[szerverbelyeg]="vrijeme centrale";
$_SESSION[VJTparancs]="Promjenjiva naredba";
$_SESSION[VJTbelyeg]="Unix vrijeme";

$usn=$_GET['usn'];
function wfb($x,$dd,$usn){

	//$all_nev="/home/xps/TESCOa.txt";
//$all_nev="/home/xps/VJT1HRa.dat";
$all_nev="/home/xps/VJT".$dd."bHRa.dat";
$allomany = fopen($all_nev, "w") or die("GREŠKA:  $all_nev fajl ne može se upisat1!");

$allomanyt = fopen($all_nev."t", "w") or die("GREŠKA:  $all_nev fajl ne može se upisat2!");
if($x==-1) $belevalo =1;
else $belevalo =0;
fwrite($allomany, $belevalo );
$belevalot = "\n".time();
//		fwrite($allomany, $belevalot);    //mozda ovo blokira znak
		fwrite($allomanyt, $belevalot);    //mozda ovo blokira znak
fclose($allomany);
fclose($allomanyt);

$dp=$dd.'b';
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryINS = "INSERT VJT SET  stNo='$dp', automanual=$belevalo,  instr='$usn',  putout=$x, date=$belevalot ";

	
	$resINS = mysqli_query($sql_connect,$queryINS);
	mysqli_close ($sql_connect);



if($x>-1){
//$all_nev="/home/xps/TESCO.dat";
//$all_nev="/home/xps/VJT1HR.dat";
$all_nev="/home/xps/VJT".$dd."bHR.dat";
$allomany = fopen($all_nev, "w") or die("GREŠKA:  $all_nev fajl ne može se upisat3!");
$all_out="/home/xps/VJT".$dd."bHR.out";
$allomanyout = fopen($all_out, "r") or die("  GREŠKA:  $all_nev fajl ne može se procitat4!");

$allomanyt = fopen($all_nev."t", "w") or die("GREŠKA:  $all_nev fajl ne može se upisat5!");

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
$belevalot = "\n".time();
//		fwrite($allomany, $belevalot);    //mozda ovo blokira znak
		fwrite($allomanyt, $belevalot);    //mozda ovo blokira znak
fclose($allomany);
fclose($allomanyt);
$out=fgets($allomanyout, 33);
fclose($allomanyout);

	$dp="".$dd."b";
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryINS = "INSERT VJT SET  stNo='$dp', automanual=0,  instr='$belevalo',  putout='$out', date=$belevalot ";
//$queryINS = "INSERT VJT SET  stNo='$dp', automanual=0,  instr='$belevalo', date=$belevalot ";
$resINS = mysqli_query($sql_connect,$queryINS);
	mysqli_close ($sql_connect);

}
}
function rfb($dd){

//$all_nev="/home/xps/TESCOa.txt";
//$all_nev="/home/xps/VJT1HRa.dat";
$all_nev="/home/xps/VJT".$dd."bHRa.dat";
$allomany = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
$allomanyt = fopen($all_nev."t", "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
if(fgets($allomany, 4) == 1) $_SESSION[automatikus_e]="Automatsko";
else $_SESSION[automatikus_e]="Manualno";
if(fgets($allomanyt, 4) == 1) $a=1;
$_SESSION[szerverbele] = date('H:i d.m.Y', fgets($allomanyt,128));
fclose($allomany);
fclose($allomanyt);

//$all_nev="/home/xps/TESCO.dat";
//$all_nev="/home/xps/VJT1HR.dat";
$all_nev="/home/xps/VJT".$dd."bHR.dat";
$allomany = fopen($all_nev, "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");
$allomanyt = fopen($all_nev."t", "r") or die("GREŠKA:  $all_nev fajl ne može se otvorit!");

$szam1 = fgets($allomany, 11);
$szam0 = fgets($allomanyt, 11);
//$_SESSION[szerverbelyeg] =  fgets($allomany,128);
$_SESSION[szerverbelyeg] = date('H:i d.m.Y', fgets($allomanyt,128));
//$szam1 = fgets($allomany, 9);
//$szam2 = fgets($allomany, 4);
fclose($allomany);
fclose($allomanyt);

if($szam1[1]==0 ) $_SESSION[szerverparancs]="Znak isključen.";
if($szam1[1]==1) $_SESSION[szerverparancs]="Poledica.";
if($szam1[1]==2) $_SESSION[szerverparancs]="Sklizak kolnik.";
if($szam1[1]==3) $_SESSION[szerverparancs]="Trepćući znak.";
}


	
$all_out="/home/xps/VJT".$dd."aHR.out";
$allomanyout = fopen($all_out, "r") or die("  GREŠKA:  $all_nev fajl ne može se procitatA!");
$out=fgets($allomanyout, 33);
fclose($allomanyout);
	
//if($_POST[jelszo]!="tarnok1234") echo("<BODY bgcolor=red>Hozzáférés megtagadva!</BODY>");
if($_POST[jelszo]!="tabla1234") echo("<BODY bgcolor=red>Pristup nije dozvoljen!</BODY>");
else 
{

	if($_POST[parancsok]){
		if($_POST[parancsok]==1) wfb(-1,$dd,$usn);/*00*/
		else if($_POST[parancsok]==2) wfb(1,$dd,$usn);/*01*/
		else if($_POST[parancsok]==3) wfb(2,$dd,$usn);/*10*/
		else if($_POST[parancsok]==4) wfb(0,$dd,$usn);/*00*/
		else if($_POST[parancsok]==5) wfb(0,$dd,$usn);/*00*/
	}

	rfb($dd);

?><BODY <?php   //if($rowm[putout][0]!='S' ) 
	 if($out[0]!='S' ) 
	print("bgcolor='#ff3300'"); else print("bgcolor=lightgrey"); echo(" align=center> 
<table width=90% border=3>
<tr>
<td>Upravljanje table:</td>
<td>".$_SESSION[automatikus_e]."</td>
<td>".$_SESSION[szerverbele]."</td>
</tr>
<tr>
<td>Izdata naredba, kada:<br></td>
<td>".$_SESSION[szerverparancs]."</td>
<td>".$_SESSION[szerverbelyeg]."</td>
</tr>

</table>
 <a href='VJTlist.php?dp=".$dd."b ' >historijat izdatih naredbi:</a>

</BODY>
");
}
?>
</HTML> 

<?php print($out); ?>	
	
	<?php echo $hE; ?>
	