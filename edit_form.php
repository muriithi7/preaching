<?php

include 'dbConfig.php';
 
if($_GET['edit_id'])
{
$id = $_GET['edit_id'];	
	 $stmt=$dbh->prepare("SELECT * FROM events WHERE event_idm=:event_idm");
	$stmt->execute(array('event_idm'=>$id));	
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
 		<input type='hidden' name='id' value='<?php echo $row['event_idm']; ?>' />
        <tr>
            <td>Event name</td>
            <td><input type='text' name='ename' class='form-control' value='<?php echo $row['ename']; ?>-<?php echo $row['ename']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Event Venue</td>
            <td><input type='text' name='evenue' class='form-control' value='<?php echo $row['evenue']; ?>' required></td>
        </tr>
        <tr>
            <td>Time From</td>
            <td><input type='text' name='tfrom' class='form-control' value='<?php echo $row['tfrom']; ?>' required></td>
        </tr>
        <tr>
            <td>Time To</td>
            <td><input type='text' name='tto' class='form-control' value='<?php echo $row['tto']; ?>' required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type='text' name='des' class='form-control' value='<?php echo $row['des']; ?>' required></td>
        </tr>
         <tr>
            <td>time</td>
            <td><input type='text' name='time' class='form-control' value='<?php echo $row['time']; ?>' required></td>
        </tr>
        <tr>
            <td>eposter</td>
            <td><input type='text' name='eposter' class='form-control' value='<?php echo $row['eposter']; ?>' required></td>
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
     
