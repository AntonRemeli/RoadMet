<?php  


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

 $queryINS = "INSERT INTO `users`( `user`, `pass`, `county`) VALUES (`?ki?who`,`passxx`,`-1`) ";
 $resINS = mysqli_query($sql_connect,$queryINS);
	mysqli_close ($sql_connect);


echo $login=$_GET['lgn'];
$passw=$_GET['pwd'];

	header("Location: userUpd.php?lgn=$login&pwd=$passw");


?>
