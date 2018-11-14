
<?php   
//error_reporting(E_ALL);
error_reporting(0);

$MOD="mid_cs.php";
include "LM.php";
//echo $lgn. '' .$pwd. '' .$usn;
include "log.php";

?>

 	

<script language="JavaScript">
Lseq = 1;
</script>


           <!-- BELSO TÁBLA LE-TOP KONTROLL: -->
            <table width="100%" border="0" cellspacing="0" cellpadding="3" >

              <!-- BELSO SOR: -->
              <tr align="center" valign="top">
 
<a href="<?php   echo $INDEX;?>&cmd=1" target="_self"" ><big><big><big>

<?php  //

echo $Grupnitablicniprikaz." :";
 //include "mid_cs.php";
 ?> </a></big></big></big>

<?php  
//echo $bn;
// include "newmes43.php";   //depreciated 2.11.2011
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	


$dsid='*';

$queryS = "SELECT $dsid FROM stations  where  cty=$cty ORDER BY st_id ";
if($cty==0) $queryS = "SELECT $dsid FROM stations  where h=='999' ORDER BY st_id ";
if($cty==-2) $queryS = "SELECT $dsid FROM stations  where h<'999' ORDER BY h ";
if($cty==-3) $queryS = "SELECT $dsid FROM stations   ORDER BY st_id ";
if($cty==21) $queryS = "SELECT $dsid FROM stations  where (st_txt>100 && st_txt<1000) || (st_txt>-1000 && st_txt<-100) ORDER BY st_id ";
if($cty==24) $queryS = "SELECT $dsid FROM stations  where cty='24'  || (cty=56 && st_id>'9500') ORDER BY h "; //2859: hr teszt hu-n is legyen laathatoo
//if($cty==56) $queryS = "SELECT $dsid FROM stations  where cty='56'  || (cty=30 && st_id>'9500') ORDER BY h "; //2859: hr teszt hu-n is legyen laathatoo
//if($cty==56) $queryS = "SELECT $dsid FROM stations  where cty='56'  || ( st_id>'9500') ORDER BY h "; //2859: hr teszt hu-n is legyen laathatoo
if($cty==30) $queryS = "SELECT $dsid FROM stations  where cty='30'  || (cty=56 && st_id>'9500') ORDER BY h "; //3056: hr Meisteraei Stará Lubovna-n is legyen laathatoo
if($cty==25) $queryS = "SELECT $dsid FROM stations  where st_txt>-100 && st_txt<0 && cty<50  ORDER BY -st_txt ";
//if($cty==71) $queryS = "SELECT $dsid FROM stations  where st_txt>-100 && st_txt<0 && cty>50 && cty<70  ORDER BY -st_txt ";
if($cty==99) $queryS = "SELECT * FROM stations  where st_txt>-100 && st_txt<0 && cty>50 && cty<70 && GSMno>''  ORDER BY -st_txt ";
if($cty==50) $queryS = "SELECT $dsid FROM stations  where st_id>'9500' && GSMno>'' ORDER BY st_id ";

// $reS = mysqli_query($sql_connect,$queryS);
 $re0 = mysqli_query($sql_connect,$queryS);

$row_loop=1;


 $reS = mysqli_query($sql_connect,$queryS);


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
$qSWno=substr($rowS[SWno],0,1);

$qst_txt=substr($rowS[st_txt],0,5);
$qmegj=$rowS[megj];




if( $KIB<1) include "mid_csAct.php";
if( $KIB>0) include "mid_csHst.php";



//	include "clc_std.php";
////////////////////////////////////////////////	include "session.php";
	include($L."/clc_std-".$L.".php");
	include "clc_std-c.php"; //2979: Regen soll blau werden (im Gruppenstatus)

