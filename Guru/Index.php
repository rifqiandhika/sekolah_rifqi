<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
?>

<h1 class="text-center">Data Guru</h1>
<a href = "?page=guru/Tambah"> <button type="button" class="btn btn-primary">Tambah Data</button></a>
<table class="table table-bordered" border = "1" cellpading="10" cellspacing="0">
    <tr align="center">
        <th>Nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>

<?php
$query = mysqli_query ($koneksi,"select * from guru");
while ($data = mysqli_fetch_array($query)){
?>

    <tr align="center">
        <td><?php echo $data['nip'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['alamat'] ?></td>
        <td><button type="button" class="btn btn-danger">
        <a style="color:aliceblue; text-decoration:none;" href="?page=guru/Hapus&nip=<?php echo $data['nip'] ?>">Hapus</button></a></td>
        <td> <button type="button" class="btn btn-warning">
        <a style="color:black; text-decoration:none;" href="?page=guru/Edit&nip=<?php echo $data['nip'] ?>">Edit</a></button></td>
    </tr>
    
<?php
}
?>
</table>