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
	<link href="<?php echo base_url();?>assets2///fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- body -->
	<link href="<?php echo base_url();?>assets2// fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
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
					<div class="col-sm-6 top-right">
						<ul>
								<li class="nav-item">
							<li style="float: right;"><a href="<?php echo base_url();?>index.php/Welcome/logout"><i style="font-weight: 900;font-size: xx-large;color: snow;" class="fa fa-power-off"></i></a></li>
						</li>
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
						<li class="nav-item  mr-3">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/companyView">Company
								
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/loadEmployees">Add Roster
								
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/loadRosterCompany">Add Next Job
								
							</a>
						</li>
					
					
						<li class="nav-item dropdown mr-3">
						
					
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/loadViewReport">Read Incidents</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/loadViewReport">Feedback</a>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</header>