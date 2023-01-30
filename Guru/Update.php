<?php
include "Koneksi.php";
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$query=mysqli_query($koneksi,"update guru set nama='$nama',alamat='$alamat' where nip='$nip'");
header ('location:?page=Guru/index');
?>