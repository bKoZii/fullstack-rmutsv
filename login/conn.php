<?php
$hostName = "localhost";
$userName = "root";
$passWord = "bruh1234";
$dbName = "fullstack_konkamon";

$conn = new mysqli($hostName, $userName, $passWord, $dbName);
date_default_timezone_set("Asia/Bangkok");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
