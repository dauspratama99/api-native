<?php
include_once '../dbconnect.php';
$bulan = $_GET['bulan'];
$id = $_GET['id'];

$query = "SELECT COUNT(*) AS JML FROM `tb_keluhan` WHERE id_tiang = '$id' AND tgl_keluhan BETWEEN '2022-$bulan-01 00:00:00' AND '2022-$bulan-31 00:00:00'";
$execute = mysqli_query($conn, $query);
$check = mysqli_affected_rows($conn);

if ($check>0){
    $response["code"]=1;
    $response["message"]="Data ditemukan";
    $response["data"]=array();
    $F = array();
    while($retrieve= mysqli_fetch_object($execute)) {
       $F[]= $retrieve;
    }
    $response["data"]=$F;
} else {
    $response["code"]=0;
    $response["message"]="Data tidak ditemukan";
}
echo json_encode($response);
mysqli_close($conn);