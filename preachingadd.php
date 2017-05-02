<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{
		
		//$title = $_POST['title'];
		$preached = $_POST['preached'];
		
		$by = $_POST['by'];
		//$streams = $_POST['streams'];

		$name = $_FILES["title"]["name"];
       //$size = $_FILES['file']['size']
        //$type = $_FILES['file']['type']

         $tmp_name = $_FILES['title']['tmp_name'];
        $error = $_FILES['title']['error'];

		if (isset ($name)) {
		    if (!empty($name)) {

		    $location = 'cira/';

		    if  (move_uploaded_file($tmp_name, $location.$name)){
		        //$stmt = $dbh->prepare("INSERT INTO preaching (title, preached_on, by, streams) VALUES( :ti, :pr, :by, :st )");
		$stmt = $dbh->prepare("INSERT INTO preachings (title, preached_on, `by`) VALUES( :ti, :pr, :by)");

		$stmt->bindParam(":ti", $name);
		$stmt->bindParam(":pr", $preached);
		$stmt->bindParam(":by", $by);
		//$stmt->bindParam(":st", $streams);		
		
		if($stmt->execute())
		{
			//echo "Successfully updated";
			header("location: preaching.php");
		}
		else{
			echo "Query Problem";
		}   
		        }

		        } else {
		          echo 'please choose a file';
		          }
		    }
		}


?>