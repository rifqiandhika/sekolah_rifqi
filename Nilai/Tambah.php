<?php
include "Koneksi.php";
?>

<h1>Tambah Data Nilai</h1>
<form action="Simpan.php" method = "POST">
    Nama Siswa :
    <select name="nisn" id="">
        <?php
        $query = mysqli_query($koneksi,"select * from siswa");
        while ($data=mysqli_fetch_array($query)){
        ?>
            <option value="<?php echo $data['nisn'] ?>"><?php echo $data['nama'] ?></option>
        <?php
        }
        ?>
    </select>
<br>
    Nama Guru :
    <select name="nip" id="">
        <?php
        $query = mysqli_query($koneksi,"select * from guru");
        while ($data=mysqli_fetch_array($query)){
        ?>
            <option value="<?php echo $data['nip'] ?>"><?php echo $data['nama'] ?></option>
        <?php
        }
        ?>
    </select>
<br>
    Mapel :
    <select name="kd_mapel" id="">
        <?php
        $query = mysqli_query($koneksi,"select * from mapel");
        while ($data=mysqli_fetch_array($query)){
        ?>
            <option value="<?php echo $data['kd_mapel'] ?>"><?php echo $data['nama_mapel'] ?></option>
        <?php
        }
        ?>
    </select>
<br>
    Nilai : <input type="text" name="nilai">
<br>
<button>Simpan</button>
</form>