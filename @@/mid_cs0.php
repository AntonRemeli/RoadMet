
<?php   
 error_reporting(0);

$MOD="mid_cs.php";
include "LM.php";
//echo $lgn. '' .$pwd. '' .$usn;
include "log.php";

$ido1="";
$ido2="";
$add=60;

//echo ' mcsreg '.$regg;
//echo ' mcscty '.$cty;


?>

 	

<script language="JavaScript">
Lseq = 1;
</script>


           <!-- BELSO TÁBLA LE-TOP KONTROLL: -->
            <table width="100%" border="0" cellspacing="0" cellpadding="3" >

              <!-- BELSO SOR: -->
              <tr align="center" valign="top">


<?php  
//error_reporting(E_ALL);
error_reporting(0);

include "newmes43.php";
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


  $treshold=time()-99*86400;

//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
//	$queryS = "SELECT * FROM stations  where cty=$cty ORDER BY st_id "; //PZ 2823 duplirane stanice ukinuti u Hr
//$queryS = "SELECT  * FROM stations  where  sid=int(sid), cty=$cty ORDER BY st_id ";
//$dsid='distinct(st_id),st_Ort,cty,GSMno,GPRSno,BCUno,FBSno,HGTno,Raino,st_txt,megj';  //FABATKÁT SEM ÉR !!
//$dsid='distinct(st_id,st_Ort)';

$dsid='*';

$queryS = "SELECT $dsid FROM stations  where  cty=$cty ORDER BY st_id ";
if($cty==0) $queryS = "SELECT $dsid FROM stations  where h=='999' ORDER BY st_id ";
if($cty==-2) $queryS = "SELECT $dsid FROM stations  where h<'999' ORDER BY h ";
if($cty==-3) $queryS = "SELECT $dsid FROM stations   ORDER BY st_id ";
if($cty==21) $queryS = "SELECT $dsid FROM stations  where (st_txt>100 && st_txt<1000) || (st_txt>-1000 && st_txt<-100) ORDER BY st_id ";
if($cty==24) $queryS = "SELECT $dsid FROM stations  where cty='24'  || (cty=56 && st_id>'9500') ORDER BY h "; //2859: hr teszt hu-n is legyen laathatoo
if($cty==30) $queryS = "SELECT $dsid FROM stations  where cty='30'  || (cty=56 && st_id>'9500') ORDER BY h "; //3056: hr Meisteraei Stará Lubovna-n is legyen laathatoo
if($cty==25) $queryS = "SELECT $dsid FROM stations  where st_txt>-100 && st_txt<0 && cty<50  ORDER BY -st_txt ";
//if($cty==71) $queryS = "SELECT $dsid FROM stations  where st_txt>-100 && st_txt<0 && cty>50 && cty<70  ORDER BY -st_txt ";
if($cty==99) $queryS = "SELECT * FROM stations  where st_txt>-100 && st_txt<0 && cty>50 && cty<70 && GSMno>''  ORDER BY -st_txt ";
if($cty==50) $queryS = "SELECT $dsid FROM stations  where st_id>'9500' && GSMno>'' ORDER BY st_id ";

 $reS = mysqli_query($sql_connect,$queryS);

$row_loop=1;

while ( $rowS = mysqli_fetch_array($reS, MYSQLI_ASSOC))

