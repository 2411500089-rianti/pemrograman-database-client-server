<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM client");
$data = array();

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode($data);
?>
