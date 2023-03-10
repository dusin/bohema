<?php
	
	include "header.php";

?>
<section class="hero">
  <div class="container">
	<!-- Breadcrumbs -->
	<ol class="breadcrumb justify-content-center">
	  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
	  <li class="breadcrumb-item active">Order confirmed        </li>
	</ol>
	<!-- Hero Content-->
	<div class="hero-content pb-5 text-center">
	  <h1 class="hero-heading">Order confirmed</h1>
	</div>
  </div>
</section>
<section class="pb-5">
  <div class="container text-center">
	<div class="icon-rounded bg-primary-light mb-3 mx-auto text-primary">
	  <svg class="svg-icon w-2rem h-2rem align-middle">
		<use xlink:href="#checkmark-1"> </use>
	  </svg>
	</div>
	<h4 class="mb-3 ff-base">Thank you, Julie. Your order is confirmed.</h4>
	<p class="text-muted mb-5">Your order hasn't shipped yet but we will send you ane email when it does.</p>
	<p> <a class="btn btn-outline-dark" href="customer-order.html">View or manage your order</a></p>
  </div>
</section>

<?php
	
	include "footer.php";
	
?>
