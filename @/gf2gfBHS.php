<?php  
error_reporting(0);

$pt=900;

//$L=$_GET[L];
if (isset($_GET['L'])) $L=$_GET[L];
include $L."/L0.php"; 
//NikakoNece: include "LM.php";

/*
$mth=date('m',$ido1);

$wsHr=0;
//if (($mth>3) && ($mth<10)) $wsHr= 0;//3600 ;
if (($mth>3) && ($mth<10)) $wsHr= 3600 ;


$ido1w  = $ido1+$wsHr ;
$ido2w  = $ido2+$wsHr ;
*/

//$mth=date('m',time());
$mth=date('m',$ido1 );
$wsHr=0;
if (($mth>3) && ($mth<11)) $wsHr= 3600 ;  	//nyáron 1h hozzáadás

 $ido1w = $ido1 + $wsHr   ;
 $ido2w = $ido2 + $wsHr   ;    			//nyáron 1h hozzáadás

//$ido2x = $ido2w-7200;		//now = now+2hr - 2hr
//echo "now: ".date('Y.M.d',$ido2x)."  ".date('H:i',$ido2x)."  ";


include "sql_connect_latin2.php";


$df=($ido2-$ido1)/86400;
/*
$wsHrr=-3600;
 
 $f=36;
 $ff=36;

function TimeCallback1($aVal,$wsHrr) {  $ff=36; $wsHrr=0; return Date('H',($aVal+$wsHrr)*$ff/25).":".Date('i',($aVal+$wsHrr)*$ff/25);}

function TimeCallback2($aVal) { $f=36;   return Date('d',($aVal+$wsHr)*$f/25)." ".Date('H',($aVal+$wsHr)*$f/25);}
function TimeCallback3($aVal) { $f=36;   return Date('m',($aVal+$wsHr)*$f/25).".".Date('d',($aVal+$wsHr)*$f/25);}
*/
 $f=36;

function TimeCallback1($aVal) {  $f=36;  return Date('H',($aVal)*$f/25).":".Date('i',($aVal)*$f/25);}

function TimeCallback2($aVal) { $f=36;   return Date('d',($aVal)*$f/25)." ".Date('H',($aVal)*$f/25);}
function TimeCallback3($aVal) { $f=36;   return Date('m',($aVal)*$f/25).".".Date('d',($aVal)*$f/25);}



 
include "sel_st_data.php";

$tt = 30;
$bt = -10;
$q=1;
If($tt<40) $q=2;

$measure="stations.S".$dd;

//  station_id  measure_time  mta  mtp  rel_hum  air_dew_temp  air_temp  surf_temp  surf_deep_temp  surf_freez_temp  surf_salt_pri  surf_salt_sat  surf_condition  Value_7  Value_6  Value_5  Value_4  Value_3  Value_2  Value_1  Value_0  rain_int  surf_water_depth  precip_stat  precip_imp_int  precip_imp_lng  AccuV  door_contact  precip_stat1  precip_stat2  precip_stat3  hum  air  surft  surfdt  xps_time  
//
if($lgn!="Xps" && $strm!='root') $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w  and hum>0 and surf_freez_temp<0 order by measure_time ";


if($lgn=='Xps' || $strm=='root') $querym2 = "SELECT  *  FROM  $measure  where station_id=$dd and measure_time>=$ido1w and measure_time<$ido2w   order by measure_time ";


$rem2 = mysqli_query($sql_connect,$querym2);
$num_rows = mysqli_num_rows( $rem2 );

$idoS=60;
if($num_rows>$pt) $idoS=round(($ido2-$ido1)/$pt);
if($idoS<$add) $idoS=$add;
if($idoS<3600) $idoK=3600; else $idoK=$idoS;

$loop=0;
$li=1;
$lo=1;
$rmt=$ido1;
$rmK=$ido1;

include "gf2gf0.php";


while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))

//looping measure START:
{

include "gf2gf+.php";




	if($rowm[measure_time]-$rmt>=$idoS)
	{
$gmeasure_time[$loop]=($rmt+$wsHr)*25/$f;

include "gf2gf+loop.php";

	$loop++;

	$gmeasure_time[$loop]=($rowm[measure_time]+$wsHr)*25/$f;
	$rmt=$rowm[measure_time];
include "gf2gf+loop.php";

	$loop++;
	$li=0;
 
	include "gf2gf0.php";

		if($rowm[measure_time]-$rmK>=$idoK)
		{
			$rmK=$rowm[measure_time];
		$loM=$lo;
		$lo=0;
		}
	}
$li++;
$lo++;
  }
