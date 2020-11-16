<?php
include_once('connection.php');
$query = "SELECT * FROM plant";
$result = mysqli_query($konek,$query);
$array_data = array();
while($baris = mysqli_fetch_assoc($result))
{
  $array_data[]=$baris;
}

echo json_encode($array_data);
?>