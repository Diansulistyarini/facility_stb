<?php
require 'connection.php';


    $id = $_POST['id'];
    $namatanamanbaru = $_POST['nama_tanaman'];
    $namalatinbaru = $_POST['nama_latin'];
    $tahuntanambaru = $_POST['date'];
    $lokasibaru = $_POST['lokasi'];
    $jmlbaru = $_POST['jumlah'];
    $kondisibaru = $_POST['kondisi'];

    echo $id;
    echo $namatanamanbaru;
    echo $namalatinbaru;
    echo $tahuntanambaru;
    echo $lokasibaru;
    echo $jmlbaru;
    echo $kondisibaru;

    $sql = mysqli_query($konek, "UPDATE `plant` SET  `nama_tanaman` = '$namatanamanbaru', `nama_latin` = '$namalatinbaru', `date` = '$tahuntanambaru',`lokasi` = '$lokasibaru',`jumlah` = '$jmlbaru', `kondisi` = '$kondisibaru' WHERE `plant`.`id` = '$id';");

    if (!$sql) {
        die("eror :".mysqli_errno($konek).'-'.mysqli_error($konek));
    }

    header("Location:index.php")
        


?>