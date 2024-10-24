<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Guru & Staff</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="container">
    <h2>Daftar Guru & Staff</h2>
    <a href="<?= site_url('gurustaff/create') ?>" class="btn btn-primary">Tambah Guru/Staff</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gurustaff as $gs): ?>
            <tr>
                <td><?= $gs['id'] ?></td>
                <td><?= $gs['nama'] ?></td>
                <td>
                    <img src="<?= base_url('uploads/gurustaff/' . $gs['gambar']) ?>" width="100" alt="Gambar">
                </td>
                <td><?= $gs['jabatan'] ?></td>
                <td>
                    <a href="<?= site_url('gurustaff/edit/' . $gs['id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= site_url('gurustaff/delete/' . $gs['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
