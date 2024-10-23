<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $berita['judul']; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <header>
        <!-- Tambahkan header Anda di sini -->
    </header>

    <div class="container">
        <h2><?php echo $berita['judul']; ?></h2>
        <p><strong>Diterbitkan pada: </strong><?php echo $berita['tanggal']; ?></p>
        <p><?php echo $berita['konten']; ?></p>
    </div>

    <footer>
        <!-- Tambahkan footer Anda di sini -->
    </footer>
</body>
</html>
