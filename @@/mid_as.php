 <?php   include("mid_fej.php"); ?>
 <?php   include("mid_dat.php"); ?>

<?php   
/* PZ3290: STATISTIKA Imam jednu zamolbu koja će zahtjevati malo implementacija sa Vaše strane. Naime budući da moramo ispuniti neke stavke trebamo napraviti statistički izvještaj na stranici CestaMET-a. Radi se o slijedećem:
Potrebno je omogućiti informacije o :
Srednja dnevna temperatura zraka
Srednja mjesečna temperatura zraka
Apsolutna maksimalna mjesečna temperatura zraka
Apsolutna minimalna mjesečna temperatura zraka
--------------
Broj dana sa srednjom dnevnom temp. Zraka
Broj dana sa dnevnom max. Temp.zraka
Broj dana sa dnevnom min. Temp zraka
----------------
Minimalne mjesečne vrijednosti relativne vlage
Srednje mjesečne vrijednosti rel. Vlage
Mjesečne količine oborina
Max dnevne količine oborina
Broj dana s količinom oborine
 */
$MOD="mid_as.php";
include "LM.php";
include "log.php";

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  Id  user  login  pass  county  cty  c  ct  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
		$queru = "SELECT * FROM users where user=$lgn";
		$resu = mysqli_query($sql_connect,$queru);
		$rowsu = mysqli_fetch_array($resu, MYSQLI_ASSOC);
 

$dd = $_GET['dd'];
//sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
   
		$query = "SELECT * FROM stations where st_id=$dd";// and cty=$cty";// and StrM='$rowsu[strm]'";
//		$query = "SELECT * FROM stations where st_id=$dd and cty=$cty";// and StrM='$rowsu[strm]'";
//		$query = "SELECT * FROM stations where st_id=$dd and cty=$cty and StrM='$rowsu[strm]'";
		$res = mysqli_query($sql_connect,$query);
		$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
//		echo $rows              ;
		$nullpoint=0;
