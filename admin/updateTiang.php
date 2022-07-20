<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_tiang = $_POST['id_tiang'];
    $nama_tiang = $_POST['nama_tiang'];
    $lat = $_POST['lat'];
    $lng= $_POST['lng'];
    $status_tiang = $_POST['status_tiang'];
    $query = "UPDATE `tb_tiang` SET nama_tiang='$nama_tiang',lat='$lat',lng='$lng',status_tiang='$status_tiang' WHERE id_tiang='$id_tiang' ";
  
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "update data tiang berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "update data tiang gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada update data tiang";
}
echo json_encode($response);
mysqli_close($conn);