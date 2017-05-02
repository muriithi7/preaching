<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<?php

$conn=mysqli_connect('localhost','root','','burec');
$member =htmlspecialchars(trim( $_POST['member']));

$name =htmlspecialchars(trim( $_POST['name']));

$uname = htmlspecialchars(trim ($_POST['uname']));

$dob = htmlspecialchars(trim($_POST['dob']));

$place =htmlspecialchars(trim( $_POST['place']));

$province =htmlspecialchars(trim( $_POST['province']));

$proffesion =htmlspecialchars(trim( $_POST['proffesion']));

$territory =htmlspecialchars(trim( $_POST['territory']));

$history =htmlspecialchars(trim( $_POST['history']));

$email = htmlspecialchars(trim($_POST['email']));

$phone = htmlspecialchars(trim($_POST['phone']));

$id = htmlspecialchars(trim($_POST['id']));

$nation = htmlspecialchars(trim($_POST['nation']));

$level =htmlspecialchars(trim( $_POST['level'])); 

$address =htmlspecialchars(trim( $_POST['address']));

$password = htmlspecialchars(trim($_POST['password']));

$sql = "INSERT INTO  registration(member,name,uname,dob,place,province,proffesion,territory,history,email,phone,id,nation,level,address,password) VALUES('$member','$name','$uname','$dob','$place','$province','$proffesion','$territory','$history','$email','$phone','$id','$nation','$level','$address','$password')";


$query=mysqli_query($conn, $sql) or die(mysql_error());

 if($query)
    {
      echo "successfully inserted";
	 // header('Location: login.php?s='.urlencode('successfully inserted'));
    }
   else
    {
     echo "failed";
    }

  

//header("location: login.html");


?>
</body>
</html>
