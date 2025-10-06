<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Register Anak</h1>
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
 
            <a href="<?= base_url('laporanposyandu/cetak_laporan_anak'); ?>" class="btn btn-primary mb-3 mt-3"><i class="fas fa-print"></i> Cetak Laporan</a> 
            <!-- <a href="<?= base_url('laporanposyandu/laporan_anak_pdf'); ?>" class="btn btn-primary mb-3 mt-3"><i class="fas fa-print"></i> Cetak PDF</a>  -->
            <table class="table datatable">
                <thead>
                  <tr>
                  <th scope="col">No</th>
                        <th scope="col">Nama Anak</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Nama Ayah</th>
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
                       <td><?= $a['nama_ibu'] ?></td>
                       <td><?= $a['nama_ayah'] ?></td>

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