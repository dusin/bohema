<?php
	
	include "header.php";
?>

<section>
  <div class="container-fluid">
	<div class="row">
	  <div class="col-lg-6 col-xl-5 mx-auto">
		<ul class="breadcrumb justify-content-start">
		  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
		  <li class="breadcrumb-item active">Contact</li>
		</ul>
		<h4 class="mb-4 text-uppercase">Ozvěte se</h4>
		<p class="lead mb-5">Pokud jste nenašli odpověď na svoji otázku v <a href="xx">Častých otázkách</a>, napište nám prosím. Odpovíme vám obratem. Pokud nám chcete zavolat, kontakt je níže.</p>
		<div class="row mb-5">
		  <div class="col-md-4 text-center text-md-start">
			<svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
			  <use xlink:href="#navigation-map-1"> </use>
			</svg>
			<h4 class="ff-base">Obchod Praha</h4>
			<p class="text-muted">Palackého 7<br>
				110 00 Praha 1<br>
				Otevírací doba<br>
				Pondělí – sobota<br>
				10:00 – 18:00</p>
		  </div>
		  <div class="col-md-4 text-center text-md-start">
			<svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
			  <use xlink:href="#audio-call-1"> </use>
			</svg>
			<h4 class="ff-base">Telefonní kontakt</h4>
			<p class="text-muted">Pro telefonickou podporu prosím volejte v pracovní dny 9-16h</p>
			<p class="text-muted"><strong>732 246 958</strong></p>
		  </div>
		  <div class="col-md-4 text-center text-md-start">
			<svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
			  <use xlink:href="#mail-1"> </use>
			</svg>
			<h4 class="ff-base">Emaily</h4>
			<p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.
				<br><br>
			Podpora a objednávky:<br>
			eshop@mojebohema.cz<br>
			<br>
			Spolupráce a ostatní:<br>
			info@mojebohema.cz<br>
			</p>
				  </div>
		</div>
		<hr class="mb-5">
		<form class="mb-5" id="contact-form" method="get" action="#">
		  <h4 class="mb-4">Contact form</h4>
		  <div class="row">
			<div class="col-sm-6">
			  <div class="mb-4">
				<label class="form-label" for="name">Your name *</label>
				<input class="form-control" type="text" name="name" id="name" placeholder="Enter your firstname" required="required">
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="mb-4">
				<label class="form-label" for="email">Your email *</label>
				<input class="form-control" type="email" name="email" id="email" placeholder="Enter your  email" required="required">
			  </div>
			</div>
		  </div>
		  <div class="mb-4">
			<label class="form-label" for="message">Your message for us *</label>
			<textarea class="form-control" rows="4" name="message" id="message" placeholder="Enter your message" required="required"></textarea>
		  </div>
		  <button class="btn btn-outline-dark" type="submit">Send message                                    </button>
		</form>
	  </div>
	  <div class="col-lg-6">
		<div class="full-screen my-3" id="map"></div>
	  </div>
	</div>
  </div>
</section>


<?php
	
	include "footer.php";
?>

<!-- Leaflet CSS - For the map-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
<!-- Leaflet Map library-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
<!-- Map config-->
<script>
  var mapId = 'map',
	  mapCenter = [50.08120078905699, 14.423230325685527],
	  mapMarker = true;
</script>
<!-- Map init-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/js/map.aae93aaf.js"></script>
