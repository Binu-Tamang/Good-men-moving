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
            <!-- <p class="good-man-moving-p aos-init aos-animate">Service We Provide are:</p> -->
        </div>
        <div class="container">
            <div class="row services-wrap-box gy-4">
                <div class="col-lg-3 d-lg-block">
                    <div class="services-details-menu">
                        <strong>Service Menu</strong>
                        <ul class="services-menu-list">
                            <li><a aria-label="about the services we provided" href="services-details-page.php"><i class="fa-solid fa-people-carry-box"></i>
                                    Local Moves</a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-two.php"><i class="fa-solid fa-truck-moving"></i> Long Distance
                                    Moves</a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-three.php"><i class="fa-solid fa-city"></i> Offices Moves</a></li>
                            <li><a aria-label="about the services we provided" href="service-four.php"><i class="fa-solid fa-truck-plane"></i> Commercial
                                    Moves</a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-five.php"><i class="fa-solid fa-business-time"></i>
                                    Assembly/Disassembly</a>
                            </li>
                            <li><a aria-label="about the services we provided" href="services-page.php"><i class="fa-solid fa-reply-all"></i> See All
                                    Services</a></li>
                        </ul>
                    </div>

                    <div class="services-details-menu d-lg-block d-none">
                        <p><strong>Contact Us</strong></p>
                        <div class="contact-info-box">
                            <div class="icon-contact">
                                <i class="fa fa-location-dot"></i>
                            </div>
                            <div class="contact-details">
                                <span>Address</span>
                                <p class="all-p"> Edmonton, AB</p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="icon-contact">
                                <i class="fa fa-phone-volume"></i>
                            </div>
                            <div class="contact-details">
                                <span>Contact Phone</span>
                                <p><a aria-label="about the services we provided" class="all-p" href="tel: 780-937-6666"> 780-937-6666</a></p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="icon-contact">
                                <i class="fa fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <span>Opening Hours</span>
                                <p class="all-p">24 Hours Services</p>
                            </div>
                        </div>

                        <div class="contact-info-empty">

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row gy-2">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/residential_moving_21_11zon_2_11zon.webp" alt="residential moving">
                                <h5><a class="serv-header-a" href="services-details-page.php">Local Movers</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="services-details-page.php">Learn More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/blue-moving-truck_12_11zon.webp"
                                    alt="truck carrying loads">
                                <h5><a class="serv-header-a" href="service-two.php">Long Distance Movers</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-two.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/corporate_14_11zon_10_11zon.webp" alt="office building">
                                <h5><a class="serv-header-a" href="service-three.php">Offices Moves</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-three.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/commercial_1_11zon.webp" alt="residential moving">
                                <h5><a class="serv-header-a" href="service-four.php">Commercial Moves</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-four.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/img4_16_11zon_9_11zon.webp"
                                    alt="truck carrying loads">
                                <h5><a class="serv-header-a" href="service-five.php">Assembly And Disassembly Of Any
                                        Size Or
                                        Type</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-five.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/lifting_3_11zon.webp" alt="office building">
                                <h5><a class="serv-header-a" href="service-six.php">Wide Variety Of Boxes And Packing
                                        Equipment</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-six.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/packing-moving-box_20_11zon.webp" alt="office building">
                                <h5><a class="serv-header-a" href="service-seven.php">Packing And Unpacking</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-seven.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 serv_box">
                            <div class="our-services-boxes landing-box">
                                <img data-src="assets/img/strorage_2_11zon.webp" alt="office building">
                                <h5><a class="serv-header-a" href="service-eight.phps">Available
                                        Storage Facilities</a></h5>
                                <p class="good-man-moving-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                    elit
                                    tellus, luctus
                                    nec.</p>
                                <a href="service-eight.php">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
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
    <script>const serviceNav = document.querySelectorAll('.navbar-nav  > li a');
        if (serviceNav.length >= 3) {
            serviceNav[2].classList.add("active");
        }
        </script>
</body>

</html>