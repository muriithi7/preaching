<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

function adminreport(){
require_once 'config.php';

//echo $_POST['search']; 
//echo $_POST['name'];

//$con=mysqli_connect("localhost","root","","jofar_burec");
$name="";
$role="";


if(isset($_POST['name']) && isset($_POST['role'])){ 
$name = $_POST['name'];
$role = $_POST['role'];
}

$sql = "select * from admin_users where username like '%$name%' AND role like '%$role%'";

$data = mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));      
  echo '<br/><br/>';
if (mysqli_num_rows($data) <= 0) {
// no results
echo 'No results found.';
echo '<br/><br/>';
echo 'Check your search criteria you entered please';
echo '<br/><br/>';
//echo 'The car or the place or the date you want to get a report on,no bookings available';
} 
 echo '<table><tr><td>'. 'ID' .'</td>'.'<td>'. 'USERNAME ' .'</td>'.'<td>'. 'PASSWORD ' .'</td>'.'<td>'. 'ROLE ' .'</td><tr>';

while ($row = mysqli_fetch_array ($data,MYSQLI_ASSOC)){  

   echo '<tr><td>'.$row['id'].'</td>'.'<td>'.$row['username'].'</td>'.'<td>'.$row['password'].'</td>'.'<td>'.$row['role'].'</td></tr>';
 
   
    
    
    }
 
}
echo '</table>';
	

?>
</body>
</html>
