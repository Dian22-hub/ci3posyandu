<?php
$this->load->view('header');
?>
<div class="container-fluid p-0 pb-5">
	<div class="owl-carousel header-carousel position-relative">
		<div class="owl-carousel-item position-relative">
			<img class="img-fluid" style="height:800px;object-fit:cover" src="<?= base_url('assets_home/img/bgatas.jpg') ?>" alt="">
			<div class="carousel-inner">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12 text-center">
							<h1 class="display-3 text-white animated slideInDown mb-4">Selamat Datang Di <br>Website Posyandu Desa Rambutan Masam</h1>
							<a href="<?php echo base_url('login'); ?>" class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Login</a>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-carousel-item position-relative">
			<img class="img-fluid" style="height:800px;object-fit:cover" src="<?= base_url('assets_home/img/bgatas2.jpg') ?>" alt="">
			<div class="carousel-inner">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-8 text-center">
							<h1 class="display-3 text-white animated slideInDown mb-4">Selamat Datang Di <br>Website Posyandu Desa Rambutan Masam</h1>
							<a href="<?php echo base_url('login/login'); ?>" class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-4">
			<div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
				<div class="h-100 bg-dark p-4 p-xl-5">
					<div class="d-flex align-items-center justify-content-center mb-4">
						<div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #84fa96;">
							<img class="img-fluid" style="height:70px;object-fit:cover" src="<?= base_url('assets_home/img/toga.png') ?>" alt="Icon">
						</div>
					</div>
					<h5 class="text-white text-center">Meningkatkan Kualitas Cakupan Layanan Pendidikan</h5>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
				<div class="h-100 bg-dark p-4 p-xl-5">
					<div class="d-flex align-items-center justify-content-center mb-4">
						<div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #84fa96;">
							<img class="img-fluid" style="height:60px;object-fit:cover" src="<?= base_url('assets_home/img/hospital.png') ?>" alt="Icon">
						</div>
					</div>
					<h5 class="text-white text-center">Mengoptimalkan Pelayanan Kesahatan</h5>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
				<div class="h-100 bg-dark p-4 p-xl-5">
					<div class="d-flex align-items-center justify-content-center mb-4">
						<div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #84fa96;">
							<img class="img-fluid" style="height:60px;object-fit:cover" src="<?= base_url('assets_home/img/user.png') ?>" alt="Icon">
						</div>
					</div>
					<h5 class="text-white text-center">Meningkatkan Kesejahteraan Sosial Masyarakat</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
	<div class="container about px-lg-0">
		<div class="row g-0 mx-lg-0">
			<div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
				<div class="position-relative h-100">
					<img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('assets_home/img/bgtengah.jpg') ?>" style="object-fit: cover;" alt="">
				</div>
			</div>
			<div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
				<div class="p-lg-5 pe-lg-0">
					<div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
					<h1 class="display-5 mb-4">Tentang Kami</h1>
					<p class="mb-4 pb-2">Posyandu merupakan salah satu bentuk Upaya Kesehatan Berbasis Masyarakat (UKBM) yang dikelola dan diselenggarakan dari, oleh, untuk dan bersama masyarakat dalam penyelenggaraan pembangunan.</p>
					<div class="row g-4 mb-4 pb-3">
						<div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
							<div class="d-flex align-items-center">
								<div class="ms-4">
									<h2 class="mb-1">Visi</h2>
									<p class="fw-medium text-primary mb-0">Memberdayakan potensi masyarakat sejahtera dan memanfaatkan sumber daya yang ada disekitar untuk menciptakan kondisi hubungan/silaturahmi yang harmonis dan sinerg</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 wow fadeIn" data-wow-delay="0.3s">
							<div class="d-flex align-items-center">
								<div class="ms-4">
									<h2 class="mb-1">Misi</h2>
									<p class="fw-medium text-primary mb-0">Membantu kelompok masyarakat prasejahtera melalui upaya pemberdayaan masyarakat mampu dan menumbuhkan serta mengembangkan silaturahmi antara masyarakat sejahtera dengan masyarakat prasejahtera melalui pelaksanaan program dan kegiatan kegiatan yang bermanfaat.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url('home/profil'); ?>" class="btn btn-primary rounded-pill py-3 px-5">Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center">
			<div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
			<h1 class="display-5 mb-5">Layanan Portal Posyandu</h1>
		</div>
		<div class="row g-0 service-row">
			<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
				<div class="service-item border h-100 p-5">
					<div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
						<img class="img-fluid" style="height:60px;object-fit:cover" src="<?= base_url('assets_home/img/ico4.jpg') ?>" alt="Icon">
					</div>
					<h4 class="mb-3">Lokasi Posyandu Disekitar</h4>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
				<div class="service-item border h-100 p-5">
					<div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
						<img class="img-fluid" style="height:60px;object-fit:cover" src="<?= base_url('assets_home/img/ico3.png') ?>" alt="Icon">
					</div>
					<h4 class="mb-3">Kegiatan Posyandu Disekitar</h4>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
				<div class="service-item border h-100 p-5">
					<div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
						<img class="img-fluid" style="height:60px;object-fit:cover" src="<?= base_url('assets_home/img/ico2.png') ?>" alt="Icon">
					</div>
					<h4 class="mb-3">Pemeriksaan
						Bayi dan Balita</h4>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
				<div class="service-item border h-100 p-5">
					<div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
						<img class="img-fluid" style="height:60px;object-fit:cover" src="<?= base_url('assets_home/img/ico1.png') ?>" alt="Icon">
					</div>
					<h4 class="mb-3">Pemeriksaan
						Ibu Hamil dan Nifas</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
	<div class="container feature px-lg-0">
		<div class="row g-0 mx-lg-0">
			<div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
				<div class="p-lg-5 ps-lg-0">
					<div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
					<h1 class="display-5 mb-5">Manfaat Posyandu</h1>
					<p class="mb-2 pb-2">Perbaikan perilaku, keadaan gizi dan kesehatan keluarga.</p>
					<p class="mb-2 pb-2">Mendukung perilaku hidup bersih dan sehat.</p>
					<p class="mb-2 pb-2">Pencegahan penyakit yang berbasis lingkungan.</p>
					<p class="mb-2 pb-2">Pencegahan penyakit dengan imunisasi.</p>
					<p class="mb-2 pb-2">Mendukung pelayanan Keluarga Berencana.</p>
					<p class="mb-2 pb-2">Mendukung pemberdayaan keluarga dan masyarakat.</p>
				</div>
			</div>
			<div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
				<div class="position-relative h-100">
					<img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('assets_home/img/bgbawah.jpg') ?>" style="object-fit: cover;" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="team-item">
					<div class="overflow-hidden position-relative">
						<img class="img-fluid" style="height:300px;object-fit:cover" src="<?= base_url('assets_home/img/kg1.jpg') ?>" alt="">
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Suntik Campak</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="team-item">
					<div class="overflow-hidden position-relative">
						<img class="img-fluid" style="height:300px;object-fit:cover" src="<?= base_url('assets_home/img/kg2.jpeg') ?>" alt="">
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Program Kesehatan Bayi</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="team-item">
					<div class="overflow-hidden position-relative">
						<img class="img-fluid" style="height:300px;object-fit:cover" src="<?= base_url('assets_home/img/kg3.jpeg') ?>" alt="">
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Pemantauan Gizi</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<?php
$this->load->view('footer');
?>