<?php  

error_reporting(0);

$pt=900;


$L=$_GET[L];
include $L."/L0.php"; 
//NikakoNece: include "LM.php";


$mth=date('m',$ido1);

$wsHr=0;
if (($mth>3) && ($mth<10)) $wsHr= 0;//3600 ;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }



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

 

$graph = new Graph(800,450,"auto");

		$p7 = new LinePlot( $gst_fpt,$gmeasure_time);
		$p7->SetColor("#66FF00");     //l.gr,   frpt
if($_GET['fT']<0)	$p7 ->SetWeight(0);
elseif($_GET['fT']>0)	$p7 ->SetWeight(20);
else			$p7 ->SetWeight(8);
//		$p7->SetLegend($Fagypont);
		$graph->Add($p7);


if($lgn=='Xps' || $strm=='root'){ 

	if($rowmValue_7==-2){

		$v2p = new LinePlot( $gst_Value_2p,$gmeasure_time);
		$v2p->SetColor("#cc8888");      //red,   count
		$v2p ->SetWeight(25);
		$graph->Add($v2p);

		$v4p = new LinePlot($gst_Value_4p,$gmeasure_time);
		$v4p->SetColor("#cc3399");       //pnk,  fog
		$v4p->SetWeight(11);
		$graph->Add($v4p);

   		$v3p = new LinePlot( $gst_Value_3p,$gmeasure_time);
		$v3p->SetColor("#cc9900");      //okr,   bgrnd
		$v3p ->SetWeight(8);
		$graph->Add($v3p);
 
	}
			
// meas/avg:
		$li = new LinePlot($lip,$gmeasure_time);
		$li->SetColor("#ffffaa");       //ylw,   lip
		$li->SetWeight(2);
		$graph->Add($li);
		$li = new LinePlot($lip,$gmeasure_time);
		$li->SetColor("#883300");       //brn,   lip
		$li->SetWeight(1);
		$graph->Add($li);

	// meas/hr:
		$lo = new LinePlot($loK,$gmeasure_time);
		$lo->SetColor("#ffff88");       //ylw,   loK   
		$lo->SetWeight(3);
		$graph->Add($lo);
		$lo = new LinePlot($loK,$gmeasure_time);
		$lo->SetColor("#883300");       //brn,   loK
		$lo->SetWeight(2);
		$graph->Add($lo);


		$pil = new LinePlot( $gst_precip_imp_lng,$gmeasure_time);
		$pil->SetColor("#33AAee");      //d.bl,    prlng
		$pil ->SetWeight(5);
		$graph->Add($pil);

		$pii = new LinePlot( $gst_precip_imp_int,$gmeasure_time);
//		$pii->SetColor("#33bbFF");      //l.bl,    print
		$pii->SetColor("#FFFF00");      //ylw,    print
		$pii ->SetWeight(3);
		$graph->Add($pii);

		$p7 = new LinePlot( $gsurf_salt_sat,$gmeasure_time);
		$p7->SetColor("#33BB00");       //gr,    m.salt
		$p7 ->SetWeight(13);
//		$p7->SetLegend($Fagypont);
		$graph->Add($p7);

	
	if($FBSno<"B" || $FBSno>"C" ){
   		$v6 = new LinePlot($gst_Value_6,$gmeasure_time);
		$v6->SetColor("#CC0000");      //red,  u.salt
if($_GET['v6']<0)	$v6 ->SetWeight(0);
elseif($_GET['v6']>0)	$v6 ->SetWeight(15);
else			$v6 ->SetWeight(8);
		$graph->Add($v6);

   		$v5 = new LinePlot( $gst_Value_5,$gmeasure_time);
		$v5->SetColor("#3333FF");     //bl,   u.wtr
if($_GET['v5']<0)	$v5 ->SetWeight(0);
elseif($_GET['v5']>0)	$v5 ->SetWeight(10);
else			$v5 ->SetWeight(4);
		$graph->Add($v5);

		$v4 = new LinePlot( $gst_Value_4,$gmeasure_time);
		$v4->SetColor("#FFCC00");      //ylw,  u.wtr
if($_GET['v4']<0)	$v4 ->SetWeight(0);
elseif($_GET['v4']>0)	$v4 ->SetWeight(10);
else			$v4 ->SetWeight(2);
		$graph->Add($v4);


		$v3 = new LinePlot( $gst_Value_3,$gmeasure_time);
		$v3->SetColor("#000099");     //d.bl,    v3
if($_GET['v3']<0)	$v3 ->SetWeight(0);
elseif($_GET['v3']>0)	$v3 ->SetWeight(10);
else			$v3 ->SetWeight(3);
		$graph->Add($v3);


    		$v2 = new LinePlot($gst_Value_2,$gmeasure_time);
		$v2->SetColor("#CC0000");      //red,  s.salt
if($_GET['v2']<0)	$v2 ->SetWeight(0);
elseif($_GET['v2']>0)	$v2 ->SetWeight(15);
else			$v2 ->SetWeight(8);
		$graph->Add($v2);

   		$v1 = new LinePlot( $gst_Value_1,$gmeasure_time);
		$v1->SetColor("#3333FF");      //bl,   s.salt
if($_GET['v1']<0)	$v1 ->SetWeight(0);
elseif($_GET['v1']>0)	$v1 ->SetWeight(10);
else			$v1 ->SetWeight(4);
		$graph->Add($v1);

		$v0 = new LinePlot( $gst_Value_0,$gmeasure_time);
		$v0->SetColor("#FFCC00");      //ylw,   s.wtr
if($_GET['v0']<0)	$v0 ->SetWeight(0);
elseif($_GET['v0']>0)	$v0 ->SetWeight(10);
else			$v0 ->SetWeight(2);
		$graph->Add($v0);
	} else {

		$ps3 = new LinePlot( $gst_precip_stat30,$gmeasure_time);
		$ps3->SetColor("#00CCFF");
if($_GET['v0']<0)	$ps3 ->SetWeight(0);
elseif($_GET['v0']>0)	$ps3 ->SetWeight(15);
else			$ps3 ->SetWeight(5);      //l.bl,  s0.wtr
		$graph->Add($ps3);
    		$ps3 = new LinePlot( $gst_precip_stat31,$gmeasure_time);
		$ps3->SetColor("#FF0000");        //red,   s10.salt
if($_GET['v1']<0)	$ps3 ->SetWeight(0);
elseif($_GET['v1']>0)	$ps3 ->SetWeight(15);
else			$ps3 ->SetWeight(4); 		
		$graph->Add($ps3);

 //nem f0l0sleg
		$ps1 = new LinePlot( $gst_precip_stat1,$gmeasure_time);
		$ps1->SetColor("#000099");      //d.bl,   v3
if($_GET['v3']<0)	$ps1 ->SetWeight(0);
elseif($_GET['v3']>0)	$ps1 ->SetWeight(10);
else			$ps1 ->SetWeight(3);
			$graph->Add($ps1);

   		$ps3 = new LinePlot( $gst_precip_stat32,$gmeasure_time);
		$ps3->SetColor("#FFaa00");        //okr,   s100.wsalt 
if($_GET['v2']<0)	$ps3 ->SetWeight(0);
elseif($_GET['v2']>0)	$ps3 ->SetWeight(10);
else			$ps3 ->SetWeight(3); 	
		$graph->Add($ps3);

    		$ps2 = new LinePlot($gst_precip_stat20,$gmeasure_time);
		$ps2->SetColor("#3333FF");        //bl,   cap0
if($_GET['v4']<0)	$ps2 ->SetWeight(0);
elseif($_GET['v4']>0)	$ps2 ->SetWeight(15);
else			$ps2 ->SetWeight(4); 		
		$graph->Add($ps2);
    		$ps2 = new LinePlot($gst_precip_stat21,$gmeasure_time);
		$ps2->SetColor("#3333AA");
if($_GET['v5']<0)	$ps2 ->SetWeight(0);
elseif($_GET['v5']>0)	$ps2 ->SetWeight(10);
else			$ps2 ->SetWeight(2); 	              //d.bl,  cap10
		$graph->Add($ps2);
    		$ps2 = new LinePlot($gst_precip_stat22,$gmeasure_time);
		$ps2->SetColor("#333333");         //drk,   cap100
if($_GET['v6']<0)	$ps2 ->SetWeight(0);
elseif($_GET['v6']>0)	$ps2 ->SetWeight(10);
else			$ps2 ->SetWeight(1); 	
		$graph->Add($ps2);
    		$ps2 = new LinePlot($gst_precip_stat23,$gmeasure_time);
		$ps2->SetColor("#555555");         //gr,     cap1000
		$ps2->SetWeight(2);
		$graph->Add($ps2);	
		$ps2 = new LinePlot($gst_precip_stat24,$gmeasure_time);
		$ps2->SetColor("#111111");          //blk,   cap1000+ 
		$ps2->SetWeight(1);
		$graph->Add($ps2);


	}

		$p1 = new LinePlot($gst_upn,$gmeasure_time);
		$p1->SetColor("#00ccff");      //l.bl,    rSt
		$p1 ->SetWeight(2);
//		$p1->SetLegend($ĂtĂĄllapoNAPĂRA);
		$graph->Add($p1);
}

		$p1v = new LinePlot($gst_upnv,$gmeasure_time);
		$p1v->SetColor("#00ccff");      //l.bl,    rSt
		$p1v ->SetWeight(2);
