
<!DOCTYPE HTML>
<html>

<head>
	<title>Incident Report Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/jquery-ui.css" />
	<link href="<?php echo base_url();?>assets3/css/style.css" rel='stylesheet' type='text/css' />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
    <header>
        <h2 class="text-center;font-size=30px;" style="color:red;">Wemlcome!! <?php echo $this->session->userdata('company_name');?> Add Roster To Employee</h2>
		
    </header>
	<!--background-->
	<h1 style="color:red;font-family:times new roman;text-shadow:2px 5px 3px black">Add Roster </h1>
	<div class="main-w3layouts-content">
		<div class="top-section">
			<h2 class="sub-hdng-agileits-w3layouts">Roster Information</h2>
			<p>Please fill the form below about roster</p>
		</div>
		<div class="w3-agile-login-form">
		<?php foreach($res as $row) { ?>
			<form action="<?php echo base_url();?>index.php/Welcome/addRoster" method="post" >
				<h3 class="inner-hdng-agileinfo">Employee Information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="hidden" name="company_name" value="<?php echo $this->session->userdata('company_name');?>">
						<input type="hidden" name="employee_id" value="<?php echo $this->session->userdata('employee_id');?>">
						<input type="text" name="employee_fname" value="<?php echo $row->employee_fname; ?>" required="" readonly="true" />
					</div>
					<div class="input-fields-w3ls">
						<input type="email" name="employee_lname" value="<?php echo $row->employee_lname; ?>" required="" readonly="true" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="employee_email" value="<?php echo $row->employee_email; ?>" required="" readonly="true" />
					</div>
				</div>
		<?php } ?>
				<h3 class="inner-hdng-agileinfo">Roster Title</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="text" name="roster_title" placeholder="Roster Title" required="" />
					</div>
					<div class="input-fields-w3ls2">
						<input type="date" id="datepicker" name="date" placeholder="Date of Work" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date';}" required="" style="background:grey;"/>
					</div>
					
					
				</div>
				<h3 class="inner-hdng-agileinfo">Roster Description</h3>
				<div class="mid-fields-agileits-w3layouts">
					<textarea name="roster_description" placeholder="Roster Description" required="" size="100"/></textarea>
				
				</div>
				
			<div class="input-fields-w3ls">
			<h3 class="inner-hdng-agileinfo">Location</h3>
						<textarea name="location" placeholder="Location of work" required="" size="100"/></textarea>
					</div>
				<input type="submit" value="Assign Now">
			</form>
			
		</div>
	</div>
	<div class="clear"></div>

	<!-- JavaScript plugins -->
	<script type="text/javascript" src="<?php echo base_url();?>assets3/js/jquery-2.2.3.min.js"></script>

	<!-- Calendar -->
	<script src="<?php echo base_url();?>assets3/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!--// JavaScript plugins -->
</body>

</html>