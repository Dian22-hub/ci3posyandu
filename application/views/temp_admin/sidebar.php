<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

		<li class="nav-item">
			<a class="nav-link " href="<?= base_url('kader'); ?>">
				<i class="bi bi-grid"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
				<i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
				<li>
					<a href="<?= base_url('data_anak'); ?>">
						<i class="bi bi-circle"></i><span>Data Anak</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('data_ibu'); ?>">
						<i class="bi bi-circle"></i><span>Data Ibu</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('data_vaksin'); ?>">
						<i class="bi bi-circle"></i><span>Data Layanan</span>
					</a>
				</li>
				<li><a href="<?= base_url('data_imunisasi'); ?>">
						<i class="bi bi-circle"></i><span>Data Imunisasi</span>
					</a>
				</li>
				<?php if (get_session('role_id') == 3) : ?>
					<li>
						<a href="<?= base_url('data_petugas'); ?>">
							<i class="bi bi-circle"></i><span>Daftar Petugas</span>
						</a>
					</li>
				<?php endif ?>
		</li>
	</ul>
	</li><!-- End Components Nav -->


	<li class="nav-item">
		<a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
			<i class="bi bi-layout-text-window-reverse"></i><span>Riwayat</span><i class="bi bi-chevron-down ms-auto"></i>
		</a>
		<ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
			<li>
				<a href="<?= base_url('riwayat/ukur'); ?>">
					<i class="bi bi-circle"></i><span>Riwayat Penimbangan Anak</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('riwayat/vaksin'); ?>">
					<i class="bi bi-circle"></i><span>Riwayat Vaksinasi Anak</span>
				</a>
			</li>
		</ul>
	<li class="nav-item">
		<a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
			<i class="bi bi-file-earmark"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
		</a>
		<ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
			<li>
				<a href="<?= base_url('Laporanposyandu/lap_imunisasi'); ?>">
					<i class="bi bi-circle"></i><span>Laporan Imunisasi</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Laporanposyandu/lap_ibu'); ?>">
					<i class="bi bi-circle"></i><span>Laporan Register Ibu</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('Laporanposyandu/lap_anak'); ?>">
					<i class="bi bi-circle"></i><span>Laporan Register Anak</span>
				</a>
			</li>
	</li>
	</ul>
	</li>
	</li><!-- End Tables Nav -->

	<!--       
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Laporan</span>
              </a>
            </li> -->
	<!-- End Blank Page Nav -->


	<!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> -->

	</ul>

</aside>
<!-- End Sidebar-->
