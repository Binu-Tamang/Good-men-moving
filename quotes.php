<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="images/png" href="">
    <title>Good Men Moving | Get A Quotes</title>
</head>

<body>
    <!-- ====get a Quotes html starts==== -->
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Get A Quotes' ?>
    <?php include('inc/page-header.php') ?>
    <!-- banner and header page -->

    <section class="getaqoutes text-center p-5">
        <div class="quotes-wrap">
            <div class="container">
                <h1 class="good-men-h2 p-0">GET A FREE QUOTE <i class="fa-solid fa-clipboard"></i></h1>
                <p class="good-man-moving-p aos-init aos-animate">Fill the remaining field below to get a quote. We will
                    respond ASAP to all of your inquiries.</p>
                <div class="quotes-form">
                    <form id="quotesform">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <input type="text" id="name" name="name" class="form-control" required
                                    placeholder="Your First Name" style="height: 55px;">
                                <small id="nameError" class="form-text text-danger"></small>
                            </div>

                            <div class="col-12 col-lg-6">
                                <input type="text" id="name" name="name" class="form-control" required
                                    placeholder="Your Last Name" style="height: 55px;">
                                <small id="nameError" class="form-text text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="tel" id="phone" name="phone"
                                    pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control" required
                                    placeholder="Your Number" style="height: 55px;">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input id="form_email" name="email" value="" class="form-control"
                                    placeholder="Email Address" required="required" data-error="Email is required."
                                    type="text" style="height:55px">
                            </div>
                            <div class="col-12 col-lg-12">
                                <label for="bedrrom">Bedroom:</label>
                                <select name="room" class="form-control" required>
                                    <option selected disabled>-- Bedroom --</option>
                                    <option value="One">One</option>
                                    <option value="two">Two</option>
                                    <option value="three">Three</option>
                                    <option value="four">Four</option>
                                    <option value="five">Five</option>
                                    <option value="more">More</option>
                                    <option value="other">Other (office, container, warehouse etc)</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12">
                                <label for="services">Services Required:</label>
                                <select id="servicesrq" name="servicerq" class="form-control" required>
                                    <option disabled="" selected="">* Services Required</option>
                                    <option>Local Moves</option>
                                    <option>Long Distance Moves</option>
                                    <option>Office Moves</option>
                                    <option>Commercial Movers</option>
                                    <option>Assembly and Disassembly of any size or type</option>
                                    <option>Wide variety of boxes and packing equipment</option>
                                    <option>Packing and unpacking</option>
                                    <option>Available storage facilities</option>
                                </select>
                            </div>
                        </div>
                        <div class="row formrow">
                            <h3>Moving From :</h3>
                            <div class="col-md-4 col-sm-4">
                                <div class="formfield">
                                    <input name="streetnomf" placeholder="* Address" required="required"
                                        data-error="Street Number is Required" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="formfield">
                                    <input name="streetnamemf" class="autocomplete" id="ac1" placeholder="* City"
                                        required="required" data-error="Street Name is Required" class="form-control"
                                        type="text">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="formfield">
                                    <input type="name" placeholder="YYYY M DD" id="date" name="moving_date"
                                        required="required" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="row formrow">
                            <h3>Moving To :</h3>
                            <div class="col-md-4 col-sm-4">
                                <div class="formfield">
                                    <input name="streetnomt" placeholder="* Address" required="required"
                                        data-error="Street Number is Required" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="formfield">
                                    <input name="streetnamemt" class="autocomplete" id="ac2" placeholder="* City"
                                        required="required" data-error="Street Name is Required" class="form-control"
                                        type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row formrow">
                            <div class="col-md-12">
                                <div class="formfield">
                                    <textarea id="form_message" name="message" class="form-control" required
                                        placeholder="* Please Write Detail Your Furniture &amp; Moving Items" rows="4"
                                        data-error="A Message is required"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row formrow form-submit-clear">
                            <div class="col-md-12">
                                <div class="email-btn">
                                    <button>Send Email</button>
                                </div>
                            </div>
                        </div>
                    </form>
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