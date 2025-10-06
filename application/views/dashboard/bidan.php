<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <?php
        // Logic for Petugas/Admin (level_id != 3)
        if ($this->session->userdata('level_id') != '3') {
        ?>
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang, <?= $user['name']; ?>!</h5>
                            <p class="mb-4">
                                Ini adalah ringkasan data penting di Aplikasi Posyandu Anda.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= base_url('assets/img/illustrations/man-with-laptop-light.png') ?>"
                                height="140" alt="Selamat datang Admin/Petugas"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                onerror="this.onerror=null;this.src='https://via.placeholder.com/140x140?text=Gambar+Admin';" />
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-primary">
                                        <i class="bx bx-user-plus bx-sm"></i> </span>
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
                                        <i class="bx bx-child bx-sm"></i> </span>
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
                                        <i class="bx bx-group bx-sm"></i> </span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Data Petugas</span>
                            <h3 class="card-title mb-2"><?= $count_bidan; ?></h3> <small class="text-muted">Total
                                Petugas Terdaftar</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-success">
                                        <i class="bx bx-log-in bx-sm"></i> </span>
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
        // Logic for Ibu (level_id == 3)
        ?>
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang, Ibu <?= $user['name']; ?>! 🎉</h5>
                            <p class="mb-4">
                                Pantau terus tumbuh kembang buah hati Anda di Aplikasi Posyandu.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= base_url('assets/img/illustrations/girl-with-laptop-light.png') ?>"
                                height="140" alt="Selamat datang Ibu"
                                data-app-dark-img="illustrations/girl-with-laptop-dark.png"
                                data-app-light-img="illustrations/girl-with-laptop-light.png"
                                onerror="this.onerror=null;this.src='https://via.placeholder.com/140x140?text=Gambar+Ibu';" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-info">
                                        <i class="bx bx-child bx-sm"></i> </span>
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