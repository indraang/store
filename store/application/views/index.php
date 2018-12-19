 <!DOCTYPE html>
<html>
<head>
	<title><?= $title;?></title>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/font-awesome/css/font-awesome.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>	
<div class="header-top">	
<div class="container">	
	<ul class="header-top-list">
		<li class=""><a href=""><i class="fa fa-phone"></i> 082339869156</a></li>
		<li class=""><a href=""><i class="fa fa-phone"></i> 082339869156</a></li>
		<li class=""><a href=""><i class="fa fa-phone"></i> 082339869156</a></li>
		<li class=""><a href=""><i class="fa fa-phone"></i> 082339869156</a></li>
	</ul>
</div>
</div>
<div class="header p-5">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h1>Electro</h1>
			</div>
			<div class="col-md-5">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" name="keyword" autocomplete="off">
						<div class="input-group-append">
							<button type="submit" class="btn btn-outline-secondary">Search</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<nav id="navbarFixed" class="navbar navbar-expand-lg navbar-dark">
<div class="container">	
	<a href="" class="navbar-brand">Beranda</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navSide">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navSide">
		<ul class="navbar-nav">
			<li class="nav-item active"><a href="" class="nav-link">Produk</a></li>
			<li class="nav-item active"><a href="" class="nav-link">About</a></li>
			<li class="nav-item active"><a href="" class="nav-link">Contact</a></li>
			<li class="nav-item active"><a href="" class="nav-link">Services</a></li>
		</ul>
	</div>				
</div>
</nav>

<?= $content;?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Electro</h2>
				<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt. Vestibulum ante ipsum primis tempus convallis.</p>
			</div>
			<div class="col-md-4">
				<h2>Contact Us</h2>
				<ul class="links-contact">
					<li><i class="fa fa-envelope"></i> <a href="">Email</a></li>
					<li><i class="fa fa-phone"></i> <a href="">08282828282</a></li>
					<li><i class="fa fa-instagram"></i> <a href="">Instagram</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h2>Link Menu</h2>
				<ul class="links-menu">
					<li><i class="fa fa-envelope"></i> <a href="">Email</a></li>
					<li><i class="fa fa-phone"></i> <a href="">08282828282</a></li>
					<li><i class="fa fa-instagram"></i> <a href="">Instagram</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/script.js"></script>
</body>
</html>