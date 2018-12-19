<!DOCTYPE html>
<html>
<head>
	<title><?= $title;?></title>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
</head>
<body>
<div class="container">
	<div class="row text-center mt-5">
		<div class="col-md-12">
			<h1 class="display-4">Sign In</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3 col-10 offset-1">
			<div class="card mt-4 shadow">
			<div class="card-heading p-2">
				<strong>Sign in your account</strong>
			</div>
			<div class="card-body">
			<form action="" method="post">
				<label class="control-label">Username</label>
				<div class="form-group">
					<input type="text" name="username" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn-login" name="submit" value="Submit">Sign In</button>
				</div>
			</form>
			</div>
		</div>
		</div>
		
	</div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/script.js"></script>
</body>
</html>