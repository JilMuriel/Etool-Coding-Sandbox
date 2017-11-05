<nav class="dashboard-nav navbar navbar-expand-lg navbar-dark shadow-super-light   fixed-top">
	<a class="navbar-brand" href="#"><h1>Etool</h1></a>
</nav>
<div class="Dashboard">
	 <div class="container-fluid ml-0 ">
      <div class="row">
        <nav class="d-none d-sm-block sidebar shadow-super-light">
          <ul class="nav nav-pills flex-column text-light">
            <li class="nav-item p-2 bg-dark">
              <a class="nav-link" href="#">
              	<i class="material-icons">home</i>
              </a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link" href="<?php echo base_url('dashboard/create_project'); ?>">
              	<i class="material-icons">add_box</i>
              </a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link" href="#">
              	<i class="material-icons">developer_board</i>
              </a>
            </li>
          </ul>
        </nav>

        <main role="main" class="right-nav w-100 pt-3 pl-3">
          <div class="content-dashboard pt-1 pl-4 pr-4">
          	<h2 class="pt-2 ml-3 mr-3 d-inline-block">My Projects</h2>
          	<div class="form-group ml-auto d-inline-block float-right mt-2 mr-3">
			    <input type="text" class="form-control" placeholder="Search">
			</div>
          	<hr class="ml-3 mr-3">
          	<div class="row m-0 pb-3">
          		<div class="col-3 pb-3">
          			<div class="card">
          				<div class="card-header post-card-h p-2 border-0">
          					<div class="d-inline-block text-light">
          					 <h5 class="pb-0 mb-0">Project Title</h5>
          					 <p class="p-0 m-0 robot"><small>11/5/2017</small></p>
          					</div>
          					 <div class="d-inline-block float-right">
          					 	<a href="" class="text-light" data-toggle="modal" data-target="#edit_project"><i class="material-icons">create</i></a>
          					 	<a class="text-light" href="" data-toggle="modal" data-target="#remove_project"><i class="material-icons">close</i></a>
          					 </div>
          				</div>
          				<div class="card-body">
          					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
          					<button type="button" class="btn btn-outline-primary float-right">Go to project</button>
          				</div>
          			</div>
          		</div>
          		<div class="col-3 pb-3">
          			<div class="card">
          				<div class="card-header post-card-h p-2 border-0">
          					<div class="d-inline-block text-light">
          					 <h5 class="pb-0 mb-0">Project Title</h5>
          					 <p class="p-0 m-0 robot"><small>11/5/2017</small></p>
          					</div>
          					 <div class="d-inline-block float-right">
          					 	<a href="" class="text-light" data-toggle="modal" data-target="#edit_project"><i class="material-icons">create</i></a>
          					 	<a class="text-light" href="" data-toggle="modal" data-target="#remove_project"><i class="material-icons">close</i></a>
          					 </div>
          				</div>
          				<div class="card-body">
          					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
          					<button type="button" class="btn btn-outline-primary float-right">Go to project</button>
          				</div>
          			</div>
          		</div>

          	</div>
          </div>
        </main>
      </div>
    </div>
</div>