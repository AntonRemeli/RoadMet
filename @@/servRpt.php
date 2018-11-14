<?php   

$MOD="servRpt.php";
include "LM.php";
include "log.php";

$svid=$_GET['svid'];
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  

$queryW = "SELECT * FROM users   where user='$lgn' ";
$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);

//echo "pw2: ".$rowW[pass];



mysqli_close ($sql_connect);


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd  
$queryS = "SELECT * FROM servs where svid=$svid ";
$resS = mysqli_query($sql_connect,$queryS);
$rowS = mysqli_fetch_array($resS, MYSQLI_ASSOC);
 include "servq.php";

//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

$queryX = "SELECT * FROM stations  where st_id=$qstno && GSMno>''";
$resX = mysqli_query($sql_connect,$queryX);
$rowX = mysqli_fetch_array($resX, MYSQLI_ASSOC);

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  

$queryU = "SELECT * FROM users   where strm=$rowX[StrM] ";
$resU = mysqli_query($sql_connect,$queryU);
$rowU = mysqli_fetch_array($resU, MYSQLI_ASSOC);

//  rId  rDept  rBusinessStreet  rBusinessCity  rBusinessPostalCode  rPhn  rFax  rEmail  rFom  rOv  

$queryR = "SELECT * FROM usRegs   where rId=$rowU[reg] ";
$resR = mysqli_query($sql_connect,$queryR);
$rowR = mysqli_fetch_array($resR, MYSQLI_ASSOC);


mysqli_close ($sql_connect);

//echo 'ccc '.$rowW[c].'   '.$lgn.'   '.$rowX[StrM] ;

$c = $rowW[c];

if($strm=='root') {

if (isset($_GET['serv0']))
{

	$svCd = $_GET['svCd'];	


 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	$querySup = "UPDATE servs SET    svCd='$svCd' WHERE svid=$svid";


$resSup = mysqli_query($sql_connect,$querySup);

	header("Location: servRpt.php$sess&svid=$svid");
	
	mysqli_close ($sql_connect);
 
} 


if (isset($_GET['serv1']))
{
	// Lng  Xeov  Lat  Yeov 
	$sid = $_GET['sid'];	
	$st_Ort = $_GET['st_Ort'];
	$StrNo = $_GET['StrNo'];
	$Lng = $_GET['Lng'];
	$Xeov = $_GET['Xeov'];
	$Lat = $_GET['Lat'];
	$Yeov = $_GET['Yeov'];
	$StrM = $_GET['StrM'];
	if($_GET['StrM']<10*$c) $StrM = $rowX[StrM]; 
	$KlimaZ = $_GET['KlimaZ'];
 
	$reg = $_GET['reg'];
	if($_GET['reg']<$c) $reg = $rowU[reg];	
	$cDept = $_GET['cDept'];
	$cBusinessPostalCode = $_GET['cBusinessPostalCode'];
	$cBusinessStreet = $_GET['cBusinessStreet'];
	$cBusinessCity = $_GET['cBusinessCity'];
	$cPhn = $_GET['cPhn'];
	$cFax = $_GET['cFax'];

	$rDept = $_GET['rDept'];
	$rBusinessPostalCode = $_GET['rBusinessPostalCode'];
	$rBusinessStreet = $_GET['rBusinessStreet'];
	$rBusinessCity = $_GET['rBusinessCity'];
	$rPhn = $_GET['rPhn'];
	$rFax = $_GET['rFax'];


 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }



//  sid  st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

$queryXup  = mysqli_query($sql_connect,"UPDATE stations SET   st_Ort='$st_Ort', StrM='$StrM', StrNo='$StrNo' WHERE sid=$sid ");
$queryXup2 = mysqli_query($sql_connect,"UPDATE stations SET   Lng='$Lng', Xeov='$Xeov', Lat='$Lat', Yeov='$Yeov', KlimaZ='$KlimaZ' WHERE sid=$sid ");


//$queryUup = mysqli_query($sql_connect, "UPDATE users SET  cPhn='$cPhn', cFax='$cFax'  WHERE strm=$rowX[StrM]");
$queryUup = mysqli_query($sql_connect, "UPDATE users SET  reg='$reg', cDept='$cDept', cBusinessPostalCode='$cBusinessPostalCode', cBusinessStreet='$cBusinessStreet', cBusinessCity='$cBusinessCity', cPhn='$cPhn', cFax='$cFax'  WHERE strm=$rowX[StrM]");
$queryRup = mysqli_query($sql_connect, "UPDATE usRegs SET  rDept='$rDept', rBusinessPostalCode='$rBusinessPostalCode', rBusinessStreet='$rBusinessStreet', rBusinessCity='$rBusinessCity', rPhn='$rPhn', rFax='$rFax'  WHERE  rId=$rowU[reg] ");



	header("Location: servRpt.php$sess&svid=$svid");
	
	mysqli_close ($sql_connect);
 
} 


