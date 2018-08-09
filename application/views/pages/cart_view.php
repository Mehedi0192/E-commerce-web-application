<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
					$contents=$this->cart->contents();
					//echo '<pre>';
						//print_r($contents);
						foreach ($contents as $cart_info) {
						?>
						<tr>
							<td class="cart_product">
								<a href=""><img height="100" width="100" src="<?php echo base_url().$cart_info['options']['image'] ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $cart_info['name']?></a></h4>
							</td>
							<td class="cart_price">
								<p>BDT <?php echo $cart_info['price']?></p>
							</td>
							<td class="cart_quantity">
							<div class="cart_quantity_button">

								<form action="<?php echo base_url('update-cart-product-qty')?>" method="post">
									<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $cart_info['qty']?>" autocomplete="off" size="2">

									<input type="hidden" name="rowid" value="<?php echo $cart_info['rowid']?>">
									<input class="cart_quantity_input" type="submit" name="btn" value="Update">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">BDT <?php echo $cart_info['subtotal']?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url();?>delete-to-cart/<?php echo $cart_info['rowid'] ?>"> <i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		</section> <!--/#cart_items-->
		<section id="do_action">
			<div class="container">
				<div class="heading">
					<h3>What would you like to do next?</h3>
					<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="chose_area">
							<ul class="user_option">
								<li>
									<input type="checkbox">
									<label>Use Coupon Code</label>
								</li>
								<li>
									<input type="checkbox">
									<label>Use Gift Voucher</label>
								</li>
								<li>
									<input type="checkbox">
									<label>Estimate Shipping & Taxes</label>
								</li>
							</ul>
							<ul class="user_info">
								<li class="single_field">
									<label>Country:</label>
									<select>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									
								</li>
								<li class="single_field">
									<label>Region / State:</label>
									<select>
										<option>Select</option>
										<option>Dhaka</option>
										<option>London</option>
										<option>Dillih</option>
										<option>Lahore</option>
										<option>Alaska</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									
								</li>
								<li class="single_field zip-field">
									<label>Zip Code:</label>
									<input type="text">
								</li>
							</ul>
							<a class="btn btn-default update" href="">Get Quotes</a>
							<a class="btn btn-default check_out" href="">Continue</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li>Cart Sub Total <span>BDT <?php $sub_total=$this->cart->total();
									echo $sub_total; ?>
									
								</span></li>
								<li>VAT(5%)<span>BDT <?php $vat=($this->cart->total()*5)/100;
									echo $vat; ?>
									
								</span></li>
								<li>Shipping Cost <span>BDT <?php $shipping_cost=100;
									echo $shipping_cost; ?>
								</span></li>
								<li>Total <span>BDT <?php $g_total=$sub_total+$vat+$shipping_cost;
									echo $g_total; ?>
								    </span></li>
							</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="<?php echo base_url('checkout')?>">Check Out</a>
						</div>
					</div>
				</div>
			</div>
			</section><!--/#do_action-->