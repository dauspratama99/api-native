<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama_korlap = $_POST['nama_korlap'];
    $alamat_korlap = $_POST['alamat_korlap'];
    $nohp_korlap = $_POST['nohp_korlap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO tb_korlap (nama_korlap,alamat_korlap,nohp_korlap,username,password) VALUES('$nama_korlap','$alamat_korlap','$nohp_korlap','$username','$password')";
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "input korlap berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "input korlap gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada input korlap";
}
echo json_encode($response);

