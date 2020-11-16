<?php 
    include('koneksi.php');
    include('phpqrcode/qrlib.php');

    $namabarang = $_GET['namabarang'];
    $query = mysqli_query($konek,"SELECT * FROM tb_sarana where tb_sarana.namabarang LIKE '%$namabarang%'");
    // var_dump($namabarang);
    // $query = mysqli_query();

    // $json=json_encode($data);
    // echo $json;
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

        <div class="bek" style="margin-left:1%; margin-top:-5px;"><a href="choose.php"><img src="bk.png" alt=""></a></div>
        
        <a href='add.php'style="margin-left:2%;" class='btn btn-primary mb-2' >Add Data </a>
        
        <form class="fron-inline md-form form-sm active-pink active-pink-2 search" action="cari.php" methode="get">
          <i class="fas fa-search" aria-hidden="true"></i>
          <input class="form-control form-control-sm ml-3 w-30" type="text" placeholder="Search..." aria-label="search" type="text" name="namabarang" id="namabarang">
        </form>

      </div>
      
      
      <!-- <form action="cari.php" method="get">
          <input type="text" name="namabarang" id="namabarang">
          <button type="submit">Cari</button>
      </form> -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Jenis</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Qrcode</th>
      <th scope="col">Action</th>
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
      
            <td><?php   
            QRcode::png("Nama Barang: " .$data_siswa['namabarang'] .","."Spesifikasi Barang ini :  " .$data_siswa['spesifikasi'] ."," ." Jenis Barang Ini adalah " .$data_siswa['jenis'] ."," . " Jumlah Barang ini Di SMK TARUNA BHAKTI " .$data_siswa['jumlah'] ."," ." Barang Ini berada Di " .$data_siswa['lokasi'], "appbener/barang".$data_siswa['namabarang'].".png","H",1,1);
            echo "<img src=\"appbener/barang$data_siswa[namabarang].png\" ?>"; ?>
            </td>

            <td><a href="proses_delete.php?id=<?php echo $data_siswa['id']; ?>">Hapus</a> |
            <a href="edit.php?id=<?php echo $data_siswa['id']; ?>">Edit</a></td>
            
        </tr>
        <?php }?>

  </tbody>
</table>
    </div>
    

</body>
</html>
