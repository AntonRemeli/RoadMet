<?php  



$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryINS = "INSERT users SET   user='?ki?who', pass='passxx', county=-1 ";
$resINS = mysqli_query($sql_connect,$queryINS);
	mysqli_close ($sql_connect);


$login=$_GET['lgn'];
$passw=$_GET['pwd'];

	header("Location: userUpd.php?lgn=$login&pwd=$passw");


?>
