<?php  

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

if ($lgn=='' || $pwd=='' || $usn==''  || $cty=='' ) echo $lgn. 'xxx' .$pwd. '---' .$usn;

$lcDate = date("Y.m.d H:i:s");
$ip = $_SERVER['REMOTE_ADDR']; 

// if (($cty=='-') || ($cty=='')){$outsys = "echo '$lcDate | $ip | | linEND'>>userr.log"; echo $KÉREMAZONOSÍTSAMAGÁT.' '.$cmd = 9; $header=header("Location: utmet.php"); echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$LOGIN.'">';}


 $outsys = "echo '$lcDate | $ip |  | linEND'>>users.log";
 	 system($outsys); 
 


?>



