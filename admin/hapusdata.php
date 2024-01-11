
<?php
include "../connection.php";

$id_peserta = $_GET['id_peserta'];
$id_testi = $_GET['testimoni'];


if ($id_peserta) {
    mysqli_query($con, "DELETE FROM datapeserta WHERE id_peserta ='$id_peserta'") or die(mysqli_error());
    header("location:datapeserta.php?pesan=hapus");
} elseif ($id_testi) {
    mysqli_query($con, "DELETE FROM testimoni WHERE id_testi = '$id_testi'") or die(mysqli_error());
    header("location:testimoni.php?pesan=hapus");
}
?>