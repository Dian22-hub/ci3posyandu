<main id="main" class="main">

<div class="pagetitle">
      <h1>Input Data Ibu</h1>
      <div class="card mt-3">
            <div class="card-body">
            
<form method = "post" action ="<?php echo base_url('data_ibu/tambahdata')?>" enctype="multipart/form-data" class="row g-3 mt-1">

                <div class="col-md-12">
                  <label for="" class="form-label">Nama Ibu</label>
                  <input type="text" class="form-control" value="<?= set_value('nama_ibu'); ?>" id="nama_ibu" name="nama_ibu">
                  <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">NIK Ibu</label>
                  <input type="text" class="form-control" id="nik" name="nik">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" id="no_tlp" name="no_tlp">
                  <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>