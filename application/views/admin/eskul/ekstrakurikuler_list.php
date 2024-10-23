<div class="container">
<table class="table table-bordered">
<a href="<?= site_url('ekstrakurikuler/add') ?>" class="btn btn-primary">Tambah Ekstrakurikuler</a>

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ekstrakurikuler</th>
            <th>Deskripsi</th>
            <th>Logo</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($ekstrakurikuler as $ekstra): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $ekstra->nama_ekstra ?></td>
                <td><?= $ekstra->deskripsi ?></td>
                <td>
                    <?php if ($ekstra->logo): ?>
                        <img src="<?= base_url('uploads/' . $ekstra->logo) ?>" alt="Logo" style="width: 100px; height: auto;">
                    <?php else: ?>
                        <span>Tidak ada logo</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($ekstra->gambar): ?>
                        <img src="<?= base_url('uploads/' . $ekstra->gambar) ?>" alt="Gambar" style="width: 100px; height: auto;">
                    <?php else: ?>
                        <span>Tidak ada gambar</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?= site_url('ekstrakurikuler/edit/' . $ekstra->id) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= site_url('ekstrakurikuler/delete/' . $ekstra->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
