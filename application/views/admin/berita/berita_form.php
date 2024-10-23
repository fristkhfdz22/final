<div class="container">
    <h2><?php echo isset($berita) ? 'Edit' : 'Tambah'; ?> Berita</h2>
    
    <?php echo form_open_multipart(); // Ubah menjadi form multipart ?>
    
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="<?php echo isset($berita) ? $berita['judul'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea class="form-control" name="konten" required><?php echo isset($berita) ? $berita['konten'] : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="<?php echo isset($berita) ? $berita['tanggal'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="<?php echo isset($berita) ? $berita['penulis'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="img">Upload Gambar</label>
            <input type="file" class="form-control" name="img">
            <?php if(isset($berita) && $berita['img']) : ?>
                <img src="<?php echo base_url('uploads/'.$berita['img']); ?>" alt="Gambar Berita" class="img-thumbnail mt-2" style="max-width: 200px;">
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo isset($berita) ? 'Update' : 'Tambah'; ?></button>
        <a href="<?php echo base_url('admin/berita'); ?>" class="btn btn-secondary">Kembali</a>

    <?php echo form_close(); ?>
</div>
