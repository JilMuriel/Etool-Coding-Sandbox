<div class="Login h-100 w-100">
	<div class="container-fluid h-100 w-100">
		<div class="l-center">
			<div class="login-card col-sm-4 col-md-6 col-lg-3 shadow animated fadeIn">
				<div class="m-1 pt-2 pb-1">
					<h2 class="accent">Welcome</h2>
					<hr class="m-0">
					<?php echo form_open('user/login'); ?>
						<div class="pt-3 pb-3">
							<div class="form-group border mt-2">
							    <input type="text" class="form-control border-0 p-3" placeholder="Username" autocomplete="off" name="txtusername">
							    <hr class="m-0 ml-3 mr-3">
							    <input type="Password" class="form-control border-0 p-3" placeholder="Password" autocomplete="off" name="txtpassword">
							 </div>
							 <button type="submit" class="landing-btn1 btn w-100 btn-custom">Login</button>
						</div>
					<?php echo form_close(); ?>
					<a href="<?php echo base_url('User/validate_user'); ?>" class="accent text-center">Need an account? Register here</a>
				</div>
			</div>
			<p class="landing-btn3 text-center mt-4"><a style="text-decoration:none" href="<?php echo base_url('/'); ?>">back to home</a></p>
		</div>
	</div>
</div>
