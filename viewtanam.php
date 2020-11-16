<?php
require 'connection.php';
include('phpqrcode/qrlib.php');

$query = mysqli_query($konek,'SELECT * FROM `plant`');
?>

<!DOCTYPE html>      
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1 class='text-center mt-4'>Data Tanaman SMK TARUNA BHAKTI</h1>
    
    <div class="container">
    <div class="row">
      <!-- <a href='addplant.php' class='btn btn-primary mb-2' >+Add Data </a> -->
      <!-- <form class="fron-inline md-form form-sm active-pink active-pink-2 search" action="caritaneman.php" methode="get">
          <i class="fas fa-search" aria-hidden="true"></i>
          <input class="form-control form-control-sm ml-3 w-30" type="text" placeholder="Search..." aria-label="search" type="text" name="nama_taneman" id="nama_taneman">
        </form> -->
        <div class="bek" style="margin-left:1%; margin-top:-5px;"><a href="tanaman.php"><img src="bk.png" alt=""></a></div>
    </div>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Tanaman</th>
      <th scope="col">Nama Latin</th>
      <th scope="col">Tahun Tanam</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Kondisi</th> 

    </tr>
  </thead>
  <tbody>

  <!-- // tampil data  -->

  <?php
    while($data_plant = mysqli_fetch_array($query)){?>

      <tr>
      <td><?php echo $data_plant['id'];?></td>
      <td><?php echo $data_plant['nama_tanaman'];?></td>
      <td><?php echo $data_plant['nama_latin'];?></td>
      <td><?php echo $data_plant['date'];?></td>
      <td><?php echo $data_plant['lokasi'];?></td>
      <td><?php echo $data_plant['jumlah'];?></td>
      <td><?php echo $data_plant['kondisi'];?></td>
     
      </tr>
      <?php }?>
  </tbody>
  </table>
  </div>


</body>
</html>