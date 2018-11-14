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

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$nowtime=time()+600;
$queryLD = "SELECT  station_id,measure_time,mta  FROM  last_data  where  measure_time<$nowtime and measure_time>mta and station_id<9400";
$reLD = mysqli_query($sql_connect,$queryLD);

while ($rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC))
//   looping last_data START
{
	$station=$rowLD[station_id];
	$measure_timeLD=$rowLD[measure_time];
	$mtaLD=$rowLD[mta];

   $stNo= $station;


$querys = "SELECT county_id,county,st_typ,st_Ort,id,   xps_k1,xps_k2,xps_kw,xps_ki,xps_kl, xps_kat,xps_kst,xps_krh FROM station_data where id=$station";

$res = mysqli_query($sql_connect,$querys);

$rows = mysqli_fetch_row($res);

$st_county_id=$rows[0];
$st_county_name=$rows[1];
$st_type=$rows[2];
$st_ort=$rows[3];
$st_id=$station;

$st_k1=$rows[5];
$st_k2=$rows[6];
$st_kw=$rows[7];
$st_ki=$rows[8];
$st_kl=$rows[9];

$st_kat=$rows[10];
$st_kst=$rows[11];
$st_krh=$rows[12];


$rel_hum_prv = 0;
$air_temp_prv = 0;
$surf_temp_prv = 0;
$precip_imp_int_prv = 0;
$precip_imp_lng_prv = 0;

$rel_hum_amo = 0;
$air_temp_amo = 0;
$surf_temp_amo = 0;
$rel_hum_amo_spd = 0;
$air_temp_amo_spd = 0;
$surf_temp_amo_spd = 0;


// only so it works:
 	    $sss_prv = "SELECT  surf_salt_pri  FROM  measure  where station_id=$station and measure_time=$mtaLD ";
    $sssp =  mysqli_query($sql_connect,$sss_prv);
  $rowLD = mysqli_fetch_array($sssp);
 $surf_salt_sat_prv=$rowLD[surf_salt_pri];
    

	 if ($surf_salt_sat_prv=="")  $surf_salt_sat_prv = 0 ;


$querym2 = "SELECT  *  FROM  measure  where station_id=$station and measure_time=$measure_timeLD ";
$rem2 = mysqli_query($sql_connect,$querym2);

$rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC) ;

// measure START:

	$st_meas[$stNo]=$rowm[measure_time];
	$st_air[$stNo]=$rowm[air_temp];
	$st_hum[$stNo]=$rowm[rel_hum];
	$st_impi[$stNo]=$rowm[precip_imp_int];
	$st_impl[$stNo]=$rowm[precip_imp_lng];
	$st_surft[$stNo]=$rowm[surf_temp];
	$st_surfdt[$stNo]=$rowm[surf_deep_temp];

	$st_AccV[$stNo] = $rowm[AccuV];
	
	$vi0[$stNo] = $rowm[Value_0];
	$vi1[$stNo] = $rowm[Value_1];
	$vi2[$stNo] = $rowm[Value_2];
	$vi3[$stNo] = $rowm[Value_3];
	$vi4[$stNo] = $rowm[Value_4];
	$vi5[$stNo] = $rowm[Value_5];
	$vi6[$stNo] = $rowm[Value_6];
	$vi7[$stNo] = $rowm[Value_7];


   include "clc_xps.php";
   $res = mysqli_query($sql_connect,"UPDATE measure SET hum=$st_hum[$stNo], air_dew_temp=$st_hpt[$stNo], air=$st_air[$stNo], surft=$st_surft[$stNo], surfdt=$st_surfdt[$stNo], surf_freez_temp=$st_fpt[$stNo], surf_salt_pri=$st_ssalt[$stNo], surf_salt_sat=$st_salt[$stNo], surf_condition=$st_upn[$stNo], surf_water_depth=$st_wdt[$stNo], rain_int=$st_rain[$stNo], precip_stat=$st_csn[$stNo] WHERE measure_time=$st_meas[$stNo] and station_id=$station");
  $surf_salt_sat_prv =  $st_ssalt[$stNo];
  include "clc_std.php";
    $resa = mysqli_query($sql_connect,"UPDATE last_data SET mtp=$mtaLD, mta=$st_meas[$stNo],  surf_sec_salt_sat=$st_ssalt[$stNo],  rel_hum=$st_hum[$stNo], air_dew_temp=$st_hpt[$stNo], air_temp=$st_air[$stNo], surf_temp=$st_surft[$stNo], surf_deep_temp=$st_surfdt[$stNo], Value_0=$vi0[$stNo], Value_1=$vi1[$stNo], Value_2=$vi2[$stNo], Value_3=$vi3[$stNo], Value_4=$vi4[$stNo], Value_5=$vi5[$stNo], Value_6=$vi6[$stNo], Value_7=$vi7[$stNo] WHERE  station_id=$station");
//   measure END

   $today[$stNo] =date("Y.m.d",$st_meas[$stNo]+22)." ".date("H:i",(round(($st_meas[$stNo])/600)*600));


          ?>
               <!-- ALKERETTÁBLA ADATSORA: -->

              <tr bgcolor="#D0CEA4" align=right   >

                <td width="8%" align=center><small><?php  print($station);?></small></td>
                <td width="7%"><small><?php  print($mtaLD);?></small></td>
                <td width="8%" align=center><small><?php  print($measure_timeLD);?></small></td>

                <td width="14%" align=center><small><?php  print($today[$stNo]);?></small></td>
                <td width="7%"><small><?php  printf("%6.1f",$st_hum[$stNo]);?></small></td>
                <td width="7%"><small><?php  printf("%6.1f",$st_hpt[$stNo]);?></small></td>
                <td width="7%"><small><?php  printf("%6.1f",$st_air[$stNo]);?></small></td>
                <td width="7%"bgcolor="#D0CE88"><small><?php  printf("%6.1f",$st_surft[$stNo]);?></small></td>
                <td width="7%"><small><?php  printf("%6.1f",$st_surfdt[$stNo]);?></small></td>
                <td width="7%"><small><?php  printf("%6.1f",$st_fpt[$stNo]);?></small></td>
                <td width="9%" align="center"><small><?php  printf("%6.1f / %6.1f",$st_ssalt[$stNo],$st_salt[$stNo]);?></small></td>
                <td width="7%" bgcolor="<?php  print($st_upc[$stNo]);?>"><small><?php  print($st_upa[$stNo]);?></small></td>
                <td width="7%"><small><?php   if($st_rain[$stNo]>1) printf("%6.0fmm/h",$st_rain[$stNo]);  else printf("%6.2f",$st_rain[$stNo]); ?> </small></td>
                <td width="7%"><small><?php  print($st_cst[$stNo]);?></small></td>
                <td width="7%"><small><?php   if($st_wdt[$stNo]>0.1) printf("%6.1fmm",$st_wdt[$stNo]);  else printf("%6.2f",$st_wdt[$stNo]); ?></small></td>
                <td width="7%"><small><?php   if($st_AccV[$stNo]<99.9) printf("%6.1f",$st_AccV[$stNo]);  else printf("%6.0f",$st_AccV[$stNo]); ?>V</small></td>
               </tr>
             <?php  
}
//looping last_data END

 mysqli_close ($sql_connect);
 

 
             ?>


          </table>     <!-- INLINE ALKERETTÁBLA LE-TOP KONTROLL vége -->

 </body>
    </html>

