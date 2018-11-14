
<?php   
$L='cg';
$MOD="login.php";
include "../LM.php";
$test=$USER;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PutMET [crnogorski putno-meteorološki portal]</title>
</head>
<style type="text/css">
<
body {
	margin-left: 80px;
	margin-top: 80px;
	margin-right: 80px;
	margin-bottom: 80px;
}
>
</style>
<br><br><br><br>
<p align="center"><img src="cestamet_logo.gif" title="CESTAMET" alt="CESTAMET" /></p>




<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">


<div style="width:344px; height:240px; border:4px solid #CCCCCC;">


<form action="<?php  echo '../user.php'.$sess;?>" method="GET">

<?php   include "../FormInput.php";?>
<br><b>
<span style="padding:3px; position:relative;  left:30px;"> Regija: </span>
<input style="padding:3px; position:relative;  left:47px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;" name="lgn" size="15"><br><br>

<span style="padding:3px; position:relative;  left:30px;"> Korisnik:</span>
<input style="padding:3px; position:relative;  left:35px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;" name="usn" size="15"><br><br>

<span style="padding:3px; position:relative;  left:30px;"> Lozinka: </span>
<input style="padding:3px; position:relative;  left:40px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;" type="password" name="pwd" size="8"><br>


<input style="padding:5px; position:relative; top:30px; left:107px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#333333;" type="submit" value="Ulaz ">

</form>

</div></td>
  </tr>
</table><br> 


<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px; border:solid 2px #CCCCCC;" border="0" align="center" cellpadding="10" cellspacing="0">
</table>
<p align="center"><a href="http://www.elektromodul-promet.hr" target="_blank"><img border="0" src="elektromodul-promet_logo.gif" title="Elektromodul-promet d.o.o." alt="Elektromodul-promet d.o.o." /></a></p>
