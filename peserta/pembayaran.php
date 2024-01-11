<?php
include "../connection.php";
if (isset($_POST["simpan"])) {
    if (tambahpeserta($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambah!');
        document.location.href = '../login.php'
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambah!');
        document.location.href = '../login.php' 
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lozi Management</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-custom sticky-top" id="myNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">Lozi Management</a>

            <button class="menu navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link navs-active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Private Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-link" href="">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main Content -->
    <section id="myLogin">
        <div class="login-section container">
            <div class="row g-0">
                <div class="col-sm-4 col-md-6">
                    <img class="login-illustration" src="./assets/img/login.png" alt="Login Illustration" />
                </div>
                <div class="col-12 col-md-6">
                    <h1>Register</h1>
                    <form action="" class="myForm" method="post">
                        <div class="mb-3">
                            <label for="id_peserta" class="form-label">Id Peserta</label>
                            <input type="text" class="form-control w-100" placeholder="Masukan id_peserta sesuai dengan yang di KTP" name="id_peserta" required />
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control w-100" placeholder="Masukan username sesuai dengan yang di KTP" name="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama :</label>
                            <input type="nama" class="form-control w-100" placeholder="Masukan nama aktif" name="nama" required />
                        </div>
                        <div class="mb-3">
                            <label for="ttl" class="form-label">TTL :</label>
                            <input type="ttl" class="form-control w-100" placeholder="Masukan ttl aktif" name="ttl" required />
                        </div>
                        <div class="mb-2">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" value="Laki laki">
                                <label class="form-check-label" for="lk">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" value="Perempuan">
                                <label class="form-check-label" for="pr">
                                    Perempuan
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="agama">Agama</label>
                                <select name="agama" name="agama" class="form-control">
                                    <option value="">Pilih Agama</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="domisili" class="form-label">Domisili :</label>
                                <input type="domisili" class="form-control w-100" placeholder="Masukan domisili aktif" name="domisili" required />
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">No Telp :</label>
                                <input type="no_telp" class="form-control w-100" placeholder="Masukan no_telp aktif" name="no_telp" required />
                            </div>
                            <div class="mb-3">
                                <label for="username_instagram" class="form-label">Username Isntagram :</label>
                                <input type="username_instagram" class="form-control w-100" placeholder="Masukan username_instagram aktif" name="username_instagram" required />
                            </div>
                            <div class="mb-3">
                                <label for="followers_instagram" class="form-label">Followers Instagram :</label>
                                <input type="followers_instagram" class="form-control w-100" placeholder="Masukan followers_instagram aktif" name="followers_instagram" required />
                            </div>
                            <div class="mb-3">
                                <label for="Status">Status</label>
                                <select name="status_pst" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password :</label>
                                <input maxlength="20" type="password" class="form-control w-100" placeholder="******" name="password" required />
                            </div>
                            <label class="mb-3 show-repeat-pass" onclick="showPassword()">Show Password</label>
                            <div class="mb-3">
                                <label for="password" class="form-label">Repeat Password :</label>
                                <input maxlength="20" type="password" class="form-control w-100" placeholder="******" name="showRepeatPass" required />
                            </div>
                            <label class="mb-4 show-repeat-pass" onclick="showRepeatPassword()">Show Repeat Password</label>


                            <button type="submit" class="btn btn-info mb-3" name="simpan" id="simpan">Register</button>
                            <p class="text-center">
                                Already have an account? <a href="login.html">Sign In</a>
                            </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content End -->

    <!-- Footer -->
    <section id="myFooter">
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item">
                        <a href="/" class="footer-link nav-link px-2 text-muted">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="footer-link nav-link px-2 text-muted">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="footer-link nav-link px-2 text-muted">Whatshapp</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="footer-link nav-link px-2 text-muted">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
              <a href="#" class="nav-link px-2 text-muted">About</a>
            </li> -->
                </ul>
                <p class="text-center footer-copyright">&copy; 2022 @alfinaww</p>
            </footer>
        </div>
    </section>
    <!-- Footer End -->

    <!-- My JS -->
    <script src="./assets/js/main.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>