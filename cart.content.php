<section class="page-header page-header-xs dark">
				<div class="container">

					<h1 class="text-center">Check Out</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						
						<li class="active">shoping cart</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->


			<!-- CART -->
			<section>
				<div class="container">

				<?php
					
						$items = $_SESSION['name'];
						if($items == null){
					?>
					<!-- EMPTY CART -->
					<div class="panel panel-default">
						<div class="panel-body">
							<strong>Shopping cart is empty!</strong><br />
							You have no items in your shopping cart.<br />
							Click <a href="<?= HOST_NAME. 'categories' ?>">here</a> to continue shopping. <br />
							
						</div>
					</div>
					<!-- /EMPTY CART -->

					<?php
				}else{


				?>

					<!-- CART -->
					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-12 col-sm-12">

							<!-- CART -->
							<form class="cartContent clearfix" method="post" action="<?= HOST_NAME.'checkout' ?>">

								<!-- cart content -->
								<div id="cartContent">
									<!-- cart header -->
									<div class="item head clearfix">
										<span class="cart_img"></span>
										<span class="product_name size-13 bold">PRODUCT NAME</span>
										<span class="remove_item size-13 bold"></span>
										
										<span class="qty size-13 bold">QUANTITY</span>
									</div>
									<!-- /cart header -->
									<?php
										for($i = 0; $i < count($items); $i++){
											if($items[$i] != null){
									?>
									<!-- cart item -->
									<div class="item">
										
										<a href="shop-single-left.html" class="product_name">

											<span><?= $items[$i] ?></span>
											<!--<small>category name</small>-->
										</a>
										<a href="<?= HOST_NAME.'remove/'.$i ?>" class="remove_item"><i class="fa fa-times"></i></a>
										
										<div class="qty"><input type="number" value="1" name="qty[<?= $items[$i] ?>]" maxlength="3" max="999" min="1" /> </div>
										<div class="clearfix"></div>
										<?php //pre($items); ?>
									</div>
									<!-- /cart item -->
									<?php }} ?>


									<!-- update cart -->
									

									<div class="clearfix"></div>
								</div>
								<!-- /cart content -->
                            <button class="btn btn-success margin-top-20 margin-right-10 pull-right submit-cart"><i class="glyphicon glyphicon-ok"></i> Proceed CART</button>

							</form>
							<!-- /CART -->
                                     
								
									
								</div>
									<!-- /update cart -->
						</div>

						<?php
					}
					?>
				
					</div>
					<!-- /CART -->
					
				
			</section>
			<!-- /CART -->

