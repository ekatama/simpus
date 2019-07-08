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


					

					<li>
						
					<a <?php if($parent == "profilperpustakaan") echo "class='active'"; ?> href="#subPages2" data-toggle="collapse"><i class="lnr lnr-book"></i> <span>Profil Perpustakaan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" <?php if($parent == "profilperpustakaan"): echo "class='collapse in'"; ?><?php elseif($parent != "profilperpustakaan"): echo "class='collapse'"; ?><?php endif ?>>
								<ul class="nav">
									<li><a <?php if($halaman == "sekilas") echo "class='active'"; ?> href="<?php echo base_url(); ?>profil/sekilas">Sekilas dan Sejarah</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/pembuatanbebaspustaka" class="">Visi dan Misi</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/peminjamanreferensi" class="">Struktur Organisasi</a></li>
								</ul>
							</div>
					</li>


					<li><a <?php if($halaman == "cekdenda") echo "class='active'"; ?> href="<?php echo base_url(); ?>cek/cekdenda"><i class="lnr lnr-enter"></i> <span>Cek Kartu</span></a></li>
						

						
						<li>
							
					<a <?php if($parent == "admin") echo "class='active'"; ?> href="#subPages3" data-toggle="collapse"><i class="lnr lnr-cog"></i> <span>CPanel</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" <?php if($parent == "admin"): echo "class='collapse in'"; ?><?php elseif($parent != "admin"): echo "class='collapse'"; ?><?php endif ?>>
								<ul class="nav">
									<li><a <?php if($halaman == "cpanellayananpemustaka") echo "class='active'"; ?> href="<?php echo base_url(); ?>admin/cpanellayananpemustaka">Layanan Pemustaka</a></li>
									<li><a href="<?php echo base_url(); ?>admin/pembuatankta" class="">Profil Perpustakaan</a></li>
									<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
								</ul>
							</div>

						</li>

						<?php endif ?>

					</ul>
				</nav>
			</div>
</div>
