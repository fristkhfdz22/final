<div class="container">
    <h2><?= isset($prestasi) ? 'Edit Prestasi' : 'Tambah Prestasi' ?></h2>
    <form action="<?= isset($prestasi) ? site_url('prestasi/edit/'.$prestasi['id']) : site_url('prestasi/tambah'); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= isset($prestasi) ? $prestasi['judul'] : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required><?= isset($prestasi) ? $prestasi['deskripsi'] : ''; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= isset($prestasi) ? $prestasi['penulis'] : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= isset($prestasi) ? $prestasi['tanggal'] : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <?php if (isset($prestasi) && $prestasi['gambar']) : ?>
                <img src="<?= base_url('uploads/prestasi/'.$prestasi['gambar']); ?>" width="100" alt="gambar">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
