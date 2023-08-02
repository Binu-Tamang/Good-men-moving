<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- fontawesome,custom css,bootstrap css -->
	<?php include('inc/css.php') ?>


	<!-- favicon link -->
	<link rel="icon" type="images/png" href="">
	<title>Good Men Moving</title>
</head>

<body>
	<?php include('inc/header.php') ?>
	<section>
		<div class="banner-look">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slider/3men.jpg" class="d-block w-100" alt="good 3 men moving">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/view1.jpg" class="d-block w-100" alt="green and city">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/truck2.jpg" class="d-block w-100" alt="truck load">
    </div>
	<div class="carousel-item">
      <img src="assets/img/slider/best.jpg" class="d-block w-100" alt="city view">
    </div>
	<div class="carousel-item">
      <img src="assets/img/slider/sv8.jpg" class="d-block w-100" alt="people loading">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		</div>
	</section>
	<?php 
	include('inc/js.php')
?>
</body>

</html>