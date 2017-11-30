<div class="validate h-100 w-100">
	<div class="container-fluid">
		<div class="p-center text-center h-100">
			<div class="login-card col-sm-4 col-md-6 col-lg-3 shadow animated fadeIn">
				<div class="m-1 pt-2 pb-2">
					<h2 class="accent">Enter your ID</h2>
					<hr class="m-0">
					<?php echo form_open('user/validate_user'); ?>
						<div class="pt-3">
							<div class="form-group mt-2">
							    <input type="text" class="form-control robot" name="txtuserid" placeholder="Ex'4516969t'" autocomplete="off">
							 </div>
							 <button type="submit" class="btn w-100 btn-custom1">
							 	Submit
							 </button>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
			<p class="landing-btn3 text-center mt-4"><a style="text-decoration:none" href="<?php echo base_url('main'); ?>" class="text-dark">already have an account? Login here</a></p>
		</div>
	</div>
</div>