	<?php

$username = "root";
$password = "temrue";
$hostname = "localhost"; 
echo "cccc";
//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
echo "ddddd";

$db = new PDO('mysql:host=localhost;dbname=utmet;charset=UTF-8', 
              'root', 
              'temrue',
              array(PDO::ATTR_EMULATE_PREPARES => false,
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
echo "dddddxx";

?>	
