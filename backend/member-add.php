<?php
include('includes/conn.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pro_id = $_POST['pro_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO member (mem_code, mem_title,mem_fname,mem_lname,pro_id,mem_email,mem_password,mem_active)
VALUES ('T','$title', '$fname', '$lname', $pro_id, '$email', '$password','Y')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: ";
  }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  echo "ERROR: POST Method Only";
}
$conn->close();

/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('includes/conn.php');

$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pro_id = $_POST['pro_id'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("INSERT INTO member (mem_code,mem_title, mem_fname, mem_lname, pro_id, mem_email, mem_password, mem_active) VALUES ('', ?, ?, ?, ?, ?, ?, 'Y')");
$stmt->bind_param("ssssss", $title, $fname, $lname, $pro_id, $email, $password);

if ($stmt->execute()) {
  $last_id = $conn->insert_id;

  $custom_id = 'M0000' . $last_id;

  $update_stmt = $conn->prepare("UPDATE member SET mem_code = ? WHERE mem_id = ?");
  $update_stmt->bind_param("si", $custom_id, $last_id);

  if ($update_stmt->execute()) {
    echo "New record created successfully with custom ID: " . $custom_id;
  } else {
    echo "Error updating record: " . $update_stmt->error;
  }

  $update_stmt->close();
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
 */