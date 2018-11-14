
<script type="text/javascript">



<?php   include "jsInput.php";?>
//alert("jsess.php")

/*
function href(){
	url="<?php echo $hE; ?>/@/cg/login.php?L=cg&bn="+browserName+"&bv="+fullVersion;
//url="login.php";
return url;
}
 //   <frame name="EMhu" src="+href()+" target="_blank" >
  document.write('<frameset cols="100%" framespacing="0" frameBORDER="no"><frame name="EMsr" src="' + href()+ '" target="_blank" >  </frameset>');
*/



function Refresh(cts){document.write("Welcome to my Web Page cty: <?php  echo $cts;?> ..."+cty+"  add:  "+add); alert("Welcome to my Web Page cty: "+cty+"  add:  "+add);
window.parent.EMhu.location = INDEX+"&cal=&cty="+cty+"&add="+add;}


function Lefh(){document.write("Welcome to my Web Page "+"&ido1="+(ido1-3600*nd)+"&ido2="+(ido2-3600*nd));
window.parent.EMhu.location = INDEX+"&cal=&ido1="+(ido1-3600*nd)+"&ido2="+(ido2-3600*nd)+"#tocI";}
function Righ(){ m = -1 ;document.write("Welcome to my Web Page"+"&ido1="+[ido1-m*3600*nd]+"&ido2="+[ido2-m*3600*nd]);
window.parent.EMhu.location = INDEX+"&cal=&ido1="+[ido1-m*3600*nd]+"&ido2="+[ido2-m*3600*nd]+"#tocI";}

function Lefh6(){document.write("Welcome to my Web Page "+"&ido1="+(ido1-3600*6)+"&ido2="+(ido2-3600*6));
window.parent.EMhu.location = INDEX+"&cal=&ido1="+(ido1-3600*6)+"&ido2="+(ido2-3600*6)+"#tocI";}
function Righ6(){ m = -1 ;document.write("Welcome to my Web Page "+"&ido1="+[ido1-m*3600*6]+"&ido2="+[ido2-m*3600*6]);
window.parent.EMhu.location = INDEX+"&cal=&ido1="+[ido1-m*3600*6]+"&ido2="+[ido2-m*3600*6]+"#tocI";}

function Left(){document.write("Welcome to my Web Page "+INDEX+"&cal=&ido1="+(ido1-86400*nd)+"&ido2="+(ido2-86400*nd));
window.parent.EMhu.location = INDEX+"&cal=&ido1="+(ido1-86400*nd)+"&ido2="+(ido2-86400*nd)+"#tocI";}
function Right(){ m = -1 ;document.write("Welcome to my Web Page "+"&ido1="+[ido1-m*86400*nd]+"&ido2="+[ido2-m*86400*nd]);
window.parent.EMhu.location = INDEX+"&cal=&ido1="+[ido1-m*86400*nd]+"&ido2="+[ido2-m*86400*nd]+"#tocI";}

function Left7(){document.write("Welcome to my Web Page "+"&ido1="+(ido1-7*86400)+"&ido2="+(ido2-7*86400));
window.parent.EMhu.location = INDEX+"&cal=&ido1="+(ido1-7*86400)+"&ido2="+(ido2-7*86400)+"#tocI";}
function Right7(){ m = -1 ;document.write("Welcome to my Web Page "+"&ido1="+(ido1-m*7*86400)+"&ido2="+(ido2-m*7*86400));
window.parent.EMhu.location = INDEX+"&cal=&ido1="+(ido1-m*7*86400)+"&ido2="+(ido2-m*7*86400)+"#tocI";}


function LefSt(){document.write("Welcome to my Web Page "+"&dd="+(dd-2));
window.parent.EMhu.location = INDEX+"&cal=&dd="+(dd-2)+"&ido2="+(ido2-m*60)+"#tocI";}
function RigSt(){ m = -1 ;document.write("Welcome to my Web Page "+"&dd="+(dd-m*2));
window.parent.EMhu.location = INDEX+"&cal=&dd="+(dd-m*2)+"&ido2="+(ido2-m*60)+"#tocI";}
function RigSt1(){ m = -1 ;document.write("Welcome to my Web Page xx "+"&dd="+(dd-m*1));
window.parent.EMhu.location = INDEX+"&cal=&dd="+(dd-m*1)+"&ido2="+(ido2-m*60)+"#tocIx";}

function LefSt10(){document.write("Welcome to my Web Page "+"&dd="+(dd-10));
window.parent.EMhu.location = INDEX+"&cal=&dd="+(dd-10)+"#tocI";}
function RigSt10(){ m = -1 ;document.write("Welcome to my Web Page "+"&dd="+(dd-m*10));
window.parent.EMhu.location = INDEX+"&cal=&dd="+(dd-m*10)+"#tocI";}
function RigSt5(){ m = -1 ;document.write("Welcome to my Web Page "+"&dd="+(dd-m*5));
window.parent.EMhu.location = INDEX+"&cal=&dd="+(dd-m*5)+"#tocI";}




	function LeftM()
{
document.write("Welcome to my Web Page "+INDEX+(cty-1));	
window.parent.EMhu.location = INDEX+"&cal=&cty="+(cty-1);
}

	function RightM()
{ m = -1 ;
document.write("Welcome to my Web Page "+INDEX+(cty-m*1));	
window.parent.EMhu.location = INDEX+"&cal=&cty="+(cty-m*1);
}




	function LeftR()
{	if(regg==0) regg=6;
document.write("Welcome to my Web Page "+INDEX+(regg-1));	
window.parent.EMhu.location = INDEX+"&cal=&régg="+(regg-1);
}

	function RightR()
{	 m = -1 ;
	if(regg==5) regg=0;
document.write("Welcome to my Web Page "+INDEX+(regg-m*1));	
window.parent.EMhu.location = INDEX+"&cal=&régg="+(regg-m*1);
}



	function LeftG()
{
document.write("Welcome to my Web Page "+(ido2-add)+" add="+add);
<?php  // sleep(33);
$time1Y = $time1Y-$add;
?>	
window.parent.EMhu.location = INDEX+"&cal=&ido2="+(ido2-add);
}

	function RightG()
{ m = -1 ;
document.write("Welcome to my Web Page "+(ido2-m*add));	
window.parent.EMhu.location = INDEX+"&cal=&ido2="+(ido2-m*add);
}


	function megnezem(dd,stk)
{// alert(dd);
document.write("Welcome to my Web Page ");	
//window.parent.EMhu.location = INDEX+"&cal=&dd="+dd+"&stk="+stk+"&cmd=10";
window.parent.EMhu.location = INDEX+"&cal=&dd="+dd+"&stk="+stk+"&cmd=10";
}




function LeftK(){
window.parent.EMhu.location = INDEX+"&cal=&cmd=10&stk="+(stk-1);}
function RightK(){ m = -1 ;
window.parent.EMhu.location = INDEX+"&cal=&cmd=10&stk="+(stk-m*1);}




function LeftU(){
window.parent.EMhu.location = INDEX+"&cmd=5&dd="+dd+"&uid="+(usrid-1)+"#toLs";}
function RightU(){ m = -1 ;
window.parent.EMhu.location = INDEX+"&cmd=5&dd="+dd+"&uid="+[usrid-m*1]+"#toLs";}

function LeftUU(){
window.parent.EMhu.location = INDEX+"&cmd=5&dd="+dd+"&uid=6#toLs";}
function RightUU(){ m = -1 ;
window.parent.EMhu.location = INDEX+"&cmd=5&dd="+dd+"&uid=109#toLs";}





</script>


