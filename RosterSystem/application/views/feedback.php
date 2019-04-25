
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
        <h2 class="text-center;font-size=30px;" style="color:red;">Welcome!! <?php echo $this->session->userdata('employee_fname');?> To Your Feedback Page</h2>
		<img style="float: right;margin-top: -105px;border-radius: 20%;width: 8%;margin-right: 13;" width="100px"src="<?php echo base_url('uploads/');?><?php echo $this->session->userdata('employee_image'); ?>">
    </header>
	<!--background-->
	<h1 style="color:red;font-family:times new roman;text-shadow:2px 5px 3px black">Feedback Form</h1>
	<div class="main-w3layouts-content">
		<div class="top-section">
			<h2 class="sub-hdng-agileits-w3layouts">Contact Us</h2>
			<p>Please fill the form below and send us your feedback</p>
		</div>
		<div class="w3-agile-login-form">
			<form action="<?php echo base_url();?>index.php/Welcome/addIncident" method="post" >
				<h3 class="inner-hdng-agileinfo">Contact information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="hidden" name="employee_id" value="1">
						<input type="text" name="employee_name" value="<?php echo $this->session->userdata('employee_fname'); ?>" placeholder="Employee Name" required="" readonly="true"/>
				</div>
				<div class="input-fields-w3ls">
						<input type="hidden" name="employee_id" value="1">
						<input type="text" name="employee_name" value="<?php echo $this->session->userdata('employee_lname'); ?>"placeholder="Employee Name" required="" readonly="true"/>
				</div>
				</div>
				
				
				<h3 class="inner-hdng-agileinfo">Add Feedback/Issue</h3>
				<input type="text" name="employee_name" placeholder="Issue About" required="" />
				<div class="mid-fields-agileits-w3layouts">
					
				<h3 class="inner-hdng-agileinfo">Date</h3>
				<input id="datepicker" name="date" type="date" placeholder="Date of Incident" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
						    required="" />
				
				
				</div>
				<textarea name="description" placeholder="Description of Issue" required=""></textarea>
				
				<input type="submit" value="SEND FEEDBACK">
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