	<div class="recommended_items"><!--recommended_items-->
					<h2 class="title text-center">recommended items</h2>
					
					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">

						<?php $product_info=$this->admin_model->select_top_product();?>
						<div class="carousel-inner">
							<?php 
							$i=1;
							foreach ($product_info as $product) {

								if($i == 1)
								{
									echo "<div class='item active'>";
								}
								else
								{
									echo "<div class='item'>";
								}
							?>
                                 <div class="col-sm-3"></div>
								<div class="col-sm-6">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url().$product->product_image;?>" alt="" />
												<h2><?php echo $product->product_price;?> </h2>
												<p><?php echo $product->product_name;?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<?php $i++; } ?>


						</div>
						<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					</div><!--/recommended_items-->