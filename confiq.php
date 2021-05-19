<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpass');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'db');


// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn === false){
    dir('Error: Cannot connect');
}
else{
    echo("all fine in confiq");
}

?>
