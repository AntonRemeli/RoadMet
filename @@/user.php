
<?php  
//echo '__'.'USER.PHP<br>';
 error_reporting(0);


//$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//$sql_connect=mysqli_connect('127.0.0.1', 'root', 'temrue');
//	$sqlret = mysqli_select_db('utmet',$sql_connect);
//3338.1  	-3  	ali ne radi Varazdin(138) i Varazdin(139)  	testirati razne korisnike  	Varazdin138, Varazdin139 rade, č ž š ne rade 	2010-12-01 20:00:00
//	$query = "SET CHARACTER SET latin2";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$query = "SET CHARACTER SET utf8";


//OK: echo "uuuuuuuuu: ".
$lgn=$_POST['username'];

if($StrMsw>1)	
{
echo " <br> bn: ".	$bn = $_GET['bn'];
echo " <br> bv: ".	$bv = $_GET['bv'];
	
echo " <br> uL: ".	$L = $_GET['L'];
echo " <br> ulgn: ".	$lgn = $_GET['lgn'];
echo " <br> upwd: ".	$pwd = $_GET['pwd'];
echo " <br> uusn: ".	$usn = $_GET['usn'];
}


$MOD="user.php";
include "LM.php";
//include "log.php";
 $test=$USER;
// Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
$queru = "SELECT * FROM users where user='$lgn'";
	$resu = mysqli_query($sql_connect,$queru);
	$rowsu = mysqli_fetch_array($resu, MYSQLI_ASSOC);
	$pass=$rowsu[pass];
	$cty=$rowsu[cty];
			$strm=$rowsu[strm];
	
		$bn = $_GET['bn'];
		$bv = $_GET['bv'];

include "sess.php";

	$nowtime=time();

//$today =date("Y.m.d",$nowtime+22)." ".date("H:i",(round(($nowtime)/60)*60));
$today =date("Y.m.d",$nowtime+22)." ".date("H:i:s",$nowtime);



//  uLid  strm user login pasd pasf pase cDept who usrIP Ltime Ldate 
	$querL = "SELECT * FROM usrLogs  where user='$lgn' and who='$usn' order by -uLid";
	$resL = mysqli_query($sql_connect,$querL);
	
	$num_rows = 0;
//echo '<br>num_rows--- '.	
	$num_rows = mysqli_num_rows( $resL );

	$rowL = mysqli_fetch_array($resL, MYSQLI_ASSOC);

//$pasf=11; 
$pasf=0; 
if($num_rows>0) $pasf=$rowL[pasf]; 
// sikertelen próbálkozás:::::::::::::::::::  pasf
if ($pwd == '' || $lgn == '' || $usn == '' ||  $pwd != $pass ) {$pasf=$rowL[pasf]+1; $pase=0;}

$pasd=0; 
if($num_rows>0) $pasd=$rowL[pasd]; 
if ($pwd == $pass && $lgn != '' && $usn != '' ) {$pasd=$rowL[pasd]+1; $pase=1;}
'sikeres belépés az ÚTMET rendszerbe';


$strm=$rowsu[strm];
$cDept=$rowsu[cDept];
$ip = $_SERVER['REMOTE_ADDR']; 


//	$querLog = "INSERT INTO usrLogs SET strm='$strm', user='$lgn', pasd=$pasd, pase=$pase, pasf=$pasf, cDept='$cDept', who='$usn', usrIP='$ip', Ltime=$nowtime, Ldate='$today' ";
	$querLog = "INSERT INTO usrLogs SET strm='$strm', user='$lgn', pasd=$pasd, pase=$pase, pasf=$pasf, cDept='$cDept', who='$usn', usrIP='$ip', Ltime=$nowtime, Ldate='$today' ";

	$reuLg = mysqli_query($sql_connect,$querLog);



        mysqli_close ($sql_connect);

?>
<?php // echo $INDEX; ?>


<!--
<META HTTP-EQUIV=Refresh CONTENT="0; URL='index.php?L=<?php  echo $L;?>&lgn=<?php  echo $lgn;?>&usn=<?php  echo $usn;?>&pwd=<?php  echo $pwd;?>&cty=<?php  echo $cty;?>'">
-->
<META HTTP-EQUIV=Refresh CONTENT="0; URL='<?php  echo $INDEX; ?>'">
