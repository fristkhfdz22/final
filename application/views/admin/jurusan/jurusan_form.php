<div class="container">
    <h2><?php echo isset($jurusan) ? 'Edit Jurusan' : 'Add Jurusan'; ?></h2>
    <?php echo validation_errors(); ?>
    
    <!-- Form to handle file upload -->
    <?php echo form_open_multipart(); ?> 
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo isset($jurusan) ? $jurusan['nama'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required><?php echo isset($jurusan) ? $jurusan['deskripsi'] : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="logo">Logo (Upload Image)</label>
            <input type="file" name="logo" class="form-control">
            <?php if (isset($jurusan) && !empty($jurusan['logo'])): ?>
                <img src="<?php echo base_url('uploads/jurusan' . $jurusan['logo']); ?>" width="50">
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar (Upload Image)</label>
            <input type="file" name="gambar" class="form-control">
            <?php if (isset($jurusan) && !empty($jurusan['gambar'])): ?>
                <img src="<?php echo base_url('uploads/jurusan' . $jurusan['gambar']); ?>" width="50">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-success"><?php echo isset($jurusan) ? 'Update' : 'Add'; ?></button>
        <a href="<?php echo base_url('admin/jurusan'); ?>" class="btn btn-secondary">Cancel</a>
    <?php echo form_close(); ?>
</div>
