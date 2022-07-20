<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_konsumen = $_POST['id_konsumen'];
    $nama_konsumen = $_POST['nama_konsumen'];
    $alamat_konsumen = $_POST['alamat_konsumen'];
    $nohp_konsumen = $_POST['nohp_konsumen'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE `tb_konsumen` SET nama_konsumen='$nama_konsumen',alamat_konsumen='$alamat_konsumen',nohp_konsumen='$nohp_konsumen',username='$username',password='$password' WHERE id_konsumen='$id_konsumen' ";
  
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "update data konsumen berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "update data konsumen gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada update data konsumen";
}
echo json_encode($response);
mysqli_close($conn);