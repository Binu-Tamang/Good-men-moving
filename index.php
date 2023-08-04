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
  <section class="banner-part">
    <div class="banner-look">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item banner-element active">
            <img src="assets/img/slider/3men.jpg" class="d-block w-100" alt="good 3 men moving">
          </div>
          <div class="carousel-item banner-element">
            <img src="assets/img/slider/view1.jpg" class="d-block w-100" alt="green and city">
          </div>
          <div class="carousel-item banner-element">
            <img src="assets/img/slider/truck2.jpg" class="d-block w-100" alt="truck load">
          </div>
          <div class="carousel-item banner-element">
            <img src="assets/img/slider/best.jpg" class="d-block w-100" alt="city view">
          </div>
          <div class="carousel-item banner-element">
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
    <div class="text-flip">
      <p class="">
        We are</p>
      <div class="changebox">
        <span>best</span><br>
        <span>successful</span><br>
        <span>happy</span><br>
        <span>excited</span><br>
      </div>
      <p>
        with you!
      </p>
    </div>
  </section>
  <section class="company-services">
    <div class="container">
      <div class="services-box-wrapper">
        <div class="row">
          <div class="col-md-4">
            <div class="company-services-box">
              <div class="services-img">
                <i class="fa-solid fa-truck-fast"></i>
              </div>
              <div class="service-info">
                <span>We Make it Faster</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                  mattis.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="company-services-box">
              <div class="services-img">
                <i class="fa-solid fa-house-lock"></i>
              </div>
              <div class="service-info">
                <span>We Make it Faster</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                  mattis.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="company-services-box">
              <div class="services-img">
                <i class="fa-solid fa-business-time"></i>
              </div>
              <div class="service-info">
                <span>We Make it Faster</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                  mattis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-good-men-moving">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-good-men-moving">
            <img src="assets/img/slider/3men.jpg" alt="3 men">
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-gmm-info">
            <span>About Good Men Moving</span>
            <h2>We're Your Moving Partner</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum libero sit amet tellus lacinia, id
              hendrerit mi lobortis. Maecenas in mi ex. </p>
            <div class="about-icon">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
              <i class="fa-solid fa-users"></i>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
              <i class="fa-solid fa-truck"></i>
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  ...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...
                </div>
              </div>
            </div>
            <ul>
              <li>Bringing solutions to moving problems</li>
              <li>Enter the list of the 10 Best Moving Service Companies</li>
              <li>Our company has 350 professionals</li>
            </ul>
            <button class="about-btn">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include('inc/js.php')
    ?>
</body>

</html>