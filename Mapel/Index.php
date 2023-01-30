<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
?>

<h1 class="text-center">Data Mapel</h1>
<a href = "?page=mapel/Tambah"> <button type="button" class="btn btn-primary">Tambah Data</button></a>
<table class="table table-bordered" border = "1" cellpading="10" cellspacing="0">
    <tr align="center">
        <th>Kd Mapel</th>
        <th>Nama Mapel</th>
        <th colspan="2">Aksi</th>
    </tr>

<?php
$query = mysqli_query ($koneksi,"select * from mapel");
while ($data = mysqli_fetch_array($query)){
?>

    <tr align="center">
        <td><?php echo $data['kd_mapel'] ?></td>
        <td><?php echo $data['nama_mapel'] ?></td>
        <td><button type="button" class="btn btn-danger">
        <a style="color:aliceblue; text-decoration:none;" href="?page=mapel/Hapus&kd_mapel=<?php echo $data['kd_mapel'] ?>">Hapus</button></a></td>
        <td> <button type="button" class="btn btn-warning">
        <a style="color:black; text-decoration:none;" href="?page=mapel/Edit&kd_mapel=<?php echo $data['kd_mapel'] ?>">Edit</a></button></td>
    </tr>
    
<?php
}
?>
</table> 