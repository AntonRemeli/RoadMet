<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>

  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <title>Alarm</title>


  <meta content="Anton Remeli" name="author">

</head>
<body>

<?php  

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//echo "  alrid:  ".
$alrid = $_GET['rid'];

//  id  user_name  name  query  description  phone  text  station_id  last_alert  Mtime  Mdate  
  
$queryal = "SELECT * FROM alert where id=$alrid";
$resal = mysqli_query($sql_connect,$queryal);
$rowsal = mysqli_fetch_array($resal, MYSQLI_ASSOC);

//echo "   user:  ".$rowsal[user_name];

//sid   st_id  st_Ort  StrNo  Lng  Xeov  Lat  Yeov  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  

$queryst = "SELECT * FROM stations  where st_id=$rowsal[station_id]";
$rest = mysqli_query($sql_connect,$queryst);
$rowst = mysqli_fetch_array($rest, MYSQLI_ASSOC);

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
   
$querus = "SELECT * FROM users  where user='$rowsal[user_name]'";
$reus = mysqli_query($sql_connect,$querus);
$rous = mysqli_fetch_array($reus, MYSQLI_ASSOC);

// echo "   user:  ".$rous[user]."  id: ".$rous[id];
?>

<big><b>
<?php  print($rowsal[station_id]);?>  

<?php  print($rowst[Ort]);?> 
</b></big>
<?php  print($rowst[Typ]);?> állomás<br>

<?php  print($rowst[StrNo]);?> kmsz, 

klímaterület: <?php  print($rowst[KlimaZ]);?>  <br><br>


<big><b><?php  print($rowsal[id]);?></b></big> számú <big><big><b>Riaszt&aacute;s!!!  <br>
<?php  print($rowsal[text]);?>  </b></big></big><br>

<?php  print($rowsal[description]);?> <br>

 <br>

Risztás nyugtázására jogosult: <big><b> <?php  print($rous[cDept]);?> </b></big> <br>

<?php  print($rowsal[name]);?> :  <?php  print($rowsal[query]);?> <br>


telefonszám: <?php  print($rowsal[phone]);?> <br>



nyugtázott riasztások száma:  <big><b><?php  print($rowsal[last_alert]);?></b></big>   <br>

<?php  $last =date("Y.m.d",$rowsal[Mtime]+22)." ".date("H:i",(round(($rowsal[Mtime])/60)*60));?>




utolsó nyugtázott riasztás:<big><b> <?php  print($last);?></b></big> <br> <br>

<?php  print($surf_condition[$stNo]);?> 


<?php   

if (isset($_POST['nyugta']))
{
	$nowtime=time();

$today =date("Y.m.d",$nowtime+22)." ".date("H:i",(round(($nowtime)/60)*60));

	$usnm = $_POST['username'];
	$usrp = $_POST['passwd'];
	$usrn = $_POST['usrn'];
	$grid = $_POST['grid'];
	$snid = $_POST['snid'];
	$last = $_POST['last']+1;



if(($_POST['username']==$rous[user]) && ($_POST['passwd']==$rous[pass]))		
{
//  id  user_name  name  query  description  phone  text  station_id  last_alert  Mtime  Mdate  
	$query = "UPDATE alert SET Mtime=$nowtime, Mdate='$today', last_alert=$last  WHERE id=$grid";
	$res = mysqli_query($sql_connect,$query);
//	$querny = "INSERT INTO nyugta SET alid='".$grid."',  stid='".$snid."', who='".$usrn."', when='".$nowtime."' ";
//	$querny = "INSERT INTO nyugta SET alid=11,  stid=222, who='wwww', when=5555 ";
//	$querny = "INSERT INTO nyugta SET  who='wwww', stid=111111, alid=5555, altime=999 ";
//	$querny = "INSERT INTO nyugta SET stid=111111"; 
//  nyid  alid  stid  user  cDept  who  altime  aldate  megj  
// 	$querny = "INSERT INTO nyugta SET alid=$grid,  stid=$snid, user='$usnm', cDept=$rous[cDept], who='$usrn', altime=$nowtime, aldate='$today' ";
 	$querny = "INSERT INTO nyugta SET alid=$grid,  stid=$snid, user='$usnm', cDept='$rous[cDept]', who='$usrn', altime=$nowtime, aldate='$today' ";

	$rens = mysqli_query($sql_connect,$querny);


	//	header("Location: Riaszt.php?rid=$grid");
		header("Location: OK.php");
}
else header("Location: nOK.php");
}	

 mysqli_close ($sql_connect);	
?>
  <form name="nyugtat" method="post" action="Riaszt.php?rid=<?php  print($rowsal[id]);?>">


<?php   include "FormInput.php";?>


     <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
		<td width="100" align="center" valign="middle" > <span class="titlegreyBoldCopy">
<img src="../kepek/login.gif" width="126" height="190"> </span> </td>
                  
		<td align="center" valign="middle" >

<table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tr valign="middle"> 
                      <td width="43%" align="right" class="smallgreyBold"> Felhasználó:</td>
                      <td width="57%" align="left">
                          <input name="username" type="text"  class="smallgreyBold" size="15" maxlength="15">
                        </td>
                    </tr>
                    <tr valign="middle"> 
                      <td width="43%" align="right" class="smallgreyBold">Jelszó:</td>
                      <td width="57%" align="left"><input name="passwd" type="password" class="smallgreyBold" size="15" maxlength="15"></td>
		    </tr>
<tr>
      <td width="5%" align="right">Ügyeletes neve:</td>
      <td width="5%"><input name="usrn" type="text" size="15" id="usrid" ></td>
    </tr>

                      <tr align="center" valign="middle"> 
			<td colspan="2"><br>
			  <input name="Submit" type="submit" class="smallgrey" value="Riasztás nyugtázása"></td>

		    </tr>


                  </table></td></table>





 <input type="hidden" name="grid" value="<?php  print($rowsal[id]);?>">
<input type="hidden" name="snid" value="<?php  print($rowsal[station_id]);?>">
<input type="hidden" name="last" value="<?php  print($rowsal[last_alert]);?>">


  <input type="hidden" name="nyugta" value="1">


</form>



<br>
<embed src="wmpaud9.mp3" autostart="true" loop="true">
<BGSOUND src="wmpaud9.mp3" loop="-11">
</BGSOUND>
</body>
</html>
