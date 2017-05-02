<?php

$conn=mysqli_connect('localhost','root','','burec'); 

$uname =htmlspecialchars(trim( $_POST['name']));

$region =htmlspecialchars(trim( $_POST['region']));

$pass = htmlspecialchars(trim ($_POST['pass']));




$sql = "INSERT INTO admin (uname,pass,region) VALUES('$uname','$pass','$region')";

$query=mysqli_query($conn, $sql) or die(mysql_error());

 if($query)
    {
      echo "successfully inserted";
	  header('Location: admins.php?s='.urlencode('successfully inserted'));
    }
   else
    {
     echo "failed";
    }

  

//header("location: login.html");


?>