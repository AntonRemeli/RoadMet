 <?php  

$MOD="mid_gf.php";
include "LM.php";
include "log.php";
//echo	"GSW:".$GSW;
// print("$sess");
//echo $c.'  '.$cc;
//echo $strm;
//...            include("mid_fej.php"); 
//... include("mid_dat.php");
//$cal = $_GET['cal'];
//include "gf2sess.php";
 if($strm=='root') 	include "station.php";
//echo "BPW= ".$BPW= $_GET['BPW']."....";
?>
<?php   ?>

<?php  
//echo $ido1 = $_GET['ido1'];
//echo "GD library";
//var_dump(gd_info());
?>
  <!-- GRAFIKON és LE-TOP KONTROLL: -->

<table><tr>

<?php  

$bnr=1;
if($bn[0]=="M" && $bn[5]=="s") $bnr=5;

$wh='';
if($bnr>1) $wh='width="800" height="440"';


?>
<!--img width="716" height="387"  -->
<img <?php   echo $wh;?> src='<?php   
  if($cal==1) echo "gx2.php" ;  else  echo "gf2kx.php"; ?><?php   print("$sess");?>#tocI'  usemap="#gomb"> 



       <!--td><img src='<?php  echo $L?>/gf<?php  echo $L?>.png' >
       </td-->


<map name="gomb">

<area shape="rect" coords="0, 10, 160, 30" title="<?php  echo $qmegj ;?> " alt="<?php  echo $qmegj ;?> ">
<area shape="rect" coords="0, 50, 760, 60" title="<?php  echo $Relparaw?> 100%" alt="<?php  echo $Relparaw?> 100%">
<area shape="rect" coords="0, 60, 760, 100" title="<?php  echo $Csapadékmmhw?> 2-5mm/h" alt="<?php  echo $Csapadékmmhw?> 2-5mm/h ">
<area shape="rect" coords="0, 100, 760, 110" title="<?php  echo $Relparaw?> 80%" alt="<?php  echo $Relparaw?> 80%">
<area shape="rect" coords="0, 110, 760, 120" title="<?php  echo $Csapadékmmhw?> 6-8mm/h" alt="<?php  echo $Csapadékmmhw?> 6-8mm/h">
<area shape="rect" coords="0, 120, 760, 130" title="<?php  echo $TápVw?> 220V" alt="<?php  echo $TápVw?> 220V">
<area shape="rect" coords="0, 130, 760, 140" title="<?php  echo $TápVw?> 13V" alt="<?php  echo $TápVw?> 13V">
<area shape="rect" coords="0, 140, 760, 150" title="<?php  echo $Relparaw?> 60%" alt="<?php  echo $Relparaw?> 60%">
<area shape="rect" coords="0, 180, 760, 190" title="<?php  echo $Úthõmw?> 15C" alt="<?php  echo $Úthõmw?> 15C">
<area shape="rect" coords="0, 220, 760, 230" title="<?php  echo $TápVw?> 12V" alt="<?php  echo $TápVw?> 12V">
<area shape="rect" coords="0, 230, 760, 240" title="<?php  echo $Léghõmw?> 10C" alt="<?php  echo $Léghõmw?> 10C">
<area shape="rect" coords="0, 310, 760, 320" title="<?php  echo $TápVw?> 11V" alt="<?php  echo $TápVw?> 11V">
<area shape="rect" coords="0, 320, 760, 330" title="<?php  echo $Fagypontw?> 0C" alt="<?php  echo $Fagypontw?> 0C">
<area shape="rect" coords="0, 360, 760, 370" title="<?php  echo $Fagypontw?> -5C" alt="<?php  echo $Fagypontw?> -5C">
<area shape="rect" coords="0, 380, 760, 390" title="<?php  echo $Vízrétegmmdw?> 0.3mm" alt="<?php  echo $Vízrétegmmdw?> 0.3mm">
<area shape="rect" coords="0, 390, 760, 400" title="<?php  echo $Vízrétegmmdw?> 0.1mm" alt="<?php  echo $Vízrétegmmdw?> 0.1mm">

<area shape="rect" coords="0, 30, 5, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aV=-1#tocI")?>'>
<area shape="rect" coords="5, 30, 20, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aV=1#tocI")?>'>
<area shape="rect" coords="20, 30, 35, 40" title="<?php  echo $TápVw?>" alt="<?php  echo $TápVw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aV=0#tocI")?>'>

