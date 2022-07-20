<?php
include_once '../dbconnect.php';
$id_korlap = $_GET['id_korlap'];


$query = "SELECT * FROM tb_korlap WHERE id_korlap='$id_korlap'";
$execute = mysqli_query($conn, $query);
$check = mysqli_affected_rows($conn);
$response = array();
if ($check>0){
    $data = array();
    while($retrieve= mysqli_fetch_object($execute)) {
        $bind["id_korlap"]=$retrieve->id_korlap;
        $bind["nama_korlap"]=$retrieve->nama_korlap;
        $bind["alamat_korlap"]=$retrieve->alamat_korlap;
        $bind["nohp_korlap"]=$retrieve->nohp_korlap;
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