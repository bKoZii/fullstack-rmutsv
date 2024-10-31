<?php
$servername = "localhost";
$user_name = "bkozii";
$pass_word = "bruh1234";
$data_name = "fullstack_konkamon";

$conn = new mysqli($servername, $user_name, $pass_word, $data_name);
mysqli_set_charset($conn, "utf8");
date_default_timezone_set("Asia/Bangkok");

if ($conn->connect_error) {	
	die("Connection failed: " . $conn->connect_error);
}
