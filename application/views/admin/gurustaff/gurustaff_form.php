<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Guru & Staff</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="container">
    <h2><?= isset($gurustaff) ? 'Edit' : 'Tambah' ?> Guru/Staff</h2>
    <form action="<?= isset($gurustaff) ? site_url('gurustaff/update/' . $gurustaff->id) : site_url('gurustaff/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required value="<?= isset($gurustaff) ? $gurustaff->nama : '' ?>">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control">
            <?php if (isset($gurustaff) && $gurustaff->gambar): ?>
                <img src="<?= base_url('uploads/gurustaff/' . $gurustaff->gambar) ?>" width="100" alt="Gambar">
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" name="jabatan" class="form-control" required value="<?= isset($gurustaff) ? $gurustaff->jabatan : '' ?>">
        </div>
        <button type="submit" class="btn btn-primary"><?= isset($gurustaff) ? 'Update' : 'Simpan' ?></button>
        <a href="<?= site_url('gurustaff') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