//$tm2s = $time1Y-0.15*86400;

                  if ($measure_time[$stNo]!=0){
		  $today = date("H:i d.m.Y",(round(($measure_time[$stNo]+10)/60)*60));  //3065: Zeit-Datum umkehren
if($L=="hu")	  $today = date("Y.m.d H:i",(round(($measure_time[$stNo]+10)/60)*60));}

                  else
                  		$today = "<font color=#ff6060><?php  echo $Nincsmérésiadat ;?></font>";
$bgclr='class="smallergrey" bgcolor="#BDBA7D"';
if($measure_time[$stNo]<$tm2s) $bgclr='class="smallergrey" bgcolor="#68987D"';
//echo 
//$ido1=$measure_time[$stNo]-86400;
//$ido2=$measure_time[$stNo];




$ido1=$ido2-86400;
//$bnr=1;
$bnr=2;
?>


               <!-- ÁLLOMÁS BLOKK: -->
                <td width="10%">

                <!-- ÁLLOMÁS TÁBLA: -->
                  <table width="29" border="0"  cellpadding="1" >
             <tr align="center" height="35"   <?php  echo $bgclr;?>>        

  <td colspan="5"     >


<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&cal=0&ido1=$ido1&ido2=$ido2&GSW=0#tocI")?>' title='<?php   //echo $Grafikonmegtek." ".$ido1." - ".$ido2 ;?>' >
<?php  if($measure_time[$stNo]>$bnr*$tm2s){?>
<img  src="<?php   echo '../IMG1/'.$stNo.'.png?q='.time();?>" border="0" width=120" height="45"  usemap="#gomb<?php  echo $stNo;?>">
<map name="gomb<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 120, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'.png?q='.time(); ?>  width=600 height=300 >')" >
</map><br>

<?php  } print($stNo);?> <?php  print($rowS[st_Ort]);?></a><br>


                      <a href="<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=2#tocI")?>" title='<?php  echo $Táblázatmegtek ;?>' >
                      <?php  print($today);?></a>  </td>
                    </tr>



<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>

                    <tr  <?php  echo $bgclr;?>>
                      <td height="20" align="left" <?php   if($qRaino==="h") echo 'bgcolor="#68987D"'; if($qRaino==="m") echo 'bgcolor="#f6cece"'; ?>>

<?php  if($measure_time[$stNo]>$bnr*$tm2s){?>
<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=1#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'0.png?q='.time();?>" border="0" width=40" height="15"  usemap="#gomb0<?php  echo $stNo;?>">
<map name="gomb0<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'0.png?q='.time(); ?> width=600 height=300 >')" >
</map>

<?php  } print($Csi_Cst);?></td>
		      <td width="65" height="20" align="right"  title="<?php  echo $Csicsapadék ;?>" >
<?php   
	$rain_int_stNo=$rain_int[$stNo];  
       if($rain_int_stNo<0) $rain_int_stNo=0;	
		 if( $rain_int[$stNo]> 0.5 && $air[$stNo]> 0.49 ) printf("%6.0fmm",$rain_int_stNo); 
		 elseif($rain_int[$stNo]>0.5 && $air[$stNo]<0.5 ) printf("%6.0fcm",$rain_int_stNo);  
		 elseif($lgn=='Xps' or $lgn=='A') printf("%6.1fmm",$rain_int_stNo); 
		 else echo "0";
?>	 
		 </td>
                      <td width="65" height="20" align="right"  title="<?php  echo $CstCsapadéktipus ;?>" ><?php    print($st_cst[$stNo]); ?></td>
                    </tr>
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>



