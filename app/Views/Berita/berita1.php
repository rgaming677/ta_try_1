<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SATU VISI</title>
    <Link rel="shortcut icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url('assets'); ?>/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url('assets'); ?>/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Shuffle
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="<?= base_url('assets'); ?>/img/logo.png" alt=""> -->
                <div class="col-auto">
                    <img src="<?= base_url('assets'); ?>/img/satuvisi.jpg" alt="Logo" class="logo">
                </div>
                <h1 class="sitename">SATU VISI </h1>

            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">Buat Laporan</a></li>
                    <li><a href="#services">Berita</a></li>
                    <li><a href="#portfolio">Sejarah</a></li>
                    <li><a href="#team">Pengurus</a></li>

                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Halaman Berita</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .navbar {
                    background-color: #1bbca3;
                }

                .navbar-brand,
                .nav-link {
                    color: #fff !important;
                }

                .news-card img {
                    height: 200px;
                    object-fit: cover;
                }

                footer {
                    background-color: #1bbca3;
                    color: white;
                    padding: 20px 0;
                    margin-top: 40px;
                }
            </style>
        </head>

        <body>



            <!-- Content -->
            <div class="container mt-5">
                <div class="row">
                    <!-- News Articles -->
                    <div class="col-md-8">
                        <h2 class="mb-4">Berita Terbaru</h2>

                        <!-- News Article -->
                        <div class="card mb-4 news-card">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title">Judul Berita Pertama</h5>
                                <p class="card-text">Deskripsi singkat dari berita pertama. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo lectus nec ligula tincidunt sollicitudin.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <!-- News Article -->
                        <div class="card mb-4 news-card">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title">Judul Berita Kedua</h5>
                                <p class="card-text">Deskripsi singkat dari berita kedua. Praesent pharetra lacus sit amet est varius, ac consequat nulla efficitur.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <!-- News Article -->
                        <div class="card mb-4 news-card">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title">Judul Berita Ketiga</h5>
                                <p class="card-text">Deskripsi singkat dari berita ketiga. Nulla facilisi. Suspendisse potenti. Aliquam erat volutpat.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">
                        <h4 class="mb-4">Kategori</h4>
                        <ul class="list-group mb-4">
                            <li class="list-group-item">Politik</li>
                            <li class="list-group-item">Ekonomi</li>
                            <li class="list-group-item">Olahraga</li>
                            <li class="list-group-item">Teknologi</li>
                            <li class="list-group-item">Hiburan</li>
                        </ul>

                        <h4 class="mb-4">Berita Populer</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Berita Populer 1</li>
                            <li class="list-group-item">Berita Populer 2</li>
                            <li class="list-group-item">Berita Populer 3</li>
                            <li class="list-group-item">Berita Populer 4</li>
                        </ul>
                    </div>
                </div>
            </div>



        </html>


        <footer id="footer" class="footer dark-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">SATU VISI</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p>United States</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Satu Visi</strong> </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Dibuat oleh <a href="https://bootstrapmade.com/">SATU VISI</a>
                </div>
            </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/php-email-form/validate.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/aos/aos.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Main JS File -->
        <script src="<?= base_url('assets'); ?>/js/main.js"></script>

</body>

</html>