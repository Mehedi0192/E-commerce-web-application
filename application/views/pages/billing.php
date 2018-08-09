<section id="cart_items">
	<div class="container">
		<div class="step-one">
			<h2 class="heading">Step2: Billing Method</h2>
		</div>
		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-12 clearfix">
					<div class="bill-to">
						<p>Billing Address</p>
						<div class="form-one">

							<form name="update_billing" action="<?php echo base_url('update-billing')?>" method="post">
								<input type="text" name="customer_name" placeholder="customer Name" value="" required >
								<input type="hidden" name="customer_id" value="" required >
								<input type="text" name="email_address" placeholder="Email" value="" required >
								<input type="number" name="mobile_number" placeholder="+88" value="" required >
								<input type="text" name="address" placeholder="Address" value="" required >
								<input type="text" name="city" placeholder="City" value="" required >
								<select name="country">
									<option>select country</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="USA">USA</option>
									<option value="Canada">Canada</option>
								</select><br/><br/>
								<input type="number" name="zip_code" placeholder="zip code" value="" required >

								<input type="checkbox" name="shipping_status"><span>Shipping Same as Billing</span>

								<input type="submit" name="btn" value="Save & Continue" class="btn btn-primary">
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	document.forms['update_billing'].elements['country'].value=<?php echo $customer_info->country?>;
</script>