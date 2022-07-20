<?php
include_once '../dbconnect.php';
$id_admin = $_GET['id_admin'];


$query = "SELECT * FROM tb_admin WHERE id_admin='$id_admin'";
$execute = mysqli_query($conn, $query);
$check = mysqli_affected_rows($conn);
$response = array();
if ($check>0){
    $data = array();
    while($retrieve= mysqli_fetch_object($execute)) {
        $bind["id_admin"]=$retrieve->id_admin;
        $bind["nama_admin"]=$retrieve->nama_admin;
        $bind["username"]=$retrieve->username;
        $bind["password"]=$retrieve->password;
        array_push($response, $bind);
    }
} else {
    $response["code"]=0;
    $response["message"]="Data users tidak ditemukan";
}
echo json_encode($response);
mysqli_close($conn);