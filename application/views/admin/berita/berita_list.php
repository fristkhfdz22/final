<div class="container">
    <h2>List of Berita</h2>
    <a href="<?php echo base_url('berita/create'); ?>" class="btn btn-primary">Tambah Berita</a>

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Image</th> <!-- Change the column header to Image -->
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($berita)): ?>
                <?php foreach ($berita as $item): ?>
                    <tr>
                        <td><?php echo $item['judul']; ?></td>
                        <td><?php echo $item['konten']; ?></td>
                        <td>
                            <?php if (!empty($item['img'])): ?> <!-- Check if image exists -->
                                <img src="<?php echo base_url('uploads/' . $item['img']); ?>" alt="<?php echo $item['judul']; ?>" style="width: 100px; height: auto;"> <!-- Render the image -->
                            <?php else: ?>
                                No Image <!-- Fallback message -->
                            <?php endif; ?>
                        </td>
                        <td><?php echo $item['tanggal']; ?></td>
                        <td><?php echo $item['penulis']; ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/berita/edit/' . $item['id']); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('admin/berita/delete/' . $item['id']); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No Berita found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
