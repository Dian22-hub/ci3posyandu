<main id="main" class="main">

<div class="pagetitle">
      <h1>Input Data Imunisasi</h1>
      <div class="card mt-3">
            <div class="card-body">
            
<form method = "post" action ="<?php echo base_url('data_imunisasi/tambahdata')?>" enctype="multipart/form-data" class="row g-3 mt-1">


<div class="col-md-6">
  <label for="" class="form-label">Tanggal Imunisasi</label>
  <input type="date" class="form-control" id="tgl_imun" name="tgl_imun" value="<?= set_value('tgl_imun'); ?>">
  <?= form_error('tgl_imun', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="col-md-6">
                  <label for="" class="form-label">Nama Petugas</label>
                  <select name="petugas_id" class="form-select" required>
                            <option selected disabled value="">-----Nama Petugas-----</option>
                            <?php
                            foreach ($petugas as $p) { ?>
                                <option value="<?= $p['id_pet'];?>"><?= $p['nama_petugas'];?></option>
                            <?php } ?>
                        </select>
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">Nama Anak</label>
                  <select name="anak_id" class="form-select" required>
                            <option selected disabled value="">-----Nama Anak-----</option>
                            <?php
                            foreach ($anak as $a) { ?>
                                <option value="<?= $a['id_anak'];?>"><?= $a['nama_anak'];?></option>
                            <?php } ?>
                        </select>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label">Berat Badan</label>
                  <input type="text" class="form-control" id="bb" name="bb"  value="<?= set_value('bb'); ?>">
                  <?= form_error('bb', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label">Tinggi Badan</label>
                  <input type="text" class="form-control" id="tb" name="tb"  value="<?= set_value('tb'); ?>">
                  <?= form_error('tb', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label"> Lingkar Kepala</label>
                  <input type="text" class="form-control" id="lk" name="lk" value="<?= set_value('lk'); ?>">
                  <?= form_error('lk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              
                <div class="col-md-6">
                  <label for="" class="form-label">Nama Layanan</label>
                  <select name="vaksin_id" class="form-select" required>
                            <option selected disabled value="">-----Input Layanan-----</option>
                            <?php
                            foreach ($vaksin as $v) { ?>
                                <option value="<?= $v['id_vaksin'];?>"><?= $v['nama_vaksin'];?></option>
                            <?php } ?>
                            </select> 
                    </div>


                  </div>
                </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>