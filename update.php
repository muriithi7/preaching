<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$ename = $_POST['ename'];
		$evenue = $_POST['evenue'];
		$tfrom = $_POST['tfrom'];
		$tto = $_POST['tto'];
		$des = $_POST['des'];
		$time = $_POST['time'];
		$eposter = $_POST['eposter'];

		
		$stmt = $dbh->prepare("UPDATE events SET ename=:en, evenue=:ev , tfrom=:tf, tto=:tto, des=:des, time=:ti, eposter=:ep WHERE event_idm=:id");
		$stmt->bindParam(":en", $ename);
		$stmt->bindParam(":ev", $evenue);
		$stmt->bindParam(":tf", $tfrom);
		$stmt->bindParam(":tto", $tto);
		$stmt->bindParam(":des", $des);
		$stmt->bindParam(":ti", $time);
		$stmt->bindParam(":ep", $eposter);

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