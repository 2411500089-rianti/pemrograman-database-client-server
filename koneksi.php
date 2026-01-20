<?php
$koneksi = mysqli_connect("localhost", "root", "", "pemrograman_database_client_server");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
