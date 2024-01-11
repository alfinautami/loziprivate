<?php
require "../connection.php";
session_start();
$username = $_POST['username_peserta'];
$password = $_POST['password_peserta'];
$qcekdata = mysqli_query($con, "select * from daftarpeserta where username_peserta ='$username_peserta' and password_peserta = '$password_peserta'");
$ada = mysqli_num_rows($qcekdata);
if ($ada > 0) {
    $tdata = mysqli_fetch_array($qcekdata);
    $_SESSION['username_peserta'] = $tdata['username_peserta'];
    $_SESSION['password_peserta'] = $tdata['password_peserta'];
    header("location:../berandapeserta.php");
} else {
    header("location:loginpeserta.php");
    
}


