<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $query = "UPDATE `tb_keluhan` SET `status_keluhan` = 'Di Tolak' WHERE `tb_keluhan`.`id_keluhan` = '$id';";
    $execute = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if($check > 0) {
        $response ["code"] = 1;
        $response ["message"] = "input berhasil";
    }else{
        $response ["code"] = 0;
        $response ["message"] = "input gagal";
    }
}else{
        $response ["code"] = 0;
        $response ["message"] = "Tidak ada input korlap";
}
echo json_encode($response);

