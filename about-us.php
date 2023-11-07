<?php
$title = "About Us";
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

<section class="main-who-we">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 before-image-bird">
                <div class="complete-who-we">
                    <div class="who-we-text">
                        <strong>Who We Are</strong>
                        <h2>Planner for Your <br> Perfect Wedding</h2>
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

                    <a href="#" class="green-btn-outline">Get a Free Quote</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="who-we-image">
                    <img src="images/about_image1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- who we are end -->

<section class="about-elegance  form-sec padding-type">
    <!-- <div class="about-bg"></div> -->
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="right-side">
                    <div class="row">

                        <div class="col-md-12 ">
                            <div class="image-one">
                                <img src="images/couple-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="two-blocks col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image-two">
                                        <img src="images/flowers.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-three">
                                        <img src="images/wine.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <div class="col-md-6 top-padding-ab top-div">
                <div class="about-text">
                    <strong>About Absolute elegance</strong>

                    <h1>What We do, We do <br>
                        With Passion</h1>

                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit <br> sed doeiusm tempor incididunt</p>

                    <!-- <div class="transparent-btn">
                        <a href="#">Learn More</a>
                    </div> -->
                </div>
            </div>





        </div>
    </div>
</section>

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

<!-- bar -->
<section class="main-progress-bar before-image-bird">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="bar-text">
                    <div class="who-we-text">
                        <strong>Bridely Fun Facts</strong>
                        <h2>Explore our <br> wedding Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscin gelit sed doeiusm tempor incididunt</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="progress-fields">
                    <span>Professionality</span>
                    <div class="progress purple-bar">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100">0%</div>
                    </div>

                    <span>Food Ordering</span>
                    <div class="progress green-bar">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">0%</div>
                    </div>

                    <span>Experience And Quality</span>
                    <div class="progress purple-bar">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100">0%</div>
                    </div>

                    <span>Guarantee</span>
                    <div class="progress green-bar">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100">0%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bar end -->

<!-- video -->
<section class="video-sec">
    <div class="container">
        <div class="video-text">
            <strong>Introduction Video</strong>
            <h2>Absolute Elegance Presentation</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="site-video">
                    <a data-fancybox href="https://www.youtube.com/embed/XHOmBV4js_E?si=rYiiRMgTpY-_U7Si">
                        <img class="card-img-top img-fluid" src="images/video-img.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video end -->

<?php require_once('include/footer.php') ?>