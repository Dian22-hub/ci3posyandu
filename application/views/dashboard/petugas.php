<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <?php
        // Logika untuk Petugas/Admin (level_id != 3)
        if ($this->session->userdata('level_id') != '3') {
        ?>
        <!-- Welcome Card for Petugas/Admin -->
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang, <?= $user['name']; ?>! </h5>
                            <!-- <p class="mb-4">
                                Ini adalah ringkasan data penting di Aplikasi Posyandu Anda.
                            </p> -->
                            <!-- Anda bisa menambahkan link relevan di sini jika diperlukan -->
                            <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">Lihat Detail</a> -->
                        </div>
                    </div>
                    <!-- <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= base_url('assets/img/illustrations/man-with-laptop-light.png') ?>"
                                height="140" alt="Selamat datang"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                onerror="this.onerror=null;this.src='https://placehold.co/140x140/E0E0E0/333333?text=Gambar';" />
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Statistic Cards for Petugas/Admin -->
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-primary">
                                        <i class="bx bx-user-plus bx-sm"></i> <!-- Icon untuk Data Ibu -->
                                    </span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Data Ibu</span>
                            <h3 class="card-title mb-2"><?= $count_ibu; ?></h3>
                            <small class="text-muted">Total Ibu Terdaftar</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-info">
                                        <i class="bx bx-male bx-sm"></i> <!-- Icon untuk Data Anak -->
                                    </span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Data Anak</span>
                            <h3 class="card-title mb-2"><?= $count_anak; ?></h3>
                            <small class="text-muted">Total Anak Terdaftar</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-warning">
                                        <i class="bx bx-group bx-sm"></i> <!-- Icon untuk Data Petugas -->
                                    </span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Data Petugas</span>
                            <h3 class="card-title mb-2"><?= $count_petugas; ?></h3>
                            <small class="text-muted">Total Petugas Terdaftar</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-success">
                                        <i class="bx bx-log-in bx-sm"></i> <!-- Icon untuk Login -->
                                    </span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Login</span>
                            <h3 class="card-title mb-2"><?= $count_log; ?></h3>
                            <small class="text-muted">Jumlah Sesi Login</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } else {
        // Logika untuk Ibu (level_id == 3)
        ?>
        <!-- Welcome Card for Ibu -->
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang, Ibu <?= $user['name']; ?>! 🎉</h5>
                            <p class="mb-4">
                                Pantau terus tumbuh kembang buah hati Anda di Aplikasi Posyandu.
                            </p>
                            <!-- Anda bisa menambahkan link relevan di sini jika diperlukan -->
                            <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">Lihat Data Anak Saya</a> -->
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= base_url('assets/img/illustrations/girl-with-laptop-light.png') ?>"
                                height="140" alt="Selamat datang Ibu"
                                data-app-dark-img="illustrations/girl-with-laptop-dark.png"
                                data-app-light-img="illustrations/girl-with-laptop-light.png"
                                onerror="this.onerror=null;this.src='https://placehold.co/140x140/E0E0E0/333333?text=Gambar';" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistic Card for Ibu -->
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-info">
                                        <i class="bx bx-child bx-sm"></i> <!-- Icon untuk Data Anak -->
                                    </span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Data Anak Anda</span>
                            <h3 class="card-title mb-2"><?= $count_anak; ?></h3>
                            <small class="text-muted">Total Anak Terdaftar</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>