<?php
	
	include "header.php";

?>
<!-- Hero Section-->
<section class="hero">
  <div class="container">
	<!-- Breadcrumbs -->
	<ol class="breadcrumb justify-content-center">
	  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
	  <li class="breadcrumb-item active">Shopping cart        </li>
	</ol>
	<!-- Hero Content-->
	<div class="hero-content pb-5 text-center">
	  <h1 class="hero-heading">Shopping cart</h1>
	  <div class="row">   
		<div class="col-xl-8 offset-xl-2"><p class="lead text-muted">This is a second variant of the cart page. It handles differently smaller viewports - items do not stay in the table but stack a bit more. Resize your browser window to see it in action.</p></div>
	  </div>
	</div>
  </div>
</section>
<!-- Shopping Cart Section-->
<section>
  <div class="container">
	<div class="row mb-5"> 
	  <div class="col-lg-8">
		<div class="cart">
		  <div class="cart-header text-center">
			<div class="row">
			  <div class="col-md-5">Item</div>
			  <div class="col-md-7 d-none d-md-block">
				<div class="row">
				  <div class="col-md-3">Price</div>
				  <div class="col-md-4">Quantity</div>
				  <div class="col-md-3">Total</div>
				  <div class="col-md-2"></div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="cart-body">
			<!-- Product-->
			<div class="cart-item">
			  <div class="row d-flex align-items-center text-start text-md-center">
				<div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
				  <div class="d-flex align-items-center"><a href="detail.html"><img class="cart-item-img" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."></a>
					<div class="cart-title text-start"><a class="text-uppercase text-dark" href="detail.html"><strong>Skull Tee</strong></a><br><span class="text-muted text-sm">Size: Large</span><br><span class="text-muted text-sm">Colour: Green</span>
					</div>
				  </div>
				</div>
				<div class="col-12 col-md-7 mt-4 mt-md-0">
				  <div class="row align-items-center">
					<div class="col-md-3">
					  <div class="row">
						<div class="col-6 d-md-none text-muted">Price per item</div>
						<div class="col-6 col-md-12 text-end text-md-center">$65.00</div>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="row align-items-center">
						<div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
						<div class="col-5 col-sm-3 col-md-12">
						  <div class="d-flex align-items-center">
							<div class="btn btn-items btn-items-decrease">-</div>
							<input class="form-control text-center border-0 border-md input-items" type="text" value="4">
							<div class="btn btn-items btn-items-increase">+</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-md-3"> 
					  <div class="row">
						<div class="col-6 d-md-none text-muted">Total price </div>
						<div class="col-6 col-md-12 text-end text-md-center">$260.00</div>
					  </div>
					</div>
					<div class="col-2 d-none d-md-block text-center"><a class="cart-remove" href="#"> <i class="delete fa fa-times"></i></a></div>
				  </div>
				</div>
			  </div>
			</div>
			<!-- Product-->
			<div class="cart-item">
			  <div class="row d-flex align-items-center text-start text-md-center">
				<div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
				  <div class="d-flex align-items-center"><a href="detail.html"><img class="cart-item-img" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."></a>
					<div class="cart-title text-start"><a class="text-uppercase text-dark" href="detail.html"><strong>Transparent Blouse</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
					</div>
				  </div>
				</div>
				<div class="col-12 col-md-7 mt-4 mt-md-0">
				  <div class="row align-items-center">
					<div class="col-md-3">
					  <div class="row">
						<div class="col-6 d-md-none text-muted">Price per item</div>
						<div class="col-6 col-md-12 text-end text-md-center">$55.00</div>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="row align-items-center">
						<div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
						<div class="col-5 col-sm-3 col-md-12">
						  <div class="d-flex align-items-center">
							<div class="btn btn-items btn-items-decrease">-</div>
							<input class="form-control text-center border-0 border-md input-items" type="text" value="3">
							<div class="btn btn-items btn-items-increase">+</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-md-3"> 
					  <div class="row">
						<div class="col-6 d-md-none text-muted">Total price </div>
						<div class="col-6 col-md-12 text-end text-md-center">$165.00</div>
					  </div>
					</div>
					<div class="col-2 d-none d-md-block text-center"><a class="cart-remove" href="#"> <i class="delete fa fa-times"></i></a></div>
				  </div>
				</div>
			  </div>
			</div>
			<!-- Product-->
			<div class="cart-item">
			  <div class="row d-flex align-items-center text-start text-md-center">
				<div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
				  <div class="d-flex align-items-center"><a href="detail.html"><img class="cart-item-img" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."></a>
					<div class="cart-title text-start"><a class="text-uppercase text-dark" href="detail.html"><strong>White Tee</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
					</div>
				  </div>
				</div>
				<div class="col-12 col-md-7 mt-4 mt-md-0">
				  <div class="row align-items-center">
					<div class="col-md-3">
					  <div class="row">
						<div class="col-6 d-md-none text-muted">Price per item</div>
						<div class="col-6 col-md-12 text-end text-md-center">$55.00</div>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="row align-items-center">
						<div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
						<div class="col-5 col-sm-3 col-md-12">
						  <div class="d-flex align-items-center">
							<div class="btn btn-items btn-items-decrease">-</div>
							<input class="form-control text-center border-0 border-md input-items" type="text" value="3">
							<div class="btn btn-items btn-items-increase">+</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-md-3"> 
					  <div class="row">
						<div class="col-6 d-md-none text-muted">Total price </div>
						<div class="col-6 col-md-12 text-end text-md-center">$165.00</div>
					  </div>
					</div>
					<div class="col-2 d-none d-md-block text-center"><a class="cart-remove" href="#"> <i class="delete fa fa-times"></i></a></div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-link text-muted" href="category.html"><i class="fa fa-chevron-left"></i> Continue Shopping</a><a class="btn btn-dark" href="checkout1.html">Proceed to checkout <i class="fa fa-chevron-right"></i>                                                     </a></div>
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
