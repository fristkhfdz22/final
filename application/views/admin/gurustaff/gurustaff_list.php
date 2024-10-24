<h1>Daftar Guru/Staff</h1>

<?php if ($this->session->flashdata('success')): ?>
    <p><?= $this->session->flashdata('success'); ?></p>
<?php endif; ?>

<a href="<?= site_url('gurustaff/tambah'); ?>">Tambah Guru/Staff</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($gurustaff as $staff): ?>
        <tr>
            <td><?= $staff['nama']; ?></td>
            <td><?= $staff['jabatan']; ?></td>
            <td>
                <?php if ($staff['gambar']): ?>
                    <img src="<?= base_url('uploads/gurustaff/' . $staff['gambar']); ?>" width="100" alt="Gambar">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= site_url('gurustaff/edit/' . $staff['id']); ?>">Edit</a>
                <a href="<?= site_url('gurustaff/delete/' . $staff['id']); ?>" onclick="return confirm('Are you sure?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
