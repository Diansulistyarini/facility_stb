<?php
require 'connection.php';
$id = $_GET['id'];

$q = mysqli_query($konek, "SELECT * FROM `plant` WHERE `id`=$id");

while($data_plant = mysqli_fetch_array($q)){
        $id = $data_plant['id'];
        $namatanaman = $data_plant['nama_tanaman'];
        $namalatin = $data_plant['nama_latin'];
        $tahuntanam = $data_plant['date'];
        $lokasi = $data_plant['lokasi'];
        $jumlah = $data_plant['jumlah'];
        $kondisi = $data_plant['kondisi'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class='text-center'>Input Data Tanaman</h1>
        <form action="editt.php" method ='POST'>
            <div class="form-grup">
                <label for="namatanaman" class='font-weight-bold'>ID Tanaman</label>
                <input type="text" class='form-control disable' name='id' value = <?php echo $id?>>
                <label for="namatanaman" class='font-weight-bold'>Nama Tanaman</label>
                <input type="text" class='form-control' name='nama_tanaman' value = <?php echo $namatanaman?>>
                <label for="namatanaman" class='font-weight-bold'>Nama Latin</label>
                <input type="text" class='form-control' name='nama_latin' value = <?php echo $namalatin?>>
                <label for="namatanaman" class='font-weight-bold'>Tahun Tanam</label>
                <input type="text" class='form-control' name='date' value = <?php echo $tahuntanam?>>
                <label for="namatanaman" class='font-weight-bold'>Lokasi</label>
                <input type="text" class='form-control' name='lokasi' value = <?php echo $lokasi?>>
                <label for="namatanaman" class='font-weight-bold'>Jumlah</label>
                <input type="text" class='form-control' name='jumlah' value = <?php echo $jumlah?>>
                <label for="namatanaman" class='font-weight-bold'>Kondisi</label>
                <input type="text" class='form-control' name='kondisi' value = <?php echo $kondisi?>>
            </div>
            <input type='submit' class='btn btn-primary mt-4' name='submit' value = "Update">
        </form>
    </div>





</body>
</html>