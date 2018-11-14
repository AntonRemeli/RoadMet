<?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> 
	<?php //echo $hE; ?>

<?php  
 error_reporting(0);

$MOD="index.php";
include "LM.php";
//echo $tm1;
//if($ido2=='' && $KIB<1) $ido2=time();
	//include "log.php";
//$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

include "userd.php";
//echo 'Régióváltó '.$Regio;
//echo $StrMsw;
//echo $strm;
//if($StrMsw>0 || $strm=='root' ) include "alarm.php";
mysqli_close ($sql_connect);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php  echo $UTMETFÕszerver;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="js/style" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="js/calendar-win2k-cold-1.css" title="win2k-cold-1" />

  <!-- main calendar program -->
  <script type="text/javascript" src="js/calendar.js"></script>

  <!-- language for the calendar -->
<script type="text/javascript" src="js/calendar-<?php  echo $L;?>.js"></script>

  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="js/calendar-setup.js"></script>	


<?php   include "LiveDate.php"; ?>
<?php  // include "ShowDate.php"; ?>

	
<script language="JavaScript" src="js/B1.js">
</script>
<SCRIPT type="text/javascript" Language="JavaScript1.2" src="js/B3.js">
</SCRIPT>



</head>

<!--body  bgcolor="#D3D2B6" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="goforit()" onUnload="closePopWin()"-->
<body  bgcolor="#D3D2B6" onload="hidemenu('section8')"  >




<?php  // echo $böngészõ." ".$_GET['bn']." v.: ".$_GET['bv']; ?>



<!-- FELSO KERETTÁBLA DEFINIÁLÁSA: -->

<table width="100%" border="0" cellspacing="0" cellpadding="0" summary="">


<!-- AZ ELSO SOR KEZDETE: -->
<tr> 
  <!-- AZ ELSO BLOKK KEZDETE: -->
    <td width="40%" height="10" align="center" valign="center" bgcolor="#E4E3D2" >


     <a  href="<?php   echo $INDEX;?>" target="_self"><img alt="logo" <?php  echo $kepeklogo1gif ;?> align="top"
    title="<?php  echo $AMp ;?>" border="0">
<a name="topI" href="#tocI" target="_self"> <b> <?php   echo "  &nbsp;&nbsp;&nbsp;&nbsp;    ";?></b></a>



    </a> <br><br><a href="<?php   echo $INDEX;?>&cmd=6" target="_self"><?php  echo $A;?></a>
    <a href="<?php  echo $httpkozuthu ;?>" target="_blank"><big><big><big><?php  echo $MKht;?> </big></big> <?php  echo $ump;?></big></a></td>

  <!-- A MÁSODIK BLOKK KEZDETE: -->
    <td align="center" class="smallgreyBold">
    
    <!-- BENNE KÖZÉPTÁBLA: -->
    <table summary="" width="300" border="0" cellspacing="0" cellpadding="0">


<?php  

if($StrMsw>0 )
{?>
<a href="<?php   echo $INDEX;?>&cmd=8"><big><big><i><b><?php  echo $ÚTIF;?></b></i></big>&nbsp;<?php  echo $térinformatikaimegjelenítés;?></big> </a><br>
<?php  } elseif($cty<53 && $cty>49) {?> <a href="<?php   echo $INDEX;?>&cmd=8"><div align="center"> <img src="hr/cesting-logo.gif" title='<?php  echo $ÚTIF.' '.$térinformatikaimegjelenítés;?>'> </div> <?php  }
 else {?> <a href="<?php   echo $INDEX;?>&cmd=8"><big><big><i><b><?php  echo $ÚTIF;?></b></i></big>&nbsp;<?php  echo $térinformatikaimegjelenítés;?></big> </a><br> <?php  }?>
<br>


        <!-- KÖZÉPTÁBLA ELSO SORÁBAN: -->
        <tr> 
          <td width="300" height="60" align="center" bgcolor="#E4E3D2"> 
          
          <!-- BENNE SZERVERTÁBLA: -->
	  <table width="300" border="0" cellspacing="0" cellpadding="0" summary="">
 <tr> 
	      <td  align="center"  class="smallgreyBold"><a href="<?php    if($strm=='root') echo 'userUpd.php'.$sess; else echo $INDEX;?>"  target="_blank"><?php  echo $Felhasználó ;?> </a>
