<table> 

<?php
$sql_connect=mysqli_connect("localhost","root","temrue","utmet");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


	$local_time=time()-30*86400; 
//  uLid  strm 	user 	pasd 	pase 	pasf 	cDept 	who 	usrIP 	Ltime 	Ldate

$queruL = "SELECT * FROM usrLogs  where Ltime>$local_time  order by Ltime  ";

$reuLs=mysqli_query($sql_connect,$queruL);

//	echo "ccccXXaa";
// Associative array
//$row=mysqli_fetch_array($reuLs,MYSQLI_ASSOC);
//printf ("%s (%s)\n",$row["user"],$row["who"]);

// Free result set
//mysqli_free_result($result);




	
//	echo "cxx";
//$reuLs = mysqli_query($queruL);
	
	
mysqli_close ($sql_connect);
	echo "ccXX";
while($rouLs = mysqli_fetch_array($reuLs, MYSQLI_ASSOC))
{
?>
<tr>
<td><?php  echo "<small> ".$rouLs['Ldate'];?></td>
<td><?php  echo "<small> ".$rouLs['usrIP'];?></td>
<td><?php  echo "<small> ".$rouLs['cDept'];?></td>
<td><b><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp; ".utf8_decode($rouLs['who']);?></b></td>
<td><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs['pasd'];?></td>
<td><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs['pase'];?></td>
<td><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs['pasf'];?></td>
</tr>
<?php 
 
}
?>
 </table>  
