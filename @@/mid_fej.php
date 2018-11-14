

 
  <?php  

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	

// echo $INDEX;
// procedure to define the winter time-shift:
$mth=date('m',time());
$wsHr=3600;
if (($mth>3) && ($mth<10)) $wsHr= 0 ;

//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

$query = "SELECT * FROM stations where st_id=$dd and cty=$cty";
if($strm=='root') $query = "SELECT * FROM stations where st_id=$dd";
$res = mysqli_query($sql_connect,$query);
$rows = mysqli_fetch_array($res);
if($cmd=="55")$st_Ort=$HIBALISTA; elseif($cmd=="66") $st_Ort=$REKLAMÁCIÓK; else $st_Ort=$rows[st_Ort];
if($cmd<55)
{

$st_Typ=$rows[Typ];
$st_StrNo=$rows[StrNo]. $klímaterület .$rows[KlimaZ];
$st_cDept=$rows[cDept]."(".$rows[cPhn].")";
}

mysqli_close ($sql_connect);
//PZ-2479: moderator foruma za Hrvatsku:
$hj=7;
 if($strm=='root') $hj=66;
?>


<!-- KERETTÁBLA: -->
<table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
<tr>
<!-- JOBBFELE: -->
<td width="50%" class="smallgreyBold">
 <a name="tocI" href="#topI" target="_self"> <b> <?php   echo "    <<  ";?></b></a>
<big><?php  print(" $dd ");?><?php  print("  $st_Ort ");?></big> <br> <?php  print(" $st_Typ ");?>
<br> <?php  print(" $st_StrNo ");?>  <?php  print(" $st_KlimaZ ");?>/ <br> <?php  print(" $st_cDept ");?>
</td>  <!-- JOBBFELE bezárva -->

<!-- BALFELE: -->
<td width="50%" rowspan="2">

                <!-- BELSO TÁBLA: -->
                 <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                    <tr align="center" valign="top"> 
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=1&stk=0"><img src="../kepek/buttons/st_group.gif" width="50" height="50" border="0"></a></td>
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=4"><img src="../kepek/buttons/st_graf.gif" width="50" height="50" border="0" usemap="#gomb<?php  echo $dd;?>"></a></td>

<map name="gomb<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 40, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/kepek/kicsi/'.$dd.'.JPG'; ?> ')" >
</map>
		      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=2"><img src="../kepek/buttons/st_lista.gif" width="50" height="50" border="0" usemap="#gombBRS<?php  echo $dd;?>"></a></td>

<map name="gombBRS<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 40, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/kepek/kicsi/'.$dd.'BRS2010.JPG'; ?> ')" >
</map>
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=3"><img src="../kepek/buttons/st_stat.gif" width="50" height="50" border="0"></a></td>
<?php  if($StrMsw>0){?>    <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=5"><img src="../kepek/buttons/st_alarm.gif" width="50" height="50" border="0"></a></td><?php  }?>
<td width="20%"><a href="<?php   echo $INDEX;?>&cmd=<?php  echo $hj;?>"><img src="../kepek/buttons/st_report.gif" width="50" height="50" border="0"></a></td>



                    </tr>
                    <tr align="center" valign="top"> 
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=1&ido1=&ido2="><?php  echo $Csoportstátusz ;?></a><a href="<?php   echo $INDEX;?>&cmd=1"> ~ </a></td>
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=4&BPW=0&BRS=0"><?php  echo $Mérésgrafikon ;?></a></td>
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=2"><?php  echo $Méréstáblázat ;?></a></td>
		      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=3"><?php  echo $Állomásstatisztika ;?></a></td>
<?php  if($StrMsw>0)
{?>                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=5"><?php  echo $Riasztásállítása ;?></a></td><?php  }?>
                      <td width="20%"><a href="<?php   echo $INDEX;?>&cmd=<?php  echo $hj;?>"><?php  echo $Hibajelentés ;?></a></td>

<?php  if($StrMsw>0)
{?> 
<?php  }?> 
		    </tr>
                 </table> <!-- BELSO TÁBLA bezárása-->
                 
</td>  <!-- BALFELE bezárva -->

</tr>
</table>  <!-- KERETTÁBLA bezárva -->
<!--span id='wHr'></span>
<p id="Absatz"
onMouseOver="document.getElementById('Absatz').firstChild.nodeValue = 'Sehen Sie!'" onMouseOut="document.getElementById('Absatz').firstChild.nodeValue = 'Ich bin dynamisch'">
Ich bin dynamisch</p-->


