<div class="container">
    <h2>Kepala Sekolah List</h2>
    <a href="<?= base_url('kepalasekolah/create'); ?>" class="btn btn-primary">Add New</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi Sambutan</th>
                <th>Tanggal</th>
                <th>Foto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kepalasekolah as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['judul']; ?></td>
                    <td><?= $item['isisambutan']; ?></td>
                    <td><?= $item['tanggal']; ?></td>
                    <td><img src="<?= base_url('uploads/kepalasekolah/' . $item['foto']); ?>" width="100"></td>
                    <td>
                        <a href="<?= base_url('kepalasekolah/edit/' . $item['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('kepalasekolah/delete/' . $item['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
