<section class="page-header page-header-xs dark">
				<div class="container">

					<h1 class="text-center">About</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?= HOST_NAME ?>">Home</a></li>
						
						<li class="active">About</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
<?php  
	$about = getDataById('pages', 2);
?>
<!-- Info -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-md-6 col-sm-6">
							<img class="img-responsive wow fadeIn" data-wow-delay="0.6s" src="<?= HOST_NAME . PAGES . $about['img'] ?>" alt="" />
						</div>

						<div class="col-md-6 col-sm-6">
							<header class="margin-bottom-60">
								<h2><?= $about['title'] ?></h2>
							
							</header>

							<p><?= $about['content'] ?></p>
							
						</div>

					</div>

				</div>
			</section>
			<!-- /Info -->
