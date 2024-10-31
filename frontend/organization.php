<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include('includes/conn.php');
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work Field - Corporate Category Bootstrap Responsive Web Template - About Us : W3Layouts</title>
	<!-- Template CSS Style link -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
	<!-- header -->

	<section class="inner-banner py-5">
		<div class="w3l-breadcrumb py-lg-5">
			<div class="container pt-4 pb-sm-4">
				<!-- <h1 class="banner-info text-white font-weight-bolder pt-sm-5 pt-4">สถานประกอบการ</h1> -->
				<h1 class="display-1 text-white">สถานประกอบการ</h1>
				<!-- <ul class="breadcrumbs-custom-path">
										<li><a href="index.html">Home</a></li>
										<li class="active"><i class="fas fa-angle-right mx-2"></i>About</li>
								</ul> -->
			</div>
		</div>
		<!-- <div class="shape">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
				<path fill-opacity="1">
					<animate attributeName="d" dur="20000ms" repeatCount="indefinite"
						values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
																								 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

				</path>
			</svg>
		</div> -->
	</section>
	<!-- //inner banner -->

	<!-- about block -->

	<section class="w3l-homeblock1 py-5">
		<div class="container py-md-5 py-4 text-center">
			<h1>รายชื่อสถานประกอบการ</h1>
			<!-- test -->
			<div class="row g-1 justify-content-center my-3">
				<?php
				$sql = "SELECT * FROM organization";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$no = 1;
					while ($row = $result->fetch_assoc()) {
						?>
						<div class="col-12 col-lg-3 col-sm-6 col-md-4">
							<div class="card shadow">
								<img src="assets/organization/<?php echo $row['org_cover']; ?>" class="card-img-top"
									style="height:180px;	object-fit: cover;" alt="...">
								<div class="card-body">
									<h5 class="card-title text-center" style="	overflow: hidden;
display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 1;">
										<?php echo substr($row['org_name'], 0, 200) ?>
									</h5>
									<p class="card-text">
										<span class="badge bg-secondary text-wrap"><?php echo $row['org_type'] ?></span>
									</p>
								</div>
							</div>
						</div>
						<?php
						$no++;
					}
				}
				?>
			</div>
<!-- 			<div class="row align-items-center">
				<div class="col-lg-6 homeaboutimages">
					<div class="row position-relative">
						<div class="col-6">
							<img src="assets/images/about1.jpg" alt="" class="img-fluid radius-image">
						</div>
						<div class="col-6 mt-4 ps-sm-3 ps-1">
							<img src="assets/images/about2.jpg" alt="" class="img-fluid radius-image mb-sm-4 mb-3">
							<img src="assets/images/about3.jpg" alt="" class="img-fluid radius-image">
						</div>
					</div>
				</div>
				<div class="col-lg-6 ps-xl-5 mt-lg-0 mt-5">
					<h3 class="title-style mb-lg-4 mb-3">World's Best Business Agency Company Since 2006.</h3>
					<p class="text-para">Aurabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed,
						lacinia est. Quisque ut lectus consequat.
					</p>
					<a href="about.html" class="btn btn-style mt-4">Learn More</a>
				</div>
			</div> -->
		</div>
	</section>
	<!-- //about block -->

	<!-- team block -->
	<!-- //team block -->

	<!-- progress block -->
	<!-- //progress block -->

	<!-- features block -->
	<!-- //features block -->

	<!-- stats -->
	<!-- //stats -->

	<!-- testimonial section -->
	<!-- //testimonial section -->

	<!-- //footer -->

	<!-- Js scripts -->
	<!-- move top -->
	<button onclick="topFunction()" id="movetop" title="Go to top">
		<span class="fas fa-level-up-alt" aria-hidden="true"></span>
	</button>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<!-- //move top -->

	<!-- common jquery plugin -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<!-- //common jquery plugin -->

	<!-- /counter-->
	<script src="assets/js/counter.js"></script>
	<!-- //counter-->

	<!-- testimonial script -->
	<script>
		$(document).ready(function () {

			$('.client-single').on('click', function (event) {
				event.preventDefault();

				var active = $(this).hasClass('active');

				var parent = $(this).parents('.testi-wrap');

				if (!active) {
					var activeBlock = parent.find('.client-single.active');

					var currentPos = $(this).attr('data-position');

					var newPos = activeBlock.attr('data-position');

					activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
						currentPos);
					activeBlock.attr('data-position', currentPos);

					$(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
						newPos);
					$(this).attr('data-position', newPos);

				}
			});

		}(jQuery));
	</script>
	<!-- //testimonial script -->

	<!-- theme switch js (light and dark)-->
	<script src="assets/js/theme-change.js"></script>
	<!-- //theme switch js (light and dark)-->

	<!-- MENU-JS -->
	<script>
		$(window).on("scroll", function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$("#site-header").addClass("nav-fixed");
			} else {
				$("#site-header").removeClass("nav-fixed");
			}
		});

		//Main navigation Active Class Add Remove
		$(".navbar-toggler").on("click", function () {
			$("header").toggleClass("active");
		});
		$(document).on("ready", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
			$(window).on("resize", function () {
				if ($(window).width() > 991) {
					$("header").removeClass("active");
				}
			});
		});
	</script>
	<!-- //MENU-JS -->

	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- //disable body scroll which navbar is in active -->

	<!-- bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- //bootstrap -->
	<!-- //Js scripts -->
</body>

</html>