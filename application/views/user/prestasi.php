<br>
<br>
<br>

<!-- prestasi -->

<style>
    .card img {
        height: 200px; /* Tinggi tetap untuk gambar card */
        object-fit: cover; /* Mengatur gambar agar tidak terdistorsi */
    }

    .card {
        cursor: pointer;
        flex: 1; /* Membuat card mengisi ruang yang tersedia */
    }
</style>

<div class="judul" style="color: black;">
    <h1>Prestasi</h1>
    <div class="underline"></div>
</div>
<br>

<div id="carouselExampleControls1" class="carousel slide" data-bs-ride="false">
<div class="carousel-inner" id="prestasi">
            <?php if (!empty($prestasi) && is_array($prestasi)): ?>
                <?php $active = 'active'; ?>
                <?php foreach (array_chunk($prestasi, 3) as $chunk): ?>
                    <div class="carousel-item <?= $active; ?>">
                        <div class="d-flex">
                            <?php foreach ($chunk as $item): ?>
                                <?php if (is_object($item)): ?>
                                    <div class="col-4 p-2">
                                        <div class="card">
                                            <?php if (!empty($item->gambar) && file_exists('uploads/prestasi/' . $item->gambar)): ?>
                                                <img src="<?= base_url('uploads/prestasi/' . $item->gambar); ?>" class="card-img-top" alt="<?= htmlspecialchars($item->judul); ?>" style="height: 200px; object-fit: cover;">
                                            <?php else: ?>
                                                <img src="<?= base_url('uploads/default-image.jpg'); ?>" class="card-img-top" alt="Gambar Default" style="height: 200px; object-fit: cover;"> <!-- Gambar default -->
                                            <?php endif; ?>
                                            <div class="card-body">
                                                <h5 class="card-title"><?= isset($item->judul) ? htmlspecialchars($item->judul) : 'Judul Tidak Tersedia'; ?></h5>
                                                <p class="card-text"><?= isset($item->deskripsi) ? htmlspecialchars($item->deskripsi) : 'Deskripsi Tidak Tersedia'; ?></p>
                                                <h6 class="card-date"><?= isset($item->tanggal) ? htmlspecialchars($item->tanggal) : 'Tanggal Tidak Tersedia'; ?></h6>
                                                <div class="icon-text">
                                                    <i class="fas fa-user"></i>
                                                    <span>: <?= isset($item->penulis) ? htmlspecialchars($item->penulis) : 'penulis Tidak Tersedia'; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>            <?php $active = ''; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="carousel-item active">
                <div class="d-flex">
                    <div class="col-12 p-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Tidak ada prestasi yang ditampilkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
