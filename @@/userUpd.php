 <html>
<head>
<TITLE>User Update</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="Title" CONTENT="SERVICE REPORT">
<META NAME="Author" CONTENT="Anton Remeli">
<META NAME="Copyright" CONTENT="EurMet2008">
<META NAME="Revisit" CONTENT="After 6 days">

<link href="style" rel="stylesheet" type="text/css">




<table width="800" height="32" border="0" cellpadding="0" cellspacing="0" >

  <tbody  >
<span style="font-family:Monotype Corsiva; font-size: 100%">
<tr><td></td><td><a href="userINS.php?lgn=<?php  echo $login=$_GET['lgn'];?>&pwd=<?php  echo $passw=$_GET['pwd'];?>"> Id </a></td><td> user </td><td> pass </td><td> county </td><td> cty </td><td> c </td><td> cc </td><td> strm </td><td> reg </td><td> cDept </td><td> cPc</td><td>  cBusinessCity </td><td> cBusinessStreet </td><td> cPhn </td><td>  cFax </td><td> Email </td></tr>

<?php  


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryI = "SELECT * FROM users   order by strm ";
$resI = mysqli_query($sql_connect,$queryI);
mysqli_close ($sql_connect);

while ($rowI = mysqli_fetch_array($resI, MYSQLI_ASSOC))
{ 

		$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryDEL = "DELETE FROM users  WHERE   user='' ";
if($rowI[user]=='') $resDEL = mysqli_query($sql_connect,$queryDEL);
	mysqli_close ($sql_connect);

}


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


echo $login=$_GET['lgn'];
echo $passw=$_GET['pwd'];

//  Id  user  login  pass  county  cty  c  cc  strm  reg  cDept  cBusinessStreet  cBusinessCity  cBusinessPostalCode  cPhn  cFax  Email  

$queryW = "SELECT * FROM users  where user='$login' ";

$resW = mysqli_query($sql_connect,$queryW);
$rowW = mysqli_fetch_array($resW, MYSQLI_ASSOC);
mysqli_close ($sql_connect);


if ($login!='Xps' || $passw!=$rowW[pass])
{
	header("Location: utmet.php");
}


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$queryU = "SELECT * FROM users   order by -Id ";
$resU = mysqli_query($sql_connect,$queryU);
mysqli_close ($sql_connect);


if (isset($_GET['serv3']))
{
	$Id = $_GET['Id'];	
	$user = $_GET['user'];	
	$pass = $_GET['pass'];	
	$county = $_GET['county'];	
	$cty = $_GET['cty'];	
	$c = $_GET['c'];	
	$cc = $_GET['cc'];	
	$strm = $_GET['strm'];	
	$reg = $_GET['reg'];	
	$cDept = $_GET['cDept'];	
	$cBusinessStreet = $_GET['cBusinessStreet'];	
	$cBusinessCity = $_GET['cBusinessCity'];	
	$cBusinessPostalCode = $_GET['cBusinessPostalCode'];	
	$cPhn = $_GET['cPhn'];	
	$cFax = $_GET['cFax'];	
	$Email = $_GET['Email'];	


	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$querySup = "UPDATE users SET   user='$user',  pass='$pass',  county='$county',  cty=$cty,  c=$c,  cc=$cc,  strm='$strm',  reg='$reg',  cDept='$cDept',  cBusinessStreet='$cBusinessStreet',  cBusinessCity='$cBusinessCity',  cBusinessPostalCode='$cBusinessPostalCode',  cPhn='$cPhn',  cFax='$cFax',  Email='$Email' WHERE Id=$Id";
$resSup = mysqli_query($sql_connect,$querySup);


	header("Location: userUpd.php?lgn=$login&pwd=$passw");
	
	mysqli_close ($sql_connect);
 
} 


while ($rowU = mysqli_fetch_array($resU, MYSQLI_ASSOC))
{   
?>
<tr>
<form name="service3" method="get" action="userUpd.php?lgn=<?php  echo $login;?>&pwd=<?php   echo $passw;?>">

     <td> <input  type="submit" name="Submit3" value=".">

<td>	<input name="Id" type="text" size="1" id="Id" value="<?php   echo $rowU[Id];?>">
</td><td>	<input name="user" type="text" size="6" id="user" value="<?php   echo $rowU[user];?>">
</td><td>	<input name="pass" type="text" size="6" id="pass" value="<?php   echo $rowU[pass];?>">
</td><td>	<input name="county" type="text" size="1" id="county" value="<?php   echo $rowU[county];?>">
</td><td>	<input name="cty" type="text" size="1" id="cty" value="<?php   echo $rowU[cty];?>">
</td><td>	<input name="c" type="text" size="1" id="c" value="<?php   echo $rowU[c];?>">
</td><td>	<input name="cc" type="text" size="1" id="cc" value="<?php   echo $rowU[cc];?>">
</td><td>	<input name="strm" type="text" size="1" id="strm" value="<?php   echo $rowU[strm];?>">
</td><td>	<input name="reg" type="text" size="1" id="reg" value="<?php   echo $rowU[reg];?>">
</td><td>	<input name="cDept" type="text" size="19" id="cDept" value="<?php   echo $rowU[cDept];?>">
</td><td>	<input name="cBusinessPostalCode" type="text" size="1" id="cBusinessPostalCode" value="<?php   echo $rowU[cBusinessPostalCode];?>">
</td><td>	<input name="cBusinessCity" type="text" size="16" id="cBusinessCity" value="<?php   echo $rowU[cBusinessCity];?>">
</td><td>	<input name="cBusinessStreet" type="text" size="19" id="cBusinessStreet" value="<?php   echo $rowU[cBusinessStreet];?>">
</td><td>	<input name="cPhn" type="text" size="13" id="cPhn" value="<?php   echo $rowU[cPhn];?>">
</td><td>	<input name="cFax" type="text" size="13" id="cFax" value="<?php   echo $rowU[cFax];?>">
</td><td>	<input name="Email" type="text" size="15" id="Email" value="<?php   echo $rowU[Email];?>">
</td>


      <input name="lgn" type="hidden"   value="<?php  echo $login;?>">
      <input name="pwd" type="hidden"   value="<?php  echo $passw;?>">

  <input type="hidden" name="serv3" value="1">

</form>
</tr>
<?php  
}
//mysqli_close ($sql_connect);
?>

</span>
          
 </body>
    </html>

