<?php
include "Koneksi.php";
$kd_mapel = $_POST ['kd_mapel'];
$nama_mapel = $_POST ['nama_mapel'];
$query = mysqli_query ($koneksi,"insert into mapel (kd_mapel,nama_mapel) values ('$kd_mapel','$nama_mapel')");
header('location:Index.php');
?>