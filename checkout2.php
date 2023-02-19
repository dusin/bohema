<?php
	
	include "header.php";

?>


<script src="https://widget.packeta.com/v6/www/js/library.js"></script>
<script>
	var packetaApiKey = 'keya175cedfaf9be7c9';
	/*
		This function will receive either a pickup point object, or null if the user
		did not select anything, e.g. if they used the close icon in top-right corner
		of the widget, or if they pressed the escape key.
	*/
	function showSelectedPickupPoint(point) {
		var spanElement = document.getElementById('packeta-point-info');
		var idElement = document.getElementById('packeta-point-id');
		if (point) {
			var recursiveToString = function(o) {
				return Object.keys(o).map(
					function(k) {
						if (o[k] === null) {
							return k + " = null";
						}

						return k + " = " + (typeof(o[k]) == "object" ?
							"<ul><li>" + recursiveToString(o[k]) + "</li></ul>" :
							o[k].toString().replace(/&/g, '&amp;').replace(/</g, '&lt;')
						);
					}
				).join("</li><li>");
			};

			spanElement.innerText =
				"Address: " + point.name + "\n" + point.zip + " " + point.city + "\n\n" +
				"All available fields:\n";

			spanElement.innerHTML +=
				"<ul><li>" + recursiveToString(point) + "</li></ul>";

			idElement.value = point.id;
		} else {
			spanElement.innerText = "None";
			idElement.value = "";
		}
	};
</script>



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
		<div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Choose your delivery method.</p></div>
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
		  <li class="nav-item w-25"><a class="nav-link text-sm " href="checkout1.html">Address</a></li>
		  <li class="nav-item w-25"><a class="nav-link text-sm active" href="checkout2.html">Delivery Method</a></li>
		  <li class="nav-item w-25"><a class="nav-link text-sm disabled" href="#">Payment Method </a></li>
		  <li class="nav-item w-25"><a class="nav-link text-sm disabled" href="#">Order Review</a></li>
		</ul>
		<div class="block my-5">
		  <div class="block-body">
			<div class="row">
			  <div class="mb-4 col-md-6 d-flex align-items-center">
				<input type="radio" name="shippping" id="option0">
				<label class="ms-3" for="option0"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
			  </div>
			  <div class="mb-4 col-md-6 d-flex align-items-center">
				<input type="radio" name="shippping" id="option1">
				<label class="ms-3" for="option1"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
			  </div>
			  <div class="mb-4 col-md-6 d-flex align-items-center">
				<input type="radio" name="shippping" id="option2">
				<label class="ms-3" for="option2"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
			  </div>
			  <div class="mb-4 col-md-6 d-flex align-items-center">
				<input type="button" onclick="Packeta.Widget.pick(packetaApiKey, showSelectedPickupPoint)" value="Select pick-up point...">
				<p>Selected point:
					<input type="hidden" id="packeta-point-id">
					<span id="packeta-point-info">None</span>
				</p>
			  </div>
			</div>
		  </div>
		  <div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-link text-muted" href="cart.html"> <i class="fa fa-angle-left me-2"></i>Back to the addresses</a><a class="btn btn-dark" href="checkout3.html">Choose payment method<i class="fa fa-angle-right ms-2"></i></a></div>
		</div>
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
