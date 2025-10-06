<main id="main">
  <!-- ======= Gallery Section ======= -->
  </div><!-- End Page Title -->
  <section id="profile" class="profile">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Profil Ibu dan Anak</h2>
  <div class="row content">
  <section class="section profile">
    <div class="row">

      <div class="col-xl-14">

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

  </div>
                <h4>Profile Anak</h4>
 
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                  <div class="col-md-8 col-lg-9">
                    <input disabled name="phone" type="text" class="form-control" id="Phone" value="Nabila Rahayu">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                  <div class="col-md-8 col-lg-9">
                    <input disabled name="phone" type="text" class="form-control" id="Phone" value="1234567890123456">
                  </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-8 col-lg-9">
                      <input disabled name="phone" type="text" class="form-control" id="Phone" value="12-10-2022">
                    </div>
</div>
              </div>
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

 <!-- Profile Edit Form -->
 <form>
  <div class="row mb-3">
    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
    <div class="col-md-8 col-lg-9">
    <img src="<?= base_url('assets/img/') . $user['image']; ?>" class="rounded-circle" alt="" height="150" width = "180">
      <div class="pt-2">
        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
    <div class="col-md-8 col-lg-9">
      <input disabled name="fullName" type="text" class="form-control" id="fullName" value="Amelia Azzahra">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">NIK</label>
    <div class="col-md-8 col-lg-9">
      <input disabled name="job" type="text" class="form-control" id="Job" value=" 1092002938172098">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Posisi</label>
    <div class="col-md-8 col-lg-9">
      <input disabled name="job" type="text" class="form-control" id="Job" value="Orang Tua">
    </div>
  </div>


  <div class="row mb-3">
    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
    <div class="col-md-8 col-lg-9">
      <input name="country" type="text" class="form-control" id="Country" value="Adiarsa">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
    <div class="col-md-8 col-lg-9">
      <input name="phone" type="text" class="form-control" id="Phone" value="08486-3538-29071">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
    <div class="col-md-8 col-lg-9">
      <input name="email" type="email" class="form-control" id="Email" value="amelia.azzaha@example.com">
    </div>
    <h4>Profile Anak</h4>
 
    <div class="row mb-3">
      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
      <div class="col-md-8 col-lg-9">
        <input disabled name="phone" type="text" class="form-control" id="Phone" value="Nabila Rahayu">
      </div>
    </div>
    <div class="row mb-3">
      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">NIK</label>
      <div class="col-md-8 col-lg-9">
        <input disabled name="phone" type="text" class="form-control" id="Phone" value="1234567890123456">
      </div>
      </div>
      <div class="row mb-3">
        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
        <div class="col-md-8 col-lg-9">
          <input disabled name="phone" type="text" class="form-control" id="Phone" value="12-10-2022">
        </div>
<
  </div>


  <div class="text-center">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form><!-- End Profile Edit Form -->

</div>