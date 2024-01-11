<?php
require "../connection.php";
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
$qcekdata = mysqli_query($con, "select * from admin where Username ='$username' and Password = '$password'");
$ada = mysqli_num_rows($qcekdata);
if ($ada > 0) {
    $tdata = mysqli_fetch_array($qcekdata);
    $_SESSION['Username'] = $tdata['Username'];
    $_SESSION['Password'] = $tdata['Password'];
    header("location:index.php");
} else {
    header("location:login1admin.php");
}
