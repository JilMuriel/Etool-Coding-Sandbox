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
        <a class="nav-link btn btn-custom" href="#" data-intro="Go ahead, try creating a new project">New Project</a>
      </li>
      <li class="nav-item ml-2 mr-2">
        <a class="nav-link btn btn-custom" href="#" data-intro="You can always save your project">Save</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-custom" href="javascript:void(0)" onclick="introJs().start();">Help</a>
      </li>
    </ul>
  </nav>
  <div class="coding-ground pt-3 h-100">
    <div class="row m-0 p-0">
      <div class="col-2">
        <div class="card">

            
            <div id="accordion" role="tablist"  data-intro="This is your database table">
              <div class="card"  data-intro="This is where you can see your created tables and field names">
                  <div data-intro="For example "> </div>
                <div class="card-header"  role="tab" id="headingOne" data-intro=" Click your created table to see attributes " >
                
                  <h6 class="mb-0">
                    <small><strong><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      tbl_users
                    </a></strong></small>
                  </h6>
                </div>
                <!-- laman here -->
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body pt-2 pb-2" >
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

        <div class="card shadow-super-light " data-intro="This is your main text-editor. Try it out">
          <nav class="navbar navbar-expand-lg navbar-light bg-light border">
            <ul class="nav mr-auto ml-3">
              <h5 class="nav-item m-auto">Etool Editor</h5>
            </ul>
            <ul class="nav ml-auto">
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link btn btn-primary" href="#" data-intro="Execute the code with this">Run</a>
              </li>
              <li class="nav-item ml-2 mr-2">
                <a class="nav-link btn btn-primary" href="#" data-intro="To clear the text-editor">Clear</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="#" data-intro="You can always export your project, feel free.">Export</a>
=======
                <button class="nav-link btn btn-outline-danger" data-intro="To Execute the code" id="run_button1">Run</button>
              </li>
              <li class="nav-item ml-2 mr-2">
                <a class="nav-link btn btn-outline-primary" href="#" data-intro="To Clear the Editor" id="clear_button1">Clear</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-primary" href="#" data-intro="To Import File">Import</a>
              </li>
              <li class="nav-item ml-2 mr-2">
                <a class="nav-link btn btn-outline-primary" href="#" data-intro="To Export Project"  data-toggle="modal" data-target="#export">Export</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-success" href="#" data-intro="To Save">Save</a>
>>>>>>> 80b48e520bb40c69871cf0357307db1accbc8b19
              </li>
            </ul>
          </nav>
          <div class="card-body"  style="height: 50vh;">
            <textarea id="phpbox1" class="card-body"  style="height: 100%; width: 100%; border: none"></textarea>
          </div>
        </div>
<<<<<<< HEAD
        <div class="card mt-3 shadow-super-light"  data-intro="This will show you the output">
          <div class="card-body"  style="height: 30vh;">
            output here
=======
        <div class="card mt-3 shadow-super-light"  data-intro="Output Result">
          <div class="card-body"  style="height: 40vh;">
            <iframe id="result" style="height: 100%; width: 100%;" frameBorder="0"></iframe>
>>>>>>> 80b48e520bb40c69871cf0357307db1accbc8b19
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-super-light" data-intro="This is the e-toolbox where Pre-made functions/syntaxes are provided, try it out">
          <div class="card-header">
            <h5>Functions</h5>
          </div>
         <div class="card-body">
<<<<<<< HEAD
           <button type="button" class="btn btn-secondary w-100 mt-1" data-toggle="tooltip" data-placement="right" title="Click to created">Create Login</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" data-toggle="tooltip" data-placement="right" title="Click to created">CRUD</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" data-toggle="tooltip" data-placement="right" title="Click to created">SELECT</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" data-toggle="tooltip" data-placement="right" title="Click to created">UPDATE</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" data-toggle="tooltip" data-placement="right" title="Click to created">SEARCH</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" data-toggle="tooltip" data-placement="right" title="Click to created">DELETE</button>
=======
           <button type="button" class="btn btn-secondary w-100 mt-1" id="create_login">Create Login</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" id="crud">CRUD</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" id="select">Select</button>
           <button type="button" class="btn btn-secondary w-100 mt-1" id="update">Update</button>
>>>>>>> 80b48e520bb40c69871cf0357307db1accbc8b19
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="main" style="display: none">
          <p id="yeah" >asdasdadadad</p>

          <span>Hey there</span>
      </div>

<div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mt-2">
          <input type="text" class="form-control" placeholder="Name" autocomplete="off">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="clickhere">export</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  var doc = result.contentDocument;

  run_button1.addEventListener('click', function(){
    doc.close();
    doc.open();
    doc.write(myCodeMirror.getValue());
  });

  create_login.addEventListener('click', function(){
    doc.close();
    doc.open();
    doc.write(myCodeMirror.setValue('create'));
  });

  select.addEventListener('click', function(){
    doc.close();
    doc.open();
    doc.write(myCodeMirror.setValue('select'));
  });

   crud.addEventListener('click', function(){
    doc.close();
    doc.open();
    doc.write(myCodeMirror.setValue('crud'));
  });

  
  var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('phpbox1'), {
  mode:  "xml",
  matchBrackets: true,
  lineNumbers : true,
});

  clear_button1.addEventListener('click', function(){
  doc.close();
    doc.open();
    doc.write(myCodeMirror.setValue(' '));
  });
</script>