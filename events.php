<?php require("./load_env.php"); ?>
<?php require("./config/db.php") ?>
<?php require("./store/sermons.php"); ?>
<?php require("./store/memory.php"); ?>


<!DOCTYPE html>

<html lang="zxx">
    <!-- Mirrored from winsfolio.net/blesso/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 10:15:41 GMT -->
    <head>
        <!-- Meta Options -->

        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Title -->

        <title>Events</title>

        <!-- Bootstrap -->

        <link
            rel="stylesheet"
            type="text/css"
            href="assets/css/bootstrap.min.css" />

        <!-- Animate on scroll -->

        <link rel="stylesheet" type="text/css" href="assets/css/aos.css" />

        <!-- Stylesheet -->

        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

        <!-- Colors -->

        <link rel="stylesheet" type="text/css" href="assets/css/color.css" />

        <!-- Responsive -->

        <link
            rel="stylesheet"
            type="text/css"
            href="assets/css/responsive.css" />
    </head>

    <body>
        <!-- Loader Start -->
        <div class="preloader" id="preloader">
            <svg
                viewBox="0 0 1920 1080"
                preserveAspectRatio="none"
                version="1.1">
                <path
                    d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            </svg>
            <div class="inner">
                <canvas
                    class="progress-bar"
                    id="progress-bar"
                    width="200"
                    height="200"></canvas>
                <figure>
                    <img src="assets/images/icon-white.png" alt="Image" />
                </figure>
                <small>Loading</small>
            </div>
            <!-- end inner -->
        </div>

        <!-- Loader End -->
        
  <!-- Header One Start -->
  <?php include("./includes/header.php"); ?>
  <!-- Header One Start -->
        <!-- Banner Start -->

        <section class="banner position-relative">
            <div
                class="parallax"
                style="background-image: url(assets/images/banner.webp)"></div>

            <div class="banner-data text-center">
                <h2 class="text-white font-bold">Events</h2>

                <ul class="flex-all">
                    <li>
                        <a href="JavaScript:void(0)" class="text-white">Home</a>
                    </li>

                    <li>
                        <a href="JavaScript:void(0)" class="text-white"
                            >Events</a
                        >
                    </li>
                </ul>

                <img src="assets/images/banner-logo.webp" alt="Banner Logo" />
            </div>
        </section>

        <!-- Banner End -->

        <!-- Contact Us Start -->

        <section class="gap events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/event-img-3.webp"
                                alt="Event Image 1" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 1" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 1" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/event-img-1.webp"
                                alt="Event Image 2" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 2" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 2" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/event-img-3.webp"
                                alt="Event Image 3" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 3" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 3" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/events-img-2.webp"
                                alt="Event Image 4" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 4" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 4" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/events-img.webp"
                                alt="Event Image 5" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 5" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 5" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/event-img-1.webp"
                                alt="Event Image 6" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 6" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 6" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/events-img-2.webp"
                                alt="Event Image 7" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 7" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 7" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event">
                            <img
                                src="assets/images/event-img-3.webp"
                                alt="Event Image 8" />

                            <div class="event-data">
                                <p class="text-white">Stom Park New York</p>

                                <h4>
                                    <a href="event-detail.html" tabindex="0"
                                        >Suicide Loss Grief Support Group</a
                                    >
                                </h4>

                                <ul>
                                    <li>
                                        <img
                                            src="assets/images/calendar.svg"
                                            alt="calendar 8" />Thursday, June 4,
                                        2020
                                    </li>

                                    <li>
                                        <img
                                            src="assets/images/clock.svg"
                                            alt="clock 8" />1:00 pm - 2:00 pm
                                    </li>
                                </ul>

                                <a
                                    class="theme-btn"
                                    href="JavaScript:void(0)"
                                    tabindex="0"
                                    >Book Your Seat</a
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center loadmore">
                    <a href="JavaScript:void(0)" class="theme-btn">Load More</a>
                </div>
            </div>
        </section>

        <!-- Contact Us End -->

        <!-- Subscribe Start -->

        <section class="subscribe">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <h3 class="text-white">Let’s Keep in Touch!</h3>

                        <p class="text-white">
                            Subscribe to keep up with fresh news and exciting
                            updates.
                        </p>
                    </div>

                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <form>
                            <input
                                type="text"
                                name="Text"
                                placeholder="Enter Your Email Address..." />

                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe End -->

        <!-- Footer One Start -->

        <footer class="gap footer-one no-bottom green-overlay">
            <div
                class="parallax"
                style="
                    background-image: url(assets/images/footer-bg.webp);
                "></div>

            <div class="container">
                <div class="row part-one">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="index-2.html">
                            <img
                                class="footer-logo"
                                src="assets/images/footer-logo.webp"
                                alt="footer logo" />
                        </a>

                        <p class="text-white">
                            901-947 South Ripple Creek Drive, Houston, TX 77057,
                            USA
                        </p>

                        <div class="footer-contact">
                            <p class="text-white">
                                <span class="theme-clr">Telephone:</span> +1 555
                                1234
                            </p>

                            <p class="text-white">
                                <span class="theme-clr">Fax:</span> +1 555 4444
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h2 class="text-white">Quick Links</h2>

                        <ul class="quick-links">
                            <li>
                                <a href="sermons.html"
                                    >Sermons & Exhortations</a
                                >
                            </li>

                            <li>
                                <a href="our-ministries.html">Our Ministries</a>
                            </li>

                            <li><a href="events.html">Our Events</a></li>

                            <li>
                                <a href="sermons.html"
                                    >Sermons & Exhortations</a
                                >
                            </li>

                            <li><a href="pastor-detail.html">Volunteers</a></li>

                            <li>
                                <a href="event-detail.html"
                                    >Domestic Violence</a
                                >
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h2 class="text-white">Upcoming Events</h2>

                        <ul class="footer-events">
                            <li>
                                <figure>
                                    <img
                                        src="assets/images/f-event-2.webp"
                                        alt="Event Image" />
                                </figure>

                                <div>
                                    <a href="event-detail.html"
                                        >Domestic Violence and Impact on
                                        Ministry</a
                                    >

                                    <p class="post-date">
                                        Thrusday, june 4, 2021
                                    </p>
                                </div>
                            </li>

                            <li>
                                <figure>
                                    <img
                                        src="assets/images/f-event.webp"
                                        alt="Event Image 2" />
                                </figure>

                                <div>
                                    <a href="event-detail.html"
                                        >Support Groups: May the God Be with</a
                                    >

                                    <p class="post-date">
                                        Thrusday, june 4, 2021
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="copy-right">
                    <div class="social">
                        <ul class="social-medias">
                            <li>
                                <a href="JavaScript:void(0)"
                                    ><img
                                        src="assets/images/facebook.svg"
                                        alt="facebook"
                                /></a>
                            </li>

                            <li>
                                <a href="JavaScript:void(0)"
                                    ><img
                                        src="assets/images/twitter.svg"
                                        alt="twitter"
                                /></a>
                            </li>

                            <li>
                                <a href="JavaScript:void(0)"
                                    ><img
                                        src="assets/images/instagram.svg"
                                        alt="instagram"
                                /></a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-rights">
                        <p class="text-white">
                            © Copyright <span>2021 Blesso</span>. All Rights
                            Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer One End -->

        <!-- Scroll to top -->

        <button id="scrollTop" class="scrollTopStick">
            <svg viewBox="0 0 490.523 490.523" fill="#fff" height="15">
                <path
                    style="fill: #ffc107"
                    d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047 c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136 c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"></path>
                <path
                    d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151 c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0 l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"></path>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </button>

        <!-- Donation Modal -->
        <div
            class="modal fade donation-model"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Donate Now
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="donation-data">
                            <h2>Stand Up the Church Climate Crisis</h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed totam rem ape eaque.
                            </p>

                            <div class="donation-form">
                                <div class="custom-donation-amount">
                                    <span class="text-white">$</span>
                                    <input
                                        class="donated_amount"
                                        type="number"
                                        placeholder="Custom Amount" />
                                </div>

                                <ul class="list-unstyled aos-init aos-animate">
                                    <li>
                                        <a
                                            class="donating"
                                            href="JavaScript:void(0)"
                                            >$<span class="donation_amount"
                                                >5</span
                                            ></a
                                        >
                                    </li>

                                    <li>
                                        <a
                                            class="donating"
                                            href="JavaScript:void(0)"
                                            >$<span class="donation_amount"
                                                >10</span
                                            ></a
                                        >
                                    </li>

                                    <li>
                                        <a
                                            class="donating"
                                            href="JavaScript:void(0)"
                                            >$<span class="donation_amount"
                                                >20</span
                                            ></a
                                        >
                                    </li>

                                    <li>
                                        <a
                                            class="donating"
                                            href="JavaScript:void(0)"
                                            >$<span class="donation_amount"
                                                >30</span
                                            ></a
                                        >
                                    </li>
                                </ul>

                                <a class="theme-btn" href="JavaScript:void(0)"
                                    >Donate Now</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery -->

        <script src="assets/js/jquery.min.js"></script>

        <!-- Bootstrap Js -->

        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Animate on scroll Js -->

        <script src="assets/js/aos.js"></script>

        <!-- Custom Js -->

        <script src="assets/js/custom.js"></script>
    </body>

    <!-- Mirrored from winsfolio.net/blesso/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 10:15:41 GMT -->
</html>
