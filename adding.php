<?php
// print_r($_POST);
 
include 'connection.php';

// $kun=koneksion();

// $id= $_POST['id'];
$it=$_POST['id_tanaman'];
$nt=$_POST['nama_tanaman'];
$nl=$_POST['nama_latin'];
$dt=$_POST['date'];
$kd=$_POST['kondisi'];

$query = mysqli_query($koneksi,"INSERT INTO `plant` (`id_tanaman`, `nama_tanaman`, `nama_latin`, `date`, `kondisi`) VALUES ('$it', '$nt', '$nl', '$dt', '$kd')");

//buat json
if($query==TRUE){
    echo "Data Tersimpan";
}else{
    echo "Data Gagal Simpan";
}
?>