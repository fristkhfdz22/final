<h1>Daftar Jurusan</h1>
<a href="<?= site_url('jurusan/create'); ?>" class="btn btn-primary">Tambah Jurusan</a>
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Logo</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jurusan as $j): ?>
            <tr>
                <td><?= $j['id']; ?></td>
                <td><?= $j['nama']; ?></td>
                <td><?= $j['deskripsi']; ?></td>
                <td><img src="<?= base_url('uploads/jurusan/' . $j['logo']); ?>" width="50"></td>
                <td><img src="<?= base_url('uploads/jurusan/' . $j['gambar']); ?>" width="50"></td>
                <td>
                    <a href="<?= site_url('admin/jurusan/edit/' . $j['id']); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= site_url('admin/jurusan/delete/' . $j['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
