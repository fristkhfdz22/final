<br>
<br>
<br>
<br>
<br>

<!-- Ekstrakurikuler -->
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
    <h1>Ekstrakurikuler</h1>
    <div class="underline"></div>
</div>
<br>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
        <?php 
        // Hitung total eskul untuk membagi menjadi beberapa carousel-item
        $eskulChunks = array_chunk($ekstrakurikuler, 3); // Membagi 3 per slide

        foreach ($eskulChunks as $index => $eskulItems) : ?>
            <div class="carousel-item <?= ($index == 0) ? 'active' : ''; ?>">
                <div class="d-flex">
                    <?php foreach ($eskulItems as $eskul): ?>
                        <div class="col-4 p-2">
                            <div class="card">
                                <img src="<?= base_url('uploads/ekstrakurikuler/' . $eskul['gambar']); ?>" class="card-img-top" alt="<?= $eskul['nama_ekstra']; ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $eskul['nama_ekstra']; ?></h4>
                                    <p><?= word_limiter($eskul['deskripsi'], 20); ?></p>
                                    <a href="<?= base_url('ekstrakurikuler/detail/' . $eskul['id']); ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
