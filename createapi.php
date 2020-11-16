<?php

include_once('connection.php');

$iid = addslashes(htmlentities($_POST['id']));

$nmtanaman = addslashes(htmlentities($_POST['nama_tanaman']));

$nmlatin = addslashes(htmlentities($_POST['nama_latin']));

$thntanam = addslashes(htmlentities($_POST['date']));

$lks = addslashes(htmlentities($_POST['lokasi']));

$lks = addslashes(htmlentities($_POST['lokasi']));

$kds = addslashes(htmlentities($_POST['kondisi']));



$insert = "INSERT INTO `plant`(id,`nama_tanaman`,`nama_latin`,`date`,`lokasi`,`kondisi`) VALUES ('$iid','$nmtanaman','$nmlatin','$thntanam','$lks','$kds')";

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
