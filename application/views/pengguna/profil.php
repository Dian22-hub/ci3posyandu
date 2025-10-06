<main id="main">
  <!-- ======= Gallery Section ======= -->
  </div><!-- End Page Title -->
  <section id="profile" class="profile">
      <div class="container">
      <?php foreach ($ibu as $i) { ?> 
        <div class="section-title ">
          <div class="row content">
  <section class="section profile">
    <h2>Edit Profile</h2>
    <div class="row">
      <div class="col-xl-4 mr-2">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          
          <img src="<?= base_url('assets/img/') . $i['image']; ?>" class="rounded-circle" alt="" height="150" width = "150">
            <h2><?= $i['nama_ibu']; ?></h2>
            <h3>Orang Tua</h3>
            
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
              </li>


            </ul>
            <div class="tab-content pt-2">

              
            
                    
               <div class="row mb-3">
                <?= form_open_multipart('pengguna/ubahibu')?>
                 <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                 <div class="col-md-8 col-lg-9">
                 <img src="<?= base_url('assets/img/') . $i['image']; ?>" class="rounded-circle" alt="" height="150" width = "150">
                   
                   <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image"></label></input>
                     
                   </div>
                 </div>
               </div>
             <input type="hidden" name="id_ibu" id="id_ibu" value="<?php echo $i['id_ibu']; ?>">
               <div class="row mb-3">
                 <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                 <div class="col-md-8 col-lg-9">
                   <input readonly  type="text" class="form-control" value="<?= $i['nama_ibu']; ?>" id="nama_ibu" name="nama_ibu">
                 </div>
               </div>
               <div class="row mb-3">
                 <label for="Job" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                 <div class="col-md-8 col-lg-9">
                   <input type="text" class="form-control" name="nik" readonly value="<?= $i['NIK']; ?>">
                 </div>
               </div>
             
               <div class="row mb-3">
                 <label for="Job" class="col-md-4 col-lg-3 col-form-label">Posisi</label>
                 <div class="col-md-8 col-lg-9">
                   <input readonly name="job" type="text" class="form-control" id="Job" value="Orang Tua">
                 </div>
               </div>
             
            
               <div class="row mb-3">
                 <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                 <div class="col-md-8 col-lg-9">
                   <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $i['no_tlp']; ?>">
                 </div>
               </div>
             

               </div>
             
             
               <div class="text-center">
                 <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
             </form><!-- End Profile Edit Form -->
             
<?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
