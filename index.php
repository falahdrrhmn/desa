<?php
    session_start();
    include 'konek.php';
    $level = "pemohon";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Desa Junrejo</title>
    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="main/css/main/main.css" rel="stylesheet">
</head>
<!--/head-->

<body>
    
    <!-- awal header I-->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">junrejo@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span> +62 843 721 987 444</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
        </div>
    </section>
    <!-- akhir header I-->

    <!-- awal header II -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt=""> 
            <h1>Desa Junrejo<span></span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
            <!-- <li><a href="register.php">Buat Akun</a></li> -->
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">Profil Desa</a></li>
            <li><a href="#services">Prosedur</a></li>
            <!-- <li><a href="#agenda">Agenda</a></li> -->
            <!-- <li class="dropdown"><a href="layanan"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li><a href="/layanan/surat-ket-usaha">Surat Keterangan Usaha</a></li>
                <li><a href="/layanan/suratkettidakmampu">Surat Keterangan Tidak Mampu</a></li>
                <li><a href="#">Pembuatan KTP</a></li>
                </ul>
            </li> -->
            <li><a href="demo1\berita\tampilberita.php">Berita</a></li>
            <li><a href="berita">Lokasi</a></li>
            <li><a href="pegawai.php">Login Pegawai</a></li>
            
            <!-- <li><a href="logout">LogOut</a></li> -->
            </ul>
        </nav>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <!-- akhir header II -->
    
    <!-- awal main -->
    <section id="hero" class="hero">
        <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2>Selamat Datang di <span>Desa Junrejo</span></h2>
            <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="login.php" class="btn-get-started">Login</a>
                <a href="https://www.youtube.com/watch?v=1OX5S8B1ruU" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/bg/background.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
        </div>
    </section>
    <!-- akhir main -->
        
    <!-- ======= Profil Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="col-lg-12">
            <h3>Sejarah Berdirinya Desa Junrejo</h3>
            <img src="assets/img/bg/profil.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Dari hasil pelacakan sejarah oleh sesepuh dan tokoh masyarakat Desa Junrejo disebutkan bahwa asal-usul Desa kami yang bernama Desa Junrejo berasal dari kata “DYON– RETJO“ atau  “JUN WATU“. Dyon menurut bahasa jawa kuno artinya tempat air gentong, sehingga Dyion-Retjo atau Arca Dyion Watu bias bermakna tempat air dari batu.</p>
            <p>Konon menurut sumber informasi yang didapat dari cerita turun temurun, keberadaan JUN tersebut sejak abad IX atau Masa Kerajaan Tumapel/Singosari. Pada tahun 1914 M di Desa Junwatu ditemukan benda berupa ”JUN” dan di Desa Telogo rejo ditemukan ”TELOGO”(menurut masyarakat setempat disebut pula ”JEDING”dalam bahasa Jawa).</p>
            </div>

            <div class="row gy-4 mt-3">
            <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                <h3 class="fst-italic"> Visi</h3>
                <ul>
                    <li><i class="bi bi-check-circle-fill"></i>Desa Junrejo yang Maju artinya Desa yang memiliki sumberdaya manusia unggul, potensisosial, ekonomi dan ekologi, serta kemampuan mengelolanya untuk peningkatan kesejahteraan masyarakat Desa, kualitas hidup manusia, dan menanggulangi kemiskinan.</li>
                    <li><i class="bi bi-check-circle-fill"></i>Adapun yang dimaksud Transparan adalah Pemerintah Desa dalam pembuatan Kebijakan dan Pengelolaan keuangan dilakukan secara terbuka untuk diketahui oleh masyarakat, guna meningkatkan kepercayaan kepada Pemerintah Desa.</li>
                    <li><i class="bi bi-check-circle-fill"></i>Sedangkan yang dimaksud dengan Sejahtera adalah Mewujudkan masyarakat yang terpenuhi hak-hak dasarnya baik dari aspek kesehatan, pendidikan dan ekonomi yang ditandai dengan meningkatnya angka Indek Pembangunan Manusia (IPM) yang didukung dengan terwujudnya kebebasan kehidupan beragama dan bernegara yang ditunjukkan dengan penurunan angka kemiskinan dan jumlah keluarga Pra Sejahtera</li>
                </ul>
                
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content ps- ps-lg-5">
                <h3 class="fst-italic">Misi</h3>
                <ul>
                    <li><i class="bi bi-check-circle-fill"></i>Meningkatkan kualitas sumberdaya manusia yang unggul dan bermartabat</li>
                    <li><i class="bi bi-check-circle-fill"></i>Meningkatkan perekonomian Desa melalui penguatan Badan Usaha MilikDesa (BUMDes) dan pemberdayaan ekonomi masyarakat</li>
                    <li><i class="bi bi-check-circle-fill"></i>Meningkatkan infrastruktur dan utilitas desa, untuk mendukung tata lingkungan desa yang bersih, sehat dan indah</li>
                    <li><i class="bi bi-check-circle-fill"></i>Melestarikan dan mengembangkanbudayalokalDesaJunrejo</li>
                </ul>
                </div>
                
            </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    </main><!-- End #main -->

    <!-- awal prosedur -->
    <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Prosedur Permohonan Surat</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Login</h4>
                                <p>Pemohon Surat melakukan login, melalui halaman Login.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number2.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Menginput Data</h4>
                                <p>Input data pemohon dengan sebelumnya melakukan Login dengan username dan password.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number3.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mengajukan Surat Permohonan</h4>
                                <p>Setelah input data pemohon dengan lengkap dan benar, Pemohon memilih Surat yang mau direquest serta melengkapi data request, Kemudian Dikirim dan Menunggu persetujuan dari Lurah.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number4.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Permohonan Disetujui</h4>
                                <p>Permohonan di setujui oleh lurah, kemudian staf akan mencetak surat sesuai request surat yang diajukan, pemohon mengambil surat yang sudah dicetak dan bertandatangan di Kantor Kelurahan Wergu Wetan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir prosedur -->

    <!-- awal lokasi -->
    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">LOKASI</h2>
            </div>
        </div>
    </section>

    <section id="contact">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6177756555217!2d110.84666041431609!3d-6.816256968564331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4e731de9701%3A0xc9561da6c650e3c4!2sKantor%20Kelurahan%20Wergu%20Wetan!5e0!3m2!1sen!2sid!4v1639534764090!5m2!1sen!2sid"  width="100%" height="650px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" alt="lokasi kelurahan"></iframe>
        </div>
    </section>
    <!-- akhir lokasi -->
    
    <!-- awal footer -->
    <footer id="footer" class="footer">
        <div class="container">
        <div class="row gy-3">
            <div class="col-lg-5 col-md-12 footer-info">
            <a href="/.html" class="logo d-flex align-items-center">
                <span>Desa Junrejo</span>
            </a>
            <p>Junrejo adalah salah satu desa di Kecamatan Junrejo, Kota Batu. Berjarak kurang lebih 5 KM dari Kota Malang. Desa Junrejo dikenal sebagai salah satu desa yang subur dan beriklim sejuk di kawasan wisata Kota Batu. Desa ini juga terkenal dengan keindahan alamnya, seperti perbukitan dan persawahan yang mempesona.</p>
            <div class="social-links d-flex mt-4">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
            <div class="col-lg-3 col-6 footer-links">
            <h4>Jam Kerja</h4>
            <p>Bekerja 6 hari dalam seminggu, setiap hari, kecuali hari libur</p>
            <div class="row">
                <div class="col-6"><p class="text-start">Senin - Kamis</p></div>
                <div class="col-6"><p class="text-end">08:00 - 16:00</p></div>
            </div>
            <div class="row">
                <div class="col-6"><p class="text-start">Jumat</p></div>
                <div class="col-6"><p class="text-end">08:00 - 12:00</p></div>
            </div>
            <div class="row">
                <div class="col-6"><p class="text-start">Sabtu</p></div>
                <div class="col-6"><p class="text-end">08:00 - 16:00</p></div>
            </div>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
                Desa Junrejo Kecamatan Junrejo,<br>
                Kota Batu, Provinsi Jawa Timur<br>
                Kode Pos 65321  <br><br>
                <strong>Phone:</strong> +62 843 721 987 444<br>
                <strong>Email:</strong> junrejo@gmail.com.com<br>
            </p>
            </div>

        </div>
        </div>

        <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Junrejo</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://www.instagram.com/gugunzsrgr/">Abd. Ghony Imron</a>
        </div>
        </div>

    </footer>
    <!-- akhir footer -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>