<?php
ob_start();
include("../backend/includes/conn.php");
include("../backend/includes/secret-key.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
	try {
		$title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
		$fname = htmlspecialchars($_POST['fname'], ENT_QUOTES, 'UTF-8');
		$lname = htmlspecialchars($_POST['lname'], ENT_QUOTES, 'UTF-8');
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
		$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
		$pro_id = htmlspecialchars($_POST['pro_id'], ENT_QUOTES, 'UTF-8');
		$pwd = encryptIt($password);

		$sql = "SELECT stu_code FROM project_student ORDER BY stu_id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$code = $row['stu_code'];
			$tmp1 = substr($code, 1) + 1;
			$tmp2 = sprintf("%'.05d", $tmp1);
			$stu_code = "S" . $tmp2;
		} else {
			$stu_code = "S" . "00001";
		}

		$sql = "INSERT INTO project_student (stu_code, stu_title, stu_fname, stu_lname, stu_email, stu_password, pro_id) VALUES ('$stu_code','$title', '$fname', '$lname', '$email', '$pwd', '$pro_id')";
		$result = $conn->query($sql);
	} finally {
		header('location: index.php');
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

		* {
			font-family: Krub;
			font-size: 13pt;
		}
	</style>
</head>

<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<!-- <img src="img/avatar.svg"> -->
				<h3 class="title" style="font-size:18pt;">Student Register</h3>
				<br>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-neuter"></i>
					</div>
					<div class="div">
						<select id="title" name="title" class="form-control" onchange="checkForm()" required
							style="padding-top:10px;padding-left:10px;border:0px;border-radius:0px;font-size:13pt;">
							<option value="">คำนำหน้า</option>
							<option value="นาย">นาย</option>
							<option value="นาง">นาง</option>
							<option value="นางสาว">นางสาว</option>
						</select>
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5 style="font-size:13pt;font-weight:nor	mal;">ชื่อจริง</h5>
						<input id="fname" name="fname" type="text" onkeyup="checkForm()" class="input" required
							style="font-size:13pt;font-family: Krub">
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user-tie"></i>
					</div>
					<div class="div">
						<h5 style="font-size:13pt;font-weight:normal;">นามสกุล</h5>
						<input id="lname" name="lname" type="text" onkeyup="checkForm()" class="input" required
							style="font-size:13pt;font-family: Krub">
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="div">
						<h5 style="font-size:13pt;font-weight:normal;">E-Mail</h5>
						<input id="email" name="email" type="text" onkeyup="checkForm()" class="input" required
							style="font-size:13pt;font-family: Krub">
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-key"></i>
					</div>
					<div class="div">
						<h5 style="font-size:13pt;font-weight:normal;">รหัสผ่าน</h5>
						<input id="password" name="password" type="password" onkeyup="checkForm()" class="input" required
							style="font-size:13pt;font-family: Krub">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-house-user"></i>
					</div>
					<div class="div">
						<select id="pro_id" name="pro_id" class="form-control" onchange="checkForm()" required
							style="padding-top:10px;padding-left:10px;border:0px;border-radius:0px;font-size:13pt;">
							<option value="">หลักสูตร / สาขาวิชา</option>
							<?php

							$sql = "SELECT * FROM program ORDER BY pro_name ASC";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									$pro_id = $row['pro_id'];
									$pro_name = $row['pro_name'];
							?>
									<option value="<?php echo $pro_id ?>"><?php echo $pro_name ?></option>
							<?php }
							} ?>
						</select>
					</div>
				</div>
				<button id="submit" name="submit" class="btn" disabled style="color:#fff;font-weight:bold;">บันทึกข้อมูล</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<script>
	function checkForm() {
		var title = document.getElementById("title").value;
		var fname = document.getElementById("fname").value;
		var lname = document.getElementById("lname").value;
		var pro_id = document.getElementById("pro_id").value;
		var password = document.getElementById("password").value;
		var email = document.getElementById("email").value;
		var submit = document.getElementById("submit")

		if (title && fname && lname && pro_id && password && email) {
			submit.disabled = false;
		} else {
			submit.disabled = true;
		}
	}
</script>