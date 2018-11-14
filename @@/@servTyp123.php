
<?php  

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

////  svid  stno  stat  stxt  todo  done  donk  diag  who  kada  dinp  sTyp  svCd   
$querys = "SELECT * FROM servs where sTyp=33 ";

$ress = mysqli_query($sql_connect,$querys);
	
 
$n=0;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
{

	$svid = $rows[svid];
	$kada = $rows['kada'];
 

$queryr = "UPDATE servs SET  sTyp=1 WHERE svid=$svid";
$resr = mysqli_query($sql_connect,$queryr);

echo $n++." ..   ". $svid." ::  ". $kada."\n<br>";
	

}
	mysqli_close ($sql_connect);
  
?>



