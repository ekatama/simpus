<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url(); ?>" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Layanan Pemustaka</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url(); ?>tatacara/sirkulasi" class="">Sirkulasi</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/pembuatankta" class="">Pembuatan KTA</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/pembuatanbebaspustaka" class="">Pembuatan Bebas Pustaka</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/peminjamanreferensi" class="">Peminjaman Koleksi Referensi</a></li>
									<li><a href="<?php echo base_url(); ?>tatacara/uploadrepository" class="">Upload Repository</a></li>
								</ul>
							</div>
						</li>

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

						<li><a href="<?php echo base_url(); ?>cek/cekdenda" class=""><i class="lnr lnr-enter"></i> <span>Cek Kartu</span></a></li>
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