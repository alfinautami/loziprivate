<!-- <?php
include './connection.php';

$qdata = mysqli_query($con, "select * from testimoni");
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lozi Management</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-custom sticky-top" id="myNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">Lozi Management</a>

            <button class="menu navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    <a class="btn btn-link" href="2login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- WA Button -->
    <div class="wa-button">
        <a href="https://wa.me/6281225667642?text=Saya%20ingin%20bertanya%20mengenai%20berlangganan%20Lozi%20Management" class="float" target="_blank">
            <ion-icon name="logo-whatsapp" class="my-float"></ion-icon>
        </a>
    </div>
    <!-- WA Button End -->

    <!-- Hero Section -->
    <section id="heroSection">
        <div class="hero-image">
            <div class="hero-text col-xxl-auto">
                <h1 class="animate__animated animate__backInDown">
                    PRIVATE CLASS LOZI
                </h1>
                <p class="animate__animated animate__backInLeft animate__delay-1s">
                    Satu-satunya kelas privat yang berkomitmen
                    <br />untuk menemani Anda dari nol hingga mahir
                </p>
                <div>
                    <a class="btn btn-primary animate__animated animate__backInUp animate__delay-2s" href="register.html">Register Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us -->
    <section id="aboutUs">
        <div class="px-4 py-3">
            <h1 class="mb-3" data-aos="fade-down" data-aos-duration="600">
                Tentang Kami
            </h1>
            <div class="col-lg-6 mx-auto">
                <p class="mb-2" data-aos="zoom-in" data-aos-duration="900">
                    Bimbingan private class endorsement khususnya di instagram. Memberikan bimbingan kepada peserta agar dapat memperoleh penghasilan bermodalkan sosial media khususnya instagram. Dengan memperoleh jobs paid promote dan endorse
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-secondary" data-aos="flip-up" data-aos-duration="1200" href="">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Why Us Section -->
    <section id="whyUsSection">
        <h1 class="why-us-title" data-aos="fade-right" data-aos-duration="600">
            Mengapa Harus Memilih Kami?
        </h1>
        <div class="container py-5 mt-2">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="zoom-in" data-aos-duration="400">
                    <div class="why-us-card card">
                        <div class="circle-container">
                            <div class="circle">
                                <ion-icon name="chatbubbles"></ion-icon>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Free Tips dan Trik Endorsment</h5>
                            <p class="card-text">
                                Teknik upload foto di sosial media yang tepat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="800">
                    <div class="why-us-card card">
                        <div class="circle-container">
                            <div class="circle">
                                <ion-icon name="people"></ion-icon>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Followers Naik Drastis</h5>
                            <p class="card-text">
                                Teknik bagaimana menaikan followers dan like real
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="why-us-card card">
                        <div class="circle-container">
                            <div class="circle">
                                <ion-icon name="briefcase"></ion-icon>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jobs Endorsment</h5>
                            <p class="card-text">
                                Teknik promosi akun instagram diminati onlineshop untuk endors
                                sebuah produk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1600">
                    <div class="why-us-card card">
                        <div class="circle-container">
                            <div class="circle">
                                <ion-icon name="pricetags"></ion-icon>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Promo Menarik</h5>
                            <p class="card-text">
                                Diskon 50% untuk 100 orang pertama yang daftar kelas Lozi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="why-us-card card">
                        <div class="circle-container">
                            <div class="circle">
                                <ion-icon name="laptop"></ion-icon>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pembelajaran Interaktif</h5>
                            <p class="card-text">Di bimbing oleh tutor ahli di bidangnya</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="2400">
                    <div class="why-us-card card">
                        <div class="circle-container">
                            <div class="circle">
                                <ion-icon name="shield-checkmark"></ion-icon>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">100% Terbukti dan terpercaya</h5>
                            <p class="card-text">
                                Sudah ribuan orang yang bergabung dikelas kami
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us Section End -->

    <!-- Testimonial Section -->
    <section id="testimonialSection">
        <div class="container">
            <h1>Testimonial</h1>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $nomor = 0;
                    while ($tdata = mysqli_fetch_array($qdata)) {
                        $nomor++;
                    ?>
                        <div class="swiper-slide">
                            <div class="testi-card card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $tdata['username_testi']; ?></h5>
                                    <p class="card-text">
                                        Masyaallah semenjak aku ikut private class Lozi banyak
                                        banget yang nawarin kerjasama,
                                        <br />dibimbing sama kak Lozi yang super sabar semoga makin
                                        suskses kedepannya..
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <a class="btn btn-success" href="index.php">Lihat Selengkapnya</a>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Footer -->
    <section id="myFooter">
        <div class="container">
            <footer class="py-3 mt-5">
                <p class="text-center footer-copyright">&copy; 2023 AlfinaWiwit</p>
            </footer>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 3,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 2,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    slidesPerGroup: 2,
                },
                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    slidesPerGroup: 1,
                },
            },
        });
    </script>
</body>

</html>