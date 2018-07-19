<?php
	$parent='layananpemustaka';
	$halaman='peminjamanreferensi';
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

					<div class="panel panel-headline">
						<div class="panel-body">
							<h4><p><b>Tata Cara Peminjaman Koleksi Referensi</b></p></h4>
							
								<p>1. Meninggalkan identitas diri (KTM/KTA/KTP)</p>
								<p>2. Mengisi formulir pinjaman referensi untuk keperluan fotokopi</p>
								<p>3. Buku yang dipinjam untuk keperluan fotokopi harus dikembalikan dihari yang sama dengan hari peminjaman. Apabila telat mengembalikan akan dikenakan denda sebesar Rp.1000/buku/hari</p>
							
							<br>
							<center><b><u>Flowchart</u></b></center>

							<center>
							<img src="<?php echo base_url('assets/assets/img/pembuatanbebaspustakan.png')?>">
							</center>
							<h5><i>Note : Untuk lebih jelas bisa segera mendatangi petugas bagian sirkulasi di perpustakaan pada jam operasional</i></h5>


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
