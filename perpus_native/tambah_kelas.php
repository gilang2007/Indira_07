<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        nama kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok : 
        <input type="text" name="kelompok" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

•	Membuat file proses_tambah_kelas.php
7.	Buatlah file proses_tambah_kelas.php di xampp/htdocs/perpus_native
8.	Ketikkan sintak berikut:
<?php
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";

    } elseif(empty($kelompok)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, kelompok) value ('".$nama_kelas."','".$kelompok."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tambah_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
        }
    }
}
?>
