			<div class="col-sm-3">
			<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<!--<div class="panel panel-default">
											<div class="panel-heading">
											</div>
											<div id="sportswear" class="panel-collapse collapse">
													</div>
											</div>
						</div>-->
						<?php $all_published_category=$this->admin_model->select_all_published_category();
						foreach($all_published_category as $category)
						{
						?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="<?php echo base_url("category/$category->category_id")?>"><?php echo $category->category_name;?></a></h4>
							</div>
						</div>
						<?php } ?>

						</div><!--/category-products-->
						
						<div class="brands_products"><!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<?php $all_published_manufacturer=$this->admin_model->select_all_published_manufacturer();
								foreach($all_published_manufacturer as $manufacturer) {
								?>
								<li><a href="<?php echo base_url("brand/$manufacturer->manufacturer_id")?>"><span class="pull-right"></span><?php echo $manufacturer->manufacturer_name;?></a></li>
								<?php } ?>
							</ul>
						</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
						<h2>Price Range</h2>
						<div class="well text-center">
							<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
							<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
						</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
						<img src="<?php echo base_url()?>asset/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>