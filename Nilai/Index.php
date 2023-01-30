<?php
include "Koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
?>

<h1>Data Nilai</h1>
<a href = "Tambah.php"> Tambah Data </a>
<table border = "1" cellpading="10" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Nama Siswa</th>
        <th>Nama Guru</td>
        <th>Mapel</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>

<?php
$query = mysqli_query ($koneksi,"SELECT nilai.id,siswa.nama as nama_siswa,guru.nama as nama_guru,mapel.nama_mapel,
nilai.nilai from nilai,guru,siswa,mapel where nilai.nisn=siswa.nisn and nilai.nip=guru.nip and
nilai.kd_mapel=mapel.kd_mapel");
while ($data = mysqli_fetch_array($query)){
?>

    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['nama_siswa'] ?></td>
        <td><?php echo $data['nama_guru'] ?></td>
        <td><?php echo $data['nama_mapel'] ?></td>
        <td><?php echo $data['nilai'] ?></td>
        <td><a href="Hapus.php?id=<?php echo $data['id'] ?>">Hapus</a></td>
    </tr>
    
<?php
}
?>
</table>