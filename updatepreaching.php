<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{
		

		$id = $_POST['id'];
		
		$title = $_FILES['title'];

		$preached = $_POST['preached_on'];

		$by = $_POST['by'];
		//$streams = $_POST['streams'];	

		echo $title;	

		//if(isset($_FILES['title'])){

		//$name = $_FILES['title']['name'];
       //$size = $_FILES['file']['size']
        //$type = $_FILES['file']['type']
        //echo $name;


        /* $tmp_name = $_FILES['title']['tmp_name'];
        $error = $_FILES['title']['error'];

		if (isset ($name)) {
		    if (!empty($name)) {

		    $location = 'cira/';

		    if  (move_uploaded_file($tmp_name, $location.$name)){
		$stmt = $dbh->prepare("UPDATE preachings SET title=:ti, preached_on=:pr , `by`=:by WHERE preaching_id=:id");
		$stmt->bindParam(":ti", $name);
		$stmt->bindParam(":pr", $preached_on);
		$stmt->bindParam(":by", $by);
		

		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		}
	}
	}*/
}
	



?>