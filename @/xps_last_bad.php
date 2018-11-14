

<?php   
$MOD="xps_last.php";
include "LM.php";
include "log.php";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

include "userd.php";
mysqli_close ($sql_connect);

?>
 <html>
<head>
<TITLE>LOCALHOST TABLE</TITLE>
<META NAME="Title" CONTENT="LOCALHOST TABLE">
<META NAME="Author" CONTENT="Anton Remeli">
<META NAME="Copyright" CONTENT="EurMet2006">
<META NAME="Revisit" CONTENT="After 6 days">

</head>
 <body >
<!-- INLINE ALKERETTÁBLA LE-TOP KONTROLL -->
  <table width="100%" border="0" cellspacing="1" cellpadding="2"  align="center">

<?php  
error_reporting(0);

if ($lgn=='' || $pwd=='')$header;

$nowtime=time()+600;
$starttime=time()-7600;


	$ido2T=time()+600;
	$ido1T=$ido2T-18000;


//echo "c - cty -cc ".$c." ".$cty." ".$cc." ";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  id station_id measure_time mta mtp air_temp air_dew_temp rel_hum precip_imp_int precip_imp_lng surf_temp surf_deep_temp surf_salt_sat surf_salt_pri surf_water_depth surf_freez_temp surf_condition Value_7 Value_6 Value_5 Value_4 Value_3 Value_2 Value_1 Value_0 precip_stat1 precip_stat2 precip_stat3 door_contact AccuV hum air surft surfdt 
$queryLD = "SELECT  *  FROM  last_data  where   measure_time<$ido1T || measure_time>$ido2T order by -measure_time ";
$reLD = mysqli_query($sql_connect,$queryLD);
$nn=0;
while ($rowm = mysqli_fetch_array($reLD, MYSQLI_ASSOC))
{ 
//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
$queryS = "SELECT *  FROM stations where cty>'$c' and cty<'$cc' && cty!='0' && st_id=$rowm[station_id] ";
$reS = mysqli_query($sql_connect,$queryS);

$rowS = mysqli_fetch_array($reS, MYSQLI_ASSOC);

//echo '<br>'.$st.'  '.$rowSst_id.'  '.$rowS[st_id];
if($rowS[st_id]!=$rowSst_id){

$rowSst_id=$rowS[st_id];
/*
$queryLD = "SELECT  *  FROM  last_data  where   station_id='$rowSst_id'";
$reLD = mysqli_query($sql_connect,$queryLD);
$rowm = mysqli_fetch_array($reLD, MYSQLI_ASSOC);
 */
//looping last_data START

$dd=$rowSst_id;
	$measure_timeLD=$rowm[measure_time];
	$mtaLD=$rowm[mta];
   $stNo= $dd;
$st_county_id=$rowS[cty];
$st_county_name=$rowS[county];
$st_type=$rowS[Typ];
$st_ort=$rowS[st_Ort];
$st_id=$rowS[st_id];

$qGSMno=substr($rowS[GSMno],0,1);
$qGPRSno=substr($rowS[GPRSno],0,1);
$qBCUno=substr($rowS[BCUno],0,1);
$qFBSno=substr($rowS[FBSno],0,1);
$qHGTno=substr($rowS[HGTno],0,1);
$qRaino=substr($rowS[Raino],0,1);
$qst_txt=substr($rowS[st_txt],0,2);
$qmegj=substr($rowS[megj],0,188);

// measure START:

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

        $AccuV[$stNo] = $rowm[AccuV];

//	include "clc_std.php";
	include($L."/clc_std-".$L.".php");

/// measure END

   $today[$stNo] =date("Y.m.d",$measure_timeLD+22)." ".date("H:i",(round(($measure_timeLD)/60)*60));

if(($StrMsw==1 || $st_county_id==$cty || $strm=='root'))
{$nn++;
          ?>
               <!-- ALKERETTÁBLA ADATSORA: -->

	      <tr bgcolor="#D0CEA4" align=right  title=' <?php  print($rowS[st_Ort]);?> <?php   if($qFBSno==="h") echo "SZERZÕDÉS NÉLKÜLI "; if($qst_txt>1) echo "SZERZÕDÉS NÉLKÜLI "; else echo "" ?>  <?php  echo $qmegj ;?>'   >

	      <td width="6%" align=center><small><a href='<?php  print("$INDEX");?>&dd=<?php  print($dd);?>&cmd=2' target="_blank"><?php  print($dd);?> <?php  echo '<small>'.$nn.'</small>';?></a></small></td>
                <td width="14%"  <?php   if($qFBSno==="h") echo 'bgcolor="#BDBA00"'; if($qst_txt>11)  echo 'bgcolor="#BDBA00"'; else echo "" ?>><small><a href='<?php  print("$INDEX");?>&dd=<?php  print($dd);?>&cmd=4' target="_blank"><?php  print($st_ort);?></a></small></td>
                <td width="7%" align=center <?php   if($AccuV[$stNo]>99.9) echo 'bgcolor="#F6E3ce"'; ?> ><small><small> <?php  print($measure_timeLD);?></small></small></td>
                <td width="12%" align=center  <?php   if($qGPRSno==="h") echo 'bgcolor="#ffffff"'; if($qGPRSno==="m") echo 'bgcolor="#f6cece"'; ?>><small> <?php  print($today[$stNo]);?></small></td>
                <td width="5%"  <?php   if($qHGTno==="h") echo 'bgcolor="#ffffff"'; if($qHGTno==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  printf("%6.1f",$hum[$stNo]);?></small></td>
                <td width="5%"  <?php   if($qHGTno==="h") echo 'bgcolor="#ffffff"'; if($qHGTno==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  printf("%6.1f",$air_dew_temp[$stNo]);?></small></td>
                <td width="5%"  <?php   if($qHGTno==="h") echo 'bgcolor="#ffffff"'; if($qHGTno==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  printf("%6.1f",$air[$stNo]);?></small></td>
                <td width="5%"bgcolor="#D0CE88"><small><?php  printf("%6.1f",$surft[$stNo]);?></small></td>
                <td width="5%" <?php   if($qFBSno==="h") echo 'bgcolor="#ffffff"'; if($qFBSno==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  printf("%6.1f",$surfdt[$stNo]);?></small></td>
                <td width="5%" <?php   if($qFBSno==="h") echo 'bgcolor="#ffffff"'; if($qFBSno==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  printf("%6.1f",$surf_freez_temp[$stNo]);?></small></td>
                <td width="9%" align="center" <?php   if($qFBSno==="h") echo 'bgcolor="#ffffff"'; if($qFBSno==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  printf("%6.1f / %6.1f",$surf_salt_pri[$stNo],$surf_salt_sat[$stNo]);?></small></td>
                <td width="7%" bgcolor="<?php  print($st_upc[$stNo]);?>"><small><?php  print($st_upa[$stNo]);?></small></td>
                <td width="5%"  <?php   if($qRaino==="h") echo 'bgcolor="#ffffff"'; if($qRaino==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php   
if($Value_7[$stNo]>-1)
	 {
		 if( $rain_int[$stNo]> 0.5 && $air[$stNo]> -2.49 ) printf("%6.0fmm",$rain_int[$stNo]); 
		 elseif($rain_int[$stNo]>0.5 && $air[$stNo]<-2.5 ) printf("%6.0fcm",$rain_int[$stNo]);  
		 else printf("%6.2f",$rain_int[$stNo]);
	 
 	 } else print($rain_int[$stNo]); ?></td>
                <td width="5%"  <?php   if($qRaino==="h") echo 'bgcolor="#ffffff"'; if($qRaino==="m") echo 'bgcolor="#f6cece"'; ?>><small><?php  print($st_cst[$stNo]);?></small></td>
                <td width="5%"><small><?php  printf("%6.2f",$surf_water_depth[$stNo]);?></small></td>
                <td width="4%"><small><?php   if($Value_7[$stNo]>-1){if($AccuV[$stNo]<99.9) printf("%6.1fV",$AccuV[$stNo]);  else printf("%6.0fV",$AccuV[$stNo]);} else printf("%6.1fV",$AccuV[$stNo]); ?></small></td>
               </tr>
             <?php  
}
}
}
//looping last_data END
//

 mysqli_close ($sql_connect);
             ?>


          </table>     <!-- INLINE ALKERETTÁBLA LE-TOP KONTROLL vége -->

 </body>
    </html>

