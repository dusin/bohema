<?php
	
	include "header.php";

?>
<section class="hero">
  <div class="container">
	<!-- Breadcrumbs -->
	<ol class="breadcrumb justify-content-center">
	  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
	  <li class="breadcrumb-item active">Checkout        </li>
	</ol>
	<!-- Hero Content-->
	<div class="hero-content pb-5 text-center">
	  <h1 class="hero-heading">Checkout</h1>
	  <div class="row">   
		<div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Please fill in your address.</p></div>
	  </div>
	</div>
  </div>
</section>
<!-- Checkout-->
<section>
  <div class="container">
	<div class="row">
	  <div class="col-lg-8">
		<ul class="custom-nav nav nav-pills mb-5">
		  <li class="nav-item w-25"><a class="nav-link text-sm active" href="checkout1.html">Address</a></li>
		  <li class="nav-item w-25"><a class="nav-link text-sm disabled" href="#">Delivery Method</a></li>
		  <li class="nav-item w-25"><a class="nav-link text-sm disabled" href="#">Payment Method </a></li>
		  <li class="nav-item w-25"><a class="nav-link text-sm disabled" href="#">Order Review</a></li>
		</ul>
		<form action="#">
		  <div class="block">
			<!-- Invoice Address-->
			<div class="block-header">
			  <h6 class="text-uppercase mb-0">Invoice address                    </h6>
			</div>
			<div class="block-body">
			  <div class="row">
				<div class="form-group col-md-6">
				  <label class="form-label" for="fullname_invoice">Full Name</label>
				  <input class="form-control" type="text" name="fullname_invoice" placeholder="Joe Black" id="fullname_invoice">
				</div>
				<div class="form-group col-md-6">
				  <label class="form-label" for="emailaddress_invoice">Email Address</label>
				  <input class="form-control" type="text" name="emailaddress_invoice" placeholder="joe.black@gmail.com" id="emailaddress_invoice">
				</div>
				<div class="form-group col-md-6">
				  <label class="form-label" for="street_invoice">Street</label>
				  <input class="form-control" type="text" name="street_invoice" placeholder="123 Main St." id="street_invoice">
				</div>
				<div class="form-group col-md-6">
				  <label class="form-label" for="city_invoice">City</label>
				  <input class="form-control" type="text" name="city_invoice" placeholder="City" id="city_invoice">
				</div>
				<div class="form-group col-md-6">
				  <label class="form-label" for="zip_invoice">ZIP</label>
				  <input class="form-control" type="text" name="zip_invoice" placeholder="Postal code" id="zip_invoice">
				</div>
				<div class="form-group col-md-6">
				  <label class="form-label" for="state_invoice">State</label>
				  <input class="form-control" type="text" name="state_invoice" placeholder="State" id="state_invoice">
				</div>
				<div class="form-group col-md-6">
				  <label class="form-label" for="phonenumber_invoice">Phone Number</label>
				  <input class="form-control" type="text" name="phonenumber_invoice" placeholder="Phone Number" id="phonenumber_invoice">
				</div>
				<div class="mb-4 col-12 mt-3">
				  <div class="form-check">
					<input class="form-check-input" id="show-shipping-address" type="checkbox" name="clothes-brand">
					<label class="form-check-label align-middle" for="show-shipping-address" data-bs-toggle="collapse" data-bs-target="#shippingAddress">Use a different shipping address</label>
				  </div>
				</div>
			  </div>
			  <!-- /Invoice Address-->
			</div>
			<!-- Shippping Address-->
			<div class="collapse" id="shippingAddress">
			  <div class="block">
				<div class="block-header">
				  <h6 class="text-uppercase mb-0">Shipping address </h6>
				</div>
				<div class="block-body">
				  <div class="row">
					<div class="form-group col-md-6">
					  <label class="form-label" for="street_shipping">Street</label>
					  <input class="form-control" type="text" name="street_shipping" placeholder="123 Main St." id="street_shipping">
					</div>
					<div class="form-group col-md-6">
					  <label class="form-label" for="city_shipping">City</label>
					  <input class="form-control" type="text" name="city_shipping" placeholder="City" id="city_shipping">
					</div>
					<div class="form-group col-md-6">
					  <label class="form-label" for="zip_shipping">ZIP</label>
					  <input class="form-control" type="text" name="zip_shipping" placeholder="Postal code" id="zip_shipping">
					</div>
					<div class="form-group col-md-6">
					  <label class="form-label" for="state_shipping">State</label>
					  <input class="form-control" type="text" name="state_shipping" placeholder="State" id="state_shipping">
					</div>
					<div class="form-group col-md-6">
					  <label class="form-label" for="phonenumber_shipping">Phone Number</label>
					  <input class="form-control" type="text" name="phonenumber_shipping" placeholder="Phone Number" id="phonenumber_shipping">
					</div>
				  </div>
				</div>
			  </div>
			  <!-- /Shipping Address-->
			</div>
		  </div>
		  <div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-link text-muted" href="cart.html"> <i class="fa fa-angle-left me-2"></i>Back </a><a class="btn btn-dark" href="checkout2.html">Choose delivery method<i class="fa fa-angle-right ms-2"></i></a></div>
		</form>
	  </div>
	  <div class="col-lg-4">
		<div class="block mb-5">
		  <div class="block-header">
			<h6 class="text-uppercase mb-0">Order Summary</h6>
		  </div>
		  <div class="block-body bg-light pt-1">
			<p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
			<ul class="order-summary mb-0 list-unstyled">
			  <li class="order-summary-item"><span>Order Subtotal </span><span>$390.00</span></li>
			  <li class="order-summary-item"><span>Shipping and handling</span><span>$10.00</span></li>
			  <li class="order-summary-item"><span>Tax</span><span>$0.00</span></li>
			  <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">$400.00</strong></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<?php
	
	include "footer.php";
	
?>
