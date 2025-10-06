<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
        <?php if ($this->session->flashdata('msg')) : ?>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Profil asdasd</h5>
                    <div class="card-body">
                        <form id="formUploadImage" action="<?php echo base_url('user/upload_image'); ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="<?= base_url('build/img/profile/') . $user['image']; ?>" alt="user-avatar"
                                    class="d-block rounded" height="100" width="100" id="uploadedAvatar"
                                    onerror="this.onerror=null;this.src='<?= base_url('assets/img/avatars/default.png'); ?>';" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload Foto Baru</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" name="image" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                                    <p class="text-muted mb-0">Diizinkan JPG, GIF atau PNG. Ukuran maksimal 2MB.</p>
                                    <button type="submit" class="btn btn-success mt-2">Simpan Foto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" action="<?php echo base_url('user/profile'); ?>" method="POST">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" type="text" id="username" name="username"
                                        value="<?= $user['username']; ?>" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="<?= $user['name']; ?>" required />
                                </div>
                            </div>
                            <h5 class="card-header px-0 pb-0">Ubah Kata Sandi</h5>
                            <div class="row mt-3">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="current-password">Kata Sandi Saat Ini</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="current_password"
                                            id="current-password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                    <small class="text-muted">Kosongkan, jika tidak perlu diubah.</small>
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="new-password">Kata Sandi Baru</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="new-password"
                                            name="new_password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                    <small class="text-muted">Kosongkan, jika tidak perlu diubah.</small>
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="repeat-password">Ulangi Kata Sandi Baru</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="repeat-password"
                                            name="repeat_password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                    <small class="text-muted">Kosongkan, jika tidak perlu diubah.</small>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" name="submit" class="btn btn-primary me-2">Simpan
                                    Perubahan</button>
                                <button type="reset" class="btn btn-outline-secondary">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Pastikan kode ini berada di dalam script tag di file JS Anda atau di bagian bawah halaman
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('upload');
    const uploadedAvatar = document.getElementById('uploadedAvatar');
    const resetButton = document.querySelector('.account-image-reset');
    const defaultAvatarSrc =
    "<?= base_url('assets/img/avatars/default.png'); ?>"; // Ganti dengan path default avatar Sneat

    // Fungsi untuk pratinjau gambar
    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                uploadedAvatar.src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Fungsi untuk reset gambar
    resetButton.addEventListener('click', function() {
        uploadedAvatar.src = defaultAvatarSrc;
        fileInput.value = ''; // Hapus file yang dipilih dari input
    });
});

// Untuk menampilkan/menyembunyikan password
document.addEventListener('DOMContentLoaded', function() {
    const passwordToggles = document.querySelectorAll('.form-password-toggle .input-group-text');
    passwordToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bx-hide');
                icon.classList.add('bx-show');
            } else {
                input.type = 'password';
                icon.classList.remove('bx-show');
                icon.classList.add('bx-hide');
            }
        });
    });
});

// Untuk SweetAlert (Anda perlu memastikan library SweetAlert dimuat di proyek Anda)
document.addEventListener('DOMContentLoaded', function() {
    const flashData = document.querySelector('.flash-data');
    if (flashData && flashData.dataset.flashdata) {
        Swal.fire({
            icon: 'success', // Ganti dengan 'error' jika itu pesan error
            title: 'Berhasil!',
            text: flashData.dataset.flashdata,
            showConfirmButton: false,
            timer: 2000
        });
    }
});
</script>
