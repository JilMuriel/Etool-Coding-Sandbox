<nav class="dashboard-nav navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="<?php echo base_url('main'); ?>"><h3>Etool</h3></a>
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
<div class="backend-editor">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-super-light ">
    <ul class="nav mr-auto ml-3">
      <h5 class="nav-item m-auto">Project Title</h5>
    </ul>
    <ul class="nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link btn btn-custom" href="#">New Project</a>
      </li>
      <li class="nav-item ml-2 mr-2">
        <a class="nav-link btn btn-custom" href="#">Save</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-custom" href="#">Help</a>
      </li>
    </ul>
  </nav>
  <div class="coding-ground pt-3 h-100">
    <div class="row m-0 p-0">
      <div class="col-2">
        <div class="card">

            
            <div id="accordion" role="tablist">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mb-0">
                    <small><strong><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      tbl_users
                    </a></strong></small>
                  </h6>
                </div>
                <!-- laman here -->
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body pt-2 pb-2">
                        <p><small>username  int(11) <i class="fa fa-key text-warning" aria-hidden="true"></i></small></p>
                        <p><small>username  varchar(45) </small></p>
                        <p><small>password  varchar(45) </small></p>
                        <p><small>username  varchar(45) </small></p>
                      </div>
                </div>

                <div class="card-header" role="tab" id="headingtwo">
                  <h6 class="mb-0">
                    <small><strong><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      tbl_users
                    </a></strong></small>
                  </h6>
                </div>
                <!-- laman here -->
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingtwo" data-parent="#accordion">
                      <div class="card-body pt-2 pb-2">
                        <p><small>username  int(11) <i class="fa fa-key text-warning" aria-hidden="true"></i></small></p>
                        <p><small>username  varchar(45) </small></p>
                        <p><small>password  varchar(45) </small></p>
                        <p><small>username  varchar(45) </small></p>
                      </div>
                </div>

              </div>
            </div>


        </div>
      </div>
      <div class="col-8">

        <div class="card shadow-super-light ">
          <nav class="navbar navbar-expand-lg navbar-light bg-light border">
            <ul class="nav mr-auto ml-3">
              <h5 class="nav-item m-auto">Etool Editor</h5>
            </ul>
            <ul class="nav ml-auto">
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="#">Run</a>
              </li>
              <li class="nav-item ml-2 mr-2">
                <a class="nav-link btn btn-primary" href="#">Clear</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="#">Export</a>
              </li>
            </ul>
          </nav>
          <div class="card-body"  style="height: 30vh;"></div>
        </div>
        <div class="card mt-3 shadow-super-light ">
          <div class="card-body"  style="height: 30vh;">
            output here
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-super-light">
          <div class="card-header">
            <h5>Functions</h5>
          </div>
         <div class="card-body">
           <button type="button" class="btn btn-secondary w-100 mt-1">Create Login</button>
           <button type="button" class="btn btn-secondary w-100 mt-1">CRUD</button>
           <button type="button" class="btn btn-secondary w-100 mt-1">Select</button>
           <button type="button" class="btn btn-secondary w-100 mt-1">Update</button>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>