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
					<h4>Economy Room</h4>
				</div>
			</div>
			<div class="carousel-item">
				<img src="image/room14.jpg" alt="Chicago" width="1500" height="500">
				<div class="carousel-caption">
					<h3>Hotel Uday Bhuvan</h3>
					<p>Deluxe A/C Room</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="image/room15.jpg" alt="New York" width="1500" height="500">
				<div class="carousel-caption">
					<h3>Hotel Uday Bhuvan</h3>
					<p>6-Bed Dormitory</p>
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
					<p><i class="far fa-clock fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">24 Hours Check-In & Check-Out</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="card">
				<div class="card-body text-center">
					<p><i class="fas fa-concierge-bell fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">Room Service</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="card">
				<div class="card-body text-center">
					<p><i class="fas fa-recycle fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">Paid Laundry Service</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="card mb-4">
				<div class="card-body text-center">
					<p><i class="fab fa-cc-mastercard fa-5x" style="color:#F57A00;"></i></p>
					<h6 class="card-title">All Major Cards Accepted</h6>
				</div>
			</div>
		</div>
		
	</div>

	<!-- Block #2 for the lodge page  -->
	<div class="row mt-sm-4 mt-md-0">

		<div class="col-sm-12 col-md-8">
			<h3> About Uday Bhuvan </h3>
			<p class="lead">A sort of important heading can go here which is larger and grey </p>
			<p></p>
			<p></p>
		</div>

		<div class="col-dm-12 col-md-4 text-center">
			<p class="lead p-4 m-4">
	        	<a class="btn btn-danger btn-lg" href="#" role="button">Book Now</a>
	    	</p>
		</div>

	</div>

	<!-- Block #3 for tariff cards -->
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<div class="card mb-4">
			  <div class="card-header bg-danger text-center bold">Economy Rooms</div>
			  <div class="card-body">
				<table border="0" width="100%" cellpadding="10">
					<tr> 
						<td class="side-border"> Economy Single </th>
						<td> &#8377;400 </td>
						<td> &#8377;450</td>
					</tr>
					<tr> 
						<td class="side-border"> Economy Double </th>
						<td> &#8377;600 </td>
						<td> &#8377;700</td>
					</tr>
				</table>
			  </div> 
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="card mb-4">
			  <div class="card-header bg-danger text-center bold">Deluxe Rooms</div>
			  <div class="card-body">
			  	<table border="0" width="100%" cellpadding="10">
					<tr> 
						<td class="side-border"> Deluxe Single </th>
						<td> &#8377;895 </td>
						<td> &#8377;1099[AC] </td>
					</tr>
					<tr> 
						<td class="side-border"> Deluxe Double </th>
						<td> &#8377;999 </td>
						<td> &#8377;1399[AC]</td>
					</tr>
				</table>
			  </div> 
			</div>
		</div>
		<div class="col-sm-12 col-md-4  mb-4">
			<div class="card">
			  <div class="card-header bg-danger text-center bold">Dormitory</div>
			  <div class="card-body">
			  	<table border="0" width="100%" cellpadding="10">
					<tr> 
						<td class="side-border"> 4 Bed Dormitory</th>
						<td> &#8377;1299 </td>
						<td> &#8377;1599 </td>
					</tr>
					<tr> 
						<td class="side-border"> Spl. Deluxe Single</th>
						<td> &#8377;1500 </td>
						<td> &#8377;1999 </td>
					</tr>
				</table>
			  </div> 
			</div>
		</div>
	</div>

</div>

<?php
require_once "include/footer.php";
?>