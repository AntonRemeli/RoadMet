<?php  
//echo $gim;
//*
//$cal = $_GET['cal'];
//if($dd>9500) $L='hr';
//echo
//$sess="?L=".$L."&bn=".$bn."&bv=".$bv."&cty=".$cty."&régg=".$regg."&strm=".$strm."&cmd=".$cmd."&th=".$th."&dd=".$dd."&dd1s=".$dd1s."&dd2s=".$dd2s."&ido1=".$ido1."&ido2=".$ido2."&ido1s=".$ido1s."&ido2s=".$ido2s."&add=".$add."&gim=".$gim."&stk=".$stk."&lgn=".$lgn."&pwd=".$pwd."&usn=".$usn."&pass=".$pass."&c=".$_GET['c']."&cc=".$_GET['cc']."&cal=".$_GET['cal']."&stm=".$_GET['stm']."&stn=".$_GET['stn']."&st1=".$_GET['st1']."&st2=".$_GET['st2']."&tm1=".$_GET['tm1']."&tm2=".$_GET['tm2']."&ns=".$ns."&fT=".$_GET['fT']."&sT=".$_GET['sT']."&aT=".$_GET['aT']."&dT=".$_GET['dT']."&rH=".$_GET['rH']."&Wm=".$_GET['Wm']."&Rm=".$_GET['Rm']."&aV=".$_GET['aV']."&v0=".$_GET['v0']."&v1=".$_GET['v1']."&v2=".$_GET['v2']."&v3=".$_GET['v3']."&v4=".$_GET['v4']."&v5=".$_GET['v5']."&v6=".$_GET['v6']."&BPW=".$_GET['BPW']."&qYr=".$_GET['qYr']."&qMt=".$_GET['qMt']."&qDy=".$_GET['qDy']."";
$sess="?L=".$L."&bn=".$bn."&bv=".$bv."&cty=".$cty."&régg=".$regg."&strm=".$strm."&cmd=".$cmd."&th=".$th."&dd=".$dd."&dd1s=".$dd1s."&dd2s=".$dd2s."&ido1=".$ido1."&ido2=".$ido2."&in_ido1=".$in_ido1."&ido1s=".$ido1s."&ido2s=".$ido2s."&add=".$add."&gim=".$gim."&stk=".$stk."&lgn=".$lgn."&pwd=".$pwd."&usn=".$usn."&pass=".$pass."&c=".$_GET['c']."&cc=".$_GET['cc']."&cal=".$_GET['cal']."&stm=".$_GET['stm']."&stn=".$_GET['stn']."&st1=".$_GET['st1']."&st2=".$_GET['st2']."&tm1=".$_GET['tm1']."&tm2=".$_GET['tm2']."&ns=".$ns."&fT=".$_GET['fT']."&sT=".$_GET['sT']."&aT=".$_GET['aT']."&dT=".$_GET['dT']."&rH=".$_GET['rH']."&Wm=".$_GET['Wm']."&Rm=".$_GET['Rm']."&aV=".$_GET['aV']."&v0=".$_GET['v0']."&v1=".$_GET['v1']."&v2=".$_GET['v2']."&v3=".$_GET['v3']."&v4=".$_GET['v4']."&v5=".$_GET['v5']."&v6=".$_GET['v6']."&GSW=".$_GET['GSW']."&KIB=".$KIB."&qYr=".$qYr."&qMt=".$qMt."&qDy=".$qDy."&q=".time();

//$ses0="?L=".$L."&bn=".$bn."&bv=".$bv."&lgn=".$lgn."&pwd=".$pwd."&usn=".$usn."&pass=".$pass."&cty=".$cty."&cmd=&dd=&dd1s=&dd2s=&ido1=&ido2=&ido1s=&ido2s=&add=60";

// */
/*    !! calibrate.php hates it :
	echo
       	$sess="
	?L=".$L."
	&lgn=".$lgn."
	&pwd=".$pwd."
	&usn=".$usn."
	&pass=".$pass."
	&cty=".$cty."
	&cmd=".$cmd."
	&dd=".$dd."
	&dd1s=".$dd1s."
	&dd2s=".$dd2s."
	&ido1=".$ido1."
	&ido2=".$ido2."
	&ido1s=".$ido1s."
	&ido2s=".$ido2s."
	&add=".$add."
	";
 */
$USER="user.php".$sess;
$LOGIN=$Ldir."login.php".$sess;
$INDEX="index.php".$sess;
//$GIMS="GIMS.php".$sess;
//$XPSLAST="xps_last.php".$sess;
//echo	$GSW;
//echo $_GET[cmd];
if($cmd==9)  {$INDEX=$LOGIN; $cmd=1;}

?>

