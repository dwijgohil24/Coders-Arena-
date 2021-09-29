<?php
/*
This file contains database configuration 
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', ' '); //enter your username here
define('DB_PASSWORD', ' '); //enter your own database password here
define('DB_NAME', ' '); // enter your own databse name here

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    echo('connection not succesful');
}
?>
