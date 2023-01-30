<?php
include "Koneksi.php";
$id  = $_GET['id'];
$query = mysqli_query ($koneksi,"delete from nilai where id = '$id'");
header ('location:Index.php');
?>