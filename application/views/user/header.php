<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMEANSAWI</title>
    <link rel="shortcut icon" href=" <?php echo base_url('template/assets/img/smkn 1 slawi.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href=" <?php echo base_url('template/assets/css/style.css'); ?>">
    <link rel="stylesheet" href=" <?php echo base_url('template/assets/css/eskul.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <!-- Navbar brand (logo and text) -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="<?php echo base_url('template/assets/img/smkn 1 slawi.png');?>" alt="School Logo" style="height: 50px;">
                    <div class="brand-text ms-2">
                        <span>SMEAN<span class="font-weight-bold">SAWI</span></span>
                        <div class="brand-subtext">Prestasi adalah Tradisi</div>
                    </div>
                </a>
        
                <!-- Toggler for mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Menu Items -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Profil Sekolah Dropdown -->
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="#" style="color: black;">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="tombol">
                            <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                Profil Sekolah
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
    <li class="dropdown">
    <a class="dropdown-item" href="<?php echo base_url('kepsekdetail'); ?>">Sambutan Kepala Sekolah</a>
</li>

                                <li><a class="dropdown-item" href="#">Sejarah</a></li>
                                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="#">Kondisi Sekolah</a></li>
                                <li><a class="dropdown-item" href="#">Sarana Prasarana</a></li>
                                <li><a class="dropdown-item" href="guru&staff.html">Guru dan Staff</a></li>
                            </ul>
                        </li>
        
                        <!-- Berita Dropdown -->
                        <li class="nav-item dropdown">
                            <div class="tombol">
                            <a class="nav-link dropdown-toggle" href="#" id="beritaDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                Berita
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                                <li><a class="dropdown-item" href="#beritaterbaru">Berita Terbaru</a></li>
                                <li><a class="dropdown-item" href="#">Info Sekolah</a></li>
                                <li><a class="dropdown-item" href="#">Agenda</a></li>
                                <li><a class="dropdown-item" href="galeri.html">Galeri</a></li>
                            </ul>
                        </li>
        
                        <!-- Kompetensi Keahlian Dropdown -->
                        <li class="nav-item dropdown">
                            <div class="tombol">
                            <a class="nav-link dropdown-toggle" href="#" id="kompetensiDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                Kompetensi Keahlian
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="kompetensiDropdown">
                                <li><a class="dropdown-item" href="#">PPLG</a></li>
                                <li><a class="dropdown-item" href="#">TJKT</a></li>
                                <li><a class="dropdown-item" href="#">BP</a></li>
                                <li><a class="dropdown-item" href="#">PM</a></li>
                                <li><a class="dropdown-item" href="#">AKL</a></li>
                                <li><a class="dropdown-item" href="#">MPLB</a></li>
                            </ul>
                        </li>
        
                        <!-- Ekstrakurikuler Dropdown -->
                        <li class="nav-item dropdown">
                            <div class="tombol">
                                <a class="nav-link dropdown-toggle" href="#" id="ekstrakurikulerDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                    Ekstrakurikuler
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ekstrakurikulerDropdown">
                                    <li><a class="dropdown-item" href="paskibra.html">Paskibra</a></li>
                                    <li><a class="dropdown-item" href="pks.html">Pks</a></li>
                                    <li><a class="dropdown-item" href="pramuka.html">Pramuka</a></li>
                                    <li><a class="dropdown-item" href="rohis.html">Rohis</a></li>
                                    <li><a class="dropdown-item" href="pmr.html">Pmr</a></li>
                                    <li><a class="dropdown-item" href="voli.html">Bola Voli</a></li>
                                    <li><a class="dropdown-item" href="basket.html">Basket</a></li>
                                    <li><a class="dropdown-item" href="silat.html">Silat</a></li>
                                    <li><a class="dropdown-item" href="robotik.html">Robotik</a></li>
                                    <li><a class="dropdown-item" href="karate.html">Karate</a></li>
                                    <li><a class="dropdown-item" href="tenismeja.html">Tenis Meja</a></li>
                                    <li><a class="dropdown-item" href="sbq.html">SBQ</a></li>
                                    <li><a class="dropdown-item" href="senimusik.html">Seni Musik</a></li>
                                    <li><a class="dropdown-item" href="senitari.html">Seni Tari</a></li>
                                    <li><a class="dropdown-item" href="keputrian.html">Keputrian</a></li>
                                    <li><a class="dropdown-item" href="futsal.html">Futsal</a></li>
                                </ul>
                            </div>
                        </li>
        
                        <!-- Other Menu Items -->
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="#prestasi" style="color: black;">Prestasi</a>
                        </li>
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="#kontak" style="color: black;">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="#kontak" style="color: black;">Info PPDB</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- End Navigation -->
    </header>
    <!-- home -