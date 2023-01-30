<?php
include "Koneksi.php";
$nisn  = $_GET['nisn'];
$query = mysqli_query ($koneksi,"delete from siswa where nisn = '$nisn'");
header ('location:?page=siswa/index');
?>