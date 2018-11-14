<?php  

error_reporting(0);
 //E_ALL    or   0
//dl("mysql.so");
/*
// LOCALHOST :
$sql_db='utmet';
$sql_user='root';
$sql_pass='Ghwer';
$sql_ip='localhost';
$sql_connect=0;
$server_1_url="http://localhost/data0/html/";
$server_2_url="http://localhost/data0/html/";
$server_3_url="http://localhost/data0/html/";
   */
// UTMET :
$sql_db='utmet';
$sql_user='root';
$sql_pass='temrue';
//$sql_ip='31.220.111.193/42es' ;
//$sql_ip='utmet1';
$sql_ip='127.0.0.1';
$sql_connect=0;
//$server_1_url="<?php echo $hE; ?>:8080/";
//$server_2_url="http://195.56.65.43:8080/";
//$server_3_url="http://195.56.65.44:8080/";




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
	
//	$query = "SET CHARACTER SET latin2";
	$query = "SET CHARACTER SET utf8";
	mysqli_query($sql_connect,$query); 	


?>
