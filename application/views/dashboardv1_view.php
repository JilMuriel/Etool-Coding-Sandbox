<nav class="navbar navbar-expand-lg bg-light shadow">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Etool</a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-item nav-link active dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
	      	  <a class="dropdown-item" href="<?php echo base_url('user/profile'); ?>">Profile</a>
		      <a class="dropdown-item" href="<?php echo base_url('user/logout'); ?>">Logout</i></a>
	   	  </div>
      </li>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-light bg-light justify-content-between shadow">
	<ul class="nav">
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Active</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Link</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Link</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link disabled" href="#">Disabled</a>
	  </li>
	</ul>
</nav>
<div class="container-fluid p-3">
	<div class="pt-3">
		<h4 class="accent"><i class="fa fa-database pr-2" aria-hidden="true"></i>Database</h4>
		<hr>
		<div class="row m-0 p-0">
			<div class="col-3">
				<div class="card shadow">
	  				<div class="card-header post-card-h p-2 border-0">
	  					<div class="d-inline-block text-light">
	  					 <h5 class="pb-0 mb-0">Books_db</h5>
	  					 <p class="p-0 m-0 robot"><small>11/30/2017</small></p>
	  					</div>
	  					 <div class="d-inline-block float-right">
	  					 	<a href="" data-intro="To Edit Projects" class="text-light" data-toggle="modal" data-target="#edit_project"><i class="material-icons">create</i></a>
	  					 	<a class="text-light" data-intro="To Delete Projects" href="" data-toggle="modal" data-target="#remove_project"><i class="material-icons">close</i></a>
	  					 </div>
	  				</div>
	  				<div class="card-body">
	  					<p class="text-justify">Database for books</p>
	  					<a data-intro="This is the name of this site" href="<?php echo base_url('project'); ?>" class="btn btn-outline-primary float-right">Go to project</a>
	  				</div>
	  			</div>
			</div>
		</div>
	</div>

	<div class="pt-5">
		<h4 class="accent"><i class="fa fa-files-o pr-2" aria-hidden="true"></i>Projects</h4>
		<hr>
		<div class="row m-0 p-0">

			<div class="col-3">
				<div class="card shadow">
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
			<div class="col-3">
				<div class="card shadow">
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

		</div>
	</div>
</div>