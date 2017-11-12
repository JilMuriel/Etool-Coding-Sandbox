<nav class="dashboard-nav navbar navbar-expand-lg navbar-dark shadow-super-light   fixed-top">
	<a class="navbar-brand" href="<?php echo base_url('main'); ?>"><h3>Etool</h3></a>
<!-- 	<a href="<?php echo base_url('user/logout') ?>" class="navbar-brand ml-auto">
		<i class="fa fa-user-circle" aria-hidden="true"></i>
	</a> -->
<!-- 	<div class="ml-auto">
		<a href="" class="navbar-brand  ml-auto dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
		</a>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="#">Action</a>
	    <a class="dropdown-item" href="#">Another action</a>
	    <a class="dropdown-item" href="#">Something else here</a>
	  	</div>
 	</div> -->
 		<div class="navbar-nav ml-auto">
	       <li class="nav-item dropdown  mr-1">
		      <a class="nav-item nav-link active dropdown-toggle" data-toggle="dropdown" href="#">
		      	<i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
		      </a>
		      <!-- dropdown items here -->
		      <div class="dropdown-menu dropdown-menu-right">
		      	  <a class="dropdown-item" href="<?php echo base_url('user/profile'); ?>">Profile</a>
			      <a class="dropdown-item" href="<?php echo base_url('user/logout'); ?>">Logout</i></a>
		   	  </div>
		      <!-- end of dropdown -->
	  		</li>
	    </div>
</nav>