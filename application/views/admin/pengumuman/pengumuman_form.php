<!-- application/views/admin/pengumuman_form.php -->
<div class="container">
    <h2><?php echo isset($pengumuman) ? 'Edit' : 'Tambah'; ?> Pengumuman</h2>
    <?php echo form_open(); ?>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="<?php echo isset($pengumuman) ? $pengumuman['judul'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" name="isi" required><?php echo isset($pengumuman) ? $pengumuman['isi'] : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal_mulai">Tanggal Mulai</label>
            <input type="datetime-local" class="form-control" name="tanggal_mulai" value="<?php echo isset($pengumuman) ? date('Y-m-d\TH:i', strtotime($pengumuman['tanggal_mulai'])) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="tanggal_selesai">Tanggal Selesai</label>
            <input type="datetime-local" class="form-control" name="tanggal_selesai" value="<?php echo isset($pengumuman) ? date('Y-m-d\TH:i', strtotime($pengumuman['tanggal_selesai'])) : ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo isset($pengumuman) ? 'Update' : 'Tambah'; ?></button>
        <a href="<?php echo base_url('pengumuman'); ?>" class="btn btn-secondary">Kembali</a>
    <?php echo form_close(); ?>
</div>
