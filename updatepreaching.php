<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{

		

		$id = $_POST['preacherId'];

		
		$title = $_FILES['title'];

		$preached = $_POST['preachedOn'];

		$by = $_POST['preachedBy'];
		//$streams = $_POST['streams'];	
	

		if(isset($_FILES['title'])){

			$title = $_FILES['title']['name'];
	       //$size = $_FILES['file']['size']
	        //$type = $_FILES['file']['type']
	        //echo $name;


	         $tmp_name = $_FILES['title']['tmp_name'];
	        $error = $_FILES['title']['error'];

			if (isset ($title)) {
			    if (!empty($title)) {

				    $location = 'cira/';

					    if  (move_uploaded_file($tmp_name, $location.$title)){
					$stmt = $dbh->prepare("UPDATE preachings SET title=:ti, preached_on=:pr , `by`=:by WHERE preaching_id=:id");
					$stmt->bindParam(":ti", $title);
					$stmt->bindParam(":pr", $preached);
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
			}
		}
	}

?>