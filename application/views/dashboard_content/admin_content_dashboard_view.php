<h2 class="mt-2 mb-0 ml-3 mr-3 d-inline-block">Users</h2>
<div class="form-group ml-auto d-inline-block float-right mt-2 mr-3">
  <input type="text" class="form-control" placeholder="Search">
</div>
<div class="d-inline-block float-right mt-2 mr-3">
  <button class="btn btn-primary" data-toggle="modal" data-target="#add_user">
    <i class="fa fa-plus" aria-hidden="true"></i>
  </button>
  <!-- Modal -->
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="nstructor" aria-selected="true">Instructor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                <!-- instructor -->
                <div class="form-group ml-2 mr-2">
                  <label for="instructor">Instructor ID</label>
                  <input type="text" class="form-control robot" id="instructor" placeholder="ex *1143103">
                </div>
                <div class="form-group ml-2 mr-2">
                  <input type="text" class="form-control robot" id="instructor" placeholder="Firstname">
                </div>
                <div class="form-group ml-2 mr-2">
                  <input type="text" class="form-control robot" id="instructor" placeholder="Lastname">
                </div>
                <button type="submit" class="btn btn-primary mt-3 float-right">Submit</button>
              </div>
              <!-- student -->
              <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
                <div class="form-group ml-2 mr-2">
                  <label for="instructor">Student ID</label>
                  <input type="text" class="form-control robot" id="instructor" placeholder="ex *1143103">
                </div>
                <div class="form-group ml-2 mr-2">
                  <input type="text" class="form-control robot" id="instructor" placeholder="Firstname">
                </div>
                <div class="form-group ml-2 mr-2">
                  <input type="text" class="form-control robot" id="instructor" placeholder="Lastname">
                </div>
                <button type="submit" class="btn btn-primary mt-3 float-right">Submit</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>
<div class="m-3 mr-3">
  <hr class="">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active nav-bg" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ALL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-bg ml-2 mr-2" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-bg" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Instructor</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row pt-3">
        <?php
          foreach ($all_data as $perreq){
            ?>
            <div class="col-sm-6 col-md-3 col-lg-2 pl-3 pr-3">
            <div class="card p-3">
              <div class="text-right text-dark">
                <a href="" class="text-dark" data-toggle="modal" data-target="#edit_user"><i class="material-icons">create</i></a>
                <a class="text-dark" href="<?php echo site_url('/dashboard/admin_dashboard/'.$perreq->cId);?>" ><i class="material-icons">close</i></a>
              </div>
              <div class="text-center">
                <img class="img-fluid" style="height: 100px; width: 100px;" src="<?php echo base_url('/assets/img/person-icon-8.png'); ?>">
                <h6 class="pt-2 mb-1"><?php echo $perreq->cFirstname;?><?php echo " ".$perreq->cLastname;?></h6>
                <h6 class="pt-0 mt-0"><small><?php echo $perreq->cType;?></small></h6>
                <a href="<?php echo base_url('dashboard/user_profile'); ?>" class="btn btn-outline-info">More info</a>
              </div>
            </div>
          </div>
            <?php
          }
        ?>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="ml-2 mr-2">
        <div class="row pt-3">
        <?php
          foreach ($all_data as $perreqa){
            if ($perreqa->cType == 'student') {
            ?>
            <div class="col-sm-6 col-md-3 col-lg-2 pl-3 pr-3">
            <div class="card p-3">
              <div class="text-right text-dark">
                <a href="" class="text-dark" data-toggle="modal" data-target="#edit_user"><i class="material-icons">create</i></a>
                <a class="text-dark" href="" data-toggle="modal" data-target="#remove_user"><i class="material-icons">close</i></a>
              </div>
              <div class="text-center">
                <img class="img-fluid" style="height: 100px; width: 100px;" src="<?php echo base_url('/assets/img/person-icon-8.png'); ?>">
                <h6 class="pt-2 mb-1"><?php echo $perreqa->cFirstname;?><?php echo " ".$perreqa->cLastname;?></h6>
                <h6 class="pt-0 mt-0"><small><?php echo $perreqa->cType;?></small></h6>
                <a href="<?php echo base_url('dashboard/user_profile'); ?>" class="btn btn-outline-info">More info</a>
              </div>
            </div>
          </div>
            <?php
          }
          }
        ?>

        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="ml-2 mr-2">
        <div class="row pt-3">
          <?php
          foreach ($all_data as $perreqa){
            if ($perreqa->cType == 'instructor') {
            ?>
            <div class="col-sm-6 col-md-3 col-lg-2 pl-3 pr-3">
            <div class="card p-3">
              <div class="text-right text-dark">
                <a href="" class="text-dark" data-toggle="modal" data-target="#edit_user"><i class="material-icons">create</i></a>
                <a class="text-dark" href="" data-toggle="modal" data-target="#remove_user"><i class="material-icons">close</i></a>
              </div>
              <div class="text-center">
                <img class="img-fluid" style="height: 100px; width: 100px;" src="<?php echo base_url('/assets/img/person-icon-8.png'); ?>">
                <h6 class="pt-2 mb-1"><?php echo $perreqa->cFirstname;?><?php echo " ".$perreqa->cLastname;?></h6>
                <h6 class="pt-0 mt-0"><small><?php echo $perreqa->cType;?></small></h6>
                <a href="<?php echo base_url('dashboard/user_profile'); ?>" class="btn btn-outline-info">More info</a>
              </div>
            </div>
          </div>
            <?php
          }
          }
        ?>

        </div>
      </div>
    </div>
  </div>
</div>