<a href="<?php    if($strm=='root') echo $INDEX.'&cmd=24&stn=0&tm1='.$tm1; else echo $INDEX;?>"  target="_blank">
<?php  echo $lgn;?></a> </td>
              </tr>
              <tr> 
	      <td  align="center"  class="smallgreyBold">
<a href="<?php    if($strm=='root') echo 'servAdmTxt.php'.$sess; else echo $INDEX;?>"  target="_blank"><?php  echo $Ügyeletesneve ;?></a>
<a href="<?php    if($strm=='root') echo $INDEX;?>&cmd=26"  target="_blank"><?php  echo $usn;?></a> </td>
	      </tr>
      <tr> 
	      <td  align="center"  class="smallgreyBold">
<?php  if($cc-$c>2 && $StrMsw>0)		{?>
    <span width="5" valign=middle  onClick="LeftR()" ><img src="../kepek/buttons/aL.png" width=5 height=11 ></span>
	<?php  } if($regg==0) $Regio=$Magyarország;
?>
	<a href="<?php   echo $INDEX;?>"  target="_blank"  title="<?php  echo $Régióváltó;?>"  alt="<?php  echo $Régióváltó;?>"><big>
<?php  if($regg>0) echo $regg.". "; echo $Regio;?></big></a> 
<?php  if($cc-$c>2 && $StrMsw>0)		{?>
<span width="5" valign=middle onClick="RightR()" ><img src="../kepek/buttons/aR.png" width=5 height=11 > </span>
<?php  }?>
</td>
	      </tr>
           </table> <!--  SZERVERTÁBLA bezárva -->
           </td>
        </tr>    <!-- KÖZÉPTÁBLA ELSO SORA bezárva: -->
        
        <!-- KÖZÉPTÁBLA MÁSODIK SORÁBAN HÁTTÉRKÉP: -->
        <tr> 
          <td width="300" height="40" align="center" background="../kepek/middle.gif" bgcolor="#E4E3D2">

           <!-- a HÁTTÉRKÉPEN ALTÁBLA: -->
          <table width="300"  border="0" cellpadding="0" cellspacing="0" summary="">
              <!-- a HÁTTÉRKÉP ALTÁBLA ELSO SORÁBAN FELHASZNÁLÓNÉV: -->

   
             <!-- a HÁTTÉRKÉP ALTÁBLA MÁSODIK SORÁBAN MEGYENÉV: -->
 
          </table>     <!--  HÁTTÉRKÉP ALTÁBLA bezárva -->
 
      
<?php  if($StrMsw>0 || $strm=='root' )		{  
 ?>
	<a href="<?php  echo $INDEX;?>&cmd=23" target="_blank"><big><?php  echo $Regionálisáttekintés ;?></big></a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="<?php    if($strm=='root') echo $INDEX.'&cmd=24&stn=9000&tm1='.$tm1; else echo $INDEX;?>&cmd=24"  target="_blank">
	<big><?php  echo $Szervízmunkák ;?></big></a> &nbsp;&nbsp; <br>&nbsp;&nbsp;
	<a href="<?php  echo $INDEX;?>&cmd=77" target="_blank"><big><?php  echo $Állomástáblázat ;?></big></a>&nbsp;&nbsp; 
	<a href="<?php  echo $INDEX;?>&cmd=25" target="_blank"  title="<?php  echo $Teljesítésigazolás ;?>"  alt="<?php  echo $Teljesítésigazolás ;?>"><big><?php  echo $Állomásstátuszok ;?></big></a> 
	

<?php  } ?>	   
          </td>
	
</tr>        <!-- KÖZÉPTÁBLA MÁSODIK SORA bezárva: -->
        
     </table>    <!--  KÖZÉPTÁBLA bezárva -->
       


      </td>    <!-- MÁSODIK BLOKK bezárva: -->

    <!-- A HARMADIK BLOKK KEZDETE: -->
    <td width="40%" height="50" align="left" valign="middle" bgcolor="#E4E3D2">
     <a href="#tip" target="_self"></a>
      <!-- BENNE A SZÉLSOTÁBLA: -->
      <table width="100%" border="0" cellspacing="0" cellpadding="0" summary="">
      
      <!-- SZÉLSOTÁBLA FELSO SORÁBAN KÉPEK: -->
           <tr align="center">
          <td width="15%"><a href="<?php  echo $httpakmimethu ;?>" target="_blank"><?php  echo $kepekbuttonsbutton_omszgif ;?>  border="0"
