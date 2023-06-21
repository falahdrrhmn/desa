<!DOCTYPE html>
<html>
<head>
    <title>Desa XYZ - Berita Terbaru</title>
    <!-- main css -->
    <link href="../../main/css/main/main.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>
    <h1>Berita Terbaru</h1>

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

            echo '<h2>' . $judul . '</h2>';
            echo '<p>Tanggal: ' . $tanggal . '</p>';
            echo '<p>' . $isi . '</p>';
            echo '<hr>';
            ?>
            

            <?php
        }
    } else {
        echo '<p>Tidak ada berita yang tersedia.</p>';
    }

    // Close database connection
    mysqli_close($konek);
    ?>

</body>
</html>