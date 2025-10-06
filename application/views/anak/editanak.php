<main id="main" class="main">

<div class="pagetitle">
      <h1>Edit Data Anak</h1>
      <div class="card mt-3">
            <div class="card-body">
            <?php foreach ($anak as $a) { ?>
<form method = "post" action ="" enctype="multipart/form-data" class="row g-3 mt-1">

<div class="col-md-12">
<input type="hidden" name="id_anak" id="id_anak" value="<?php echo $a['id_anak']; ?>">
                  <label for="" class="form-label">Nama Anak</label>
                  <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="<?= $a['nama_anak']; ?>">
                  <?= form_error('nama_anak', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">NIK Anak</label>
                  <input type="text" class="form-control" id="nik" readonly name="nik" value="<?= $a['NIK']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $a['tgl_lahir']; ?>">
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
                  <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $a['nama_ayah']; ?>">
                  <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                  
                </div>
                </div>
                <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Update"></input>
                  <input type="button" class="btn btn-secondary" value="Kembali" onclick="window.history.go(-1)"></input>
                </div>
                </form>
            <?php } ?>