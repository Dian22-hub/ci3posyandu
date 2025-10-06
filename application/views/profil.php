<?php
$this->load->view('header');
?>
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Profil</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Profil</a></li>
            </ol>
        </nav>
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
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">Struktur Organisasi</h1>
        </div>
        <div class="row g-0 service-row">
            <img class="position-center img-fluid w-100 h-100" src="<?= base_url('assets_home/img/struktur.jpg') ?>" style="object-fit: cover;" alt="">
        </div>
    </div>
</div>
<?php
$this->load->view('footer');
?>