<?php
$con=mysqli_connect("localhost","root","","hotel");
if($_REQUEST)
{
	$email 	= $_REQUEST['email'];
	$query = "select * from user where 	email = '".strtolower($email)."'";
	$results = mysqli_query($con, $query) or die('ok');
	
	if(mysqli_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">that email is already taken</div>';
	}
	else
	{
		echo '<div id="Success">Available</div>';
	}
	
}?>