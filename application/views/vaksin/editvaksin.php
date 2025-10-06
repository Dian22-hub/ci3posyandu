<main id="main" class="main">

<div class="pagetitle">
      <h1>Edit Data Layanan</h1>
      <div class="card mt-3">
            <div class="card-body">
            <?php foreach ($vaksin as $v) { ?>
<form method = "post" action ="" enctype="multipart/form-data" class="row g-3 mt-1">
<input type="hidden" name="id_vaksin" id="id_vaksin" value="<?php echo $v['id_vaksin']; ?>">
                <div class="col-md-12">
                  <label for="" class="form-label">Nama Layanan</label>
                  <input type="text" class="form-control" value="<?= $v['nama_vaksin']; ?>" id="nama_vaksin" name="nama_vaksin">
                  <?= form_error('nama_vaksin', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <?php } ?>