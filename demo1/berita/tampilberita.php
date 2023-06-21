<!DOCTYPE html>
<html>
<head>
<title>Desa Junrejo </title>

<!-- Favicons -->
    <link href="../../assets/img/logo.png" rel="icon">
    <link href="../../assets/img/logo.png" rel="apple-touch-icon">
    <!-- main css -->
<link href="../../main/css/main/main.css" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
<link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        background-color: #00b6a1;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    h1 {
        color : white;
    }

    .card {
        background-color: #fff;
        color: #333;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-subtitle {
        color: #666;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .card-text {
        color: #777;
        font-size: 16px;
        line-height: 1.5;
    }
</style>
</head>
<body>
    <!-- awal header II -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="http://localhost/desa-junrejo/" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt=""> 
            <h1>Desa Junrejo<span></span></h1>
        </a>
        <nav id="navbar" class="navbar">
        </nav>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <!-- akhir header II -->

    <div class="container mt-5">
        <h1>Berita Terbaru</h1>
    <div class="row">
        <?php
        // Include database connection file
        // include 'konek.php';

        include '../../konek.php';

        // Fetch berita from database
        $query = "SELECT * FROM beritafix ORDER BY tanggal DESC";
        $result = mysqli_query($konek, $query);

        // Check if there are berita available
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $judul = $row['judul'];
                $isi = $row['isi'];
                $tanggal = $row['tanggal'];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $judul; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Tanggal: <?php echo $tanggal; ?></h6>
                            <p class="card-text"><?php echo $isi; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p class="text-center">Tidak ada berita yang tersedia.</p>';
        }

        // Close database connection
        mysqli_close($konek);
        ?>
    </div>

</div>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>
</html>



