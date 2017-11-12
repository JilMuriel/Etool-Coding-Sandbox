<div class="CreateAccount h-100 w-100">
	<div class="container-fluid h-100 w-100">
		<div class="r-center">
			<div class="register-card col-sm-4 col-md-6 col-lg-3 shadow mx-auto animated fadeIn">
				<div class=" pt-1 pb-1">
					<h2 class="accent">Create account</h2>
					<hr>
					<?php echo form_open('user/create_account'); ?>
						<div class="form-group">
					    	<input data-intro="This is the name of this site" type="text" class="form-control" name="txtusername" placeholder="Username">
					    </div>
					    <div class="form-group">
					    	<input data-intro="This is the main headline" type="password" class="form-control" name="txtpassword" placeholder="Password">
					    </div>
					    <div class="form-group">
					    	<input type="password" class="form-control" placeholder="Confirm password">
					    </div>
					    <button type="submit" class="btn btn-custom w-100 mb-3" >done</button>
					<?php echo form_close(); ?>
					<a href="javascript:void(0)" onclick="introJs().start();" class="page-scroll btn btn-xl">Start Introjs</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
