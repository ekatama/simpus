<?php
	$parent='admin';
	$halaman='cpanellayananpemustaka';
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
								<div class="panel-body">
								<h4><p><b>Form Edit Peminjaman Koleksi Buku</b></p></h4>
							<?php foreach($peminjaman as $pinjam) { ?>
								<form class="form-horizontal style-form" method="POST"  action="<?php echo base_url(); ?>admin/sirkulasi_edit_peminjaman_act">
									
									<br>
										<label>Header</label>
										<input class="form-control" name="judul_peminjaman" value="<?php echo $pinjam->judul_sirkulasi;?>" type="text">
									<br>
										<label>Deskripsi</label>
										<textarea class="form-control"  name="deskripsi_peminjaman" rows="10" id="comment"><?php echo $pinjam->deskripsi_sirkulasi ?></textarea>
										<br>	
										<center><input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary"></center>
									
								
									
								</form>
							<?php } ?>

								</div>
							</div>
							<!-- END PANEL DEFAULT -->
				</div>
				
				<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-body">
								<h4><p><b>Form Edit Pengembalian Koleksi Buku</b></p></h4>
							<?php foreach($pengembalian as $kembali) { ?>
								<form class="form-horizontal style-form" method="POST"  action="<?php echo base_url(); ?>admin/sirkulasi_edit_act">
									
									<br>
										<label>Header</label>
										<input class="form-control" name="judul_pengembalian" value="<?php echo $kembali->judul_sirkulasi;?>" type="text">
									<br>
										<label>Deskripsi</label>
										<textarea class="form-control"  name="deskripsi_pengembalian" rows="10" id="comment"><?php echo $kembali->deskripsi_sirkulasi ?></textarea>
										<br>	
										<center><input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary"></center>
									
								
									
								</form>
							<?php } ?>

								</div>
							</div>
							<!-- END PANEL DEFAULT -->
				</div>

				<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-body">
								<h4><p><b>Form Edit Peminjaman Koleksi Buku</b></p></h4>
							<?php foreach($perpanjangan as $panjang) { ?>
								<form class="form-horizontal style-form" method="POST"  action="<?php echo base_url(); ?>admin/sirkulasi_edit_act">
									
									<br>
										<label>Header</label>
										<input class="form-control" name="judul_perpanjangan" value="<?php echo $panjang->judul_sirkulasi;?>" type="text">
									<br>
										<label>Deskripsi</label>
										<textarea class="form-control"  name="deskripsi_perpanjangan" rows="10" id="comment"><?php echo $panjang->deskripsi_sirkulasi ?></textarea>
										<br>	
										<center><input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary"></center>
									
								
									
								</form>
							<?php } ?>

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
