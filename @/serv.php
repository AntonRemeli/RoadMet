
<?php  
//echo $stno."xxxxxxxxxxxxxxx    ";
$MOD="serv.php";
include "LM.php";
if (isset($_GET['dd']))		$stno = $_GET['dd'];
 include "serv+.php";
// include "serf+.php";

if($cmd==55) {?>  <h1>Tervezett szervizbevet�ek:</h1> <?php  }?>

<?php  
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	

//  svid  stno  stat  stxt  todo todu  done  donk  diag  who  kada  dinp  sTyp  svCd   

$query0 = "SELECT * FROM servs where stno=$stno ";
$res0 = mysqli_query($sql_connect,$query0);
echo $num_rows = mysqli_num_rows($res0).'   '.$strm;

 mysqli_close ($sql_connect);

$row=0;
while($row<$num_rows)
{	

	if($strm=='root') 
	{

if (isset($_GET['serv']))
{
//$svidx=9966;
//	$svid = 4444;
	$svid = $_GET['svid'];
	$stno = $_GET['stno'];
	$stat = $_GET['stat'];
	$stxt = $_GET['stxt'];	
	$todo = $_GET['todo'];
	$todu = $_GET['todu'];
	$done = $_GET['done'];	
//	echo
		$diag = $_GET['diag'];	
	$kada = $_GET['kada'];
	$sTyp = $_GET['sTyp'];
	$svCd = $_GET['svCd'];
	if($stno>9500){
 include "hr/LMhr.php";
if($todo=='') $todo=$todotx;
if($todu=='') $todu=$todutx;
if($diag=='') $diag=$diagtx;	
}
if($stno>9000 && $stno<9500){
	 include "hu/LMhu.php";
if($todo=='') $todo=$todotx;
if($todu=='') $todu=$todutx;
if($diag=='') $diag=$diagtx;	
}

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


//$queryr = "UPDATE servs SET  stno=$stno, stat=$stat, stxt='$stxt', todo='$todo', todu='$todu', done='$done', diag='$diag', kada='$kada', sTyp='$sTyp', svCd='$svCd' WHERE svid=$svid"; //3348.2 nem frissít az állomásgrafikon alatt
$queryr = "UPDATE servs SET  stno=$stno, stat=$stat, stxt='$stxt', todo='$todo', todu='$todu', done='$done', diag='$diag', kada='$kada', sTyp='$sTyp', svCd='$svCd' WHERE svid>$svid-0.09 && svid<$svid+0.09 ";
$resr = mysqli_query($sql_connect,$queryr);
//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj 
//	sid 	st_id 	st_Ort 	StrNo 	Lng 	Xeov 	Lat 	Yeov 	KlimaZ 	cty 	county 	StrM 	xps_k1 	xps_k2 	xps_kw 	xps_ki 	xps_kl 	xps_kat 	xps_kst 	xps_krh 	st_txt 	h 	Typ 	GSMno 	GPRSno 	BCUno 	FBSno 	HGTno 	Raino 	SWno 	megj 	ToDo

$resrm = mysqli_query($sql_connect,"UPDATE stations SET  st_txt=$stat, megj='$diag', ToDo='$todo' WHERE st_id=$stno");
if($stat>0) $resrm = mysqli_query($sql_connect,"UPDATE stations SET  st_txt=$stat, megj='$diag', ToDo='$qstxt.$qtodo' WHERE st_id=$stno"); //3002:ToDo a stations-ba


//	header("Location: index.php?cmd=$cmd&dd=$stno&ido1=$ido1&ido2=$ido2");
	header("Location: $INDEX.'#tocI'");
	
	mysqli_close ($sql_connect);
 
} 

	}

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	
////  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   
$querys = "SELECT * FROM servs where stno=$stno || stno=-$stno  order by -svid ";
//$querys = "SELECT * FROM servs where stno=$stno || stno=-$stno  order by stno ";

//if($lgn!='Xps') $querys = "SELECT * FROM servs  where stno=$stno  order by -svid ";
$ress = mysqli_query($sql_connect,$querys);


$loop=0;
while ($rowS = mysqli_fetch_array($ress, MYSQLI_ASSOC))
{

if($loop==$row)
{
	include "servq.php";
/*	
$qsvid=$rowS[svid];
$qstno=$rowS[stno];
$qstat=$rowS[stat];
$qstxt=$rowS[stxt];
$qtodo=$rowS[todo];
$qdone=$rowS[done];
$qdiag=$rowS[diag];
$qkada=$rowS[kada];
$qsvCd=$rowS[svCd];


// 2008-08-22 13:00:00

$qYrs=$qkada[0]."".$qkada[1]."".$qkada[2]."".$qkada[3];

$qMth=$qkada[5]."".$qkada[6];
$qDay=$qkada[8]."".$qkada[9];
$qHrs=$qkada[11]."".$qkada[12];
$qMin=$qkada[14]."".$qkada[15];
$qSec=$qkada[17]."".$qkada[18];

$qkadU=mktime($qHrs,$qMin,$qSec,$qMth,$qDay,$qYrs,-1);
//$qkadU=mktime(13,0,0,11,14,2008,-1);
$qkad1=$qkadU-3600*4;
$qkad2=$qkadU+3600*20;
$qkat1=$qkadU-3600*1;
$qkat2=$qkadU+3600*4;
 */
}
$loop++;

}
mysqli_close ($sql_connect);

?>
<tr <?php   if($qstat<0)  echo 'bgcolor="#66cece"'; ?>>

<form name="service" method="get" action="<?php  echo $INDEX;?>#tocI">

<?php   include "FormInput.php";?>


<td width="1%"><input type="submit" name="Submit" value=" <?php  echo $row;?>"><small><small><?php  echo $qsvid;?></small></small></td>

      <td width="2%"><input name="stno" type="text" size="1%" id="stno" value="<?php  echo $qstno;?>"></td>
<td width="15%"><input name="stat" type="text" size="1" id="stat" value="<?php  echo $qstat;?>">
<input name="sTyp" type="text" size="1" id="sTyp" value="<?php  echo $qsTyp;?>"></td>
      <td width="2%"><input name="stxt" type="text" size="22" id="stxt" value="<?php  echo $qstxt;?>"></td>
      <td width="2%"><input name="todo" type="text" size="22" id="todo" value="<?php  echo $qtodo;?>"></td>
      <input name="todu" type="hidden" size="22" id="todu" value="<?php  echo $qtodu;?>">
      <td width="2%" bgcolor="#FDF8BB"><input name="done" type="text" size="12" id="done" value="<?php  echo $qdone;?>"></td>
      <td width="2%"><input name="kada" type="text" size="8" id="kada" value="<?php  echo $qkada;?>"></td>
      <td width="2%"><input name="diag" type="text" size="24" id="diag" value="<?php  echo $qdiag;?>"></td>




  <input type="hidden" name="serv" value="1">
  <input type="hidden" name="svid" value="<?php  echo $qsvid;?>">  

  <input type="hidden" name="stm" value="<?php  echo $stm;?>">  
  <input type="hidden" name="stn" value="<?php  echo $stn;?>">  
  <input type="hidden" name="st1" value="<?php  echo $st1;?>">  
  <input type="hidden" name="st2" value="<?php  echo $st2;?>">  
  <input type="hidden" name="hlw" value="<?php  echo $hlw;?>">  
  <input type="hidden" name="hSc" value="<?php  echo $hSc;?>">  
  <input type="hidden" name="hSd" value="<?php  echo $hSd;?>">  
  <input type="hidden" name="tnv" value="<?php  echo $tnv;?>">  
  <input type="hidden" name="tab" value="<?php  echo $tab;?>">  
  <input type="hidden" name="mkj" value="<?php  echo $mkj;?>">  
  <input type="hidden" name="mk1" value="<?php  echo $mk1;?>">  
  <input type="hidden" name="mk2" value="<?php  echo $mk2;?>">  
  <input type="hidden" name="tm1" value="<?php  echo $tm1;?>">  
  <input type="hidden" name="tm2" value="<?php  echo $tm2;?>">  
  <input type="hidden" name="zrj" value="<?php  echo $zrj;?>">  
  <input type="hidden" name="zrk" value="<?php  echo $zrk=2;?>">  



</form>


<?php   if($stno>9000){?>
<td width="1%"><a href='<?php  print("$INDEX");?>&dd=<?php  print($qstno);?>&cmd=2&ido1=<?php  echo $qkat1;?>&ido2=<?php  echo $qkat2;?>' target="_blank">tab</a>
<a href='<?php  print("$INDEX");?>&dd=<?php  print($qstno);?>&cmd=4&ido1=<?php  echo $qkad1;?>&ido2=<?php  echo $qkad2;?>' target="_blank">graf</a>

      <a href='servRpt.php<?php  echo $sess;?>&svid=<?php  echo $qsvid;?>&svCd=<?php  echo $qsvCd;?>&ido1=<?php  echo $qkad1;?>&ido2=<?php  echo $qkad2;?>' target="blank" >sR</a></td>
<?php  }?>
</tr>
<?php  

$row++;
}
 
?>



