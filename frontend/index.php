<?php
$page = $_GET["page"];
$act = $_GET["act"];
?>
<!doctype html>
<html lang="en">
<?php
include("includes/conn.php");
include("includes/header.php")
?>

<body>
	<?php
	include("includes/navbar.php");
	if ($page == "" || $page == "home") {
		include("home.php");
	} else if ($page == "organization") {
		include("organization.php");
	
	} else if ($page == "lecturer") {
		include("lecturer.php");
	} else if ($page == "project") {
		include("project.php");
	}
	?>
	<?php
	include("includes/footer.php")
	?>
	<button onclick="topFunction()" id="movetop" title="Go to top">
		<span class="fas fa-level-up-alt" aria-hidden="true"></span>
	</button>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
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
		$(document).ready(function() {

			$('.client-single').on('click', function(event) {
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

	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',

				fixedContentPos: false,
				fixedBgPos: true,

				overflowY: 'auto',

				closeBtnInside: true,
				preloader: false,

				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

			$('.popup-with-move-anim').magnificPopup({
				type: 'inline',

				fixedContentPos: false,
				fixedBgPos: true,

				overflowY: 'auto',

				closeBtnInside: true,
				preloader: false,

				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-slide-bottom'
			});
		});
	</script>
	<!-- //magnific popup -->

	<!-- theme switch js (light and dark)-->
	<script src="assets/js/theme-change.js"></script>
	<!-- //theme switch js (light and dark)-->

	<!-- MENU-JS -->
	<script>
		$(window).on("scroll", function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$("#site-header").addClass("nav-fixed");
			} else {
				$("#site-header").removeClass("nav-fixed");
			}
		});

		//Main navigation Active Class Add Remove
		$(".navbar-toggler").on("click", function() {
			$("header").toggleClass("active");
		});
		$(document).on("ready", function() {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
			$(window).on("resize", function() {
				if ($(window).width() > 991) {
					$("header").removeClass("active");
				}
			});
		});
	</script>
	<!-- //MENU-JS -->

	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function() {
			$('.navbar-toggler').click(function() {
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