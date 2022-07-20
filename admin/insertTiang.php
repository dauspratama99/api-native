<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama_tiang = $_POST['nama_tiang'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $status_tiang = $_POST['status_tiang'];
    
    $query = "INSERT INTO tb_tiang (nama_tiang,lat,lng,status_tiang) VALUES('$nama_tiang','$lat','$lng','$status_tiang')";
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "input tiang berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "input tiang gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada input tiang";
}
echo json_encode($response);

