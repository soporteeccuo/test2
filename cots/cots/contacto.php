<?php 

$title = 'WEB';
$description = 'WEB';
$keywords = 'WEB';

?>

<?php include('header.php');?>

<!-- 
	Available heights
		height-100
		height-150
		height-200
		height-250
		height-300
		height-350
		height-400
		height-450
		height-500
		height-550
		height-600
-->
<div id="map" class="height-400 grayscale"></div>


<!-- 
	PAGE HEADER 
	
	CLASSES:
		.page-header-xs	= 20px margins
		.page-header-md	= 50px margins
		.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
		.dark		= dark page header
		.light		= light page header
-->
<section class="page-header">
	<div class="container text-right">

		<h1>Contacto</h1>
		<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>

		<!-- breadcrumbs -->
		<ol class="breadcrumb breadcrumb-inverse">
			<li><a href="../">Inicio</a></li>
			<li class="active">Contacto</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->


<!-- -->
<section>
	<div class="container">
		
		<div class="row">

			<!-- FORM -->
			<div class="col-md-9 col-sm-9">

				<h3>Si tienes alguna consulta no dudes en escribirnos</h3>

				<form action="#" method="post">
					<fieldset>
						<input type="hidden" name="action" value="contact_send" />

						<div class="row">
							<div class="form-group">
								<div class="col-md-4">
									<label for="contact:name">Full Name *</label>
									<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
								</div>
								<div class="col-md-4">
									<label for="contact:email">E-mail Address *</label>
									<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
								</div>
								<div class="col-md-4">
									<label for="contact:phone">Phone</label>
									<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-8">
									<label for="contact:subject">Subject *</label>
									<input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
								</div>
								<div class="col-md-4">
									<label for="contact_department">Department</label>
									<select class="form-control pointer" name="contact[department]">
										<option value="">--- Select ---</option>
										<option value="Marketing">Marketing</option>
										<option value="Webdesign">Webdesign</option>
										<option value="Architecture">Architecture</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label for="contact:message">Message *</label>
									<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
								</div>
							</div>
						</div>

					</fieldset>

					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
						</div>
					</div>
				</form>

			</div>
			<!-- /FORM -->


			<!-- INFO -->
			<div class="col-md-3 col-sm-3">

				<h2>Visítanos</h2>

				<p>
					Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
				</p>

				<hr />

				<p>
					<span class="block"><strong><i class="fa fa-map-marker"></i> Dirección:</strong> Pasaje José Aumente Baena, 2-1 A y B</span>
					<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:957491653">957 491 653</a></span>
					<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">administracion@cotsabogados.es</a></span>
				</p>

				<hr />

				<h4 class="font300">Business Hours</h4>
				<p>
					<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
					<span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
					<span class="block"><strong>Sunday:</strong> Closed</span>
				</p>

			</div>
			<!-- /INFO -->

		</div>

	</div>
</section>
<!-- / -->



<script>
    function initMap() {
        var cots = {lat: 37.8868129, lng: -4.781326900000067};
        var map = new google.maps.Map(document.getElementById('map'), {
	        zoom: 17,
	        scrollwheel: false,
	        center: cots
	    });
        var marker = new google.maps.Marker({
	        position: cots,
	        animation: google.maps.Animation.DROP,
	        map: map
	    });
	    var contentString = '<b>Cots Abogados</b><br>';
	        contentString += 'Pasaje José Aumente Baena 2-1 A y B<br>';
	        contentString += 'Telf: 957 491 653<br>';
	        contentString += '14008, Córdoba, España <br>';
	    var infowindow = new google.maps.InfoWindow({
		    content: contentString
		});
	    google.maps.event.addListener(marker, 'click', function() {
	        infowindow.open(map,marker);
	    });
	    infowindow.open(map,marker);
		google.maps.event.addDomListener(window, "resize", function() {
			map.setCenter(cots);
		});
				
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_KL_dvmJMzD1qFEP-S2HhDgZpvgl59U0&callback=initMap" rel=“nofollow”></script>


<?php include('footer.php');?>