<area shape="rect" coords="110, 30, 125, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&sT=-1#tocI")?>'>
<area shape="rect" coords="125, 30, 140, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&sT=1#tocI")?>'>
<area shape="rect" coords="140, 30, 230, 40" title="<?php  echo $Úthõmw?>" alt="<?php  echo $Úthõmw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&sT=0#tocI")?>'>

<area shape="rect" coords="230, 30, 245, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aT=-1#tocI")?>'>
<area shape="rect" coords="245, 30, 260, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aT=1#tocI")?>'>
<area shape="rect" coords="260, 30, 360, 40" title="<?php  echo $Léghõmw?>" alt="<?php  echo $Léghõmw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aT=0#tocI")?>'>


<?php  if($lgn=="Xps"){?>
<area shape="rect" coords="360, 10, 375, 20" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=-1#tocI")?>'>
<area shape="rect" coords="375, 10, 390, 20" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=1#tocI")?>'>
<area shape="rect" coords="390, 10, 465, 20" title="<?php  echo 'v3'?>" alt="<?php  echo 'v3'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=0#tocI")?>'>
<?php  }?>

<area shape="rect" coords="360, 20, 375, 30" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&rH=-1#tocI")?>'>
<area shape="rect" coords="375, 20, 390, 30" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&rH=1#tocI")?>'>
<area shape="rect" coords="390, 20, 465, 30" title="<?php  echo $Relparaw?>" alt="<?php  echo $Relparaw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&rH=0#tocI")?>'>

<area shape="rect" coords="360, 30, 375, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&dT=-1#tocI")?>'>
<area shape="rect" coords="375, 30, 390, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&dT=1#tocI")?>'>
<area shape="rect" coords="390, 30, 465, 40" title="<?php  echo $Harmatpontw?>" alt="<?php  echo $Harmatpontw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&dT=0#tocI")?>'>


<?php  if($lgn=="Xps"){?>
<area shape="rect" coords="465, 0, 480, 10" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=-1#tocI")?>'>
<area shape="rect" coords="480, 0, 495, 10" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=1#tocI")?>'>
<area shape="rect" coords="495, 0, 580, 10" title="<?php  echo 'v3'?>" alt="<?php  echo 'v3'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=0#tocI")?>'>

<area shape="rect" coords="465, 10, 480, 20" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=-1#tocI")?>'>
<area shape="rect" coords="480, 10, 495, 20" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=1#tocI")?>'>
<area shape="rect" coords="495, 10, 580, 20" title="<?php  echo 'v3'?>" alt="<?php  echo 'v3'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=0#tocI")?>'>

<area shape="rect" coords="465, 20, 480, 30" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=-1#tocI")?>'>
<area shape="rect" coords="480, 20, 495, 30" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=1#tocI")?>'>
<area shape="rect" coords="495, 20, 580, 30" title="<?php  echo 'v3'?>" alt="<?php  echo 'v3'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v3=0#tocI")?>'>


<?php  }?>

<area shape="rect" coords="465, 30, 480, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&Rm=-1#tocI")?>'>
<area shape="rect" coords="480, 30, 495, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&Rm=1#tocI")?>'>
<area shape="rect" coords="495, 30, 580, 40" title="<?php  echo $Csapadékmmhw?>" alt="<?php  echo $Csapadékmmhw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&Rm=0#tocI")?>'>


<?php  if($lgn=="Xps"){?>
<area shape="rect" coords="575, 20, 590, 30" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v0=-1#tocI")?>'>
<area shape="rect" coords="590, 20, 605, 30" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v0=1#tocI")?>'>
<area shape="rect" coords="605, 20, 690, 30" title="<?php  echo 'v0/cn1'?>" alt="<?php  echo 'v0/cn1'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v0=0#tocI")?>'>

<area shape="rect" coords="575, 10, 590, 20" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v1=-1#tocI")?>'>
<area shape="rect" coords="590, 10, 605, 20" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v1=1#tocI")?>'>
<area shape="rect" coords="605, 10, 690, 20" title="<?php  echo 'v1/cn10'?>" alt="<?php  echo 'v1/cn10'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v1=0#tocI")?>'>

<area shape="rect" coords="575, 0, 590, 10" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v2=-1#tocI")?>'>
<area shape="rect" coords="590, 0, 605, 10" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v2=1#tocI")?>'>
<area shape="rect" coords="605, 0, 690, 10" title="<?php  echo 'v2/cn100'?>" alt="<?php  echo 'v2/cn100'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v2=0#tocI")?>'>
<?php  }?>

