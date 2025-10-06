<main id="main" class="main">

    <div class="pagetitle">
      <h1>Ubah Data Vaksin</h1>
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
            <?php foreach ($vaksin as $v) { ?>
                <form action="<?= base_url('Data_vaksin/updateData/'); ?>" method="post" enctype="multipart/form-data">
                <form class="row g-3">
                        <div class="col-12">
                        <input type="hidden" name="id_vaksin" id="id_vaksin" value="<?php echo $v['id_vaksin']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_vaksin" name="nama_vaksin" placeholder="Masukkan Nama Anak" value="<?= $v['nama_vaksin']; ?>">
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