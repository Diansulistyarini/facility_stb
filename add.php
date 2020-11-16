<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php 
    require 'koneksi.php';

?>
<body>
    <div class="container">
        <h1 class='text-center'>Input Data Barang</h1>
        <form action="add.php" method ='POST'>
            <div class="form-grup">
                <label for="namabarang" class='font-weight-bold'>Id</label>
                <input type="text" class='form-control' name='id' >
                <label for="namabarang" class='font-weight-bold'>Nama Barang</label>
                <input type="text" class='form-control' name='namabarang' >
                <label for="namabarang" class='font-weight-bold'>Spesifikasi</label>
                <input type="text" class='form-control' name='spesifikasi'>
                <label for="namabarang" class='font-weight-bold'>Jenis</label>
                <input type="text" class='form-control' name='jenis'>
                <label for="namabarang" class='font-weight-bold'>Jumlah</label>
                <input type="text" class='form-control' name='jumlah'>
                <label for="namabarang" class='font-weight-bold'>Lokasi</label>
                <input type="text" class='form-control' name='lokasi'>
            </div>
            <input type='submit' class='btn btn-primary mt-4' name='submit' value = "Simpan">
        </form>
    </div>
<!-- Simpan Data  -->

<?php
    if (isset($_POST['submit'])) {
        require 'koneksi.php';

        $id = $_POST['id'];
        $namabarang = $_POST['namabarang'];
        $spesifikasi = $_POST['spesifikasi'];
        $jenis = $_POST['jenis'];
        $jumlah = $_POST['jumlah'];
        $lokasi = $_POST['lokasi'];

        $query = mysqli_query($konek, "INSERT INTO tb_sarana VALUES ('$id','$namabarang','$spesifikasi','$jenis','$jumlah','$lokasi')");
        if (isset($query)){
            echo '<script> alert("Data Tersimpan") </script>';
            header("Location:index.php");
            
        }else{
            echo '<script> alert("Gagal Menyimpan") </script>';
        }
    }
?>


</body>
</html>