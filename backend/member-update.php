<?php
require_once('includes/conn.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$id = $_POST['id'];
$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pro_id = $_POST['pro_id'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE member SET mem_title = '$title', mem_fname = '$fname', mem_lname = '$lname', pro_id = '$pro_id', mem_email = '$email', mem_password = '$password' WHERE member.mem_id = '$id'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "record updated successfully";
} else {
  echo "Error: ";
}


// $stmt = $conn->prepare("UPDATE member SET mem_title = ?, mem_fname = ?, mem_lname = ?, pro_id = ?, mem_email = ?, mem_password = ? WHERE member.mem_id = ?");
// $stmt->bind_param("sssssss", $title, $fname, $lname, $pro_id, $email, $password, $id);
// $stmt->close();
$conn->close();
