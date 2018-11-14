

<?php  
 error_reporting(0);

$L=$_GET[L];  
include $L."/L0.php";   ?>

 
<html>
<head>
<title><?php  echo $UTMETFÕszerver ;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="js/style" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/BrowserDetect.js"></script>

<script type="text/javascript">



//alert("login.php?L=<?php   echo $L;?>&bn="BrowserDetect.browser+"&bv="+BrowserDetect.version+"&bo="+BrowserDetect.OS);


function href(){
	url="login.php?L=<?php   echo $L;?>&bn="+BrowserDetect.browser+"&bv="+BrowserDetect.version+"&bo="+BrowserDetect.OS;
//	url="login.php?L=<?php   echo $L;?>&bn=";
//BrowserDetect.OS
//	url="login.php?L=<?php   echo $L;?>&bn=xxxxx";
//url="login.php";
return url;
}

 //   <frame name="EMhu" src="+href()+" target="_blank" >
  document.write('<frameset cols="100%" framespacing="0" frameBORDER="no"><frame name="EMhu" src="' + href()+ '" target="_blank" >  </frameset>');


//document.write('<center>');
//document.write('<A HREF="' + href()+ '">Enter</A>');
//document.write('</center>');
// You may make the redirection automatic by using this 
// window.location=url;   
// instead of the three document.write the lines above 

 

// End -->
</script>


<body bgcolor="#D3D2B6" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >

cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc


<script type="text/javascript">
<!--
document.write('<p class="accent">You\'re using ' + BrowserDetect.browser + ' ' + BrowserDetect.version + ' on ' + BrowserDetect.OS + '!</p>');
// -->
</script>


</body>
</html>
