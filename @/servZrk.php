<?php  
//  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   
//$query0 = "SELECT * FROM servs where stno=$stno && stat>$st1-1 && stat<$st2+1  && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  ";
$query0 = "SELECT * FROM servs where stno<9000 && stat>$st1-1 && stat<$st2+1  && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  ";
//$query0 = "SELECT * FROM servs where stno>$stm && stno<$stn   && stat>$st1-1 && stat<$st2+1  && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  ";
//$query0 = "SELECT * FROM servs where stno=$stno && stat>$st1-1 && stat<$st2+1  && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'   && stxt>='$mk1' && stxt<='$mk2'";
$res0 = mysqli_query($sql_connect,$query0);
//echo 
	$num_rows = mysqli_num_rows($res0);
if($num_rows>0) {$ron++; include "serf+.php";}

 mysqli_close ($sql_connect);

$row=1;
while($row<$num_rows+1)
{	                     //>>>>>>>>>>>>>>>>>>>>>>>  $row<$num_rows        START

	if($strm=='root')                // >>>>>>>>>>>>>>>>    $lgn=='Xps'  UPDATE servs   START
	{

if (isset($_GET['serv']))
{
//	echo 'svid: '.
	$svid = $_GET['svid'];
	$stat = $_GET['stat'];
	$stxt = $_GET['stxt'];	
	$todo = $_GET['todo'];
	$todu = $_GET['todu'];

	$done = $_GET['done'];	
	$donk = $_GET['donk'];	
	$diag = $_GET['diag'];	
	$kada = $_GET['kada'];
	$svCd = $_GET['svCd'];

if($stno>9000){
if($todo=='') $todo='Tervben van az állomás felülvizsgálata és beüzemelése helyszíni kalibrációval.  ÚTELLENÕR jelenlétét kérjük,';	
if($todu=='') $todu=' aki a forgalomterelést biztosítja az útszonda kalibrációjához, tervezett idõpont:';
if($diag=='') $diag='Üzemképes állomás. ';	
}

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//  svid  stno  stat  stxt  todo  todu  done  donk  diag  who  kada  dinp  sTyp  svCd  

//$queryr = "UPDATE servs SET  stat=$stat, stxt='$stxt', todo='$todo', todu='$todu', done='$done', donk='$donk', diag='$diag', kada='$kada', svCd='$svCd' WHERE svid=$svid";   //2545.1:svid=$svid nem megy!, helyette: svid>$svid-0.1 && svid<$svid+0.1 

$queryr = "UPDATE servs SET  stat=$stat, stxt='$stxt', todo='$todo', todu='$todu', done='$done', donk='$donk', diag='$diag', kada='$kada', svCd='$svCd' WHERE svid>$svid-0.09 && svid<$svid+0.09 ";

$resr = mysqli_query($sql_connect,$queryr);
//	echo 'svid: '.$svid.'' ;


if($donk>'' && $stat>0 ){
	$sad = time();
    $sada =date("Y-m-d",$sad+22)." ".date("H:i",(round(($sad)/60)*60));
    $sadah =date("Y-m-d",$sad+22)." ".date("H:i",(round(($sad)/3600)*3600));

  $queryr0 = "INSERT INTO servs SET  stno=$stno, kada='$sadah', dinp='$sada', stxt='$donk', svid=$svid+0.1 ";
$resr0 = mysqli_query($sql_connect,$queryr0);
}	

//	header("Location: $INDEX.'&hlw='.$hlw.'&stn='.$stn.'#tocI'");
	
	mysqli_close ($sql_connect);
 
} 

	}                      // >>>>>>>>>>>>>>>>    $lgn=='Xps'  UPDATE servs   END

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

////  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   
//$querys = "SELECT * FROM servs where stno=$stno && stat>$st1 && stat<$st2   && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  && stxt>='$mk1' && stxt<='$mk2' order by -svid ";
//$querys = "SELECT * FROM servs where stno=$stno && stat>$st1-1 && stat<$st2+1   && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  order by stat, -svid ";
$querys = "SELECT * FROM servs where stno<9000 && stat>$st1-1 && stat<$st2+1   && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  order by stat, -svid ";
//$querys = "SELECT * FROM servs where stno>$stm && stno<$stn  && stat>$st1-1 && stat<$st2+1   && kada>'$tm1' && kada<'$tm2' && svCd>='$hSc' && svCd<='$hSd'  order by stat, -svid ";

//if($lgn!='Xps') $querys = "SELECT * FROM servs  where stno=$stno  order by -svid ";
$ress = mysqli_query($sql_connect,$querys);

//echo	
	$num_rowss = mysqli_num_rows($ress)."  ".$stno;


$loop=1;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
{                             //>>>>>>>>>>>>>>>>>>>>>>>>>>ELECT * FROM servs   START

if($loop==$row)
{		
$qsvid=$rows[svid];
$qstno=$rows[stno];
$qstat=$rows[stat];
$qstxt=$rows[stxt];
$qtodo=$rows[todo];
$qtodu=$rows[todu];
$qdone=$rows[done];
$qdonk=$rows[donk];
$qdiag=$rows[diag];
$qkada=$rows[kada];
$qsvCd=$rows[svCd];


// 2008-08-22 13:00:00

$qYrs=$qkada[0]."".$qkada[1]."".$qkada[2]."".$qkada[3];

$qMth=$qkada[5]."".$qkada[6];
$qDay=$qkada[8]."".$qkada[9];
$qHrs=$qkada[11]."".$qkada[12];
$qMin=$qkada[14]."".$qkada[15];
$qSec=$qkada[17]."".$qkada[18];

$qkadU=mktime($qHrs,$qMin,$qSec,$qMth,$qDay,$qYrs,-1);
//$qkadU=mktime(13,0,0,11,14,2008,-1);
$qkad1=$qkadU-16400;
$qkad2=$qkadU+60000;
$qkat1=$qkadU-3000;
$qkat2=$qkadU+9000;

}
$loop++;

}                                    //>>>>>>>>>>>>>>>>>>>>>>>>>>ELECT * FROM servs   END

mysqli_close ($sql_connect);

?>

<tr <?php  if ($qstxt=='') echo 'bgcolor="#cc0000"' ?><?php   if($qstat<0)  echo 'bgcolor="#66cece"'; ?>>

	
<form name="service" method="get" action="<?php  echo $INDEX;?>">

<?php  include "FormInput.php"; ?>

      <td width="1%"><?php  if($tab==''){?><input type="submit" name="Submit" value=" <?php  } echo ''.$rowss;if($tab==''){?>"><?php  }?><small><small><?php  echo $qsvid;?></small></small></td>

      <td width="140"><?php  if($tab==''){?><input name="stat" type="text" size="1" id="stat" value="<?php  }echo $qstat;if($tab==''){?>">
</td><td>
      <?php  if($tab==''){?><input name="stno" type="text" size="1" id="stno" value="<?php  }echo $qstno;if($tab==''){?>"><?php  }?>
<input name="svCd" type="text" size="1" id="svCd" value="<?php  }echo $qsvCd;if($tab==''){?>"><?php  }?></td>
      <td width="2%"><?php  if($tab==''){?><input name="stxt" type="text" size="<?php  echo $hlw;?>" id="stxt" value="<?php  }echo $qstxt;if($tab==''){?>"><?php  }?></td>
      <td width="2%"><?php  if($tab==''){?><input name="todo" type="text" size="<?php  echo $tnv;?>" id="todo" value="<?php  }echo $qtodo; if($tab==''){?>"><?php  }?></td>
      <td width="2%" bgcolor="#FDF8BB"><?php  if($tab==''){?><input name="done" type="text" size="<?php  echo $mkj;?>" id="done" value="<?php  }echo $qdone;if($tab==''){?>"><?php  }?></td>
      <td width="2%"><?php  if($tab==''){?><input name="kada" type="text" size="9" id="kada" value="<?php  }echo $qkada;if($tab==''){?>"><?php  }?></td>
      <td width="2%"><?php  if($tab==''){?><input name="diag" type="text" size="<?php  echo $zrj;?>" id="diag" value="<?php  }echo $qdiag;if($tab==''){?>"><?php  }?></td>
	<td width="2%" bgcolor="#FDF8BB"><?php  if($tab==''){?><input name="donk" type="text" size="<?php  echo $mkj;?>" id="donk" value="<?php  }echo $qdonk;if($tab==''){?>"><?php  }?></td>

      <input name="todu" type="hidden"  value="<?php  echo $qtodu;?>">

  <input type="hidden" name="stm" value="<?php  if ($stm=='')echo '1'; else echo $stm;?>">  
  <input type="hidden" name="stn" value="<?php  if ($stn=='')echo '1'; else echo $stn;?>">  
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



<input type="hidden" name="serv" value="1">

<?php   if($stno>9000 && $tab==''){?>
<td width="1%"><a href='<?php  print("$INDEX");?>&dd=<?php  print($qstno);?>&cmd=2&ido1=<?php  echo $qkat1;?>&ido2=<?php  echo $qkat2;?>' target="_blank">tab</a></td>
<td width="1%"><a href='<?php  print("$INDEX");?>&dd=<?php  print($qstno);?>&cmd=4&ido1=<?php  echo $qkad1;?>&ido2=<?php  echo $qkad2;?>' target="_blank">graf</a></td>

      <td width="1%"><a href='servRpt.php<?php  echo $sess;?>&svid=<?php  echo $qsvid;?>&svCd=<?php  echo $qsvCd;?>' target="blank" >sR</a></td>
<?php  }?>
</form>      

</tr>


<?php  
$row++;
$rowss++;
}                            //>>>>>>>>>>>>>>>>>>>>>>>  $row<$num_rows        END

//echo "zrk";
?>
