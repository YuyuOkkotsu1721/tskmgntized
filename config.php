<?php
define('DB_SERVER', 'otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'wh6san4fkk2o66qp');
define('DB_PASSWORD', 'mf43izps0pih74lz');
define('DB_NAME', 'jpdb11jbga05zt8q');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