{   // measure START:
 $sid=$rowS[sid];
 $stNo=$rowS[st_id];
$qGSMno=substr($rowS[GSMno],0,1);
$qGPRSno=substr($rowS[GPRSno],0,1);
$qBCUno=substr($rowS[BCUno],0,1);
$qFBSno=substr($rowS[FBSno],0,1);
$qHGTno=substr($rowS[HGTno],0,1);
$qRaino=substr($rowS[Raino],0,1);
$qst_txt=substr($rowS[st_txt],0,5);
$qmegj=$rowS[megj];

//substr($string,0,12);


//  id station_id measure_time mta mtp air_temp air_dew_temp rel_hum precip_imp_int precip_imp_lng surf_temp surf_deep_temp surf_salt_sat surf_salt_pri surf_water_depth surf_freez_temp surf_condition Value_7 Value_6 Value_5 Value_4 Value_3 Value_2 Value_1 Value_0 precip_stat1 precip_stat2 precip_stat3 door_contact AccuV hum air surft surfdt 
	$queryLD = "SELECT * FROM  last_data  where   station_id=$stNo ";
 $reLD = mysqli_query($sql_connect,$queryLD);
$rowLD = mysqli_fetch_array($reLD, MYSQLI_ASSOC);

$measure_time[$stNo]=$rowLD[mta];

	$air_dew_temp[$stNo]=$rowLD[air_dew_temp];
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


  $AccuV[$stNo] = $rowLD[AccuV];

	//needed for wind&presentweather detectors:
 	$Value_0[$stNo] = $rowLD[Value_0];
	$Value_1[$stNo] = $rowLD[Value_1];
	$Value_2[$stNo] = $rowLD[Value_2];
	$Value_3[$stNo] = $rowLD[Value_3];
	$Value_4[$stNo] = $rowLD[Value_4];
	$Value_5[$stNo] = $rowLD[Value_5];
	$Value_6[$stNo] = $rowLD[Value_6];
	$Value_7[$stNo] = $rowLD[Value_7];



//	include "clc_std.php";
	include($L."/clc_std-".$L.".php");
	include "clc_std-c.php"; //2979: Regen soll blau werden (im Gruppenstatus)


                  if ($measure_time[$stNo]!=0){
		  $today = date("H:i d.m.Y",(round(($measure_time[$stNo]+130)/60)*60));  //3065: Zeit-Datum umkehren
if($L=="hu")	  $today = date("Y.m.d H:i",(round(($measure_time[$stNo]+130)/60)*60));}

                  else
                  		$today = "<font color=#ff6060><?php  echo $Nincsmérésiadat ;?></font>";
$bgclr='class="smallergrey" bgcolor="#BDBA7D"';
if($measure_time[$stNo]<$tm2s) $bgclr='class="smallergrey" bgcolor="#68987D"';

?>

               <!-- ÁLLOMÁS BLOKK: -->
                <td width="20%">

                <!-- ÁLLOMÁS TÁBLA: -->
                  <table width="69" border="0"  cellpadding="2" <?php   if($qst_txt*$qst_txt>1000) echo 'cellspacing="2" bgcolor="#BDBA00"'; if($qst_txt*$qst_txt>1000) echo 'cellspacing="2" bgcolor="#BDBA00"'; else echo 'cellspacing="1"' ?>  title='<?php  print($qst_txt." ".$rowS[st_Ort]);?>  <?php   if($qst_txt*$qst_txt>1000) echo "SZERZÕDÉS NÉLKÜL "; else echo "" ?> <?php  echo $qmegj ;?>'>
		    <tr align="center" height="35" <?php   if($AccuV[$stNo]>99.9) echo 'bgcolor="#D0CE88"'; else echo 'bgcolor="#BDBA7D"'; ?> > 
                      <td colspan="3"     >
		      <a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4#tocI")?>' title='<?php  echo $Grafikonmegtek ;?>' >
<?php  print($stNo);?> <?php  print($rowS[st_Ort]);?></a><br>
                      <a href="<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=2#tocI")?>" title='<?php  echo $Táblázatmegtek ;?>' >
                      <?php  print($today);?></a>  </td>
                    </tr>

                    <tr  <?php  echo $bgclr;?>>
                      <td width="64" height="20" align="left" ><?php   print($Lhõ_Uhõ);?></td>
                      <td width="65" height="20" align="right"><?php   printf("%6.1f",$air[$stNo]);?> </td>
                      <td width="65" height="20" align="right"><?php   printf("%6.1f",$surft[$stNo]);?></td>
                    </tr>

                    <tr  <?php  echo $bgclr;?>>
                      <td width="64" height="20" align="left"  <?php   if($qFBSno==="h") echo 'bgcolor="#ffffff"'; if($qFBSno==="m") echo 'bgcolor="#f6cece"'; ?>><?php   print($Thõ_Fpt);?></td>
                      <td width="65" height="20" align="right"><?php   if($Value_7[$stNo]>-1) printf("%6.1f",$surfdt[$stNo]); elseif($Value_7[$stNo]>-2) printf("%6.1fm/s",$surfdt[$stNo]); else printf("%6.1f",$surfdt[$stNo]); ?> </td>
                      <td width="65" height="20" align="right"><?php   if($Value_7[$stNo]>-1) printf("%6.1f",$surf_freez_temp[$stNo]); elseif($Value_7[$stNo]>-2) printf("%6.1fm/s",$surf_freez_temp[$stNo]);else printf("%6.1f",$surf_freez_temp[$stNo]); ?></td> 
                    </tr>
