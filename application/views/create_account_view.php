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
					    <button type="submit" class="btn btn-custom w-100 mb-3" >Create my account</button>
				</div>

			</div>
			</div>
				<p class="landing-btn3 text-center mt-4"><a style="text-decoration:none" href="<?php echo base_url('user'); ?>">Already have an account? Login here.</a></p>

		</div>
	</div>
</div>
