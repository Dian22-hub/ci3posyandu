<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Posyandu Desa Rambutan Masam</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets_home/lib/animate/animate.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets_home/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets_home/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets_home/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets_home/css/style.css') ?>" rel="stylesheet">
</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Spinner End -->


	<!-- Topbar Start -->
	<div class="container-fluid bg-dark px-5">
		<div class="row gx-4 d-none d-lg-flex">
			<div class="col-lg-6 text-start">
				<div class="h-100 d-inline-flex align-items-center py-3 me-4">
					<div class="btn-sm-square rounded-circle bg-primary me-2">
						<small class="fa fa-map-marker-alt text-white"></small>
					</div>
					<small>Jl Sudirman, Jakarta</small>
				</div>
				<div class="h-100 d-inline-flex align-items-center py-3">
					<div class="btn-sm-square rounded-circle bg-primary me-2">
						<small class="fa fa-envelope-open text-white"></small>
					</div>
					<small>posyandudesarambutanmasam@gmail.com</small>
				</div>
			</div>
			<div class="col-lg-6 text-end">
				<div class="h-100 d-inline-flex align-items-center py-3 me-4">
					<div class="btn-sm-square rounded-circle bg-primary me-2">
						<small class="fa fa-phone-alt text-white"></small>
					</div>
					<small>+628 9091 0000</small>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
		<a href="<?php echo base_url(); ?>" class="navbar-brand d-flex align-items-center">
			<h2 class="m-0 text-primary">Posyandu Desa Rambutan Masam</h2>
		</a>
		<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-4 py-lg-0">
				<a href="<?php echo base_url(); ?>" class="nav-item nav-link">Home</a>
				<!-- <a href="<?php echo base_url('home/profil'); ?>" class="nav-item nav-link">Profil</a>
                <a href="<?php echo base_url('home/kontak'); ?>" class="nav-item nav-link">Kontak</a> -->
				<a href="<?php echo base_url('login'); ?>" class="nav-item nav-link">Login</a>
			</div>

		</div>
	</nav>