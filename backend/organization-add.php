<?php
include('includes/conn.php');

$name = $_POST['name'];
$type = $_POST['type'];
$phone = $_POST['phone'];
$coordinator = $_POST['coordinator'];
$position = $_POST['position'];
$email = $_POST['email'];
$address = $_POST['address'];
$map = $_POST['map'];
$detail = $_POST['detail'];

$sql = "INSERT INTO organization (org_code,org_name,org_type,org_phone, org_coordinator, org_position, org_email, org_address, org_map, org_detail) VALUES ('T', '$name', '$type', $phone, '$coordinator', '$position', '$email', '$address', '$map', '$detail')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ";
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

$stmt = $conn->prepare("INSERT INTO member (org_code,org_title, org_fname, org_lname, pro_id, org_email, org_password, org_active) VALUES ('', ?, ?, ?, ?, ?, ?, 'Y')");
$stmt->bind_param("ssssss", $title, $fname, $lname, $pro_id, $email, $password);

if ($stmt->execute()) {
  $last_id = $conn->insert_id;

  $custom_id = 'M0000' . $last_id;

  $update_stmt = $conn->prepare("UPDATE member SET org_code = ? WHERE org_id = ?");
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