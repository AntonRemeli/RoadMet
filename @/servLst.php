<?php  

$MOD="servLst.php";
include "LM.php";
include "log.php";
if($lgn!='Xps') {?>
 <table width="100%" border="1" cellspacing="1" cellpadding="2"  align="center" class="smallgreyBold">
<?php  }?>
<?php  if($strm=='root') {?>

<table><?php  }?>


<br><P CLASS="breakhere">
<h1><?php   echo $Jelentésazelvégzettszervizmunkákról?>:</h1> 
<tr>
     <td width="2%" align="left">svid:</td>
     <td width="2%" align="left">stno:</td>
      <td width="2%" align="left">stat:</td>
      <td width="2%" align="left"><?php   echo $helyszín?>:</td>
      <td width="2%" align="left"><?php   echo $hibajelentés?>:</td>
      <td width="2%" align="left"><?php   echo $zárójelentés?>:</td>
      <td width="2%" align="left"><?php   echo $mikor?>:</td>
</tr>

<?php  
//$passw= $_SESSION['passw'];
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//	$cmd = $_GET['cmd'];

//  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   

$st1=9000+10*$c;
$st2=9000+10*$cc;


$sada1 =date("Y-m-d",$ido1+22)." ".date("H:i",(round(($ido1)/60)*60));
$sada2 =date("Y-m-d",$ido2+22)." ".date("H:i",(round(($ido2)/60)*60));


//$query0 = "SELECT * FROM servs where svCd>'MK28jav' ";
//$query0 = "SELECT * FROM servs where stno>$st1 and stno<$st2 ORDER BY kada ";
$query0 = "SELECT * FROM servs where stno>$st1 and stno<$st2 and kada>'$sada1'  and kada<'$sada2' ORDER BY kada ";
$res0 = mysqli_query($sql_connect,$query0);
$num_rows = mysqli_num_rows($res0);

 mysqli_close ($sql_connect);

$row=0;
while($row<$num_rows)
{	

if (isset($_GET['serv']))
{
	$svid = $_GET['svid'];
	$stat = $_GET['stat'];
	$stxt = $_GET['stxt'];	
//	$todo = $_GET['todo'];	
//	$done = $_GET['done'];	todo='$todo', done='$done',
	$diag = $_GET['diag'];	
	$kada = $_GET['kada'];
	$svCd = $_GET['svCd'];
	

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$queryr = "UPDATE servs SET  stat=$stat, stxt='$stxt',  diag='$diag', kada='$kada', svCd='$svCd' WHERE svid=$svid";
$resr = mysqli_query($sql_connect,$queryr);

	header("Location: $INDEX&cmd=$cmd&lgn=$login");
	mysqli_close ($sql_connect);
} 

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//$querys = "SELECT * FROM servs where svCd!='' order by svCd ";
$querys = "SELECT * FROM servs where stno>$st1 and stno<$st2 order by kada ";
$ress = mysqli_query($sql_connect,$querys);


$loop=0;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
//$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
{

if($loop==$row)
{		
$qsvid=$rows[svid];
$qstno=$rows[stno];
$qstat=$rows[stat];
$qstxt=$rows[stxt];
//$qtodo=$rows[todo];
//$qdone=$rows[done];
$qdiag=$rows[diag];
$qkada=$rows[kada];
$qsvCd=$rows[svCd];


$queryn = "SELECT * FROM station_data where  id=$qstno ";
$resn = mysqli_query($sql_connect,$queryn);
$rown= mysqli_fetch_array($resn, MYSQLI_ASSOC);
$qort=$rown[st_Ort];


}
$loop++;

}
 mysqli_close ($sql_connect);
?>

<tr>
<?php   if($strm=='root') {?>
  <form name="service" method="get" action="<$INDEX&cmd=$cmd&lgn=$login">

      <td width="2%"><input name="svid" type="text" size="1" id="svid" value="<?php  echo $qsvid;?>"></td>
      <td width="2%"><input name="stno" type="text" size="1" id="stno" value="<?php  echo $qstno;?>"></td>
      <td width="2%"><input name="sort" type="text" size="10" id="sort" value="<?php  echo $qort;?>"></td>
      <td width="2%"><input name="stat" type="text" size="1" id="stat" value="<?php  echo $qstat;?>"><input name="svCd" type="text" size="9" id="svCd" value="<?php  echo $qsvCd;?>"></td>
      <td width="2%"><input name="stxt" type="text" size="30" id="stxt" value="<?php  echo $qstxt;?>"></td>
      <td width="2%"><input name="diag" type="text" size="34" id="diag" value="<?php  echo $qdiag;?>"></td>
      <td width="2%"><input name="kada" type="text" size="12" id="kada" value="<?php  echo $qkada;?>"></td>
      <td width="1%"><a href='servRpt.php<?php  echo $sess;?>&svid=<?php  echo $qsvid;?>&svCd=<?php  echo $qsvCd;?>' target="blank" >sR</a></td>
      <td width="1%"><input type="submit" name="Submit" value=" <?php  echo $row;?> "></td>


  <input type="hidden" name="cmd" value="<?php  echo $cmd;?>">
  <input type="hidden" name="dd" value="<?php  echo $stno;?>">
  <input type="hidden" name="ido1" value="<?php  echo $ido1;?>">
  <input type="hidden" name="ido2" value="<?php  echo $ido2;?>">

  <input type="hidden" name="serv" value="1">



</form><?php  }?>
<?php  if($lgn!='Xps') {?>
				

      <td width="64" height="20" align="left"><?php  echo $qsvid;?></td>
      <td width="64" height="20" align="left"><?php  echo $qstno;?></td>
      <td width="64" height="20" align="left"><?php  echo $qort;?></td>
      <td width="64" height="20" align="left"><?php  echo $qstat."/".$qsvCd;?></td>
      <td width="264" height="20" align="left"><?php  echo $qstxt;?></td>
      <td width="264" height="20" align="left"><?php  echo $qdiag;?></td>
      <td width="64" height="20" align="left"><?php  echo $qkada;?></td>


<?php  if($StrMsw>0)		{?>

      <td width="1%"><a href='servRpt.php<?php  echo $sess;?>&svid=<?php  echo $qsvid;?>&svCd=<?php  echo $qsvCd;?>' target="blank" ><?php  echo $nyomtassKi;?></a></td>

<?php  }}?>


</tr>

<?php  

$row++;
}
 
?>
</table>


