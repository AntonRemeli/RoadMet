<?php  

error_reporting(0);

$pt=900;


//$L=$_GET[L];
if (isset($_GET['L'])) $L=$_GET[L];
include $L."/L0.php"; 

//NikakoNece: include "LM.php";


$mth=date('m',$ido1);

$wsHr=0;
if (($mth>3) && ($mth<10)) $wsHr= 0;//3600 ;
include "sql_connect_latin2.php";


$df=($ido2-$ido1)/86400;

 
 $f=36;
function TimeCallback1($aVal) { $f=36;   return Date('H',($aVal+$wsHr)*$f/25).":".Date('i',($aVal+$wsHr)*$f/25);}

function TimeCallback2($aVal) { $f=36;   return Date('d',($aVal+$wsHr)*$f/25)." ".Date('H',($aVal+$wsHr)*$f/25);}
function TimeCallback3($aVal) { $f=36;   return Date('m',($aVal+$wsHr)*$f/25).".".Date('d',($aVal+$wsHr)*$f/25);}

$ido1w  = $ido1+$wsHr ;
$ido2w  = $ido2+$wsHr ;


 
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
$li=0;
$lo=0;
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



		$sw = new LinePlot( $snow,$gmeasure_time);
		$sw->SetColor("#33ccFF");    //l.bl,   snow
		$sw ->SetWeight(15);
//		$sw->SetLegend(utf8_decode($Snow));
		$graph->Add($sw);



if($lgn=='Xps' || $strm=='root'){ 

	if($rowmValue_7==-2){

		$v2p = new LinePlot( $gst_Value_2p,$gmeasure_time);
		$v2p->SetColor("#cc8888");      //red,   count
		$v2p ->SetWeight(9);
		$v2p ->SetLegend(utf8_decode($Meresszam));
		$graph->Add($v2p);

		$v4p = new LinePlot($gst_Value_4p,$gmeasure_time);
		$v4p->SetColor("#cc3399");       //pnk,  fog
		$v4p->SetWeight(11);
		$v4p ->SetLegend(utf8_decode($Köd));
		$graph->Add($v4p);

   		$v3p = new LinePlot( $gst_Value_3p,$gmeasure_time);
		$v3p->SetColor("#cc9900");      //okr,   bgrnd
		$v3p ->SetWeight(8);
		$v3p ->SetLegend(utf8_decode($Napfényesség));
		$graph->Add($v3p);
 
	}
			
// meas/avg:
		$li = new LinePlot($lip,$gmeasure_time);
		$li->SetColor("#ffffaa");       //ylw,   lip
		$li->SetWeight(3);
//		$li ->SetLegend(utf8_decode($Impulzusszám));
		$graph->Add($li);
		$li = new LinePlot($lip,$gmeasure_time);
		$li->SetColor("#883300");       //brn,   lip
		$li->SetWeight(1);
		$graph->Add($li);

	// meas/hr:
		$lo = new LinePlot($loK,$gmeasure_time);
		$lo->SetColor("#ffff88");       //ylw,   loK   
		$lo->SetWeight(4);
		$graph->Add($lo);
		$lo = new LinePlot($loK,$gmeasure_time);
		$lo->SetColor("#883300");       //brn,   loK
		$lo->SetWeight(2);
		$graph->Add($lo);


		$pil = new LinePlot( $gst_precip_imp_lng,$gmeasure_time);
		$pil->SetColor("#33AAee");      //d.bl,    prlng
		$pil ->SetWeight(5);
		$pil ->SetLegend(utf8_decode($Impulzushossz));
		$graph->Add($pil);

		$pii = new LinePlot( $gst_precip_imp_int,$gmeasure_time);
//		$pii->SetColor("#33bbFF");      //l.bl,    print
		$pii->SetColor("#FFFF00");      //ylw,    print
		$pii ->SetWeight(3);
		$pii ->SetLegend(utf8_decode($Impulzusszám));
		$graph->Add($pii);


	}

		$p2 = new LinePlot($gsurf_water_depth,$gmeasure_time);
		$p2->SetColor("#000099");       //d.bl,   Wmm
		$p2 ->SetWeight(3);
//		$p2->SetLegend(utf8_decode($Vízrétegmmd));
		$graph->Add($p2);

  		$p3 = new LinePlot($gst_rain,$gmeasure_time);
		$p3->SetColor("#3333FF");    //d.bl,   rain
		$p3 ->SetWeight(3);
//		$p3->SetLegend(utf8_decode($Csapadékmmh));
		$graph->Add($p3);
 
		$p3w = new LinePlot($gst_rain,$gmeasure_time);
		$p3w->SetColor("#ffffFF");    //wh,   rain
		$p3w ->SetWeight(1);
//		$p3w->SetLegend(utf8_decode($Csapadékmmh));
		$graph->Add($p3w);


   		$p3f = new LinePlot($gst_rainfog,$gmeasure_time);
		$p3f->SetColor("#33ccFF");    //l.bl,   fog
		$p3f ->SetWeight(10);
		$graph->Add($p3f);




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
$r1BPW8d=utf8_decode($r1BPW);

//if($lgn!="Xps" &&  $strm!='root')
{	
	$caption=new Text("$dd $st_ort8d   $strDate1-$strDate2  $r1BPW8d",5.0,4.0);
//	$caption=new Text("$st_county_name8d - $st_ort8d ($dd)   $strDate1 - $strDate2",5.0,4.0);
	$caption->SetFont( FF_FONT2, FS_BOLD, 9);
	$graph->AddText($caption); 
}
/*
if($lgn=='Xps' || $strm=='root')
{
 	$caption=new Text("$lgn -   $st_ort    $strDate1 - $strDate2 ",5.0,8.0);
// 	$caption=new Text("-   $st_ort8d    $strDate1 - $strDate2 ",5.0,8.0);
	$caption->SetFont( FF_FONT2, FS_BOLD, 12);
	$graph->AddText($caption); 
}*/
	$graph->Stroke();

//echo 1;
}
?>


