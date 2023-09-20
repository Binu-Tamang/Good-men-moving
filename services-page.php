<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Good Men Moving | Services</title>
</head>

<body>
    <!-- ====get a Quotes html starts==== -->
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Services' ?>
    <?php include('inc/page-header.php') ?>
    <!-- banner and header page -->
    <section class="services-page">
        <div class="service-header">
            <h1>Explore Our Services</h1>
            <p class="good-man-moving-p aos-init aos-animate" >Service We Provide are:</p>
        </div>
        <div class="container">
            <div class="row services-wrap-box gy-4">
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/residential_moving_21_11zon.jpg" alt="residential moving">
                        <h5><a class="serv-header-a" href="services-details-page.php">Local Movers</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="services-details-page.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/uship-investment-tracker_26_11zon.jpg" alt="truck carrying loads">
                        <h5><a class="serv-header-a" href="services-details-page.php">Long Distance Movers</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="services-details-page.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/corporate_14_11zon.jpg" alt="office building">
                        <h5><a class="serv-header-a" href="#">Offices Moves</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/residential_moving_21_11zon.jpg" alt="residential moving">
                        <h5><a class="serv-header-a" href="#">Commercial Moves</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/uship-investment-tracker_26_11zon.jpg" alt="truck carrying loads">
                        <h5><a class="serv-header-a" href="#">Assembly And Disassembly Of Any Size Or Type</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/corporate_14_11zon.jpg" alt="office building">
                        <h5><a class="serv-header-a" href="#">Wide Variety Of Boxes And Packing Equipment</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/corporate_14_11zon.jpg" alt="office building">
                        <h5><a class="serv-header-a" href="#">Packing And Unpacking</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-services-boxes landing-box">
                        <img data-src="assets/img/corporate_14_11zon.jpg" alt="office building">
                        <h5><a class="serv-header-a" href="#">Available
                            Storage Facilities</a></h5>
                        <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus
                            nec.</p>
                        <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ---------------------------footer starts--------------------- -->
    <?php
    include('inc/footer.php');
    include('inc/js.php')
        ?>
</body>

</html>