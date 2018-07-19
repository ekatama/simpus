<?php
	$parent='cekdenda';
	$halaman='cekdenda';
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
							<h4><p><b>Cek Keanggotaan Perpustakaan</b></p></h4>
							<p align="justify">
								<h5>
							&nbsp &nbsp &nbsp Cek keanggotan perpustakaan mahasiswa meliputi history buku yang dipinjam, denda yang belum terselesaikan, batas akhir pengembalian buku yang dipinjam, dan sebagainya dengan menekan tombol "Cek" di bawah ini.
						</h5>
						</p>


							<!-- Membuat Modal -->
							<div class="container">		
								<!-- <center><h1>Membuat Modal dengan Bootstrap | www.malasngoding.com</h1></center>
								<br/> -->
							<!-- Tombol untuk menampilkan modal-->
							<center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cek</button></center>
 			
							<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
									<div class="modal-dialog">
								<!-- konten modal-->
									<div class="modal-content">
										<!-- heading modal -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Cek Keanggotaan Perpustakaan</h4>
										</div>
								<!-- body modal -->
										<div class="modal-body">
											<p><b>Note: </b><br>
											Isi member id dengan NIM (Nomor Induk Mahasiswa) anda.

											<br>
											Isi password dengan 12345678. Setelah berhasil login harap segera mengganti password anda.
											</p>
											<a href="http://opac.ar-raniry.ac.id/index.php?p=member" target="_blank"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lanjutkan</button></a>
										</div>
										<span class="text-left"><i>* Apabila gagal saat login harap melapor ke email email@gmail.com</i></span>
								<!-- footer modal -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>

									</div>
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