<?php   $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 ?>


                    <tr  <?php  echo $bgclr;?>>
                      <td width="64" height="20" align="left"  <?php   if($qHGTno==="h") echo 'bgcolor="#ffffff"'; if($qHGTno==="m") echo 'bgcolor="#f6cece"'; ?> ><?php  print($Pta_Hpt);?></td>
                      <td width="65" height="20" align="right"><?php  printf("%6.1f",$hum[$stNo]);?>%</td>
                      <td width="65" height="20" align="right"><?php  printf("%6.1f",$air_dew_temp[$stNo]);?></td>
                    </tr>


                    <tr bgcolor="<?php  print($st_csc[$stNo]);?>" class="smallergrey">
                      <td height="20" align="left"  <?php   if($qRaino==="h") echo 'bgcolor="#ffffff"'; if($qRaino==="m") echo 'bgcolor="#f6cece"'; ?>><?php  print($Csi_Cst);?></td>
		      <td width="65" height="20" align="right">
<?php   
	$rain_int_stNo=$rain_int[$stNo];  
       if($rain_int_stNo<0) $rain_int_stNo=0;	
		 if( $rain_int[$stNo]> 0.5 && $air[$stNo]> 0.49 ) printf("%6.0fmm",$rain_int_stNo); 
		 elseif($rain_int[$stNo]>0.5 && $air[$stNo]<0.5 ) printf("%6.0fcm",$rain_int_stNo);  
		 elseif($lgn=='Xps' or $lgn=='A') printf("%6.2f",$rain_int_stNo); 
		 else echo "0";
?>	 
		 </td>
                      <td width="65" height="20" align="right"><?php    print($st_cst[$stNo]); ?></td>
                    </tr>

                    <tr  <?php  echo $bgclr;?>>
                      <td height="20" align="left"  <?php   if($qGPRSno==="h") echo 'bgcolor="#ffffff"'; if($qGPRSno==="m") echo 'bgcolor="#f6cece"'; ?>><?php  print($Táp_Vrv);?></td>
                      <td width="65" height="20" align="right"> <?php   if($Value_7[$stNo]!=-1){if($AccuV[$stNo]<99.9) printf("%6.1fV",$AccuV[$stNo]);  else printf("%6.0fV",$AccuV[$stNo]);} else printf("%6.0f°",$AccuV[$stNo]); ?></td>
                      <td bgcolor="<?php  print($st_upc[$stNo]);?>" width="65" height="20" align="right"> <?php    printf("%6.1fmm", $rowLD[surf_water_depth]); ?></td>
		      </tr>


                    <tr bgcolor="<?php  print($st_upc[$stNo]);?>" class="smallergrey">
                      <td width="64" height="20" align="left" ><?php   print($Vté_Upá);?></td>
		      <!--td width="65" height="20" align="right"><?php   if($Value_7[$stNo]>-1) printf("%6.1fgr",$surf_salt_pri[$stNo]);  elseif($Value_7[$stNo]>-2) printf("%6.0f°",$surf_salt_pri[$stNo]);else printf("%6.1fgr",$surf_salt_pri[$stNo]);?></td-->
<td width="65" height="20" align="right"><?php   printf("%6.1fgr",$sSp) ?></td>
                      <td width="65" height="20" align="right"><?php   print($st_upa[$stNo]);?></td>
                    </tr>



                    <tr align="center" bgcolor="#BDBA7D" > 
                      <td height="15" colspan="3" class="smallergrey">
             <a href="<?php  print("$INDEX&cmd=2&dd=$stNo");?>" title='<?php  echo $Táblázatmegteknyilacskára ;?>' >
<img src="../kepek/buttons/sm_ki2.gif" width="20" height="25" border="0"></a>
	<?php  
		 $cmd=4;
