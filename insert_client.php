<?php
include "koneksi.php";

$nama  = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';

if ($nama == '' || $email == '') {
    echo "Data tidak lengkap";
    exit;
}

$query = mysqli_query(
    $koneksi,
    "INSERT INTO client (nama, email) VALUES ('$nama', '$email')"
);

if ($query) {
    echo "Berhasil disimpan";
} else {
    echo "Gagal menyimpan";
}