title="<?php  echo $OMSZadatai ;?>" alt="<?php  echo $OMSZadatai ;?>" <?php  echo $zaglif ;?> > </a></td>

 <script language="JavaScript">
seq = 100;
</script>

<!--script language="JavaScript" src="js/Br0.js">
</script-->
<script language="JavaScript" src="js/Bsat.js">
</script>

         
<td width="35%"> 
<a name="top" href="<?php  echo $SATphp ;?>" target="_blank" >
  <?php  echo $radarIMG ;?>
         

</a>  
</td>



          <td width="35%">
<?php  echo $K1img ;?>

<?php  echo $K2img ;?>





	<td width="15%">

<a href="<?php   echo $LOGIN;?>&cmd=9"><img src="../kepek/buttons/button_exit.gif"  border="0"
title="<?php  echo $KiLép ;?>"   alt="<?php  echo $KiLép ;?>"   ></a></td>
        </tr>  <!-- SZÉLSOTÁBLA FELSO SOR bezárva: -->
        
         <!-- SZÉLSOTÁBLA ALSÓ SORÁBAN KÉPMAGYARÁZAT: -->
         <tr align="center">
          <td class="smallgreyBold"><a href="<?php  echo $httpmethu ;?>" target="_blank"><?php  echo $OMSZ ;?></a> </td>

	  <td class="smallgreyBold"><a href="<?php  echo $Radarphp ;?>" target="_blank"  title="<?php  echo $MaSzHoSzRad ;?>"  alt="<?php  echo $MaSzHoSzRad ;?>"> <?php  echo $MaSzHoSzRad ;?></a> </td>
 
	  <td class="smallgreyBold"><a href="http://www.eumet.hu" target="_blank"  title="<?php  echo $EMSel ;?>"  alt="<?php  echo $EMSel ;?>"><?php  echo $EMSEWS ;?></a> </td>
          <!--td class="smallgreyBold"><a href="http://www.idokep.hu"target="_blank"><?php  echo $Idõképek ;?></a> </td-->
          <td class="smallgreyBold"><a href="<?php   echo $LOGIN;?>&cmd=9"><?php  echo $Kilépés ;?></a></td>
        </tr>   <!-- SZÉLSOTÁBLA MÁSODIK SOR bezárva: -->

      </table>   <!--  SZÉLSOTÁBLA bezárva: -->
      
    </td>  <!-- HARMADIK BLOKK bezárva: -->

</tr>   <!-- FELSO KERETTÁBLA ELSO SOR bezárva: -->


<!-- FELSO KERETTÁBLA MÁSODIK SOR KEZDETE: -->
<tr>
    <!-- AZ ELSO BLOKKBAN AZ ÓRA VAN: bgcolor="#00CC00" -->
    <td width="40%" height="5" align="left" <?php  echo $bgcolor;?>  class="smallgreyBold"> <span id="clock"></span> </td>












    <!-- A MÁSODIK BLOKKBAN MEGYE/ GIMSidooe VÁLTHATÓ: -->


<?php  
include "quser.php";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//echo 'c '.$c.'-'.$cc;
//include "session.php";

//$query = "SET CHARACTER SET latin2";
$query = "SET CHARACTER SET utf8";
mysqli_query($sql_connect,$query);

//$query = "SELECT distinct(county_id),county FROM `station_data` where county_id>=0 and county_id<99 order by county_id asc";
//$query = "SELECT distinct(cty) FROM `stations` where cty>=$c and cty<$cc order by cty asc";
//PZ:2269 Kada se registrirate kao korisnik Osijek, Osijek1234,Osijek1234 u DropDown meniju treba izbaciti Hrvatska

			$query = "SELECT distinct(cty) FROM `stations` where cty>$c and cty<$cc order by cty asc";
 if($lgn=='Xps' or $lgn=='A') $query = "SELECT distinct(cty) FROM `stations`  order by cty asc";
$res = mysqli_query($sql_connect,$query);
$loop=$c;

 include "ArrowLRd.php"; 

?>

 

<td align="center">


