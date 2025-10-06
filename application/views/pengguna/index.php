
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
          <?php foreach ($ibu as $i) { ?>
            <h1 style="color:#ffaab5;">Selamat Datang, <?= $i['nama_ibu']; ?> !</h1>
              <h1>Data Imunisasi dan Vaksinasi Anak</h1>
            <h2>DIVA adalah tempat catat imunisasi anak, agar datanya rapi dan mudah dicek kapan saja</h2>
            
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="<?= base_url(''); ?>assets/Appland/assets/img/hero-img2.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
  <!-- ======= Gallery Section ======= -->
  </div><!-- End Page Title -->
  <section id="profile" class="profile">
      <div class="container">

        <div class="section-title">
          <h2>Profil Ibu dan Anak</h2>
  <div class="row content">
  <section class="section profile">
    <div class="row">
      <div class="col-xl-4 mr-2">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          
          <img src="<?= base_url('assets/img/') . $i['image']; ?>" class="rounded-circle" alt="" height="150" width = "150">
            <h2><?= $i['nama_ibu']; ?></h2>
            <h3>Orang Tua</h3>
            
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil Ibu</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-anak">Profil Anak</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h4>Profile Ibu</h4>

                
  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
    <div class="col-md-8 col-lg-9 text-align: left;">
      <input disabled name="fullName" type="text" class="form-control" id="fullName" value="<?= $i['nama_ibu']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">NIK</label>
    <div class="col-md-8 col-lg-9">
      <input disabled name="job" type="text" class="form-control" id="Job" value="<?= $i['NIK']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Posisi</label>
    <div class="col-md-8 col-lg-9">
      <input disabled name="job" type="text" class="form-control" id="Job" value="Orang Tua">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Email" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
    <div class="col-md-8 col-lg-9">
      <input disabled name="email" type="email" class="form-control" id="Email" value="<?= $i['no_tlp']; ?>">
    </div>
    <?php } ?>
  </div>
</div>
<div class="tab-pane fade profile-edit pt-3" id="profile-anak">
                <?php foreach ($anak as $a) { ?>
                              <h4>Profile Anak</h4>
                
                              <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                <div class="col-md-8 col-lg-9">
                                  <input disabled name="phone" type="text" class="form-control" id="Phone" value="<?= $a['nama_anak']; ?> ">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                <div class="col-md-8 col-lg-9">
                                  <input disabled name="phone" type="text" class="form-control" id="Phone" value="<?= $a['NIK']; ?>">
                                </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                  <div class="col-md-8 col-lg-9">
                                    <input disabled name="phone" type="text" class="form-control" id="Phone" value="<?= $a['tgl_lahir']; ?>">
                                  </div>
                </div>  
                <?php } ?>


</div>

<div class="tab-pane fade pt-3" id="profile-settings">

<!-- Settings Form -->
<form>


  <div class="text-center">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form><!-- End settings Form -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
</section>        
    <!-- ======= App Features Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Berikut adalah kontak yang bisa anda hubungi</p>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bx bx-map"></i>
                <h4>Alamat</h4>
                <p>Dusun Krajan RT 04 RW 01<br>Ds. Sukamaju, Kec. Sukasari<br> Sukasari, Kab. Subang</p>
              </div>
              <div class="col-lg-4 info">
                <i class="bx bx-phone"></i>
                <h4>Nomor Telepon</h4>
                <p>+62 853 2244 3510<br>Bidan Yen Yen Rosiana Santika</p>
              </div>
              <div class="col-lg-4 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>cs.sidiva@gmail.com<br>
              </div>

            </div>
          </div>
    </section><!-- End App Features Section -->

   
  </main><!-- End #main -->

 