if (isset($_GET['serv2']))
{
	$sTyp = $_GET['sTyp'];
	$stat = $_GET['stat'];
	$kada = $_GET['kada'];

	$stxt = $_GET['stxt'];	
	$todo = $_GET['todo'];	
	$todu = $_GET['todu'];	
//if($todo=='') $todo='Tervben van az állomás javítása és beüzemelése helyszíni kalibrációval. ÚTELLENÕR jelenlétét kérjük,';	
//if($todu=='') $todu=' aki a forgalomterelést biztosítja az útszonda kalibrációjához, tervezett idõpont:';

	$done = $_GET['done'];	
	$donk = $_GET['donk'];	
	$diag = $_GET['diag'];	
	

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	$querySup = "UPDATE servs SET    stxt='$stxt', todo='$todo', todu='$todu', done='$done', donk='$donk',  diag='$diag', stat='$stat', sTyp='$sTyp', kada='$kada' WHERE svid=$svid";

//$querySup = mysqli_query($sql_connect,"UPDATE servs SET  stat='$qstat', sTyp='$sTyp', kada='$kada' WHERE svid=$svid");

$resSup = mysqli_query($sql_connect,$querySup);
	//$querySup = "UPDATE servs SET   diag='$diag' WHERE svid=$svid";
//$resSup = mysqli_query($sql_connect,$querySup);

	header("Location: servRpt.php$sess&svid=$svid");
	
	mysqli_close ($sql_connect);
 
} 


if (isset($_GET['serv3']))
{
	$sid = $_GET['sid'];	
	$Typ = $_GET['Typ'];	
	$GSMno = $_GET['GSMno'];	
	$GPRSno = $_GET['GPRSno'];	
	$BCUno = $_GET['BCUno'];	
	$FBSno = $_GET['FBSno'];	
	$HGTno = $_GET['HGTno'];	
	$Raino = $_GET['Raino'];	
	$megj = $_GET['megj'];	


	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$queryXup = "UPDATE stations SET    Typ='$Typ',  GSMno='$GSMno', GPRSno='$GPRSno', BCUno='$BCUno', FBSno='$FBSno', HGTno='$HGTno', Raino='$Raino', megj='$megj' WHERE sid=$sid ";
$resXup = mysqli_query($sql_connect,$queryXup);


	header("Location: servRpt.php$sess&svid=$svid");
	
	mysqli_close ($sql_connect);
 
} 
}

?>

 <html>
<head>
<TITLE><?php  echo $sTdsc[$qsTyp];?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="Title" CONTENT="SERVICE REPORT">
<META NAME="Author" CONTENT="Anton Remeli">
<META NAME="Copyright" CONTENT="EurMet2007">
<META NAME="Revisit" CONTENT="After 6 days">

<link href="style" rel="stylesheet" type="text/css">





<form name="service0" method="get" action="servRpt.php<?php  echo $sess;?>&svid=<?php  echo $svid;?>">

<table width="750" height="32" border="0" cellpadding="0" cellspacing="0" >

     <tr >
     <td  style="font-size: 230%" >
     <b><i>EurMet <span style="font-family: Verdana; font-size: 35%"> <?php  echo $szerviz?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img style="border: 1px solid ; width: 120px; height: 60px;" alt="" src="<?php echo $hE; ?>/Pic/png/EurMet2g.png">
