<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/codemirror/lib/codemirror.css">
	<link rel="stylesheet" type="text/css" href="/assets/themes/monokai.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- google icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- font-awsome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<!-- code mirror -->
	<script src="/assets/codemirror/lib/codemirror.js"></script>
	<script src="/assets/codemirror/mode/javascript/javascript.js"></script>
	<script src="/assets/codemirror/mode/css/css.js"></script>
	<script src="/assets/codemirror/mode/xml/xml.js"></script>
</head>
<body>

<!-- modal -->
								<!-- Modal -->
								<!-- edit post -->
								<div class="modal fade" id="edit_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h3 class="modal-title" id="exampleModalLongTitle">Edit</h3>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								      	<form>
								      		  <div class="form-group m-0">
											    <label for="myproject">Project Title</label>
											    <input type="text" class="form-control" id="myproject" placeholder="My Project">
											  </div>
											  <div class="form-group">
											    <label for="description">Description</label>
											    <textarea class="form-control" id="description"></textarea>
											  </div>
								      	</form>
								      </div>
								      <div class="modal-footer">
								      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								        <button type="button" class="btn btn-primary">Update</button>
								      </div>
								    </div>
								  </div>
								</div>
								<!-- remove post -->
								<div class="modal fade" id="remove_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h3 class="modal-title" id="exampleModalLongTitle">Notice</h3>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								       	<p>Proceed to delete this project?</p>
								       	<hr>
								       	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								        <button type="button" class="btn btn-danger">Delete</button>
								      </div>
								    </div>
								  </div>
								</div>
          					 	<!-- end of modal -->
