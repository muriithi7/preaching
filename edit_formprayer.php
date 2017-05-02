<?php

include 'dbConfig.php';
 
if($_GET['edit_id'])
{
$id = $_GET['edit_id'];	
	 $stmt=$dbh->prepare("SELECT * FROM prayers WHERE prayer_id=:prayer_id");
	$stmt->execute(array('prayer_id'=>$id));	
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
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered table-responsive'>
 		<input type='hidden' name='id' value='<?php echo $row['prayer_id']; ?>' />
        <tr>
            <td>About</td>
            <td><input type='text' name='about' class='form-control' value='<?php echo $row['about']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><input type='text' name='description' class='form-control' value='<?php echo $row['description']; ?>' required></td>
        </tr>
        <tr>
            <td>Prayer_type</td>
            <td><input type='text' name='prayer_type' class='form-control' value='<?php echo $row['prayer_type']; ?>' required></td>
        </tr>
         <tr>
            <td>Time</td>
            <td><input type='text' name='time' class='form-control' value='<?php echo $row['time']; ?>' required></td>
        </tr>
       <tr>
            <td>User</td>
            <td><input type='text' name='user' class='form-control' value='<?php echo $row['user']; ?>' required></td>
        </tr>
       <tr>
            <td>Prayed By</td>
            <td><input type='text' name='prayedby' class='form-control' value='<?php echo $row['prayedby']; ?>' required></td>
        </tr>
       <tr>
            <td>Status</td>
            <td><input type='text' name='status' class='form-control' value='<?php echo $row['status']; ?>' required></td>
        </tr>
        
 
 
    
 
        <tr>
            <td colspan="4">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span>Edit
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
