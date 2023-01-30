<?php
include "Koneksi.php";
$nisn = $_POST ['nisn'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$query = mysqli_query ($koneksi,"insert into siswa (nisn,nama,alamat) values ('$nisn','$nama','$alamat')");
header('location:?page=Siswa/index');
?>