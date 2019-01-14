
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body id="login">
  
  <h2 class="form-heading">Register Employee</h2>
  <form class="form-signin app-cam"  action="<?php echo base_url();?>index.php/Welcome/addEmployee" method="post" enctype='multipart/form-data'>
  
      <p>Enter your personal details below</p>
	
      <input type="text" class="form-control1" name="fname" placeholder="First Name" autofocus="">
	   <input type="text" class="form-control1" name="lname" placeholder="Last Name" autofocus="">
      <input type="date" class="form-control1" name="bdate" placeholder="bdate" autofocus="">
      <div class="radios">
        <label for="radio-01" class="label_radio">
            <input type="radio" name="gender" value="MALE"checked=""> Male
        </label>
        <label for="radio-02"  class="label_radio">
            <input type="radio" name="gender" value="FEMALE"> Female
        </label>
	  </div>
	  <input type="text" class="form-control1" name="address" placeholder="Employee Address" autofocus="">
      <input type="text" class="form-control1" name="job_type" placeholder="Job Type" autofocus="">
	   <input type="text" class="form-control1" name="experience" placeholder="Experience" autofocus="">
	    Image<input type="file" class="form-control1" name="userfile" placeholder="Image" autofocus="">
		 <input type="text" class="form-control1" name="prev_job_at" placeholder="Previous Job At" autofocus="">
		 <select name="company_to_join" class="form-control">
			<option value="">CLICK TO EXPAND</option>
		 <?php foreach($result->result() as $row){?>
			<option value="<?php echo $row->company_name;?>"><?php echo $row->company_name;?></option>
		 <?php } ?>
		 </select>
		<!--  <input type="text" class="form-control1" name="company_to_join" placeholder="Company To Join" autofocus="">-->

	  <p> Enter your account details below</p>
      <input type="text" class="form-control1" name="email" placeholder="email" autofocus="">
      <input type="password" class="form-control1" name="password" placeholder="Password">
      <input type="password" class="form-control1" placeholder="Re-type Password">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
      <div class="registration">
          Register as Company
          <a class="" href="<?php echo base_url();?>index.php/Welcome/signCompany">
              Register Company
          </a>
		  <div class="registration">
		  Login as Employee
          <a class="" href="<?php echo base_url();?>index.php/Welcome/loadEmployeeLogin">
              Login Employee
          </a>
      </div>
  
 
</body>
</html>
