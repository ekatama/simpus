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

							<div class="col-md-3">
								<a href="http://library.ar-raniry.ac.id/formsurvei.php" target="_blank">
									<div class="metric">
										<span class="icon"><i class="fa fa-pencil"></i></span>
										<p>
								
											<span class="title">Survey Pemustaka</span>
										</p>
									</div>
								</a>
							</div>

							<div class="col-md-3">
								<a href="https://opac.ar-raniry.ac.id" target="_blank">
									<div class="metric">
										<span class="icon"><i class="fa fa-book"></i></span>
										<p>
											
											<span class="title">OPAC</span>
										</p>
									</div>
								</a>
							</div>

							<div class="col-md-3">
								<a href="https://repository.ar-raniry.ac.id" target="_blank">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
										
											<span class="title">Repository</span>
										</p>
									</div>
								</a>
							</div>

								<div class="col-md-3">
								<a href="http://onesearch.library.ar-raniry.ac.id/" target="_blank">
									<div class="metric">
										<span class="icon"><i class="fa fa-search"></i></span>
										<p>
											
											<span class="title">One Search</span>
										</p>
									</div>
								</a>
							</div>
							<br>


														<div id="map"></div>
													    <script>
													      function initMap() {
													        var uluru = {lat: 5.577837, lng: 95.367067};
													        var map = new google.maps.Map(document.getElementById('map'), {
													          zoom: 17,
													          center: uluru
													        });
													        var marker = new google.maps.Marker({
													          position: uluru,
													          map: map,
																		icon:
																		{
url: "<?php echo base_url(); ?>assets/assets/img/marker4.png",
scaledSize: new google.maps.Size(30, 50)

}
													        });

																	var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Perpustakaan UIN Ar-Raniry Banda Aceh</h1>'+
      '<div id="bodyContent">'+
      '<p><b>UPT Perpustakaan Ar-Raniry Banda Aceh</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';


																	var infowindow = new google.maps.InfoWindow({
  																		content: contentString
  																			});



																			marker.addListener('click', function() {
		    infowindow.open(map, marker);
		  });
}

													    </script>
													    <script async defer
													    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdMqFO9qEOQl-mlse7Od8MWh3WNnHb_As&callback=initMap">
													    </script>


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
