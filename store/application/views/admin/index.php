<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="<?= base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/datatables/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/datatables/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/css/custom.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="navbar-header">
		<a class="navbar-brand" href="">Administrator</a>
	</div>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSide" aria-controls="navbarSide" aria-expanded="false" aria-label="Navbar">
		<span class="navbar-toggler-icon"></span>
	</button>	
</nav>
<nav class="navbar-sidebar">
	<div id="navbarSide" class="sidebar-collapse">
		<ul class="nav-side">
			<li class="text-center"><img src="<?= base_url();?>assets/img/find_user.png" alt=""></li>
			<li><a href=""><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
			<li><a href=""><i class="fa fa-table fa-3x"></i> Data Barang</a></li>
			<li><a href=""><i class="fa fa-file-invoice fa-3x"></i> Data Pesanan</a></li>
			<li><a href="<?= site_url();?>login/logout"><i class="fa fa-gear fa-3x"></i> Keluar</a></li>
		</ul>
	</div>	
</nav>
<div class="main">
	<div class="content-main">
		<?= $content;?>
	</div>
</div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/datatables/js/dataTables.bootstrap4.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.js"></script>
<script>

$(document).ready(function(){
	$(window).on("load resize",function(){
		
		if($(this).width() < 768){
			$("div.sidebar-collapse").addClass("collapse");
		}else{
			$("div.sidebar-collapse").removeClass("collapse");
		}
	});

	$("#idTable").DataTable({
		"bSort":true,
		"pageLength":10
	});	
});

</script>
</body>
</html>