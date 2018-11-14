<SCRIPT type="text/javascript" Language="JavaScript" src="../B3.js"></SCRIPT>
<?php  
include "LM.php";
//echo "aaaaa".$L;
//echo
  $stNo = $_GET['dd'];
  $ur = $_GET['ur'];
 // $lgn  = $_GET['lgn'];
//$login = $_SESSION['login'];

$mt = $_GET['mt'];

                  if ($mt!=0)
			  $today = date("Y.m.d H:i",(round(($mt+130)/60)*60));
                  else
				$today = "<font color=#ff6060><?php  echo $Nincsmérésiadat ;?></font>";
  echo $a."<small> ".$today;
echo $ikmásodpercben."</small> ".$ar = $_GET['ar'];

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }



//  id station_id measure_time mta mtp air_temp air_dew_temp rel_hum precip_imp_int precip_imp_lng surf_temp surf_deep_temp surf_salt_sat surf_salt_pri surf_water_depth surf_freez_temp surf_condition Value_7 Value_6 Value_5 Value_4 Value_3 Value_2 Value_1 Value_0 precip_stat1 precip_stat2 precip_stat3 door_contact AccuV hum air surft surfdt 
	$queryLD = "SELECT  * FROM  last_data  where   station_id=$stNo ";
 $reLD = mysqli_query($sql_connect,$queryLD);
$rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC);

$measure_time[$stNo]=$rowLD[mta];

	$air_dew_temp[$stNo]=$rowLD[air_dew_temp];
//echo "..".
	$air[$stNo]=$rowLD[air];
	$hum[$stNo]=$rowLD[hum];
	$surft[$stNo]=$rowLD[surft];
	$surfdt[$stNo]=$rowLD[surfdt];


	$surf_freez_temp[$stNo]=$rowLD[surf_freez_temp];
	$surf_salt_sat[$stNo]=$rowLD[surf_salt_sat];
	$surf_salt_pri[$stNo]=$rowLD[surf_salt_pri];

	$surf_condition[$stNo]=$rowLD[surf_condition];
	$surf_water_depth[$stNo]=$rowLD[surf_water_depth];
	$rain_int[$stNo]=$rowLD[rain_int];
	$precip_stat[$stNo]=$rowLD[precip_stat];


echo $számúriasztáslekérdezés." :   <b> ".$qq = $_GET['qq']."</b> ";
//echo'here';
//  strawberry4 
//if($surf_condition[$stNo] < -1)                                                                                       
//echo " qq ".substr($qq,4,strlen($qq)-11)."";   
//echo $qqs=substr($qq,4,strlen($qq)-11);   
//if($qq)
//if(0)
	include "../Arm/Rqq".$ar.".php";
if($a)
{   //CCC  if($surf_condition[$stNo] < -1)  
	//	if($ur==$login)
	echo "ur: ".$ur."  lgn: ".$lgn;
	if($ur==$lgn)
	{	//BBB
?>
  <script type="text/javascript" src="js/B3pop.js"></script>	
	<script type="text/javascript" language="JavaScript">
 setTimeout('openPopWin("Riaszt.php?rid=<?php  print($ar);?>", 400, 500, "resizable",80,40)',1);
    </SCRIPT>
<?php  
	}   //BBBend
?>
<b>    <?php  echo $RIASZTÁS?> !!</b>
<?php  
}   //CCCend
else echo "  riasztási feltétele nem teljesült.";
mysqli_close ($sql_connect);
?>
