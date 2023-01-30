<?php
include "Koneksi.php";
$id = $_POST ['id'];
$nisn = $_POST ['nisn'];
$nip = $_POST ['nip'];
$kd_mapel = $_POST ['kd_mapel'];
$nilai = $_POST ['nilai'];
$query = mysqli_query ($koneksi,"insert into nilai (id,nisn,nip,kd_mapel,nilai) 
values ('$id','$nisn','$nip','$kd_mapel','$nilai')");
header('location:Index.php');
?>