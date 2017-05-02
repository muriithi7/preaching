<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

function payment(){
require_once 'config.php';

//echo $_POST['search']; 
//echo $_POST['name'];

//$con=mysqli_connect("localhost","root","","jofar_burec");
$number="";
$status="";
$time="";


if(isset($_POST['number']) && isset($_POST['status']) && isset($_POST['time'])){ 
$number = $_POST['number'];
$status = $_POST['status'];
$time =$_POST['time'];
}

$sql = "select * from payments where item_number like '%$number%' AND payment_status like '%$status%' AND 	payment_time like '%$time%'";

$data = mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));      
  echo '<br/><br/>';
if (mysqli_num_rows($data) <= 0) {
// no results
echo 'No results found.';
echo '<br/><br/>';
echo 'Check your report criteria you entered please';
echo '<br/><br/>';
//echo 'The car or the place or the date you want to get a report on,no bookings available';
} 
 echo '<table><tr><th>'. 'Payment Id' .'</th>'.'<th>'. 'Item Number ' .'</th>'.'<th>'. 'Tax Id ' .'</th>'.'<th>'. 'Payment Gross ' .'</th>'.'<th>'. 'Currency Code ' .'</th>'.'<th>'. 'Payment Status ' .'</th>'.'<th>'. 'Payment Time ' .'</th></tr>';	
	

while ($row = mysqli_fetch_array ($data,MYSQLI_ASSOC)){  	

echo '<tr><td>'.$row['payment_id'].'</td>'.'<td>'.$row['item_number'].'</td>'.'<td>'.$row['txn_id'].'</td>'.'<td>'.$row['payment_gross'].'</td>'.'<td>'.$row['currency_code'].'</td>'.'<td>'.$row['payment_status'].'</td>'.'<td>'.$row['payment_time'].'</td></tr>';

    
    
    
    }
 
}

echo '</table>';

?>
</body>
</html>
