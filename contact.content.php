<section class="page-header page-header-xs dark">
				<div class="container">

					<h1 class="text-center">CONTACT</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?= HOST_NAME ?>">Home</a></li>
						
						<li class="active">Contact</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>contact us we will be happy for helping you !</h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->
							<?php
								 if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                                    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                                    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                                    $message = mysqli_real_escape_string($conn, $_POST['message']);
                                    $q = "INSERT INTO messages (name, email, phone, subjuct, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
                                    $r = mysqli_query($conn, $q);
                                    if($r){
                                        @mail($site_option['email'], $subject, $message, $email);
                                        echo "<div class='alert alert-success'>Thanks, we recieved your message</div>";
                                    }else{
                                        echo "<div class='alert alert-danger'>Sorry, try again</div>";
                                        
                                    }
                                }
							?>

							<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="name" id="contact:name">
											</div>
											<div class="col-md-6">
												<label for="contact:email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="email" id="contact:email">
											</div>
											<div class="col-md-6">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="phone" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:subject">Subject *</label>
												<input required type="text" value="" class="form-control" name="subject" id="contact:subject">
											</div>
											
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id="contact:message"></textarea>
											</div>
										</div>
									</div>
									
								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-4 col-sm-4">

							<h2>Visit Us</h2>

							<!-- 
							Available heights
								height-100
								height-150
								height-200
								height-250
								height-300
								height-350
								height-400
								height-450
								height-500
								height-550
								height-600
							-->
							<?php
								if($site_option['map_ifram'] != null){
							?>
							<div id="map" class="height-400">
                                
                                <iframe src="<?= $site_option['map_ifram'] ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                            
                            
                            </div>

							<hr />

						<?php }	?>

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> <?= $site_option['address'] ?></span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="<?= $site_option['mob'] ?>"><?= $site_option['mob'] ?></a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:<?= $site_option['email'] ?>"><?= $site_option['email'] ?></a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->