<form name="form1" method="GET" action="<?php  echo $INDEX.'&gim=0&strm='.$strm;?> <?php   if($cmd==8) echo '&cmd=8';else echo'&cmd=1';?>">
<?php   include "FormInput.php"; ?>
<//input type="hidden" name="cmd" value="1">
<?php   //if($cmd!=8) echo '<input type="hidden" name="cmd" value="1">';?>

<?php  if($StrMsw>0  || $cc-$c>2)		{?>


<?php  if($cty==-7) {?>  <META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php  echo $INDEX;?>&cmd=1&cty=<?php  echo $quser[cty]?>">
<?php  }?>
<?php  if($cty==-8) {?>  <META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php  echo $INDEX;?>&cmd=8&cty=<?php  echo $quser[cty]?>">
<?php  }}
if($cc-$c>2)		{?>
    <span width="8" valign=middle  onClick="LeftM()" ><img src="../kepek/buttons/aL.png" width=8 height=11 ></span>
	<?php  }?>
	 <span>   
		 <select name="cty" class="smallgreyBold" onChange="<?php  //$cmd=1;?>;document.form1.submit()" >

<?php  
$querc = "SELECT distinct(cty),county FROM `users` where cty=$cty";
$rec = mysqli_query($sql_connect,$querc);
$roc = mysqli_fetch_array($rec, MYSQLI_ASSOC);

if($StrMsw>0 || $cc-$c>2)		{

$vi="<<";
$fe=">>";
if($cmd==8) print(" <option value=-7> $vi $vissza </option>"); ELSE  {print(" <option value=-8> $fe $fel </option>"); /*$cmd=1;*/ }
}
print(" <option value='$cty' selected>- $roc[county] -</option>");

//if($StrMsw>0)		{
	while ($rows = mysqli_fetch_array($res, MYSQLI_ASSOC))
{
$queru = "SELECT distinct(cty),county FROM `users` where cty=$rows[cty]";
$reu = mysqli_query($sql_connect,$queru);
$rou = mysqli_fetch_array($reu, MYSQLI_ASSOC);
                      	print("<option value='$rows[cty]' > $rou[county]</option>");
}

//		}
                                               mysqli_close ($sql_connect);
?>
		    </select>

<?php  if($cc-$c>2)		{?>
<span width="8" valign=middle onClick="RightM()" ><img src="../kepek/buttons/aR.png" width=8 height=11 > </span>
<?php  }?>


<?php  /*if($StrMsw>0 )		{?>

<br>
<?php  
if ($cmd==1 or $cmd==8){// echo $cmd.'/'.$cty.'-'.$quser[cty]; ?>
	   <span valign=middle  onClick="LeftG()"  onDblClick="LeftG()"  > 
	   <img src="../kepek/buttons/aL.png" width=16 height=11 alt="SUBMIT!" title="SUBMIT!" 	onmouseover="this.style.background='red'" onmouseout="this.style.background=''" > </span>
<span valign=middle>
 <select name="add" class="smallgreyBold" onChange="document.form1.submit()" >
<?php  
  			switch($add)
  			{
   				case 60: 	$ad=$aadi;		break;
  				case 600:	$ad=$aadt;		break;
  				case 3600:	$ad=$aadh;       	break;
  				case 21600:	$ad=$aads;		break;
  				case 86400:	$ad=$aadn;		break;
   				case 604800:	$ad=$aadw;		break;
   				case 2632320:	$ad=$aadm;		break;
  				case 7896960:	$ad=$aadq;		break;
  				case 31579200:	$ad=$aady;		break;
			}
  			 
?>
<option value='<?php   echo $add;?>' selected><?php   echo $ad.' '.$elõre_visszaléptetés;?></option>
<option value="60"       ><?php   echo $vadi;?></option>
<option value="600"      ><?php   echo $vadt;?></option>
<option value="3600"     ><?php   echo $vadh;?></option>
<option value="21600"    ><?php   echo $vads;?></option>
<option value="86400"    ><?php   echo $vadn;?></option>
<option value="604800"   ><?php   echo $vadw;?></option>
<option value="2632320"  ><?php   echo $vadm;?></option>
<option value="7896960"  ><?php   echo $vadq;?></option>
<option value="31579200" ><?php   echo $vady;?></option>
</select>
</span>
	   <span valign=middle onClick="RightG()" onDblClick="RightG()" >
	   <img src="../kepek/buttons/aR.png" width=16 height=11 alt="SUBMIT!" title="SUBMIT!" 	onmouseover="this.style.background='red'" onmouseout="this.style.background=''" > </span>

<?php  } else {?>
<span valign=middle>
 <select name="add" class="smallgreyBold" onChange="document.form1.submit()" >
<?php  
  			switch($add)
  			{
  				case 60: 	$ad=$aadi;		break;
  				case 600:	$ad=$aadt;		break;
  				case 3600:	$ad=$aadh;       	break;
  				case 21600:	$ad=$aads;		break;
  				case 86400:	$ad=$aadn;		break;
   				case 604800:	$ad=$aadw;		break;
   				case 2632320:	$ad=$aadm;		break;
  				case 7896960:	$ad=$aadq;		break;
  				case 31579200:	$ad=$aady;		break;
			}
  			 
?>
<option value='<?php   echo $add;?>' selected><?php   echo $ad.' '.$átlagértékek;?></option>
<option value="60"       ><?php   echo $vadi;?></option>
<option value="600"      ><?php   echo $vadt;?></option>
<option value="3600"     ><?php   echo $vadh;?></option>
<option value="21600"    ><?php   echo $vads;?></option>
<option value="86400"    ><?php   echo $vadn;?></option>
<option value="604800"   ><?php   echo $vadw;?></option>
<option value="2632320"  ><?php   echo $vadm;?></option>
<option value="7896960"  ><?php   echo $vadq;?></option>
<option value="31579200" ><?php   echo $vady;?></option>
</select>
</span>
<?php  }?>


<?php  }*/?>
</form>
    </td>


    <!-- A HARMADIK BLOKKBAN CÉGLINKEK VANNAK:  bgcolor="#00CC00"-->
    <td width="40%" height="5" align="right" <?php  echo $bgcolor;?> class="smallgreyBold">
    
    <table width=96% align=right summary="">
    <tr>

