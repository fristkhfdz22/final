<div class="container">
    <h2><?= isset($kepalasekolah) ? 'Edit' : 'Add' ?> Kepala Sekolah</h2>

    <?= form_open_multipart(isset($kepalasekolah) ? 'kepalasekolah/edit/' . $kepalasekolah['id'] : 'kepalasekolah/create'); ?>

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" value="<?= isset($kepalasekolah) ? $kepalasekolah['judul'] : ''; ?>" required>
    </div>

    <div class="form-group">
        <label for="isisambutan">Isi Sambutan</label>
        <textarea class="form-control" name="isisambutan" required><?= isset($kepalasekolah) ? $kepalasekolah['isisambutan'] : ''; ?></textarea>
    </div>

    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control">
        <?php if (isset($kepalasekolah['foto'])): ?>
            <img src="<?= base_url('uploads/kepalasekolah/' . $kepalasekolah['foto']); ?>" width="100">
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>

    <?= form_close(); ?>
</div>
