          	<h2 class=" ml-3 mr-3 d-inline-block">My Projects</h2>
          	<div class="form-group ml-auto d-inline-block float-right mt-2 mr-3">
			    <input type="text" class="form-control" placeholder="Search" data-intro="Search for Projects here">
			</div>
          	<hr class="ml-3 mr-3">
          	<div class="row m-0 pb-3">
          		<div class="col-3 pb-3">
          			<div class="card">
          				<div class="card-header post-card-h p-2 border-0">
          					<div class="d-inline-block text-light">
          					 <h5 class="pb-0 mb-0">Code Test</h5>
          					 <p class="p-0 m-0 robot"><small>11/12/2017</small></p>
          					</div>
          					 <div class="d-inline-block float-right">
          					 	<a href="" data-intro="To Edit Projects" class="text-light" data-toggle="modal" data-target="#edit_project"><i class="material-icons">create</i></a>
          					 	<a class="text-light" data-intro="To Delete Projects" href="" data-toggle="modal" data-target="#remove_project"><i class="material-icons">close</i></a>
          					 </div>
          				</div>
          				<div class="card-body">
          					<p class="text-justify">Basic testing of Mysql code</p>
          					<a data-intro="This is the name of this site" href="<?php echo base_url('project'); ?>" class="btn btn-outline-primary float-right">Go to project</a>
          				</div>
          			</div>
          		</div>
          		<div class="col-3 pb-3">
          			<div class="card">
          				<div class="card-header post-card-h p-2 border-0">
          					<div class="d-inline-block text-light">
          					 <h5 class="pb-0 mb-0">Book recording activity</h5>
          					 <p class="p-0 m-0 robot"><small>11/12/2017</small></p>
          					</div>
          					 <div class="d-inline-block float-right">
          					 	<a href="" class="text-light" data-toggle="modal" data-target="#edit_project"><i class="material-icons">create</i></a>
          					 	<a class="text-light" href="" data-toggle="modal" data-target="#remove_project"><i class="material-icons">close</i></a>
          					 </div>
          				</div>
          				<div class="card-body">
          					<p class="text-justify">Basic CRUD with books</p>
          					<button type="button" class="btn btn-outline-primary float-right" href="<?php echo base_url('project'); ?>">Go to project</button>
          				</div>
          			</div>
          		</div>

          	</div>
               <a href="javascript:void(0)" onclick="introJs().start();" class="page-scroll btn btn-xl btn btn-info ml-3">Tour</a>