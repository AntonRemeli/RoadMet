	

<?php   
//echo '<br> <b>'.'mid_at_std.php '.'</b>';
include "LM.php";
//include "LM".$L.".php";

?>


 <html>
<head>
<TITLE>LOCALHOST TABLE</TITLE>
<META NAME="Title" CONTENT="LOCALHOST TABLE">
<META NAME="Author" CONTENT="Anton Remeli">
<META NAME="Copyright" CONTENT="EurMet2006">
<META NAME="Revisit" CONTENT="After 6 days">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>
 <body  >

<?php  
error_reporting(0);



include "sql_connect_latin2.php";
/*echo $lgn = $_GET['lgn'];
   $msr = $_GET['msr']; 
   $dd = $_GET['dd'];
	$ido1 = $_GET['ido1'];
	$ido2 = $_GET['ido2'];
 */




//$mth=date('m',time());
$mth=date('m',$ido1 );
$wsHr=0;
if (($mth>3) && ($mth<11)) $wsHr= 3600 ;  	//nyáron 1h hozzáadás

 $ido1w = $ido1 + $wsHr   ;
 $ido2w = $ido2 + $wsHr   ;    			//nyáron 1h hozzáadás

//$ido2x = $ido2w-7200;		//now = now+2hr - 2hr
//echo "now: ".date('Y.M.d',$ido2x)."  ".date('H:i',$ido2x)."  ";

/*
$mth=date('m',time());
$wsHr=7200;
if (($mth>3) && ($mth<11)) $wsHr= 3600 ;

//if($ido1> (time()-95000)) $ido1 = time()-$wsHr;

 $ido1w = $ido1 - $wsHr +3600  ;
 $ido2w = $ido2 - $wsHr +3600  ;
// $ido1w = $ido1 - $wsHr -3600 ;
// $ido2w = $ido2 - $wsHr -3600 ;
*/
 
include "sel_st_data.php";
/*
$measure="measure";
if($ido1<1210000000) $measure="utmet080520.measure";
if($ido1<1203000000) $measure="utmetOLD.measure";
 */
$measure="stations.S".$dd;
// 	id	station_id	measure_time	rel_hum	air_dew_temp	air_temp	surf_temp	surf_deep_temp	surf_freez_temp	surf_salt_pri	surf_salt_sat	surf_condition	
// Value_7	Value_6	Value_5	Value_4	Value_3	Value_2	Value_1	Value_0	rain_int	surf_water_depth	precip_stat	precip_imp_int	precip_imp_lng	AccuV	door_contact	
//  precip_stat1	precip_stat2	precip_stat3	wind1	wind2	wind3	wind4	wind5	snow	hum	air	surft	surfdt	xps_time

if($lgn!="Xps") $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w  and hum>0 and surf_freez_temp<0 order by measure_time ";
if($lgn=="Xps" or $lgn=="A"  or $lgn=="EmPsvs" ) $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w  order by measure_time ";
//$querym2 = "SELECT  *  FROM  measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w and hum>0 and surf_freez_temp<0 order by measure_time ";
//$querym2 = "SELECT  *  FROM  $msr   where station_id=$st_id and measure_time>=$ido1w and measure_time<$ido2w and hum>0 and surf_freez_temp<0 order by measure_time ";

$rem2 = mysqli_query($sql_connect,$querym2);
  $num_rows = mysqli_num_rows( $rem2 );
  
if($num_rows<1)  print ("<a name='topT' href='#tocT' target='_self' ><b> $NincsAdat </b></a>");

$stNo=$dd;
//$surf_salt_pri0[$stNo] =  0;


if($num_rows>33)  print ("<a name='topT' href='#tocT' target='_self' ><b> $Legfrisebbmérésiadatok </b> All</a>");

?>

<!-- INLINE ALKERETTÁBLA LE-TOP KONTROLL -->


  <table width="100%" border="0" cellspacing="1" cellpadding="2"  align="center" class="smallgreyBold">


<?php   
$nn=0;
while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))

