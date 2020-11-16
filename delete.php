<?php
include_once('koneksi.php');

$id = addslashes(htmlentities($_POST['id']));
$getdata = mysqli_query($konek,"SELECT * FROM tb_sarana WHERE id = '$id'");
$rows = mysqli_num_rows($getdata);

$delete = "DELETE FROM tb_sarana WHERE id = '$id'";
$exedelete = mysqli_query($konek,$delete);

$respose = array();
if($rows > 0)
{
  if ($exedelete) {
    $respose['code'] = 1;
    $respose['message'] = "Deleted Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Failed to Delete";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Failed to Delete, data Not Found";
}


echo json_encode($respose);
?>