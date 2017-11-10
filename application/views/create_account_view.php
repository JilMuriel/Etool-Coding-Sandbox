<div class="CreateAccount h-100 w-100">
	<div class="container-fluid h-100 w-100">
		<div class="r-center">
			<div class="register-card col-sm-4 col-md-6 col-lg-3 shadow mx-auto animated fadeIn">
				<div class="m-1 pt-2 pb-2">
					<h2 class="accent">Create account</h2>
					<hr>
					<?php echo form_open('user/create_account'); ?>
						<div class="form-group">
					    	<input type="text" class="form-control" name="txtusername" placeholder="Username">
					    </div>
					    <div class="form-group">
					    	<input type="password" class="form-control" name="txtpassword" placeholder="Password">
					    </div>
					    <div class="form-group">
					    	<input type="password" class="form-control" placeholder="Confirm password">
					    </div>
					    <div class="form-group">
					    	<input type="email" class="form-control" name="txtemail" placeholder="Email">
					    </div>
					    <button type="submit" class="btn btn-custom w-100 mb-3" >Create my account</button>
					<?php echo form_close(); ?>
					<a href="<?php echo base_url('user'); ?>" class="w-100 text-center">Already have an account? Login in here</a>
				</div>
			</div>
		</div>
	</div>
</div>
