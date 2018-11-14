<?php  
//echo "L0 login: ".
//	$lgn=$_GET['lgn'];
//echo " pass: ".
//	$pwd=$_GET['pwd'];
//echo ' reg '.$regg;
//echo ' lgn '.$lgn;

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  
$queru = "SELECT * FROM users where user='$lgn'";
	$resu = mysqli_query($sql_connect,$queru);
	$quser = mysqli_fetch_array($resu, MYSQLI_ASSOC);

$c=$quser[c];
$cc=$quser[cc];
$strm=$quser[strm];
//if($regg=='') $regg=$quser[reg];
//echo ' reg '.$regg;
//echo ' cty '.$cty;

?>
