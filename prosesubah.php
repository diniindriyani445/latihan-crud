<?php
include_once("koneksi.php");
$id = $_POST['id'];
$merk = $_POST['merk'];
$type = $_POST['type'];
$harga = $_POST['harga'];
$query = "UPDATE tb_eyelashtreatment SET
merk='$merk',type='$type',harga='$harga' WHERE id=$id";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo "Update data gagal";
}