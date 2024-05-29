<footer class="gap footer-one no-bottom green-overlay">
  <div class="parallax" style="background-image: url(assets/images/footer-bg.webp);"></div>
  <div class="container">
    <div class="row part-one">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <img class="footer-logo" src="./logo.png" style="max-width: 150px;" alt="footer logo" />

        <p class="text-white">
          <?= $_ENV['APP_ADDRESS'] ?>
        </p>

        <div class="footer-contact">
          <p class="text-white">
            <span class="theme-clr">Telephone (1):</span> 
            <a class="text-white" href="tel:<?= $_ENV['APP_PHONE_1']; ?>"><?= $_ENV['APP_PHONE_1']; ?></a>
          </p>

          <p class="text-white">
            <span class="theme-clr">Telephone (2):</span>
            <a class="text-white" href="tel:<?= $_ENV['APP_PHONE_2']; ?>"><?= $_ENV['APP_PHONE_2']; ?></a>
          </p>
        </div>
      </div>

      <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-12">
        <h2 class="text-white">Quick Links</h2>

        <ul class="quick-links">
          <li>
            <a href="./about-us">About us</a>
          </li>

          <li>
            <a href="./sermons">Sermons</a>
          </li>

          <li>
            <a href="./events">Events</a>
          </li>

          <li>
            <a href="./gallery">Gallery</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-12">
        <h2 class="text-white">Upcoming Events</h2>

        <ul class="footer-events">
          <li>
            <figure>
              <img src="assets/images/f-event-2.webp" alt="Event Image 2" />
            </figure>

            <div>
              <a href="JavaScript:void(0)">Domestic Violence and Impact on
                Ministry</a>

              <p class="post-date">
                Thrusday, june 4, 2021
              </p>
            </div>
          </li>

          <li>
            <figure>
              <img src="assets/images/f-event.webp" alt="Event Image 3" />
            </figure>

            <div>
              <a href="JavaScript:void(0)">Support Groups: May the God Be with</a>

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
            <a href="JavaScript:void(0)"><img src="assets/images/facebook.svg" alt="facebook" /></a>
          </li>

          <li>
            <a href="JavaScript:void(0)"><img src="assets/images/twitter.svg" alt="twitter" /></a>
          </li>

          <li>
            <a href="JavaScript:void(0)"><img src="assets/images/instagram.svg" alt="instagram" /></a>
          </li>
        </ul>
      </div>

      <div class="footer-rights">
        <p class="text-white">
          © Copyright <span>2021 <?= $_ENV['APP_NAME'] ?></span>. All Rights
          Reserved.
        </p>
      </div>
    </div>
  </div>
</footer>