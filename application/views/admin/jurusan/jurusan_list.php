<div class="container">
    <h1>Daftar Jurusan</h1>
    <a href="<?= base_url('jurusan/create'); ?>" class="btn btn-primary mb-3">Tambah Jurusan</a>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Deskripsi</th>
                <th>Logo</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jurusan as $key => $value): ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['deskripsi']; ?></td>
                    <td>
                        <?php if (!empty($value['logo'])): ?>
                            <img src="<?= base_url('uploads/jurusan' . $value['logo']); ?>" alt="Logo" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!empty($value['gambar'])): ?>
                            <img src="<?= base_url('uploads/jurusan' . $value['gambar']); ?>" alt="Gambar" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/jurusan/edit/' . $value['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('admin/jurusan/delete/' . $value['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
