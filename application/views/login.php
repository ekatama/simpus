<!doctype html>
<html lang="en" class="fullscreen-bg">

<?php
include "head.php";
?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
                        <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "sukses"){
                                echo "<div class='alert alert-success'>Sukses menyimpan data. Harap segera melapor ke bagian .. untuk segera diaktifkan</div>";
                            }
                            else if($_GET['pesan'] == "gagal"){
                                echo "<div class='alert alert-danger'>Gagal login. Data yang anda masukkan tidak valid</div>";
                            }
                            else if($_GET['pesan'] == "logout"){
                                echo "<div class='alert alert-danger'>Terimakasih anda telah logout dari sistem</div>";
                            }
                            
                        }
                        ?>
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" method="post" action="<?php echo base_url(); ?>login/proses_login">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" name="username" class="form-control" id="signin-email" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
