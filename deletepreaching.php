<?php
include_once 'dbConfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$dbh->prepare("DELETE FROM preachings WHERE preaching_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>