//		$p1v->SetLegend($ĂtĂĄllapoNAPĂRA);
		$graph->Add($p1v);

		$p1x = new LinePlot($gst_upnx,$gmeasure_time);
		$p1x->SetColor("#CC0000");      //red,    rSt-ice
		$p1x ->SetWeight(6);
//		$p1x->SetLegend($ĂtĂĄllapoNAPĂRA);
		$graph->Add($p1x);

   		$p8 = new LinePlot( $gst_AccV,$gmeasure_time);
		$p8->SetColor("#000033");     //d,  acc
if($_GET['aV']<0)	$p8 ->SetWeight(0);
elseif($_GET['aV']>0)	$p8 ->SetWeight(10);
else			$p8 ->SetWeight(1);
		$p8->SetLegend(utf8_decode($TĂĄpV));
		$graph->Add($p8);


		$p6 = new LinePlot($gsx_surft,$gmeasure_time);
		$p6->SetColor('#CC0000');      //red,    sT
if($_GET['sT']<0)	$p6 ->SetWeight(0);
elseif($_GET['sT']>0)	$p6 ->SetWeight(15);
else			$p6 ->SetWeight(4);
		$p6->SetLegend(utf8_decode($ĂthĹm));
		$graph->Add($p6);

		$p5 = new LinePlot($gsx_air,$gmeasure_time);
		$p5->SetColor("#3333FF");      //bl,   aT
