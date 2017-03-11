<section class="page-header page-header-xs dark">
				<div class="container">

					<h1 class="text-center">All categories</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?= HOST_NAME ?>">Home</a></li>
						<li><a>Products</a></li>
						<li class="active">All categories</li>
					</ol><!-- /breadcrumbs -->

				</div>
			
			</section>
			<!-- /PAGE HEADER -->


			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
					
						<!-- LEFT -->
						<?php
							$q_category = "SELECT * FROM category";
							$r_category = mysqli_query($conn, $q_category);
							$num = 1;
							while($f_category = mysqli_fetch_array($r_category)){
								$id_catg = $f_category['id'];
								$q_subcat = "SELECT * FROM sub_cat WHERE category = $id_catg";
								$r_subcat = mysqli_query($conn, $q_subcat);
								$count = mysqli_num_rows($r_subcat);

						?>
						<div class="col-md-12 col-sm-12">

							<div class="heading-title heading-border-bottom heading-color">
							
								<h2 class="size-20"><a href="category/<?= $f_category['url'] ?>"><span>0<?= $num ?>.</span><?= $f_category['name'] ?></a></h2>
							</div>

							<div class="margin-bottom-80">
								<?php
									if($count != 0){
								 ?>
								<ul class="list-unstyled list-icons">
									<?php 
										while($f_subcat = mysqli_fetch_array($r_subcat)){
									?>
									<li><i class="fa fa-flask"></i><a href="<?= HOST_NAME.'sub-category/'. $f_subcat['url'] ?>"><?= $f_subcat['name'] ?> </a></li>
									<?php } ?>
								</ul>
								<?php
								}
								?>
							</div>


						</div>
                        <?php
                        $num ++;
                    }
                    ?>
                
					</div>
					
				</div>
			</section>
			<!-- / -->