</td>    </tr>
<tr><td  style="font-size: 130%">
<?php  echo $sTdscA;
if($qstat*$qstat==1) echo $Felkérésbe; 
else echo $sTdsc[$qsTyp];
echo '<br>'; ?><input name="svCd" type="text" size="13" id="svCd" style="font-style:bold;" value="<?php   echo $qsvCd;?>"> <?php  if($qsvCd>''){ echo $sTdscB;}?>
<?php   include "FormInput.php";?>
        <input name="sid" type="hidden"  value="<?php  echo $rowX[sid];?>">
    <input name="svid" type="hidden"  value="<?php  echo $qsvid;?>">
   <input type="hidden" name="serv0" value="1">

</td></tr>
</table>
</form>

<form name="service1" method="get" action="servRpt.php<?php  echo $sess;?>&svid=<?php  echo $svid;?>">


<table style="text-align: left; width: 700px; height: 32px;"  border="0" cellpadding="0" cellspacing="0">

  <tbody>

    <tr ><small>
<?php   echo $helyszínn?>
<?php   echo $útkmsz?>
<?php   echo $földrajzi?>
<?php   echo $XY?>
<?php   echo $klímazóna?></small>
      <td><input name="StrM" type="text" size="1" id="StrM" value="<?php   echo $rowX[StrM];?>">&nbsp;&nbsp;</td>
 <td width="5%" style="font-family: Verdana; font-size: 120%">
  <input  type="submit" name="Submit1" value="<?php   echo $qstno ?>">&nbsp;&nbsp;</td>

       <td><input name="st_Ort" type="text" size="21" id="st_Ort" value="<?php   echo $rowX[st_Ort];?>">&nbsp;&nbsp;</td>
       <td><input name="StrNo" type="text" size="15" id="StrNo" value="<?php   echo $rowX[StrNo];?>">&nbsp;&nbsp;</td>
      <td><input name="Lng" type="text" size="6" id="Lng" value="<?php   echo $rowX[Lng];?>">&nbsp;&nbsp;</td>
      <td><input name="Lat" type="text" size="6" id="Lat" value="<?php   echo $rowX[Lat];?>">&nbsp;&nbsp;</td>
      <td><input name="Xeov" type="text" size="4" id="Xeov" value="<?php   echo $rowX[Xeov];?>">&nbsp;&nbsp;</td>
      <td><input name="Yeov" type="text" size="4" id="Yeov" value="<?php   echo $rowX[Yeov];?>">&nbsp;&nbsp;</td>
      <td><input name="KlimaZ" type="text" size="17" id="KlimaZ" value="<?php   echo $rowX[KlimaZ];?>">&nbsp;&nbsp;</td>
    </tr>
 </table>
<table  border="0" cellpadding="0" cellspacing="0"><tr ><small>
<?php  echo $területileg?><a href='userUpd.php?lgn=<?php  echo $lgn;?>&pwd=<?php  echo $pwd;?>' target="blank" >
 / </a><i> <?php  echo $regionális?></i>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <?php  echo $cím?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 telefon, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fax:</small>
                 

      
       <td><input name="reg" type="text" size="1" id="reg" value="<?php   echo $rowU[reg];?>">
<input name="cDept" type="text" size="21" id="cDept" value="<?php   echo $rowU[cDept];?>">&nbsp;</td>
       <td><input name="cBusinessPostalCode" type="text" size="2"  id="cBusinessPostalCode" value="<?php   echo $rowU[cBusinessPostalCode];?>"></td>
       <td><input name="cBusinessCity" type="text" size="19" id="cBusinessCity" value="<?php   echo $rowU[cBusinessCity];?>"></td>
       <td><input name="cBusinessStreet" type="text" size="21" id="cBusinessStreet" value="<?php   echo $rowU[cBusinessStreet];?>">&nbsp;</td>
       <td><input name="cPhn" type="text" size="13" id="cPhn" value="<?php   echo $rowU[cPhn];?>"></td>
       <td><input name="cFax" type="text" size="13" id="cFax" value="<?php   echo $rowU[cFax];?>"></td>
 
    </tr>
