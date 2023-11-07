<?php
$title = "Services";
$description = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed doeiusm tempor incididunt ";
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


<!-- plane start -->
<section class="outside-events">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-one">
                            <img src="images/sec6_guitar.png" alt="">
                            <p>Entertaintment</p>
                        </div>
                        <div class="box-one">
                            <img src="images/dinning.png" alt="">
                            <p>Dining</p>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box-one">
                            <img src="images/decor.png" alt="">
                            <p>Decor</p>
                        </div>
                        <div class="box-one">
                            <img src="images/swaggifting.png" alt="">
                            <p>Swag & Gifting</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="second-logo">
                    <img src="images/flowers1.png" alt="">
                    <h2>Let’s Plan Your Next <br> Event Together </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed doeiusm tempor incididunt.</p>

                    <div class="section-btn">
                        <a href="contact-us.php" class="purple-btn">Learn More</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- plane end -->

<!-- services section -->
<section class="main-services">
    <div class="left-service-img">
        <img src="images/hearts.png" alt="">
    </div>
    <div class="service-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="service-text">
                    <h2>Includes Various Categories</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed doeiusm tempor incididunt</p>

                </div>
                <div class="service-btn">
                    <a href="events.php" class="green-transp">Learn More</a>
                </div>
            </div>

            <div class="col-md-5">
                <div class="service-images">
                    <div class="service-back">
                        <a href="#"><img src="images/service1.jpg" alt="image"></a>
                    </div>
                    <div class="service-heading">
                        <strong>Weeding officiating</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-margin">
                            <div class="service-images corporate">
                                <div class="corporate-back">
                                    <a href="#"><img src="images/service2.jpg" alt=""></a>
                                </div>
                                <div class="service-heading">
                                    <strong>Corporate events</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="service-margin-two">
                            <div class="service-images events">
                                <div class="events-back ">
                                    <a href="#"><img src="images/service3.jpg" alt=""></a>
                                </div>
                                <div class="service-heading">
                                    <strong>Birthday Events</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- services section end -->

<?php require_once('include/footer.php') ?>