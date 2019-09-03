<div id="page-wrapper">
		<div class="main-page">
 			

<div style="margin-right: 10px;">
	<h2 class="title1">Settings<button style="border: 0px;" data-toggle="modal" data-target="#myModal" class="pull-right btn btn-success ">Create New Group</button>  </h2> 

</div>
<div class="row" style="margin-right: 0px;" id="">
	<div class="col-md-12">
 
<div class="container-fluid"> </div>

<div id="exTab2" class="container-fluid"> 
<ul class="nav nav-tabs">
      <li class="active">
      <a  href="#1" data-toggle="tab">Database</a>
      </li>
      <li><a href="#2" data-toggle="tab">Mail</a>
      </li>
      <li><a href="#3" data-toggle="tab">Solution</a>
      </li>
    </ul>

      <div class="tab-content ">
        <div class="tab-pane active" id="1">
          <h3>This sesstion will have DB settings</h3>
        </div>
        <div class="tab-pane" id="2">
          <h3>This sesstion will have Mail settings</h3>
        </div>
        <div class="tab-pane" id="3">
          <h3>add clearfix to tab-content (see the css)</h3>
        </div>
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
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
         	           <form class="form-signin" method="POST" action="<?php echo  base_url(); ?>auth/create_group">
     
            <input type="text" name="group_name" id="inputEmail" class="form-control" placeholder="Group name" required="" autofocus="">
            <input type="text" name="description" id="inputPassword" class="form-control" placeholder="Group description" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Create Group</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <!--footer-->
 
