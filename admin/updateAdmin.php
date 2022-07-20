<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama_admin = $_POST['nama_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE `tb_admin` SET nama_admin='$nama_admin',username='$username',password='$password' WHERE nama_admin='$nama_admin' ";
  
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "update profil berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "update profil gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada update profil";
}
echo json_encode($response);
mysqli_close($conn);