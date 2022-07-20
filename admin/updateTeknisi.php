<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_teknisi = $_POST['id_teknisi'];
    $nama_teknisi = $_POST['nama_teknisi'];
    $alamat_teknisi = $_POST['alamat_teknisi'];
    $nohp_teknisi = $_POST['nohp_teknisi'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE `tb_teknisi` SET nama_teknisi='$nama_teknisi',alamat_teknisi='$alamat_teknisi',nohp_teknisi='$nohp_teknisi',username='$username',password='$password' WHERE id_teknisi='$id_teknisi' ";
  
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "update data teknisi berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "update data teknisi gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada update data teknisi";
}
echo json_encode($response);
mysqli_close($conn);