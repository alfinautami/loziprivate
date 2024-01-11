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
        //$tubah = mysqli_fetch_array($qubah); = mysqli_fetch_assoc($query);
        // // jika data yang di-edit tidak ditemukan
        // if (mysqli_num_rows($query) < 1) {
        //     die("data tidak ditemukan...");
        // }
        // 
        ?> -->

<?php

include "../connection.php";
if (isset($_POST["simpan"])) {
    if (ubahpeserta($_POST) > 0) {
        echo "<script>
        alert('Data berhasli diubah!');
        document.location.href = 'datapeserta.php'
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah!');
        document.location.href = 'datapeserta.php' 
        </script>";
    }
}

$id_peserta = $_GET['id_peserta'];
$qubah = mysqli_query($con, "SELECT * FROM datapeserta WHERE id_peserta = '$id_peserta'");
$tubah = mysqli_fetch_array($qubah);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Formulir Ubah Data | Private Class Lozi</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .submit-btn {
            position: relative;
            width: 100%;
            height: 40px;
            align-items: center;
            justify-content: center;
            border: transparent;
            background: linear-gradient(132.02deg, #6373E5 0%, #8454A8 105.79%);
            color: #fcfcfc;
            border-radius: 5px;
        }
        .submit-btn:hover {
            transition: all 0.5s;
            background: linear-gradient(132.02deg, #4F5CB7 0%, #6A4386 105.79%);
        }
        .dark-mode-button {
            border: transparent;
            padding: 5px 20px;
            background-color: #6373E5;
            color: #fcfcfc;
            font-weight: 700;
            border-radius: 5px;
        }
        .dark-mode {
            background-color: black;
            color: white;
            transition: all 0.5s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container w-50 mt-5 mb-5">
        <header class="text-center d-flex flex-row justify-content-between align-items-center">
            <h3>Formulir Ubah Data</h3>
            <button class="dark-mode-button" onclick="myFunction()">Dark Mode</button>
        </header>
        <form action="" method="POST" class="mt-4 border-top">
            <fieldset class="mt-3">

                <p>
                    <label for="id_peserta" class="form-label">Id peserta: </label>
                    <input type="text" name="id_peserta" class="form-control" placeholder="id_peserta" value="<?php echo $tubah['id_peserta']; ?>" />
                </p>
                <p>
                    <label for="username" class="form-label">username: </label>
                    <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $tubah['username']; ?>" />
                </p>
                <p>
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $tubah['nama']; ?>" />
                </p>
                <p>
                    <label for="ttl" class="form-label">TTL </label>
                    <input type="text" name="ttl" class="form-control" placeholder="ttl" value="<?php echo $tubah['ttl']; ?>" />
                </p>

                <p>
                    <label for="jeniskelamin" class="form-label">Jenis Kelamin: </label> <br>
                    <?php $jk = $tubah['jeniskelamin']; ?>
                    <label class="form-label"><input type="radio" name="jeniskelamin" value="laki-laki" <?php echo ($jk) ? "checked" : "" ?>> Laki-laki</label> <br>
                    <label class="form-label"><input type="radio" name="jeniskelamin" value="perempuan" <?php echo ($jk) ? "checked" : "" ?>> Perempuan</label>
                </p>
                <p>
                    <label for="agama" class="form-label">Agama: </label>
                    <?php $agama = $tubah['agama']; ?>
                    <select name="agama" class="form-control">
                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Katolik') ? "selected" : "" ?>>Katolik</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    </select>
                </p>
                <p>
                    <label for="domisili" class="form-label">Domisili </label>
                    <input type="text" name="domisili" class="form-control" placeholder="domisili" value="<?php echo $tubah['domisili']; ?>" />
                </p>
                <p>
                    <label for="no_telp" class="form-label">No.Telp </label>
                    <input type="text" name="no_telp" class="form-control" placeholder="no_telp" value="<?php echo $tubah['no_telp']; ?>" />
                </p>
                <p>
                    <label for="username_instagram" class="form-label">Username Instagram </label>
                    <input type="text" name="username_instagram" class="form-control" placeholder="username_instagram" value="<?php echo $tubah['username_instagram']; ?>" />
                </p>
                <p>
                    <label for="followers_instagram" class="form-label">Followers Instagram </label>
                    <input type="text" name="followers_instagram" placeholder="followers_instagram" class="form-control" value="<?php echo $tubah['followers_instagram']; ?>" />
                </p>
                <p>
                    <label for="status_pst" class="form-label">Status </label> <br>
                    <?php $jk = $tubah['status_pst']; ?>
                    <label class="form-label"><input type="radio" name="status_pst" value="Menikah" <?php echo ($jk) ? "checked" : "" ?>> Menikah</label> <br>
                    <label class="form-label"><input type="radio" name="status_pst" value="Belum_menikah" <?php echo ($jk) ? "checked" : "" ?>> Belum Menikah</label>
                </p>

                <p>
                    <input class="submit-btn" type="submit" value="Simpan" name="simpan" />
                </p>
            </fieldset>
        </form>
    </div>

    
    <!-- My JS -->
    <script>
        function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
        }
    </script>

     <!-- Footer -->
     <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 2023 AlfinaWiwit</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>