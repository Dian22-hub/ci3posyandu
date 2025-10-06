<main id="main" class="main">

<div class="pagetitle">
      <h1>Edit Data Imunisasi</h1>
      <div class="card mt-3">
            <div class="card-body">
            <?php foreach ($imunisasi as $m) { ?>
<form method = "post" action ="" enctype="multipart/form-data" class="row g-3 mt-1">
<input type="hidden" name="id_imun" id="id_imun" value="<?php echo $m['id_imun']; ?>">


<div class="col-md-6">
  <label for="" class="form-label">Tanggal Imunisasi</label>
  <input type="date" class="form-control" id="tgl_imun" name="tgl_imun" value="<?= $m['tgl_imun']; ?>">
  <?= form_error('tgl_imun', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="col-md-6">
                  <label for="" class="form-label">Nama Petugas</label>
                  <select name="petugas_id" class="form-select" required>
                            <?php
                            foreach ($petugas as $p) { ?>
                            <option value="<?= $m['id_pet'];?>"><?= $p['nama_petugas'];?></option>
                                <option value="<?= $p['id_pet'];?>"><?= $p['nama_petugas'];?></option>
                            <?php } ?>
                        </select>
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">Nama Anak</label>
                  <select name="anak_id" class="form-select" required>
                            <?php
                            foreach ($anak as $a) { ?>
                            <option value="<?= $m['id_anak']; ?>" ><?= $a['nama_anak'];?></option>
                                <option value="<?= $a['id_anak'];?>"><?= $a['nama_anak'];?></option>
                            <?php } ?>
                        </select>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label">Berat Badan</label>
                  <input type="text" class="form-control" id="bb" name="bb" value="<?= $m['bb']; ?>">
                  <?= form_error('bb', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label">Tinggi Badan</label>
                  <input type="text" class="form-control" id="tb" name="tb" value="<?= $m['tb']; ?>">
                  <?= form_error('tb', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label for="" class="form-label"> Lingkar Kepala</label>
                  <input type="text" class="form-control" id="lk" name="lk" value="<?= $m['lk']; ?>">
                  <?= form_error('lk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Nama Layanan</label>
                  <select name="vaksin_id" class="form-select" required>
                            <option value="<?= $m['nama_vaksin'];?>"><?= $m['nama_vaksin'];?></option>
                            <?php
                            foreach ($vaksin as $v) { ?>
                                <option value="<?= $v['nama_vaksin'];?>"><?= $v['nama_vaksin'];?></option>
                            <?php } ?>
                            </select>
                    </div>
                    
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                            </form>
                <?php } ?>