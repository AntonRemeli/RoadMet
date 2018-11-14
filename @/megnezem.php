



<?php   include("mid_fej.php"); ?>
<?php   include("mid_dat.php"); ?>


<?php  

$MOD="mehnezem.php";
include "LM.php";
include "log.php";


?>

<table>
<a href="<?php  print($INDEX."&cmd=1&dd=".$dd."&stk=".$stk);?>" title='<?php  echo $TESCOfeliratra?>' target="_self"><big><big><big><?php  echo $TESCOkamera?></big></big></big></a><br>
<!--small>( legalább 1GB memórával kell rendelkeznie a számítógépnek ahhoz, hogy egy nap 300 képét gyorsan meg lehessen tekinteni! )<br> Linux oprendszer már 128MB memóriával is kellõ sebességgel jeleníti meg a képeket. </small-->
<?php   

//define the path as relative
$path =  "/var/www/html/42es/TescoJPG/";

//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

//echo "Directory Listing of $path <img src='hr/cesting-logo.gif' ><br/>";
$n=0;
$p=0;

//running the while loop
while ($file = readdir($dir_handle)) 
{
	$n++;
	$fileList[$n]=$file; //   echo $file."<br/>";
}

//echo "Reverse Directory Listing of $path<br/>";
if($dd=='9205') { for ($k=$n;$p<36-$stk*36;$k--)   {   if($fileList[$k][1]=='2'){$p++; $List[$p]=$fileList[$k];}   } ;}
if($dd=='9522') { for ($k=$n;$p<36-$stk*36;$k--)   {   if($fileList[$k][2]=='2'){$p++; $List[$p]=$fileList[$k];}   } ;}
if($dd=='9533') { for ($k=$n;$p<36-$stk*36;$k--)   {   if($fileList[$k][3]=='3'){$p++; $List[$p]=$fileList[$k];}   } ;}
    
 
//closing the directory
closedir($dir_handle);
$pp=0;
$qq=0;
	
 for($p=36-$stk*36;$p>36-$stk*36-36;$p--)
 { $pp++;
 $qq++;
 $ppyr[$pp]=$List[$p][5].''.$List[$p][6].''.$List[$p][7].''.$List[$p][8];
 $ppmt[$pp]=$List[$p][9].''.$List[$p][10];
 $ppdy[$pp]=$List[$p][11].''.$List[$p][12];
 $pphr[$pp]=$List[$p][13].''.$List[$p][14];
 $ppmi[$pp]=$List[$p][15].''.$List[$p][16];
if($pp==36){$pp1yr=$List[$p][5].''.$List[$p][6].''.$List[$p][7].''.$List[$p][8];$pp1mt=$List[$p][9].''.$List[$p][10];$pp1dy=$List[$p][11].''.$List[$p][12];$pp1hr=$List[$p][13].''.$List[$p][14];$pp1mi=$List[$p][15].''.$List[$p][16];}
if($pp==1){$pp0yr=$List[$p][5].''.$List[$p][6].''.$List[$p][7].''.$List[$p][8];$pp0mt=$List[$p][9].''.$List[$p][10];$pp0dy=$List[$p][11].''.$List[$p][12];$pp0hr=$List[$p][13].''.$List[$p][14];$pp0mi=$List[$p][15].''.$List[$p][16];}
include "LM.php";
$datmdH[$qq]=$datemdH[$pp];
?>

   
	<a href="../TescoJPG/<?php   echo $List[$p];?>" target ="_blank"   title='<?php  echo $List[$p]; ?>' target="_self" >

<img width="77" height="60" border="0"  src="../TescoJPG/<?php   echo $List[$p];?>"
   onmouseover="this.T_LEFT=true;this.T_WIDTH=500; return escape('<img  src=../TescoJPG/<?php   echo $List[$p];?> >')" />
</a>
<?php  
if($qq==9){echo '<br>';
	$q=0;
for($q=1;$q<10;$q++){echo '<small><small>&nbsp;&nbsp; &nbsp; &nbsp;   '.$datmdH[$q].'&nbsp;&nbsp;&nbsp; </small></small>';}
$qq=0;
}
  }
//include "LM.php";

?>





 <br><a onClick="LeftK()" title='<?php  echo $TESCOvisszalapozás." ".$stk?>' target="_self"><big><?php  echo $visszalapozás;?></big></a>
 <a href="<?php  print($INDEX."&cmd=10&stk=$stk");?>" title='<?php  echo $TESCOfrissítéséhez?>' target="_self"><big><?php  echo $képek." ".$dateYmdH[1]."".$tõl."".$date1Hi."".$ig?>
</big></a>
<a onClick="RightK()" title='<?php  echo $TESCOújabb." ".$stk?>' target="_self"><big><?php  echo $elõrelapozás;?></big></a><br><br><br>




</table>