//if($stNo==9522) $cmd=10; if($stNo==9205) $cmd=10; if($stNo==9502) {$cmd=10;echo $stNo;}
if($stNo==9522 or $stNo==9205 or $stNo==9502) {$cmd=10;//echo $stNo;
}

?> 
		      <a href='<?php  print ("$INDEX&dd=$stNo&cmd=$cmd#tocI")?>' title='<?php  echo $Grafikonmegtek ;?>' target="_self">


<?php  
//echo $stNo;
//define the path as relative
$path =  "/var/www/html/42es/TescoJPG/";

//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

//echo "Directory Listing of $path <img src='hr/cesting-logo.gif' ><br/>";
$n=0;
//running the while loop
while ($file = readdir($dir_handle)) 
{
	$n++;

	$fileList[$n]=$file; //   echo $file."<br/>";
//	$fileNumb[$n]=$file[0]+$file[1]+$file[2]+$file[3];       /// OVO SABIRA !!
	$fileNumb[$n]=$file[0].''.$file[1].''.$file[2].''.$file[3]; 
//	$fileNumb[$n]='f:'.$fileList[$n][3]; 

}
$nn=$n;

//echo "Reverse Directory Listing of $path<br/>";

/*
$p=0;
for ($k=$n;$p<9;$k--)   {	   if($fileList[$k][2]=='2'){$p++; $List[$p]=$fileList[$k];}   }    //9522    
$p=10;
for ($k=$n;$p<19;$k--)   {	   if($fileList[$k][3]=='5'){$p++; $List[$p]=$fileList[$k];}   }    //9205   
$p=20;
for ($k=$n;$p<29;$k--)   {	   if($fileList[$k][3]=='3'){$p++; $List[$p]=$fileList[$k];}   }    //9533    
 */
/*
$p=0;
for ($k=$n;$p<9;$k--)   {	   if($fileList[$k][3]=='5'){$p++; $List[$p]=$fileList[$k];}   }    //9205    
 
$p=20;
for ($k=$n;$p<29;$k--)   {	   if($fileList[$k][2]=='2'){$p++; $List[$p]=$fileList[$k];}   }    //9522   
 */
// FF:2295 az alábbi kód nem szereti a nem mûködõ kamerákat!!!
$p=0;
for ($k=$n;$p<9;$k--)   {	   if(!strcmp($fileNumb[$k], "9205")){$p++; $List[$p]=$fileList[$k];}   }    //9205 
/*
$p=10;
for ($k=$n;$p<19;$k--)   {	  if(!strcmp($fileNumb[$k], "9502")){$p++; $List[$p]=$fileList[$k];}   }    //9502 
 */
$p=20;
for ($k=$n;$p<29;$k--)   {	  if(!strcmp($fileNumb[$k], "9522")){$p++; $List[$p]=$fileList[$k];}   }    //9522    
 

//closing the directory
closedir($dir_handle);

?>



<?php  if($stNo!=9205  && $stNo!=9522){?>

<img  src="<?php   echo '../kepek/kicsi/'.$stNo.'.JPG';// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=40" height="45" <?php  //echo $wh01;?> usemap="#gomb<?php  echo $stNo;?>">

<map name="gomb<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/kepek/kicsi/'.$stNo.'.JPG'; ?> ')" >
</map>

<img  src="<?php   echo '../kepek/kicsi/'.$stNo.'BRS2010.JPG';// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=40" height="45" <?php  //echo $wh01;?> usemap="#gombBRS<?php  echo $stNo;?>">

<map name="gombBRS<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/kepek/kicsi/'.$stNo.'BRS2010.JPG'; ?> ')" >
</map>

<?php   } else { //echo $stNo;
//echo $fileNumb[232];
//if(!strcmp($fileNumb[232], "9205")) echo $fileNumb[232] 
?>


<script language="JavaScript">
	ddst="<?php   echo $stNo; ?>";
	stkk="<?php   echo $stk; ?>";
//alert(ddst);
</script>

<?php  if($stNo==9205) $c=0; if($stNo==9502) $c=10; if($stNo==9522)  $c=20;?> 
<img  src="<?php   echo '<?php echo $hE; ?>/TescoJPG/'.$stNo; ?>.jpg" border="0"  width=80" height="45"  usemap="#gomb<?php  echo $c;?>" >

<map name="gomb<?php  echo $c;?>">
<?php   //echo $c;?>
<area shape="rect" coords="0, 0, 10, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[9+$c]; ?> ')" >
<area shape="rect" coords="10, 0, 20, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[8+$c]; ?> ')" >
<area shape="rect" coords="20, 0, 30, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[7+$c]; ?> ')" >
<area shape="rect" coords="30, 0, 40, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[6+$c]; ?> ')" >
<area shape="rect" coords="40, 0, 50, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[5+$c]; ?> ')" >
<area shape="rect" coords="50, 0, 60, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[4+$c]; ?> ')" >
<area shape="rect" coords="60, 0, 70, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[3+$c]; ?> ')" >
<area shape="rect" coords="70, 0, 80, 25" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[2+$c]; ?> ')" >
<area shape="rect" coords="0, 25, 90, 45"  onclick="megnezem(ddst,stkk)" onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/TescoJPG/'.$List[1+$c]; ?> ')" >

