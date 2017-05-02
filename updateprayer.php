<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$about = $_POST['about'];
		$description = $_POST['description'];
		$prayer_type = $_POST['prayer_type'];
		$time = $_POST['time'];
		$user = $_POST['user'];
		$prayedby = $_POST['prayedby'];
		$status = $_POST['status'];

		
		$stmt = $dbh->prepare("UPDATE prayers SET about=:ab, description=:de , prayer_type=:pr, time=:ti, user=:us, prayedby=:pra, status=:st WHERE prayer_id=:id");
		$stmt->bindParam(":ab", $about);
		$stmt->bindParam(":de", $description);
		$stmt->bindParam(":pr", $prayer_type);
		$stmt->bindParam(":ti", $time);
		$stmt->bindParam(":us", $user);
		$stmt->bindParam(":pra", $prayedby);
		$stmt->bindParam(":st", $status);

		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>