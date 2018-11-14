

	L="<?php  echo $L; ?>";
	lgn="<?php  echo $lgn; ?>";
	pwd="<?php  echo $pwd; ?>";
	usn="<?php  echo $usn; ?>";
	pass="<?php  echo $pass; ?>";
	cty="<?php  echo $cty; ?>";
	regg="<?php  echo $regg; ?>";
	cmd="<?php  echo $cmd; ?>";
	dd="<?php  echo $dd; ?>";
	add="<?php  echo $add; ?>";
	dd1s="<?php  echo $dd1s; ?>";
	dd2s="<?php  echo $dd2s; ?>";
	ido1="<?php  echo $ido1; ?>";
	ido2="<?php  echo $ido2; ?>";
	ido1s="<?php  echo $ido1s; ?>";
	ido2s="<?php  echo $ido2s; ?>";
	stk="<?php  echo $stk; ?>";
	cal="<?php  echo $cal; ?>";
	qYr="<?php  echo $qYr; ?>";
	qMt="<?php  echo $qMt; ?>";
	qDy="<?php  echo $qDy; ?>";
	INDEX="<?php  echo $INDEX;?>"; 

// nd=parseInt((ido2-ido1)/86400);
if((ido2-ido1)>86400) nd=parseInt((ido2-ido1)/86400);
else nd=1;
	
//OK:	document.write('cmd: ');
//OK:	document.write(cmd);
//OK:	document.write(ido1);
