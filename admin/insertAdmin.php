<?php
include_once '../dbconnect.php';

$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama_admin =$_POST['nama_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO tb_admin(nama_admin,username,password)"
            ."VALUES('$nama_admin','$username','$password')";
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "input user register berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "input user register gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada input user register";
}
echo json_encode($response);
mysqli_close($conn);
