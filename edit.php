<?php
require 'koneksi.php';
$id = $_GET['id'];

$q = mysqli_query($konek, "SELECT * FROM `tb_sarana` WHERE `id`=$id");

while($data_siswa = mysqli_fetch_array($q)){
        $id = $data_siswa['id'];
        $namabarang = $data_siswa['namabarang'];
        $spesifikasi = $data_siswa['spesifikasi'];
        $jenis = $data_siswa['jenis'];
        $jumlah = $data_siswa['jumlah'];
        $lokasi = $data_siswa['lokasi'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class='text-center'>Input Data Barang</h1>
        <form action="proses_edit.php" method ='POST'>
            <div class="form-grup">
                <label for="namabarang" class='font-weight-bold'>ID Barang</label>
                <input type="text" class='form-control disable' name='id' value = <?php echo $id?>>
                <label for="namabarang" class='font-weight-bold'>Nama Barang</label>
                <input type="text" class='form-control' name='namabarang' value = <?php echo $namabarang?>>
                <label for="namabarang" class='font-weight-bold'>spesifikasi</label>
                <input type="text" class='form-control' name='spesifikasi' value = <?php echo $spesifikasi?>>
                <label for="namabarang" class='font-weight-bold'>Jenis</label>
                <input type="text" class='form-control' name='jenis' value = <?php echo $jenis?>>
                <label for="namabarang" class='font-weight-bold'>Jumlah</label>
                <input type="text" class='form-control' name='jumlah' value = <?php echo $jumlah?>>
                <label for="namabarang" class='font-weight-bold'>Lokasi</label>
                <input type="text" class='form-control' name='lokasi' value = <?php echo $lokasi?>>
            </div>
            <input type='submit' class='btn btn-primary mt-4' name='submit' value = "Update">
        </form>
    </div>





</body>
</html>