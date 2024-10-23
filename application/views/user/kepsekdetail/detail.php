<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Ganti dengan link CSS yang sesuai -->
</head>
<body>
    <header>
        <!-- Tambahkan kode header di sini -->
    </header>

    <main>
        <br>
        <br>
        <br>
        <br>
        <div class="containersambutankepalasekolah">
            <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
            <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
            <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
            <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Sambutan Kepala Sekolah</h4>
        </div>
        <div class="imagekepalasekolah">
            <img src="<?php echo base_url('uploads/kepalasekolah/' . $kepalasekolah['foto']); ?>" alt="Kepala Sekolah" class="kepalasekolah-img" width="300">
        </div>
        <br>
        <div class="judulsambutan">
            <h2><?php echo $kepalasekolah['judul']; ?></h2>
            <div class="underline"></div>
        </div>
        <br>
        <div class="isisambutan">
            <p><?php echo $kepalasekolah['isisambutan']; ?></p>
            <p><small><?php echo $kepalasekolah['tanggal']; ?></small></p>
        </div>
    </main>

    <footer>
        <!-- Tambahkan kode footer di sini -->
    </footer>
</body>
</html>
