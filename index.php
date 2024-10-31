<?php
include "backend/includes/conn.php";
$page = $_GET['page'];
$act = $_GET['act'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "includes/header.php"; ?>
</head>

<body class="index-page">

	<?php include "includes/navbar.php"; ?>

	<main class="main">

		<?php
		if ($page == "" || $page == "home") {
			include "home.php";
		} else if ($page == "project") {
			if ($act == "") {
				include "project.php";
			} else if ($act == "register") {
				include "project-register.php";
			}
		}
		?>

	</main>

	<?php include "includes/footer.php"; ?>
	<?php include "includes/script.php"; ?>

</body>

</html>