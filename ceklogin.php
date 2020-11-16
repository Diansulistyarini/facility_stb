<?php
    session_start();
    include 'koneksi.php';
    // $kun=bukaKoneksi();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($konek, "select * from user where email='$email' and password='$password'");

    var_dump($cekuser);

    // while ($datauser = mysqli_fetch_array($cekuser)) {
    //     $role = $datauser[1];
    // }

    $cekjumlah = mysqli_num_rows($cekuser);

    // if ($role == 'siswa' && $cekjumlah === 1) {
    //     $_SESSION['username'] = $username;
    //     header('location:siswates.php');
    // } elseif ($role == 'guru' && $cekjumlah === 1) {
    //     $_SESSION['username'] = $username;
    //     header('location:barang/indexbarang.php');
    // }else {
    //     header('location:login.php');
    // }

    if($cekjumlah > 0){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location:choose.php");
    }else{
        // alert("EROR CUY");
        header("location:loginn.php");	
    }

?>
