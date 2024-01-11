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


<style>
    .tombol_contact_us {
        position: fixed;
        right: 10px;
        bottom: 44px;
    }

    .tombol_contact_us img {
        height: 44px;
        width: auto;
    }
</style>


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
                    <li class="nav-item">
                        <a class="nav-link navs-active" aria-current="page" href="index.php">Home</a>
                    </li>
                   
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

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
                <div class="form-group row">
                    <div class="col-md-2">
                        <a class="btn btn-primary animate__animated animate__backInUp animate__delay-2s" href="admin/login1admin.php">Login Admin</a>
                    </div>

                    <div class="col-md-2">
                        <a class="btn btn-primary animate__animated animate__backInUp animate__delay-2s" href="peserta/loginpeserta.php">Login Peserta</a>
                    </div>

                    

                </div>
            </div>
    </section>
    <!-- Hero Section End -->

    <!-- Footer -->
    <section id="myFooter">
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    
                
                    <!-- <li class="nav-item">
              <a href="#" class="nav-link px-2 text-muted">About</a>
            </li> -->
                </ul>
                <p class="text-center footer-copyright">&copy; 2022 @alfinaww</p>
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
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
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