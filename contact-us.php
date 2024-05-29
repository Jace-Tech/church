<?php require("./load_env.php"); ?>
<?php require("./config/db.php") ?>
<?php require("./store/sermons.php"); ?>
<?php require("./store/memory.php"); ?>

<!DOCTYPE html>

<html lang="zxx">
<!-- Mirrored from winsfolio.net/blesso/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 10:16:04 GMT -->

<head>
  <!-- Meta Options -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>Contact - <?= $_ENV['APP_NAME'] ?></title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/pastor-icon.webp" />
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <!-- Animate on scroll -->
  <link rel="stylesheet" type="text/css" href="assets/css/aos.css" />
  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="assets/css/color.css" />
  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
</head>

<body>
  <!-- Loader Start -->
  <div class="preloader" id="preloader">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
      <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    </svg>
    <div class="inner">
      <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
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
    <div class="parallax" style="background-image: url(assets/images/banner.webp)"></div>

    <div class="banner-data text-center">
      <h2 class="text-white font-bold">Contact Us</h2>

      <ul class="flex-all">
        <li>
          <a href="JavaScript:void(0)" class="text-white">Home</a>
        </li>

        <li>
          <a href="JavaScript:void(0)" class="text-white">Contact Us</a>
        </li>
      </ul>

      <img src="assets/images/banner-logo.webp" alt="Banner Logo" />
    </div>
  </section>

  <!-- Banner End -->

  <!-- Contact Us Start -->

  <section class="gap contact-us">
    <div class="heading">
      <h2 class="m-auto">
        If You Have any Questions Feel Free to Contact Us
      </h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="content">
            <div class="c-detail d-flex" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
              <span class="font-bold">United State</span>

              <ul>
                <li>
                  901-947 South Ripple Creek Drive,
                  Houston, TX 77057, USA
                </li>

                <li><span>Telephone:</span> +1 555 1234</li>

                <li><span>Fax:</span> +1 555 4444</li>

                <li>
                  <span>Email:</span> username@domain.com
                </li>
              </ul>
            </div>

            <div class="c-detail d-flex" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1500">
              <span class="font-bold">South Africa</span>

              <ul>
                <li>
                  901-947 South Ripple Creek Drive,
                  Houston, TX 77057, USA
                </li>

                <li><span>Telephone:</span> +1 555 1234</li>

                <li><span>Fax:</span> +1 555 4444</li>

                <li>
                  <span>Email:</span> username@domain.com
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
          <form>
            <input type="text" name="text" placeholder="Full Name" data-aos="fade-up" data-aos-delay="100" data-aos-duration="400" />

            <input type="email" name="email" placeholder="Email Id" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" />

            <input type="text" name="text" placeholder="Subject" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600" />

            <textarea placeholder="Your Message" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700"></textarea>

            <button type="submit" class="theme-btn" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
              Send Message
            </button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="map">
          <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26137911.08693326!2d17.528036024622846!3d36.8984100952845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f0da6b3046c9d%3A0xa7b70f43237dbb45!2sUniversity%20of%20South%20Wales!5e0!3m2!1sen!2s!4v1629136073507!5m2!1sen!2s" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

      <div class="row">
        <div class="social-medias">
          <ul class="flex-all">
            <li class="flex-all">
              <a href="JavaScript:void(0)" class="text-white font-semi-bold flex-all f-b"><svg id="fffb" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" />
                </svg>
                Facebook</a>
            </li>

            <li class="flex-all">
              <a href="JavaScript:void(0)" class="text-white font-semi-bold flex-all twitr"><svg version="1.1" id="tttwt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="
                                            enable-background: new 0 0 512 512;
                                        " xml:space="preserve">
                  <g>
                    <g>
                      <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992 c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152 c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568 C480.224,136.96,497.728,118.496,512,97.248z" />
                    </g>
                  </g>
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
                Twitter</a>
            </li>

            <li class="flex-all">
              <a href="JavaScript:void(0)" class="text-white font-semi-bold flex-all insta"><svg viewBox="0 0 511 511.9" xmlns="http://www.w3.org/2000/svg">
                  <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" />
                  <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" />
                  <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" />
                </svg>
                Instagram</a>
            </li>

            <li class="flex-all">
              <a href="JavaScript:void(0)" class="text-white font-semi-bold flex-all utube"><svg id="uutube" enable-background="new 0 0 494.942 494.942" height="512" viewBox="0 0 494.942 494.942" width="512" xmlns="http://www.w3.org/2000/svg">
                  <path d="m35.353 0 424.236 247.471-424.236 247.471z" />
                </svg>
                Youtube</a>
            </li>
          </ul>
        </div>
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
            <input type="text" name="Text" placeholder="Enter Your Email Address..." />

            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscribe End -->

  <!-- Footer One Start -->
  <?php include("./includes/footer.php"); ?>
  <!-- Footer One End -->

  <!-- Scroll to top -->

  <button id="scrollTop" class="scrollTopStick">
    <svg viewBox="0 0 490.523 490.523" fill="#fff" height="15">
      <path style="fill: #ffc107" d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047 c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136 c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"></path>
      <path d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151 c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0 l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"></path>
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
  <div class="modal fade donation-model" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            Donate Now
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                <input class="donated_amount" type="number" placeholder="Custom Amount" />
              </div>

              <ul class="list-unstyled aos-init aos-animate">
                <li>
                  <a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">5</span></a>
                </li>

                <li>
                  <a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">10</span></a>
                </li>

                <li>
                  <a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">20</span></a>
                </li>

                <li>
                  <a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">30</span></a>
                </li>
              </ul>

              <a class="theme-btn" href="JavaScript:void(0)">Donate Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery -->

  <script src="assets/js/jquery.min.js"></script>

  <!-- Animate on scroll Js -->

  <script src="assets/js/aos.js"></script>

  <!-- Bootstrap Js -->

  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Custom Js -->

  <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from winsfolio.net/blesso/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 10:16:04 GMT -->

</html>