ccccccccccccccccccc
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>UTMET  F&#213;szerver</title>
	
	
<?php  include "h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> 
	<?php //echo $hF; ?>

<link href="<?php echo $hE; ?>js/style" rel="stylesheet" type="text/css">


<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
//var bname = navigator.appName;
//var bname = navigator.userAgent;
//var bvers = navigator.appVersion;
//verss = bvers.substring(22,25); 

var nVer = navigator.appVersion;
var nAgt = navigator.userAgent;
var browserName  = '';
var fullVersion  = 0; 
var majorVersion = 0;

// In Internet Explorer, the true version is after "MSIE" in userAgent
if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
 browserName  = "Microsoft Internet Explorer";
 fullVersion  = parseFloat(nAgt.substring(verOffset+5));
 majorVersion = parseInt(''+fullVersion);
}

// In Opera, the true version is after "Opera" 
else if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
 browserName  = "Microsoft Internet Explorer";
 fullVersion  = parseFloat(nAgt.substring(verOffset+6));
 majorVersion = parseInt(''+fullVersion);
}

// In most other browsers, "name/version" is at the end of userAgent 
else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < (verOffset=nAgt.lastIndexOf('/')) ) 
{
 browserName  = nAgt.substring(nameOffset,verOffset);
 fullVersion  = parseFloat(nAgt.substring(verOffset+1));
 if (!isNaN(fullVersion)) majorVersion = parseInt(''+fullVersion);
 else {fullVersion  = 0; majorVersion = 0;}
}

// Finally, if no name and/or no version detected from userAgent...
if (browserName.toLowerCase() == browserName.toUpperCase()
 || fullVersion==0 || majorVersion == 0 )
{
 browserName  = navigator.appName;
 fullVersion  = parseFloat(nVer);
 majorVersion = parseInt(nVer);
}

//document.write('Browser name  = '+browserName+'<br>');
//document.write('Full version  = '+fullVersion+'<br>');
//document.write('Major version = '+majorVersion+'<br>');
//document.write('navigator.appName = '+navigator.appName+'<br>');
//document.write('navigator.userAgent = '+navigator.userAgent+'<br>');

//var acn = navigator.appCodeName;
var acn = navigator.appName;

function href(){
	url="http://31.220.111.193/42es/@@/login.php?L=hu&bn="+browserName+"&bv="+fullVersion;
//	url="http://localhost/42es/@@/login.php?L=hu&bn="+browserName+"&bv="+fullVersion;
//url="login.php";
return url;
}
// document.write(href());
 //   <frame name="EMhu" src="'+href()+'" target="_blank" >
//  document.write(<frameset cols="10%" framespacing="0" frameBORDER="yes"><frame name="EMhu" src=" + href()+ " target="_blank" >  </frameset>);

	document.write('<iframe name="EMhu" width="100%" height="100%" src="'+href()+'" frameborder="0" allowfullscreen></iframe>');

//document.write('<center>');
//document.write('<A HREF="' + href()+ '">Enter</A>');
//document.write('</center>');
// You may make the redirection automatic by using this 
// window.location=url;   
//document.write(<frameset cols="10%" framespacing="0" frameBORDER="yes"> <frame name="EMhu" src="'+href()+'" target="_blank" > </frameset>);
	
	
	

// End -->
</script>


<body bgcolor="#D3D2B6" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >


</body>
</html>
