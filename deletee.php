<?php
    require 'connection.php';

    $id = $_GET['id'];

    $query = mysqli_query($konek,"DELETE FROM `plant` WHERE `plant`.`id` = $id");
    header("Location:index.php");

?>