<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', ' '); //enter your username here
define('DB_PASSWORD', ' '); //enter your databse password here
define('DB_NAME', ' '); //enter your databse name here

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con == false){
    echo('connection not succesful');
}
?>
