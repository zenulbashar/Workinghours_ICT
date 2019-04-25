
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
        <h2 class="text-center;font-size=30px;" style="color:red;">Welcome!! <?php echo $this->session->userdata('employee_fname');?> To Your Profile Page</h2>
		<img style="float: right;margin-top: -105px;border-radius: 20%;width: 8%;margin-right: 13;" width="100px"src="<?php echo base_url('uploads/');?><?php echo $this->session->userdata('employee_image'); ?>">
    </header>
	<!--background-->
	<h1 style="color:red;font-family:times new roman;text-shadow:2px 5px 3px black">Profile</h1>
	<div class="main-w3layouts-content">
		<div class="top-section">
			<h2 class="sub-hdng-agileits-w3layouts">View Of Your Profile</h2>
			<p>Click edit to change profile information</p>
		</div>
		<div class="w3-agile-login-form">
		<?php foreach($res as $row) { ?>
			<form action="<?php echo base_url();?>index.php/Welcome/updateProfile" method="post" enctype="multipart/form-data">
			<h3 class="inner-hdng-agileinfo">Profile Picture</h3>
			<img  style="border-radius: 20%;width: 200px;" width="200px" src="<?php echo base_url('uploads/');?><?php echo $row->employee_image; ?>">
			<a href="<?php echo base_url()?>index.php/Welcome/EditEmployeeImage?employee_id=<?php echo $this->session->userdata('employee_id');?>">Edit Image</a>
			     
                  
				<h3 class="inner-hdng-agileinfo">General information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="hidden" name="employee_id" value="<?php echo $this->session->userdata('employee_id');?>">
						<input type="text" name="employee_fname" value="<?php echo $row->employee_fname; ?>" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="employee_lname" value="<?php echo $row->employee_lname; ?>" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="birth_date" value="<?php echo $row->birth_date; ?>"  />
					</div>
				</div>
				<h3 class="inner-hdng-agileinfo">Contact Information</h3>
				<div class="top-fields-wthree">
					<div class="input-fields-w3ls">
						<input type="text" name="employee_gender" value="<?php echo $row->employee_gender; ?>" />
					</div>
					<div class="input-fields-w3ls">
						<input type="email" name="employee_email" value="<?php echo $row->employee_email; ?>" />
					</div>
					<div class="input-fields-w3ls">
						<input type="text" name="employee_password" value="<?php echo $row->employee_password; ?>" />
					</div>
				</div>
				<h3 class="inner-hdng-agileinfo">Address Information</h3>
				<div class="mid-fields-agileits-w3layouts">
							<textarea name="employee_address" value="<?php echo $row->employee_address; ?>" ><?php echo $row->employee_address; ?></textarea>
					
				</div>
	
				<input type="submit" value="Edit Profile">
			</form>
		<?php } ?>
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