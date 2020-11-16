<?php
    require 'koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($konek,"DELETE FROM `tb_sarana` WHERE `tb_sarana`.`id` = $id");
    header("Location:index.php");

?>