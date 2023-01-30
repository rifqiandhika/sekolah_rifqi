<?php
include "Koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
?>

<h1 class="text-center">Data Siswa</h1>
<a href = "?page=siswa/Tambah"> <button type="button" class="btn btn-primary">Tambah Data</button></a>
<table class="table table-bordered" border = "1" cellpading="10" cellspacing="0">
    <tr align="center">
        <th>Nisn</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>

<?php
$query = mysqli_query ($koneksi,"select * from siswa");
while ($data = mysqli_fetch_array($query)){
?>

    <tr align="center">
        <td><?php echo $data['nisn'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['alamat'] ?></td>
        <td><button type="button" class="btn btn-danger">
        <a style="color:aliceblue; text-decoration:none;" href="?page=siswa/Hapus&nisn=<?php echo $data['nisn'] ?>">Hapus</button></a></td>
        <td> <button type="button" class="btn btn-warning">
        <a style="color:black; text-decoration:none;" href="?page=siswa/Edit&nisn=<?php echo $data['nisn'] ?>">Edit</a></button></td>
    </tr>
    
<?php
}
?>
</table>