<div class="Login h-100 w-100">
	<div class="container-fluid h-100 w-100">
		<div class="l-center">
			<div class="login-card col-sm-4 col-md-6 col-lg-3 shadow animated fadeIn">
				<div class="m-1 pt-2 pb-2">
					<h2 class="accent">Welcome</h2>
					<hr class="m-0">
					<form>
						<div class="pt-3 pb-3">
							<div class="form-group border mt-2">
							    <input type="text" class="form-control border-0 p-3" placeholder="Username" autocomplete="off">
							    <hr class="m-0 ml-3 mr-3">
							    <input type="Password" class="form-control border-0 p-3" placeholder="Password" autocomplete="off">
							 </div>
							 <a href="<?php echo base_url('dashboard'); ?>" class="btn w-100 btn-custom">Login</a>
						</div>
					</form>
					<a href="<?php echo base_url('User/create_account'); ?>" class="accent text-center">Need an account? Register here</a>
				</div>
			</div>
		</div>
	</div>
</div>