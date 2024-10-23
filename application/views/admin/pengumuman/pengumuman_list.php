<!-- application/views/admin/pengumuman_list.php -->
<div class="container">
    <h2>Pengumuman</h2>
    <a href="<?php echo base_url('pengumuman/create'); ?>" class="btn btn-primary">Tambah Pengumuman</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengumuman as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['judul']; ?></td>
                <td><?php echo $item['isi']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($item['tanggal_mulai'])); ?></td>
                <td><?php echo date('d-m-Y', strtotime($item['tanggal_selesai'])); ?></td>
                <td>
                    <a href="<?php echo base_url('pengumuman/edit/' . $item['id']); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo base_url('pengumuman/delete/' . $item['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
