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

            <form method="get" action="<?= base_url('laporanposyandu/lap_imunisasi'); ?>" class="form-inline mb-3">
                <div class="row mt-4">
					<div class="col-md-5">
						<label for="start_date" class="mr-2">Tanggal Mulai:</label>
						<input type="date" id="start_date" name="start_date" class="form-control" value="<?= isset($start_date) ? $start_date : '' ?>">
                        <!-- <?= form_error('start_date', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>

					<div class="col-md-5">
						<label for="end_date" class="mr-2">Tanggal Selesai:</label>
						<input type="date" id="end_date" name="end_date" class="form-control" value="<?= isset($end_date) ? $end_date : '' ?>">
					</div>
					<div class="col-md-2 mt-4">
						<button type="submit" class="btn btn-primary">Filter</button>
					</div>
				</div>
				<!-- <div class="form-group">
                    <label for="start_date" class="mr-2">Tanggal Mulai:</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" value="<?= isset($start_date) ? $start_date : '' ?>">
                </div>
                <div class="form-group">
                    <label for="end_date" class="mr-2">Tanggal Selesai:</label>
                    <input type="date" id="end_date" name="end_date" class="form-control" value="<?= isset($end_date) ? $end_date : '' ?>">
                </div> -->
                <!-- <button type="submit" class="btn btn-primary">Filter</button> -->
            </form>

            <a href="<?= base_url('laporanposyandu/cetak_laporan_imun?start_date=' . (isset($start_date) ? $start_date : '') . '&end_date=' . (isset($end_date) ? $end_date : '')); ?>" class="btn btn-primary mb-3 mt-3"><i class="fas fa-print"></i> Cetak Laporan</a> 
            <!-- <a href="<?= base_url('laporanposyandu/laporan_imun_pdf?start_date=' . (isset($start_date) ? $start_date : '') . '&end_date=' . (isset($end_date) ? $end_date : '')); ?>" class="btn btn-primary mb-3 mt-3"><i class="fas fa-print"></i> Cetak PDF</a>  -->
            <table  id="datatableid" class="table datatable" style="vertical-align:middle;">
                <thead>
                    <tr>
                        <th scope="col">Tanggal Imunisasi</th>
                        <th scope="col">Nama Anak</th>
                        <th scope="col">Berat Badan</th>
                        <th scope="col">Tinggi Badan</th>
                        <th scope="col">Lingkar Kepala</th>
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Petugas</th>


                        <!-- <th scope="col">Umur saat ini</th> -->
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


                
                       </td>
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
