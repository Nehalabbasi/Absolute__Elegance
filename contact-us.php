<?php
$title = "Contact Us";
$description = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed doeiusm tempor incididunt";

?>


<?php require_once('include/header.php') ?>

<!-- banner -->

<section class="page-banner">
    <div class="inside-div">
        <div class="container">
            <h1 class="banner-title">
                <?= $title ?>
            </h1>
            <P>
                <?= $description ?>
            </P>
            <div class="bread-crumb">
                <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $title ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END INNER BANNER -->



<!-- main contact -->
<section class="form-sec main-contact">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-5 offset-1">

                <div class="inner-contact">
                    <div class="reservation">
                        <div class="img-random">
                            <img src="images/Contact-Image.jpg" alt="">
                        </div>


                    </div>

                    <div class="mail-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="First name here">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Add email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Last name here">
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="How can we help you?">
                                </div>
                            </div>
                            <div class="main-box ">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Comments"></textarea>
                                    </div>
                                    <div class="pink-button mb-5">
                                        <a href="#" class="purple-btn"> Send message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-5 offset-1">
                <div class="orange-bird">
                    <img src="images/body-bird.png" alt="">
                </div>
                <div class="who-we-text">
                    <h2>Interested in <br> discussing? Get In <br> touch with us.</h2>
                    <p>Lorem ipsum dolor sit amet consect etur adipisci ngelitsed do eiu smo d tempor incididunt ut labo
                        re etdo lore magna aliqua quisfipolor.</p>
                </div>

                <div class="contact-social">
                    <strong>Follow us:</strong>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- main contact -->

<section class="contact-details">
    <div class="contact-background-overlay"></div>

    <div class="container ">
        <div class="detail-image">
            <img src="images/hearts.png" alt="">
        </div>
        <div class="detail-text">
            <div class="who-we-text">
                <strong>Contact with Us</strong>
                <h2>Contact Details</h2>
            </div>
        </div>
    </div>

</section>


<section class="contact-margin">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="detail-phone">
                    <i class="fa-solid fa-mobile-screen-button"></i>

                    <div class="inner-phone">
                        <strong>Phone</strong>
                        <p>302-898-5880</p>
                        <p>610-692-4260</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="detail-phone detail-address-last">
                    <i class="fa-solid fa-map-location"></i>

                    <div class="inner-phone">
                        <strong>Address:</strong>
                        <p>168 Airport Road, New Castle,</p>
                        <p>DE 19720</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="detail-phone detail-email-last">
                    <i class="fa-solid fa-envelopes-bulk"></i>

                    <div class="inner-phone">
                        <strong>Email:</strong>
                        <p>
                            <?= $email ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26544691.59357086!2d-116.97448852186452!3d35.693771799648786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1695236203025!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('include/footer.php') ?>