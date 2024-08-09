<?php
$servername = "localhost";
$database = "tsa_web";
$username = "root";
$password = "";

$connect = new mysqli($servername, $username, $password, $database);

//cek koneksi
// if ($connect->connect_error){
// die("Connection failed: " . $connect->connect_error);
// }
// echo "connected success";
?>
