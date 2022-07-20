<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama_konsumen = $_POST['nama_konsumen'];
    $alamat_konsumen = $_POST['alamat_konsumen'];
    $nohp_konsumen = $_POST['nohp_konsumen'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO tb_konsumen (nama_konsumen,alamat_konsumen,nohp_konsumen,username,password) VALUES('$nama_konsumen','$alamat_konsumen','$nohp_konsumen','$username','$password')";
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "input konsumen berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "input konsumen gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada input konsumen";
}
echo json_encode($response);

