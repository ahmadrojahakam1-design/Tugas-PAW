<?php
$host = "localhost";
$user = "root";
$pass = "RojaSuper001!";
$db   = "db_game";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
