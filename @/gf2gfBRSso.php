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


		$p7 = new LinePlot( $gst_fpt,$gmeasure_time);
		$p7->SetColor("#66FF00");     //l.gr,   frpt
			$p7 ->SetWeight(8);
//		$p7->SetLegend($Fagypont);
		$graph->Add($p7);


	

		$p7 = new LinePlot( $gsurf_salt_sat,$gmeasure_time);
		$p7->SetColor("#33BB00");       //gr,    m.salt
		$p7 ->SetWeight(13);
//		$p7->SetLegend($Fagypont);
		$graph->Add($p7);

	
//	if($FBSno<"B" || $FBSno>"C" ){ //SSI utszonda
	if( $FBSno[0]>"b" && $FBSno[1]>"B" ){ //SSI utszonda
//	if( $FBSno<"A" ){
   		$v6 = new LinePlot($gst_Value_6,$gmeasure_time);
		$v6->SetColor("#CC0000");      //red,  u.salt
			$v6 ->SetWeight(8);
		$graph->Add($v6);

   		$v5 = new LinePlot( $gst_Value_5,$gmeasure_time);
		$v5->SetColor("#3333FF");     //bl,   u.wtr
			$v5 ->SetWeight(4);
		$graph->Add($v5);

		$v4 = new LinePlot( $gst_Value_4,$gmeasure_time);
		$v4->SetColor("#FFCC00");      //ylw,  u.wtr
			$v4 ->SetWeight(2);
		$graph->Add($v4);


		$v3 = new LinePlot( $gst_Value_3,$gmeasure_time);
		$v3->SetColor("#000099");     //d.bl,    v3
			$v3 ->SetWeight(3);
		$graph->Add($v3);


    		$v2 = new LinePlot($gst_Value_2,$gmeasure_time);
		$v2->SetColor("#CC0000");      //red,  s.salt
			$v2 ->SetWeight(8);
		$graph->Add($v2);

   		$v1 = new LinePlot( $gst_Value_1,$gmeasure_time);
		$v1->SetColor("#3333FF");      //bl,   s.salt
			$v1 ->SetWeight(4);
		$graph->Add($v1);

		$v0 = new LinePlot( $gst_Value_0,$gmeasure_time);
		$v0->SetColor("#FFCC00");      //ylw,   s.wtr
			$v0 ->SetWeight(2);
		$graph->Add($v0);
	} else {


    		$ps2 = new LinePlot($gst_precip_stat20,$gmeasure_time);
		$ps2->SetColor("#3333FF");        //bl,   cap0
			$ps2 ->SetWeight(4); 		
		$graph->Add($ps2);
    		$ps2 = new LinePlot($gst_precip_stat21,$gmeasure_time);
		$ps2->SetColor("#3333AA");
			$ps2 ->SetWeight(2); 	              //d.bl,  cap10
		$graph->Add($ps2);
    		$ps2 = new LinePlot($gst_precip_stat22,$gmeasure_time);
		$ps2->SetColor("#333333");         //drk,   cap100
			$ps2 ->SetWeight(1); 	
		$graph->Add($ps2);
    		$ps2 = new LinePlot($gst_precip_stat23,$gmeasure_time);
		$ps2->SetColor("#555555");         //gr,     cap1000
		$ps2->SetWeight(2);
		$graph->Add($ps2);	
		$ps2 = new LinePlot($gst_precip_stat24,$gmeasure_time);
		$ps2->SetColor("#111111");          //blk,   cap1000+ 
		$ps2->SetWeight(1);
		$graph->Add($ps2);

 //nem f0l0sleg
		$ps1 = new LinePlot( $gst_precip_stat1,$gmeasure_time);
		$ps1->SetColor("#000099");      //d.bl,   v3
			$ps1 ->SetWeight(3);
			$graph->Add($ps1);

		$ps3 = new LinePlot( $gst_precip_stat30,$gmeasure_time);
		$ps3->SetColor("#ff33ff");
			$ps3 ->SetWeight(5);      //l.bl,  s0.wtr
		$graph->Add($ps3);
		$ps3 = new LinePlot( $gst_precip_stat30,$gmeasure_time);
		$ps3->SetColor("#ffffff");
		$ps3 ->SetWeight(1);      //wh,  s0.wtr
		$graph->Add($ps3);


    		$ps3 = new LinePlot( $gst_precip_stat31,$gmeasure_time);
		$ps3->SetColor("#FF0000");        //red,   s10.salt
			$ps3 ->SetWeight(4); 		
		$graph->Add($ps3);



   		$ps3 = new LinePlot( $gst_precip_stat32,$gmeasure_time);
		$ps3->SetColor("#FFaa00");        //okr,   s100.wsalt 
			$ps3 ->SetWeight(3); 	
		$graph->Add($ps3);

	}

		$p1 = new LinePlot($gst_upn,$gmeasure_time);
		$p1->SetColor("#00ccff");      //l.bl,    rSt
		$p1 ->SetWeight(2);
//		$p1->SetLegend($ÚtállapoNAPÓRA);
		$graph->Add($p1);


		$p1v = new LinePlot($gst_upnv,$gmeasure_time);
		$p1v->SetColor("#00ccff");      //l.bl,    rSt
		$p1v ->SetWeight(4);
//		$p1v->SetLegend($ÚtállapoNAPÓRA);
		$graph->Add($p1v);

		$p1x = new LinePlot($gst_upnx,$gmeasure_time);
		$p1x->SetColor("#CC0000");      //red,    rSt-ice
		$p1x ->SetWeight(6);
//		$p1x->SetLegend($ÚtállapoNAPÓRA);
		$graph->Add($p1x);

   		$p8 = new LinePlot( $gst_AccV,$gmeasure_time);
		$p8->SetColor("#000033");     //d,  acc
			$p8 ->SetWeight(1);
		$p8->SetLegend(utf8_decode($TápV));
		$graph->Add($p8);


		$p6 = new LinePlot($gsx_surft,$gmeasure_time);
		$p6->SetColor('#CC0000');      //red,    sT
			$p6 ->SetWeight(4);
		$p6->SetLegend(utf8_decode($Úthõm));
		$graph->Add($p6);

 




		$st = new LinePlot( $gst_surf_temp,$gmeasure_time);
		$st->SetColor("#FFCC00");      //ylw,  msT
		$st ->SetWeight(1);
		$graph->Add($st);


		$p2 = new LinePlot($gsurf_water_depth,$gmeasure_time);
		$p2->SetColor("#000099");       //d.bl,   Wmm
			$p2 ->SetWeight(3);
		$p2->SetLegend(utf8_decode($Vízrétegmmd));
		$graph->Add($p2);

		$p7 = new LinePlot( $gst_fpt,$gmeasure_time);
		$p7->SetColor("#66FF00");      //gr,   fT
		$p7 ->SetWeight(0);
		$p7->SetLegend(utf8_decode($Fagypont));
		$graph->Add($p7);




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
$r5BRS8d=utf8_decode($r5BRS);

//if($lgn!="Xps" &&  $strm!='root')
{	
	$caption=new Text("$dd $st_ort8d   $strDate1-$strDate2  $r5BRS8d",5.0,4.0);
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


