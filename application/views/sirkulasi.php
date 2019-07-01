<?php
	$parent='layananpemustaka';
	$halaman='sirkulasi';
?>
<!doctype html>
<html lang="en">

<?php
include "head.php";
?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php
			include 'navbar.php';
		?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php
			include 'leftmenu.php';
		?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					


					<div class="row">
						<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Tata Cara Peminjaman Koleksi Buku</b></h3>
								</div>
								<div class="panel-body">
									
								<p>1. Meminjam secara mandiri melalui alat peminjaman yang berada di depan meja sirkulasi.</p>
								<p>2. Batas waktu pengembalian selama 7 hari setelah buku dipinjam.</p>
								<p>3. Jumlah buku yang dapat pinjam sebanyak 3 buku untuk mahasiswa S1, 5 buku untuk mahasiswa S2 dan S3.</p>
									
									<br>
							<center><b><u>Alur Peminjaman Buku</u></b></center>
							
							<center>
							<img src="<?php echo base_url('assets/assets/img/peminjaman.png')?>">
							</center>

								</div>
							</div>
							<!-- END PANEL DEFAULT -->
						</div>

						<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Tata Cara Pengembalian Koleksi Buku</b></h3>
								</div>
								<div class="panel-body">
									<p>1. Mengembalikan buku yang sudah dipinjam melalui alat <i>sort assistant</i> yang berada di meja sirkulasi.</p>
									<p>2. Memperlihatkan Kartu Tanda Anggota Perpustakaan kepada petugas untuk diperiksa.</p>
									<p>3. Apabila terlambat mengembalikan buku maka mahasiswa wajib membayar denda Rp. 500 perhari persatu buku yang dipinjam. </p>								
							
							<br>
							<center><b><u>Alur Pengembalian Buku</u></b></center>
							
							<center>
							<img src="<?php echo base_url('assets/assets/img/pengembalian.png')?>">
							</center>
								</div>
							</div>
							<!-- END PANEL DEFAULT -->
						</div>

						<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Tata Cara Perpanjangan Buku yang telah dipinjam</b></h3>
								</div>
								<div class="panel-body">
									<p>1. Mengembalikan buku yang sudah dipinjam melalui alat <i>sort assistant</i> yang berada di meja sirkulasi.</p>
									<p>2. Memperlihatkan Kartu Tanda Anggota Perpustakaan kepada petugas untuk diperiksa.</p>
									<p>3. Apabila terlambat mengembalikan buku maka mahasiswa wajib membayar denda Rp. 500 perhari persatu buku yang dipinjam.</p>
									<p>4. Melakukan peminjaman kembali secara mandiri dengan alat peminjaman yang berada di depan meja sirkulasi dengan batas waktu pengembalian selama 7 hari.</p>
							
							<br>
							<center><b><u>Alur Perpanjangan Buku</u></b></center>
							
							<center>
							<img src="<?php echo base_url('assets/assets/img/perpanjangan.png')?>">
							</center>
								</div>
							</div>
							<!-- END PANEL DEFAULT -->
						</div>

					</div>

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<?php
		include "footer.php";
		?>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo base_url('assets/assets/vendor/jquery/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets/scripts/klorofil-common.js')?>"></script>
</body>

</html>
