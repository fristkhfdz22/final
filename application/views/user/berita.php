<!-- Berita Terbaru Section -->
<div class="container-fluid" id="beritaterbaru">
    <div class="berita-section">
        <h1 class="text-center">Berita Terbaru</h1>
        <div class="underline"></div>
        <br>
        <div class="row">
            <?php foreach ($berita as $b) : ?>
            <!-- Card for Each News Article -->
            <div class="col-md-4 mb-4">
                <div class="card gray-bg">
                    <div class="position-relative">
                        <?php if (!empty($b['img'])): ?> <!-- Check if image exists -->
                            <img src="<?php echo base_url('uploads/' . $b['img']); ?>" class="card-img-top img-fit" alt="<?php echo $b['judul']; ?>">
                        <?php else: ?>
                            <img src="<?php echo base_url('template/assets/img/banner.png'); ?>" class="card-img-top img-fit" alt="Default Image"> <!-- Default image -->
                        <?php endif; ?>
                        <div class="date-box position-absolute bottom-0 start-0 text-white p-2">
                            <p class="m-0" style="font-size: 20px; text-align: center; color: yellow;">
                                <?php echo date('d', strtotime($b['tanggal'])); ?><br>
                                <span style="font-family: Poppins, sans-serif; font-size: 15px; color: yellow;"><?php echo date('M/Y', strtotime($b['tanggal'])); ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 style="color: rgb(43, 43, 184);"><?php echo $b['judul']; ?></h3>
                        <p style="color: grey;"><?php echo substr($b['konten'], 0, 100); ?>...</p>
                        <a href="<?php echo base_url('berita/detail/' . $b['id']); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <br>
        <div class="buttontampilkansemuaberita">
            <button class="custom-button">
            <a href="<?php echo base_url('berita/detail/'); ?>">
Tampilkan semua</a>
            </button>
        </div>
    </div>
</div>
<br>
