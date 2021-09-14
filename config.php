<?php
/*
This file contains database configuration 
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17586140_root');
define('DB_PASSWORD', 'SH9T\E$fvCfnNP!9');
define('DB_NAME', 'id17586140_login_signup');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    echo('connection not succesful');
}
?>