<?php  if($StrMsw>0)
			{?>
    <td width=20% valign=middle> <a href='http://boreas.hu/index.php?src=news' target="_blank" ><img src="../kepek/arrow.gif" border=0 alt="">Boreas</a> </td>
    <td width=20% valign=middle>
<a href='http://eurmet.uw.hu/' target="_blank" ><img src="../kepek/arrow.gif" border=0 alt="">EurMET</a>
 </td>
    <!--td width=25% valign=middle> <a href="index.php?L=<?php   echo $L;?>&cmd=5" target="_blank"><img src="../kepek/arrow.gif" border=0 alt=""><?php  echo $Riasztás ;?></a> </td-->
  
<?php  }?> 

<?php   if($Lsw>0) { ?>

    </tr>
    </table summary="">
    </td>
    
</tr> <!-- FELSO KERETTÁBLA MÁSODIK SOR vége -->

</table> <!-- FELSO KERETTÁBLA bezárása -->



<table>
 <tr>



  <td width="20%" valign=top><table><tr><td>
<?php  }?>
	<script>
	function plusOne() {
//	If using an input element value...
	var inputEl = document.getElementById('inputEl');
	inputEl.value = parseInt(inputEl.value) + 1;
	}
	var stop = setInterval("plusOne()",1000);
	window.onload = plusOne;
	</script>

<script type="text/javascript">
function refresh(){
var timestamp = parseInt(new Date()/1000); // current time as number
//alert(timestamp);
//window.parent.EMhu.location = INDEX+"&ido2="+timestamp;
<?php  if($KIB<1) { ?>window.parent.EMhu.location = INDEX+"&ido2="+timestamp;<?php  }
else {include "mid_csHst.php";?> window.parent.EMhu.location = INDEX+"&ido2=<?php  echo $time1Y;?>";
<?php   }
?>

//kiakaszt:  document.write(timestamp)
}
var timestamp = parseInt(new Date()/1000); // current time as number
//alert(timestamp);
//document.write(timestamp);
//document.write(parseInt(new Date()/1000));
</script>

<?php  echo ""?>

<?php  // if($KIB<1) {$id2=77;}
//else {include "mid_csHst.php"; $id2=$time1Y;}
?>

<Script Language="JavaScript">
function getDouble (number){
	var doubl = number+number;
	return doubl;
}

