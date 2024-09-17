<?php
require_once('includes/conn.php');
$mem_id = $_POST['id'];
$stmt = $conn->prepare("DELETE FROM member WHERE member.mem_id= ?");
$stmt->bind_param('i', $mem_id);
$stmt->execute();

$stmt->close();
$conn->close();

// $sql = "DELETE FROM member WHERE id= $mem_id";
// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }
