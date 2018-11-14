
<?php  
 error_reporting(0);
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


// Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
$queru = "SELECT * FROM users where user='$lgn'";
	$resu = mysqli_query($sql_connect,$queru);
	$quser = mysqli_fetch_array($resu, MYSQLI_ASSOC);

        mysqli_close ($sql_connect);

?>


