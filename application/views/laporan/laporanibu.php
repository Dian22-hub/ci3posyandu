<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Register Ibu</h1>
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
 
            <a href="<?= base_url('laporanposyandu/cetak_laporan_ibu'); ?>" class="btn btn-primary mb-3 mt-3"><i class="fas fa-print"></i> Cetak Laporan</a> 
            <!-- <a href="<?= base_url('laporanposyandu/laporan_ibu_pdf'); ?>" class="btn btn-primary mb-3 mt-3"><i class="fas fa-print"></i> Cetak PDF</a>  -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">NIK</th>
                        <th scope="col">No Telepon</th>

                        <!-- <th scope="col">Umur saat ini</th> -->
                    
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $b = 1;
                        foreach ($ibu as $i) { ?>
                    <tr>
                        <th scope="row"><?= $b++; ?></th>
                        <td><?= $i['nama_ibu']; ?></td>
                        <td><?= $i['NIK']; ?></td>
                        <td><?= $i['no_tlp']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->


<!-- End of Modal Tambah Mneu -->