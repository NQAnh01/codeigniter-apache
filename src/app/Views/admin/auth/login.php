<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<!-- Layout styles -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<style>
		.row{margin:unset}
	</style>
</head>
<body>
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="row w-100">
			<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
				<div class="card col-lg-4 mx-auto">
					<div class="card-body px-5 py-5">
						<h3 class="card-title text-start mb-3">Login</h3>
						<?php if(session()->getFlashdata('msg')):?>
						<div class="alert alert-warning">
							<?php echo session()->getFlashdata('msg'); ?>
						</div>
						<?php endif;?>
						<form method="post" id="loginForm" action="login" autocomplete="off">
							<div class="form-group">
								<label><?php echo lang('App.email'); ?> *</label>
								<input type="email" name="email" class="form-control p_input" required />
							</div>
							<div class="form-group">
								<label><?php echo lang('App.password'); ?> *</label>
								<input type="password" name="password" class="form-control p_input" required />
							</div>
							<div class="text-center d-grid gap-2">
								<button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- row ends -->
	</div>
	<!-- page-body-wrapper ends -->
	<!-- <script src="../assets/js/madmin.js"></script>
	<script>
		class Login extends Madmin {
			pageInit () {
				let self = this;
				document.addEventListener('DOMContentLoaded', function () {
					let form = document.getElementById('loginForm');
					if(form){
						form.addEventListener('submit', function (e) {
							e.preventDefault();
							let data = {
								email: form.email.value,
								password: form.password.value,
							}
							self.majax('/admin/login', 'post', data);
						});
					}
				});
			}
			ajaxRespone(res) {
				console.log('abee');
			}
		}
		new Login(); -->
	</script>
</body>
</html>