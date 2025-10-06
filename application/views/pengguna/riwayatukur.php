

<main id="main">
</div>

<main id="main">
  <!-- ======= Gallery Section ======= -->
  </div><!-- End Page Title -->
  <section id="profile" class="profile">
      <div class="container">

        <div class="section-title ">
          <div class="row content">
  <section class="section profile">
    <h2>Riwayat Imunisasi</h2>




       <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#penimbangan">Riwayat Imunisasi</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#imunisasi">Riwayat Penimbangan</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="penimbangan">
                <h4>Riwayat Imunisasi</h4>
                <div class="card">
            <div class="card-body">
                
<?php foreach ($anak as $a) { ?>  
  <table class="table datatable">
                    <thead>
                  <tr>
                      
                      <th scope="col">Nama</th>
                      <th scope="col">Tanggal Imunisasi</th>
                    <th scope="col">Nama Layanan</th>
                </tr>
            </thead>
            <?php foreach ($imunisasi2 as $s) { ?> 
                              <tr>
                    <td><?= $a['nama_anak']; ?></td>
                    <td><?= $s['tgl_imun'] ?></td>
                    <td><?=$s['nama_vaksin']?></td>
                  </tr>
                  <?php } ?>
                  <?php } ?>
                  </tbody>
              </table>
</div>
</div>
</div>   

<div class="tab-pane fade profile-edit" id="imunisasi"> 
    <h4>Riwayat Penimbangan</h4>
    <div class="card">
        <div class="card-body">
            <!-- Table with stripped rows -->
             <?php foreach ($anak as $a) { ?>  
            <table class="table datatable">
                <thead>
                    
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Pengukuran</th>
                        <th scope="col">Berat Badan</th>
                        <th scope="col">Tinggi Badan</th>
                        <th scope="col">Lingkar Kepala</th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($imunisasi as $m) { ?> 
                        <tr>
                            <td><?= $a['nama_anak']; ?></td>
                            <td><?= $m['tgl_imun']; ?></td>
                            <td><?= $m['bb']; ?></td>
                            <td><?= $m['tb']; ?></td>
                            <td><?= $m['lk']; ?></td>
                        </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

  </div>
<!-- End Profile Edit Form -->

</div>

<div class="tab-pane fade profile-edit pt-3 pt-3" id="imunisasi">
