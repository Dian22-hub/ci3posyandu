<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Imunisasi</h1>
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
            <a href="<?= base_url('data_imunisasi/vtambahdata'); ?>" class="btn btn-primary mb-3 mt-3"  ><i class="fas fa-file-alt"></i> Tambah Data</a>
            <table  id="datatableid" class="table datatable" style="vertical-align:middle;">
                <thead>
                    <tr> 
                        <th scope="col">Tanggal Imunisasi</th>
                        <th scope="col">Nama Anak</th>
                        <th scope="col">Berat Badan</th>
                        <th scope="col">Tinggi Badan</th>
                        <th scope="col">Lingkar Kepala</th>
                        <th scope="col">Nama Vaksin</th>
                        <th scope="col">Petugas</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php $i = 1  ?>
                   <?php foreach($imunisasi as $m) : ?>
                   
                    <tr>
                        <!-- <td scope='row'><?= $i++ ?>   </td> -->
                        <td><?= $m['tgl_imun'] ?></td>
                        
                       <td><?= $m['nama_anak'] ?></td>
                       <td><?= $m['bb'] ?></td>
                       <td><?= $m['tb'] ?></td>
                       <td><?= $m['lk'] ?></td>
                       <td><?=$m['nama_vaksin']?></td>
                       <td><?= $m['nama_petugas'] ?></td>
                       <td>
                           <a href="<?= base_url('data_imunisasi/hapusdata/').$m['id_imun'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$m['nama_anak'];?> ?');" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                       <td>

                    </tr>
                  
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->


<!-- End of Modal Tambah Mneu -->