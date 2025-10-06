<?php
$this->load->view('header');
?>
<div class="container-fluid page-header py-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Kontak</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Kontak</a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-fluid bg-light overflow-hidden px-lg-0">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Kontak Kami</h1>
                    </div>
                    <img style="height:30px;object-fit:cover;padding-right:5%" src="<?= base_url('assets_home/img/ico4.jpg') ?>">Jl Sudirman, Jakarta.
                    <br><br>
                    <img style="height:35px;object-fit:cover;padding-right:5%" src="<?= base_url('assets_home/img/tele.png') ?>">+628 9091 0000
                    <br><br>
                    <img style="height:35px;object-fit:cover;padding-right:5%" src="<?= base_url('assets_home/img/mail.png') ?>">posyandumutiara@gmail.com
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126927.20373368931!2d106.64435274335939!3d-6.200879199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f71d2b0298e3%3A0x28c0bb32a6e51cfe!2sPosyandu%20mutiara!5e0!3m2!1sid!2sid!4v1684487270245!5m2!1sid!2sid" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('footer');
?>