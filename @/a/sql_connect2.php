<?php  

error_reporting(0);

$sql_db='konyvek';
$sql_user='root';
$sql_pass='xxxxx';

$sql_ip='127.0.0.1';
$sql_connect=0;


	for($retrycnt=0;$retrycnt<=5;$retrycnt++)
	{
		$sql_connect=mysqli_connect($sql_ip, $sql_user, $sql_pass);
		if ($sql_connect) {break;}
		sleep(2);
	}
	
	for($retrycnt=0;$retrycnt<=5;$retrycnt++)
	{

		$sqlret = mysqli_select_db($sql_db,$sql_connect);
		if ($sqlret) {break;}
		sleep(2);
	}
	
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	


?>
