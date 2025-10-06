<main id="main" class="main">

<div class="pagetitle">
  <h1>Profil Admin</h1>
  <nav>
    <?php foreach ($petugas as $p) { ?>
 
    </nav>
</div><!-- End Page Title -->

              <!-- Profile Edit Form -->
              <form action="" method="post">
              <input type="hidden" name="id_pet" id="id_pet" value="<?php echo $p['id_pet']; ?>">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nama_petugas" type="text" class="form-control" id="nama_petugas" value="<?= $p['nama_petugas']; ?>">
                    <?= form_error('nama_petugas', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label class="col-md-4 col-lg-3 col-form-label">Posisi</label>
                  <div class="col-md-8 col-lg-9">
                    <select name="jabatan" class="form-select" aria-label="Default select example" required>
                      <option selected><?= $p['jabatan']; ?></option>
                      <option value="Kader">Kader</option>
                      <option value="Petugas Puskesmas">Petugas Puskesmas</option>
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="no_tlp" type="text" class="form-control" id="no_tlp" value="<?= $p['no_tlp']; ?>">
                    <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Username</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="<?= $p['email']; ?>" disabled>
                  </div>
                </div>
                
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form><!-- End Profile Edit Form -->
            
            <?php } ?>
              

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
