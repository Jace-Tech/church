<header class="header-one">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <ul class="login">
            <li>
              <a href="JavaScript:void(0)"><img src="assets/images/bell.svg" alt="Bell" />One in Christ Jesus,
                engaged in parent's mission, empowered
                by the Spirit.</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 offset-1">
          <ul class="social-medias">
            <li>
              <a href=<?= $_ENV['FACEBOOK'] ?>><img src="assets/images/facebook.svg" alt="facebook" /></a>
            </li>

            <li>
              <a href=<?= $_ENV['INSTAGRAM'] ?>><img src="assets/images/instagram.svg" alt="instagram" /></a>
            </li>
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
              <a href="./">
                <img src="./logo.png" alt="Logo" style="width: 90px;" />
              </a>
            </div>

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
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-nav" id="mobile-nav">
    <div class="res-log">
      <a href="./">
      <img src="./logo.png" alt="Logo" style="width: 90px;" />
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