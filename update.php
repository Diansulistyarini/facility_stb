<?php
require_once('koneksi.php');

$id = addslashes(htmlentities($_POST['id']));

$nama = addslashes(htmlentities($_POST['namabarang']));

$spes = addslashes(htmlentities($_POST['spesifikasi']));

$jeniss = addslashes(htmlentities($_POST['jenis']));

$jumlahh = addslashes(htmlentities($_POST['jumlah']));

$lokasi = addslashes(htmlentities($_POST['lokasi']));

$getdata = mysqli_query($konek,"SELECT * FROM tb_sarana WHERE id='$id'");
$rows = mysqli_num_rows($getdata);

$update = "UPDATE tb_sarana SET  namabarang='$nama', spesifikasi='$spes',jenis='$jeniss',jumlah='$jumlahh',lokasi='$lokasi' WHERE id='$id'";
$exequery = mysqli_query($konek,$update);

$respose = array();

if($rows > 0)
{
  if($exequery)
  {
    $respose['code'] = 1;
    $respose['message'] = "Updated Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Updated Failed";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Updated Failed, Not data selected";
}
echo json_encode($respose);
?>