<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_korlap = $_POST["id_korlap"];
    $nama_korlap = $_POST['nama_korlap'];
    $alamat_korlap = $_POST['alamat_korlap'];
    $nohp_korlap = $_POST['nohp_korlap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE `tb_korlap` SET nama_korlap='$nama_korlap',alamat_korlap='$alamat_korlap',nohp_korlap='$nohp_korlap',username='$username',password='$password' WHERE id_korlap='$id_korlap' ";
  
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "update data korlap berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "update data korlap gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada update data korlap";
}
echo json_encode($response);
mysqli_close($conn);