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

    <!-- gaya CSS Files -->
    <link href="<?= base_url('assets'); ?>/gaya/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/swiper/swiper-bundle.min.css" rel="stylesheet">

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
                    <li><a href="#hero" class="active">Beranda</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="<?= base_url('assets'); ?>/img/banner/1.jpg" alt="">
                    <div class="carousel-container">
                        <h2>Selamat Datang di Satu Visi</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <!--<a href="#featured-services" class="btn-get-started">Get Started</a> -->
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="<?= base_url('assets'); ?>/img/banner/2.jpg" alt="">
                    <div class="carousel-container">
                        <h2>Masyarakat Sumba Yang Sejahterah</h2>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                        <!--<a href="#featured-services" class="btn-get-started">Get Started</a> -->
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="<?= base_url('assets'); ?>/img/banner/3.jpg" alt="">
                    <div class="carousel-container">
                        <h2>Kami Ada Untuk Membangun Sumba Lebih Baik</h2>
                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                        <!--<a href="#featured-services" class="btn-get-started">Get Started</a> -->
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Buat Laporan</h2>
                <p>Laporkan Aspirasi dan Keluhan Anda Disini</p>
            </div><!-- End Section Title -->

            <!-- Button buat laporan dengan gambar lebih gelap -->
            <div class="container my-5">
                <div class="custom-container p-4 bg-light rounded position-relative text-center"
                    style="background-image: url('https://scontent.fcgk3-2.fna.fbcdn.net/v/t39.30808-6/311740556_643096670523891_6351035672099807766_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=aa7b47&_nc_eui2=AeFvgBIPH7Ye0oqPAFyjNt-U1HQ0t5DkH0bUdDS3kOQfRvV2894ZLvP9HiMVg8WQOVXYp8NK4jYQ5d6HIYvoEImx&_nc_ohc=naqQSo8HsZ0Q7kNvgEHL-K_&_nc_zt=23&_nc_ht=scontent.fcgk3-2.fna&oh=00_AYD0uEp06pWHMt4TXBzgNkepsz9h4Hz_7QD9Mp3SdGMhyA&oe=66D36040'); 
                background-size: cover; 
                background-position: center; 
                filter: brightness(0.9);"> <!-- Brightness dikurangi untuk membuat gambar lebih gelap -->
                    <div class="overlay bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div> <!-- Overlay hitam semi-transparan -->
                    <div class="content position-relative z-3 text-white">
                        <p class="large-text">Layanan Aspirasi dan Pengaduan Masyarakat</p>
                        <a href="register" class="btn btn-custom btn-sm" style="background-color: #21d1f8; color: white;">Buat Laporan</a>
                    </div>
                </div>
            </div>



        </section><!-- /About Section -->


        </section><!-- /Stats Section -->

        <!-- Berita Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita</h2>
                <p>Update Berita Hari Ini :</p>
            </div><!-- End Section Title -->
            <div class="container mt-5">
                <div class="row g-4">
                    <?php foreach ($berita as $b) :
                    ?>
                        <div class="col-lg-4">
                            <div class="card">
                                <?php if (isset($b['gambar'])) : ?>
                                    <img src="<?= base_url('uploads/berita/' . $b['gambar']) ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <?php else : ?>
                                        <img src="<?= base_url('uploads/berita/default.jpg') ?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <h5 class="card-title"><?= $b['judul'] ?></h5>
                                    <?php if (isset($b['isi'])) : ?>
                                        <p class="card-text"><?= substr($b['isi'], 0, 100) ?>...</p>
                                    <?php else : ?>
                                        <p class="card-text">Belum ada deskripsi</p>
                                    <?php endif; ?>
                                    <?php if (isset($b['id'])) : ?>
                                        <a href="<?= base_url('berita/detail/' . $b['id']) ?>" class="btn btn-custom btn-sm">Lihat Detail</a>
                                    <?php else : ?>
                                        <a href="#" class="btn btn-custom btn-sm">Lihat Detail</a>
                                    <?php endif; ?>
                                    </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- /Services Section -->



        <!-- More Services Section -->
        <section id="more-services" class="more-services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Dokumentasi Kegiatan</h2>
                <p>Kegiatan Satu Visi Untuk Masyarakat :</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">
                    <?php foreach ($dokumentasi as $d) : ?>
                        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="<?= base_url('uploads/dokumentasi/' . $d['dokumen']) ?>" class="img-fluid" alt="">
                                <h3><?= $d['judul'] ?></h3>
                                <a href="<?= base_url('dokumentasi/detail/' . $d['id']) ?>" class="btn btn-custom btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- /More Services Section -->

        <!-- Sejarah Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Sejarah</h2>
                <p>Sejarah berdirinya Satu Visi</p>
            </div><!-- End Section Title -->

            <!-- Card Sejarah -->
            <div class="container">

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets'); ?>/img/banner/1.jpg" class="card-img-top" alt="Mesir Kuno">
                            <div class="card-body">
                                <h5 class="card-title">Mesir Kuno</h5>
                                <p class="card-text">Mesir Kuno dikenal dengan pencapaian arsitekturnya, termasuk Piramida Giza dan Sphinx yang menjadi simbol peradaban kuno.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets'); ?>/img/banner/2.jpg" class="card-img-top" alt="Kekaisaran Romawi">
                            <div class="card-body">
                                <h5 class="card-title">Kekaisaran Romawi</h5>
                                <p class="card-text">Kekaisaran Romawi adalah salah satu kekaisaran terbesar dan paling berpengaruh dalam sejarah dunia, mencakup sebagian besar Eropa, Asia, dan Afrika.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets'); ?>/img/banner/3.jpg" class="card-img-top" alt="Renaisans">
                            <div class="card-body">
                                <h5 class="card-title">Renaisans</h5>
                                <p class="card-text">Era Renaisans menandai kebangkitan kembali seni, sains, dan budaya Eropa setelah Abad Pertengahan, membawa perubahan besar dalam pemikiran dan kreativitas manusia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets'); ?>/img/banner/4.jpg" class="card-img-top" alt="Revolusi Industri">
                            <div class="card-body">
                                <h5 class="card-title">Revolusi Industri</h5>
                                <p class="card-text">Revolusi Industri mengubah cara produksi barang dari metode tradisional ke pabrik-pabrik modern, membawa kemajuan besar dalam teknologi dan ekonomi dunia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets'); ?>/img/banner/5.jpg" class="card-img-top" alt="Perang Dunia II">
                            <div class="card-body">
                                <h5 class="card-title">Perang Dunia II</h5>
                                <p class="card-text">Perang Dunia II adalah konflik global yang melibatkan banyak negara dan menyebabkan perubahan politik dan sosial besar-besaran di seluruh dunia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="<?= base_url('assets'); ?>/img/banner/6.jpg" class="card-img-top" alt="Pendaratan di Bulan">
                            <div class="card-body">
                                <h5 class="card-title">Pendaratan di Bulan</h5>
                                <p class="card-text">Pada tahun 1969, Neil Armstrong menjadi manusia pertama yang berjalan di Bulan, menandai pencapaian terbesar dalam eksplorasi luar angkasa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Pengurus Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengurus</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/a1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Rambu Yana</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/b2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/c3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Kami hadir untuk </span><strong>Masyarakat</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->


                        </div>

                    </div>
                </div>

            </div>

            <!-- Visi Misi Tampilan -->
            <div class="container mt-5">
                <div class="row">
                    <!-- Visi Section -->
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-center">Visi</h3>
                                <p class="card-text text-justify">
                                    Menjadi perusahaan terkemuka dalam inovasi teknologi yang memberikan dampak positif bagi masyarakat global dengan layanan dan produk yang unggul.
                                </p>
                                <p class="card-text text-justify">
                                    Menjadi perusahaan terkemuka dalam inovasi teknologi yang memberikan dampak positif bagi masyarakat global dengan layanan dan produk yang unggul.
                                </p>
                                <p class="card-text text-justify">
                                    Menjadi perusahaan terkemuka dalam inovasi teknologi yang memberikan dampak positif bagi masyarakat global dengan layanan dan produk yang unggul.
                                </p>
                                <p class="card-text text-justify">
                                    Menjadi perusahaan terkemuka dalam inovasi teknologi yang memberikan dampak positif bagi masyarakat global dengan layanan dan produk yang unggul.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi Section -->
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-center">Misi</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Mengembangkan produk teknologi berkualitas tinggi yang ramah lingkungan dan inovatif.</li>
                                    <li class="list-group-item">Memberikan layanan pelanggan terbaik yang berfokus pada kepuasan dan kebutuhan pengguna.</li>
                                    <li class="list-group-item">Membangun kerjasama yang kuat dengan berbagai pihak untuk menciptakan ekosistem bisnis yang berkelanjutan.</li>
                                    <li class="list-group-item">Menumbuhkan budaya kerja yang inklusif, dinamis, dan mendukung perkembangan setiap individu.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Silahkan hubungi kami</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Hubungi Kami</h3>
                                    <p>+1 5589 55488 55</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Kerja</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Judul" required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

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

    <!-- gaya JS Files -->
    <script src="<?= base_url('assets'); ?>/gaya/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/aos/aos.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets'); ?>/js/main.js"></script>

</body>

</html>