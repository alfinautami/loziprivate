<?php 
 include '../connection.php';

// $nik = $_GET['NIK'];
// $gaji = $_GET['kd_gaji'];
$idp = $_GET['id_peserta'];
mysqli_query($con,"DELETE FROM datapeserta WHERE id_peserta='$idp'") or die(mysqli_error());
header("location:datapeserta.php?pesan=hapus");


// if ($nik) {
// 	mysqli_query($con,"DELETE FROM karyawan WHERE NIK ='$nik'") or die(mysqli_error());
// 	header("location:karyawan.php?pesan=hapus");
// }elseif ($gaji) {
// 	mysqli_query($con,"DELETE FROM gaji WHERE kd_gaji = '$gaji'") or die (mysqli_error());
// 	header("location:gaji.php?pesan=hapus");
// }
