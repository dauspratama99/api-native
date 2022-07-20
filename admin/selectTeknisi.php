<?php
include_once '../dbconnect.php';
$id_teknisi = $_GET['id_teknisi'];


$query = "SELECT * FROM tb_teknisi WHERE id_teknisi='$id_teknisi'";
$execute = mysqli_query($conn, $query);
$check = mysqli_affected_rows($conn);
$response = array();
if ($check>0){
    $data = array();
    while($retrieve= mysqli_fetch_object($execute)) {
        $bind["id_teknisi"]=$retrieve->id_teknisi;
        $bind["nama_teknisi"]=$retrieve->nama_teknisi;
        $bind["alamat_teknisi"]=$retrieve->alamat_teknisi;
        $bind["nohp_teknisi"]=$retrieve->nohp_teknisi;
        $bind["username"]=$retrieve->username;
        $bind["password"]=$retrieve->password;
        array_push($response, $bind);
    }
} else {
    $response["code"]=0;
    $response["message"]="Data makanan tidak ditemukan";
}
echo json_encode($response);
mysqli_close($conn);