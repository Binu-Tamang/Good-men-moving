<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Good Men Moving | About Us</title>
</head>

<body>
    <!-- ====get a Quotes html starts==== -->
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'About Us' ?>
    <?php include('inc/page-header.php') ?>
    <!-- banner and header page -->

    <section class="about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <img class="about-left-1" data-src="assets/img/2019_06_10T14_16_34_843Z_12_11zon.webp" alt="2 men">
                        <!-- <img class="about-left-2" data-src="assets/img/blue-moving-truck_12_11zon.jpg" alt="2 men"> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <h1 class="good-men-h2 aos-init aos-animate">Why Choose <span>Edmonton Moving Company</span>
                        </h1>
                        <p class="good-man-moving-p aos-init aos-animate">
                            <strong>Good Men Moving Company</strong> has been in business serving Edmonton families and
                            business for over
                            25 years. Handed down from father to son. Our goal is to provide the best service to our
                            fellow Edmontonians. <br> <br>

                            With over 20 experienced and caring staff and over 10 trucks of all sizes, we provide
                            premium moving services, making your move easy and worry free. <br><br>

                            Edmonton Moving Company boasts a team of highly trained and experienced professionals who
                            specialize in efficient moving services. Their expertise ensures that your belongings are
                            handled with care, minimizing the risk of damage during the move.<br><br>

                            A reputable moving company in Edmonton offers a wide range of services to cater to various
                            moving needs. From packing, loading, transportation, unloading, to unpacking, they can
                            handle every aspect of the relocation process. This full-service approach saves you time,
                            effort, and the hassle of managing multiple tasks.<br><br>

                            While moving costs can vary, Edmonton Moving Company strives to offer competitive and
                            transparent pricing. They provide detailed quotes based on your specific requirements,
                            avoiding hidden fees and unexpected charges.<br><br>

                            We are open 24/7, 365 days a year to gladly take your calls and inquiries. We are nummber
                            one Edmonton Moving Company.<br><br>
                        </p>
                    </div>
                </div>
            </div>


            <div class="counter-wrap">
                <div class="row">
                    <div class="col-lg-3 counting-div" id="counter1">
                        <div class="counter-box">
                            <i class="fa-solid fa-truck-fast"></i>
                            <div class="counter">
                                100+
                            </div>
                        </div>
                        <p>RESIDENTIAL MOVING</p>
                    </div>

                    <div class="col-lg-3 counting-div" id="counter2">
                        <div class="counter-box">
                            <i class="fa-solid fa-people-carry-box"></i>
                            <div class="counter">
                                15+
                            </div>
                        </div>
                        <p>PROFESSIONAL MOVERS</p>
                    </div>

                    <div class="col-lg-3 counting-div" id="counter3">
                        <div class="counter-box">
                            <i class="fa-solid fa-boxes-stacked"></i>
                            <div class="counter">
                                222+
                            </div>
                        </div>
                        <p>COMMERCIAL MOVING</p>
                    </div>

                    <div class="col-lg-3 counting-div" id="counter4">
                        <div class="counter-box">
                            <i class="fa-solid fa-users"></i>
                            <div class="counter">
                                3000+
                            </div>
                        </div>
                        <p>HAPPY CUSTOMERS</p>
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

    <script>const navItems = document.querySelectorAll('.navbar-nav  > li a');
        if (navItems.length >= 2) {
            navItems[1].classList.add("active");
        }</script>
</body>

</html>