
<?php  

$MOD="stationReg.php";
include "LM.php";
include "log.php";

//echo ' streg '.$regg;
//echo ' stcty '.$cty;

$queryR = "SELECT * FROM usRegs   where rId=$regg ";
//  rId  rDept  rBusinessStreet  rBusinessCity  rBusinessPostalCode  rPhn  rFax  rEmail  rFom  rOv
$resR = mysqli_query($sql_connect,$queryR);
$rowR = mysqli_fetch_array($resR, MYSQLI_ASSOC);
?>

<br><P CLASS="breakhere"></p>
<br>
<br>
<br>
<br>
<table width="600">

<tr align="left"><td width=10% ><img src="../kepek/MK.png" width="100" height="65" border="0"></td>

<td width=90%>
<h3><br>Magyar Közút NZRt. <br>
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

<big>

<br>
<br><br>

<h4>Tárgy:	"ESZ-2010/000421/001 és ESZ-2010/000423/001"  vállalkozási szerzõdések teljesítése a Magyar Közút NZRt. <?php  echo $rowR[rDept];?>e területén.</h4>

<br>
<br><br>

Ez a nyilatkozat igazolja, hogy az EurMet Szolgáltató és Tanácsadó Kft.<br> 
(2040 Budaörs, Szépkilátó u. 6)  elvégezte az Útmeteorológiai Mérõállomások<br>
 üzemeltetési, karbantartási és javítási tevékenységének <br>
(2010.március.10-i) részszámláihoz szükséges teljesítését <br> 
a 2010. február 11-én aláírt szerzõdéseknek megfelelõen.
<br>
<br><br>

A Magyar Közút Kht. <?php  echo $rowR[rDept];?>e a tárgyban <br>
megjelölt feladatokat a régió mûködési területén teljesítettnek tekinti, <br>
egyben hozzájárul, hogy a szerzõdésben szereplõ díjról kiállított számlákat <br>
Vállalkozó benyújtsa.

<br><br>
<br><br>
kelt<br>
<?php  echo $rowR[rBusinessCity];?>, <?php  echo date("Y.m.d",time());?>
</big>
</table>
<br><br><br><br><br><br>

<table>
<big>
<tr><td width=40%>
	<?php  echo $rowR[rFom];?> <br>   	  				
	regionális fõmérnök		  
</td><td>
  	   <?php  echo $rowR[rOv];?>	<br>   				
	   regionális üzemeltetési és fenntartási osztályvezetõ
</td></tr>

</big>
<br>
<br><br></big>
</table>

<br><P CLASS="breakhere"></p>


