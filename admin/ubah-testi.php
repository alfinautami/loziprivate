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
    if (ubahtesti($_POST) > 0) {
        echo "<script>
        alert('Data berhasli diubah!');
        document.location.href = 'testimoni.php'
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah!');
        document.location.href = 'testimoni.php' 
        </script>";
    }
}

$id_testi = $_GET['id_testi'];
$qubah = mysqli_query($con, "SELECT * FROM testimoni WHERE id_testi = '$id_testi'");
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

    <title>Formulir Edit Data | Private Class Lozi</title>

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
            <h3>Formulir Edit Data</h3>
            <button class="dark-mode-button" onclick="myFunction()">Dark Mode</button>
        </header>
        <form action="" method="POST" class="mt-4 border-top">
            <fieldset class="mt-3">

                <p>
                    <label for="id_testi" class="form-label">Id Testi: </label>
                    <input type="text" name="id_testi" class="form-control" placeholder="id_testi" value="<?php echo $tubah['id_testi']; ?>" />
                </p>
                <p>
                    <label for="username_testi" class="form-label">username_testi: </label>
                    <input type="text" name="username_testi" class="form-control" placeholder="username_testi" value="<?php echo $tubah['username_testi']; ?>" />
                </p>
                <p>
                    <label for="komentar" class="form-label">komentar: </label>
                    <input type="text" name="komentar" class="form-control" placeholder="komentar" value="<?php echo $tubah['komentar']; ?>" />
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>