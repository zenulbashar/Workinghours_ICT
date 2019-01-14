
<!DOCTYPE HTML>
<html>
<head>

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
  
  <h2 class="form-heading">Register Company</h2>
  <form class="form-signin app-cam" action="<?php echo base_url();?>index.php/Welcome/addCompany" method="post">
      <p>Enter your Company details below</p>
	
      <input type="text" class="form-control1" name="company_name" placeholder="Company Name" autofocus="">
	  <input type="text" class="form-control1" name="country" placeholder="Country" autofocus="">
	  <input type="text" class="form-control1" name="state" placeholder="State" autofocus="">
	  <input type="text" class="form-control1" name="city" placeholder="City" autofocus="">
	
	   <input type="date" name="start_date" class="form-control1" placeholder="Start Date" autofocus="">
	   <div class="select">
	   <label for="company_type" class="label_select">
      <select name="company_type" class="form-control1">
					<option value="">Company Type
					<option value="IT">It</option>
					<option value="Finance">Finance</option>
					<option value="Steel">Steel</option>
					<option value="Petrolium">Petrolium</option>
					
	  </select>
	  </div>
	  <div class="select">
	   <label for="range" class="label_select">
	  <select name="range" class="form-control1">
					<option value="">Range Of Employees
					<option value="10-50">10-50</option>
					<option value="51-100">51-100</option>
					<option value="101-150">101-150</option>
					<option value="151-200">151-200</option>
					<option value="200+">200+</option>
	  </select>
	  </div>

   
	  <p> Enter your account details below</p>
      <input type="text" name="email" class="form-control1" placeholder="email" autofocus="">
      <input type="password" name="password" class="form-control1" placeholder="Password">
      <input type="password" class="form-control1" placeholder="Re-type Password">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
      <div class="registration">
          Register as Employee
          <a class="" href="<?php echo base_url();?>index.php/Welcome/signEmployee">
              Register Employee
          </a>
		     <div class="registration">
          Login as Company
          <a class="" href="<?php echo base_url();?>index.php/Welcome/loadCompanyLogin">
              Login Company
          </a>
      </div>
  </form>
 
</body>
</html>
