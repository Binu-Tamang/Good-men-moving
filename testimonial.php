<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Good Men Moving | Testimonials</title>
</head>

<body>
    <!-- ====get a Quotes html starts==== -->
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Testimonials' ?>
    <?php include('inc/page-header.php') ?>
    <!-- banner and header page -->

    <section class="review-page">
        <div class="container">
                    <!-- testimonials starts -->
                    <div class="good-men-testimonials p-0">
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
                    </div>
                    <!-- testimonials ends -->
                   
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