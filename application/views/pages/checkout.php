<section id="cart_items">
		<div class="container">

			<div class="step-one">
				<h2 class="heading">Step1: Checkout Method</h2>
			</div>

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-7">
						<div class="shopper-info">
							<p align="center"><b>Registration Here</b></p>
							<form method="post" action="<?php echo base_url('customer-registration')?>">

								<input type="text" name="customer_name" placeholder="Full Name" required>
								<input type="mail" name="email_address" placeholder="Email" required>
								<input type="password" name="password" placeholder="Password" required>
								<input type="password" placeholder="Confirm password" required>

								<input type="submit" name="rbtn" class="btn btn-primary" value="Register Here">
							</form>

						</div>
					</div>
					<div class="col-sm-5">
						<div class="shopper-info">
							<p align="center"><b>Login Your Account</b></p>
							<form method="post" action="<?php echo base_url('customer-login')?>">
								<input type="mail" name="customer_emaill" placeholder="Email" required>
								<input type="password" name="customer_password" placeholder="Password" required>
								<input type="submit" name="btn" value="login" class="btn btn-primary">
							</form>
						</div>
					</div>

		</div>
	</div>
</div>
	</section> <!--/#cart_items-->