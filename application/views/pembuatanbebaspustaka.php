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
							<h4><p><b>Tata Cara Pembuatan Surat Bebas Pustaka</b></p></h4>
							<p>1. Mengembalikan semua buku/kitab milik perpustakaan</p>
							<p>2. Melunasi denda serta menggantikan buku/kitab yang hilang, bila ada</p>
							<p>3. Mengembalikan semua Kartu Tanda Anggota (KTA), apabila KTA hilang maka pemustaka harus membayar denda sebesar Rp.1000</p>
							<p>4. Menyerahkan biaya administrasi sebesar Rp.5000</p>

							
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
