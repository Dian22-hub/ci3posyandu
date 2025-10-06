<main id="main" class="main">

    <div class="pagetitle">
      <h1>Ubah Data Anak</h1>
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
            <?php foreach ($anak as $a) { ?>
                <form action="<?= base_url('Data_anak/ubahAnak/'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <form class="row g-3">
                        <div class="col-12">Nama Ibu
                        <input type="hidden" name="id_anak" id="id_anak" value="<?php echo $a['id_anak']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_anak" name="nama_anak" placeholder="Masukkan Nama Anak" value="<?= $a['nama_anak']; ?>">
                    </div>
                    <div class="col-12 mt-2">NIK anak
                        <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukkan nik" value="<?= $a['NIK']; ?>">
                    </div>
                    <div class="col-12 mt-2">Tanggal Lahir Anak
                        <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir (YYYY-MM-DD)" value="<?= $a['tgl_lahir']; ?>">
                    </div>
                    <div class="col-12 mt-2">Nama Ibu
                    <select name="ibu_id" class="form-control form-control-user">
                            <option value="">-----Nama Ibu-----</option>
                            <?php
                            foreach ($ibu as $i) { ?>
                                <option value="<?= $i['id_ibu'];?>"><?= $i['nama_ibu'];?></option>
                            <?php } ?>
                        </select>
                            </div>
                    <div class="col-12 mt-2">Nama Ayah
                        <input type="text" class="form-control form-control-user" id="nama_ayah" name="nama_ayah" placeholder="Masukkan nama_ayah" value="<?= $a['nama_ayah']; ?>">
                    </div>

                    <div class="text-center mt-3">
                  <input type="submit" class="btn btn-primary" value="Update"></input>
                  <input type="button" class="btn btn-secondary" value="Kembali" onclick="window.history.go(-1)"></input>
                </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>