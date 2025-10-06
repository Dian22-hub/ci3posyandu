<main id="main" class="main">

<div class="pagetitle">
  <h1>Profil Admin</h1>
  <nav>
    <?php foreach ($petugas as $p) { ?>
 
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <img src="<?= base_url('assets/img/') . $p['image']; ?>" class="rounded-circle">
          <h2><?= $p['nama_petugas']; ?></h2>
          <h3><?= $p['jabatan']; ?></h3>
        </div>
      </div> 

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tampilan</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              
              <h5 class="card-title">Profile Details</h5>
              <input type="hidden" name="id_pet" id="id_pet" value="<?php echo $p['id_pet']; ?>">
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                <div class="col-lg-9 col-md-8"><?= $p['nama_petugas']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Posisi</div>
                <div class="col-lg-9 col-md-8"><?= $p['jabatan']; ?></div>
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">No Telepon</div>
                <div class="col-lg-9 col-md-8"><?= $p['no_tlp']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Username</div>
                <div class="col-lg-9 col-md-8"><?= $p['email']; ?></div>
              </div>

            </div>
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              
              <!-- Profile Edit Form -->
               <?= form_open_multipart('kader/profiladmin')?>
              
              <input type="hidden" name="id_pet" id="id_pet" value="<?php echo $p['id_pet']; ?>">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                  <img src="<?= base_url('assets/img/') . $p['image']; ?>"class="img-thumbnail">
                  <div class="col-sm-9">
                            <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" >
                                <label class="custom-file-label" for="image" > <?= $p['image']; ?></label></input>
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
                  <input name="jabatan" class="form-control" id="jabatan" value="<?= $p['jabatan']; ?>" disabled>
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
