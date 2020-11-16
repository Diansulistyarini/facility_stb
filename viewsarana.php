<?php
require 'koneksi.php';
include('phpqrcode/qrlib.php');

$query = mysqli_query($konek,'SELECT * FROM `tb_sarana`');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1 class='text-center mt-4'>Data Barang SMK TARUNA BHAKTI</h1>
    <div class="container">
      <div class="row">

        <div class="bek" style="margin-left:1%; margin-top:-5px;"><a href="sarana.php"><img src="bk.png" alt=""></a></div>

        <!-- <form class="fron-inline md-form form-sm active-pink active-pink-2 search" action="cari.php" methode="get">
          <i class="fas fa-search" aria-hidden="true"></i>
          <input class="form-control form-control-sm ml-3 w-30" type="text" placeholder="Search..." aria-label="search" type="text" name="namabarang" id="namabarang">
        </form> -->

      </div>
      
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Jenis</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Lokasi</th>
    </tr>
  </thead>
  <tbody>

  <!-- // tampil data  -->
  
  <?php
  
    while($data_siswa=mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo $data_siswa['id'];?></td>
            <td><?php echo $data_siswa['namabarang'];?></td>
            <td><?php echo $data_siswa['spesifikasi'];?></td>
            <td><?php echo $data_siswa['jenis'];?></td>
            <td><?php echo $data_siswa['jumlah'];?></td>
            <td><?php echo $data_siswa['lokasi'];?></td>
        </tr>
        <?php }?>

  </tbody>
</table>
    </div>
    

</body>
</html>