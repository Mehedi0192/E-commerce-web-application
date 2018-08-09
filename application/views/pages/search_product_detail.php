<div class="product-details"><!--product-details-->
<div class="col-sm-6">
	<div class="view-product">
		<img src="<?php echo base_url().$product_info->product_image ?>" alt="" />
		<h3>ZOOM</h3>
	</div>
	
</div>
<div class="col-sm-6">
	<div class="product-information"><!--/product-information-->
	<img src="images/product-details/new.jpg" class="newarrival" alt="" />
	<h2><?php echo $product_info->product_name?></h2>
	<p>Web ID: <?php echo $product_info->product_id?></p>
	<img src="images/product-details/rating.png" alt="" />
	<span>
		<span>BDT <?php echo $product_info->product_price?></span>
		
		<form method="post" action="<?php echo base_url('add-to-cart')?>">
			<label>Quantity :</label>
			<input type="text" name="qty" value="1" />
			<input type="hidden" name="product_id" value="<?php echo $product_info->product_id?>">
			
			<button type="Submit" class="btn btn-fefault cart">
			<i class="fa fa-shopping-cart"></i>
			Add to cart
			</button>
		</form>

	</span>
	<p><b>Availability:</b>
		<?php if($product_info->product_qty>0) { ?>
		In Stock
		<?php } else { ?>
		Out Of Stock
		<?php } ?>
	</p>
	<p><b>Condition:</b> New</p>
	<p><b>Brand:</b>
		<?php echo $product_info->manufacturer_name?>
	</p>
	<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
	</div><!--/product-information-->
</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
<div class="col-sm-12">
	<ul class="nav nav-tabs">
		<h4 align="center" style="color: orange; font-size: 22px; "><b>Product Details</b></h4>
		<!--<li class="active"><a href="#details" data-toggle="tab">Details</a></li>
		<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
		<li><a href="#tag" data-toggle="tab">Tag</a></li>
		<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>-->
	</ul>
</div>
<div class="tab-content">
	<div class="tab-pane fade active in" id="details">
		<div class="col-sm-6">
    <?php echo $product_info->product_long_desc;?>
	</div>
</div>

	
	<!--<div class="tab-pane fade" id="companyprofile" >
     <div class="col-sm-3">

	</div>
	</div>
	
	<div class="tab-pane fade" id="tag" >
     <div class="col-sm-3">

	</div>
	</div>-->
	
	<!--<div class="tab-pane fade active in" id="reviews" >
		<div class="col-sm-12">
			<ul>
				<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
				<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
				<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
			</ul>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><b>Write Your Review</b></p>
			
			<form action="#">
				<span>
					<input type="text" placeholder="Your Name"/>
					<input type="email" placeholder="Email Address"/>
				</span>
				<textarea name="" ></textarea>
				<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
				<button type="button" class="btn btn-default pull-right">
				Submit
				</button>
			</form>
		</div>
	</div>-->
	
</div>
</div><!--/category-tab-->