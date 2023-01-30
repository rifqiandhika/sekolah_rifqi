<?php
include "Koneksi.php";
$kd_mapel=$_GET ['kd_mapel'];
$query=mysqli_query($koneksi, "select * from mapel where kd_mapel='$kd_mapel'");
$data=mysqli_fetch_array($query);
?>
<h1>Edit Mapel</h1>
<form action="?page=Mapel/Update" method="POST">
    Kd Mapel : <input type="text" name="kd_mapel" value="<?php echo $data['kd_mapel']?>">
    <br>
    Nama Mapel : <input type="text" name="nama_mapel" value="<?php echo $data['nama_mapel']?>">
    <br>
    <button>Simpan</button>
</form>