<div id="page-wrapper">
		<div class="main-page">
 			

<div style="margin-right: 10px;">
	<h2 class="title1">All Groups  	<button style="border: 0px;" data-toggle="modal" data-target="#myModal" class="pull-right btn btn-success ">Create New Group</button>  </h2> 

</div>
<div class="row" style="margin-right: 0px;" id="">
	<div class="col-md-12">
		<table 
	  	class="table"
		 id="groups"
		 data-toggle="table"
		 data-sortable="true"
		 data-search="true"
         data-height="500" 
		 data-show-refresh="true"
		 data-side-pagination="server"
		 data-pagination="true"
		 data-show-columns="true"
		 data-page-list="[10, 20, 50, 100, 200,500,1000]"
		 data-url="<?php echo base_url(); ?>auth/users_groups"

		>
    <thead>
      
    <tr>
    <th data-field="id" data-sortable="true" >Id</th>
    <th data-field="name" data-sortable="true" >Group</th>
    <th data-field="description" data-sortable="true" >Description</th>
    <th data-field="created_on"   >Created On</th>
    <th data-formatter="actionFormatter" data-events="actionEvents" >Action</th> 
    </tr>

    </thead>


</table>

	</div>
</div>


<div id="myModalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit  Group</h4>
      </div>
      <div class="modal-body">
          <form class="form-signin" id="edit_group" method="POST" action="<?php echo  base_url(); ?>auth/create_group">
     
            <input type="text" name="group_name" id="editgroup" class="form-control" placeholder="Group name" required="" autofocus="">
            <input type="text" name="description" id="editdesc" class="form-control" placeholder="Group description" required="">
          <center>
            <button class="btn btn-success " type="submit"><i class="fas fa-sign-in-alt"></i> Edit Group</button>
          </center>  
            
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close_model" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New Group</h4>
      </div>
      <div class="modal-body">
         	<form class="form-signin" id="create_group" method="POST" action="<?php echo  base_url(); ?>auth/create_group">
     
            <input type="text" name="group_name" id="inputEmail" class="form-control" placeholder="Group name" required="" autofocus="">
            <input type="text" name="description" id="inputPassword" class="form-control" placeholder="Group description" required=""><br>
          <center>
          	<button class="btn btn-success " type="submit"><i class="fas fa-sign-in-alt"></i> Create Group</button>
          </center>  
            
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close_model" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <!--footer-->

<style>
  tr{
        font-size: 15px;
  }
  .bootstrap-table{
 
  }
</style>
<script>

 $("#create_group").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           dataType: "json",
           data: form.serialize(), // serializes the form's elements.
           success: function(result)
           {
            $("#groups").bootstrapTable('refresh');
            // JSON.parse(JSON.stringify(result));
             console.log(JSON.parse(JSON.stringify(result)));
             if (result.status==true) {
               $("#create_group")[0].reset();
               $("#close_model").click();
              swal("Created!",  result.message , "success");
            }else{
              swal("Error", result.message , "error");
            } 
           }
         });

});   

	$("#groups").bootstrapTable({
		    search: true,
            showColumns: true,
            showRefresh: true,
            pagination: true,
            pageSize: 10, //specify 5 here
            striped: true,
            syncScrollbars: true
	});



	function actionFormatter(value, row, index) {

    return [
      '<a class="edit_group" data-id="'+row['id']+'" data-name="'+row['name']+'"  data-desc="'+row['description']+'"  data-toggle="modal" data-target="#myModalEdit"  target="_blank" data-href="<?php echo base_url(); ?>auth/edit_group/'+row['id']+'" title="Edit Group"><i class="glyphicon glyphicon-edit"></i></a>',
      '<a class="delete hide" style="color:red;padding: 10px;" href="javascript:" title="Delete User"><i class="fa fa-trash"></i></a>'
    ].join('')

  }


 // update and delete events
  window.actionEvents = {
  'click .delete': function (e, value, row) {
  swal({
  title: "Are you sure want to delete group - "+row['name']+" ?",
  type: "warning",
  text: "<img class='hide' id='del"+row['id']+"' src='<?php echo base_url(); ?>assets/images/loading.gif' style='width:100px;'>",
  html:true,
  showCancelButton: true,
  confirmButtonClass: "btn-success",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
    $("#del"+row['id']).removeClass("hide");
        $.ajax({
          url: "<?php echo base_url(); ?>auth/delete_group_by_admin/"+row['id'],
          dataType: "json",
           success: function(result){
            $("#del"+row['id']).addClass("hide");
            $("#users").bootstrapTable('refresh');
             console.log(JSON.parse(JSON.stringify(result)));
             if (result.status==true) {
              swal("Deleted!",  result.message , "success");
            }else{
              swal("Error", result.message , "error");
            }
            }
     });
    
  } else {
    swal("Cancelled", "Your user delete process was cancelled!", "error");
  }
})
    },
   'click .edit_group': function (e, value, row) {

      var url = "<?php echo base_url(); ?>auth/edit_group/"+row['id'];
      $("#editgroup").val(row['name']);
      $("#editdesc").val(row['description']);
      $("#edit_group").attr("action",url);


   }

  }


</script>