//looping measure STOP

mysqli_close ($sql_connect);

// if($num_rows<2)  print ("<a name='topT' href='#tocT' target='_self' ><b> $NincsAdat </b></a>");

//if($num_rows>1)
{
$graph = new Graph(800,450,"auto");


		$p6 = new LinePlot($gsx_surft,$gmeasure_time);
		$p6->SetColor('#CC0000');      //red,    sT
			$p6 ->SetWeight(4);
		$p6->SetLegend(utf8_decode($Úthõm));
		$graph->Add($p6);


		$p5 = new LinePlot($gsx_air,$gmeasure_time);
		$p5->SetColor("#3333FF");      //bl,   aT
			$p5 ->SetWeight(2);
		$p5->SetLegend(utf8_decode($Léghõm));
		$graph->Add($p5);



		$p4 = new LinePlot($gst_hpt,$gmeasure_time);
		$p4->SetColor("#FFCC44");      //ylw,  dT
			$p4 ->SetWeight(1);
		$p4->SetLegend(utf8_decode($Harmatpont));
		$graph->Add($p4);


		$p9 = new LinePlot($gsx_hum,$gmeasure_time);
		$p9->SetColor("#FFCC00");      //ylw,   rH
			$p9 ->SetWeight(3);
		$p9->SetLegend(utf8_decode($LégNedv));
		$graph->Add($p9);

 



	$graph->SetMarginColor('white');	

	$graph->SetScale("intlin",$bt,$tt,$ido1w*25/$f,$ido2w*25/$f);
	$graph->yaxis->scale->ticks->Set(5,1);
	$graph->xaxis->SetPos('min');	
if($df<3)	$graph->xaxis->SetLabelFormatCallback('TimeCallback1');
if($df>3 and $df<12)	$graph->xaxis->SetLabelFormatCallback('TimeCallback2');
if($df>12)	$graph->xaxis->SetLabelFormatCallback('TimeCallback3');
	$graph->xaxis->SetLabelAngle(90);
	$graph->SetFrame(false);
	$graph->SetMargin(30,30,55,40);
	$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');	
	$graph->xgrid->SetColor('lightblue'); 
	$graph->xgrid->SetLineStyle("dashed");
	$graph->xgrid->Show();
	$graph->legend->SetLayout(LEGEND_HOR);
	$graph->legend->SetLineWeight(5);
//	$graph->legend->SetShadow('gray@0.4',5);
	$graph->legend->SetPos(0.01,0.05,'centered','top');
if($L=='hu'){
	$strDate1 = date("Y.m.d H:i",$ido1);
	$strDate2 = date("Y.m.d H:i",$ido2);
} else	{
	$strDate1 = date(" H:i d.m.Y",$ido1);
	$strDate2 = date(" H:i d.m.Y",$ido2);
}
//if($lgn!="Xps")

$st_county_name8d=utf8_decode($st_county_name);
$st_ort8d=utf8_decode($st_ort);
$r3BHS8d=utf8_decode($r3BHS);

//if($lgn!="Xps" &&  $strm!='root')
{	
	$caption=new Text("$dd $st_ort8d   $strDate1-$strDate2  $r3BHS8d",5.0,4.0);
//	$caption=new Text("$st_county_name8d - $st_ort8d ($dd)   $strDate1 - $strDate2",5.0,4.0);
	$caption->SetFont( FF_FONT2, FS_BOLD, 9);
	$graph->AddText($caption); 
}
/*
if($lgn=='Xps' || $strm=='root')
{
 	$caption=new Text("-   $st_ort    $strDate1 - $strDate2 ",5.0,8.0);
// 	$caption=new Text("-   $st_ort8d    $strDate1 - $strDate2 ",5.0,8.0);
	$caption->SetFont( FF_FONT2, FS_BOLD, 12);
	$graph->AddText($caption); 
}*/
	$graph->Stroke();

//echo 1;
}
?>


