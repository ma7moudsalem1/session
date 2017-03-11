	<section class="page-header page-header-xs dark">
				<div class="container">

					<h1 class="text-center">Check Out</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						
						<li class="active">Check out</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<!-- CART -->
			<section>
				<div class="container">

				

					<!-- CART -->
					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-6 col-sm-12">

							<!-- CART -->
							<form class="cartContent clearfix" method="post" action="#">

								<!-- cart content -->
								<div id="cartContent">
									<!-- cart header -->
									<div class="item head clearfix">
										<span class="cart_img"></span>
										<span class="product_name size-13 bold">PRODUCT NAME</span>
									
										
										<span class="qty size-13 bold">QUANTITY</span>
									</div>
									<!-- /cart header -->
									<?php
									if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn'])){
										$fullname = mysqli_real_escape_string($conn, $_POST['firstname']);
										$email = mysqli_real_escape_string($conn, $_POST['email']);
										$phone = mysqli_real_escape_string($conn, $_POST['phone']);
										$address = mysqli_real_escape_string($conn, $_POST['address']);
										$now = date("Y-m-d H:i:s");
										$q = "INSERT INTO orders (name, mob, email, address, order_time) VALUES ('$fullname', '$phone', '$email', '$address', '$now')";
										$r = mysqli_query($conn, $q);
										$id = mysqli_insert_id($conn);
									
										$items = $_SESSION['name'];
										for($i = 0; $i < count($items); $i++){
											if($items[$i] != null){
												$namepro = $items[$i];
												$q_s = "SELECT * FROM subpro WHERE name = '$namepro' LIMIT 1";
										$r_s = mysqli_query($conn, $q_s);
										if($r_s){
											while ($q_s = mysqli_fetch_array($r_s)) {
												$subproid =  $q_s['id'];
												$qty = $_POST['qty'][$namepro];
												echo $qty.'<br>';
											$q_i = "INSERT INTO product_orders (id_product, id_order, count) VALUES ($subproid, $id, $qty)";
											$r_i = mysqli_query($conn, $q_i);
												//echo $q_i;
											
											}
											
										}
									}
								}
								$link = HOST_NAME;
								session_destroy();
								session_unset();
								echo "<script>window.open('$link', '_self')</script>";
							}
									
									?>
									
									<?php
									$items = $_SESSION['name'];
										for($i = 0; $i < count($items); $i++){
											if($items[$i] != null){
												$namepro = $items[$i];
									
									?>
									<!-- cart item -->
									<div class="item">
										
										<a href="shop-single-left.html" class="product_name">
											<span><?= $items[$i] ?></span>
											
										</a>
										
										
										<div class="qty"><input type="number" value="<?= $_POST['qty'][$namepro] ?>" name="qty[<?= $items[$i] ?>]" maxlength="3" max="999" min="1"readonly /> </div>
										<div class="clearfix"></div>
									</div> 
									
									<!-- /cart item -->
									<?php }} ?>

									<!-- update cart -->
									

									<div class="clearfix"></div>
								</div>
								<!-- /cart content -->

					
							<!-- /CART -->
                                    
									<!-- /update cart -->
						</div>

                        <div class="col-lg-6 col-sm-12">
							<div class="heading-title">
								<h4>Shipping</h4>
							</div>

							
							<!-- BILLING -->
							<fieldset class="margin-top-20">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<label for="billing_firstname">Full Name *</label>
										<input id="billing_firstname" name="firstname" type="text" class="form-control required">
									</div>
									
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6">
										<label for="billing_email">Email *</label>
										<input id="billing_email" name="email" type="email" class="form-control required">
									</div>
                                    <div class="col-md-6 col-sm-6">
										<label for="billing_phone">Phone *</label>
										<input id="billing_phone" name="phone" type="text" class="form-control required">
									</div>
									
								</div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
										<label for="billing_phone">Address *</label>
										<input id="billing_address"  name="address" type="text" class="form-control required">
									</div>
                                
                                </div>
								
								<hr>

								
                                 <button type="submit" name="btn" class="btn btn-success submit-cart margin-auto"><i class="glyphicon glyphicon-ok"></i> Confirm shipping</button>
                            
							</fieldset>
							<!-- /BILLING -->
							</form>

						
						</div>
				
					</div>
					<!-- /CART -->
					
				</div>
			</section>
			<!-- /CART -->