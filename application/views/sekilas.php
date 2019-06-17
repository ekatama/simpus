<?php
	$parent='profilperpustakaan';
	$halaman='sekilas';
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
							<h4><p><b>Sekilas tentang Perpustakaan UIN Ar-Raniry</b></p></h4>
							<p align="justify">
								<h5>
							&nbsp &nbsp &nbsp UPT. Perpustakaan UIN Ar-Raniry merupakan perpustakaan perguruan tinggi,
							menyediakan berbagai jasa layanan seperti sirkulasi, referensi, penelusuran, fotocopi,
							internet yang diharapkan dapat dimanfaatkan secara optimal oleh pemustaka.
							Untuk memanfaatkan berbagai jasa layanan tersebut pemustaka harus mengetahui terlebih
							dahulu bagaimana sistem dan prosedur memanfaatkan jasa perpustakaan.
						</h5>
						</p>

							<br>
							<h4><p><b>Sejarah Perpustakaan UIN Ar-Raniry</b></p></h4>
							<p align="justify">
								<h5>
							&nbsp &nbsp &nbsp Perpustakaan UIN Ar-Raniry merupakan perpustakaan perguruan tinggi yang didirikan tanggal 2 September 1960
							di Banda Aceh, didirikan Fakultas Syari`ah yang merupakan Fakultas cabang dari IAIN Sunan Kalijaga Yogyakarta
							dengan SK. Menteri Agama RI. No. 40 tahun 1960. Perpustakaan ini mulai menerapkan sistem infomasi berbasis
							teknologi informasi sejak 20 Februari 2006 yang diberi nama MySIMPUS dalam bentuk jaringan lokal atau
							 Local Area Network (LAN) merupakan program kerjasama IAIN Ar-Raniry dengan The Asia Foundation (TAF).
							 Program kerja sama ini resmi dimulai sejak ditanda tangani surat perjanjian kerja sama Letter of Agreement (LA)
							 antara pihak The Asia Foundation dan IAIN Ar-Raniry.
							Awal tahun 2014, Perpustakaan UIN Ar-Raniry mengalami pengembangan sistem informasi dari MySimpus yang
							merupakan hasil rancangan local (tenaga IT) beralih ke aplikasi yang disebut SLiMS
							(Senayan Library Management System) yang merupakan aplikasi OSS (Open Source System).
						</h5>
						</p>

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
