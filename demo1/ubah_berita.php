<!-- <?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM berita WHERE id='$id'";
        $query = mysqli_query($konek,$sql);
        $data=mysqli_fetch_array($query,MYSQLI_BOTH);

        $judul = $data['judul'];
        $isi = $data['isi'];
        $tanggal = $data['tanggal'];
		// $jekel = $data['jekel'];
		// $tempat = $data['tempat_lahir'];
		// $tanggal = $data['tanggal_lahir'];
		// $alamat = $data['alamat'];
		// $status_warga = $data['status_warga'];
		// $hak_akses = $data['hak_akses'];
    }
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM UBAH USER</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>NIK</label>
													<input type="text" readonly="" name="nik" value="<?php echo $judul;?>" class="form-control" autofocus>
												</div>
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama" class="form-control" value="<?php echo $isi;?>" placeholder="Nama..">
												</div>
                                                
												<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tempat" class="form-control" value="<?php echo $tanggal;?>" placeholder="Tempat Lahir.." >
												
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success btn-sm">Ubah</button>
									<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
	

    $sql = "UPDATE berita SET
    judul='$judul',
    isi='$isi',
	tanggal='$tanggal' WHERE id='$id'";
    $query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_user">';
	  }
}
?> -->

<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tampil_id = "SELECT * FROM berita WHERE id=$id";
		$query = mysqli_query($konek,$tampil_id);
		$data = mysqli_fetch_array($query,MYSQLI_BOTH);
		
        $id = $data['id'];
		$judul = $data['judul'];
		$isi = $data['isi'];
		$tanggal = $data['tanggal'];
		// $jekel = $data['jekel'];
		// $agama = $data['agama'];
		// $alamat = $data['alamat'];
		// $telepon = $data['telepon'];
		// $status_warga = $data['status_warga'];
	}
	
?>

<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH BERITA</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>ID</label>
													<input type="number" name="id" class="form-control" placeholder="id" value="<?= $id;?>" readonly>
												</div>
												<div class="form-group">
													<label>Judul</label>
													<input type="text" name="Judul Berita" class="form-control" placeholder="Judul Berita.." value="<?= $judul;?>">
												</div>
                                                <div class="form-group">
													<label>Isi</label>
													<input type="text" name="Isi Berita" class="form-control" placeholder="Isi Berita.." value="<?= $isi;?>">
												</div>

												<div class="form-group">
													<label>Tanggal</label>
													<input type="date" name="tgl" class="form-control" value="<?= $tanggal;?>">
												</div>
												
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success">Ubah</button>
									<a href="?halaman=beranda" class="btn btn-default">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tanggal = $_POST['tanggal'];
	// $jekel = $_POST['jekel'];
	// $agama = $_POST['agama'];
	// $alamat = $_POST['alamat'];
	// $status_warga = $_POST['status_warga'];
	// $password = $_POST['password'];
	// $hak_akses = $_POST['hak_akses'];

	$sql = "UPDATE berita SET
	judul='$judul',
	isi='$isi',
    tanggal='$tanggal'
    WHERE id=$id";
	$query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_user">';
	  }
}
	
?>