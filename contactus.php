<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Good Men Moving | Contact Us</title>
</head>

<body>
    <section class="contact-whole-wrap">
        <!-- header parts start -->
        <?php include('inc/header.php') ?>
        <!-- header part ends -->

        <!-- banner and headre page  -->
        <?php $page_name = 'Contact Us' ?>
        <?php include('inc/page-header.php') ?>
        <!-- banner and header page -->

        <!-- contact us form section -->
        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-lg-block">
                        <div class="contact-details-box">
                            <strong>Good Men Moving</strong>
                            <p class="good-man-moving-p aos-init aos-animate">"The Professional Muscular Edmonton
                                Movers" <br>6825 106 St, Edmonton, AB T6H 2W1
                                <br> <a href="mail:goodmenmovingco@gmail.com">goodmenmovingco@gmail.com</a>
                            </p>
                            <a href="tel:780-937-6666"><i class="fa-solid fa-phone"></i> 780-937-6666</a> <br>
                            <a href="#"><i class="fa-regular fa-clock"></i> 24 Hours Services</a>
                            <div class="contact-social-media">
                                <ul>
                                    <li class="li-h-1"><a target="_blank"
                                            href="https://www.facebook.com/profile.php?id=100089283152732"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://www.pinterest.com/goodmenmovingcompany/"><i
                                                class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <img src="assets/img/slider/truck2_4_11zon.jpg" alt="moving men">
                        </div>
                    </div>
                    <div class="col-lg-8 p-0 ">
                        <div class="bg-ternary contact-box-shadow h-100 d-flex flex-column justify-content-center p-5 wow zoomIn "
                            data-wow-delay="0.6s">
                            <h1 class="text-black mb-4">Contact Us</h1>
                            <p class="good-man-moving-p aos-init aos-animate">Fill in the form below to send us a message or to ask about any queries you might have.</p>
                            <form id="contactForm " action="php/contact-form.php" method="post">
                                <div class="row g-3">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" id="name" name="name" class="form-control border-2" required
                                            placeholder="Your First Name" style="height: 55px;">
                                        <small id="nameError" class="form-text text-danger"></small>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <input type="text" id="name" name="name" class="form-control border-2" required
                                            placeholder="Your Last Name" style="height: 55px;">
                                        <small id="nameError" class="form-text text-danger"></small>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="tel" id="phone" name="phone"
                                            pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$"
                                            class="form-control border-2" required placeholder="Your Number"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" id="email" name="email" class="form-control border-2"
                                            required placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    
                                    <div class="col-12 col-lg-12">
                                        <input type="text" id="subject" name="subject" class="form-control border-2"
                                            required placeholder="Subject" style="height: 55px;">
                                    </div>
                                    <div class="col-12 contact-msg">
                                        Message Us
                                        <textarea id="message" class="form-control border-2" name="message" required
                                            placeholder="Your Message" rows="5"></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX">
                                    </div>
                                    <div class="welcome-part-button col-12 text-left">
                                        <button class="about-btn mt-0" type="submit">Submit <i
                                                class="fa-regular fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- good men location map -->
        <div class="container">
        <div class="map pb-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2372.926986670717!2d-113.5067579239513!3d53.50549966280411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a018aa91681491%3A0x7af3ec43da2754c6!2sGood%20Men%20Moving%20Company!5e0!3m2!1sen!2snp!4v1694769694791!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </iframe>
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