<?php
/*Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password)*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');

// Attempt to connect to MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check Connection
if($link === false){
  die("ERROR: Could not Connect." . mysqli_connect_error());
}
 ?>
