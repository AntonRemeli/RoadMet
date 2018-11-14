

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


$rowRrDept=$rowR[rDept];
if($regg==0) $rowRrDept="Magyarország";
echo "<h3><big>".$rowRrDept."</big></h3><h3>  területén üzemelõ ÚTMET állomások aktuális státusza: </h3> <br>";
if($regg==0){
?>
 <table width="100%" border="1" cellspacing="1" cellpadding="2"  align="center" class="smallgreyBold">
<tr>
      <td width="1%" align="right">Lno:</td>
      <td width="1%" align="right"><a href="<?php  echo $INDEX;?>&cmd=25&th=1';?>">Sno:</a></td>
      <td width="1%" align="right"><a href="<?php  echo $INDEX;?>&cmd=25&th=2';?>">Ort:</a></td>
      <td width="7%" align="right"><a href="<?php  echo $INDEX;?>&cmd=25&th=3';?>">kmsz:</a></td>
      <td width="32%" align="right"><a href="<?php  echo $INDEX;?>&cmd=25&th=14';?>">Megj:</a></td>
      <td width="1%" align="right"><a href="<?php  echo $INDEX;?>&cmd=25&th=15';?>">Ráf:</a></td>
</tr>

<?php  
switch($th)
	{
	case 1:       		$wi='st_id' ;  				break;
	case 2:       		$wi='st_Ort' ; 				break;
	case 3:       		$wi='StrNo' ;  				break;
	case 14:       		$wi='megj' ;  				break;
	case 15:       		$wi='st_txt' ;  			break;
	}
}
if($regg>0){?>
 <table width="100%" border="1" cellspacing="1" cellpadding="2"  align="center" class="smallgreyBold">
<tr>
      <td width="1%" align="right">Lno:</td>
      <td width="1%" align="right">Sno:</td>
      <td width="1%" align="right">Ort:</td>
      <td width="7%" align="right">kmsz:</td>
      <td width="32%" align="right">Megj:</td>
      <td width="1%" align="right">Ráf:</td>
</tr>

<?php  $wi='st_id';}

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email 
	$queryU = "SELECT * FROM users   where reg=$regg ";
$resU = mysqli_query($sql_connect,$queryU);
$loop=1;
while ($rowU = mysqli_fetch_array($resU, MYSQLI_ASSOC))
{	?>
 <tr >
<td></td>
<td></td>
<td></td>
      <td width="1%" height="20" align="left"><?php  echo $rowU[strm];?></td>
      <td width="33%" height="20" align="left"><big><?php  echo $rowU[cDept];?></big></td>
<td><?php  echo $loop;?></td>
       </tr><?php  
// st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj 
 $queryS = "SELECT * FROM stations  where  cty>22 && cty<21  && st_txt>-100 order by $wi "; 
if($loop==1) $queryS = "SELECT * FROM stations  where  cty>0 && cty<21  && st_txt>-100 order by $wi "; 
if($loop==2) $queryS = "SELECT * FROM stations  where  cty<0 || cty>20  order by $wi "; 
if($regg>0)  $queryS = "SELECT * FROM stations  where  StrM=$rowU[strm] && cty>0 && cty<21  && st_txt>-100 order by $wi ";
$resS = mysqli_query($sql_connect,$queryS);

while ($rows = mysqli_fetch_array($resS, MYSQLI_ASSOC))
{
 
$qst_txt=$rows[st_txt];
if($qst_txt>100) $qst_txt-=100;
?>
<tr <?php   if($qst_txt<0)  echo 'bgcolor="#66cece"'; ?><?php   if($qst_txt>100)  echo 'bgcolor="#cece66"'; ?>>

      <td width="1%" height="20" align="left"><?php  echo $loop;?></td>
      <td width="1%" height="20" align="left"><?php  echo $rows[st_id];?></td>
      <td width="1%" height="20" align="left"><?php  echo $rows[st_Ort];?></td>
      <td width="1%" height="20" align="left"><?php  echo $rows[StrNo];?></td>
      <td width="33%" height="20" align="left"><?php  echo $rows[megj];?></td>
      <td width="1%" height="20" align="left"><?php  echo $qst_txt;?></td>
</tr>
<?php  
$loop++;
}}
 mysqli_close ($sql_connect);
?>
</table>

<br><P CLASS="breakhere"></p>
