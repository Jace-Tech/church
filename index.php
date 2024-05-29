<?php require("./load_env.php"); ?>
<?php require("./config/db.php") ?>
<?php require("./store/sermons.php"); ?>
<?php require("./store/memory.php"); ?>


<?php
$SERMONS = getAllSermons($connect);
$MEMORIES = getAllMemories($connect, 6);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Options -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Title -->
	<title><?= $_ENV['APP_NAME'] ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/pastor-icon.webp">

	<!-- Animate on scroll -->
	<link rel="stylesheet" type="text/css" href="assets/css/aos.css">

	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

	<!-- Fancy Box -->
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">


	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- Colors -->
	<link rel="stylesheet" type="text/css" href="assets/css/color.css">

	<!-- Responsive -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body>

	<!-- Loader Start -->
	<div class="preloader" id="preloader">
		<svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
			<path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
		</svg>
		<div class="inner">
			<canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
			<figure><img src="assets/images/icon-white.png" alt="Image"></figure>
			<small>Loading</small>
		</div>
		<!-- end inner -->
	</div>

	<!-- Loader End -->

	<!-- Header Two Start -->
	<?php include("./includes/header1.php") ?>
	<!-- Header Two End -->

	<!-- Hero Two Start -->
	<section class="hero-two">
		<video autoplay muted loop>
			<source src="assets/videos/video.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div class="hero-data text-center">
			<div class="tilt">
				<h1 class="text-white">Faith at Home</h1>
				<p class="text-white">Suopporting the faith development and pastoral care of children and young people</p>
			</div>
			<img class="hero-2-shape img-moving img-fluid" src="assets/images/hero-2-shape.webp" alt="Hero Two Shape">
		</div>
	</section>
	<!-- Hero Two End -->

	<!-- CountDown Start -->
	<div class="theme-bg-clr countdown">
		<div class="parallax pattren" style="background-image: url(assets/images/pattren.jpg);"></div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div class="counter-data">
						<a href="JavaScript:void(0)" class="d-flex text-white w-lg-75 font-bold">Domestic Violence and Impact on Ministry</a>
						<ul>
							<li><svg fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
									<path d="m448 64h-21.332031v-42.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031h-21.332031c-11.777344 0-21.332031 9.558594-21.332031 21.332031v42.667969h-213.335938v-42.667969c0-11.773437-9.554687-21.332031-21.332031-21.332031h-21.332031c-11.777344 0-21.335938 9.558594-21.335938 21.332031v42.667969h-21.332031c-35.285156 0-64 28.714844-64 64v320c0 35.285156 28.714844 64 64 64h384c35.285156 0 64-28.714844 64-64v-320c0-35.285156-28.714844-64-64-64zm21.332031 384c0 11.753906-9.578125 21.332031-21.332031 21.332031h-384c-11.753906 0-21.332031-9.578125-21.332031-21.332031v-233.8125h426.664062zm0 0" />
								</svg>Thursday, June 4, 2020</li>
							<li><svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
								</svg>Storm park new york</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div id="countdown">
						<div id='tiles'></div>
						<ul class="labels">
							<li>Days</li>
							<li>Hours</li>
							<li>Mins</li>
							<li>Secs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CountDown End -->

	<!-- About Two Start -->
	<section class="gap about-two">
		<div class="container">
			<div class="row">
				<div class="about-info m-auto text-center">
					<h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">We are a Church with a Heart for The Poor</h2>
					<p data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem ipsa quae ab illo invene ipsa quae ab ille ab illo inventore Lorem ipsum dconsectetur adipisicing elit, sed totam rem ape eaque ipsa quae ab illo i ae ab ille ab illo inventore.</p>
					<img src="assets/images/signature.webp" alt="Signature" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
					<div class="extras">
						<div class="position-relative overflow-hidden">
							<img class="img-fluid w-100" src="assets/images/about-two-img1.webp" alt="about image">
							<span class="tcenter flex-all"><svg version="1.1" id="church-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.16 456.16" style="enable-background:new 0 0 456.16 456.16;" xml:space="preserve">
									<g>
										<g>
											<path d="M394.2,279.52l-104.8-78.88V138.8c0-4.418-3.582-8-8-8s-8,3.582-8,8v61.84l-92,69.2V156.8c0.013-0.266,0.013-0.534,0-0.8 c0.012-2.126-0.823-4.17-2.32-5.68l-51.2-74.24V34h22.64V18h-22.64V0h-16v18H89.24v16h22.64v42.08l-52,75.36 c-0.212,0.332-0.399,0.68-0.56,1.04v0.64c-0.344,0.867-0.533,1.788-0.56,2.72v292.32c0,4.418,3.582,8,8,8H389.4 c4.418,0,8-3.582,8-8V285.92C397.4,283.402,396.214,281.031,394.2,279.52z M119.88,92.72l38.24,55.36H81.64L119.88,92.72z M165.4,285.92v154.24H74.36V164.08h91.04V285.92z M306.36,440.16h-50v-82.64c0-13.807,11.193-25,25-25s25,11.193,25,25V440.16z M381.32,440.16h-58.96v-82.64c0-22.644-18.356-41-41-41s-41,18.356-41,41v82.64H181.4V289.92l100-75.28l100,75.28L381.32,440.16z " />
										</g>
									</g>
									<g>
										<g>
											<path d="M281.16,240.24c-16.171,0-29.28,13.109-29.28,29.28s13.109,29.28,29.28,29.28s29.28-13.109,29.28-29.28 S297.331,240.24,281.16,240.24z M294.36,269.52c0,7.334-5.946,13.28-13.28,13.28s-13.28-5.946-13.28-13.28 s5.946-13.28,13.28-13.28c7.333-0.133,13.385,5.705,13.518,13.038c0.001,0.081,0.002,0.161,0.002,0.242H294.36z" />
										</g>
									</g>
									<g>
										<g>
											<rect x="90.2" y="191.76" width="59.36" height="16" />
										</g>
									</g>
									<g>
										<g>
											<rect x="90.2" y="233.28" width="59.36" height="16" />
										</g>
									</g>
									<g>
										<g>
											<rect x="90.2" y="274.8" width="59.36" height="16" />
										</g>
									</g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
									<g> </g>
								</svg></span>
						</div>

						<a class="flex-all font-bold" href="JavaScript:void(0)">Place of Heaven</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
					<div class="extras">
						<div class="position-relative overflow-hidden">
							<img class="img-fluid w-100" src="assets/images/about-two-img2.webp" alt="about image">
							<span class="tcenter flex-all"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="freedom" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g id="XMLID_1577_">
										<g id="XMLID_327_">
											<path id="XMLID_338_" d="M501.807,343.876c-13.083-14.205-34.212-16.702-50.244-5.944c-24.585,16.501-65.757,43.871-95.967,63.927    c-5.497,3.649-11.321,6.667-17.375,9.045c4.938-15.291-0.361-32.546-14.037-42.261l-80.573-57.234    c-36.383-25.847-85.368-25.977-121.889-0.325l-48.225,33.87l-10.581-10.581c-3.906-3.904-10.236-3.904-14.143,0L2.93,380.216    c-3.905,3.905-3.905,10.237,0,14.143c3.906,3.904,10.236,3.904,14.143,0l38.772-38.772l100.57,100.57l-38.772,38.772    c-3.905,3.905-3.905,10.237,0,14.143c1.953,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.929l44.415-44.415l92.066,32.724    c13.474,4.788,27.5,7.141,41.462,7.141c25.214,0,50.214-7.672,71.343-22.518l7.139-5.016c4.519-3.176,5.608-9.412,2.434-13.932    c-3.176-4.52-9.413-5.608-13.932-2.434l-7.139,5.016c-27.534,19.346-62.899,24.166-94.609,12.896L169.644,441.1l-81.79-81.79    l45.362-31.86c29.61-20.794,69.317-20.688,98.813,0.263l80.573,57.234c7.653,5.437,9.717,15.909,4.698,23.843    c-4.918,7.774-14.807,10.485-22.996,6.31c-28.418-14.486-73.77-37.544-73.77-37.544l-0.006,0.013    c-1.36-0.692-2.895-1.091-4.526-1.091c-5.523,0-10,4.477-10,10c0,3.89,2.225,7.252,5.468,8.906v0c0,0,45.341,23.052,73.752,37.534    c5.505,2.807,11.367,4.151,17.145,4.16c0.666,0.14,1.355,0.215,2.063,0.215c22.211,0,43.729-6.491,62.229-18.772    c30.229-20.067,71.431-47.458,96.051-63.982c7.779-5.223,18.037-4.008,24.387,2.887c3.673,3.988,5.377,9.152,4.798,14.543    s-3.341,10.076-7.777,13.192l-41.912,29.447c-4.519,3.175-5.608,9.412-2.434,13.932c3.176,4.519,9.411,5.61,13.932,2.434    l41.912-29.447c9.087-6.385,14.979-16.38,16.165-27.422C512.965,363.062,509.33,352.044,501.807,343.876z" />
											<path id="XMLID_432_" d="M217.121,136.357c2.63,0,5.21-1.07,7.069-2.93c1.87-1.86,2.931-4.44,2.931-7.07s-1.061-5.21-2.931-7.07    c-1.859-1.859-4.43-2.93-7.069-2.93c-2.63,0-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07s1.069,5.21,2.93,7.07    C211.911,135.287,214.491,136.357,217.121,136.357z" />
											<path id="XMLID_939_" d="M149.938,143.646h17.729l6.973,50.709c3.735,27.155,17.17,52.031,37.83,70.045    c20.661,18.013,47.135,27.934,74.546,27.934c17.813,0,35.123-4.139,50.839-12.039c0.933-0.345,45.264-16.441,87.377,2.84    c1.343,0.614,2.76,0.908,4.158,0.908c3.281,0,6.465-1.618,8.365-4.514c26.915-41.011,32.216-90.742,32.429-92.84    c0.341-3.361-1.04-6.668-3.67-8.79s-6.153-2.775-9.367-1.729l-40.221,13.058c4.529-9.531,6.935-20.056,6.842-30.713l-0.017-1.874    c4.742-9.302,7.003-19.796,6.381-30.424l-0.52-8.868c8.527-13.707,10.142-30.845,3.81-46.239l-2.447-5.951    c5.558-13.408,6.925-28.473,3.453-42.887l-3.521-14.614c-0.847-3.518-3.528-6.303-7.011-7.284    c-3.483-0.98-7.225-0.004-9.782,2.555l-28.957,28.956c-13.464,13.465-29.276,23.823-47,30.789    c-27.9,10.966-51.73,29.321-69.362,53.339l-1.488-5.587c-5.188-23.521-26.381-40.566-50.489-40.566    c-14.944,0-29.148,6.46-38.97,17.725c-6.314,7.241-10.399,16.009-11.981,25.28l-20.941,12.128    c-3.914,2.267-5.819,6.879-4.646,11.248C141.454,140.609,145.414,143.646,149.938,143.646z M425.347,261.551    c-18.903-7.016-37.482-8.536-53.11-7.786c8.81-10.02,15.82-21.557,20.683-34.231l0.651-1.695l54.129-17.574    C444.572,215.5,438.062,239.54,425.347,261.551z M192.923,100.728c6.022-6.907,14.731-10.868,23.896-10.868    c14.834,0,27.868,10.525,30.992,25.025c0.033,0.157,0.071,0.313,0.112,0.468l7.222,27.115c1.015,3.81,4.172,6.668,8.063,7.298    c3.89,0.632,7.789-1.084,9.956-4.378l7.616-11.587c15.71-23.895,38.08-42.054,64.693-52.514    c20.298-7.977,38.407-19.84,53.827-35.26l16.271-16.271c2.825,15.769-2.281,32.27-13.672,43.66l-12.808,12.808    c-3.905,3.905-3.905,10.237,0,14.143c3.906,3.904,10.236,3.904,14.143,0l12.808-12.808c0.327-0.327,0.65-0.657,0.97-0.99    c1.199,9.293-1.877,18.768-8.676,25.658l-6.047,6.047h-0.001c-3.905,3.905-3.905,10.236,0,14.142    c2.071,2.071,4.822,3.032,7.535,2.919c-0.669,4.603-2.149,9.047-4.36,13.121l-12.823,15.165    c-3.461,4.094-3.078,10.188,0.867,13.817c1.627,1.496,3.621,2.354,5.669,2.579c-2.46,5.361-5.857,10.299-10.07,14.512    c-2.379,2.379-5.008,4.517-7.823,6.374l-26.944,10.989c-5.016,2.046-7.49,7.713-5.583,12.782c1.909,5.07,7.509,7.696,12.625,5.93    l4.414-1.525c-16.947,26.443-46.69,43.255-78.78,43.255c-46.441,0-86.233-34.695-92.561-80.703l-9.042-65.749    C184.163,116.803,186.901,107.635,192.923,100.728z" />
											<path id="XMLID_957_" d="M414.971,435.427c-2.63,0-5.21,1.069-7.08,2.93c-1.86,1.87-2.93,4.45-2.93,7.08s1.069,5.2,2.93,7.06    c1.87,1.87,4.44,2.94,7.08,2.94c2.63,0,5.2-1.07,7.07-2.94c1.859-1.859,2.93-4.43,2.93-7.06c0-2.64-1.07-5.21-2.93-7.08    C420.171,436.497,417.601,435.427,414.971,435.427z" />
										</g>
									</g>
								</svg></span>
						</div>

						<a class="flex-all font-bold" href="JavaScript:void(0)">Stand For Freedom</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="800" data-aos-duration="2000">
					<div class="extras">
						<div class="position-relative overflow-hidden">
							<img class="img-fluid w-100" src="assets/images/about-two-img3.webp" alt="about image">
							<span class="tcenter flex-all"><svg id="Bible" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="m316 306h-120c-5.523 0-10 4.477-10 10s4.477 10 10 10h120c5.523 0 10-4.477 10-10s-4.477-10-10-10z" />
										<path d="m181 191h35v65c0 5.523 4.477 10 10 10h60c5.523 0 10-4.477 10-10v-65h35c5.523 0 10-4.477 10-10v-60c0-5.523-4.477-10-10-10h-35v-35c0-5.523-4.477-10-10-10h-60c-5.523 0-10 4.477-10 10v35h-35c-5.523 0-10 4.477-10 10v60c0 5.523 4.477 10 10 10zm10-60h35c5.523 0 10-4.477 10-10v-35h40v35c0 5.523 4.477 10 10 10h35v40h-35c-5.523 0-10 4.477-10 10v65h-40v-65c0-5.523-4.477-10-10-10h-35z" />
										<circle cx="256" cy="502" r="10" />
										<path d="m66 70v372c0 38.598 31.402 70 70 70h75c5.523 0 10-4.478 10-10s-4.477-10-10-10h-75c-27.57 0-50-22.43-50-50s22.43-50 50-50.01h271.47c-5.939 10.387-9.906 24.207-11.091 40.01h-260.379c-5.523 0-10 4.477-10 10s4.477 10 10 10h260.379c1.185 15.803 5.151 29.623 11.09 40h-106.469c-5.523 0-10 4.478-10 10s4.477 10 10 10h135c5.523 0 10-4.478 10-10s-4.477-10-10-10c-8.155 0-20-19.478-20-50s11.845-50 20-50c5.523 0 10-4.477 10-10v-372c0-5.523-4.477-10-10-10h-300c-38.598 0-70 31.402-70 70zm360 302h-290c-19.567 0-37.285 8.07-50 21.057v-323.057c0-27.57 22.43-50 50-50h290z" />
									</g>
								</svg></span>
						</div>

						<a class="flex-all font-bold" href="JavaScript:void(0)">Study Bible</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Two End -->

	<?php if (count($SERMONS)) : ?>
		<!-- Recent Sermons Two Start -->
		<section class="gap recent-sermon-two">
			<div class="container">
				<div class="heading">
					<img src="assets/images/heading-img.webp" alt="Heading Image">
					<!-- <p>Scandoulous Things Jesus did in his Ministry</p> -->
					<h2>Recent Sermons</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
						<div class="sermon-two">
							<div class="sermon-grid position-relative sermon-img">
								<div class="sermon-media">
									<img class="img-fluid w-100" src="assets/images/sermon-two-1.webp" alt="Sermon Image">
									<video controls>

										<source src="assets/videos/video.mp4" type="video/mp4">

										Your browser does not support the video tag.

									</video>
									<div class="audio-player style2">

										<audio controls>

											<!-- <source src="audio.ogg" type="audio/ogg"> -->

											<source src="assets/music/audio-4.mp3" type="audio/mpeg">

											Your browser does not support the audio element.

										</audio>

									</div>
								</div>
								<ul>
									<li><a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume"></a></li>
									<li><a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button"></a></li>
									<li><a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book"></a></li>
									<li><a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download"></a></li>
								</ul>
							</div>
							<ul class="meta">
								<li>Jorge karri</li>
								<li>Nov 19, 2021</li>
							</ul>
							<h3><a class="font-bold w-75 m-auto d-flex" href="sermon-detail.html">Creation Life in the Garden Children</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
						<div class="sermon-two">
							<div class="sermon-grid position-relative sermon-img">
								<div class="sermon-media">
									<img class="img-fluid w-100" src="assets/images/sermon-two-2.webp" alt="Sermon Image">
									<video controls>

										<source src="assets/videos/video.mp4" type="video/mp4">

										Your browser does not support the video tag.

									</video>
									<div class="audio-player style2">

										<audio controls>

											<!-- <source src="audio.ogg" type="audio/ogg"> -->

											<source src="assets/music/audio-5.mp3" type="audio/mpeg">

											Your browser does not support the audio element.

										</audio>

									</div>
								</div>
								<ul>
									<li><a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume"></a></li>
									<li><a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button"></a></li>
									<li><a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book"></a></li>
									<li><a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download"></a></li>
								</ul>
							</div>
							<ul class="meta">
								<li>Jorge karri</li>
								<li>Nov 19, 2021</li>
							</ul>
							<h3><a class="font-bold w-75 m-auto d-flex" href="sermon-detail.html">Creation Life in the Garden Children</a></h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1500">
						<div class="sermon-two">
							<div class="sermon-grid position-relative sermon-img">
								<div class="sermon-media">
									<img class="img-fluid w-100" src="assets/images/sermon-two-3.webp" alt="Sermon Image">
									<video controls>

										<source src="assets/videos/video.mp4" type="video/mp4">

										Your browser does not support the video tag.

									</video>
									<div class="audio-player style2">

										<audio controls>

											<!-- <source src="audio.ogg" type="audio/ogg"> -->

											<source src="assets/music/audio-1.mp3" type="audio/mpeg">

											Your browser does not support the audio element.

										</audio>

									</div>
								</div>
								<ul>
									<li><a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume"></a></li>
									<li><a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button"></a></li>
									<li><a class="s_pdf" href="JavaScript:void(0)"><img src="assets/images/book.svg" alt="Book"></a></li>
									<li><a class="s_music" href="JavaScript:void(0)"><img src="assets/images/download.svg" alt="download"></a></li>
								</ul>
							</div>
							<ul class="meta">
								<li>Jorge karri</li>
								<li>Nov 19, 2021</li>
							</ul>
							<h3><a class="font-bold w-75 m-auto d-flex" href="sermon-detail.html">Creation Life in the Garden Children</a></h3>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="view-all text-center">
						<h2 data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">The Blesso Church is Committed to Safeguarding as an Integral Part of Its Life, Mission and Ministry</h2>
						<div class="d-flex justify-content-center loadmore" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
							<a href="our-ministries.html" class="theme-btn">View All Ministry</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Recent Sermons Two End -->
	<?php endif; ?>

	<!-- Causes Of Church Start -->
	<!-- <section class="gap causes-of-church green-bg">
		<div class="parallax pattren" style="background-image: url(assets/images/pattren.jpg);"></div>
		<div class="container position-relative">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p class="subtitle">helpful causes of church</p>
					<h2 class="text-white w-35">Help Lots of People by Donating</h2>
				</div>
			</div>
			<div class="row slider-causes-of-church">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="don-box">
						<h3 class="w-85">1,000 Microloans for Rural Women</h3>
						<div class="prices">
							<h4><i>$</i>8,023</h4>
							<p>raised of <span>$25,000 goal</span></p>
						</div>
						<a href="cause-detail.html" class="theme-btn">Donate Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="don-box">
						<h3>Health Care for 450 HIV+ Children</h3>
						<div class="prices">
							<h4><i>$</i>8,023</h4>
							<p>raised of <span>$25,000 goal</span></p>
						</div>
						<a href="cause-detail.html" class="theme-btn">Donate Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="don-box">
						<h3>Donation either to the national funds </h3>
						<div class="prices">
							<h4><i>$</i>8,023</h4>
							<p>raised of <span>$25,000 goal</span></p>
						</div>
						<a href="cause-detail.html" class="theme-btn">Donate Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="don-box">
						<h3 class="w-85">1,000 Microloans for Rural Women</h3>
						<div class="prices">
							<h4><i>$</i>8,023</h4>
							<p>raised of <span>$25,000 goal</span></p>
						</div>
						<a href="cause-detail.html" class="theme-btn">Donate Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="don-box">
						<h3>Health Care for 450 HIV+ Children</h3>
						<div class="prices">
							<h4><i>$</i>8,023</h4>
							<p>raised of <span>$25,000 goal</span></p>
						</div>
						<a href="cause-detail.html" class="theme-btn">Donate Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="don-box">
						<h3>Donation either to the national funds </h3>
						<div class="prices">
							<h4><i>$</i>8,023</h4>
							<p>raised of <span>$25,000 goal</span></p>
						</div>
						<a href="cause-detail.html" class="theme-btn">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Causes Of Church Start -->

	<?php if (count($MEMORIES)) : ?>
		<!-- Church Memories Start -->
		<section class="gap church-memories">
			<div class="container">
				<div class="heading">
					<img src="assets/images/heading-img.webp" alt="Heading Image">
					<!-- <p>Scandoulous Things Jesus did in his Ministry</p> -->
					<h2>Church Memories</h2>
				</div>
				<div class="row">
					<?php for ($row = 0; $row < floor(count($MEMORIES) / 3); $row++) : ?>
						<?php list($one, $two, $three) = array_slice($MEMORIES, ($row * 3), 3);?>
						<?php $isOdd = $row % 2 === 1; ?>

						<?php if($isOdd): ?>
							<div class="col-lg-6 col-md-12">
								<div class="gallery">
									<figure>
										<img src="./memories/<?= $one['image'] ?>" alt="about image">
										<a data-fancybox="gallery" href="./memories/<?= $one['image'] ?>"><img src="assets/images/plus.svg" alt="Plus"></a>
									</figure>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="gallery">
											<figure>
												<img src="./memories/<?= $two['image'] ?>" alt="about image">
												<a data-fancybox="gallery" href="./memories/<?= $two['image'] ?>"><img src="assets/images/plus.svg" alt="Plus"></a>
											</figure>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="gallery">
											<figure>
												<img src="./memories/<?= $three['image'] ?>" alt="about image">
												<a data-fancybox="gallery" href="./memories/<?= $three['image'] ?>"><img src="assets/images/plus.svg" alt="Plus"></a>
											</figure>
										</div>
									</div>
								</div>
							</div>
						<?php else: ?>
							<div class="col-lg-6 col-md-12">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="gallery">
											<figure>
												<img src="./memories/<?= $one['image']; ?>" alt="about image">
												<a data-fancybox="gallery" href="./memories/<?= $one['image']; ?>"><img src="assets/images/plus.svg" alt="Plus"></a>
											</figure>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="gallery">
											<figure>
												<img src="./memories/<?= $two['image']; ?>" alt="about image">
												<a data-fancybox="gallery" href="./memories/<?= $two['image']; ?>"><img src="assets/images/plus.svg" alt="Plus"></a>
											</figure>
										</div>
									</div>
								</div>
								<div class="gallery">
									<figure>
										<img src="./memories/<?= $three['image']; ?>" alt="about image">
										<a data-fancybox="gallery" href="./memories/<?= $three['image']; ?>"><img src="assets/images/plus.svg" alt="Plus"></a>
									</figure>
								</div>
							</div>
						<?php endif; ?>

					<?php endfor; ?>
				</div>

				<div class="d-flex justify-content-center loadmore">
					<a href="JavaScript:void(0)" class="theme-btn">Load More</a>
				</div>
			</div>
		</section>
		<!-- Church Memories End -->
	<?php endif; ?>


	<!-- Pastor Start -->
	<section class="gap no-top pastor">
		<div class="container">
			<div class="heading">
				<img src="assets/images/heading-img.webp" alt="Heading Image">
				<h2>Meet our Pastor</h2>
			</div>
			<div class="row margin justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-12 p-lg-0">
					<div class="profile">
						<img class="img-fluid w-100" src="assets/images/pastor.jpeg" alt="Pastor Image">
						<div class="meta green-bg">
							<a class="font-bold text-white" href="pastor-detail.html">Papa Onyedika</a>
							<p class="font-bold text-white">Protestant Clergy</p>
							<div class="social">
								<ul class="social-medias">
									<li><a href="JavaScript:void(0)"><img src="assets/images/facebook.svg" alt="facebook"></a></li>
									<li><a href="JavaScript:void(0)"><img src="assets/images/twitter.svg" alt="twitter"></a></li>
									<li><a href="JavaScript:void(0)"><img src="assets/images/instagram.svg" alt="instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pastor End -->

	<!-- Mass Timing Start -->
	<section class="gap mass-timing light-bg">
		<div class="container">
			<div class="row">
				<div class="head">
					<div class="meta">
						<h2>Weekend Mass Timing</h2>
					</div>
					<!-- <div class="d-flex align-items-center">
						<a href="JavaScript:void(0)" class="theme-btn">CONFESSIONS & MORE</a>
					</div> -->
				</div>
			</div>
		</div>
		<div class="expand">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Sunday</th>
						<th scope="col">Monday to Friday</th>
						<th scope="col">Saturday</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span>08:00</span>Mass</td>
						<td><span>08:00</span>Mass</td>
						<td><span>08:00</span>Mass</td>
					</tr>
					<tr>
						<td><span>08:00</span>Mass latin live </td>
						<td><span>08:00</span>Mass</td>
						<td><span>08:00</span>Mass</td>
					</tr>
					<tr>
						<td><span>08:00</span>Mass</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><span>08:00</span>Mass latin live</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<!-- Mass Timing End -->

	<!-- Church Products Start -->
	<!-- <section class="gap no-bottom church-products">
		<div class="heading">
			<img src="assets/images/heading-img.webp" alt="Heading Image">
			<p>Scandoulous Things Jesus did in his Ministry</p>
			<h2>Church Products</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="300" data-aos-duration="800">
					<div class="product light-bg">
						<div class="thumbnail">
							<figure class="text-center">
								<img src="assets/images/p-1.webp" alt="Product Image">
							</figure>
							<div class="product-actions flex-all">
								<a href="JavaScript:void(0)" class="flex-all"><svg id="sShdfgdfoping-bag" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg></a>
								<a href="JavaScript:void(0)" class="flex-all"><svg version="1.1" id="hsdfsdfsfdeart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 67.949 67.949" style="enable-background:new 0 0 67.949 67.949;" xml:space="preserve"> <g> <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0 c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672 c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652 C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51 c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787 s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773 c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></a>
							</div>
						</div>
						<div class="product-description text-center">
							<div class="ratings flex-all">
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star "></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
							<a href="product-detail.html">Common Worship Lectionary</a>
							<div class="product-prices">
								<span class="price font-bold">$1.80</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
					<div class="product light-bg">
						<div class="thumbnail">
							<figure class="text-center">
								<img src="assets/images/p-2.webp" alt="Product Image">
							</figure>
							<div class="product-actions flex-all">
								<a href="JavaScript:void(0)" class="flex-all"><svg id="sShopdfgdfging-bag" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg></a>
								<a href="JavaScript:void(0)" class="flex-all"><svg version="1.1" id="hdesdfsdfsart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 67.949 67.949" style="enable-background:new 0 0 67.949 67.949;" xml:space="preserve"> <g> <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0 c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672 c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652 C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51 c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787 s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773 c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></a>
							</div>
						</div>
						<div class="product-description text-center">
							<div class="ratings flex-all">
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star"></div>
							</div>
							<a href="product-detail.html">Common Worship Lectionary</a>
							<div class="product-prices">
								<span class="price font-bold">$9.80</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="800" data-aos-duration="1300">
					<div class="product light-bg">
						<div class="thumbnail">
							<figure class="text-center">
								<img src="assets/images/p-3.webp" alt="Product Image">
							</figure>
							<div class="product-actions flex-all">
								<a href="JavaScript:void(0)" class="flex-all"><svg id="sShoping-hfghbag" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg></a>
								<a href="JavaScript:void(0)" class="flex-all"><svg version="1.1" id="hdedfsdfsdfsdfart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 67.949 67.949" style="enable-background:new 0 0 67.949 67.949;" xml:space="preserve"> <g> <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0 c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672 c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652 C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51 c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787 s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773 c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></a>
							</div>
						</div>
						<div class="product-description text-center">
							<div class="ratings flex-all">
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star colored"></div>
							</div>
							<a href="product-detail.html">Common Worship Lectionary</a>
							<div class="product-prices">
								<span class="price font-bold">$5.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="1500">
					<div class="product light-bg">
						<div class="thumbnail">
							<figure class="text-center">
								<img src="assets/images/p-4.webp" alt="Product Image">
							</figure>
							<div class="product-actions flex-all">
								<a href="JavaScript:void(0)" class="flex-all"><svg id="sShopifhfghng-bag" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg></a>
								<a href="JavaScript:void(0)" class="flex-all"><svg version="1.1" id="hdsdfsdfeart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 67.949 67.949" style="enable-background:new 0 0 67.949 67.949;" xml:space="preserve"> <g> <path d="M62.49,11.239c-7.39-7.388-19.412-7.388-26.8,0l-1.716,1.715l-1.715-1.715c-7.388-7.389-19.411-7.389-26.799,0 c-7.238,7.238-7.285,18.711-0.109,26.688c6.545,7.273,25.848,22.986,26.667,23.651c0.556,0.452,1.225,0.672,1.89,0.672 c0.022,0,0.044,0,0.065-0.001c0.688,0.032,1.381-0.204,1.955-0.671c0.819-0.665,20.124-16.378,26.671-23.652 C69.774,29.95,69.727,18.477,62.49,11.239z M58.139,33.913c-5.103,5.669-19.13,17.361-24.166,21.51 c-5.036-4.148-19.06-15.839-24.162-21.509C4.805,28.35,4.758,20.426,9.702,15.482c2.525-2.524,5.841-3.787,9.157-3.787 s6.632,1.262,9.157,3.787l3.772,3.772c0.449,0.449,1.015,0.717,1.609,0.811c0.964,0.207,2.01-0.062,2.76-0.81l3.774-3.773 c5.051-5.049,13.267-5.048,18.315,0C63.19,20.426,63.143,28.35,58.139,33.913z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></a>
							</div>
						</div>
						<div class="product-description text-center">
							<div class="ratings flex-all">
								<div class="star colored"></div>
								<div class="star colored"></div>
								<div class="star "></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
							<a href="product-detail.html">Common Worship Lectionary</a>
							<div class="product-prices">
								<span class="price font-bold">$2.50</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Church Products End -->

	<!-- Subscribe Two Start -->
	<section class="gap subscribe-two">
		<div class="container">
			<div class="row">
				<div class="data">
					<h2>Love to Pray For You!</h2>
					<p class="m-auto font-bold">Send us your prayer request or praise report below or email us at <span>blesso@domain.com</span></p>
					<form>
						<div class="shape">
							<input type="text" name="Text" placeholder="Please Enter Your Prayer...">
						</div>
						<button type="submit" class="theme-btn">Send Prayer</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Subscribe Two End -->

	<!-- Footer One Start -->
	<?php include("./includes/footer.php") ?>
	<!-- Footer One End -->

	<!-- Scroll to top -->
	<button id="scrollTop" class="scrollTopStick"><svg viewBox="0 0 490.523 490.523" fill="#fff" height="15">
			<path style="fill:#FFC107;" d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047 c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136 c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"></path>
			<path d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151 c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0 l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"></path>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
			<g> </g>
		</svg></button>

	<!-- Jquery -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Bootstrap Js -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>

	<!-- Counter -->
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- Slick Slider Js -->
	<script src="assets/js/slick.min.js"></script>

	<!-- Animate on scroll Js -->
	<script src="assets/js/aos.js"></script>

	<!-- Tilt on hover -->
	<script src="assets/js/tilt.jquery.js"></script>

	<!-- Fontawesome Js -->
	<script src="assets/js/fontawesome.js"></script>

	<!-- Fancybox Js -->
	<script src="assets/js/jquery.fancybox.min.js"></script>

	<!-- Custom Js -->
	<script src="assets/js/custom.js"></script>
</body>

</html>