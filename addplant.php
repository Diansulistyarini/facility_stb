<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Insert</title>
</head>

<?php 
    require 'connection.php';

?>
<body>
    <div class="container">
        <h1 class='text-center'>Input Data Tanaman</h1>
        <form action="addplant.php" method ='POST'>
            <div class="form-grup">
                <label for="namabarang" class='font-weight-bold'>ID</label>
                <input type="text" class='form-control' name='id' >
                <label for="namabarang" class='font-weight-bold'>Nama Tanaman</label>
                <input type="text" class='form-control' name='nama_tanaman'>
                <label for="namabarang" class='font-weight-bold'>Nama Latin</label>
                <input type="text" class='form-control' name='nama_latin'>
                <label for="namabarang" class='font-weight-bold'>Tahun Tanem</label>
                <input type="text" class='form-control' name='date'>
                <label for="namabarang" class='font-weight-bold'>Lokasi</label>
                <input type="text" class='form-control' name='lokasi'>
                <label for="namabarang" class='font-weight-bold'>Jumlah</label>
                <input type="text" class='form-control' name='jumlah'>
                <label for="namabarang" class='font-weight-bold'>Kondisi</label>
                <input type="text" class='form-control' name='kondisi'>
            </div>
            <input type='submit' class='btn btn-primary mt-4' name='submit' value = "Simpan">
        </form>
    </div>
<!-- Simpan Data  -->

<?php
    if (isset($_POST['submit'])) {
        require 'connection.php';

        $id = $_POST['id'];
        $namatanaman = $_POST['nama_tanaman'];
        $namalatin = $_POST['nama_latin'];
        $tahuntanam = $_POST['date'];
        $lokasi = $_POST['lokasi'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];

        $query = mysqli_query($konek, "INSERT INTO plant VALUES ('$id','$namatanaman','$namalatin','$tahuntanam','$lokasi','$jumlah','$kondisi')");
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