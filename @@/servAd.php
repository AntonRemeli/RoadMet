
<h1>SzervizLista  <?php  if($hRg!='') echo $hRg.". Régió";?></h1>  


<table <?php  if($tab!=''){?> border="1"  cellpadding="2" cellspacing="1" bgcolor="#ffffff"<?php  }?> >


<?php  
/*
if($stm<9000) {

$rowss=1;


if($stn<0) $stn=0;
$ros=$stn;
include "serw+.php";
$ron=0;
while($ros<$stn+$stm)                //  $stno=$ros loop START
{                  
	$stno=$ros;
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
$queryst = "SELECT * FROM stations where st_id=$stno";

$rest = mysqli_query($sql_connect,$queryst);
$rowst = mysqli_fetch_array($rest, MYSQLI_ASSOC);
$st_Ort=$rowst[st_Ort];
$st_txt=$rowst[st_txt];
$StrM=$rowst[StrM];
$GSMno=$rowst[GSMno];
$GPRSno=$rowst[GPRSno];
$BCUno=$rowst[BCUno];
$FBSno=$rowst[FBSno];
$HGTno=$rowst[HGTno];
$Raino=$rowst[Raino];


//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
$queryr = "SELECT * FROM users where strm=$StrM";


$rer = mysqli_query($sql_connect,$queryr);
$rowr = mysqli_fetch_array($rer, MYSQLI_ASSOC);
$reg=$rowr[reg];

if($reg==$hRg or $hRg==''){			 // >>>>>>>>>>>>>>>>   $reg   START

if($st_txt>$zrk or $stno<9000 or $zrk[0]=="h"){            // >>>>>>>>>>>>>>>>   $zrk   START
	if($zrk[0]!="h") include "servZrk.php";
	elseif($GSMno[0]=="h" or $GPRSno[0]=="h" or $BCUno[0]=="h" or $FBSno[0]=="h" or $HGTno[0]=="h" or $Raino[0]=="h") {
		if($st_txt<$zrk[1] and $st_txt>'0' ) include "servZrk.php";}

}                          // >>>>>>>>>>>>>>>>   $zrk   END
}                          // >>>>>>>>>>>>>>>>   $reg   END
$ros++;

}                         //  $stno=$ros loop END

}
else */
	include "servAll.php";

 
?>


<//table>   
