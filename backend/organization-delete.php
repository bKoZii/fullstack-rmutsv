<?php
require_once('includes/conn.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


$org_id = $_POST['id'];
$sql = "DELETE FROM organization WHERE org_id= $org_id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
