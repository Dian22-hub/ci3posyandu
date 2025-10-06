<?php
$current_controller = $this->router->fetch_class();
$current_method = $this->router->fetch_method();

function is_active($controller_name, $current_controller)
{
	return ($current_controller == $controller_name) ? 'active' : '';
}

function is_open($controllers_in_group, $current_controller)
{
	foreach ($controllers_in_group as $controller) {
		if ($current_controller == $controller) {
			return 'open active';
		}
	}
	return '';
}
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="<?= base_url('dashboard/petugas'); ?>" class="app-brand-link">
			<!-- Pastikan tidak ada text-transform: lowercase; pada kelas app-brand-text di CSS Anda -->
			<span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: none !important;">E -
				Posyandu</span>
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		<!-- Dashboard -->
		<li class="menu-item <?= is_active('dashboard', $current_controller); ?>">
			<a href="<?= base_url('dashboard/petugas') ?>" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Dashboard">Dashboard</div>
			</a>
		</li>

		<?php if ($this->session->userdata('level_id') == '1') : // Admin 
		?>
			<li class="menu-item <?= is_active('ibu', $current_controller); ?>">
				<a href="<?= base_url('ibu') ?>" class="menu-link">
					<i class="menu-icon tf-icons bx bx-female"></i>
					<div data-i18n="Data Ibu"> Ibu</div>
				</a>
			</li>
			<li class="menu-item <?= is_active('anak', $current_controller); ?>">
				<a href="<?= base_url('anak') ?>" class="menu-link">
					<i class="menu-icon tf-icons bx bx-male"></i>
					<div data-i18n="Data Anak"> Anak</div>
				</a>
			</li>
			<li class="menu-item <?= is_active('petugas', $current_controller); ?>">
				<a href="<?= base_url('petugas') ?>" class="menu-link">
					<i class="menu-icon tf-icons bx bx-group"></i>
					<div data-i18n="Data Petugas"> Petugas</div>
				</a>
			</li>
			<li class="menu-item <?= is_active('bidan', $current_controller); ?>">
				<a href="<?= base_url('bidan') ?>" class="menu-link">
					<i class="menu-icon tf-icons bx bx-user"></i>
					<div data-i18n="Data Bidan"> Bidan</div>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($this->session->userdata('level_id') != '3') :  ?>

			<li class="menu-item <?= is_open(['penimbangan_anak', 'imunisasi_anak'], $current_controller); ?>">
				<a href="javascript:void(0);" class="menu-link menu-toggle">
					<i class="menu-icon tf-icons bx bx-pulse"></i> <!-- Icon untuk Layanan -->
					<div data-i18n="Layanan">Layanan</div>
				</a>
				<ul class="menu-sub">
					<li class="menu-item <?= is_active('perkembangan_anak', $current_controller); ?>">
						<a href="<?= base_url('perkembangan_anak/index') ?>" class="menu-link">
							<div data-i18n="Perkembangan Anak">Perkembangan Anak</div>
						</a>
					</li>
					<li class="menu-item <?= is_active('penimbangan_anak', $current_controller); ?>">
						<a href="<?= base_url('penimbangan_anak/index') ?>" class="menu-link">
							<div data-i18n="Penimbangan Anak">Penimbangan Anak</div>
						</a>
					</li>
					<li class="menu-item <?= is_active('imunisasi_anak', $current_controller); ?>">
						<a href="<?= base_url('imunisasi_anak/index') ?>" class="menu-link">
							<div data-i18n="Imunisasi Anak">Imunisasi Anak</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="menu-item <?= is_active('laporan_anak', $current_controller); ?>">
				<a href="<?= base_url('laporan_anak/index') ?>" class="menu-link">
					<i class="menu-icon tf-icons bx bx-file-blank"></i>
					<div data-i18n="Laporan Anak">Laporan Anak</div>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($this->session->userdata('level_id') == '3') : // Ibu 
		?>
			<li class="menu-header small text-uppercase">
				<span class="menu-header-text">Layanan Saya</span>
			</li>
			<li class="menu-item <?= is_active('laporan_anak', $current_controller); ?>">
				<a href="<?= base_url('laporan_anak/index') ?>" class="menu-link">
					<i class="menu-icon tf-icons bx bx-history"></i>
					<div data-i18n="Riwayat Pengecekan Anak">Riwayat Pengecekan Anak</div>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</aside>
<!-- / Menu -->