var num = 4;
var doub = getDouble(num);
//ok:  document.write(doub);
//ok: document.write(getDouble(3));
  Salary = 12.55;
//ok:  document.write(Salary);
</Script>

  <button type="button" onclick="refresh()" class="smallgreyBold" border=3 ><?php  echo $Oldalfrissítés;?>
<input value="0" id="inputEl" size="1" readonly="readonly" onclick='refresh()' /></button>
<!-- <a href="<?php   echo $INDEX.'&ido2='.$id2;?>&aa=1" target="_self">sec:<input value="0" id="inputEl" size="1" readonly="readonly" onclick='notEmpty()' /><?php  echo $Oldalfrissítés;?></a>
 <a href="<?php   echo $INDEX.'&ido2='.$id2;?>&aa=1" target="_self"><img src="../kepek/arrow.gif" border=0 alt="" ><?php  echo $Oldalfrissítés;?></a> -->
<?php   if($Lsw==0) { ?>

</td></tr>


    </tr>
    </table summary="">
    </td>
    
</tr> <!-- FELSO KERETTÁBLA MÁSODIK SOR vége -->

</table> <!-- FELSO KERETTÁBLA bezárása -->

<?php  }?>


<tr><td>
<?php   if($Lsw>0) { include("qTm_swi.php"); //echo "BPW2= ".$BPW."....";
}?></td></tr></table></td>


<td width="99%">
<!-- ALSÓ KERETTÁBLA:  -->

<table width="780" border="0" align="center" cellspacing="0" cellpadding="0" summary="">
        <!-- ELSO FOSOR NYITÓKERET -->
        <tr>
          <td width="10" height="10"><img src="../kepek/corner_lt.gif" alt="" width="10" height="10"></td>
          <td width="760" height="10" bgcolor="#DEDDC0" class="smallgrey"> </td>
          <td width="10" height="10"><img src="../kepek/corner_rt.gif"  alt="" width="10" height="10"></td>
        </tr>
        <!-- MÁSODIK FOSOR: -->
        <tr bgcolor="#DEDDC0">

        <!-- BAL SZEGÉLYBLOKK: -->
          <td width="10">&nbsp;</td>

          <!-- BELSO BLOKK: -->
          <td width="770" height="40" align="center" valign="top" bgcolor="#DEDDC0">
<a name="topTT"></a>

      <?php  

 
if ($cmd==9)
{	
//	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=utmet.php">';
	//header("Location: http://31.220.111.193/42es");
	//	header("Location: utmet.php");

	echo '<META HTTP-EQUIV=Refresh CONTENT="110; URL='.$url.'">';

//	$header;
}

      	if (($cty=='-') || ($cty==''))
  	  	{
  	  		include "mid_no.php";  	  	
 	  		include "log.php";  	  	
  		}
 		else

  		{
  			switch($cmd)
  			{
  				case 1:
                                 		include "mid_cs.php";
  				break;
   				case 11:
                                 		include "mid_cs11.php";
  				break;
  				case 2:
					include "mid_at.php";
    				break;
  				case 3:	  			
                                    include "mid_as.php";
  				break;	
  				case 4:	  			
  				    include "mid_gf.php";
  				break;	
  				case 5:	  			
  				    include "mid_al.php";
				break;
  				case 555:	  			
  				    include "mid_al.php";
				break;
				case 888:			
					include "alert.php";
				break;

  				case 6:	  			
                                    include "mid_VJT.php";
  				break;
				case 7;
  include("mid_fej.php"); 
 // include("mid_dat.php"); 
//				include "station_error_list.php";
				include "mid_er.php";		
				break;
				case 8:	
					$gim=0;			
					include "mid_GIS.php";
				break;
 				case 88:	  			
					$gim=-1;			
					include "mid_GIS.php";
				break;
  				case 55:
  					include "station_error_list.php";
  				break;
				case 66:
  include("mid_fej.php"); 
  include("mid_dat.php"); 
					include "admin_error_report.php";
   				break;
  				case 77:
					include "stationAll.php";
   				break;
   				
				case 10:
					$stk='';
  					include "megnezem.php";
  				break;

				case 20: 
  					include "servZrk.php";	
				break;

 				case 21: 
  					include "servAll.php";	
				break;

  				case 22: 			
					include "servLst.php";
  				break;	    						  			
  				case 23: 			
  					include "Rum.php";  	  		
  				break;	    						  			
				case 24: 
//		echo'$regg: '.$regg.' $cmd: '.$cmd;			
  				if($strm=='root' && ($regg=='' || $regg==0))	{$ns=0; include "servAdm.php";} else include "Rus.php";  	  		
  				break;	    						  			
  				case 25: 			
  					include "Rut.php";  	  		
				break;
  				case 26: 			
  				if($strm=='root' && ($regg=='' || $regg==0))	include "servAdmTxt.php"; else include "Rus.php";  	  		
  				break;	    						  			

  				default:
  				break;
  			}
  		}
      ?>

     
	</td>     <!-- BELSO BLOKK vége -->
	
	 <!-- JOBB SZEGÉLYBLOKK: -->
	  <td width="10"> &nbsp; </td>

  <?php  // if($Lsw>0)  include("Lng_swi.php"); ?>

