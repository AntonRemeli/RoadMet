<?php  
$lcDate = date("Y.m.d H:i:s");
$ip = $_SERVER['REMOTE_ADDR']; 

 if ($lgn=='' || $pwd=='' || $usn=='' || $cty=='' ||  $pwd!=$pass) {$outsyr = "echo '$lcDate | $ip | | rrlinEND'>>userr.log"; 	 system($outsyr); 
echo $KÉREMAZONOSÍTSAMAGÁT.' '.$cmd = 9; $L='en'; $header=header("Location: ../../../../../../../@/utmet.php?L=en&cmd=9"); echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo $hE; ?>/@/login.php?L=en">';

}

if ($lgn>'' && $pwd>'' && $usn>'' ){
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

//  Id user login pass county cty strm reg cDept cBusinessStreet cBusinessCity cBusinessPostalCode cPhn cFax Email 
	$queryu = "SELECT * FROM users where user='$lgn'";
	$resus = mysqli_query($sql_connect,$queryu);
	$rowsu = mysqli_fetch_array($resus, MYSQLI_ASSOC);


if ($MOD=="login.php" || $MOD=="user.php") { $cmd = 1; 	$cty=$rowsu['cty']; $pass=$rowsu['pass'];}

 if ($lgn=='' || $pwd=='' || $usn=='' || $cty=='' ||  $pwd!=$pass ) {$outsys = "echo '$lcDate | $ip | | linEND'>>userr.log"; echo $KÉREMAZONOSÍTSAMAGÁT.' '.$cmd = 9; $header=header("Location: utmet.php"); echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$LOGIN.'">';}

$i="'";
 //$lcDate = date("Y.m.d H:i:s");
// $ip = $_SERVER['REMOTE_ADDR']; 
 //3095.1: users.log átformálandó a saját webstatisztikához
 /*
 $impGet =  implode(",",$_GET);
 $impGem = $MOD." | ". $impGet;
 $outsys = "echo '$lcDate >> $ip - $lgn [$impGem]'>>users.log"; 
 */
 $impGet =  implode("|",$_GET);
 $impGem = $MOD." | ". $impGet;
 $outsys = "echo '$lcDate | $ip | $lgn | $impGem | linEND'>>users.log";
	 system($outsys); 
//  $outsys2 = "echo '$lcDate | $ip | | xxlinEND'>>users.log";
 // 	 system($outsys2); 

 $webGet =  implode("','",$_GET);
// $webGet =  '';
 $webGem = $MOD."','". $webGet;
 $websys = "'".$lcDate."','".$ip."','".$lgn."','".$webGem."','Y','linEND'";
  
 // $websys = " '2010.06.05 10:19:06','91.120.105.151','Xps','mid_cs.php','hu','Explorer','7','Xps','xps','ar','xps','5','','','root','1','1','','1275639236','1275732836','','','60','linEND'  ";
// $websys = "";

//ok:  $websys ="'2010.06.05 10:22:46','91.120.105.151','Xps','mid_gf.php','hu','Explorer','7','2','','root','4','1','9034','9025','9533','1275639236','1275732836','1275639236','1275732836','60','','0','Xps','xps','ar','xps','aaaaaaaa','bbbbbbbbbbbbbb','ccccccccccccc','ddddddddddddddddddd','eeeeeeeeeeeeeeeeeeeeeee','ffffffffff','gggggggggggg','hhhhhhhhhhhhhh','iiiiiiiiiiiiiiii','jjjjjjjjjjjjjj','kkkkkkkkkkkkk','llllllllllll','mmmmmmmmmmmm','nnnnnnnnnnnnnnn','oooooooooooooo','ppppppppppppppp','qqqqqqqqqqqqqqq','rrrrrrrrrrrrrrrrrr','sssssssssssss','tttttttttttttt','uuuuuuuuuuuuuu','vvvvvvvvvvvv','wwwwwwwwwwwwwww','xxxxxxxxxxxxxxxxx',' yyyyyyyyyyyyyyyyyyyy yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy ','linEND'";

//OK:  $websys ="'2010.06.05 10:22:46','91.120.105.151','Xps','mid_gf.php','hu','Explorer','7','2','','root','4','1','9034','9025','9533','1275639236','1275732836','1275639236','1275732836','60','','0','Xps','xps','ar','xps','aaaaaaaa','bbbbbbbbbbbbbb','ccccccccccccc','ddddddddddddddddddd','eeeeeeeeeeeeeeeeeeeeeee','ffffffffff','gggggggggggg','hhhhhhhhhhhhhh','iiiiiiiiiiiiiiii','jjjjjjjjjjjjjj','kkkkkkkkkkkkk','llllllllllll','mmmmmmmmmmmm','nnnnnnnnnnnnnnn','oooooooooooooo','ppppppppppppppp','root','1','1','tttttttttttttt','1275639236','1275732836','ww','','60','linEND'";

//OK:  $websys ="'a2010.06.05 09:43:32','b91.120.105.151','cXps','dcalibrate.php','ehu','fExplorer','g7','hXps','ixps','jar','kxps','l24','m','n','oroot','p4','q1','r9539','s1275635527','t1275729127','u','v','w 0','x-9539','y3','z1','Atúlszáradó v3 miatt elszárad az esojel','Bkorigirati','C','Dclc_Rmm.php módosítva','E2010-03-31 09:00:00','FMegfelelo','G1','H2966','I','J','K','L','M','N','O','P','Q','R','S','T','U2010-05-21','V','W','X2','Y','linEND'";

//OK:   $websys ="'a2010.06.05 15:27:39','b91.120.105.151','cXps','dmid_cs.php','ehu','fExplorer','g7','h4','i','jroot','k1','l1','m9050','n9049','o9051','p1275655045','q1275748645','r1275655045','s1275748645','t60','u','v0','wXps','xxps','yar','zxps','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','ZlinEND' "; 
 
$websys ="'a2010.06.05 16:06:06','b91.120.105.151','cXps','dcalibrate.php','ehu','fExplorer','g7','hXps','ixps','jar','kxps','l7','m','n','oroot','p4','q1','r9085','s1275655045','t1275748645','u','v','w85.0','xv','y205 193 644,','z354056000720346 351099810110490','A0003195','BSSI7050 .','CTH14374/00-J (091227) TH14374/00','DPS1494 -D','E','FÜzemképes állomás. ','G','H3','I RS. ','J1','KY','LlinEND' ";


// echo $websys;

//$webGet =  implode(",",$_GET);
//$websys = "echo '$lcDate , $ip , $lgn , $impGem , linEND'";
  $websy =  "'".$lcDate."','".$ip."','".$lgn."'";
//$websy = "$websy";
//echo $websy;

 if ($MOD!="xps_last.php" && $MOD!="index.php") {
//	 system($outsys); 

//	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,AS,AT,AU,AV,AW,AX,AY,AZ) values($websys) ";
//	$webLog = "INSERT INTO webStat('A','B','C') values($websys) ";
//ok:	$webLog = "INSERT INTO webStat(A,B,C) values(1,2,3) ";
//ok:	$webLog = "INSERT INTO webStat(A,B,C) values('A','B','C') "; 
//ok:	$webLog = "INSERT INTO webStat(A,B,C) VALUES('A','B','C') "; 
//BAD:  $webLog = "INSERT INTO webStat(A,B,C) VALUES(A,B,C) ";
//BAD:  $webLog = "INSERT INTO webStat(A,B,C) values(A,B,C) ";
//ok:   $webLog = "INSERT INTO webStat(A,B,C) values($websy) ";
 //	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,AS,AT,AU,AV,AW,AX,AY,AZ) values('2010.06.04 09:12:42','84.224.57.46','Xps','mid_gf.php','hu','Explorer','6','30','','root','4','1','9537','9535','9537','1275548985','1275642585','1275542927','1275636527','60','','0','Xps','xps','ar','xps','','','','','','','','','','','','','','','','','','','','','','','','','','linEND' ) ";
 //	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,AS,AT,AU,AV,AW,AX,AY,AZ) values('2010.06.04 09:12:42','84.224.57.46','Xps','mid_gf.php','hu','Explorer','6','30','','root','4','1','9537','9535','9537','1275548985','1275642585','1275542927','1275636527','60','','0','Xps','xps','ar','xps','AA','','','','','','','','','','','','','','','','','','','','','','','','','linEND' ) ";
	 //ok: 	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA) values('2010.06.04 09:12:42','84.224.57.46','Xps','mid_gf.php','hu','Explorer','6','30','','root','4','1','9537','9535','9537','1275548985','1275642585','1275542927','1275636527','60','','0','Xps','xps','ar','xps','AA' ) ";
	 
//OKmax: 	$webLog1 = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR) values('2010.06.04 09:12:42','84.224.57.46','Xps','mid_gf.php','hu','Explorer','6','30','','root','4','1','9537','9535','9537','1275548985','1275642585','1275542927','1275636527','60','','0','Xps','xps','ar','xps','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR' ) ";
 
//BAD:	 $webLog1 = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,AS) values('2010.06.04 09:12:42','84.224.57.46','Xps','mid_gf.php','hu','Explorer','6','30','','root','4','1','9537','9535','9537','1275548985','1275642585','1275542927','1275636527','60','','0','Xps','xps','ar','xps','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS' ) ";
	 //
//BAD:	 $webLog1 = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,AS) values('2010.06.04','84.224.57.46','Xps','mid_gf.php','hu','Explorer','6','30','','root','4','1','9537','9535','9537','1275548985','1275642585','1275542927','1275636527','60','','0','Xps','xps','ar','xps','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS' ) ";

//BAD:	  	$webLog2 = "INSERT INTO webStat(AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR) values('AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR' ) ";

//	 $webLog2 = "INSERT INTO webStat(AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,AS,AT,AU,AV,AW,AX,AY,AZ) values('AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ' ) ";

//BAD:	$webLog1= "INSERT INTO webStat(AS) values('AS' ) ";


//ok:	$webLog1= "INSERT INTO webStat SET AR='AR'  ";
//ok:	$webLog1= "INSERT INTO webStat SET AT='AT'  ";
//BAD:	$webLog1= "INSERT INTO webStat SET AS='AS'  ";
//okNOW:	$webLog1= "INSERT INTO webStat SET ASb='AS'  ";  //NOW OK,  AS is NOT ALLOWED NAME !!

	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,ASb,AT,AU,AV,AW,AX,AY,AZ) values($websys) ";
//	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,ASb,AT,AU,AV,AW,AX,AY,AZ) values('2010.06.05 09:43:32','91.120.105.151','Xps','calibrate.php','hu','Explorer','7','Xps','xps','ar','xps','24','','','root','4','1','9539','1275635527','1275729127','','',' 0','-9539','3','1','túlszáradó v3 miatt elszárad az esojel','korigirati','','clc_Rmm.php módosítva','2010-03-31 09:00:00','Megfelelo','1','2966','','','','','','','','','','','','','2010-05-21','','','2','linEND' ) ";

//	$webLog = "INSERT INTO webStat(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,AA,AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO,AP,AQ,AR,ASb,AT,AU,AV,AW,AX,AY,AZ) values('2010.06.05 09:43:32','91.120.105.151','Xps','calibrate.php','hu','Explorer','7','Xps','xps','ar','xps','','','','','','','','','','','','','','','','','','','','','','','','','','linEND' ) ";

	 //
// $webLog = "INSERT INTO webStat(A,B,C,D,E,F) values($websys) ";


	 $reuLg = mysqli_query($sql_connect,$webLog);
// echo $websys;
//ECHO "<BR>". $INDEX; // _GET je promjenljive duljine, te ne ide jednaka kolicina stubaca...i uvijek se mijenja sa uèitom form inputa... stoga treba nekoliko vanijih podataka u odeljene stupce, sve ostalo u jedan saliti
//	 $reuLg2 = mysqli_query($sql_connect,$webLog2);
 };

}
 if ($lgn=='' || $pwd=='' || $usn=='' || $cty=='' ||  $pwd!=$pass) {
//$outsyrs = "echo '$lcDate | $ip | | rrsslinEND'>>userr.log";
system($outsyrs);
?>
<!-- Anfang -->
<script type="text/javascript" language="JavaScript"
src="http://www2.stats4free.de/counter.php?sid=520495031"></script>
<br /><a href="http://www.stats4free.de">
Counter</a>
<!-- Ende -->

<?php  }

?>



