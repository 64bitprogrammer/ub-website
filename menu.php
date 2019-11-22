<!-- Landing page for the website (home) -->
<?php
$pageTitle = "Hotel Uday Bhuvan";
require_once "include/header.php";
?>

<!-- navbar for the page  -->
<div class="container">

	<?php require_once "include/navbar.php"; ?>

	<div class="jumbotron mb-0" id="home-bg-drop">
		<h1 class="display-4 text-light">Hotel Uday Bhuvan Restaurant & Lodge</h1>
		<p class="lead text-light">12/B C.D. Deshmukh Road, Near R.P.D. Cross, Tilakwadi Belgaum. 590006</p>
	</div>

	<div class="menu-container m-4 p-4 border border-1">
		
		<div class="row">
			<div class="col-md-5">
				<div class="card" style="width:auto">
				  <img class="card-img-top" src="image/south_menu.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">South Indian</h4>
				    <p class="card-text">Breakfast, Meal and More.</p>
				    <a href="south_menu.pdf" download class="btn btn-primary">Download</a>
				  </div>
				</div>
			</div>

			<div class="col-md-2">
				<br/>
			</div>

			<div class="col-md-5">
				<div class="card" style="width:auto">
				  <img class="card-img-top" src="image/chinese_menu.jpeg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Chinese</h4>
				    <p class="card-text">Soup, Noodles and More.</p>
				    <a href="chinese_menu.pdf" download class="btn btn-primary">Download</a>
				  </div>
				</div>
			</div>
		</div>

	</div>

</div>

<?php
require_once "include/footer.php";
?>