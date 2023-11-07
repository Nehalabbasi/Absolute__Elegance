<?php require_once('include/links.php') ?>

<header>


    <div class="top-bg">
        <div class="container">

            <div class="top-bar-icons">
                <div class="follow-us">
                    <p>Follow us on:</p>

                    <div class="icons">
                        <ul>
                            <li> <a href="#"><i class="fa-brands fa-facebook-f"></i></a> </li>
                            <li> <a href="#"><i class="fa-brands fa-twitter"></i></a> </li>
                            <li> <a href="#"><i class="fa-brands fa-pinterest"></i></a> </li>
                            <li> <a href="#"><i class="fa-brands fa-instagram"></i></a> </li>
                        </ul>

                    </div>
                </div>



            </div>
        </div>

    </div>

    <div class="container">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"> <img src="images/absolutelogo.png" alt=""> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.php">About us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Events
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="birthday-events.php">Birthday Event</a></li>
                                    <li><a class="dropdown-item" href="wedding-events.php">Weeding officiating</a></li>
                                    <li><a class="dropdown-item" href="coroporate-events.php">Corporate events</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex align-items-center">
                            <div class="green-btn">
                                <a href="contact-us.php"> Order Service </a>
                            </div>
                            <div class="search-icn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

    </div>

</header>


<!-- Full screen modal -->
<!-- <div class="modal-dialog modal-fullscreen-sm-down">
  ...
</div> -->
<div class="modal fade main-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="inner-form">
                    <form>
                        <div class=" input-group mb-3">
                            <input type="text" class="form-control" placeholder="Serach...."
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>