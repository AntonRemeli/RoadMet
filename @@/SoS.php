<?php  

$gg=0;
while ($gg<50)
{
/*
//********Socket Server*********************/

set_time_limit (0);
// Set the ip and port we will listen on
$address = '127.0.0.1';
$port = 6789;
// echo phpinfo();
// Create a TCP Stream socket

//  $sock = socket_create(AF_INET, SOCK_STREAM, 0); // 0 for  SQL_TCP
// $sock = socket_create(AF_UNIX, SOCK_RAW, 0); // 0 for  SQL_TCP
// echo socket_last_error();
// Bind the socket to an address/port
/*
socket_bind($sock, 0, $port) or die('Could not bind to address');  //0 for localhost
// Start listening for connections
socket_listen($sock);
//loop and listen
while (true) {
//// Accept incoming  requests and handle them as child processes 
$client =  socket_accept($sock);
// Read the input  from the client – 1024000 bytes
$input =  socket_read($client, 1024000);
// Strip all white  spaces from input
$output =  ereg_replace("[ \t\n\r]","",$input)."\0";
$message=explode('=',$output);
if(count($message)==2)
{
if(get_new_order()) $response='NEW:1';
else  $response='NEW:0';
}
else $response='NEW:0';
// Display output  back to client
socket_write($client, $response);
socket_close($client);
}
// Close the master sockets
socket_close($sock);*/

echo "  ".$gg++;
sleep(3);
  echo "\n".$xps_time[$stNo] = date("Y.m.d",time()+22)." ".date("H:i:s",time());
 
echo "               file written to";
}



?>
