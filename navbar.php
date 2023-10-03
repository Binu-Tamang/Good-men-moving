<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Navigation Bar</title>
</head>

<body>
    <header>
        <div class="navbox">
            <div class="head-1">
                <p class="p-all">"The Professional Muscular Edmonton Movers"</p>
            </div>
            <div class="head-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="logo-img">
                                <img src="assets/img/logo-2_18_11zon.png" alt="logo of moving company">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="head-budget">
                                        <!-- <div class="bbb my-2">
                                            <img src="assets/img/bbb_11_11zon.png" alt="bbb-img">
                                        </div> -->
                                        <div class="budget">
                                            <img src="assets/img/budget-vector-logo_13_11zon.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="describe-box nav-describe-box">
                                        <h5>Professional <strong>movers</strong></h5>
                                        <span>24hrs7daysaweek</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="nav-contact">
                                        <ul>
                                            <li><a href="tel:780-937-6666"><i class="fa-solid fa-phone"></i>
                                                    780-937-6666</a></li>
                                            <li><i class="fa-solid fa-location-dot"></i> Edmonton, AB</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-1 head-hide d-none">
                <p class="p-all">"The Professional Muscular Edmonton Movers"</p>
            </div>
            <div class="head-3 heading-2">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-6 text-end">
                            <div class="mobile-nav-btn text-end">
                                <i class="toggle-nav-icons-js fa fa-2x  fas fa-bars " name="menu-outline"></i>
                                <i class="toggle-nav-icons-js fa fa-2x fa-close" name="close-outline"></i>
                            </div>
                            <nav class="navbar nav-shift">
                                <ul class="navbar-ul" id="navList">
                                    <li class="nav-item active"><a class="navbar-link" href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="navbar-link" href="about-us.php">About</a></li>
                                    <li class="nav-item">
                                        <a class="navbar-link" href="services-page.php">Services</a>
                                        <!-- <ul class="sub-menu">
                                    <li class="submenu-a" ><a href="#">Local Moves</a></li>
                                    <li class="submenu-a" ><a href="#">Long Distance Moves</a></li>
                                    <li class="submenu-a" ><a href="#">Office Moves</a></li>
                                    <li class="submenu-a" ><a href="#">Commercial Moves</a></li>
                                    <li class="submenu-a" ><a href="#">Assembly/Disassembly</a></li>
                                    <li class="submenu-a" ><a href="#">Packing/Equipment</a></li>
                                    <li class="submenu-a" ><a href="#">Packing and Unpacking</a></li>
                                    <li class="submenu-a" ><a href="#">Available Storage Facilities</a></li>
                                </ul> -->
                                    </li>

                                    <li class="nav-item"><a class="navbar-link" href="testimonial.php">Testimonials</a>
                                    </li>
                                    <li class="nav-item"><a class="navbar-link" href="contactus.php">Contact</a></li>
                                    <li class="nav-item"><a class="navbar-link" href="faqs.php">FAQs</a></li>
                                    <!-- <li class="hide-btn-li">
                                        <div class="quote-btn">
                                            <button><a href="quotes.php"> Get A Quote</a></button>
                                        </div>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <div class="quote-button">
                                <button> <a href="quotes.php"> Get A Quote</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====end of headr parts ========= -->

    <!-- banner part start -->
    <section class="banner-part">
        <div class="banner-look">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item banner-element active">
                        <img src="assets/img/slider/3men_1_11zon.jpg" class="d-block w-100" alt="good 3 men moving">
                        <div class="banner-text">
                            <strong>Good Men Moving</strong>
                            <p class="banner-p">We are dedicated to making your move easy and affordable within your
                                budget,
                                with honesty and integrity. A local family owned and operated moving company serving
                                Edmonton, ST Albert and Sherwood Park.</p>
                            <div class="banner-btn">
                                <a class="banner-read-more" href="about-us.php">Read More <i
                                        class="fa-solid fa-angle-right"></i></a>
                                <a class="banner-quote-a" href="quotes.php">Get A Qoute</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item banner-element">
                        <img src="assets/img/slider/view1_5_11zon.jpg" class="d-block w-100" alt="green and city">
                        <div class="banner-text">
                            <strong>Good Men Moving</strong>
                            <p class="banner-p"> We are dedicated to making your move easy and affordable within your
                                budget, with honesty
                                and integrity. A local family owned and operated business.</p>
                            <div class="banner-btn">
                                <a class="banner-read-more" href="about-us.php">Read More <i
                                        class="fa-solid fa-angle-right"></i></a>
                                <a class="banner-quote-a" href="quotes.php">Get A Qoute</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item banner-element">
                        <img src="assets/img/slider/truck2_4_11zon.jpg" class="d-block w-100" alt="truck load">
                        <div class="banner-text">
                            <strong>Good Men Moving</strong>
                            <p class="banner-p">We are voted one of the best moving company in Edmonton</p>
                            <div class="banner-btn">
                                <a class="banner-read-more" href="about-us.php">Read More <i
                                        class="fa-solid fa-angle-right"></i></a>
                                <a class="banner-quote-a" href="quotes.php">Get A Qoute</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item banner-element">
                        <img src="assets/img/slider/best_2_11zon.jpg" class="d-block w-100" alt="city view">
                        <div class="banner-text">
                            <strong>Good Men Moving</strong>
                            <p class="banner-p">We are dedicated to making your move easy and affordable to your budget,
                                with honesty and integrity. A local family owned and operated moving company serving
                                Edmonton, ST Albert and Sherwood Park.</p>
                            <div class="banner-btn">
                                <a class="banner-read-more" href="about-us.php">Read More <i
                                        class="fa-solid fa-angle-right"></i></a>
                                <a class="banner-quote-a" href="quotes.php">Get A Qoute</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item banner-element">
                        <img src="assets/img/truck1_24_11zon.jpg" class="d-block w-100" alt="people loading">
                        <div class="banner-text">
                            <strong>Good Men Moving- Your Trusted Edmonton Movers</strong>
                            <p class="banner-p">We are dedicated to making your move easy and affordable to your budget,
                                with honesty and integrity. A local family owned and operated business.
                            </p>
                            <div class="banner-btn">
                                <a class="banner-read-more" href="about-us.php">Read More <i
                                        class="fa-solid fa-angle-right"></i></a>
                                <a class="banner-quote-a" href="quotes.php">Get A Qoute</a>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- banner part ends -->

    <!-- =====Edmonton Movers==== -->
    <section class="movers-gmen">
        <div class="container">
            <div class="good-men-movers">
                <h1>Edmonton Movers</h1>
                <p class="good-man-moving-p aos-init aos-animate">Good Men Moving Company Your Trusted Family-Owned
                    Edmonton Movers for Over 25 Years At Good
                    Men
                    Moving Company, we take pride in being a family-owned Edmonton moving company that has been serving
                    the
                    community for over 25 years.
                    <br>
                    Our dedication to providing worry-free professional moving services at unbeatable rates has made us
                    the
                    top
                    choice for countless customers in the city.
                    <br>
                    When you choose us, you can trust that you are in capable hands. Our crews consist of highly trained
                    and
                    experienced professional Edmonton movers who are committed to delivering exceptional service.
                    <br>
                    Whether you need help with packing, unpacking, assembly, disassembly, or handling small to large
                    moves,
                    our
                    goal is to take care of you and your belongings every step of the way.
                    <br>
                    Don't just take our word for it - we have been voted Edmonton's Best Movers, a testament to the
                    quality
                    of
                    service we provide.
                    <br>
                    Join the many satisfied customers who have entrusted their moves to Good Men Moving Company and
                    experience a
                    stress-free moving experience like never before.
                    <br>
                    Contact Us Today to make your next move a breeze.
                </p>
            </div>
        </div>
    </section>

    <!-- ==== good men movers offer=== -->
    <section class="gmm-offers">
        <div class="container">
            <div class="gmm-offers-box">
                <h2>WHAT WE OFFER</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="gmm-offers-ul">
                            <ul>
                                <li><img src="assets/img/010-magnifying-lens-as-head-of-business-professional_10_11zon.png"
                                        alt="offers of company"><span class="offer-heading">PROFESSIONAL
                                        EDMONTON MOVERS</span></li>
                                <li><img src="assets/img/003-budget_4_11zon.png" alt="offers of company"><span
                                        class="offer-heading">NO MINIMUM
                                        CHARGE & AFFORDABLE RATES</span></li>
                                <li><img src="assets/img/008-technology_8_11zon.png" alt="offers of company"><span
                                        class="offer-heading">OFFICE &
                                        BUSINESS RELOCATION</span></li>
                                <li><img src="assets/img/004-apartments_6_11zon.png" alt="offers of company"><span
                                        class="offer-heading">APARTMENT
                                        BUILDING AND PRIVATE HOME MOVES</span></li>
                                <li><img src="assets/img/002-insurance-agent_3_11zon.png" alt="offers of company"><span
                                        class="offer-heading">INSURANCE AND
                                        SERVICE CONTRACTS</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gmm-offers-ul">
                            <ul>
                                <li><img src="assets/img/009-delivery-package-opened_9_11zon.png"
                                        alt="offers of company"><span class="offer-heading">PACKING AND
                                        UNPACKING</span></li>
                                <li><img src="assets/img/001-strategy_2_11zon.png" alt="offers of company"><span
                                        class="offer-heading">MOVE PLANNING
                                        AND EXECUTION</span></li>
                                <li><img src="assets/img/007-placeholder-with-check-mark_7_11zon.png"
                                        alt="offers of company"><span class="offer-heading">CROSS-TOWN
                                        MOVING, LONG DISTANCE MOVING</span></li>
                                <li><img src="assets/img/003-discount-label-interface-commercial-symbol-with-percentage-sign_5_11zon.png"
                                        alt="offers of company"><span class="offer-heading">DISCOUNTED
                                        PACKING SUPPLIES</span></li>
                                <li><img src="assets/img/001-pc-computer-with-monitor_1_11zon.png"
                                        alt="offers of company"><span class="offer-heading">CORRUGATED
                                        MOVING BOXES FOR ELECTRONICS AND VALUABLES

                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========our serviceshtml starts -->
    <section class="home-services">
        <div class="container">
            <h3>OUR <span>SERVICES</span></h3>
            <div class="owl-carousel owl-theme">
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/residential_moving_21_11zon.jpg" alt="services of company">
                    <h4>Local Moves</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/uship-investment-tracker_26_11zon.jpg"
                        alt="services of company">
                    <h4>Long Distance Moves</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/corporate_14_11zon.jpg" alt="services of company">
                    <h4>Office Moves</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/img4_16_11zon.jpg" alt="services of company">
                    <h4>Commercial Moves</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/slider/sv8_3_11zon.jpg" alt="services of company">
                    <h4>Assembly and Disassembly of any size or type</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/img3_15_11zon.jpg" alt="services of company">
                    <h4>Wide variety of boxes and packing Equipment</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/packing-moving-box_20_11zon.jpg" alt="services of company">
                    <h4>Packing and unpacking</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item service-owl-img">
                    <img class="serv-image" src="assets/img/sv2_23_11zon.jpg" alt="services of company">
                    <h4>Available storage Facilities</h4>
                    <div class="middle-text">
                        <a href="#" class="serv-text">Read More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== call us tody hrml part starts ====== -->
    <section class="callus-main">
        <div class="call-us-box">
            <div class="container">
                <h5>Call Today To See How We Can Make Moving Easy!</h5>
                <p>We Are Open 24/7 - Call or Text - <a href="tel:780-937-6666">780-937-6666</a> </p>
                <div class="call-us-btn">
                    <a class="call-now" href="tel:780-937-6666"> CALL US NOW</a>
                    <a class="text-us" href="#"> TEXT US</a>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials starts -->
    <section class="good-men-testimonials">
        <div class="container">
            <div class="review-box">
                <span class="good-men-moving">TESTIMONIAL</span>
                <h5>Our Reviews</h5>
            </div>
            <div class="review-slider">
                <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css"> -->


                <div id="google-reviews"></div>
                <div class="review-btn">
                    <div class="view-review review">
                        <a target="_blank"
                            href="https://www.google.com/search?q=good+men+moving+edmonton&oq=good+men&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgcIARAuGIAEMgcIAhAAGIAEMgcIAxAAGIAEMgcIBBAAGIAEMgYIBRBFGEEyBggGEEUYPDIGCAcQRRg80gEIMjc1MWowajmoAgCwAgA&sourceid=chrome&ie=UTF-8&bshm=rime/1#lrd=0x53a018aa91681491:0x7af3ec43da2754c6,1,,,,">View
                            All Google Reviews <i class="fa-solid fa-circle-chevron-right"></i></a>
                    </div>
                    <div class="write-review review">
                        <a target="_blank"
                            href="https://www.google.com/search?q=good+men+moving+edmonton&oq=good+men&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgcIARAuGIAEMgcIAhAAGIAEMgcIAxAAGIAEMgcIBBAAGIAEMgYIBRBFGEEyBggGEEUYPDIGCAcQRRg80gEIMjc1MWowajmoAgCwAgA&sourceid=chrome&ie=UTF-8&bshm=rime/1#lrd=0x53a018aa91681491:0x7af3ec43da2754c6,3,,,,">Write
                            A Reviews <i class="fa-solid fa-circle-chevron-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- testimonials ends -->
    <!-- ---------------------------footer starts--------------------- -->
    <?php
    include('inc/footer.php');
    include('inc/js.php')
        ?>
</body>

</html>