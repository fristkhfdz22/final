<!-- kompetensikeahlian -->
<div class="blue-container">
    <div class="judul" style="color: black;">
        <h1>Kompetensi Keahlian</h1>
    </div>
    <div class="underline"></div>
    <br>
    <div class="card-container23">
        <?php if (!empty($jurusan)): ?>
            <?php foreach ($jurusan as $item): ?>
                <div class="card23">
                    <img alt="Logo <?= $item['nama']; ?>" height="50" src="<?php echo base_url('uploads/jurusan/' . $item['logo']); ?>" width="50" />
                    <br>
                    <div class="text-container">
                        <a href="#" class="title"><?= $item['nama']; ?></a>
                        <h6 class="subtitle"><?= $item['deskripsi']; ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No competency skills found.</p>
        <?php endif; ?>
    </div>
</div>
<br>
