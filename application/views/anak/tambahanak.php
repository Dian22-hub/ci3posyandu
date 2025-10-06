<main id="main" class="main">

<div class="pagetitle">
      <h1>Input Data Anak</h1>
      <div class="card mt-3">
            <div class="card-body">
            
<form method = "post" action ="<?php echo base_url('data_anak/tambahdata')?>" enctype="multipart/form-data" class="row g-3 mt-1">

<div class="col-md-12">
                  <label for="" class="form-label">Nama Anak</label>
                  <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="<?= set_value('nama_anak'); ?>">
                  <?= form_error('nama_anak', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">NIK Anak</label>
                  <input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>">
                  <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Nama Ibu</label>
                  <select name="ibu_id" class="form-select" required>
                            <option selected disabled value="">-----Pilih Nama Ibu-----</option>
                            <?php
                            foreach ($ibu as $i) { ?>
                                <option value="<?= $i['id_ibu'];?>"><?= $i['nama_ibu'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                <div class="col-md-6">
                  <label for="" class="form-label">Nama Ayah</label>
                  <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= set_value('nama_ayah'); ?>">
                  <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                  
                </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>