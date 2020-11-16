<?php
require 'koneksi.php';


    $id = $_POST['id'];
    $namabaru = $_POST['namabarang'];
    $spesbaru = $_POST['spesifikasi'];
    $jenisbaru = $_POST['jenis'];
    $jumlahbaru = $_POST['jumlah'];
    $lokasibaru = $_POST['lokasi'];

    echo $id;
    echo $namabaru;
    echo $spesbaru;
    echo $jenisbaru;
    echo $jumlahbaru;
    echo $lokasibaru;

    $sql = mysqli_query($konek, "UPDATE `tb_sarana` SET  `namabarang` = '$namabaru', `spesifikasi` = '$spesbaru', `jenis` = '$jenisbaru',`jumlah` = '$jumlahbaru', `lokasi`='$lokasibaru' WHERE `tb_sarana`.`id` = '$id';");

    if (!$sql) {
        die("eror :".mysqli_errno($konek).'-'.mysqli_error($konek));
    }

    header("Location:index.php")
        


?>