if($_GET['aT']<0)	$p5 ->SetWeight(0);
elseif($_GET['aT']>0)	$p5 ->SetWeight(15);
else			$p5 ->SetWeight(2);
		$p5->SetLegend(utf8_decode($LĂŠghĹm));
		$graph->Add($p5);

		$p4 = new LinePlot($gst_hpt,$gmeasure_time);
		$p4->SetColor("#FFCC00");      //ylw,  dT
if($_GET['dT']<0)	$p4 ->SetWeight(0);
elseif($_GET['dT']>0)	$p4 ->SetWeight(10);
else			$p4 ->SetWeight(1);
		$p4->SetLegend(utf8_decode($Harmatpont));
		$graph->Add($p4);

		$p9 = new LinePlot($gsx_hum,$gmeasure_time);
		$p9->SetColor("#FFCC00");      //ylw,   rH
if($_GET['rH']<0)	$p9 ->SetWeight(0);
elseif($_GET['rH']>0)	$p9 ->SetWeight(10);
else			$p9 ->SetWeight(3);
//		$p9->SetLegend("para");
		$graph->Add($p9);

 

if($lgn=='Xps' || $strm=='root'){ 

    		$pN = new LinePlot($gsx_hun,$gmeasure_time);
		$pN->SetColor("#FF9900");       //okr,   mrH
		$pN->SetWeight(1);
		$graph->Add($pN);

    		$pP = new LinePlot($gsx_hup,$gmeasure_time);
		$pP->SetColor("#FF3300");       //org,  mrH/100
		$pP->SetWeight(1);
		$graph->Add($pP);

		$st = new LinePlot( $gst_surf_temp,$gmeasure_time);
		$st->SetColor("#FFCC00");      //ylw,  msT
		$st ->SetWeight(1);
		$graph->Add($st);
}

   		$p3 = new LinePlot($gst_rain,$gmeasure_time);
		$p3->SetColor("#3333FF");    //d.bl,   rain
if($_GET['Rm']<0)	$p3 ->SetWeight(0);
elseif($_GET['Rm']>0)	$p3 ->SetWeight(10);
else			$p3 ->SetWeight(1);
		$p3->SetLegend(utf8_decode($CsapadĂŠkmmh));
		$graph->Add($p3);

   		$p3f = new LinePlot($gst_rainfog,$gmeasure_time);
		$p3f->SetColor("#33ccFF");    //l.bl,   fog
		$p3f ->SetWeight(10);
		$graph->Add($p3f);

		$p2 = new LinePlot($gsurf_water_depth,$gmeasure_time);
		$p2->SetColor("#000099");       //d.bl,   Wmm
if($_GET['Wm']<0)	$p2 ->SetWeight(0);
elseif($_GET['Wm']>0)	$p2 ->SetWeight(10);
else			$p2 ->SetWeight(1);
		$p2->SetLegend(utf8_decode($VĂ­zrĂŠtegmmd));
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
if($lgn!="Xps" &&  $strm!='root')
{	
	$caption=new Text("$st_county_name - $st_ort ($dd)   $strDate1 - $strDate2",5.0,4.0);
	$caption->SetFont( FF_FONT2, FS_BOLD, 14);
	$graph->AddText($caption); 
}

if($lgn=='Xps' || $strm=='root')
{
// 	$caption=new Text("-   $st_ort    $strDate1 - $strDate2 ",5.0,8.0);
// 	$caption=new Text("-   .utf8_decode($st_ort).    $strDate1 - $strDate2 ",5.0,8.0);
$st_ort_u8=utf8_decode($st_ort);
	$caption=new Text("-   $st_ort_u8    $strDate1 - $strDate2 ",5.0,8.0);

	$caption->SetFont( FF_FONT2, FS_BOLD, 12);
	$graph->AddText($caption); 
}
	$graph->Stroke();

//echo 1;

?>


