<?php
require_once('includes/conn.php');

$name = $_POST['name'];
$type = $_POST['type'];
$phone = $_POST['phone'];
$coordinator = $_POST['coordinator'];
$position = $_POST['position'];
$email = $_POST['email'];
$address = $_POST['address'];
$map = $_POST['map'];
$detail = $_POST['detail'];
$id = $_POST['id'];

$sql = "UPDATE organization SET org_name = '$name', org_type = '$type', org_phone = '$phone', org_coordinator = '$coordinator', org_position = '$position', org_email = '$email', org_address = '$address', org_map = '$map', org_detail = '$detail' WHERE organization.org_id = '$id'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "record updated successfully";
} else {
  echo "Error: ";
}
$conn->close();
