<div class="User_profile">
	<div class=" ml-5 mr-5">
		<div class="w-100">
			<h3 class="accent">User Info</h3>
			<div class="d-inline-block pt-3">
				<img src="<?php echo base_url('/assets/img/person-icon-8.png') ?>" class="img-fluid" style="height: 100px; width: 100px;">
			</div>
			 <?php
	          foreach ($all_data as $perreq){
	          ?>
			<div class="d-inline-block align-middle ml-4">
				<h4 class="accent">Babarano Teodoro<!-- <?php echo $perreq->cFirstname . " " . $perreq->cLastname;?> --></h4>
				<h6 class="m-0 p-0">babarano@gmail.com<small><!-- <?php echo $perreq->cEmail?> --></small></h6>
				<h6 class="m-0 p-0 robot"><small>11/12/2017 - 12/12/2017 </small></h6>
			</div>
			<?php
	          }
	        ?>
		</div>
		<div class="users-project pt-4 ml-2 mr-2">
			<table class="table table-hover shadow-super-light">
			  <thead>
			    <tr>
			      <th scope="col"><small class="accent">Name</small></th>
			      <th scope="col"><small class="accent">Database</small></th>
			      <th scope="col"><small class="accent">Date Created</small></th>
			      <th scope="col"><small class="accent">Last Update</small></th>
			      <th scope="col"><i class="fa fa-bars accent" aria-hidden="true"></i></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr class="robot p-5">
			      <td><i class="fa fa-folder-o text-left float-left fa-2x accent pr-1" aria-hidden="true"></i><p class="m-0 pt-1">My Sample Project 1</p></td>
			      <td class="align-middle">Le Database</td>
			      <td class="align-middle">11/13/2017</td>
			      <td class="align-middle">11/13/2017</td>
			      <td>
			      	<!-- Example single danger button -->
					<div class="btn-group">
					  <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-cog" aria-hidden="true"></i>
					  </a>
					  <div class="dropdown-menu dropdown-menu-right">
					    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalLong">Rename</a>
					    		<!-- Modal -->
							<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        ...
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary">Save changes</button>
							      </div>
							    </div>
							  </div>
							</div>
					    <a class="dropdown-item" href="#">Remove</a>
					  </div>
					</div>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>