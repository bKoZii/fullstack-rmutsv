<?php
ob_start();
session_start();
include "../backend-master/includes/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
</body>

</html>
<?php
$update = $_POST['update'];
if ($update) {
	$title = $_POST['title'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pro_id = $_POST['pro_id'];
	$epassport = $_POST['username'];
	$email = $epassport . "@rmutsv.ac.th";
	$active = 'Y';

	$sql = "SELECT mem_code FROM member ORDER BY mem_id DESC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$code = $row['mem_code'];
		$tmp1 = substr($code, 1) + 1;
		$tmp2 = sprintf("%'.05d", $tmp1);
		$mem_code = "M" . $tmp2;
	} else {
		$mem_code = "M" . "00001";
	}

	$sql = "INSERT INTO member
        (mem_code,mem_title,mem_fname,mem_lname,pro_id,mem_email,mem_epassport,mem_active
        ) VALUES (
        '$mem_code','$title','$fname','$lname','$pro_id','$email','$epassport','$active')";
	$result = $conn->query($sql);

	$sql = "SELECT * FROM member WHERE mem_epassport='$epassport' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$mem_id = $row['mem_id'];
	$mem_name = $row['mem_fname'] . ' ' . $row['mem_lname'];
	$pro_id = $row['pro_id'];

	$_SESSION['sess_id'] = $mem_id;
	$_SESSION['sess_name'] = $mem_name;
	$_SESSION['sess_level'] = 2;
	$_SESSION['sess_program'] = $pro_id;

	header('location: ../backend/');
} else {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$member = $_POST['member'];

	if ($member == true) {
		$_SESSION['sess_id'] = 1;
		$_SESSION['sess_name'] = "กรกมล ศรีอ่อน";
		$_SESSION['sess_level'] = 2;
		$_SESSION['sess_program'] = 1;

		echo '<script type="text/javascript">
            Swal.fire({
               icon: "success",
               title: "กำลังเข้าสู่ระบบ",
               text: "กรุณารอสักครู่..",
               showConfirmButton: false,
               timer: 1500
            });
            </script>';
		echo '<meta http-equiv="refresh" content="2;url=../backend/" />';
	} else {
		$stu_id = 1;
		$stu_name = "นายสมชาย สบายดี";
		$pro_id = 1;
		$_SESSION['student_id'] = $stu_id;
		$_SESSION['student_name'] = $stu_name;
		$_SESSION['student_program'] = $pro_id;
		echo '<script type="text/javascript">
            Swal.fire({
               icon: "success",
               title: "กำลังเข้าสู่ระบบ",
               text: "กรุณารอสักครู่..",
               showConfirmButton: false,
               timer: 1500
            });
            </script>';
		echo '<meta http-equiv="refresh" content="2;url=../" />';
	}
}
?>