//looping measure START:
  {
	

 include "sft0_xps.php";

	include $L."/clc_std-".$L.".php";
	include "clc_std-c.php"; //2979: Regen soll blau werden (im Gruppenstatus)

 if($L=='hu')  $today[$stNo] =date("Y.m.d",$measure_time[$stNo]+22)."&nbsp;".date("H:i",(round(($measure_time[$stNo])/60)*60));
 else  $today[$stNo] =date("H:i",(round(($measure_time[$stNo])/60)*60))."&nbsp;".date("d.m.Y",$measure_time[$stNo]+22);
// $tod[$stNo] =date("H:i",(round(($measure_time[$stNo])/60)*60));
$tod[$stNo] = substr($xps_time[$stNo],-8,5);
 if($nn==0){               
         ?>    
   <tr>  
                <td  align=center><small>UnixTime</small></td>
                 <td  align=center><small>Time</small></td>
                <td ><small>%hum</small></td>
                <td ><small>dewT</small></td>
                <td ><small>airT</small></td>
                <td> <small>surfT</small></td>
                <td ><small>soilT</small></td>
		<td ><small>freezT</small></td>


                <td align="center"><small>salt</small></td>
		<td ><small>rain </small></td>
                <td > <small>precip</small></td>
                <td > <small>water</small></td>
                <td > <small>road</small></td>

		<td > <small>AccuV</small></td>

  <td  ><small>wind1</small></td>
  <td  ><small>wind3</small></td>
 <td  ><small>snow</small></td>
 
                <td ><small>xps_time</small></td>

                <td ><small>pri</small></td>
               <td ><small>sat</small></td>
               <td ><small>rain</small></td>
                <td ><small>water</small></td>

                <td ><small>pstat</small></td>
                <td ><small>int</small></td>
                <td ><small>lng</small></td>

               <td ><small>rhum</small></td>
               <td ><small>air</small></td>
               <td ><small>surf</small></td>
         

               <td ><small>pstat1</small></td>
                <td ><small>pstat2</small></td>
                <td ><small>pstat3</small></td>

                <td ><small>Val7</small></td>
                <td ><small>Val6</small></td>
                <td ><small>Val5</small></td>
                <td ><small>Val4</small></td>
                <td ><small>Val3</small></td>
                <td ><small>Val2</small></td>
                <td ><small>Val1</small></td>
                <td ><small>Val0</small></td>               
  
</tr>
 
<?php  }
?>
                

               <!-- ALKERETTÁBLA ADATSORA: -->

              <tr bgcolor="#D0CEA4" align=right   class="smallgreyBold" >

              
<?php  
// /*
       	if($strm=='root')
        {echo   '<td  align=center><small>';
         echo $measure_time[$stNo];
	echo '</small></td>';
	
	}

	elseif($lgn=='A')
	{
 		
		echo   '<td  align=center><small>';
         echo $xps_time[$stNo];
         echo '</small></td>';}
	else {}
// */
       ?>
                <td  align=center><small><?php  print($today[$stNo]);?></small></td>
                <td ><small><?php  printf("%6.1f",$hum[$stNo]);?></small></td>
                <td ><small><?php  printf("%6.1f",$air_dew_temp[$stNo]);?></small></td>
                <td ><small><?php  printf("%6.1f°C",$air[$stNo]);?></small></td>
                <td bgcolor="#D0CE88"><small><?php  printf("%6.2f",$surft[$stNo]);?></small></td>
                <td ><small><?php   printf("%6.1f",$surfdt[$stNo]); ?></small></td>
		<td ><small><?php    printf("%6.1f",$surf_freez_temp[$stNo]); ?></small></td>

<?php   $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 ?>

                <td align="center"><small><?php   printf("%6.1fgr",$sSp) ?></small></td>
		<td  bgcolor="<?php  print($st_csc[$stNo]);?>"><small><?php  
 if($rain_int[$stNo]>0.5 && $air[$stNo]> 0.49 ) printf("%6.0fmm",$rain_int[$stNo]); 
 elseif($rain_int[$stNo]>0.5 && $air[$stNo]<0.5 ) printf("%6.0fcm",$rain_int[$stNo]);  
 elseif($lgn=='Xps' or $lgn=='A') printf("%6.2f",$rain_int[$stNo]); 
 else echo "0";
?> </small></td>
                <td  bgcolor="<?php  print($st_csc[$stNo]);?>"><small><?php  print($st_cst[$stNo]);?></small></td>
                <td  bgcolor="<?php  print($st_upc[$stNo]);?>"><small><?php   if($rowm[surf_water_depth]>0.1) printf("%6.1fmm",$rowm[surf_water_depth]);  else printf("%6.2f",$rowm[surf_water_depth]);?></small></td>
                <td  bgcolor="<?php  print($st_upc[$stNo]);?>"><small><?php  print($st_upa[$stNo]);?></small></td>

		<td  <?php   if($AccuV[$stNo]<11.5) echo 'bgcolor="#ff2222"';//3084:alacsony aksi piros legyen?>><small><?php  if($AccuV[$stNo]<99.9) printf("%6.1fV",$AccuV[$stNo]);  else printf("%6.0fV",$AccuV[$stNo]); ?></small></td>

  <td  ><small><?php  printf("%6.0fm/s",$wind1[$stNo]/1);?></small></td>
  <td  ><small><?php  if($wind1[$stNo]>1) printf("%6.0f°",$wind3[$stNo]); else echo "-";?></small></td>
 <td  ><small><?php  printf("%6.0fcm",$snow[$stNo]/10);?></small></td>

                <td ><small><?php   echo $tod[$stNo];?></small></td>
 
               <td ><small><?php  print($surf_salt_pri[$stNo]);?></small></td>
               <td ><small><?php  print($surf_salt_sat[$stNo]);?></small></td>
               <td ><small><?php  print($rain_int[$stNo]);?></small></td>
                <td ><small><?php  print($surf_water_depth[$stNo]);?></small></td>

              <td ><small><?php  print($precip_stat[$stNo]);?></small></td>
                <td  bgcolor="#FFFF00" ><small><?php  print($precip_imp_int[$stNo]);?></small></td>
                <td bgcolor="#00ccff" ><small><?php  print($precip_imp_lng[$stNo]);?></small></td>


               <td ><small><?php  print($rel_hum[$stNo]);?></small></td>
               <td ><small><?php  print($air_temp[$stNo]);?></small></td>

               <td  bgcolor="#D0CE88"><small><?php  print($surf_temp[$stNo]);?></small></td>
               <td ><small><?php  print($precip_stat1[$stNo]);?></small></td>
                <td ><small><?php  print($precip_stat2[$stNo]);?></small></td>
                <td ><small><?php  print($precip_stat3[$stNo]);?></small></td>

                <td ><small><?php  print($Value_7[$stNo]);?></small></td>
                <td ><small><?php  print($Value_6[$stNo]);?></small></td>
                <td ><small><?php  print($Value_5[$stNo]);?></small></td>
                <td ><small><?php  print($Value_4[$stNo]);?></small></td>
                <td ><small><?php  print($Value_3[$stNo]);?></small></td>
                <td ><small><?php  print($Value_2[$stNo]);?></small></td>
                <td ><small><?php  print($Value_1[$stNo]);?></small></td>
                <td ><small><?php  print($Value_0[$stNo]);?></small></td>

 
<?php  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	id	station_id	measure_time	rel_hum	air_dew_temp	air_temp	surf_temp	surf_deep_temp	surf_freez_temp	surf_salt_pri	surf_salt_sat	surf_condition	Value_7	Value_6	Value_5	Value_4	Value_3	Value_2	Value_1	Value_0	rain_int	surf_water_depth	precip_stat	precip_imp_int	precip_imp_lng	AccuV	door_contact	precip_stat1	precip_stat2	precip_stat3	wind1	wind2	wind3	wind4	wind5	snow	hum	air	surft	surfdt	xps_time
?>
               </tr>
<?php  
$nn++;
if($nn==99) $nn=0;
  }
//looping measure END


mysqli_close ($sql_connect);
if($ido1>time()-9000) $ido1=time()-99000;
//include "sess.php";
//href="mid_at_std.php<?php  echo $sess;  &ido1=<?php  echo $ido1;  #topT"
  ?>

          </table>     <!-- INLINE ALKERETTÁBLA LE-TOP KONTROLL vége -->
<?php  
if($num_rows>33) 
{
?>
	  <a name="tocT" href="#topT" target="_self"> <b><?php   echo "    <<  ";?><?php  echo $Visszatáblázattetejére ;?></b>  </a>
<?php  
}
else  print ("<a name='tocT' href='mid_at_std.php$sess&ido1=$ido1#topT' target='_self' ><b> $Visszanapelejére </b></a>");
?>

 </body>
    </html>

