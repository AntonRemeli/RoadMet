<?php  

if (isset($_GET['Submit']))
{	
	$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

	$date = date("Y-m-d G:i");
	$time = time();
	$name = $_GET['name'];
	$county = $_GET['county'];
	$type = $_GET['type'];
	$contact = $_GET['contact'];
	$description = $_GET['description'];
	
	$user = $_GET['user'];

	$dd = $_GET['dd'];
	
	if (!isset($dd))
	{
		$dd=9999;	
	}			

	if (($dd<1) || ($dd>9999))
	{
		$dd=9999;	
	}	
				   
	$query = "INSERT INTO report SET date='$date', time=$time, station_id=$dd, name='$name', county='$county', type=$type, contact='$contact', description='$description', user='$user'";
	$res = mysqli_query($sql_connect,$query);

	
// PZ 3281 fali eMail za reklamaciju  "samo još dodajte da nakon što kliknem pošalji, mail ode na Vedrana, Danijela, Vas i mene" uradjeno,  testirano OK


$to = "remeli@freemail.hu";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
mail($to,$subject,$message);
echo "Mail Sent.";


$email0 =	 mail ( "eurmet@gmail.com", "Reklamacija od korisnika CestaMet sustava", "datum: ".$date." UnixTime: ".$time." 
  broj stanice: 	".$dd." 
  tip reklamacije: 	".$type."
  ime: 			".$name."
  korisnik: 		".$user." 
  kontakt: 		".$contact." 
  adresa: 		".$county." 
 
  tekst reklamacije:

  ".$description."", "From: CestaMet_NoReplay" ) ;

	
$email00 =	 mail ( "remelianton@gmail.com", "Reklamacija od korisnika CestaMet sustava", "datum: ".$date." UnixTime: ".$time." 
  broj stanice: 	".$dd." 
  tip reklamacije: 	".$type."
  ime: 			".$name."
  korisnik: 		".$user." 
  kontakt: 		".$contact." 
  adresa: 		".$county." 
 
  tekst reklamacije:

  ".$description."", "From: CestaMet_NoReplay" ) ;


	
	//echo $query;
	
 mysqli_close ($sql_connect);
}
include "LM.php";
//header("Location: index.php".$sess."&cmd=1")
header("Location: ".$INDEX."&cmd=1")

?>
