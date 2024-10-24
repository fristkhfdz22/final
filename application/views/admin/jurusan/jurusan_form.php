<h1><?= isset($jurusan) ? 'Edit' : 'Tambah'; ?> Jurusan</h1>
<?php echo validation_errors(); ?>
<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>
<form action="<?= isset($jurusan) ? site_url('admin/jurusan/edit/' . $jurusan['id']) : site_url('jurusan/create'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= isset($jurusan) ? $jurusan['nama'] : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" required><?= isset($jurusan) ? $jurusan['deskripsi'] : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" class="form-control-file" name="logo" id="logo">
        <?php if (isset($jurusan) && $jurusan['logo']): ?>
            <img src="<?= base_url('uploads/jurusan/' . $jurusan['logo']); ?>" width="50">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" class="form-control-file" name="gambar" id="gambar">
        <?php if (isset($jurusan) && $jurusan['gambar']): ?>
            <img src="<?= base_url('uploads/jurusan/' . $jurusan['gambar']); ?>" width="50">
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary"><?= isset($jurusan) ? 'Update' : 'Tambah'; ?></button>
    <a href="<?= site_url('admin/jurusan'); ?>" class="btn btn-secondary">Batal</a>
</form>
