<!-- Landing page for the website (home) -->
<?php
$pageTitle = "Hotel Uday Bhuvan";
require_once "include/header.php";
?>

<!-- navbar for the page  -->
<div class="container">
	<?php require_once "include/navbar.php"; ?>

	<!-- header section for jumbotron  -->
	<!-- <div class="jumbotron mb-0" id="home-bg-drop">
		<h1 class="display-4 text-light">Hotel Uday Bhuvan Restaurant</h1>
		<p class="lead text-light">Serving South Indian Delicasies Since 1956. </p>

	     <p class="lead">
	        <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
	    </p>
	</div> -->

	<!-- Carousel / Slider -->

	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="image/room13.jpg" alt="Los Angeles" width="1500" height="500">
				<div class="carousel-caption">
					<h2>Hotel Uday Bhuvan</h2>
					<h4>Pure Veg South-Indian Restaurant, Serving Good Food Since 1956.</h4>
				</div>
			</div>
			<div class="carousel-item">
				<img src="image/room14.jpg" alt="Chicago" width="1500" height="500">
				<div class="carousel-caption">
					<h3>Hotel Uday Bhuvan</h3>
					<p>Pure Veg South-Indian Restaurant, Serving Good Food Since 1956.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="image/room15.jpg" alt="New York" width="1500" height="500">
				<div class="carousel-caption">
					<h3>Hotel Uday Bhuvan</h3>
					<p>Pure Veg South-Indian Restaurant, Serving Good Food Since 1956.</p>
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>


	<div class="row my-4">
		<div class="col-sm-12 col-md-3">
			<div class="card">
				<div class="card-body text-center">
					<p><i class="fab fa-envira fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">Pure Veg South-Indian Restaurant</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="card">
				<div class="card-body text-center">
					<p><i class="far fa-calendar-alt fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">Open 7 Days A Week</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="card">
				<div class="card-body text-center">
					<p><i class="far fa-clock fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">7:00 AM to 10:00 PM</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="card mb-4">
				<div class="card-body text-center">
					<p><i class="fab fa-cc-visa fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">All Major Cards Accepted</h6>
				</div>
			</div>
		</div>
		
	</div>

	<div class="row my-5" style="height:200px;">
		<div class="col-md-8 text-center" style="height:200px;">
			<h3> Variety Of Sweet Available </h3>
			<p class="lead">
				Kunda, Shreekhand, Basundi, Gulab Jamoon Available Every Day !
			</p>
			<!-- <p> Freshly made sweets available for sale. Made with good quality ingredients.</p> -->
		</div>

		<div class="col-md-4 p-0">
			<img src="image/jamun2.jpg" class="img-max"/>
		</div>
	</div>

	<div class="row my-5">
		<div class="col-md-4">
			<img src="image/basket.jpg" class="img-max"/>
		</div>

		<div class="col-md-8 text-center">
			<h3> Mumbai Chat And More </h3>
			<p class="lead">
				Mumbai famous Pav Bhaji, Pani Puri, Basket Chat, Bhel Puri, Dahi-Shev-Puri Available.
			</p>
		</div>
	</div>




</div>

<?php
require_once "include/footer.php";
?>