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

					<div class="panel panel-headline">
						<div class="panel-body">
							<h4><p><b>Form Edit Sirkulasi</b></p></h4>
							<?php foreach($sirkulasi as $m) { ?>
								<form class="form-horizontal style-form" method="POST"  action="<?php echo base_url(); ?>admin/pembuatankta_edit_act">
									<div class="col-md-4">
									<br>
										<label>Header</label>
										<input class="form-control" name="judul_pembuatankta" value="<?php echo $m->judul_pembuatankta;?>" type="text">
									<br>
										<label>Deskripsi</label>
										<textarea class="form-control"  name="deskripsi_pembuatankta" rows="10" id="comment"><?php echo $m->deskripsi_pembuatankta ?></textarea>
										<br>	
										<center><input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary"></center>
									
									</div>
									
								</form>
							<?php } ?>

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
