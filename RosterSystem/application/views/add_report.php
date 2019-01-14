
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
	<!--background-->
	<h1 style="color:red;font-family:times new roman;text-shadow:2px 5px 3px black">Incident Report Form</h1>
	<div class="main-w3layouts-content">
		<div class="top-section">
			<h2 class="sub-hdng-agileits-w3layouts">Report Us</h2>
			<p>Please fill the form below about the incident</p>
		</div>
		<div class="w3-agile-login-form">
			<form action="<?php echo base_url();?>index.php/Welcome/addIncident" method="post" >
				<h3 class="inner-hdng-agileinfo">Contact information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="hidden" name="employee_id" value="1">
						<input type="text" name="employee_name" placeholder="Employee Name" required="" />
					</div>
					<div class="input-fields-w3ls">
						<input type="email" name="employee_email" placeholder="Employee Email" required="" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="employee_contactNo" placeholder="Phone" required="" />
					</div>
				</div>
				<h3 class="inner-hdng-agileinfo">Company Information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="text" name="company_name" placeholder="Company Name" required="" />
					</div>
					<div class="input-fields-w3ls">
						<input type="email" name="company_email" placeholder="Company Email" required="" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="company_location" placeholder="Company Location" required="" />
					</div>
				</div>
				<h3 class="inner-hdng-agileinfo">About Incident</h3>
				<div class="mid-fields-agileits-w3layouts">
					<div class="input-fields-w3ls2">
						<input id="datepicker" name="date_Incident" type="text" placeholder="Date of Incident" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
						    required="" />
					</div>
					<div class="input-fields-w3ls2">
						<select id="country" name="level_Incident" onchange="change_country(this.value)" class="frm-field required" required="">
							<option value="">Incident level</option>
							<option value="High">High</option>
							<option value="Medium">Medium</option>   
							<option value="Low">Low</option>     
						</select>

					</div>
				</div>
				<textarea name="description_Incident" placeholder="Description of Incident" required=""></textarea>
				<textarea name="location_Incident" placeholder="Location of Incident" required=""></textarea>
				<input type="submit" value="Report Now">
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