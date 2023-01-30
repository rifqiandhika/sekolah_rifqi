<?php
include "Koneksi.php";
$nisn=$_GET ['nisn'];
$query=mysqli_query($koneksi,"select * from siswa where nisn='$nisn'");
$data=mysqli_fetch_array($query);
?>
<h1>Edit Data</h1>
<form action="?page=Siswa/Update" method="POST">
    Nisn : <input type="text" name="nisn" value="<?php echo $data['nisn']?>">
    <br>
    Nama : <input type="text" name="nama" value="<?php echo $data['nama']?>">
    <br>
    Alamat : <input type="text" name="alamat" value="<?php echo $data['alamat']?>">
    <br>
    <button>Simpan</button>
</form>