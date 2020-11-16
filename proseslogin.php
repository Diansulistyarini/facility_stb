<?php 
include 'config.php';
 
$email = $_POST['email'];
echo $email;
$password = $_POST['password'];
echo $password;
 
$query = mysqli_query("select * from user where email='$email' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;
if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:choose.php");
}else{
	header("location:login.php");	
}
 
?>