<tr >
       <td><input name="rDept" type="text" size="27" id="rDept" value="<?php   echo $rowR[rDept];?>">&nbsp;</td>
       <td><input name="rBusinessPostalCode" type="text" size="2"  id="rBusinessPostalCode" value="<?php   echo $rowR[rBusinessPostalCode];?>"></td>
       <td><input name="rBusinessCity" type="text" size="19" id="rBusinessCity" value="<?php   echo $rowR[rBusinessCity];?>"></td>
       <td><input name="rBusinessStreet" type="text" size="21" id="rBusinessStreet" value="<?php   echo $rowR[rBusinessStreet];?>">&nbsp;</td>
       <td><input name="rPhn" type="text" size="13" id="rPhn" value="<?php   echo $rowR[rPhn];?>"></td>
       <td><input name="rFax" type="text" size="13" id="rFax" value="<?php   echo $rowR[rFax];?>"></td>
 
    </tr>
  </tbody>
</table>

<?php   if ($qsTyp>2){ include "sess.php";?>

<img src='gf2kx.php<?php   print("$sess");?>&ido1=<?php  echo $qkad1;?>&ido2=<?php  echo $qkad2;?>' width=650 height=370 > <br>

<?php  echo $kalibrálási[$qsTyp];?>  <br> <small><small>
<?php  echo $megfelelõ[$qsTyp];?> </small></small>

<?php  }?>
   
<?php   include "FormInput.php";?>
      <input name="sid" type="hidden"  value="<?php  echo $rowX[sid];?>">
   <input name="svid" type="hidden"  value="<?php  echo $qsvid;?>">
  <input type="hidden" name="serv1" value="1">

</form>
<form name="service2" method="get" action="servRpt.php?svid=<?php  echo $svid;?>&lgn=<?php  echo $lgn;?>&pwd=<?php   echo $pwd;?>">

    <input  type="submit" name="Submit2" value="<?php  if($qstat*$qstat==1)echo $Felkérés; else echo $Hibaleírás[$qsTyp];?>">
<textarea name="stxt" type="text"  id="stxt" cols="87"  style=" font-size: 85%"><?php   if($qstxt=='') echo $qstxt0[$qsTyp]; else echo $qstxt;?></textarea>
 <br>
   <textarea name="todo" type="text" cols="90" id="todo" style=" font-size: 85%"><?php   if($qtodo=='') echo $qtodo0[$qsTyp]; else echo $qtodo;?>"  </textarea>
      	  <input name="sTyp" type="text" size="1" id="sTyp" value="<?php  echo $qsTyp;?>">
 	<input name="stat" type="text" size="1" id="stat" value="<?php  echo $qstat;?>">

<?php   if ($qsTyp==3){?><br><small><small>
munkajegyzet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br></small></small>

      <textarea name="done" type="text"  id="done" cols="140" rows="2" style=" font-size: 66%"><?php  echo $qdone;?></textarea><br>
   <input  type="submit" name="Submit2" value="<?php  echo $Zárójelentés?>:">

 <input name="diag" type="text" size="75" id="diag" value="<?php   echo $qdiag;?>">
<input name="todu" type="hidden"  value="<?php  echo $qtodu;?>">

<?php  }
if ($qsTyp==1){?>
<input name="done" type="hidden"  value="<?php  echo $qdone;?>">
<input name="donk" type="hidden"  value="<?php  echo $qdonk;?>">
<input name="diag" type="hidden"  value="<?php  echo $qdiag;?>">
   <input name="todu" type="text" size="99" id="todu" value="<?php   echo $qtodu;?>">  
<?php  }?>    
<input name="kada" type="text" size="14" id="kada" value="<?php  echo $qkada;?>"><br>


<?php   include "FormInput.php";?>
      <input name="svid" type="hidden"  value="<?php  echo $qsvid;?>">
  <input type="hidden" name="serv2" value="1">

</form>
<form name="service3" method="get" action="servRpt.php?svid=<?php  echo $svid;?>&lgn=<?php  echo $lgn;?>&pwd=<?php   echo $pwd;?>">

