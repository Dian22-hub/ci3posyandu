

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="<?= base_url('data_ibu'); ?>"><i class="bi bi-three-dots"></i></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Ibu <span>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      $totalstok = $this->ModelIbu->countIbu();
                      echo $totalstok;
                      ?>
                      </h6>
                      <span class="text-muted small pt-2 ps-1">Total Data Ibu</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="<?= base_url('data_anak'); ?>"><i class="bi bi-three-dots"></i></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Anak <span>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      $totalstok = $this->ModelIbu->countAnak();
                      echo $totalstok;
                      ?>
                      </h6>
                     <span class="text-muted small pt-2 ps-1">Total Data Anak</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="<?= base_url('data_imunisasi'); ?>"><i class="bi bi-three-dots"></i></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Imunisasi <span>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-capsule"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      $totalstok = $this->ModelIbu->countImunisasi();
                      echo $totalstok;
                      ?>
                      </h6>
                     <span class="text-muted small pt-2 ps-1">Total Kegiatan</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- Customers Card -->
            

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

              <div class="filter">
                  <a class="icon" href="<?= base_url('data_petugas'); ?>"><i class="bi bi-three-dots"></i></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Petugas <span>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $b = 1;
                        foreach ($datpetugas as $d) { ?>
                    <tr>
                        <td><?= $d['nama_petugas']; ?></td>
                        <td><?= $d['no_tlp']; ?></td>
                        <td><?= $d['jabatan']; ?></td>

                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
          
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="<?= base_url('data_vaksin'); ?>" ><i class="bi bi-three-dots"></i></a>
 
            </div>

            <div class="card-body">
              <h5 class="card-title">Daftar Layanan <span>

              <div class="activity">
              <?php
                        $b = 1;
                        foreach ($vaksin as $v) { ?>
                <div class="activity-item d-flex">
                
                  <div class="activity-content mt-3">
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <?= $v['nama_vaksin']; ?>
                  </div>
                </div><!-- End activity item-->
                <?php } ?>
             
              </div>

            </div>
          </div><!-- End Recent Activity -->

          

        

   
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
