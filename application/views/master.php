<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?php echo $title;?> | E-Shopper</title>
		<link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/css/price-range.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/css/animate.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/css/main.css" rel="stylesheet">
		<link href="<?php echo base_url()?>asset/css/responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />  
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" /> 
		<!--[if lt IE 9]>
		<script src="<?php echo base_url()?>asset/asset/js/html5shiv.js"></script>
		<script src="<?php echo base_url()?>asset/asset/js/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php echo base_url()?>asset/images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>asset/images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>asset/images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>asset/images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>asset/images/ico/apple-touch-icon-57-precomposed.png">
		</head><!--/head-->
		<body>
			<header id="header"><!--header-->
			<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +88 01705683096</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@eshoppers.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div><!--/header_top-->
			
			<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php base_url();?>"><img src="<?php echo base_url()?>asset/images/home/logo.png" alt="E-Shopper" /></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url();?>welcome/account"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?php echo base_url('checkout')?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url('show-cart')?>"><i class="fa fa-shopping-cart"></i> Cart(<?php echo $this->cart->total_items();?>)</a></li>
								<?php
								$customer_id=$this->session->userdata('customer_id');
								$customer_name=$this->session->userdata('customer_name');
								if($customer_id)
								{ ?>
								<li><a href="<?php echo base_url('logout')?>"><i class="fa fa-lock"></i> Logout</a></li>
								<li><a href=""><i class="fa fa-lock"></i><?php echo $customer_name;?></a></li>
								<?php } else { ?>
								<li><a href="<?php echo base_url('checkout')?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div><!--/header-middle-->
			
			<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url('welcome/home');?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
								<ul role="menu" class="sub-menu">
									<li><a href="shop.html">Products</a></li>
									<li><a href="product-details.html">Product Details</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="login.html">Login</a></li>
								</ul>
							</li>
							<!--<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
									<li><a href="blog.html">Blog List</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
							</ul>-->
						</li>
						<!--<li><a href="404.html">404</a></li>-->
						<li><a href="contact-us.html">Contact</a></li>
					</ul>
				</div>
			</div>
	
<script>
$("#swSearch").autocomplete({
	minLength: 1,
	source: function(req, add){
		$.ajax({
			url: "<?php echo base_url(); ?>index.php/welcome/search", //Controller where search is performed
			dataType: 'json',
			type: 'POST',
			data: req,
			success: function(data){
				if(data.response =='true'){
				   add(data.message);
				}
			}
		});
	}
});
</script>
            
			<div class="col-sm-3">
				<div class="search_box pull-right">

					<form action="<?php echo base_url("search-product")?>" method="post">
					<input type="text" placeholder="Find Your Product" name="product_name" id="swSearch">
					<input type="hidden" name="product_id">   
                    </form>
            <ul>  
            <div class="well" id="result"></div>  
            </ul>
				</div>
			</div>
			
		</div>
	</div>
	</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<?php echo $slider;
				?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<?php echo $side_bar;?>
			
			<div class="col-sm-9 padding-right">
				<?php echo $featured_product; ?>
				
				<!--features_items-->
				<?php echo $category_product;?>
				<!--category-product-->
				
				<?php echo $recomended_product;?>
				<!--recommended-iteams-->
				
			</div>
		</div>
	</div>
</section>

<footer id="footer"><!--Footer-->
<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="companyinfo">
					<h2><span>e</span>-shopper</h2>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="<?php echo base_url()?>asset/images/home/iframe1.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="<?php echo base_url()?>asset/images/home/iframe2.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="<?php echo base_url()?>asset/images/home/iframe3.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="<?php echo base_url()?>asset/images/home/iframe4.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="address">
					<img src="<?php echo base_url()?>asset/images/home/map.png" alt="" />
					<p></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-widget">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Service</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Online Help</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Change Location</a></li>
						<li><a href="#">FAQ’s</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Quock Shop</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">T-Shirt</a></li>
						<li><a href="#">Mens</a></li>
						<li><a href="#">Womens</a></li>
						<li><a href="#">Gift Cards</a></li>
						<li><a href="#">Shoes</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Policies</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privecy Policy</a></li>
						<li><a href="#">Refund Policy</a></li>
						<li><a href="#">Billing System</a></li>
						<li><a href="#">Ticket System</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>About Shopper</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Company Information</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Store Location</a></li>
						<li><a href="#">Affillate Program</a></li>
						<li><a href="#">Copyright</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-sm-offset-1">
				<div class="single-widget">
					<h2>About Shopper</h2>
					<form action="#" class="searchform">
						<input type="text" placeholder="Your email address" />
						<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
						<p>Get the most recent updates from <br />our site and be updated your self...</p>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<p class="pull-left">Copyright © 2018 E-SHOPPER Inc. All rights reserved.</p>
			<p class="pull-right">Developed by <span><a target="_blank" href="">Mehedi</a></span></p>
		</div>
	</div>
</div>

</footer><!--/Footer-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>  
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url()?>asset/js/jquery.js"></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url()?>asset/js/price-range.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>asset/js/main.js"></script>
</body>
</html>