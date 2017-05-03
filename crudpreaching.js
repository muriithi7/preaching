// JavaScript Document

$(document).ready(function(){
	
	/* Data Insert Starts Here */
	$(document).on('submit', '#emp-SaveForm', function() {
	  
	   $.post("create.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#emp-SaveForm")[0].reset();
		     });	
		 });   
	     return false;
    });
	/* Data Insert Ends Here */
	
	
	/* Data Delete Starts Here */
	$(".delete-link").click(function()
	{
		
		var id = $(this).attr("id");
		var del_id = id;
		var parent = $(this).parent("td").parent("tr");
		if(confirm('Please take the step with much Precaution. This will permanently delete this Preaching no = ' +del_id ))
		{
			$.post('deletepreaching.php', {'del_id':del_id}, function(data)
			{
				parent.fadeOut('slow');
			});	
		}
		return false;
	});
	/* Data Delete Ends Here */
	
	// /* Get Edit ID  */
	// $(".edit-link").click(function()
	// {
	// 	var id = $(this).attr("id");
	// 	var edit_id = id;
    //
	// 	console.log(edit_id);
    //
    //
	//
	// 	if(confirm('Sure to Edit ID No = ' +edit_id))
	// 	{
	// 		$(".content-loader").fadeOut('slow', function()
	// 		 {
	// 			$(".content-loader").fadeIn('slow');
	// 			$(".content-loader").load('edit_formpreaching.php?edit_id='+edit_id);
	// 			$("#btn-add").hide();
	// 			$("#btn-view").show();
	// 		});
	// 	}
	// 	return false;
	// });

	$('.edit-link').on('click',function (e) {
		e.preventDefault();
		//I have fetched the parameters from the datatable by traversing the dom elements.
        var preacherId = event.target.parentNode.parentNode.parentNode.children[0].textContent;
        var title = event.target.parentNode.parentNode.parentNode.children[1].textContent;
        var preachedOn = event.target.parentNode.parentNode.parentNode.children[2].textContent;
        var preachBy = event.target.parentNode.parentNode.parentNode.children[3].textContent;
		//Adding the parameters to the inputs.
        $('#preacherId').val(preacherId);
        $('#preachedOn').val(preachedOn);
        $('#preachedBy').val(preachBy);
		//Displaying the modal with the parameters
		$('#cira').modal();
	});
	//This button can be used to perform an ajax call.

    $('#btnPreachingUpdate').on('click', function (e) {
        e.preventDefault();
		var preacherId = $('#preacherId').val();
        var title = $('#title')[0].files[0];
        var preachedOn = $('#preachedOn').val();
        var preachedBy =$('#preachedBy').val();

           
           // console.log(title);     
     var form_data = new FormData();                  // Creating object of FormData class
    form_data.append("title", title)      ;        // Appending parameter named file with properties of file_field to form_data
    form_data.append("preacherId", preacherId)   ;    
    form_data.append("preachedBy", preachedBy)   ;    
    form_data.append("preachedOn", preachedOn)  ;

console.log(JSON.stringify(form_data));

$.ajax({
        url: "updatepreaching.php",
        type: "POST",
        data: form_data,
        processData: false,
		contentType: false, // add a flag
        success: function(data, textStatus, jqXHR){
           alert(data);
           //Also remove the above. alert/
          //put an if statement to close the modal if successful

          //if(response condition){
			//$('#cira').modal('hide');
          	//}
                   },
        error: function (jqXHR, textStatus, errorThrown){
            alert('Error!');
        }
    });


        //$('#cira').modal('hide');
        //
        //window.location.href="updatepreaching.php";
		//you can write your ajax code here.
    });


	/* Get Edit ID  */
	
	// /* Update Record  */
	// $(document).on('submit', '#emp-UpdateForm', function() {
	 
	//    $.post("updatepreaching.php", $(this).serialize())
 //        .done(function(data){
	// 		$("#dis").fadeOut();
	// 		$("#dis").fadeIn('slow', function(){
	// 		     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
	// 		     $("#emp-UpdateForm")[0].reset();
	// 			/*$("body").fadeOut('slow', function()
	// 			 {
	// 				$("body").fadeOut('slow');
	// 				window.location.href="Preaching.php";
	// 			 });	*/		 
	// 	     });	
	// 	});   
	//     return false;
 //    });
	// /* Update Record  */

	
});
