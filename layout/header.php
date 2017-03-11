<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<?php $site_option = getDataById('website_option', 1); ?>
		<title><?= $site_option['title'] ?></title>
		
		
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<link rel="icon" type="image/png" href="<?= HOST_NAME . UPLOADS_PATH . $site_option['icon'] ?>">
        
        <meta name="description" content="<?= $site_option['descrp'] ?>">
        
        <meta name="keywords" content="<?= $site_option['keyw'] ?>">

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?= HOST_NAME ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?= HOST_NAME ?>assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?= HOST_NAME ?>assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?= HOST_NAME ?>assets/css/header-2.css" rel="stylesheet" type="text/css" />
		<link href="<?= HOST_NAME ?>assets/css/color_scheme/darkblue.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <link href="<?= HOST_NAME ?>assets/css/custom.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <link href="<?= HOST_NAME ?>assets/css/layout-shop.css" rel="stylesheet" type="text/css"/>

		<!-- REVOLUTION SLIDER -->
		<link href="<?= HOST_NAME ?>assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="<?= HOST_NAME ?>assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />
		   <style>
            ::-webkit-scrollbar-thumb { background-color: #333 }
            ::-moz-selection {
            background-color: <?= $site_option['background'] ?>;
            }
            ::selection {
            background-color: <?= $site_option['background'] ?>;
}
            

        body::-webkit-scrollbar-thumb {
            background-color: <?= $site_option['scrol'] ?>;
        }
        body {
            scrollbar-base-color: <?= $site_option['scrol'] ?> !important;
            scrollbar-highlight-color: <?= $site_option['scrol'] ?> !important;
        }
        body::-webkit-scrollbar {  width: 10px; }
        body::-webkit-scrollbar-track { background-color: #ebebeb; -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3); }
        body::-webkit-scrollbar-button { background-color: #ebebeb; }  body::-webkit-scrollbar-corner { background-color: #030120; } 
        body {scrollbar-3dlight-color: #ab1c1c;}
        </style>
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation" style="background-color: <?= $site_option['main_color'] ?>">

	<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="header-sm  clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<?php
                                $q_logo  = "SELECT * FROM logo WHERE id = 1";
                                $run_log = mysqli_query($conn, $q_logo);
                                $logo = mysqli_fetch_array($run_log)
                            ?>
<a class="logo pull-left wow fadeInDown" href="<?= HOST_NAME ?>">
							<img src="<?= HOST_NAME . UPLOADS_PATH . $logo['img']; ?>" alt="<?= $site_option['title'] ?>'s Logo" /> <!-- light logo -->
							 <!-- dark logo -->
						</a>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="<?= HOST_NAME . 'search' ?>" method="post">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->
                            
							<!-- QUICK SHOP CART -->
                            <li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner"><?= count($_SESSION['name']) ?></span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								<div class="quick-cart-box">
									<h4>Shop Cart</h4>

									<div class="quick-cart-wrapper">
									<?php
									if($_SESSION['name'] != null){
										$cou = 1;
										for($i =0; $i<count($_SESSION['name']); $i++) {

											?>
											<a href="<?= HOST_NAME.'cart' ?>"><!-- cart item -->
											
											<h6><?= $_SESSION['name'][$i] ?></h6>
											
										</a>
											<?php
											$cou ++;
										}
									}else{
										?>

											<a ><!-- cart item -->
											
											<h6>No item's found</h6>
											
										</a>
										<?php
										}
									?>
										<!-- /cart item -->

										<!-- /cart item -->

										<!-- cart no items example -->
										<!--
										<a class="text-center" href="#">
											<h6>0 ITEMS ON YOUR CART</h6>
										</a>
										-->

									</div>

									<!-- quick cart footer -->
									<div class="quick-cart-footer clearfix">
										<a href="<?= HOST_NAME.'cart' ?>" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
										
									</div>
									<!-- /quick cart footer -->

								</div>
							</li>
						
						</ul>
						<!-- /BUTTONS -->


						<!-- Logo -->
						
						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active' ?>"> <a href="<?= HOST_NAME ?>">Home</a></li>
                                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active' ?>"> <a href="<?= HOST_NAME ?>about-us">about</a></li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle if(basename($_SERVER['PHP_SELF']) == 'categories.php') echo 'active' ?>" onclick="location.href = '<?= HOST_NAME ?>categories';" href="<?= HOST_NAME ?>categories">
											Products
										</a>
										<ul class="dropdown-menu">
										<?php
											$q_cat_menu = "SELECT * FROM category";
											$r_cat_menu = mysqli_query($conn, $q_cat_menu);
											$count_menu = mysqli_num_rows($r_cat_menu);
											if($r_cat_menu && $count_menu > 0){
													while($f_cat_menu = mysqli_fetch_array($r_cat_menu)){


										?>
											<li>
												<a href="<?= HOST_NAME.'category/'.$f_cat_menu['url'] ?>">
													 <?= $f_cat_menu['name'] ?>
												</a>
												
											</li>
											<?php }
											} ?>
										</ul>
									</li>
                                    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active' ?>"> <a href="<?= HOST_NAME ?>contact-us">Contact</a></li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>