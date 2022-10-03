<?php
include_once("koneksi.php");
$treatment = $_POST['treatment'];
$type = $_POST['type'];
$merk = $_POST['merk'];
$harga = $_POST['harga'];
$query = "INSERT INTO tb_eyelashtreatment
(treatment,type,merk,harga) VALUE
('$treatment','$type','$merk','$harga')";

$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo "input data gagal";
}