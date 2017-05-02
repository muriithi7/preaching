<?php
if(isset($_POST["userName"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $mysqli = new mysqli("localhost","root","","hotel");
    if ($mysqli->connect_error){
        die('Could not connect to database!');
    }
    
    $username = filter_var($_POST["userName"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT userName FROM user WHERE userName=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        die('<img src="imgs/not-available.png" />');
    }else{
        die('<img src="imgs/available.png" />');
    }
}
?>