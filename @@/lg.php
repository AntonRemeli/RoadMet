<?php  

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

if ($lgn=='' || $pwd=='' || $usn==''  || $cty=='' ) echo $lgn. 'xxx' .$pwd. '---' .$usn;

echo $lcDate = date("Y.m.d H:i:s");
echo $ip = $_SERVER['REMOTE_ADDR']; 

 //if (($cty=='-') || ($cty=='')){$outsys = "echo '$lcDate | $ip | | linEND'>>userr.log"; echo $KÉREMAZONOSÍTSAMAGÁT.' '.$cmd = 9; $header=header("Location: utmet.php"); echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$LOGIN.'">';}

 if ($lgn=='' || $pwd=='' || $usn=='' || $cty=='' ||  $pwd!=$pass) {
//$outsys = "echo '$lcDate | $ip | | linEND'>>userr.log";
//$outsys = "echo ' |  | | linEND'>>userr.log";
// $outsys = "echo '$lcDate | $ip | $lgn | $impGem | xxxlinEND'>>users.log";
 $outsys = "echo '$lcDate | $ip |  | xxxlinEND'>>users.log";

?>
<!-- Anfang -->
<script type="text/javascript" language="JavaScript"
src="http://www2.stats4free.de/counter.php?sid=520495031"></script>
<br /><a href="http://www.stats4free.de">
Counter</a>
<!-- Ende -->

<?php  }

?>



