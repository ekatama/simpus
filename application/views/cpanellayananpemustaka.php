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
				<?php
          if(isset($_GET['pesan'])){
           	if($_GET['pesan'] == "sukses_update_kta"){
           		echo "<div class='alert alert-success'>Sukses ubah page Pembuatan KTA(Kartu Tanda Anggota).</div>";
			   }
			else if($_GET['pesan'] == "sukses_update_sirkulasi"){
				echo "<div class='alert alert-success'>Sukses ubah page Layanan Sirkulasi.</div>";
			}
			
           }
           ?>

					<div class="panel panel-headline">
						<div class="panel-body">
							
									<div class="col-md-4">
										<div class="panel">
											<div class="panel-heading">
												<h3 class="panel-title">Page Layanan Pemustaka</h3>
											</div>
										<div class="panel-body">
											<table class="table">
												<thead>
													<tr>
														<th>Menu</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Sirkulasi</td>
														<tr>
														<td>&nbsp &nbsp &nbsp &nbsp &nbsp - Peminjaman Buku</td>
														<td><a href="<?php echo site_url('admin/sirkulasi_edit/')?>"><button type="button" class="btn btn-default">Edit</button></a></td>
														</tr>
														<tr>
														<td>&nbsp &nbsp &nbsp &nbsp &nbsp - Pengembalian Buku</td>
														<td><a href="<?php echo site_url('admin/sirkulasi_edit/')?>"><button type="button" class="btn btn-default">Edit</button></a></td>
														</tr>
														<tr>
														<td>&nbsp &nbsp &nbsp &nbsp &nbsp - Perpanjangan Buku</td>
														<td><a href="<?php echo site_url('admin/sirkulasi_edit/')?>"><button type="button" class="btn btn-default">Edit</button></a></td>
														</tr>
													</tr>

													<tr>
														<td>Pembuatan KTA</td>
														<td><a href="<?php echo site_url('admin/pembuatankta_edit/')?>" class="btn btn-default">Edit</a></td>
													</tr>

													<tr>
														<td>Pembuatan Bebas Pustaka</td>
														<td><button type="button" class="btn btn-default">Edit</button></td>
													</tr>

													<tr>
														<td>Peminjaman Koleksi Referensi</td>
														<td><button type="button" class="btn btn-default">Edit</button></td>
													</tr>

													<tr>
														<td>Upload Repository</td>
														<td><button type="button" class="btn btn-default">Edit</button></td>
													</tr>
												</tbody>
											</table>
										</div>
										</div>
									</div>

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
