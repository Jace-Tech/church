<header class="header-two ">
  <div class="top-bar-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <ul class="contact-info">
            <li><a href="tel:<?= $_ENV['APP_PHONE_1']; ?>"><img src="assets/images/phone-call.svg" alt="Phone Call">Phone: <?= $_ENV['APP_PHONE_1']; ?></a></li>
            <li><a href="<?= $_ENV['INSTAGRAM']; ?>"><img src="assets/images/instagram.svg" alt="Email">Instagram: @trinity247</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="desktop-nav" id="stickyHeader">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav>
            <div class="logo">
              <a href="index-2.html">
                <img src="./logo.png" style="width: 120px;" alt="Header Logo Image">
              </a>
            </div>
            <div class="nav-donation">
              <div class="nav-bar">
                <ul>
                  <li class=""><a href="./">Home</a></li>
                  <li><a href="./sermons">Sermons</a></li>
                  <li><a href="./events">Events</a></li>
                  <li><a href="./about-us">About</a></li>
                  <li><a href="./gallery">Gallery</a></li>
                  <li><a href="./contact-us">Contact</a></li>
                </ul>
              </div>
              <div id="nav-icon4">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile-nav" id="mobile-nav">
    <div class="res-log">
      <a href="index-2.html">
        <img src="./logo.png" alt="Responsive Logo">
      </a>
    </div>
    <ul>
      <li class=""><a href="./">Home</a></li>
      <li><a href="./sermons">Sermons</a></li>
      <li><a href="./about-us">About</a></li>
      <li><a href="./gallery">Gallery</a></li>
      <li><a href="./contact-us">Contact</a></li>
    </ul>
    <a href="JavaScript:void(0)" id="res-cross"></a>
  </div>
</header>