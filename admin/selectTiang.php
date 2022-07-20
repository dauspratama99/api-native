<?php
include_once '../dbconnect.php';
$id_tiang = $_GET['id_tiang'];


$query = "SELECT * FROM tb_tiang WHERE id_tiang='$id_tiang'";
$execute = mysqli_query($conn, $query);
$check = mysqli_affected_rows($conn);
$response = array();
if ($check>0){
    $data = array();
    while($retrieve= mysqli_fetch_object($execute)) {
        $bind["id_tiang"]=$retrieve->id_tiang;
        $bind["nama_tiang"]=$retrieve->nama_tiang;
        $bind["lat"]=$retrieve->lat;
        $bind["lng"]=$retrieve->lng;
        $bind["status_tiang"]=$retrieve->status_tiang;
        array_push($response, $bind);
    }
} else {
    $response["code"]=0;
    $response["message"]="Data makanan tidak ditemukan";
}
echo json_encode($response);
mysqli_close($conn);