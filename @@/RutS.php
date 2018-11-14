
<table width=700  >
<td align="left">
<?php  

$MOD="RutSA.php";
include "LM.php";
include "log.php";
/*
$login=$_GET['lgn'];
$passw=$_GET['pwd'];
if ($login=='' || $passw=='')
{
	header("Location: utmet.php");
}
 */

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$queryW = "SELECT * FROM users   where user='$lgn' ";
//  Id  user  pass  county  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email   
$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);



$queryR = "SELECT * FROM usRegs   where rId=$rowW[reg] ";
//  rId  rDept  rBusinessStreet  rBusinessCity  rBusinessPostalCode  rPhn  rFax  rEmail  rFom  rOv
$resR = mysqli_query($sql_connect,$queryR);
$rowR = mysqli_fetch_array($resR, MYSQLI_ASSOC);

mysqli_close ($sql_connect);


?>
</td>
</table>

<br><P CLASS="breakhere"></p>
<table width="400">
<table width="600">

<tr align="left"><td width=10% ><img src="../kepek/MK.png" width="100" height="65" border="0"></td>

<td width=90%>
<h3><br>Magyar Közút Kht. <br>
<?php  echo $rowR[rDept];?>e<br>
<?php  echo $rowR[rBusinessPostalCode];?> <?php  echo $rowR[rBusinessCity];?>, <?php  echo $rowR[rBusinessStreet];?></h3>

</td>
</tr>
</table>

<table width="600">
Tel: <?php  echo $rowR[rPhn];?>, Fax: <?php  echo $rowR[rFax];?><br>

<br><br><br>
<br>
<br>
<h2>Teljesítési Igazolás</h2> 



<br>



<br>
<br><br>

<h4>Tárgy:	"ESZ-2008/005174,-5198,-5201/001"  vállalkozási szerzõdések teljesítése a Magyar Közút Kht. <?php  echo $rowR[rDept];?>e területén.</h4>

<br>
<br><br>

Ez a nyilatkozat igazolja, hogy az EurMet Szolgáltató és Tanácsadó Kft. (2040 Budaörs, Szépkilátó u. 6)  elvégezte az Útmeteorológiai Mérõállomások üzemeltetési, karbantartási és jaavítási tevékenységének (2008.december.10-i) részszámláihoz szükséges teljesítését  a 2008. november 21-én aláírt szerzõdéseknek megfelelõen.
<br>
<br><br>

A Magyar Közút Kht. <?php  echo $rowR[rDept];?>e a tárgyban megjelölt feladatokat a régió mûködési területén teljesítettnek tekinti, egyben hozzájárul, hogy a szerzõdésben szereplõ díjról kiállított számlákat  Vállalkozó benyújtsa.

<br><br>
<br><br>
kelt<br>
<?php  echo $rowR[rBusinessCity];?>, <?php  echo date("Y.m.d",time());?>

</table>
<br><br><br><br><br><br>

<table>
<tr><td width=40%>
	<?php  echo $rowR[rFom];?> <br>   	  				
	regionális fõmérnök		  
</td><td>
  	   <?php  echo $rowR[rOv];?>	<br>   				
	   regionális üzemeltetési és fenntartási osztályvezetõ
</td></tr>


<br>
<br><br>
</table>
</table>
<br><P CLASS="breakhere"></p>
<?php  
 $stm = 222;
 $stn = 9026;
 $st1 = -9;
 $st2 = 9;
 $hSc = 'k';
 $hRg = 2;
 $tab = 't';

 $tm1 = '2008-11-10';
 $tm2 = '2008-12-10';

 include "servAd.php";

 $hSc = 'h';

include "servAd.php";
?>
