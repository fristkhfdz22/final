<div class="container">
    <h2><?php echo isset($eskul) ? 'Edit' : 'Tambah'; ?> Ekstrakurikuler</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Ekstrakurikuler</label>
            <input type="text" name="nama_ekstra" class="form-control" value="<?php echo isset($eskul) ? $eskul['nama_ekstra'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required><?php echo isset($eskul) ? $eskul['deskripsi'] : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label>Pembimbing</label>
            <input type="text" name="pembimbing" class="form-control" value="<?php echo isset($eskul) ? $eskul['pembimbing'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">
            <?php if (isset($eskul) && $eskul['logo']): ?>
                <p>Logo saat ini: <img src="<?php echo base_url('uploads/ekstrakurikuler/'.$eskul['logo']); ?>" alt="Logo" width="50"></p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <?php if (isset($eskul) && $eskul['gambar']): ?>
                <p>Gambar saat ini: <img src="<?php echo base_url('uploads/ekstrakurikuler/'.$eskul['gambar']); ?>" alt="Gambar" width="50"></p>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo isset($eskul) ? 'Update' : 'Simpan'; ?></button>
    </form>
</div>
