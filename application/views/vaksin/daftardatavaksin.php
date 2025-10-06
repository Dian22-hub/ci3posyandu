<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Vaksin</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('data_vaksin/vtambahdata'); ?>" class="btn btn-primary mb-3 mt-3" ><i class="fas fa-file-alt"></i> Tambah Data</a>
            <table  id="datatableid" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Vaksin</th>
                        <!-- <th scope="col">Umur saat ini</th> -->
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $b = 1;
                        foreach ($vaksin as $v) { ?>
                    <tr>
                        <th scope="row"><?= $b++; ?></th>
                        <td><?= $v['nama_vaksin']; ?></td>
                        <td>
                            <a href="<?php echo base_url()?>data_vaksin/updatedata/<?php echo $v['id_vaksin'];?>" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></i> Ubah</a>
                            <a href="<?= base_url('data_vaksin/hapusdata/').$v['id_vaksin'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$v['nama_vaksin'];?> ?');" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
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
                <h5 class="modal-title" id="bukuBaruModalLabel">Input Vaksin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method = "post" action ="<?php echo base_url('data_vaksin/tambahdata')?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_vaksin" name="nama_vaksin" placeholder="Nama Vaksin">

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