<main id="main" class="main">

    <div class="pagetitle">
      <h1>Ubah Data Ibu</h1>
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
                <?= $this->session->flashdata('pesan'); ?>
                <?php foreach ($ibu as $i) { ?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <form class="row g-3">
                        <div class="col-12">Nama Ibu
                            <input type="hidden" name="id_ibu" id="id_ibu" value="<?php echo $i['id_ibu']; ?>">
                            <input type="text" class="form-control form-control-user" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" value="<?= $i['nama_ibu']; ?>">
                            <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                        </div>
                        <div class="col-12 mt-2">NIK Ibu
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukan Minimal 12 Digit" value="<?= $i['NIK']; ?>">
                            </div>
                            <div class="col-12 mt-2">
                            <div class="form-group">Nomor Telepon
                                <input type="text" class="form-control form-control-user" id="no_tlp" name="no_tlp" placeholder="" value="<?= $i['no_tlp']; ?>">
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