<area shape="rect" coords="575, 30, 590, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&Wm=-1#tocI")?>'>
<area shape="rect" coords="590, 30, 605, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&Wm=1#tocI")?>'>
<area shape="rect" coords="605, 30, 690, 40" title="<?php  echo $Vízrétegmmdw?>" alt="<?php  echo $Vízrétegmmdw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&Wm=0#tocI")?>'>


<?php  if($lgn=="Xps"){?>
<area shape="rect" coords="690, 20, 705, 30" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v4=-1#tocI")?>'>
<area shape="rect" coords="705, 20, 720, 30" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v4=1#tocI")?>'>
<area shape="rect" coords="720, 20, 760, 30" title="<?php  echo 'v4/cp1'?>" alt="<?php  echo 'v4/cp1'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v4=0#tocI")?>'>

<area shape="rect" coords="690, 10, 705, 20" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v5=-1#tocI")?>'>
<area shape="rect" coords="705, 10, 720, 20" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v5=1#tocI")?>'>
<area shape="rect" coords="720, 10, 760, 20" title="<?php  echo 'v5/cp10'?>" alt="<?php  echo 'v5/cp10'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v5=0#tocI")?>'>

<area shape="rect" coords="690, 0, 705, 10" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v6=-1#tocI")?>'>
<area shape="rect" coords="705, 0, 720, 10" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v6=1#tocI")?>'>
<area shape="rect" coords="720, 0, 760, 10" title="<?php  echo 'v6/cp100'?>" alt="<?php  echo 'v6/cp100'?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&v6=0#tocI")?>'>
<?php  }?>

<area shape="rect" coords="690, 30, 705, 40" title="--" alt="--"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&fT=-1#tocI")?>'>
<area shape="rect" coords="705, 30, 720, 40" title="++" alt="++"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&fT=1#tocI")?>'>
<area shape="rect" coords="720, 30, 740, 40" title="<?php  echo $Fagypontw?>" alt="<?php  echo $Fagypontw?>"  href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&fT=0#tocI")?>'>


<area shape="rect" coords="760, 0, 780, 10" title="<?php  echo $sess;?>" alt="aT+" href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aT=1#tocI")?>'>
<area shape="rect" coords="780, 0, 800, 10" title="<?php  echo $sess;?>" alt="aT-" href='<?php  print ("$INDEX&dd=$dd&cty=$cty&cmd=4&aT=-1#tocI")?>'>
<area shape="rect" coords="160, 10, 760, 30" title="<?php  echo $köd ;?> " alt="<?php  echo $köd ;?> ">
<area shape="rect" coords="0, 430, 760, 460" title="<?php  echo $led ;?> " alt="<?php  echo $led ;?> ">

</map>

</tr>
<?php   if($dd>99535 && $dd<99538){?>
<tr>
<img src='
<?php     echo "gf2kw.php"; ?><?php   print("$sess");?>#tocI
' 
 usemap="#gombw"> 
 </tr>
<?php  }?>

</table>
<?php   //if($Lsw>0)
//echo $bn;
$bnr=1;
if($bn[0]=="M" && $bn[5]=="s") $bnr=5;

if($bnr<5)  { 
include("Grf_swi.php"); //echo "BPW2= ".$BPW."....";
}?>
<table>
<?php  
 
 
//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryst = "SELECT * FROM stations where st_id=$dd && GSMno>'' && cty>$c && cty<$cc ";
$rest = mysqli_query($sql_connect,$queryst);

//$mth=date('m',time());
$mth=date('m',$ido1 );
$wsHr=0;
if (($mth>3) && ($mth<11)) $wsHr= 3600 ;  	//nyáron 1h hozzáadás

 $ido1w = $ido1 + $wsHr   ;
 $ido2w = $ido2 + $wsHr   ;    			//nyáron 1h hozzáadás

//$ido2x = $ido2w-7200;		//now = now+2hr - 2hr
//echo "now: ".date('Y.M.d',$ido2x)."  ".date('H:i',$ido2x)."  ";

$measure="stations.S".$dd;

//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
//
if($lgn!="Xps" && $strm!='root') $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w  and hum>0 and surf_freez_temp<0 order by measure_time ";


if($lgn=='Xps' || $strm=='root') $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w   order by measure_time ";


$rem2 = mysqli_query($sql_connect,$querym2);
$num_rows = mysqli_num_rows( $rem2 );


mysqli_close ($sql_connect);

if($num_rows<1)  print ("<a name='topT' href='#tocT' target='_self' ><b> $NincsAdat </b></a>");

if( mysqli_num_rows( $rest)>0) {
 
 if($strm=='root') 
 {
//	 include "xps_last.php";
	 include "serv.php";
//	 include "tab.php";
 }
}
?>
</table>