<table width="750" height="30" border="0" cellpadding="0" cellspacing="0" style="font-size: 50%">
<tr>
<td width="200" align="left"><textarea name="Typ" type="text"  id="Typ" cols="28" rows="3"><?php  echo $rowX[Typ];?></textarea></td>
<td width="550" >
	<?php  echo $hívószám?><input name="GSMno" type="text" size="15" id="GSMno" value="<?php   echo $rowX[GSMno];?>">
        <?php  echo $vezérlõ?><input name="BCUno" type="text" size="15" id="BCUno" value="<?php   echo $rowX[BCUno];?>">
        <?php  echo $hygrotemp?> <input name="HGTno" type="text" size="15" id="HGTno" value="<?php   echo $rowX[HGTno];?>"><br>

        <?php  echo $modem?><input name="GPRSno" type="text" size="15"  id="GPRSno" value="<?php   echo $rowX[GPRSno];?>">
        <?php  echo $útszonda?><input name="FBSno" type="text" size="15" id="FBSno" value="<?php   echo $rowX[FBSno];?>">
        <?php  echo $csapadékmérõ?><input name="Raino" type="text" size="15" id="Raino" value="<?php   echo $rowX[Raino];?>"><br>
 </td>
</tr>
</table>

      <input  type="submit" name="Submit3" value="<?php   echo $Állomásstátusz?>:">
 <input name="megj" type="text" size="91" id="megj" value="<?php   echo $rowS[done] //$rowX[megj];?>">


<table width="733" height="30" border="1" cellpadding="0" cellspacing="0" style="font-size: 90%" >   

<tr>
  <td> <?php  if($qstat*$qstat==1) echo $kezdeményezte; elseif($qstat<0) echo $kezdeményezte; else echo $tanúsítja[$qsTyp];?> &nbsp;&nbsp;&nbsp;
<img align="top" style="border: 0px solid ; width: 110px; height: 60px;" alt="" src="<?php echo $hE; ?>/Pic/png/ARsgb.png">
</td>

<?php   if ($qsTyp==4){?>
  <td width="400"> 
<?php    echo $végezte[$qsTyp];?><br>
&nbsp;&nbsp;&nbsp;&nbsp; <?php   echo $Aláírás?> <br>&nbsp;&nbsp;&nbsp;&nbsp; <?php   echo $Kelt?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<small><?php   echo $tstmp  ;?></small></td>
<?php  }?>

<?php   if ($qsTyp==3){?>
<?php   if($strm=='root') {?>
  <td width="400"> 
<?php   if($strm=='root') echo $végezte[$qsTyp]; 
else echo $nyugtázza;?><br>
&nbsp;&nbsp;&nbsp;&nbsp; <?php   echo $Aláírás?> <br>&nbsp;&nbsp;&nbsp;&nbsp; <?php   echo $Kelt?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<small><?php   echo $tstmp = date("Y.m.d",strtotime($rowS[kada]." ")) ;?></small></td>
<?php  }

if($lgn!='Xps') {?>
  <td width="350">&nbsp;&nbsp;<?php   echo $Aláírás?> <br>&nbsp;&nbsp; <?php   echo $Kelt?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;
<small><?php   echo $rowR[rDept];?></small></td>
<?php  }?>
<?php  }?>

</tr>
</table>

<table width="733" height="32" border="1" cellpadding="0" cellspacing="0" style="font-size: 90%" >

  <tr>
  
  <td style="font-size: 180%">&nbsp;&nbsp;EurMet Ltd.</td>
 <td>
&nbsp;&nbsp;H-2040 Budaörs <br>&nbsp;&nbsp;Szépkilátó u. 6.
 </td>
  <td>

 &nbsp;&nbsp;Phone: +36 23 500 600 <br> &nbsp;&nbsp;Fax :  &nbsp;&nbsp;   +36 23 500 601
</td>
  <td>
&nbsp;&nbsp;Mobil:   +36 209 770 600<br>
&nbsp;&nbsp;Email: eurmet@gmail.com

</td>
</tr></table>
<?php   include "FormInput.php";?>
        <input name="sid" type="hidden"  value="<?php  echo $rowX[sid];?>">
    <input name="svid" type="hidden"  value="<?php  echo $qsvid;?>">
   <input type="hidden" name="serv3" value="1">

</form>

</span>
          
 </body>
    </html>

