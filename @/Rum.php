
<table width=700  >
<td align="left">
<?php  

$MOD="Rum.php";
include "LM.php";
include "log.php";

$ii=0;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

// Id  user  login  pass  county  cty  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
$queryW = "SELECT * FROM users   where login='$lgn' ";
$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);



$queryR = "SELECT * FROM usRegs   where rId=$rowW[reg] ";
//  rId  rDept  rBusinessStreet  rBusinessCity  rBusinessPostalCode  rPhn  rFax  rEmail  rFom  rOv
$resR = mysqli_query($sql_connect,$queryR);
$rowR = mysqli_fetch_array($resR, MYSQLI_ASSOC);

if($rowW[reg]>0) echo "<h3><big>".$rowR[rDept]."</big></h3><h3>  területén üzemelõ ÚTMET állomások legfrisebb mérési adatai: </h3> <br>";

// Id  user  login  pass  county  cty  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
$queryU = "SELECT * FROM users   where reg=$rowW[reg] ";
if($rowW[reg]==0) $queryU = "SELECT * FROM users   where strm=999 ";
$resU = mysqli_query($sql_connect,$queryU);
while ($rowU = mysqli_fetch_array($resU, MYSQLI_ASSOC))
{
	
	// st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
//  $queryS = "SELECT * FROM stations  ";
  $queryS = "SELECT * FROM stations  where  StrM=$rowU[strm] ";
if($rowW[reg]==0) $queryS = "SELECT * FROM stations  where  cty=0 ";
   
$resS = mysqli_query($sql_connect,$queryS);
$num_rows = mysqli_num_rows($resS);

if($num_rows ==0) echo "<table><b>".$rowU[cDept]."</b> </table><table>";
else echo "<table><td width='250'><b>".$rowU[cDept]."</b> </td><td><small>  ".$Rum." </td></table><table>";


while ($rowS = mysqli_fetch_array($resS, MYSQLI_ASSOC))
{
	$queryLD = "SELECT  *  FROM  last_data  where   station_id=$rowS[st_id]";
//  id  station_id  measure_time  mta  mtp  air_temp  air_dew_temp  rel_hum  precip_imp_int  precip_imp_lng  surf_temp  surf_deep_temp  surf_salt_sat  surf_salt_pri  surf_water_depth  surf_freez_temp  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  precip_stat1  precip_stat2  precip_stat3  door_contact  AccuV  hum  air  surft  surfdt  
 
$reLD = mysqli_query($sql_connect,$queryLD);

while ($rowm = mysqli_fetch_array($reLD, MYSQLI_ASSOC))
{
$ii++;
	$air_dew_temp[$stNo]=$rowm[air_dew_temp];
        $air[$stNo]=$rowm[air];
	$hum[$stNo]=$rowm[hum];
	$surft[$stNo]=$rowm[surft];
	$surfdt[$stNo]=$rowm[surfdt];


	$surf_temp[$stNo]=$rowm[surf_temp];
	$surf_deep_temp[$stNo]=$rowm[surf_deep_temp];

	$surf_freez_temp[$stNo]=$rowm[surf_freez_temp];
	$surf_salt_sat[$stNo]=$rowm[surf_salt_sat];
	$surf_salt_pri[$stNo]=$rowm[surf_salt_pri];
	
	$surf_condition[$stNo]=$rowm[surf_condition];
	$surf_water_depth[$stNo]=$rowm[surf_water_depth];
	$rain_int[$stNo]=$rowm[rain_int];
	$precip_stat[$stNo]=$rowm[precip_stat];
	$Value_7[$stNo] = $rowm[Value_7];
$AccuV[$stNo] = 220;
        $AccuV[$stNo] = $rowm[AccuV];

  include $L."/clc_std-".$L.".php";
   $today[$stNo] =date("H:i",$rowm[measure_time]+22);

          ?>
               <!-- ALKERETTÁBLA ADATSORA: -->

              <tr bgcolor="#D0CEA4" align=right   >
               <td width="6%" align=center><small> <?php  print($ii);?></small></td>
 
                <td width="5%" align=center><small><a href="<?php  print("$INDEX&cmd=2&dd=$rowS[st_id]");?>" target="_blank" title="<?php  echo $Táblázatmegtek?>" alt="<?php  echo $Táblázatmegtek?>"><?php  print($rowS[st_id]);?></a></small></td>
                <td width="14%" align=left><small><a href="<?php   print("$INDEX&cmd=4&dd=$rowS[st_id]");?>" target="_blank"  title="<?php  echo $Grafikonmegtek?>"  alt="<?php  echo $Grafikonmegtek?>"><?php  print($rowS[st_Ort]);?></a></small></td>
                <td width="18%" align=center <?php   if($AccuV[$stNo]<99.9) echo 'bgcolor="#D0CE88"'; ?> ><small> <?php  print($rowS[StrNo]);?></small></td>
<?php   if($rowW[reg]>0){ ?> 
		<td width="6%" align=center ><small> <a href="<?php  print("$INDEX&cmd=2&dd=$rowS[st_id]");?>" target="_blank" title="<?php  echo $Idõ?>" alt="<?php  echo $Idõ?>"><?php  print($today[$stNo]);?></a></small></td>
                <td width="5%" title="<?php  echo $Páratart?>" alt="<?php  echo $Páratart?>"><small><?php  printf("%6.1f",$hum[$stNo]);?></small></td>
                <td width="6%" title="<?php  echo $Harmatpont?>" alt="<?php  echo $Harmatpont?>"><small><?php  printf("%6.1f",$air_dew_temp[$stNo]);?></small></td>
                <td width="5%" title="<?php  echo $Levegõhõm?>" alt="<?php  echo $Levegõhõm?>"><small><?php  printf("%6.1f",$air[$stNo]);?></small></td>
                <td width="5%"bgcolor="#D0CE88" title="<?php  echo $Útpályahõm?>" alt="<?php  echo $Útpályahõm?>"><small><?php  printf("%6.1f",$surft[$stNo]);?></small></td>
                <td width="5%" title="<?php  echo $Talajhõm?>" alt="<?php  echo $Talajhõm?>"><small><?php  printf("%6.1f",$surfdt[$stNo]);?></small></td>
                <td width="6%" title="<?php  echo $Fagypont?>" alt="<?php  echo $Fagypont?>"><small><?php  printf("%6.1f",$surf_freez_temp[$stNo]);?></small></td>
                <td width="5%" align="center" title="<?php  echo $Vegyit?>" alt="<?php  echo $Vegyit?>"><small><?php  printf("%6.1fgr ",$surf_salt_pri[$stNo]);?></small></td>
                <td width="7%" bgcolor="<?php  print($st_upc[$stNo]);?>" title="<?php  echo $Útállapot?>" alt="<?php  echo $Útállapot?>"><small><?php  print($st_upa[$stNo]);?></small></td>
                <td width="5%" title="<?php  echo $Csapadék?>" alt="<?php  echo $Csapadék?>"><small><?php   
if($Value_7[$stNo]>-1)
	 {
		 if( $rain_int[$stNo]> 0.5 && $air[$stNo]> 0.49 ) printf("%6.0fmm/h",$rain_int[$stNo]); 
		 elseif($rain_int[$stNo]>0.5 && $air[$stNo]<0.5 ) printf("%6.0fcm/h",$rain_int[$stNo]);  
		 else printf("%6.2f",$rain_int[$stNo]);
	 
 	 } else print($rain_int[$stNo]); ?></td>
                <td width="5%"  title="<?php  echo $Csapadéktipus?>" alt="<?php  echo $Csapadéktipus?>"><small><?php  print($st_cst[$stNo]);?></small></td>
                <td width="5%"  title="<?php  echo $Vízréteg?>" alt="<?php  echo $Vízréteg?>"><small><?php  printf("%6.2f",$surf_water_depth[$stNo]);?></small></td>
                <td width="4%"  title="<?php  echo $Táp?>" alt="<?php  echo $Táp?>"><small><?php   if($Value_7[$stNo]>-1){if($AccuV[$stNo]<99.9) printf("%6.1fV",$AccuV[$stNo]);  else printf("%6.0fV",$AccuV[$stNo]);} else printf("%6.0f°",$AccuV[$stNo]); ?></small></td>

<?php  }?>
	       </tr>
             <?php  


}

}
echo "</table>";
}



mysqli_close ($sql_connect);



?>
</td>
</table>
<?php   if($rowW[reg]>0){ ?>
 <a href="<?php  echo $INDEX;?>&cmd=24;?>"><h3><?php  echo $rowR[rDept];?><br> területén végzett szervízmunkák áttekintése</h3></a> 
<?php  }

				if($lgn=='Xps' || $lgn!='Xps' ) { ?> <a href="<?php  echo $INDEX.'&cmd=77&th=1';?>"><h3><br>Állomásösszesítõ:<br> ÚTMET állomások helyrajzi és leltári adatainak áttekintése</h3></a>	<?php  }?>
 

