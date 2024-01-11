<?php
$con = mysqli_connect("localhost", "root", "", "privatelozi");




function tambahpeserta($data)
{
    global $con;


    $idp = $data['id_peserta'];
    $username = $data['username'];
    $nama = $data['nama'];
    $ttl = $data['ttl'];
    $jeniskelamin = $data['jeniskelamin'];
    $agama = $data['agama'];
    $domisili = $data['domisili'];
    $no_telp = $data['no_telp'];
    $username_instagram = $data['username_instagram'];
    $followers_instagram = $data['followers_instagram'];
    $status_pst = $data['status_pst'];
    $password = $data['password'];


    $reg = "INSERT INTO datapeserta VALUES ('$idp','$username','$nama','$ttl','$jeniskelamin','$agama','$domisili','$no_telp','$username_instagram','$followers_instagram','$status_pst','$password')";
    // $reg="INSERT INTO datapeserta VALUES (id_peserta='$idp',username='$username',nama='$nama',ttl='$ttl',jeniskelamin='$jeniskelamin',agama='$agama',domisili='$domisili',no_telp='$no_telp',username_instagram='$username_instagram',followers_instagram='$followers_instagram',status_pst='$status_pst',password='$password')";

    mysqli_query($con, $reg);
    return mysqli_affected_rows($con);
}

function tambahdata($tambah)
{
    global $con;


    $idp = $tambah['id_peserta'];
    $username = $tambah['username'];
    $nama = $tambah['nama'];
    $ttl = $tambah['ttl'];
    $jeniskelamin = $tambah['jeniskelamin'];
    $agama = $tambah['agama'];
    $domisili = $tambah['domisili'];
    $no_telp = $tambah['no_telp'];
    $username_instagram = $tambah['username_instagram'];
    $followers_instagram = $tambah['followers_instagram'];
    $status_pst = $tambah['status_pst'];
    $password = $tambah['password'];


    $tam = "INSERT INTO datapeserta VALUES ('$idp','$username','$nama','$ttl','$jeniskelamin','$agama','$domisili','$no_telp','$username_instagram','$followers_instagram','$status_pst','$password')";
    // $reg="INSERT INTO datapeserta VALUES (id_peserta='$idp',username='$username',nama='$nama',ttl='$ttl',jeniskelamin='$jeniskelamin',agama='$agama',domisili='$domisili',no_telp='$no_telp',username_instagram='$username_instagram',followers_instagram='$followers_instagram',status_pst='$status_pst',password='$password')";

    mysqli_query($con, $tam);
    return mysqli_affected_rows($con);
}

function ubahpeserta($data)
{
    global $con;


    $idp = $data['id_peserta'];
    $username = $data['username'];
    $nama = $data['nama'];
    $ttl = $data['ttl'];
    $jeniskelamin = $data['jeniskelamin'];
    $agama = $data['agama'];
    $domisili = $data['domisili'];
    $no_telp = $data['no_telp'];
    $username_instagram = $data['username_instagram'];
    $followers_instagram = $data['followers_instagram'];
    $status_pst = $data['status_pst'];
    $password = $data['password'];


    // $reg="INSERT INTO datapeserta VALUES ('$idp','$username','$nama','$ttl','$jeniskelamin','$agama','$domisili','$no_telp','$username_instagram','$followers_instagram','$status_pst','$password')";
    $reg = "UPDATE datapeserta SET id_peserta='$idp',username='$username',nama='$nama',ttl='$ttl',jeniskelamin='$jeniskelamin',agama='$agama',domisili='$domisili',no_telp='$no_telp',username_instagram='$username_instagram',followers_instagram='$followers_instagram',status_pst='$status_pst',password='$password' WHERE id_peserta='$idp'";

    mysqli_query($con, $reg);
    return mysqli_affected_rows($con);
}


function tambahtesti($data)
{
    global $con;
    $id_testi = $data['id_testi'];
    $username_testi = $data['username_testi'];
    $komentar = $data['komentar'];


    $reg = "INSERT INTO testimoni VALUES ('$id_testi','$username_testi','$komentar')";

    mysqli_query($con, $reg);
    return mysqli_affected_rows($con);
}


function ubahtesti($data)
{
    global $con;
    $id_testi = $data['id_testi'];
    $username_testi = $data['username_testi'];
    $komentar = $data['komentar'];

    $reg = "UPDATE testimoni SET id_testi='$id_testi',username_testi='$username_testi',komentar='$komentar ' WHERE id_testi='$id_testi'";

    mysqli_query($con, $reg);
    return mysqli_affected_rows($con);
}