<?php  if($stNo>9533 && $stNo<9540 ){?>
                    <tr  <?php  echo $bgclr;?>>
                      <td width="64" height="20" align="left"   >
<?php  if($measure_time[$stNo]>$bnr*$tm2s){?>
<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=2#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'00.png?q='.time();// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=40" height="15" <?php  //echo $wh01;?> usemap="#gomb00<?php  echo $stNo;?>">
<map name="gomb00<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'00.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php  }print($Wnd_wDr);?></td>
<?php  
$wind1stNo=$wind1[$stNo];
$wind3stNo=$wind3[$stNo];
if($wind1stNo>44)		{$wind1stNo=$wind1[$stNo]/100; $wind3stNo=$wind3[$stNo]/100;}
if($stNo==9539)		$wind1stNo=$wind1[$stNo]/10;
?>
                      <td width="65" height="20" align="right" title="<?php  echo $SzélSeb ;?>" ><?php  printf("%6.0fm/s",$wind1stNo);?></td>
                      <td width="65" height="20" align="right" title="<?php  echo $SzélIr ;?>" ><?php  if($wind1stNo>1) printf("%6.0f°",$wind3stNo); else echo "--";?></td>
                    </tr>
<?php  }?><?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>


                    <tr  <?php  echo $bgclr;?>>
                      <td width="64" height="20" align="left" <?php   if($qHGTno==="h") echo 'bgcolor="#68987D"'; if($qHGTno==="m") echo 'bgcolor="#f6cece"'; ?> >
 
<?php  if($measure_time[$stNo]>$bnr*$tm2s){?>
<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=3#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'000.png?q='.time();// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=40" height="15" <?php  //echo $wh01;?> usemap="#gomb000<?php  echo $stNo;?>">
<map name="gomb000<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php  } print($Lhõ_Pta);?></td>
                      <td width="65" height="20" align="right" title="<?php  echo $Lhõléghõmérséklet ;?>" ><?php   printf("%6.1f°C",$air[$stNo]);?> </td>
                      <td width="65" height="20" align="right" title="<?php  echo $Ptapáratartalom ;?>" ><?php  printf("%6.0f",$hum[$stNo]);?>%</td>
                   </tr>
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                    <tr  <?php  echo $bgclr;?>>
                      <td width="64" height="20" align="left"  <?php   if($qFBSno==="h") echo 'bgcolor="#68987D"'; if($qFBSno==="m") echo 'bgcolor="#f6cece"'; ?>>

<?php   if($measure_time[$stNo]>$bnr*$tm2s) {?>
<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=4#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'0000.png?q='.time();?>" border="0" width=40" height="15"  usemap="#gomb0000<?php  echo $stNo;?>">
<map name="gomb0000<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'0000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php  } print($Uhõ_Fpt);?></td>
                      <td width="65" height="20" align="right" title="<?php  echo $Uhõútpályahõm ;?>" ><?php   printf("%6.1f°C",$surft[$stNo]);?></td>
                      <td width="65" height="20" align="right" title="<?php  echo $Fptfagypont ;?>" ><?php  printf("%6.1f°C",$surf_freez_temp[$stNo]);?></td>
                    </tr>
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>


                    <tr  <?php  echo $bgclr;?>>
                      <td height="20" align="left"  <?php   if($qGPRSno==="h") echo 'bgcolor="#68987D"'; if($qGPRSno==="m") echo 'bgcolor="#f6cece"'; ?>>
<?php  print($Táp_Vrv);?></td>
                      <td width="65" height="20" align="right" title="<?php  echo $Táptápfeszültség ;?>" > <?php   if($Value_7[$stNo]!=-1){if($AccuV[$stNo]<99.9) printf("%6.1fV",$AccuV[$stNo]);  else printf("%6.0fV",$AccuV[$stNo]);} else printf("%6.0f°",$AccuV[$stNo]); ?></td>
                      <td width="65" height="20" align="right" title="<?php  echo $Vrvvízréteg ;?>" bgcolor="<?php  print($st_upc[$stNo]);?>" > <?php    printf("%6.1fmm", $surf_water_depth[$stNo]); ?></td>
		      </tr>
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>


<?php   $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 ?>

                    <tr bgcolor="<?php  print($st_upc[$stNo]);?>" class="smallergrey">
                      <td width="64" height="20" align="left" >
<?php   if($measure_time[$stNo]>$bnr*$tm2s) {?>
<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=5#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'00000.png?q='.time();// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=40" height="15" <?php  //echo $wh01;?> usemap="#gomb00000<?php  echo $stNo;?>">
<map name="gomb00000<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'00000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php  } print($Vté_Upá);?></td>
		      <!--td width="65" height="20" align="right"><?php   if($Value_7[$stNo]>-1) printf("%6.1fgr",$surf_salt_pri[$stNo]);  elseif($Value_7[$stNo]>-2) printf("%6.0f°",$surf_salt_pri[$stNo]);else printf("%6.1fgr",$surf_salt_pri[$stNo]);?></td-->
			<td width="65" height="20" align="right" title="<?php  echo $Vtévegyitényezõ ;?>" ><?php   printf("%6.1fgr",$sSp) ?></td>
                      	<td width="65" height="20" align="right" title="<?php  echo $UpáÚtpályaállapot ;?>" ><?php   print($st_upa[$stNo]);?></td>
                    </tr>
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>



                    <tr align="center" bgcolor="#BDBA7D" > 
                      <td height="15" colspan="3" class="smallergrey">
             <a href="<?php  print("$INDEX&cmd=2&dd=$stNo");?>" title='<?php  //echo $Táblázatmegteknyilacskára ;?>' >
<img src="../kepek/buttons/sm_ki2.gif" width="120" height="1" border="0"></a><br>
	<?php  
//		 $cmd=4;
		 $cmd=2;
//if($stNo==9522) $cmd=10; if($stNo==9205) $cmd=10; if($stNo==9502) {$cmd=10;echo $stNo;}
if($stNo==9522 or $stNo==9205 or $stNo==9502) {$cmd=10;//echo $stNo;
}

?> 
		      <a href='<?php  print ("$INDEX&dd=$stNo&cmd=$cmd#tocI")?>' title='<?php  //echo $Táblázatmegteknyilacskára ;?>' target="_self">


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
// FF:2295 az alábbi kód nem szereti a nem mûködõ kamerákat!!! 2012JAN9: KÉPEK NÉLKÜL MINDEN CSOPORTSTÁTUSZ LEFAGY !!!
//$p=0;
//for ($k=$n;$p<9;$k--)   {	   if(!strcmp($fileNumb[$k], "9205")){$p++; $List[$p]=$fileList[$k];}   }    //9205 
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

<img  src="<?php   echo '../kepek/kicsi/'.$stNo.'.JPG';// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=55" height="45" <?php  //echo $wh01;?> usemap="#gombKEP<?php  echo $stNo;?>">

<map name="gombKEP<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/kepek/kicsi/'.$stNo.'.JPG'; ?> ')" >
</map>

<img  src="<?php   echo '../kepek/kicsi/'.$stNo.'BRS2010.JPG';// echo $L.'/megnezem'.$L.'.gif';?>" border="0" width=55" height="45" <?php  //echo $wh01;?> usemap="#gombBRS<?php  echo $stNo;?>">

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
  				</tr></table>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="smallergrey">
  				<tr>
				<td width="20%"><?php  echo $SzélSebs ;?></td>
 				<td width="40%"><?php  echo $SzélIrn ;?></td>
				<td width="20%"><?php  echo $Táptápfeszültség ;?></td>
				<td width="20%"><?php  echo $CstCsapadéktipus ;?></td>
   				
                                
				</tr>

				</table>   <!-- JELMAGYARÁZÓ ALTÁBLA vége -->
                </td>
              </tr>  <!-- BELSO PÓTSOR vége -->
<tr>
    				<td width="20%">
 <?php  // if($bnr<0.5) 
//include "mid_cs2.php";

 ?>    
 </td>
              </tr>          
	    </table>     <!-- BELSO TÁBLA LE-TOP KONTROLL vége -->

<a href="<?php   echo $INDEX;?>&cmd=11" target="_self"" > <big><big>

<?php  // include "mid_cs2.php";

echo $Grupnigrafickiprikaz." -->>";

 ?> </a></big></big>




