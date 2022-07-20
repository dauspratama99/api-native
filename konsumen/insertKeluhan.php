<?php
include_once '../dbconnect.php';
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_user = $_POST['id_user'];
    $id_tiang = $_POST['id_tiang'];
    $isi = $_POST['isi'];
    $query = "INSERT INTO `tb_keluhan` (`id_keluhan`, `id_user`, `id_tiang`, `id_teknisi`, `tgl_keluhan`, `isi_keluhan`, `status_keluhan`) VALUES (NULL, '$id_user', '$id_tiang', '0', current_timestamp(), '$isi', 'Di Ajukan');";
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

