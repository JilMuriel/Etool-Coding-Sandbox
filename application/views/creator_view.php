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
    <ul class="nav mr-auto">
      <h5 class="nav-item m-auto">Book recording activity</h5>
    </ul>
    <ul class="nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link btn btn-custom" href="#" data-intro="Go ahead, try creating a new project">New Project</a>
      </li>
      <li class="nav-item ml-2 mr-2">
        <a class="nav-link btn btn-custom" href="#" data-intro="To Save Project">Save</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid pt-3">
    <nav class="nav nav-tabs" id="myTab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Schema</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Coding Ground</a>
    </nav>
   <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab pt-4">
        
        <div class="row m-0 p-0">
          <div class="col-sm-2">
            <div class="card movable m-1">
              <h4>tables</h4>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card movable m-1">
              <h4>tables</h4>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card movable m-1">
              <h4>tables</h4>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card movable m-1">
              <h4>tables</h4>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card movable m-1">
              <h4>tables</h4>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card movable m-1">
              <h4>tables</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        
      <div class="coding-ground pt-3 h-100">
        <div class="row m-0 p-0">
          <div class="col-2">
            <div class="card border-0">

                
                <div class="border-0" id="accordion" role="tablist" data-intro="This is your database table">
                  <div class="card" data-intro="This is where you can see your created tables and field names">
                    <div class="card-header">
                      <h5 class="mb-0 pb-0"><i class="fa fa-database pr-2 text-left" aria-hidden="true">books</i></h5>
                    </div>
                    <div class="card-header" role="tab" id="headingOne" data-intro=" Click your created table to see attributes ">
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
                        <small><strong><a data-toggle="collapse" href="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                          tbl_Books
                        </a></strong></small>
                      </h6>
                    </div>
                    <!-- laman here -->
                    <div id="collapsetwo" class="collapse show" role="tabpanel" aria-labelledby="headingtwo" data-parent="#accordion">
                          <div class="card-body pt-2 pb-2">
                            <p><small>book_id  int(11) <i class="fa fa-key text-warning" aria-hidden="true"></i></small></p>
                            <p><small>book_name  varchar(45) </small></p>
                            <p><small>category  varchar(45) </small></p>
                            <p><small>author  varchar(45) </small></p>
                          </div>
                    </div>

                  </div>
                </div>


            </div>
          </div>
          <div class="col-10">

            <div class="card border " data-intro="Write the code here">
              <nav class="navbar navbar-expand-lg navbar-light bg-light border">
                <ul class="nav mr-auto ml-3" data-intro="This is your main text-editor. Try it out">
                  <h5 class="nav-item m-auto">Etool Editor</h5>
                </ul>
              </nav>
              <div class="card-body"  style="height: 50vh;">
                <textarea id="phpbox1" class="card-body"  style="height: 100%; width: 100%; border: none"></textarea>
              </div>
            </div>
            <div class="card mt-3 border"  data-intro="Output Result">
              <div class="card-body"  style="height: 10vh;">
                <iframe id="result" style="height: 100%; width: 100%;" frameBorder="0"></iframe>
              </div>
            </div>
          </div>

        </div>
      </div>

      </div>
    </div>
  </div>
</div>