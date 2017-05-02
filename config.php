<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'jofar_jofar';
$dbPassword = 'burec@2016';
$dbName = 'jofar_burec';

//Connect and select the database
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>