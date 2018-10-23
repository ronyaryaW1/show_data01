<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "php-api";
// perintah php untuk akses ke database
$link = mysqli_connect($host, $user, $password, $database) or die ("Koneksi Gagal");

?>