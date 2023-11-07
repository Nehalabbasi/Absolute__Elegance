<?php
$title = "Birthday Events";
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


<!-- who we are -->
<section class="main-who-we birthday-main">
    <div class="container">
        <div class="row offset-1 align-items-center">
            <div class="col-md-6 before-image-bird">
                <div class="complete-who-we">
                    <div class="who-we-text">
                        <strong>Birthday Events</strong>
                        <h2>Planner for Your <br> Perfect Birthday <br>Events </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed doeiusm tempor incididunt donec
                            quam
                            felis ultri cies nec, pellentesque eu, pretium quis sem.</p>
                    </div>

                    <div class="who-we-points">
                        <ul>
                            <li><i class="fa-regular fa-circle-check"></i><a href="">Quam felis ultricies nec
                                    pellentesque eu pretium</a></li>
                            <li><i class="fa-regular fa-circle-check"></i><a href="">Fringilla velealiquet nec vulputate
                                    eget arcu In eni</a></li>
                            <li><i class="fa-regular fa-circle-check"></i><a href="">Yusto rhoncusut imperdiet a
                                    venenatis vitae.</a></li>
                        </ul>
                    </div>

                    <a href="contact-us.php" class="green-btn-outline">Get a Free Quote</a>
                </div>
            </div>

            <div class="col-md-5">
                <div class="who-we-image">
                    <img src="images/birthday1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- who we are end -->

<!-- form sectio -->
<section class="form-sec padding-type">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">

                <div class="decor-img">
                    <img src="images/reserved_sec9.jpg" alt="">
                </div>

            </div>

            <div class="col-md-6">

                <div class="reservation">
                    <div class="img-random">
                        <img src="images/hearts.png" alt="">
                    </div>

                    <h1>Make Reservations</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed doeiusm tempor incididunt</p>
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
                        <div class="main-box">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Comments"></textarea>
                                </div>
                                <div class="pink-button">
                                    <a href="#" class="purple-btn"> send message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- form section end -->



<!-- counter section -->
<section class="main-counter">
    <div class="container">
        <div class="complete-counter">
            <div class="row">

                <div class="col-md-3">
                    <div class="inner-counter">
                        <span class="count" data-count="1565">0</span>
                        <span><i class="fa-solid fa-plus"></i></span>
                        <h5>Happy Couples </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner-counter">
                        <span class="count" data-count="1680">0</span>
                        <span><i class="fa-solid fa-plus"></i></span>
                        <h5>Weddings</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner-counter">
                        <span class="count" data-count="845">0</span>
                        <span><i class="fa-solid fa-plus"></i></span>
                        <h5>Decoration</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner-counter border-last">
                        <span class="count" data-count="175">0</span>
                        <span><i class="fa-solid fa-plus"></i></span>
                        <h5>Locations</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter section end-->



<?php require_once('include/footer.php') ?>