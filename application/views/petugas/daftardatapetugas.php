<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Petugas</h1>
      <?php if(validation_errors()){?>
          <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
          </div>
      <?php }?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('autentifikasi/registrasipetugas'); ?>" class="btn float-right; btn-primary mb-3 mt-3" ><i class="fas fa-file-alt align-right"></i>Registrasi Petugas</a>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            
            <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">No Telepon</th>

                        <!-- <th scope="col">Umur saat ini</th> -->
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $b = 1;
                        foreach ($petugas as $p) { ?>
                    <tr>
                        <th scope="row"><?= $b++; ?></th>
                        <td><?= $p['nama_petugas']; ?></td>
                        <td><?= $p['jabatan']; ?></td>
                        <td><?= $p['no_tlp']; ?></td>
                        <td>
                            <a href="<?= base_url('data_petugas/hapusdata/').$p['email'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$p['nama_petugas'];?> ?');" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 