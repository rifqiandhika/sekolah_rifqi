<?php
include "Koneksi.php";
$nip  = $_GET['nip'];
$query = mysqli_query ($koneksi,"delete from guru where nip = '$nip'");
header ('location:page=Guru/index');
?>