<div class="container mx-auto my-3 w-50">
	<?php
	include('backend/includes/conn.php');
	include('includes/header.php');

	$email = $_POST["email"];
	$password = $_POST["password"];

	$password = 1234;
	$hashed = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));


	if (password_verify($password, $hashed)) {
		echo "Correct Password: " . $hashed . ".";
	} else {
		echo "Incorrect Password";
	}

	if ($email && $password) {
		$stmt = $conn->prepare("SELECT stu_id FROM project_student WHERE stu_email = ? AND stu_password = ?");
		$stmt->bind_param("ss", $email, $password);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows == 1) {
			echo "<div class='alert alert-success'>Login Success</div>";
		} else {
			echo "<div class='alert alert-danger'>Login Failed</div>";
		}
	}
	?>
	<form action="" method="post">
		<div class="form-group">
			<label for=email">Email address</label>
			<input type="email" class="form-control" name="email" id="email" value="nuxt.lover@gmail.com" required>
		</div>
		<div class="form-group">
			<label for=password">Password</label>
			<input type="text" class="form-control" name="password" id=password" required>
		</div>
		<button type="submit" class="btn btn-primary mt-1 w-100">เข้าสู่ระบบ</button>
	</form>
</div>