</map>
<?php   } ?>
</a>





                      </td>
                    </tr>
                  </table>  <!-- ÁLLOMÁS TÁBLA vége -->
                </td>   <!-- ÁLLOMÁS BLOKK vége -->
<?php  
if ($row_loop==5)	{  	 print("</tr>\n<tr align='center' valign='top'>\n");	 $row_loop=0;	}

$row_loop++;
} /// measure END

mysqli_close ($sql_connect);
?>
              
              
              
              
              </tr>   <!-- BELSO SOR vége -->
              
              <!-- BELSO PÓTSOR: -->
              <tr align="center" valign="top">
              
                              <td height="30" colspan="5" class="smallergrey">
                              
                                <!-- JELMAGYARÁZÓ ALTÁBLA: -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="smallergrey">
  				<tr>
    				<td width="20%"><?php  echo $Ptapáratartalom ;?></td>
    				<td width="20%"><?php  echo $Lhõléghõmérséklet ;?></td>
    				<td width="20%"><?php  echo $Thõtalajhõmérséklet ;?></td>
                                <td width="20%"><?php  echo $Vtévegyitényezõ ;?></td>
                                <td width="20%"><?php  echo $Vrvvízréteg ;?></td>
  				</tr>
  				<tr>
  				<td width="20%"><?php  echo $Hptharmatpont ;?></td>
  				<td width="20%"><?php  echo $Uhõútpályahõm ;?></td>
    				<td width="20%"><?php  echo $Fptfagypont ;?></td>
    				<td width="20%"><?php  echo $UpáÚtpályaállapot ;?></td>
    				<td width="20%"><?php  echo $Csicsapadék ;?></td>
  				</tr>
  				<tr>
				<td width="20%">
<a href="<?php  print("$INDEX&cmd=10&st=0&dd=$stNo");?>" title='<?php   echo $TESCOkamera ;?>' target="_self"><b><?php  if($StrMsw>0) echo $TESCOkörhídiBoreas ;?></a></b> </td>
				<td width="20%">
<a href="<?php  print("$INDEX&cmd=10&st=1&dd=$stNo");?>" title='<?php   echo $TESCOkamera ;?>' target="_self"><b><?php  if($StrMsw>0) echo $állomáswebkamerájának ;?></a></b></td>
				<td width="20%">
<a href="<?php  print("$INDEX&cmd=10&st=2&dd=$stNo");?>" title='<?php   echo $TESCOkamera ;?>' target="_self"><b><?php  if($StrMsw>0) echo $ötpercesgyakoriságúhelyzetképtáblázata ;?></a></b>&nbsp;</td>
    				<td width="20%"><?php  echo $Táptápfeszültség ;?></td>
                                <td width="20%"><?php  echo $CstCsapadéktipus ;?></td>
				</tr>

				</table>   <!-- JELMAGYARÁZÓ ALTÁBLA vége -->
                </td>
              </tr>  <!-- BELSO PÓTSOR vége -->
  <?php   include "mid_cs2.php"; ?>               
	    </table>     <!-- BELSO TÁBLA LE-TOP KONTROLL vége -->

