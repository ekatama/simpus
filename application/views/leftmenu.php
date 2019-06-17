<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">

					<?php 
					
					if($this->session->userdata('userdata') == 'admin'):

					?>


					<?php else: ?>
					
					<li>
					<a <?php if($halaman == "dashboard") echo "class='active'"; ?> href="<?php echo base_url(); ?>">
					<i class="lnr lnr-home"></i> <span>Dashboard</span></a>
					</li>


					<li>
					
					<a <?php if($parent == "layananpemustaka") echo "class='active'"; ?> href="#subPages" data-toggle="collapse"><i class="lnr lnr-database"></i> <span>Layanan Pemustaka</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages" <?php if($parent == "layananpemustaka"): echo "class='collapse in'"; ?><?php elseif($parent != "layananpemustaka"): echo "class='collapse'"; ?><?php endif ?>>
						<ul class="nav">

						<li><a <?php if($halaman == "sirkulasi") echo "class='active'"; ?> href="<?php echo base_url(); ?>tatacara/sirkulasi">Sirkulasi</a></li>
						<li><a <?php if($halaman == "pembuatankta") echo "class='active'"; ?> href="<?php echo base_url(); ?>tatacara/pembuatankta">Pembuatan KTA</a></li>
						<li><a <?php if($halaman == "pembuatanbebaspustaka") echo "class='active'"; ?> href="<?php echo base_url(); ?>tatacara/pembuatanbebaspustaka">Pembuatan Bebas Pustaka</a></li>
						<li><a <?php if($halaman == "peminjamanreferensi") echo "class='active'"; ?> href="<?php echo base_url(); ?>tatacara/peminjamanreferensi">Peminjaman Koleksi Referensi</a></li>	
						<li><a <?php if($halaman == "uploadrepository") echo "class='active'"; ?> href="<?php echo base_url(); ?>tatacara/uploadrepository">Upload Repository</a></li>

						</ul>
					</div>

					</li>

					

					<?php endif ?>

					

						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-book"></i> <span>Profil Perpustakaan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url(); ?>profil/sekilas" class="">Sekilas dan Sejarah</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/pembuatanbebaspustaka" class="">Visi dan Misi</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/peminjamanreferensi" class="">Struktur Organisasi</a></li>
								</ul>
							</div>
						</li>

						<?php
							if($halaman=='cekdenda'){
						?>
						<li><a href="<?php echo base_url(); ?>cek/cekdenda" class="active"><i class="lnr lnr-enter"></i> <span>Cek Kartu</span></a></li>
						<?php
							}
							else {
						?>
							<li><a href="<?php echo base_url(); ?>cek/cekdenda" class=""><i class="lnr lnr-enter"></i> <span>Cek Kartu</span></a></li>
						<?php
							}
						?>
						<li>
							
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>CPanel</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url(); ?>admin/cpanellayananpemustaka" class="">Layanan Pemustaka</a></li>
									<li><a href="<?php echo base_url(); ?>admin/pembuatankta" class="">Profil Perpustakaan</a></li>
								</ul>
							</div>

						</li>

					</ul>
				</nav>
			</div>
</div>
