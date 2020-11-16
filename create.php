<?php

include_once('koneksi.php');

$id = addslashes(htmlentities($_POST['id']));

$nama = addslashes(htmlentities($_POST['namabarang']));

$spes = addslashes(htmlentities($_POST['spesifikasi']));

$jeniss = addslashes(htmlentities($_POST['jenis']));

$jumlahh = addslashes(htmlentities($_POST['jumlah']));

$lokasi = addslashes(htmlentities($_POST['lokasi']));


$insert = "INSERT INTO `tb_sarana`( id,	namabarang,`spesifikasi`,`jenis`,`jumlah`) VALUES ('$id','$nama','$spes','$jeniss','$jumlahh','$lokasi')";

$exeinsert = mysqli_query($konek,$insert);

$response = array();

if($exeinsert)

{

  $response['code'] =1;

  $response['message'] = "Success! Data Inserted";

}else{

  $response['code'] =0;

  $response['message'] = "Failed! Data Not Inserted";

}



echo json_encode($response);

?>
