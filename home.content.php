
			<!-- Welcome -->
			<section>
				<div class="container">
					<?php
                        
                        $welocme_page = getDataById('pages', 1);
                    ?>
					<div class="text-center wow fadeInDown">
						<h1><?= $welocme_page['title'] ?></h1>
						<h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-400 size-18"><?= $welocme_page['content'] ?></h2>
					</div>

				</div>
			</section>
			<!-- Welcome -->



			<!-- Services -->
			<section>
				<div class="container">

					<div class="row">
                       <div class="heading-title heading-dotted text-center">
                       <?php $title_page = getDataById('pages', 5) ?>
	<h2 class="wow bounceIn"><?= $title_page['title'] ?></h2>
</div>
						<div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

						<?php 
						$page6 = getDataById('pages', 6); 
						$icon6 = getDataById('fa', $page6['fa']);

						$page7 = getDataById('pages', 7); 
						$icon7 = getDataById('fa', $page7['fa']);

						$page8 = getDataById('pages', 8); 
						$icon8 = getDataById('fa', $page8['fa']);

						$page9 = getDataById('pages', 9); 
						$icon9 = getDataById('fa', $page9['fa']);

						$page10 = getDataById('pages', 12); 
						$icon10 = getDataById('fa', $page10['fa']);

						$page11 = getDataById('pages', 11); 
						$icon11 = getDataById('fa', $page11['fa']);
						?>

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="category.html">
									<i class="fa <?= $icon6['class'] ?>"></i>
									<h2><?= $page6['title'] ?></h2>
								</a>
								<p class="text-muted"><?= $page6['content'] ?></p>
							</div>

						</div>

						<div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="category.html">
									<i class="fa <?= $icon7['class'] ?>"></i>
									<h2> <?= $page7['title'] ?></h2>
								</a>
								<p class="text-muted"><?= $page7['content'] ?></p>
							</div>

						</div>

						<div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="category.html">
									<i class="fa <?= $icon8['class'] ?>"></i>
									<h2> <?= $page8['title'] ?></h2>
								</a>
								<p class="text-muted"><?= $page8['content'] ?></p>
							</div>

						</div>

						<div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="category.html">
									<i class="fa <?= $icon9['class'] ?>"></i>
									<h2> <?= $page8['title'] ?></h2>
								</a>
								<p class="text-muted"><?= $page9['content'] ?></p>
							</div>

						</div>

						<div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="category.html">
									<i class="fa <?= $icon10['class'] ?>"></i>
									<h2><?= $page10['title'] ?></h2>
								</a>
								<p class="text-muted"><?= $page10['content'] ?></p>
							</div>

						</div>
                        <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="category.html">
									<i class="fa <?= $icon11['class'] ?>"></i>
									<h2> <?= $page11['title'] ?></h2>
								</a>
								<p class="text-muted"><?= $page11['content'] ?></p>
							</div>

						</div>


					</div>

				</div>
			</section>
			<!-- /Services -->



			<!-- Info -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-md-6 col-sm-6">
							<img class="img-responsive wow fadeIn" data-wow-delay="0.6s" src="assets/images/slide2.jpeg" alt="" />
						</div>
						<?php
                        
                        $landing_about = getDataById('pages', 2);
                    	?>

						<div class="col-md-6 col-sm-6">
							<header class="margin-bottom-60">
								<h2><?= $landing_about['title'] ?></h2>
							
							</header>

							<p><?= $landing_about['content'] ?></p>
							

							<a class="btn btn-primary btn-lg margin-top-30" href="<?= HOST_NAME ?>about-us">Explore <?= $site_option['title'] ?></a>
						</div>

					</div>

				</div>
			</section>
			<!-- /Info -->





			<!-- CALLOUT -->
			<div class="alert alert-transparent bordered-bottom nomargin">
				<div class="container">

					<div class="row">

						<div class="col-md-9 col-sm-12"><!-- left text -->
						<?php
                        
                        $landing_contact = getDataById('pages', 3);
                    	?>
							<h3><?= $landing_contact['title'] ?> <span><strong><?= $site_option['mob'] ?></strong></span></h3>
							<p class="font-lato weight-300 size-20 nomargin-bottom">
								<?= $landing_contact['content'] ?>
							</p>
						</div><!-- /left text -->

						
						<div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
							<a href="<?= HOST_NAME ?>contact-us" rel="nofollow" class="btn btn-primary btn-lg">Contact Us</a>
						</div><!-- /right btn -->

					</div>

				</div>
			</div>
			<!-- /CALLOUT -->
