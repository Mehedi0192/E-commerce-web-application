<section id="cart_items">
	<div class="container">
		<div class="step-one">
			<h2 class="heading">Step3: Shipping Method</h2>
		</div>
		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-12 clearfix">
					<div class="bill-to">
						<p>Shipping Address</p>
						<div class="form-one">
							<form action="<?php echo base_url('save-shipping')?>" method="post">
								<input type="text" name="customer_name" placeholder="customer Name" required  >
								<input type="text" name="email_address" placeholder="Email" required  >
								<input type="number" name="mobile_number" placeholder="+88" required >
								<input type="text" name="address" placeholder="Address" required >
								<input type="text" name="city" placeholder="City" required >
								<select name="country">
									<option>select country</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="USA">USA</option>
									<option value="Canada">Canada</option>
								</select><br/><br/>
								<input type="number" name="zip_code" placeholder="zip code" required >

								<input type="submit" name="btn" value="Save & Continue" class="btn btn-primary">
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>