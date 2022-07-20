<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'slbnsawa_tiangunida');
define('DB_PASS', ';iFtux9)MiwO');
define('DB_NAME', 'slbnsawa_tiang');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MYSQ Server: " . mysqli_connect_error();
    die();
}