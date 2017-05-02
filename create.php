<?php
require_once 'dbConfig.php';

	
	if($_POST)
	{
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		
		try{
			
			$stmt = $dbh->prepare("INSERT INTO admin_users(username,role) VALUES(:ename, :edept)");
			$stmt->bindParam(":ename", $emp_name);
			$stmt->bindParam(":edept", $emp_dept);
		
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>