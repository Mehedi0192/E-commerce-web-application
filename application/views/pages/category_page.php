<div class="features_items"><!--features_items-->
<h2 class="title text-center"></h2>
<?php foreach($category_page_product as $product) { ?>
<div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
				<img height="180" src="<?php echo base_url().$product->product_image ?>" alt="" />
				<h2>BDT <?php echo $product->product_price; ?></h2>
				<p><?php echo $product->product_name; ?></p>
				<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
			</div>
			<div class="product-overlay">
				<div class="overlay-content">
					<h2><?php echo $product->product_price; ?></h2>
					<p><?php echo $product->product_name; ?></p>
					<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
					<a href="<?php echo base_url("product-details/$product->product_id")?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product details</a>
				</div>
			</div>
		</div>
		<div class="choose">
			<ul class="nav nav-pills nav-justified">
				<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
				<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
			</ul>
		</div>
	</div>
</div>
<?php } ?>
</div>