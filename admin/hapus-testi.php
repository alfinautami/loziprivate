

<?php 
 include '../connection.php';


$id_testi = $_GET['id_testi'];
mysqli_query($con,"DELETE FROM testimoni WHERE id_testi='$id_testi'") or die(mysqli_error());
header("location:testimoni.php?pesan=hapus");


?>