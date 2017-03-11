
			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
					     		<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							
							<!-- Social Icons -->
							
							<!-- /Social Icons -->
                            <address>
								<ul class="list-unstyled">
									<li>
										<i class="fa fa-map-marker"></i>
                                        <?= $site_option['address'] ?>
									</li>
									<li>
										<i class="fa fa-phone"></i>
                                        Phone: <?= $site_option['phone'] ?>
									</li>
									<li>
                                        <i class="fa fa-envelope"></i>
										<a href="mailto:<?= $site_option['email'] ?>"><?= $site_option['email'] ?></a>
									</li>
								</ul>
							</address>
                                    <div class="margin-top-20 col-md-12">
                                    <?php
                                    $social_links = getDataById('social', 1);
                                    if(!empty($social_links['fb'])){
                                ?>
								<a href="http://<?= $social_links['fb'] ?>" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<?php
									}
								?>

								<?php
                                if(!empty($social_links['tw'])){
                                ?>

								<a href="http://<?= $social_links['tw'] ?>" target="_blank" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<?php
									}
								?>

								<?php
                                if(!empty($social_links['gp'])){
                                ?>

								<a href="http://<?= $social_links['gp'] ?>" target="_blank" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<?php
									}
								?>
								
								<?php
                                if(!empty($social_links['li'])){
                                ?>	
								<a href="http://<?= $social_links['li'] ?>" target="_blank" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
								<?php
									}
								?>

								<?php
                                if(!empty($social_links['rss'])){
                                ?>
								<a href="http://<?= $social_links['rss'] ?>" target="_blank" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
								<?php
									}
								?>

								<?php
                                if(!empty($social_links['yt'])){
                                ?>
								<a href="http://<?= $social_links['yt'] ?>" target="_blank" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
								<?php
									}
								?>

								<?php
                                if(!empty($social_links['ins'])){
                                ?>
								<a href="http://<?= $social_links['ins'] ?>" target="_blank"  class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
								<?php
								}
								?>


					
							</div>
						</div>

				
						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">Latest Product Categories</h4>
							<ul class="footer-posts list-unstyled">
							<?php 
								$q_footer = "SELECT * FROM category ORDER BY id DESC LIMIT 4";
								$r_footer = mysqli_query($conn, $q_footer);
								if($r_footer){
									$count_footer = mysqli_num_rows($r_footer);
									if($count_footer > 0){
										while ($f_footer = mysqli_fetch_array($r_footer)) {
											?>
											<li>
												<a href="<?= HOST_NAME.'category/'.$f_footer['url'] ?>"><?= $f_footer['name'] ?></a>
											</li>
											<?php
										}
									}else{
										?>
										<li>
										  <a>No categories now</a>
										</li>
										<?php
									}
								}
							?>
								
								
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE Life genatics</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="<?= HOST_NAME ?>">Home</a></li>
								<li><a href="<?= HOST_NAME ?>about-us">About Us</a></li>
								<li><a href="<?= HOST_NAME ?>categories">our products</a></li>
								<li><a href="<?= HOST_NAME ?>contact-us">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>
	<div class="col-md-3">
                            <h4 class="letter-spacing-1">Download app</h4>
							<!-- Footer Logo -->
							<a href="http://<?= $site_option['app_link'] ?>" target="_blank"><img class="footer-logo img-thumbnail" src="<?= HOST_NAME ?>assets/images/btn-appstore.png" alt="app" /></a>
							
							<!-- /Contact Address -->

						</div>
                   
					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="http://www.egyconnect.net" target="_blank">Design &amp; Developed by <img src="<?= HOST_NAME ?>assets/images/egyconnect.png"/></a></li>
							<li>&bull;</li>
							
						</ul>
                       
						&copy; All Rights Reserved, Life genatics-eg
                        
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?= HOST_NAME ?>assets/plugins/';</script>
		<script type="text/javascript" src="<?= HOST_NAME ?>assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?= HOST_NAME ?>assets/js/scripts.js"></script>
        <script type="text/javascript" src="<?= HOST_NAME ?>assets/js/custom.js"></script>
		
		
		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="<?= HOST_NAME ?>assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?= HOST_NAME ?>assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?= HOST_NAME ?>assets/js/view/demo.revolution_slider.js"></script>
		</body>
</html>