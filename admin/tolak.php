<?php 
 include '../connection.php';


$idp = $_GET['id_validasi'];
mysqli_query($con,"DELETE FROM validasi_peserta WHERE id_validasi='$idp'") or die(mysqli_error());
header("location:datapeserta.php?pesan=hapus");


?>