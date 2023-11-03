<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Good Men Moving | Local Moves</title>
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Edmonton Local Movers' ?>
    <?php include('inc/page-header.php') ?>
    <!-- banner and header page -->
    <section class="service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="local-mover" id=serve-1>
                        <h2 class="contact-h aos-init aos-animate"> Commercial Movers</h2>
                        <div class="serv-img-left">
                            <img src="assets/img/commercial_1_11zon.webp" alt="2 men">
                        </div> <br>
                        <div class="service-page-img">
                            <p class="good-man-moving-p aos-init aos-animate"><strong>Good Men Moving
                                    Company</strong> Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing elit. Id non doloremque consequuntur
                                obcaecati sequi, enim laboriosam autem assumenda magnam laudantium tempora
                                nesciunt?
                                Officiis, vero accusamus cupiditate iste ex neque cum.
                                <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id non
                                doloremque
                                consequuntur
                                obcaecati sequi, enim laboriosam autem assumenda magnam laudantium tempora
                                nesciunt?
                                Officiis, vero accusamus cupiditate iste ex neque cum.
                            </p>
                        </div>
                        <p class="good-man-moving-p aos-init aos-animate"><strong>Good Men Moving Company</strong> Lorem
                            ipsum dolor sit amet consectetur
                            adipisicing elit. Eum quia perferendis necessitatibus tempore nostrum magni nisi voluptas
                            aliquid sed cumque doloribus facilis, eveniet exercitationem vero! Maiores error quaerat
                            debitis. Consequuntur.
                            <br>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Eum quia perferendis necessitatibus tempore nostrum magni nisi voluptas
                            aliquid sed cumque doloribus facilis, eveniet exercitationem vero! Maiores error quaerat
                            debitis.
                            <br><br>Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Id non doloremque consequuntur
                            obcaecati sequi, enim laboriosam autem assumenda magnam laudantium tempora nesciunt?
                            Officiis, vero accusamus cupiditate iste ex neque cum.

                            <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id non doloremque
                            consequuntur
                            obcaecati sequi, enim laboriosam autem assumenda magnam laudantium tempora nesciunt?
                            Officiis, vero accusamus cupiditate iste ex neque cum.
                        </p>
                        <strong class="service-quote">"Edmonton Local Movers: Your smooth move starts with us."</strong>
                    </div>
                    <!-- <hr class="my-4"> -->
                </div>
                <div class="col-lg-4 gy-3 d-lg-block">
                    <div class="container">
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
                                <li><a aria-label="about the services we provided" href="service-six.php"><i class="fa-solid fa-dolly"></i> Packing/Equipment</a>
                                </li>
                                <li><a aria-label="about the services we provided" href="service-seven.php"><i class="fa-solid fa-boxes-packing"></i> Packing And
                                        Unpacking</a>
                                </li>
                                <li><a aria-label="about the services we provided" href="service-eight.php"><i class="fa-solid fa-reply-all"></i> Available Storage
                                        Facilities</a>
                                </li>

                            </ul>
                        </div>

                        <div class="services-details-menu d-lg-block d-none">
                            <p><strong>Contact Us</strong></p>
                            <div class="contact-info-box">
                                <div class="icon-contact">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="contact-details">
                                    <span>Address</span>
                                    <p class="all-p"> Edmonton, AB</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <div class="icon-contact">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="contact-details">
                                    <span>Contact Phone</span>
                                    <p><a aria-label="about the services we provided" class="all-p" href="tel: 780-937-6666"> 780-937-6666</a></p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <div class="icon-contact">
                                    <i class="fa-regular fa-clock"></i>
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
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------footer starts--------------------- -->
    <?php
    include('inc/footer.php');
    include('inc/js.php')
        ?>

    <script>const navItems = document.querySelectorAll('.services-menu-list  > li');
        if (navItems.length >= 4) {
            navItems[3].classList.add("active");
        }
    </script>
    <script>const serviceNav = document.querySelectorAll('.navbar-nav  > li a');
        if (serviceNav.length >= 3) {
            serviceNav[2].classList.add("active");
        }
    </script>
</body>

</html>