<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sekolah";
$port = 8111;
// koneksi ke database

$conn = mysqli_connect ($servername , $username, $password, $database, $port);

// periksa koneksi

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

?>
