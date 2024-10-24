<?= form_open_multipart('gurustaff/tambah'); ?>
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= set_value('nama', isset($gurustaff) ? $gurustaff['nama'] : ''); ?>" required>
    </div>
    <div>
        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" value="<?= set_value('jabatan', isset($gurustaff) ? $gurustaff['jabatan'] : ''); ?>" required>
    </div>
    <div>
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" accept="image/*">
        <?php if (isset($gurustaff) && $gurustaff['gambar']): ?>
            <img src="<?= base_url('uploads/gurustaff/' . $gurustaff['gambar']); ?>" width="100" alt="Gambar Guru/Staff">
        <?php endif; ?>
    </div>
    <button type="submit">Simpan</button>
<?= form_close(); ?>
