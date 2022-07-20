<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama_teknisi = $_POST['nama_teknisi'];
    $alamat_teknisi = $_POST['alamat_teknisi'];
    $nohp_teknisi = $_POST['nohp_teknisi'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO tb_teknisi (nama_teknisi,alamat_teknisi,nohp_teknisi,username,password) VALUES('$nama_teknisi','$alamat_teknisi','$nohp_teknisi','$username','$password')";
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "input teknisi berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "input teknisi gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada input teknisi";
}
echo json_encode($response);

