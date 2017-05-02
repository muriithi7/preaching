<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{
		
		$about = $_POST['about'];
		$description = $_POST['description'];
		$prayer_type = $_POST['prayer_type'];
		$time = $_POST['time'];
		$user = $_POST['user'];
		$prayedby = $_POST['prayedby'];
		$status = $_POST['status'];

		
		$stmt = $dbh->prepare("INSERT INTO prayers (about, description, prayer_type, time, user, prayedby, status) VALUES( :ab, :de, :pra, :ti, :us, :pr, :st )");

		$stmt->bindParam(":ab", $about);
		$stmt->bindParam(":de", $description);
		$stmt->bindParam(":pra", $prayer_type);
		$stmt->bindParam(":ti", $time);
		$stmt->bindParam(":us", $user);
		$stmt->bindParam(":pr", $prayedby);
		$stmt->bindParam(":st", $status);

		
		
		if($stmt->execute())
		{
			//echo "Successfully updated";
			header("location: prayer.php");
		}
		else{
			echo "Query Problem";
		}
	}

?>