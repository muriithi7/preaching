<?php

include 'dbConfig.php';
 
if($_GET['edit_id'])
{
$id = $_GET['edit_id'];	
	 $stmt=$dbh->prepare("SELECT * FROM preachings WHERE preaching_id=:preaching_id");
	$stmt->execute(array('preaching_id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='' enctype="multipart/form-data">
 
    <table class='table table-bordered table-responsive'>
 		<input type='hidden' name='id' value='<?php echo $row['preaching_id']; ?>' />
        <tr>
            <td>Title</td>
            <td><input type='file' name='title' class='form-control' value='<?php echo $row['title']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Preached On</td>
            <td><input type='text' name='preached_on' class='form-control' value='<?php echo $row['preached_on']; ?>' required></td>
        </tr>
        <tr>
            <td>By</td>
            <td><input type='text' name='by' class='form-control' value='<?php echo $row['by']; ?>' required></td>
        </tr>

         
        <tr>
            <td colspan="4">
            <button type="button" class="btn btn-primary" name="btn-update" id="btn-update" value="btn-update">
    		<span class="glyphicon glyphicon-plus"></span>Edit
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
