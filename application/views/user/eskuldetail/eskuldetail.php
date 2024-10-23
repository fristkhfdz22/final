<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2><?php echo $eskul['nama_ekstra']; ?></h2>
    <p><strong>Deskripsi:</strong> <?php echo $eskul['deskripsi']; ?></p>
    <p><strong>Pembimbing:</strong> <?php echo $eskul['pembimbing']; ?></p>
    <p><strong>Logo:</strong></p>
    <?php if ($eskul['logo']): ?>
        <img src="<?php echo base_url('uploads/ekstrakurikuler/'.$eskul['logo']); ?>" alt="Logo" width="100">
    <?php else: ?>
        <span>Tidak ada logo</span>
    <?php endif; ?>
    <p><strong>Gambar:</strong></p>
    <?php if ($eskul['gambar']): ?>
        <img src="<?php echo base_url('uploads/ekstrakurikuler/'.$eskul['gambar']); ?>" alt="Gambar" width="100">
    <?php else: ?>
        <span>Tidak ada gambar</span>
    <?php endif; ?>
    <a href="<?php echo site_url('ekstrakurikuler'); ?>" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>