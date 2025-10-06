<main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Riwayat Penimbangan Anak</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Berat Badan</th>
                    <th scope="col">Tinggi Badan</th>
                    <th scope="col">Lingkar Kepala</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1  ?>
                   <?php foreach($imunisasi as $m) : ?>
                   
                    <tr>
                        <!-- <td scope='row'><?= $i++ ?>   </td> -->
                        <td><?= $m['tgl_imun'] ?></td>
                       <td><?= $m['nama_anak'] ?></td>
                       <td><?= $m['nik'] ?></td>
                       <td><?= $m['bb'] ?></td>
                       <td><?= $m['tb'] ?></td>
                       <td><?= $m['lk'] ?></td>

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
