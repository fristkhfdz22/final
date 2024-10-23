<div class="container">
    <h2><?= isset($ekstrakurikuler) ? 'Edit' : 'Tambah' ?> Ekstrakurikuler</h2>

    <form action="<?= isset($ekstrakurikuler) ? site_url('ekstrakurikuler/edit/' . $ekstrakurikuler->id) : site_url('ekstrakurikuler/add') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_ekstra">Nama Ekstrakurikuler</label>
            <input type="text" name="nama_ekstra" class="form-control" value="<?= isset($ekstrakurikuler) ? $ekstrakurikuler->nama_ekstra : '' ?>" required>
        </div>
        
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required><?= isset($ekstrakurikuler) ? $ekstrakurikuler->deskripsi : '' ?></textarea>
        </div>
        
        <div class="form-group">
            <label for="pembimbing">Pembimbing</label>
            <input type="text" name="pembimbing" class="form-control" value="<?= isset($ekstrakurikuler) ? $ekstrakurikuler->pembimbing : '' ?>">
        </div>

        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo" class="form-control">
            <?php if (isset($ekstrakurikuler) && $ekstrakurikuler->logo): ?>
                <img src="<?= base_url($ekstrakurikuler->logo) ?>" alt="Logo Ekstrakurikuler" style="width: 100px; height: auto; margin-top: 10px;">
                <input type="hidden" name="existing_logo" value="<?= $ekstrakurikuler->logo ?>">
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <?php if (isset($ekstrakurikuler) && $ekstrakurikuler->gambar): ?>
                <img src="<?= base_url($ekstrakurikuler->gambar) ?>" alt="Gambar Ekstrakurikuler" style="width: 100px; height: auto; margin-top: 10px;">
                <input type="hidden" name="existing_gambar" value="<?= $ekstrakurikuler->gambar ?>">
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-success"><?= isset($ekstrakurikuler) ? 'Update' : 'Simpan' ?></button>
        <a href="<?= site_url('ekstrakurikuler') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
