<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Anak</h1>
      <?php if(validation_errors()){?>
          <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
          </div>
      <?php }?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('data_anak/vtambahdata'); ?>" class="btn float-right; btn-primary mb-3 mt-3" ><i class="fas fa-file-alt align-right"></i> Tambah Data</a>
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
                        <th scope="col">Nama Anak</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Nama Ayah</th>
                        
                        <th scope="col">Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1  ?>
                   <?php foreach($anak as $a) : ?>
                   
                    <tr>
                        <td scope='row'><?= $i++ ?>   </td>
                       <td><?= $a['nama_anak'] ?></td>
                       <td><?= $a['nik'] ?></td>
                       <td><?= $a['tgl_lahir'] ?></td>
                       <td>
                        <?php
                            $birthDate = new DateTime($a['tgl_lahir']);
                            $today = new DateTime();
                            $age = $today->diff($birthDate);
                            echo $age->y . " tahun <br>". $age->m . " bulan <br>".$age->d . " hari";
                        ?>
                       </td>
                       <td><?= $a['nama_ibu'] ?></td>
                       <td><?= $a['nama_ayah'] ?></td>
<td>
                           <a href="<?= base_url('data_anak/UbahAnak/').$a['id_anak'];?>" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></i> Ubah</a>
                                <a href="<?= base_url('data_anak/hapusdata/').$a['id_anak'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama_anak'];?> ?');" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                       </td>
                    </tr>
                   
                    <?php endforeach ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah buku baru-->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bukuBaruModalLabel">Input Data Anak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method = "post" action ="<?php echo base_url('Data_anak/tambahdata')?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_anak" name="nama_anak" placeholder="Nama Anak">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir (yyyy-mm-dd)">
                    </div>
                    <!-- <div class="form-group">
                        <select name="jenis_kelamin" class="form-control form-control-user">
                            <option value="">-----Jenis Kelamin-----</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-Laki</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                    <select name="ibu_id" class="form-control form-control-user">
                            <option value="">-----Nama Ibu-----</option>
                            <?php
                            foreach ($ibu as $i) { ?>
                                <option value="<?= $i['id_ibu'];?>"><?= $i['nama_ibu'];?></option>
                            <?php } ?>
                        </select>
                            </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div> 
</div>
<!-- End of Modal Tambah Mneu -->
