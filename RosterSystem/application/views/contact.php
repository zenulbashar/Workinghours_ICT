	
	<!-- banner -->
	<section class="banner-1">
	</section>
	<!-- //banner -->
	<!--/contact-->
	<section class="contact py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Contact Us<span>Speed Up The Work Process</span></h2>
			<h3> </h3>
			<span class="w3-line black"></span>
			<div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d273690.1704056744!2d-74.59673804968976!3d40.72070782081099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1521532554788" class="map" style="border:0" allowfullscreen=""></iframe>
				</div>
				
				<div class="contact_grid_right mt-5">
					<h6>Please fill this form to contact with us.</h6>
					<?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
					<form action="<?php echo base_url()?>index.php/Welcome/insContactUs" method="post">
						<div class="contact_left_grid">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="subject" id="subject" placeholder="Subject" required="">
							
							<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--//contact-->
