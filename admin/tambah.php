<!-- <?php
        // include "../connection.php";
        // kalau tidak ada id di query string
        // if (!isset($_GET['id'])) {
        //     header('Location: ubah-data.php');
        // }
        //ambil id dari query string
        // $id = $_GET['id'];
        // buat query untuk ambil data dari database
        // $sql = "SELECT * FROM datapeserta WHERE id=$id";
        // $query = mysqli_query($db, $sql);
        //$tambah = mysqli_fetch_array($qubah); = mysqli_fetch_assoc($query);
        // // jika data yang di-edit tidak ditemukan
        // if (mysqli_num_rows($query) < 1) {
        //     die("data tidak ditemukan...");
        // }
        // 
        ?> -->

<?php

include "../connection.php";
if (isset($_POST["simpan"])) {
    if (tambahpeserta($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'datapeserta.php'
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'datapeserta.php' 
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Formulir Tambah Data | Private Class Lozi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<style type="text/css">
    input,
    textarea {
        padding: 0;
        margin: 0;
    }

    h2 {
        color: #50626C;
        text-align: center;
        font-family: arial;
        text-transform: uppercase;
        border: 3px solid #f1f1f1;
        padding: 5px;
        width: 490px;
        margin: auto;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    form {
        border: 3px solid #f1f1f1;
        font-family: arial;
        width: 500px;
        margin: auto;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    label {
        color: #50626C;
        text-transform: uppercase;
    }

    button {
        background-color: #049372;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f03434;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;

    }

    span {
        color: #50626C;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>


</head>

<body>
    <div class="container">
        <header>
            <h3 class="text-center">Formulir Edit Data</h3>
        </header>
        <form action="" method="POST">
            <fieldset>

                <p>
                    <label for="id_peserta">Id peserta: </label>
                    <input type="text" name="id_peserta" placeholder="id_peserta"  />
                </p>
                <p>
                    <label for="username">username: </label>
                    <input type="text" name="username" placeholder="username"  />
                </p>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama" />
                </p>
                <p>
                    <label for="ttl">TTL </label>
                    <input type="text" name="ttl" placeholder="ttl"  />
                </p>

                <p>
                    <label for="jeniskelamin">Jenis Kelamin: </label> <br>
                    <label><input type="radio" name="jeniskelamin" > Laki-laki</label> <br>
                    <label><input type="radio" name="jeniskelamin" > Perempuan</label>
                </p>
                <p>
                    <label for="agama">agama: </label>
                    
                    <select name="agama">
                        <option  name="agama" value="islam">Islam</option>
                        <option  name="agama" value="kristen">Kristen</option>
                        <option  name="agama" value="katolik">Katolik</option>
                        <option  name="agama" value="hindu">Hindu</option>
                        <option  name="agama" value="budha">Budha</option>
                    </select>
                </p>
                <p>
                    <label for="domisili">Domisili </label>
                    <input type="text" name="domisili" placeholder="domisili"   />
                    
                </p>
                <p>
                    <label for="no_telp">No.Telp </label>
                    <input type="text" name="no_telp" placeholder="no_telp"   />
                </p>
                <p>
                    <label for="username_instagram">Username Instagram </label>
                    <input type="text" name="username_instagram" placeholder="username_instagram"  />
                </p>
                <p>
                    <label for="followers_instagram">Followers Instagram </label>
                    <input type="text" name="followers_instagram" placeholder="followers_instagram"   />
                </p>
                <p>
                    <label for="status_pst">Status </label> <br>
                   
                    <label><input type="radio" name="status_pst" value="Menikah" > Menikah</label> <br>
                    <label><input type="radio" name="status_pst" value="Belum_menikah"  > Belum Menikah</label>
                </p>

                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>