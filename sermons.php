<?php require("./load_env.php"); ?>
<?php require("./config/db.php") ?>
<?php require("./store/sermons.php"); ?>
<?php require("./store/memory.php"); ?>

<!DOCTYPE html>

<html lang="zxx">

<head>
  <!-- Meta Options -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Title -->
  <title>Sermons - <?= $_ENV['APP_NAME'] ?></title>
  <link rel="icon" type="image/png" href="./logo.png">
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
  <?php include("./includes/header.php") ?>
  <!-- Header One End -->

  <!-- Banner Start -->

  <section class="banner position-relative">
    <div class="parallax" style="background-image: url(assets/images/banner.webp)"></div>

    <div class="banner-data text-center">
      <h2 class="text-white font-bold">Sermons</h2>

      <ul class="flex-all">
        <li>
          <a href="JavaScript:void(0)" class="text-white">Home</a>
        </li>

        <li>
          <a href="JavaScript:void(0)" class="text-white">Sermons</a>
        </li>
      </ul>

      <img src="assets/images/banner-logo.webp" alt="Banner Logo" />
    </div>
  </section>

  <!-- Banner End -->

  <!-- Contact Us Start -->

  <section class="gap sermons">
    <div class="container">
      <div class="row">
        <div class="sermon aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="1000">
          <div class="sermon-img">
            <div class="sermon-media">
              <img src="assets/images/sermon-img.webp" alt="Sermon Image 1" />

              <video controls>
                <source src="assets/videos/video.mp4" type="video/mp4" />

                Your browser does not support the video tag.
              </video>

              <div class="audio-playerstyle2">
                <audio controls>
                  <!-- <source src="audio.ogg" type="audio/ogg"> -->

                  <source src="assets/music/audio-2.mp3" type="audio/mpeg" />

                  Your browser does not support the audio
                  element.
                </audio>
              </div>
            </div>

            <ul>
              <li>
                <a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume" /></a>
              </li>

              <li>
                <a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button" /></a>
              </li>

              <li>
                <a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book" /></a>
              </li>

              <li>
                <a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download" /></a>
              </li>
            </ul>
          </div>

          <div class="sermon-data">
            <ul>
              <li>Jorge karri</li>

              <li>Nov 19, 2021</li>
            </ul>

            <h3>
              <a href="sermon-detail.html">Spiritually Reborn As God’s Children</a>
            </h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
              elit, sed totam rem ape eaque ipsa quae ab illo
              e ipsa quae ab ille ab illo inventore.
            </p>
          </div>
        </div>

        <div class="sermon aos-init" data-aos="zoom-in-right" data-aos-duration="1000">
          <div class="sermon-img">
            <div class="sermon-media">
              <img src="assets/images/sermon-img-1.webp" alt="Sermon Image 1" />

              <video controls>
                <source src="assets/videos/video.mp4" type="video/mp4" />

                Your browser does not support the video tag.
              </video>

              <div class="audio-playerstyle2">
                <audio controls>
                  <!-- <source src="audio.ogg" type="audio/ogg"> -->

                  <source src="assets/music/audio-2.mp3" type="audio/mpeg" />

                  Your browser does not support the audio
                  element.
                </audio>
              </div>
            </div>

            <ul>
              <li>
                <a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume" /></a>
              </li>

              <li>
                <a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button" /></a>
              </li>

              <li>
                <a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book" /></a>
              </li>

              <li>
                <a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download" /></a>
              </li>
            </ul>
          </div>

          <div class="sermon-data">
            <ul>
              <li>Jorge karri</li>

              <li>Nov 19, 2021</li>
            </ul>

            <h3>
              <a href="sermon-detail.html">Spiritually Reborn As God’s Children</a>
            </h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
              elit, sed totam rem ape eaque ipsa quae ab illo
              e ipsa quae ab ille ab illo inventore.
            </p>
          </div>
        </div>

        <div class="sermon aos-init" data-aos="zoom-in-right" data-aos-duration="1000">
          <div class="sermon-img">
            <div class="sermon-media">
              <img src="assets/images/sermon-img-2.webp" alt="Sermon Image 1" />

              <video controls>
                <source src="assets/videos/video.mp4" type="video/mp4" />

                Your browser does not support the video tag.
              </video>

              <div class="audio-playerstyle2">
                <audio controls>
                  <!-- <source src="audio.ogg" type="audio/ogg"> -->

                  <source src="assets/music/audio-2.mp3" type="audio/mpeg" />

                  Your browser does not support the audio
                  element.
                </audio>
              </div>
            </div>

            <ul>
              <li>
                <a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume" /></a>
              </li>

              <li>
                <a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button" /></a>
              </li>

              <li>
                <a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book" /></a>
              </li>

              <li>
                <a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download" /></a>
              </li>
            </ul>
          </div>

          <div class="sermon-data">
            <ul>
              <li>Jorge karri</li>

              <li>Nov 19, 2021</li>
            </ul>

            <h3>
              <a href="sermon-detail.html">Spiritually Reborn As God’s Children</a>
            </h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
              elit, sed totam rem ape eaque ipsa quae ab illo
              e ipsa quae ab ille ab illo inventore.
            </p>
          </div>
        </div>

        <div class="sermon aos-init" data-aos="zoom-in-right" data-aos-duration="1000">
          <div class="sermon-img">
            <div class="sermon-media">
              <img src="assets/images/sermon-img.webp" alt="Sermon Image 1" />

              <video controls>
                <source src="assets/videos/video.mp4" type="video/mp4" />

                Your browser does not support the video tag.
              </video>

              <div class="audio-playerstyle2">
                <audio controls>
                  <!-- <source src="audio.ogg" type="audio/ogg"> -->

                  <source src="assets/music/audio-2.mp3" type="audio/mpeg" />

                  Your browser does not support the audio
                  element.
                </audio>
              </div>
            </div>

            <ul>
              <li>
                <a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume" /></a>
              </li>

              <li>
                <a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button" /></a>
              </li>

              <li>
                <a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book" /></a>
              </li>

              <li>
                <a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download" /></a>
              </li>
            </ul>
          </div>

          <div class="sermon-data">
            <ul>
              <li>Jorge karri</li>

              <li>Nov 19, 2021</li>
            </ul>

            <h3>
              <a href="sermon-detail.html">Spiritually Reborn As God’s Children</a>
            </h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
              elit, sed totam rem ape eaque ipsa quae ab illo
              e ipsa quae ab ille ab illo inventore.
            </p>
          </div>
        </div>

        <div class="sermon aos-init" data-aos="zoom-in-right" data-aos-duration="1000">
          <div class="sermon-img">
            <div class="sermon-media">
              <img src="assets/images/sermon-img-1.webp" alt="Sermon Image 1" />

              <video controls>
                <source src="assets/videos/video.mp4" type="video/mp4" />

                Your browser does not support the video tag.
              </video>

              <div class="audio-playerstyle2">
                <audio controls>
                  <!-- <source src="audio.ogg" type="audio/ogg"> -->

                  <source src="assets/music/audio-2.mp3" type="audio/mpeg" />

                  Your browser does not support the audio
                  element.
                </audio>
              </div>
            </div>

            <ul>
              <li>
                <a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume" /></a>
              </li>

              <li>
                <a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button" /></a>
              </li>

              <li>
                <a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book" /></a>
              </li>

              <li>
                <a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download" /></a>
              </li>
            </ul>
          </div>

          <div class="sermon-data">
            <ul>
              <li>Jorge karri</li>

              <li>Nov 19, 2021</li>
            </ul>

            <h3>
              <a href="sermon-detail.html">Spiritually Reborn As God’s Children</a>
            </h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
              elit, sed totam rem ape eaque ipsa quae ab illo
              e ipsa quae ab ille ab illo inventore.
            </p>
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

<!-- Mirrored from winsfolio.net/blesso/sermons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 10:15:40 GMT -->

</html>