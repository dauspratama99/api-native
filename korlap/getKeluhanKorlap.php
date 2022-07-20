<?php
include_once '../dbconnect.php';
$query = "SELECT * FROM tb_keluhan LEFT JOIN `tb_tiang` ON `tb_keluhan`.`id_tiang`=`tb_tiang`.`id_tiang`";
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