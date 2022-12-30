<?php
$_SERVER = "localhost";
$user = "root";
$password = "";
$database = "db_cigarettes";

$koneksi = mysqli_connect($_SERVER, $user, $password, $database) or die(mysqli_error($koneksi));
?>