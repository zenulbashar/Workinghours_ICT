
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
 
  <h2 class="form-heading">login Company</h2>
  <div class="app-cam">
	  <form method="post" action="<?php echo base_url();?>index.php/Welcome/isLoginCompany">
		<input type="text" name="company_email" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" name="company_password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
          <a href="<?php echo base_url();?>assets/index.html" class="facebook">
              Facebook
          </a>
          <a href="<?php echo base_url();?>assets/index.html" class="twitter">
              Twitter
          </a>
        </div>
	
	</form>
  </div>
   
</body>
</html>
