
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">DIVA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div> 

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('pengguna'); ?>">Home</a></li>
          <li class="dropdown"><a href="#profile"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('pengguna#profile'); ?>">Profil Ibu dan Anak</a></li>
              <li><a href="<?= base_url()?>pengguna/ubahibu/<?php echo $user['email'];?>">Pengaturan Profil</a></li>
            </ul>
            <li><a class="nav-link scrollto" href="<?= base_url()?>pengguna/history_anak_ukur/<?php echo $id_anak['id_anak'];?>">Riwayat Imunisasi Anak</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('autentifikasi/logout'); ?>">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
