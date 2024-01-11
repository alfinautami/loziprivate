<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran Siswa SMKN DARUL ULUM MUNCAR.">
  <meta name="author" content="e-development.tech">

  <title>Registrasi Private Class Lozi</title>

  <!-- gambar title -->
  <link rel="icon" type="image/png" href="assets/img/logo.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- css datepicker -->
  <link href="assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

  <style>
    .logo-login {
        max-height: 160px;
        margin-bottom: 20px;
    }
  </style>

</head>

<body class="bg-gradient-primary">
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Febri Hidayan</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <nav>
        <div class="start">
            <a href="index.html">Febri Hidayan</a>
        </div>
        <div class="end">
            <a href="unduh.html">Unduh</a>
            <a href="karya.html">Karya</a>
            <a href="kontak.html">Kontak</a>
            <a href="tentang.html">Tentang</a>
        </div>
    </nav>

    <br><br>

    <header class="header">
        <figure class="text-center">
            <img
                src="foto.jpg"
                alt="profil saya"
            >
            <figcaption>Febri Hidayan</figcaption>
            <strong>(1910031802055)</strong>
        </figure>
    </header>

    <br><br><br>

    <main>
        <h1>Tentang</h1>
        <hr>
        <article class="content">
            <p>
                Hai semuanya, nama saya Febri Hidayan dan saya sering di panggil Febri. Saya suka dengan pemograman <em>web</em> sudah lama sejak tahun 2015 dan waktu itu baru memasuki <em>Laravel</em> 5 dan saya belum bisa pemograman apapun.
            </p>
            <p>
                Singkat cerita, saya mengenal pemograman <em>web</em> dari seorang dosen STIE Riau Akbar juga seorang alumni S1 STMIK AMIK Riau yaitu Bapak Nori Sahrun. Beliaulah yang memperkenalkan <em>Laravel</em> dan <em>PHP</em> kepada saya, karena di waktu itu Laravel sangat populer hingga saat ini.
            </p>
            <p>
                Hingga saya tamat MTS Al-Huda Pekanbaru hingga masuk ke SMK Hasanah Pekanbaru barulah saya memulai untuk belajar pemograman <em>web</em> baik dari belajar <em>HTML</em>, <em>CSS</em>, <em>JavaScript</em>, <em>PHP</em>, <em>jQuery</em>, <em>Bootstrap</em>, dan masih banyak lagi.
            </p>
            <p>
                Pada kelas 1 di semester 1 saya membuat <em>web</em> dengan <em>Wordpress</em> yaitu <a href="https://sekolahprogram.com" target="_blank">Sekolah Program</a>, banyak sekali tantangan dan ilmu yang saya dapatkan disana. Pada tahun 2018 saya memulai untuk belajar kerangka kerja <em>Laravel</em> dan membuat blog dengannya. Tepat pada tahun 2019 diwaktu kuliah semester 1 di STMIK AMIK Riau, saya mendapatkan datantangan baru untuk belajar <em>Vue.js</em> agar memiliki <em>web</em> dengan <em>Single Page Application</em> hingga masa pandemi tiba saya mengalami masalah baru. Kalau membuat <em>web</em> dengan <em>Single Page Application</em> tidak rama dengan <em>Search Engine Optimization</em>.
            </p>
            <p>
                Hingga bulan Juni 2020 saya menemukan solusi yaitu menggunakan <em>Nuxt.js</em> agar blog saya bisa menggunakan <em>Server Side Rendered</em>, maka dari itu <em>Laravel</em> sebagai <em>REST API</em> dan <em>Nuxt.js</em> sebagai <em>Client</em>. Tahun 2021 saya akan memasuki Sekolah Program untuk fokus menjadi pembelajaran pemograman secara online.
            </p>
        </article>
    </main>

    <br><br>

    <footer class="text-center">
        <p>&copy;2020 Febri Hidayan, Hak cipta dilindungi.</p>
    </footer>
</body>
</html>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Registrasi Private Lozi</h1>
                  </div>
                  <form class="user" action="registrasi_control.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Username</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="tempat_lahir">Nama</label>
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat lahir" name="tempat_lahir">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">TTL</label>
                            <input type="text" class="form-control datepicker" id="tempat/tanggal_lahir" placeholder="Tempat Tanggal Lahir"  name="tempat/tanggal_lahir">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="lk" value="L">
                                <label class="form-check-label" for="lk">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="pr" value="P">
                                <label class="form-check-label" for="pr">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="">Pilih Agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Domisili (Kota) </label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">No.Telp</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="telepon">Username Instagram</label>
                            <input name="telepon" type="text" class="form-control" id="telepon" placeholder="Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Followers Instagram</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="Status">Status</label>
                            <select name="Status" id="Status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>

                    <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-user btn-block">
                      Registrasi
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="login.php">Sudah punya akun ? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- js datepicker -->
  <script src="assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        }).on('change.datepicker', function (ev) {
            console.log('tes');
        });
    });
  </script>

</body>

</html>
