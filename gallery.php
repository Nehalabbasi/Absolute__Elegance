<?php
$title = "Gallery";
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


<!-- main-wedding -->
<section class="main-wedding gallery-page">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="wedd-gallery">
                    <img src="images/galleryimg1.jpg" alt="">
                </div>
                <div class="wedding-img-text">
                    <span>12/05/2022</span>
                    <h4 class="mt-2">Jorge & Abbie</h4>
                    <p>Scottsdale, Arizona</p>
                </div>
            </div>

            <div class="col-md-5 ">
                <div class="wedding-right-img wedd-gallery1">
                    <img src="images/galleryimg2.jpg" alt="">
                    <div class="wedding-img-text">
                        <span>15/04/2022</span>
                        <h4 class="mt-2">Nicole & Michael</h4>
                        <p>Scottsdale, Arizonaa</p>
                    </div>
                </div>



                <div class="wedd-gallery1 gallery-last-img">
                    <img src="images/galleryimg3.jpg" alt="">
                </div>
            </div>

            <div class="wedd-btn">
                <a href="#" class="purple-btn">Make Reservations</a>
            </div>
        </div>

    </div>
</section>


<section class="wedding-boxes gallery-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="wedding-boxes-img">
                    <img src="images/gallery-img4.jpg" alt="">
                </div>
                <div class="wedding-img-text">
                    <span>12/05/2022</span>
                    <h4 class="mt-2">Jorge & Abbie</h4>
                    <p>Scottsdale, Arizona</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wedding-img-text boxes-height">
                    <span>09/02/2022</span>
                    <h4 class="mt-2">Gilbert & William</h4>
                    <p>Scottsdale, Arizona</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wedding-img-text boxes-height">
                    <span>17/04/2022</span>
                    <h4 class="mt-2">Alberta & Ryan</h4>
                    <p>Scottsdale, Arizona</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- GALLERY__INNER__PAGES__START -->

<section class="multiple-img multiple-img-inner">
    <div class="container">
        <div class="row">

            <div class="sec-logo">
                <div class="logo-one">
                    <img src="images/instagram_icon-1.png" alt="">
                    <h2>Instagram Feed</h2>
                </div>
                <div class="logo-two">
                    <img src="images/body_bird.png" alt="">
                </div>
            </div>

            <div class="col-md-3">
                <div class="wedding-couple">
                    <img src="images/coupleHands-1.jpg" alt="">
                </div>
            </div>

            <div class="col-md-3 mt-4">
                <div class="wedding-couple">
                    <img src="images/instagram_123.pn_-1.jpg" alt="">
                </div>
            </div>

            <div class="col-md-3">
                <div class="wedding-couple">
                    <img src="images/sec10_brides-2.jpg" alt="">
                </div>
            </div>

            <div class="col-md-3 mt-4">
                <div class="wedding-couple">
                    <img src="images/sec10_couples-3.jpg" alt="">
                </div>
            </div>


        </div>
    </div>
</section>



<!-- GALLERY__INNER__PAGES__END -->



<!-- JUST__IMAGE__INNER__SEC -->

<section class="just-img">
    <div class="container-fluid">
        <div class="full-image-bg">
            <img src="images/sec11_background-1.png" alt="">
        </div>
    </div>
</section>


<!-- JUST__IMAGE__INNER__SEC__END -->


<!-- main-wedding end-->





<?php require_once('include/footer.php') ?>