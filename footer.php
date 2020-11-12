<!-- footer 
			================================================== -->
		<footer>
			<div class="container">

				<div class="up-footer">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget text-widget">
								<a href="index.html" class="footer-logo"><img src="images/logo_light.svg" alt=""></a>
								<p>We named our theme Studiare because to us,<br> the best brands are simple ones. Brands thrive<br> on their ability to be understood.</p>
								<ul>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">location_on</i>
										</div>
										<div class="contact-info-value">127 Elizabeth Street, NY New York</div>
									</li>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">phone_android</i>
										</div>
										<div class="contact-info-value">+55-11-3097-0508</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget quick-widget">
								<h2>Quick Links</h2>
								<ul class="quick-list">
									<li><a href="contact.html">Contact</a></li>
									<li><a href="pricing.html">Pricing Packages</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="courses.html">Courses</a></li>
									<li><a href="blog.html">News</a></li>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Sample Page</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget subscribe-widget">
								<h2>Newsletter</h2>
								<p>Don’t miss anything, sign up now and keep informed about our company.</p>
								<div class="newsletter-form">
									<input class="form-control" type="email" name="EMAIL" placeholder="Enter Your E-mail" required="">
									<input type="submit" value="Subscribe">
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="footer-copyright copyrights-layout-default">
				<div class="container">
					<div class="copyright-inner">
						<div class="copyright-cell"> &copy; 2019 <span class="highlight">Studiare</span>. Created by CodeBean Team.</div>
						<div class="copyright-cell">
							<ul class="studiare-social-links">
								<li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->


	<script src="<?= SITE_TEMPLATE_PATH ?>/js/studiare-plugins.min.js"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.countTo.js"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/js/popper.js"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/js/gmap3.min.js"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/js/script.js"></script>

	<script>
		var tpj=jQuery;
		var revapi202;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_202_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_202_1");
			} else {
				revapi202 = tpj("#rev_slider_202_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "js/",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						onHoverStop: "off",
						arrows: {
					        enable: true,
					        style: 'gyges',
					        left: {
					            container: 'slider',
					            h_align: 'left',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: -60
					        },

					        right: {
					            container: 'slider',
					            h_align: 'right',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: -60
					        }
					    },
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						bullets: {

					        enable: false,
					        style: 'persephone',
					        tmp: '',
					        direction: 'horizontal',
					        rtl: false,

					        container: 'slider',
					        h_align: 'center',
					        v_align: 'bottom',
					        h_offset: 0,
					        v_offset: 55,
					        space: 7,

					        hide_onleave: false,
					        hide_onmobile: false,
					        hide_under: 0,
					        hide_over: 9999,
					        hide_delay: 200,
					        hide_delay_mobile: 1200
 						}
					},
					responsiveLevels: [1210, 1024, 778, 480],
					visibilityLevels: [1210, 1024, 778, 480],
					gridwidth: [1210, 1024, 778, 480],
					gridheight: [700, 700, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "slidercenter",
						speed: 1000,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>	


</body>
</html>