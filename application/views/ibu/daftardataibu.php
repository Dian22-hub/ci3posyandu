<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Ibu</h1>
      <?php if(validation_errors()){?>
          <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
          </div>
      <?php }?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('data_ibu/vtambahdata'); ?>" class="btn float-right; btn-primary mb-3 mt-3" ><i class="fas fa-file-alt align-right"></i> Tambah Data</a>
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
                        
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">NIK</th>
                        <th scope="col">No Telepon</th>

                        <!-- <th scope="col">Umur saat ini</th> -->
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        
                        foreach ($ibu as $i) { ?>
                    <tr>
                        
                        <td><?= $i['nama_ibu']; ?></td>
                        <td><?= $i['NIK']; ?></td>
                        <td><?= $i['no_tlp']; ?></td>
                        <td>
                            <a href="<?= base_url('data_ibu/UbahIbu/').$i['id_ibu'];?>" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></i> Ubah</a>
                            <a href="<?= base_url('data_ibu/hapusdata/').$i['id_ibu'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$i['nama_ibu'];?> ?');" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
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

<!-- Modal Tambah buku baru-->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bukuBaruModalLabel">Input Data Ibu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method = "post" action ="<?php echo base_url('data_ibu/tambahdata')?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="no_tlp" name="no_tlp" placeholder="Nomor Telepon">
                    </div>
                    <!-- <div class="form-group">
                        <select name="jenis_kelamin" class="form-control form-control-user">
                            <option value="">-----Jenis Kelamin-----</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-Laki</option>
                        </select>
                    </div> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->