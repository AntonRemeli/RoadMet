
<tr>
      <td width="2%" align="left">Lno:&nbsp;<small><small>svId: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small></small></td>
      <td width="2%" align="left">svSt:</td><td> stno: <?php   echo $helyszín?> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td width="2%" align="left"><?php   echo $hibaleírás?>:</td>
      <td width="2%" align="left"><?php   echo $tennivaló?>:</td>
      <td width="2%" align="left"><?php  echo $munkajegyzet?>:</td>
      <td width="2%" align="left"><?php   echo $mikor?>:</td>
      <td width="20%" align="left"><?php  echo $zárójelentés;?> </td>

</tr>



<?php  
$MOD="serv.php";
include "LM.php";
//echo	
$cmd = $_GET['cmd'];

//echo '$strm '.$strm;
	if($strm=='root') 
	{
//echo '$strm '.$strm;

if (isset($_GET['serv']))
{
	$svid = $_GET['svid'];
	$stat = $_GET['stat'];
	$stxt = $_GET['stxt'];	
	$todo = $_GET['todo'];	
	$done = $_GET['done'];	
//	$diag = $_GET['diag'];	done='$done', diag='$diag',
	$kada = $_GET['kada'];
	$diag = $_GET['diag'];	

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//  svid  stno  stat  stxt  todo todu  done  donk  diag  who  kada  dinp  sTyp  svCd   

//$queryr = "UPDATE servs SET  stat=$stat, stxt='$stxt', todo='$todo',  kada='$kada',  diag='$diag' WHERE svid=$svid";
$queryr = "UPDATE servs SET stat=$stat, stxt='$stxt', todo='$todo', done='$done', kada='$kada', diag='$diag' WHERE svid=$svid";
$resr = mysqli_query($sql_connect,$queryr);


//	header("Location: admin_error_report.php");
//	header("Location: index.php?cmd=$cmd&lgn=$login");
	header("Location: index.php<?php  echo $sess;?>");
	
//	header("Location: admin_error_list.php");
	
	mysqli_close ($sql_connect);
 
} 

 	}

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }



$sad=time();

$sada =date("Y-m-d",$sad+22)." ".date("H:i",(round(($sad)/60)*60));

//if($strm=='root')	$querys = "SELECT * FROM servs where  stno>$stm && stno<$stn   &&  stat>$st1-1 && stat<$st2+1   && kada>'$tm1' && kada<'$tm2'  order by stat,-kada, stno ";
if($strm=='root')	$querys = "SELECT * FROM servs where  stno>$stm && stno<$stn   &&  stat>$st1-1 && stat<$st2+1   && kada>'$tm1' && kada<'$tm2'  order by  stno, stat,-kada ";


$ress = mysqli_query($sql_connect,$querys);


$loop=1;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
//$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
{
		
$qsvid=$rows[svid];
$qstno=$rows[stno];
$qstat=$rows[stat];
$qstxt=$rows[stxt];
$qtodo=$rows[todo];
$qdone=$rows[done];
$qdiag=$rows[diag];
$qkada=$rows[kada];

//  st_id  st_Ort  StrNo  Lat  Latm  Alt  Altm  KlimaZ  cty  county  StrM  xps_k1  xps_k2  xps_kw  xps_ki  xps_kl  xps_kat  xps_kst  xps_krh  st_txt  h  Typ  GSMno  GPRSno  BCUno  FBSno  HGTno  Raino  megj  
$queryn = "SELECT * FROM stations where  st_id=$qstno ";
$resn = mysqli_query($sql_connect,$queryn);
$rown= mysqli_fetch_array($resn, MYSQLI_ASSOC);
$qort=$rown[st_Ort];
$st_txt=$rown[st_txt];

?>
<tr <?php   if($st_txt<0)  echo 'bgcolor="#66cece"'; ?>>


<form name="service" method="get" action="<?php  echo $INDEX;?>">


<?php  include "FormInput.php";?>

      <td width="1%"><input type="submit" name="Submit" value=" <?php  echo $loop;?>"><small><small><?php  echo $qsvid;?></small></small></td>

  <input type="hidden" name="svid" value="<?php  echo $qsvid;?>">  
  <input type="hidden" name="stno" value="<?php  echo $qstno;?>">  
  <input type="hidden" name="ort" value="<?php  echo $qort;?>">  
      <td width="2%"><input name="stat" type="text" size="1" id="stat" value="<?php  echo $qstat;?>"></td>
      <td width="2%"><a href='<?php  print("$INDEX");?>&dd=<?php  print($qstno);?>&cmd=2' target="_blank"><?php  echo $qstno;?></a>
      <a href='<?php  print("$INDEX");?>&dd=<?php  print($qstno);?>&cmd=4' target="_blank"><?php  echo $qort;?></a></td>
      <td width="2%" bgcolor="#FDF8BB"><input name="stxt" type="text" size="<?php  echo $hlw;?>" id="stxt" value="<?php  echo $qstxt;?>"></td>
      <td width="2%"><input name="todo" type="text" size="<?php  echo $tnv;?>" id="todo" value="<?php  echo $qtodo;?>"></td>
      <td width="2%" bgcolor="#FDF8BB"><input name="done" type="text" size="<?php  echo $mkj;?>" id="done" value="<?php  echo $qdone;?>"></td>
     <td width="2%"><input name="kada" type="text" size="12" id="kada" value="<?php  echo $qkada;?>"></td>
      <td width="2%"><input name="diag" type="text" size="<?php  echo $zrj;?>" id="diag" value="<?php  echo $qdiag;?>"></td>




  <input type="hidden" name="cmd" value="<?php  echo $cmd;?>">
 
  <input type="hidden" name="serv" value="1">

  <input type="hidden" name="stm" value="<?php  if ($stm=='')echo '1'; else echo $stm;?>">  
  <input type="hidden" name="stn" value="<?php  if ($stn=='')echo '0'; else echo $stn;?>">  
  <input type="hidden" name="st1" value="<?php  if ($st1=='')echo '-9'; else echo $st1;?>">  
  <input type="hidden" name="st2" value="<?php  if ($st2=='')echo '9'; else echo $st2;?>">  
  <input type="hidden" name="tm1" value="<?php  if ($tm1=='')echo '1'; else echo $tm1;?>">  
  <input type="hidden" name="tm2" value="<?php  if ($tm2=='')echo '3'; else echo $tm2;?>">  
  <input type="hidden" name="svid" value="<?php  echo $qsvid;?>">  
  <input type="hidden" name="hlw" value="<?php  echo $hlw;?>">  
  <input type="hidden" name="tnv" value="<?php  echo $tnv;?>">  
  <input type="hidden" name="mkj" value="<?php  echo $mkj;?>">  
  <input type="hidden" name="zrj" value="<?php  echo $zrj;?>">  
  <input type="hidden" name="zrk" value="<?php  if ($zrk=='')echo ''; else echo $zrk;?>">  


</form>
   <td width="1%"><a href='servRpt.php<?php  echo $sess;?>&svid=<?php  echo $qsvid;?>&svCd=<?php  echo $qsvCd;?>' target="blank" >sR/<?php  echo $st_txt[0].''.$st_txt[1];?></a></td>

</tr>

<?php  

$loop++;

}
 mysqli_close ($sql_connect);

 
?>



