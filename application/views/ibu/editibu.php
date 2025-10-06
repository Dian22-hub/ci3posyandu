<main id="main" class="main">

<div class="pagetitle">
      <h1>Edit Data Ibu</h1>
      <div class="card mt-3">
            <div class="card-body">
            <?php foreach ($ibu as $i) { ?>
                    <form action="" method="post" enctype="multipart/form-data" class="row g-3 mt-1">
                
                    <input type="hidden" name="id_ibu" id="id_ibu" value="<?php echo $i['id_ibu']; ?>">
                <div class="col-md-12">
                  <label for="" class="form-label">Nama Ibu</label>
                  <input type="text" class="form-control" value="<?= $i['nama_ibu']; ?>" id="nama_ibu" name="nama_ibu">
                  <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">NIK Ibu</label>
                  <input type="text" class="form-control" id="nik" name="nik" readonly value="<?= $i['NIK']; ?>">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $i['no_tlp']; ?>">
                  <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Update"></input>
                  <input type="button" class="btn btn-secondary" value="Kembali" onclick="window.history.go(-1)"></input>
                </div>
              </form>
            <?php } ?>