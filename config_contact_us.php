<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17586140_root1');
define('DB_PASSWORD', 'Rp{\BX2*SMA9WTD)');
define('DB_NAME', 'id17586140_contact_us');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con == false){
    echo('connection not succesful');
}
?>