<!-- ALSÓ KERETTÁBLA ZÁRÓ FOSOR: -->
        <tr>
          <td width="10" height="10" align="right"><img src="../kepek/corner_lb.gif" alt=""  width="10" height="10"></td>
	  <td width="760" height="10" bgcolor="#DEDDC0" class="smallgrey"> </td>


          <td width="10" height="10" align="left"><img src="../kepek/corner_rb.gif"  alt="" width="10" height="10"></td>

  
	</tr>   <!-- ALSÓ KERETTÁBLA ZÁRÓ FOSOR bezárása -->
      </table>     <!-- ALSÓ KERETTÁBLA vége -->

</td>

<td width="1%"> <?php   if($Lsw>2)  include("Lng_swi.php");?>
  </td></tr> </table> 



<?php  if($StrMsw>0)	 include("scroll.php"); ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000" summary="">
  <tr>
   <td align=center>
	<img src="../kepek/unitis/fej_print3_01.gif" alt="">
	<img src="../kepek/unitis/fej_print3_02.gif" alt="">
	<img src="../kepek/unitis/fej_print3_03.gif" alt="">
	<img src="../kepek/unitis/fej_print3_04.gif" alt="">
	<img src="../kepek/unitis/fej_print3_05.gif" alt="">
	<img src="../kepek/unitis/fej_print3_06.gif" alt="">
	<a name="lent"  href="http://eurmet.hu"><font size="1">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></a>

   </td>
     <td  align=center>


</table>





			<script type="text/javascript" src="js/wz_tooltip.js"></script>

  <!--
<?php   if($strm=='root'){?>
		       <META HTTP-EQUIV=Refresh CONTENT="600; URL=<?php  echo $INDEX;?>">
<?php  } if($lgn!='Xps'){?>
		       <META HTTP-EQUIV=Refresh CONTENT="600; URL=<?php  echo $INDEX;?>">
<?php  }?>


META HTTP-EQUIV=Refresh CONTENT="100; URL=<?php echo $hE; ?>@@/xps_stp.php"         width:970px;
  -->

<?php  if($lgn=='Xpss')		{ echo "..ccc...".$test.'  '.$lgn; //bénázik ha az xps_last alá kerül!! ?>
     Bepillantás a  <i>  S z a k é r t &#337;  i  R e n d s z e r  </i>   m&#369;ködésébe:
   <IFRAME name="xps_step" src="xps_step.php#topTT" width="100%" align="center" style="position:relative;  height:40px; top:3px; left:0px">   </IFRAME>
<?php  }?>

 <?php    echo $Raadas ;?> <?php  if($lgn=='Xps') echo "...".$test.'  '.$lgn;?>

<?php   include("mid_ltf.php"); ?>

<IFRAME name="xps_last" src="xps_last.php<?php   echo $sess;?>" width="100%" align="center" style="position:relative;  height:220px; top:3px; left:0px"> </IFRAME>

 <?php   if($lgn=='Xps' || $strm=='root')  { echo 'Unfunctional stations :  ' ;?><?php echo $hE; ?>

<IFRAME name="xps_last_bad" src="xps_last_bad.php<?php   echo $sess;?>" width="100%" align="center" style="position:relative;  height:220px; top:3px; left:0px"> </IFRAME>
<?php  }?>

<!--
<embed src="murmur.mid" autostart="true" loop="false"> <BGSOUND src="murmur.mid" loop="-1">
-->


</body>
</html>



