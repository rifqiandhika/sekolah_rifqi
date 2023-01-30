<?php
include "Koneksi.php";
$kd_mapel  = $_GET['kd_mapel'];
$query = mysqli_query ($koneksi,"delete from mapel where kd_mapel = '$kd_mapel'");
header ('location:Index.php');
?>