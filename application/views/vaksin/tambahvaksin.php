<main id="main" class="main">

<div class="pagetitle">
      <h1>Input Data Layanan</h1>
      <div class="card mt-3">
            <div class="card-body">
            
<form method = "post" action ="<?php echo base_url('data_vaksin/tambahdata')?>" enctype="multipart/form-data" class="row g-3 mt-1">

                <div class="col-md-12">
                  <label for="" class="form-label">Nama Layanan</label>
                  <input type="text" class="form-control" value="<?= set_value('nama_vaksin'); ?>" id="nama_vaksin" name="nama_vaksin">
                  <?= form_error('nama_vaksin', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>