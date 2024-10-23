<div class="container">
    <h2>List of Jurusan</h2>
    <a href="<?php echo base_url('jurusan/create'); ?>" class="btn btn-primary">Add New Jurusan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Logo</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($jurusan)): ?>
                <?php foreach ($jurusan as $item): ?>
                    <tr>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['deskripsi']; ?></td>
                        <td><img src="<?php echo base_url('uploads/' . $item['logo']); ?>" width="50"></td>
                        <td><img src="<?php echo base_url('uploads/' . $item['gambar']); ?>" width="50"></td>
                        <td>
                            <a href="<?php echo base_url('admin/jurusan/edit/' . $item['id']); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('admin/jurusan/delete/' . $item['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No Jurusan found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
