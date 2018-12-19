<!DOCTYPE html>
<html>
<head>
	<title><?= $title;?></title>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	<meta name="viewport" content="device-width,initial-scale=1.0">
</head>
<body>
<div class="container">
	<div class="row text-center mt-5">
		<div class="col-md-12">
			<h1>Sign Up</h1>
		</div>
	</div>
	<div class="row mt-3">
			<div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-6 offset-3">
				<div class="panel">
					<div class="panel-heading" style="background-color:skyblue;">
						<strong>Create your account!</strong>
						<?php if($this->session->flashdata("err-register")):?>
							<div class="error error-message">
								<?= $this->session->flashdata("err-register");?>
							</div>
						</div>
					<?php endif;?>
					</div>
					<div class="panel-body">
					<form action="" method="post">
						<label class="control-label">Username</label>
						<div class="form-group">
							<input type="text" class="form-control" name="username">
						</div>
						<label class="control-label">Email</label>
						<div class="form-group">
							<input type="text" class="form-control" name="email_user">
						</div>
						<label class="control-label">Class</label>
						<div class="form-group">
							<input type="text" class="form-control" name="class_user">
						</div>
						<label class="control-label">Password</label>
						<div class="form-group">
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password2" placeholder="Re-type password">
						</div>
						<button type="submit" class="btn btn-primary" name="submit" value="Submit">Sign Up</button>
						<span>Have already account? <a href="<?= site_url();?>login">click here</span>
					</form>
					</div>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/script.js"></script>
<script>
	$('.error-message').alert().delay(2000).slideUp("slow");
</script>
</body>
</html>