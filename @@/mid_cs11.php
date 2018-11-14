
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




<?php  
//echo $bn;
// include "newmes43.php";   //depreciated 2.11.2011
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }



$dsid='*';

$queryS = "SELECT $dsid FROM stations  where  cty=$cty ORDER BY st_id ";
if($cty==0) $queryS = "SELECT $dsid FROM stations  where h=='999' ORDER BY st_id ";
if($cty==-2) $queryS = "SELECT $dsid FROM stations  where h<'999' ORDER BY h ";
if($cty==-3) $queryS = "SELECT $dsid FROM stations   ORDER BY st_id ";
if($cty==21) $queryS = "SELECT $dsid FROM stations  where (st_txt>100 && st_txt<1000) || (st_txt>-1000 && st_txt<-100) ORDER BY st_id ";
if($cty==24) $queryS = "SELECT $dsid FROM stations  where cty='24'  || (cty=56 && st_id>'9500') ORDER BY h "; //2859: hr teszt hu-n is legyen laathatoo
if($cty==56) $queryS = "SELECT $dsid FROM stations  where cty='56'  || (cty=30 && st_id>'9500') ORDER BY h "; //2859: hr teszt hu-n is legyen laathatoo
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
		  $today = date("H:i d.m.Y",(round(($measure_time[$stNo]+130)/60)*60));  //3065: Zeit-Datum umkehren
if($L=="hu")	  $today = date("Y.m.d H:i",(round(($measure_time[$stNo]+130)/60)*60));}

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
<?php  
//if ($row_loop==5)	{  	 print("</tr>\n<tr align='center' valign='top'>\n");	 $row_loop=0;	}

$row_loop++;
} /// measure END

mysqli_close ($sql_connect);

?>
  
           <!-- BELSO TÁBLA LE-TOP KONTROLL: -->
            <table width="100%" border="0" cellspacing="0" cellpadding="3" >

              <!-- BELSO PÓTSOR: -->
              <tr align="center" valign="top">
              
                              <td height="30" colspan="5" class="smallergrey">
         

<a href="<?php   echo $INDEX;?>&cmd=11" target="_self"" ><big><big><big>

<?php  //

echo $Grupnigrafickiprikaz." :";
 include "mid_cs2.php";
 ?> </a></big></big></big>
</td>
  				</tr>

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
    
<a href="<?php   echo $INDEX;?>&cmd=1" target="_self"" ><big><big>

<?php  //

echo $Grupnitablicniprikaz." -->>";
 //include "mid_cs.php";
 ?> </a></big></big>
</table>  <!-- BELSO TÁBLA LE-TOP KONTROLL  vége  -->


