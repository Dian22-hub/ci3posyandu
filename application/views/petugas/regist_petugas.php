<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Registrasi Petugas</h1>
                    </div>
                    <form class="user" method="post" action="<?= base_url('autentifikasi/registrasipetugas'); ?>">
                    <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="User Name" value="<?= set_value('username'); ?>">
                                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                              <input type="text" class="form-control form-control-user" id="no_tlp" name="no_tlp" placeholder="Nomor Telepon" value="<?= set_value('no_tlp'); ?>">
                  <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
                              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Posisi</label>
                  <div class="col-sm-10">
                    <select name="jabatan" class="form-select" required>
                      <option selected disabled value="">-----Pilih Posisi-----</option>
                      <option value="Bidan">Bidan</option>
                      <option value="Petugas Kesehatan">Petugas Kesehatan</option>
                    </select>
                  </div>
                </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                      <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                  Daftarkan Petugas
                              </button>
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>