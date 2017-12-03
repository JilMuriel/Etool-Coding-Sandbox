<nav class="navbar navbar-expand-lg navbar-light bg-light shadow pt-1 pb-1 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><strong>Etool</strong></a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <button type="button" class="btn btn-primary btn-sm mt-1 mr-3 shadow">New Table</button>
      </li>
      <li class="nav-item">
        <div class="dropdown show">
          <a class="btn btn-info dropdown-toggle btn-sm mt-1 mr-3 shadow" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Design View</a>
            <a class="dropdown-item" href="#">Table View</a>
          </div>
        </div>
      </li>
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