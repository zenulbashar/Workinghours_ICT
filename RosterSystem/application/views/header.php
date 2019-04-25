<html lang="zxx">

<head>
	<title>Roster Management System Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url();?>assets2/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url();?>assets2/css/style.css" rel='stylesheet' type='text/css' />
	<!-- pop up box -->
	<link href="<?php echo base_url();?>assets2/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="<?php echo base_url();?>assets2/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online fonts -->
	<!-- titles -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<link href="<?php echo base_url();?>assets2///fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- body -->
	<link href="<?php echo base_url();?>assets2///fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
</head>

<body>
	
	<!-- header -->
	<header>
	<div class="top">
			<div class="container">
				<div class="t-op row">
					
					<div class="col-sm-6 top-left">
						<ul>
							<li> Working Hour(s)</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<h1>
					<a class="navbar-brand text-capitalize" href="<?php echo base_url();?>assets2/index.html">
						
					</a>
				</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item mr-3">
							<a class="nav-link" href="<?php echo base_url();?>">Home
								
							</a>
					
						<li class="nav-item  mr-3">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/loadAbout">About Us</a>
						</li>
					
						<li class="nav-item dropdown mr-3">
							<a class="nav-link dropdown-toggle" href="<?php echo base_url();?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Login 
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/Welcome/loadCompanyLogin">Login As Company</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/Welcome/loadEmployeeLogin">Login As Employee</a>
							</div>
						</li>
						<li class="nav-item dropdown mr-3">
							<a class="nav-link dropdown-toggle" href="<?php echo base_url();?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Registration
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/Welcome/signCompany">Sign-up Company</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/Welcome/signEmployee">Sign-up Employee</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/loadContactUs">contact Us</a>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</header>