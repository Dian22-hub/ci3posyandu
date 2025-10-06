<main id="main" class="main">

    <div class="pagetitle">
      <h1>Ubah Data Imunisasi</h1>
      <nav>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              
<div class="container-fluid mt-3">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <?php foreach ($imunisasi as $m) { ?>
                <form action="<?= base_url('Data_imunisasi/updateData/'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_imun" id="id_imun" value="<?php echo $m['id_imun']; ?>">
                    
                <form class="row g-3">
                        <div class="col-12">Nama Anak
                    <select name="anak_id" class="form-select">
                            <option value="">-----Pilih Nama-----</option>
                            <?php
                            foreach ($anak as $a) { ?>
                                <option value="<?= $a['id_anak'];?>"><?= $a['nama_anak'];?></option>
                            <?php } ?>
                        </select>
                            </div>
                    <div class="col-12 mt-2">Berat Badan
                            <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="bb" name="bb" placeholder="Berat Badan" value="<?= $m['bb']; ?>">
                    </div>
                    <div class="col-12 mt-2">Tinggi Badan
                            <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="tb" name="tb" placeholder="Tinggi Badan" value="<?= $m['tb']; ?>">
                    </div>
                    <div class="col-12 mt-2">Lingkar Kepala
                            <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="lk" name="lk" placeholder="Lingkar Kepala" value="<?= $m['lk']; ?>">
                    </div>
                    <div class="col-12 mt-2">Nama Pelayanan
                            
                    <select name="vaksin_id" class="form-select">
                            <option value="">-----Pilih Pelayanan-----</option>
                            <?php
                            foreach ($vaksin as $v) { ?>
                                <option value="<?= $v['id_vaksin'];?>"><?= $v['nama_vaksin'];?></option>
                            <?php } ?>
                        </select>
                            </div>
                            <div class="col-12 mt-2">Nama Pelayanan Tambahan
                            
                        <select name="vaksin_id" class="form-select">
                            <option value="">-----Pilih Pelayanan-----</option>
                            <?php
                            foreach ($vaksin as $v) { ?>
                                <option value="<?= $v['id_vaksin'];?>"><?= $v['nama_vaksin'];?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="col-12 mt-2">Nama Petugas
                            
                        <select name="petugas_id" class="form-select">
                            <option value="">-----Pilih Petugas-----</option>
                            <?php
                            foreach ($petugas as $p) { ?>
                                <option value="<?= $p['id_pet'];?>"><?= $p['nama_petugas'];?></option>
                            <?php } ?>
                        </select>

                        <div class="text-center mt-3">
                  <input type="submit" class="btn btn-primary" value="Update"></input>
                  <input type="button" class="btn btn-secondary" value="Kembali" onclick="window.history.go(-1)"></input>
                </div>
                </form>
            <?php } ?>
        </div>
                            </div>
    </div>
</div>