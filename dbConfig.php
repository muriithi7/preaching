<?php

	$db_host = "localhost";
	$db_name = "crimplin_churchapp_citamparkie";
	$db_user = "root";
	$db_pass = "";
	   global $dbh;
	   
	   $conn=mysqli_connect('localhost','root','','crimplin_churchapp_citamparkie');
	try{
		
		$dbh = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		
	}


?>