//echo "xxxxxxxxxxx";
if( mysqli_num_rows( $res)>0) {

		//  Id  user  login  pass  county  cty  c  ct  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
		$queru = "SELECT * FROM users where strm='$rows[StrM]'";
		$resu = mysqli_query($sql_connect,$queru);
		$rowsu = mysqli_fetch_array($resu, MYSQLI_ASSOC);
 
 		
?>

<!--  LE-TOP KONTROLL -->
<table width="100%" >
 <tr><td>
                        <!-- STATsFEJLÉC-TÁBLA: -->
			<table width="100%"  border="0" cellspacing="0" cellpadding="5">
  			<tr>
    			<td width="210" valign=top align=center><img src="../kepek/kicsi/<?php  echo $dd;?>.JPG" ></td>
    			<td align="left" valign="top">

    			        <!-- STATsFEJLÉC-ALTÁBLA: -->
    				<table width="100%" border="0" cellspacing="1" cellpadding="3">
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right ><?php   echo $Állomásszám?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[st_id] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Helység?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[st_Ort] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Tipus?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[Typ] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Helyszín?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[StrNo]." kmsz" ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Földrajziszélesség?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[Lat]; if($rows[Xeov]>11) echo ", . . . .   ".$rows[Xeov]."eov" ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Földrajzihosszúság?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[Lng]; if($rows[Yeov]>11) echo ", . . . .   ".$rows[Yeov]."eov" ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Klima?></td>
          				<td class=smallgreyBold align=left><?php   echo $rows[KlimaZ] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $MagyarKözútKht?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[county] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Mérnökség?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[cDept] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $ISzhelység?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[cBusinessPostalCode].", ".$rowsu[cBusinessCity] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Címutca?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[cBusinessStreet] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Telefon?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[cPhn] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right><?php   echo $Fax?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[cFax] ?></td>
        			</tr>
        			<tr bgcolor=#BDBA7D>
          				<td width="30%" height="25" class="smallgrey" align=right<?php   echo $EMail?></td>
          				<td class=smallgreyBold align=left><?php   echo $rowsu[Email] ?></td>
        			</tr>
      				</table>    <!-- STATsFEJLÉC-ALTÁBLA vége -->
      			</td>
  			</tr>
			</table> <!-- STATsFEJLÉC-TÁBLA vége -->
 </td>
 </tr>

<?php  
if($ido2-$ido1>94000) $ido1 = floor($ido1 / 86400)*86400+86400;
else $ido1 = floor($ido1 / 86400)*86400-30*86400;
$ido2 = floor($ido2 / 86400)*86400;

if ($ido2 > time()) $ido2 = floor(time() / 3600)*3600;


// 	id 	station_id 	measure_time 	rel_hum 	air_dew_temp 	air_temp 	surf_temp 	surf_deep_temp 	surf_freez_temp 	surf_salt_pri 	surf_salt_sat 	surf_condition 	Value_7 	Value_6 	Value_5 	Value_4 	Value_3 	Value_2 	Value_1 	Value_0 	rain_int 	surf_water_depth 	precip_stat 	precip_imp_int 	precip_imp_lng 	AccuV 	door_contact 	precip_stat1 	precip_stat2 	precip_stat3 	hum 	air 	surft 	surfdt 	xps_time

$measure="stations.S".$dd;

//$querym2 = "SELECT  *  FROM  measure  where station_id=$dd and measure_time>=$ido1 and measure_time<$ido2 order by measure_time ";//3290.4 STATISTIKA neispravni senzori prave ršum
$querym2 = "SELECT  *  FROM   $measure   where station_id=$dd and measure_time>=$ido1 and measure_time<$ido2  and hum>0 and surf_freez_temp<0 order by measure_time ";

$rem2 = mysqli_query($sql_connect,$querym2);
  $num_rows = mysqli_num_rows( $rem2 );

  $loop=0;


while ($rowm = mysqli_fetch_array($rem2, MYSQLI_ASSOC))

//looping measure START:
  {
	$measure_time[$loop]=$rowm[measure_time];

	$air_dew_temp[$loop]=$rowm[air_dew_temp];
  $air[$loop]=$rowm[air];
	$hum[$loop]=$rowm[hum];
	$surft[$loop]=$rowm[surft];
	$surfdt[$loop]=$rowm[surfdt];

	if ($air[$loop]+$hum[$loop]+$surft[$loop]+$surfdt[$loop] == 0 )
  {
  $air[$loop]=$rowm[air_temp];
	$hum[$loop]=$rowm[rel_hum];
	$surft[$loop]=$rowm[surf_temp];
	$surfdt[$loop]=$rowm[surf_deep_temp];
  }


	$surf_freez_temp[$loop]=$rowm[surf_freez_temp];
	$surf_salt_sat[$loop]=$rowm[surf_salt_sat];
	$surf_salt_pri[$loop]=$rowm[surf_salt_pri];
	$surf_condition[$loop]=$rowm[surf_condition];
	$surf_water_depth[$loop]=$rowm[surf_water_depth];
	$rain_int[$loop]=$rowm[rain_int];
	$precip_stat[$loop]=$rowm[precip_stat];


	$AccuV[$loop] = $rowm[AccuV];

	$loop++;
}



 $n=count($measure_time);


	
  mysqli_close ($sql_connect);
	?>      			         		 


<?php   // -----------------------RENDELKEZÉSRE ÁLLÁS-----------------------------------        	?>

        <tr align="center" valign="top" bgcolor="#D0CEA4">         	
          <td height="20" class="smallgreyBold"> <?php   echo $Azállomásrendelkezésreállása?> <?php  echo date("Y.m.d",$ido1);?> - <?php  echo date("Y.m.d",$ido2);?>
             <?php   echo $intervallumban?></td>
        </tr>
        <tr align="center" valign="top" bgcolor="#BDBA7D">
          <td class="smallergrey">
          
                <!-- RENDELKEZÉSRE ÁLLÁS TÁBLÁJA: -->
          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo $Kimaradáskezdete?></td>
                <td width="150" align=center><?php   echo $Kimaradásvége?></td>
                <td width="200"><?php   echo $Kimaradástartama?></td>
              	</tr>                
              <?php  

              $mdt = $n ;

              $kiesettora = 0;
              for($loop=2;$loop<$n;$loop++)
              {
              	  $data1 = $measure_time[$loop-1];
              	  $data2 = $measure_time[$loop];
              	  $oszmeres = ($ido2 - $ido1) /  600;
              	  $oszora = ($ido2 - $ido1) /  3600;
              	  
				  if (($data2 - $data1)>5400)
				  {	              	  
              	  $today1 =date("Y.m.d H:i",$measure_time[$loop-1]);
              	  $today2 =date("Y.m.d H:i",$measure_time[$loop]);
              	  $kiesettora += round((($data2-$data1)/60 / 60)-0.6,0);
			            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="150" align=center><?php  print("$today1");?></td>
                			<td width="150" align=center><?php  print("$today2");?></td>
                			<td width="200" align=center><?php  print(round((($data2-$data1)/60 / 60)-0.6,0)); print(" $óra");?></td>
              				</tr>
              			<?php                 		
              }   }
       		
			$teljora = round(($oszora-$kiesettora)*100/$oszora);                                     
            ?>
          	<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
            <td width="150" align=center><?php   echo $Összóra?></td>
	    <td width="150" align=center><?php   echo $Teljesítettóraszázalék ?></td>
            <td width="200"> <?php   echo $Teljesítettmérésvártadat?></td>
            </tr>               
            	
		  	<tr bgcolor="#D0CEA4" align="center">
   			<td width="100" align="center"><?php  print($oszora." $óra");?></td>
   			<td width="150" align="center"><?php  print($oszora-$kiesettora." $óra ");print("( $teljora % )");?></td>
			<td width="150" align="center"><?php  print($mdt." ".$mérés." ".$oszmeres." ".$vártadatból." ");?></td>
			</tr>
            	
            </table>     <!-- RENDELKEZÉSRE ÁLLÁS TÁBLA vége -->
            <br>                   	 
            <br>              	         	 
           </td>
        </tr>            		 
<?php   // -----------------------------RENDELKEZÉSRE ÁLLÁS  vége---------------------------------------        	?>      			         		 

<?php   // -----------------------HAVI ATLAGOK -----------------------------------        	?>

        <tr align="center" valign="top" bgcolor="#D0CEA4">         	
          <td height="20" class="smallgreyBold"> <?php   echo $Napiátlaghõmérséklet?>  <?php  echo date("Y.m.d",$ido1);?> - <?php  echo date("Y.m.d",$ido2);?>  <?php   echo $között?></td>
        </tr>
        <tr align="center" valign="top" bgcolor="#BDBA7D">
          <td class="smallergrey">
          
                <!-- HAVI ÁTLAGOK TÁBLÁJA: -->
          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
		<td width="75" align=center><?php   echo $Mérésiidõ?></td>
                <td width="75"><?php   echo $Átlagléghõmérséklet?></td>
                 <td width="75"><?php   echo $Minléghõmérséklet?></td>
                 <td width="75"><?php   echo $Maxléghõmérséklet?></td>
                 <td width="75"><?php   echo $Difléghõmérséklet?></td>
                <td width="75"><?php   echo $Átlagútpályahõmérséklet?></td>
                 <td width="75"><?php   echo $Minútpályahõmérséklet?></td>
                 <td width="75"><?php   echo $Maxútpályahõmérséklet?></td>
                 <td width="75"><?php   echo $Difútpályahõmérséklet?></td>
              	<td width="75"><?php   echo $Átlagpaara?></td>
                <td width="75"><?php   echo $Átlagcsapadeek ?></td>
                <td width="75"><?php   echo $Darab ?></td>
             	</tr>                
              <?php  
               $mdt = $n ;
              $messcount=0;
	      $mess=0;
              $sum_airtemp=0;
              $min_airtemp=110;
              $max_airtemp=-110;
              $sum_surftemp=0;
              $min_surftemp=111;
              $max_surftemp=-110;
              $sum_hum=0;
              $sum_impi=0;
              $gfcount=0;
              $start_time = $ido1-86400;
              $next_time = 0; 
              unset($gf_air);
              unset($gf_hum);
              unset($gf_surf);
$yrday =date("Y.m.d",$start_time);

for($lop=0;$lop<$mdt;$lop++)
              {
$next_time = $measure_time[$loop+1];
$today =date("Y.m.d",$next_time);
if($today>$yrday) {$start_time=$next_time;$lop=$mdt;}
       }              
	
	for($loop=0;$loop<$mdt;$loop++)
              {   //loop START
          		
            	$sum_airtemp +=	$air[$loop];
//    if($sum_airtemp<$gf_air[$loop])        		$sum_airtemp =	$gf_air[$loop];

    if($min_airtemp>$air[$loop])        		$min_airtemp =	$air[$loop];
    if($max_airtemp<$air[$loop])        		$max_airtemp =	$air[$loop];

              	$sum_surftemp += $surft[$loop];
    if($min_surftemp>$surft[$loop])        		$min_surftemp =	$surft[$loop];
    if($max_surftemp<$surft[$loop])        		$max_surftemp =	$surft[$loop];

              	$sum_hum += $hum[$loop];
              	$sum_impi += $rain_int[$loop];
              	$messcount++;

              	if (!isset($measure_time[$loop+1]))     $next_time	= $start_time+86400;
              	else              			$next_time = $measure_time[$loop+1];
       
              		
				if ($next_time>=$start_time+86400)
              	{  //day print START
              		if ( $start_time<$ido2 && $messcount>1)
              		{
              			$today =date("Y.m.d",$start_time);
	             		$gf_air[$gfcount]=$sum_airtemp/$messcount;
	             		$gf_airmin[$gfcount]=$min_airtemp;
	             		$gf_airmax[$gfcount]=$max_airtemp;
	             		$gf_airdif[$gfcount]=$max_airtemp-$min_airtemp;

    	          		$gf_surf[$gfcount]=$sum_surftemp/$messcount;
    	          		$gf_surfmin[$gfcount]=$min_surftemp;
    	          		$gf_surfmax[$gfcount]=$max_surftemp;
    	          		$gf_surfdif[$gfcount]=$max_surftemp-$min_surftemp;

    	          		$gf_hum[$gfcount] = $sum_hum /$messcount ;
//    	          		$gf_impi[$gfcount] = 10*$sum_impi /$messcount;
    	          		$gf_impi[$gfcount] = 24*$sum_impi /$messcount;
    	          		$gf_mesc[$gfcount] = $messcount;
//    	          		$mess+ = $messcount;    // to NE
   	          		$mess+= $messcount;     // to DA
				              					
             			
			            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="75" align=center><?php  print($today);?></td>
                			<td width="75"><b><?php  printf("%6.1f",$gf_air[$gfcount]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gf_airmin[$gfcount]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gf_airmax[$gfcount]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gf_airdif[$gfcount]);?></td>

                			<td width="75"><b><?php  printf("%6.1f",$gf_surf[$gfcount]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gf_surfmin[$gfcount]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gf_surfmax[$gfcount]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gf_surfdif[$gfcount]);?></td>

                 			<td width="75"><b><?php  printf("%6.1f",$gf_hum[$gfcount]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gf_impi[$gfcount]);?></td>
               				<td width="75"><?php  printf("%6.0f",$messcount);?></td>
            				</tr>
              			<?php   
						$gfcount++;  
             $sum_airtemp=0;
              $min_airtemp=110;
              $max_airtemp=-110;
              $sum_surftemp=0;
              $min_surftemp=110;
              $max_surftemp=-110;
              			$sum_hum = 0; 
              			$sum_impi=0;
              			$messcount=0;          			              			
  
             		}
 
              	$start_time=$start_time+86400;             	                         				
              	}  //day print END

              }    //loop STOP
//  echo 
$messAvg = $mess/$gfcount;
     		
                                     
            ?>
            </table>    <!--HAVI ÁTLAGOK TÁBLA         vége -->
            <br>                   	 
            <br>              	         	 
           </td>
        </tr>            		 
<?php   // -----------------------HAVI ÁTLAGOK vége ---------------------------------------------        	?>      			         		 


<?php   // -----------------------HAVI STATISZTIKA -----------------------------------        	?>

        <tr align="center" valign="top" bgcolor="#D0CEA4">         	
          <td height="20" class="smallgreyBold"> <?php   echo $Haviátlaghõmérséklet?>  <?php  echo date("Y.m.d",$ido1);?> - <?php  echo date("Y.m.d",$ido2);?>  <?php   echo $között;?></td>
        </tr>
        <tr align="center" valign="top" bgcolor="#BDBA7D">
          <td class="smallergrey">
          
                <!-- HAVI STATISZTIKA TÁBLÁJA: -->
          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
                     
              <?php  
//---------------------------AVERAGE---------------------------------						              					
              			$sum_airtemp=0;
             			$sum_airmin=0;
             			$sum_airmax=0;
             			$sum_airdif=0;
              			$sum_surftemp=0;  
              			$sum_surfmin=0;  
              			$sum_surfmax=0;  
              			$sum_surfdif=0;  
              			$sum_hum = 0; 
              			$sum_impi=0;

              	$messcount=0;
		$gfc=0;

	for($loop=0;$loop<$gfcount;$loop++)
              { 
    if($gf_mesc[$loop]>0.3*$messAvg)
{     		
            	$sum_airtemp +=	$gf_air[$loop];
            	$sum_airmin +=	$gf_airmin[$loop];
            	$sum_airmax +=	$gf_airmax[$loop];
            	$sum_airdif +=	$gf_airdif[$loop];

              	$sum_surftemp += $gf_surf[$loop];
              	$sum_surfmin += $gf_surfmin[$loop];
              	$sum_surfmax += $gf_surfmax[$loop];
              	$sum_surfdif += $gf_surfdif[$loop];

              	$sum_hum += $gf_hum[$loop];
              	$sum_impi += $gf_impi[$loop];
             	$messcount++;}
                };

	             		$gfc_air[$gfc]=$sum_airtemp/$messcount;
	             		$gfc_airmin[$gfc]=$sum_airmin/$messcount;
	             		$gfc_airmax[$gfc]=$sum_airmax/$messcount;
	             		$gfc_airdif[$gfc]=$sum_airdif/$messcount;

    	          		$gfc_surf[$gfc]=$sum_surftemp/$messcount;
    	          		$gfc_surfmin[$gfc]=$sum_surfmin/$messcount;
    	          		$gfc_surfmax[$gfc]=$sum_surfmax/$messcount;
    	          		$gfc_surfdif[$gfc]=$sum_surfdif/$messcount;

    	          		$gfc_hum[$gfc] = $sum_hum /$messcount ;
    	          		$gfc_impi[$gfc] = $sum_impi /$messcount;
    	          		$gfc_mesc[$gfc] = $messcount;
							              					
  
      		            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="75" align=center><?php  print($average);?></td>

	               			<td width="75"><b><?php  printf("%6.1f",$gfc_air[$gfc]);?></b></td>
	               			<td width="75"><?php  printf("%6.1f",$gfc_airmin[$gfc]);?></td>
	               			<td width="75"><?php  printf("%6.1f",$gfc_airmax[$gfc]);?></td>
	               			<td width="75"><?php  printf("%6.1f",$gfc_airdif[$gfc]);?></td>

                			<td width="75"><b><?php  printf("%6.1f",$gfc_surf[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfdif[$gfc]);?></td>

                 			<td width="75"><b><?php  printf("%6.1f",$gfc_hum[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_impi[$gfc]);?></td>
               				<td width="75"><?php  printf("%6.0f",$messcount);?></td>
            				</tr>
<?php  


//---------------------------------MINIMUM------------------------------------						              					
 
					$gfc++;   

             			$sum_airtemp=110;
             			$sum_airmin=110;
             			$sum_airmax=110;
             			$sum_airdif=110;
              			$sum_surftemp=110;  
              			$sum_surfmin=110;  
              			$sum_surfmax=110;  
              			$sum_surfdif=110;  
              			$sum_hum = 100; 
              			$sum_impi=100;
              			$messcount=0;          			              			


	for($loop=0;$loop<$gfcount;$loop++)
              {
    if($gf_mesc[$loop]>0.3*$messAvg)
{     		          		
    if($sum_airtemp>$gf_air[$loop])        		$sum_airtemp =	$gf_air[$loop];
    if($sum_airmin>$gf_airmin[$loop])        		$sum_airmin  =	$gf_airmin[$loop];
    if($sum_airmax>$gf_airmax[$loop])        		$sum_airmax =	$gf_airmax[$loop];
    if($sum_airdif>$gf_air[$loop])        		$sum_airdif =	$gf_airdif[$loop];

    if($sum_surftemp>$gf_surf[$loop])                  	$sum_surftemp = $gf_surf[$loop];
    if($sum_surfmin>$gf_surfmin[$loop])                	$sum_surfmin = $gf_surfmin[$loop];
    if($sum_surfmax>$gf_surfmax[$loop])                	$sum_surfmax = $gf_surfmax[$loop];
    if($sum_surfdif>$gf_surfdif[$loop])                	$sum_surfdif = $gf_surfdif[$loop];

    if($sum_hum >$gf_hum[$loop])                      	$sum_hum = $gf_hum[$loop];
    if($sum_impi>$gf_impi[$loop])                      	$sum_impi = $gf_impi[$loop];
              	$messcount++;}
                }
	             		$gfc_air[$gfc]=$sum_airtemp;
	             		$gfc_airmin[$gfc]=$sum_airmin;
	             		$gfc_airmax[$gfc]=$sum_airmax;
	             		$gfc_airdif[$gfc]=$sum_airdif;

    	          		$gfc_surf[$gfc]=$sum_surftemp;
    	          		$gfc_surfmin[$gfc]=$sum_surfmin;
    	          		$gfc_surfmax[$gfc]=$sum_surfmax;
    	          		$gfc_surfdif[$gfc]=$sum_surfdif;

    	          		$gfc_hum[$gfc] = $sum_hum ;
    	          		$gfc_impi[$gfc] = $sum_impi ;
							              					
   
      		            ?>
            			  	<tr bgcolor="#D0CEAf" align=right> 
                			<td width="75" align=center><?php  print($min);?></td>
                			<td width="75"><b><?php  printf("%6.1f",$gfc_air[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_airmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_airmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_airdif[$gfc]);?></td>

                			<td width="75"><b><?php  printf("%6.1f",$gfc_surf[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfdif[$gfc]);?></td>

                 			<td width="75"><b><?php  printf("%6.1f",$gfc_hum[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_impi[$gfc]);?></td>
               				<td width="75"><?php  printf("%6.0f",$messcount);?></td>
            				</tr>
<?php  


//---------------------------------MAXIMUM------------------------------------						              					


					$gfc++;   

             			$sum_airtemp=-110;
             			$sum_airmin=-110;
             			$sum_airmax=-110;
             			$sum_airdif=-110;
              			$sum_surftemp=-110;  
              			$sum_surfmin=-110;  
              			$sum_surfmax=-110;  
              			$sum_surfdif=-110;  
              			$sum_hum = 0; 
              			$sum_impi= 0;
              			$messcount=0;          			              			


	for($loop=0;$loop<$gfcount;$loop++)
              {
    if($gf_mesc[$loop]>0.3*$messAvg)
{     		          		
    if($sum_airtemp<$gf_air[$loop])        		$sum_airtemp =	$gf_air[$loop];
    if($sum_airmin<$gf_airmin[$loop])        		$sum_airmin  =	$gf_airmin[$loop];
    if($sum_airmax<$gf_airmax[$loop])        		$sum_airmax =	$gf_airmax[$loop];
    if($sum_airdif<$gf_airdif[$loop])        		$sum_airdif =	$gf_airdif[$loop];

    if($sum_surftemp<$gf_surf[$loop])                  	$sum_surftemp = $gf_surf[$loop];
    if($sum_surfmin<$gf_surfmin[$loop])                	$sum_surfmin = $gf_surfmin[$loop];
    if($sum_surfmax<$gf_surfmax[$loop])                	$sum_surfmax = $gf_surfmax[$loop];
    if($sum_surfdif<$gf_surfdif[$loop])                	$sum_surfdif = $gf_surfdif[$loop];

    if($sum_hum <$gf_hum[$loop])                      	$sum_hum = $gf_hum[$loop];
    if($sum_impi<$gf_impi[$loop])                      	$sum_impi = $gf_impi[$loop];
              	$messcount++;}
                }
	             		$gfc_air[$gfc]=$sum_airtemp;
	             		$gfc_airmin[$gfc]=$sum_airmin;
	             		$gfc_airmax[$gfc]=$sum_airmax;
	             		$gfc_airdif[$gfc]=$sum_airdif;

    	          		$gfc_surf[$gfc]=$sum_surftemp;
    	          		$gfc_surfmin[$gfc]=$sum_surfmin;
    	          		$gfc_surfmax[$gfc]=$sum_surfmax;
    	          		$gfc_surfdif[$gfc]=$sum_surfdif;

    	          		$gfc_hum[$gfc] = $sum_hum ;
    	          		$gfc_impi[$gfc] = $sum_impi ;
							              					
   
      		            ?>
            			  	<tr bgcolor="#D0CEAf" align=right> 
                			<td width="75" align=center><?php  print($max);?></td>
                			<td width="75"><b><?php  printf("%6.1f",$gfc_air[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_airmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_airmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_airdif[$gfc]);?></td>

                			<td width="75"><b><?php  printf("%6.1f",$gfc_surf[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_surfdif[$gfc]);?></td>

                 			<td width="75"><b><?php  printf("%6.1f",$gfc_hum[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.1f",$gfc_impi[$gfc]);?></td>
               				<td width="75"><?php  printf("%6.0f",$messcount);?></td>
            				</tr>
<?php  

$Sgfc_air=$gfc_air[$gfc]-$gfc_air[$gfc-1];
$Sgfc_airmin=$gfc_airmin[$gfc]-$gfc_airmin[$gfc-1];
$Sgfc_airmax=$gfc_airmax[$gfc]-$gfc_airmax[$gfc-1];
$Sgfc_airdif=$gfc_airdif[$gfc]-$gfc_airdif[$gfc-1];

$Sgfc_surf=$gfc_surf[$gfc]-$gfc_surf[$gfc-1];
$Sgfc_surfmin=$gfc_surfmin[$gfc]-$gfc_surfmin[$gfc-1];
$Sgfc_surfmax=$gfc_surfmax[$gfc]-$gfc_surfmax[$gfc-1];
$Sgfc_surfdif=$gfc_surfdif[$gfc]-$gfc_surfdif[$gfc-1];

$Sgfc_hum=$gfc_hum[$gfc]-$gfc_hum[$gfc-1];
$Sgfc_impi=$gfc_impi[$gfc]-$gfc_impi[$gfc-1];



//-----------------------------No of MINIMUMS----------------------------------						              					

					$gfc--;   

             			$sum_airtemp=0;
             			$sum_airmin=0;
             			$sum_airmax=0;
             			$sum_airdif=0;
              			$sum_surftemp=0;  
              			$sum_surfmin=0;  
              			$sum_surfmax=0;  
              			$sum_surfdif=0;  
              			$sum_hum = 0; 
              			$sum_impi= 0;
              			$messcount=0;          			              			


	for($loop=0;$loop<$gfcount;$loop++)
              {
    if($gf_mesc[$loop]>0.3*$messAvg)
{ 
   if($gfc_air[$gfc]+$Sgfc_air/10>$gf_air[$loop])        			$sum_airtemp++ ; 
   if($gfc_airmin[$gfc]+$Sgfc_airmin/10>$gf_airmin[$loop])        			$sum_airmin++ ; 
   if($gfc_airmax[$gfc]+$Sgfc_airmax/10>$gf_airmax[$loop])        			$sum_airmax++ ; 
   if($gfc_airdif[$gfc]+$Sgfc_airdif/10>$gf_airdif[$loop])        			$sum_airdif++ ; 

    if($gfc_surf[$gfc]+$Sgfc_surf/10>$gf_surf[$loop])                  		$sum_surftemp++;
    if($gfc_surfmin[$gfc]+$Sgfc_surfmin/10>$gf_surfmin[$loop])                  		$sum_surfmin++;
    if($gfc_surfmax[$gfc]+$Sgfc_surfmax/10>$gf_surfmax[$loop])                  		$sum_surfmax++;
    if($gfc_surfdif[$gfc]+$Sgfc_surfdif/10>$gf_surfdif[$loop])                  		$sum_surfdif++;

    if($gfc_hum[$gfc]+$Sgfc_hum/10 >$gf_hum[$loop])                      	$sum_hum++;
    if($gfc_impi[$gfc]+$Sgfc_impi/10>$gf_impi[$loop])                      	$sum_impi++;
              	$messcount++;}
                }
		$gfc++;   
		$gfc++;   

	             		$gfc_air[$gfc]=$sum_airtemp;
	             		$gfc_airmin[$gfc]=$sum_airmin;
	             		$gfc_airmax[$gfc]=$sum_airmax;
	             		$gfc_airdif[$gfc]=$sum_airdif;

    	          		$gfc_surf[$gfc]=$sum_surftemp;
    	          		$gfc_surfmin[$gfc]=$sum_surfmin;
    	          		$gfc_surfmax[$gfc]=$sum_surfmax;
    	          		$gfc_surfdif[$gfc]=$sum_surfdif;

    	          		$gfc_hum[$gfc] = $sum_hum ;
    	          		$gfc_impi[$gfc] = $sum_impi ;
							              					
   
      		            ?>
            			  	<tr bgcolor="#D0CEAf" align=right> 
                			<td width="75" align=center><?php  print($minNo);?></td>
                			<td width="75"><b><?php  printf("%6.0f",$gfc_air[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_airmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_airmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_airdif[$gfc]);?></td>

                			<td width="75"><b><?php  printf("%6.0f",$gfc_surf[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_surfmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_surfmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_surfdif[$gfc]);?></td>

                 			<td width="75"><b><?php  printf("%6.0f",$gfc_hum[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_impi[$gfc]);?></td>
               				<td width="75"><?php  printf("%6.0f",$messcount);?></td>
            				</tr>
<?php  



//-----------------------------No of MAXIMUMS----------------------------------						              					

					$gfc--;   

             			$sum_airtemp=0;
             			$sum_airmin=0;
             			$sum_airmax=0;
             			$sum_airdif=0;
              			$sum_surftemp=0;  
              			$sum_surfmin=0;  
              			$sum_surfmax=0;  
              			$sum_surfdif=0;  
              			$sum_hum = 0; 
              			$sum_impi= 0;
              			$messcount=0;          			              			


	for($loop=0;$loop<$gfcount;$loop++)
              {
    if($gf_mesc[$loop]>0.3*$messAvg)
{ 
   if($gfc_air[$gfc]-$Sgfc_air/10<$gf_air[$loop])        			$sum_airtemp++ ; 
   if($gfc_airmin[$gfc]-$Sgfc_airmin/10<$gf_airmin[$loop])        			$sum_airmin++ ; 
   if($gfc_airmax[$gfc]-$Sgfc_airmax/10<$gf_airmax[$loop])        			$sum_airmax++ ; 
   if($gfc_airdif[$gfc]-$Sgfc_airdif/10<$gf_airdif[$loop])        			$sum_airdif++ ; 

    if($gfc_surf[$gfc]-$Sgfc_surf/10<$gf_surf[$loop])                  		$sum_surftemp++;
    if($gfc_surfmin[$gfc]-$Sgfc_surfmin/10<$gf_surfmin[$loop])                  		$sum_surfmin++;
    if($gfc_surfmax[$gfc]-$Sgfc_surfmax/10<$gf_surfmax[$loop])                  		$sum_surfmax++;
    if($gfc_surfdif[$gfc]-$Sgfc_surfdif/10<$gf_surfdif[$loop])                  		$sum_surfdif++;

    if($gfc_hum[$gfc]-$Sgfc_hum/10 <$gf_hum[$loop])                      	$sum_hum++;
    if($gfc_impi[$gfc]-$Sgfc_impi/10<$gf_impi[$loop])                      	$sum_impi++;
              	$messcount++;}
                }
		$gfc++;   
		$gfc++;   

	             		$gfc_air[$gfc]=$sum_airtemp;
	             		$gfc_airmin[$gfc]=$sum_airmin;
	             		$gfc_airmax[$gfc]=$sum_airmax;
	             		$gfc_airdif[$gfc]=$sum_airdif;

    	          		$gfc_surf[$gfc]=$sum_surftemp;
    	          		$gfc_surfmin[$gfc]=$sum_surfmin;
    	          		$gfc_surfmax[$gfc]=$sum_surfmax;
    	          		$gfc_surfdif[$gfc]=$sum_surfdif;

    	          		$gfc_hum[$gfc] = $sum_hum ;
    	          		$gfc_impi[$gfc] = $sum_impi ;
							              					
   
      		            ?>
            			  	<tr bgcolor="#D0CEAf" align=right> 
                			<td width="75" align=center><?php  print($maxNo);?></td>
                			<td width="75"><b><?php  printf("%6.0f",$gfc_air[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_airmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_airmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_airdif[$gfc]);?></td>

                			<td width="75"><b><?php  printf("%6.0f",$gfc_surf[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_surfmin[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_surfmax[$gfc]);?></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_surfdif[$gfc]);?></td>

                 			<td width="75"><b><?php  printf("%6.0f",$gfc_hum[$gfc]);?></b></td>
                			<td width="75"><?php  printf("%6.0f",$gfc_impi[$gfc]);?></td>
               				<td width="75"><?php  printf("%6.0f",$messcount);?></td>
            				</tr>
<?php  




  			              			
 ?>   




            </table>    <!--HAVI STATISZTIKA TÁBLA         vége -->
            <br>                   	 
            <br>              	         	 
           </td>
        </tr>            		 
<?php   // -----------------------HAVI STATISZTIKA vége ---------------------------------------------        	?>      			         		 




</table>     <?php  }//--  LE-TOP KONTROLL vége--?>
