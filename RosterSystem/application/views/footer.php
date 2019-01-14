<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>The roster system is an online platform which provides the employers to manage their employees.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-office-hour">
						<ul>
							<li class="hd">Address :</li>
							<li></li>

						</ul>
						<ul>
							<li class="hd">Phone: </li>
							<li class="hd">Email: @rostersystems.com</li>
								<a href="<?php echo base_url();?>assets2/mailto:info@example.com"></a>
							</li>
							<li class="hd">Fax:</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Recent Posts</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g1.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g2.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g3.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g4.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g5.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g6.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g7.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g9.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							
								<img src="<?php echo base_url();?>assets2/images/g8.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="<?php echo base_url();?>assets2/#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="<?php echo base_url();?>assets2/#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="<?php echo base_url();?>assets2/#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="<?php echo base_url();?>assets2/#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Home Loan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Modal -->
<!-- js-->
	<script src="<?php echo base_url();?>assets2/js/jquery-2.2.3.min.js"></script>
<!-- js-->
<!-- Banner Responsiveslides -->
	<script src="<?php echo base_url();?>assets2/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
<!-- // Banner Responsiveslides -->
<!-- stats -->
	<script src="<?php echo base_url();?>assets2/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets2/js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!--pop-up-box -->
	<script src="<?php echo base_url();?>assets2/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url();?>assets2/js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>