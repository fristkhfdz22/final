<style>
        /* General footer styles */
        footer {
            background-color: #2e4976;
            color: #d3d3d3;
            padding: 40px 0;
            font-family: 'Arial', sans-serif;
            width: auto;
            
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Footer left section */
        .footer-left {
            width: 28%;
            margin-bottom: 20px;
        }

        .footer-left img.footer-logo {
            width: 70px;
            height: auto;
            margin-bottom: 10px;
        }

        .footer-left h2 {
            margin: 2px 0;
            color: #ffffff;
            font-size: 1.8rem;
        }

        .footer-left p {
            line-height: 1.6;
        }

        /* Footer middle and right sections */
        .footer-middle, .footer-right {
            width: 15%;
            margin-bottom: 10px;
            margin-left: 3%;
        }

        .footer-middle h3, .footer-right h3 {
            margin-bottom: 15px;
            color: #ffffff;
            font-size: 1.2rem;
            border-bottom: 2px solid #ffffff;
            display: inline-block;
            padding-bottom: 5px;
        }

        .footer-middle ul, .footer-right ul {
            list-style: none;
            padding: 0;
        }

        .footer-middle ul li, .footer-right ul li {
            margin-bottom: 5px;
        }

        .footer-middle ul li a, .footer-right ul li a {
            text-decoration: none;
            color: #d3d3d3;
            transition: color 0.3s;
        }

        .footer-middle ul li a:hover, .footer-right ul li a:hover {
            color: #ffffff;
        }

        /* Social media icons */
        .footer-right .social-icons {
            margin-top: 15px;
        }

        .footer-right .social-icons a {
            color: #d3d3d3;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }

        .footer-right .social-icons a:hover {
            color: #ffffff;
        }

        /* Footer bottom */
        .footer-bottom {
    display: flex;
    justify-content: space-between; /* Agar teks dan ikon berada di ujung kiri dan kanan */
    align-items: center; /* Untuk menyelaraskan elemen secara vertikal */
    margin-top: 20px;
    border-top: 1px solid #ffffff;
    padding-top: 15px;
    padding-left: 20px;
    padding-right: 20px;
}

.footer-bottom p {
    margin: 0;
    font-size: 0.9rem;
    color: #d3d3d3;
}

.social-icons a {
    color: #d3d3d3;
    font-size: 1.5rem;
    margin-left: 10px; 
    transition: color 0.3s;
}
.social-icons{
    margin-right: 5%;
}

.social-icons a:hover {
    color: #ffffff;
}

       /* Responsive Design */
@media (max-width: 768px) {
    .footer-left, .footer-middle, .footer-right {
        width: 100%;
        text-align: center;
        padding: 20px 0; /* Tambahkan ruang antar bagian */
    }

    .footer-middle ul, .footer-right ul {
        list-style: none; /* Hilangkan bullet points untuk tampilan yang lebih bersih */
        padding: 0;
        margin: 0;
        text-align: center;
    }

    .footer-middle li, .footer-right li {
        margin: 10px 0; /* Tambahkan margin untuk ruang antar item */
    }

    .footer-right .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px; /* Beri jarak antar ikon */
        margin-top: 15px; /* Tambahkan jarak dengan bagian atas */
    }

    .footer-right .social-icons a {
        color: #fff; /* Warna ikon */
        background-color: #333; /* Latar belakang lingkaran ikon */
        width: 40px;
        height: 40px;
        border-radius: 50%; /* Buat ikon menjadi lingkaran */
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease; /* Animasi transisi */
    }

    .footer-right .social-icons a:hover {
        background-color: #555; /* Warna latar belakang ikon saat di-hover */
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
        margin-top: 15px; /* Tambahkan ruang antara footer bottom dengan elemen lainnya */
    }

    .footer-bottom p {
        margin: 10px 0; /* Atur margin agar teks tidak terlalu rapat */
        font-size: 14px; /* Sesuaikan ukuran teks untuk layar kecil */
        color: #bbb; /* Warna teks yang lebih lembut */
    }

    .footer-bottom .social-icons {
        margin-top: 10px; /* Jarak antara teks dan ikon di layar kecil */
    }
}
.footer-left {
    display: flex;
    align-items: flex-start; /* Pastikan elemen sejajar di bagian atas */
    gap: 15px; /* Jarak antara logo dan teks */
}

.footer-left img.footer-logo {
    width: 80px; /* Sesuaikan lebar logo */
    height: auto; /* Pertahankan aspek rasio */
    display: block; /* Pastikan gambar sebagai elemen block untuk layout yang lebih baik */
}

.footer-text {
    display: flex;
    flex-direction: column; /* Agar teks tersusun vertikal */
    justify-content: center; /* Buat teks di tengah bagian vertikal */
}

.footer-text h2 {
    margin: 0;
    font-size: 20px; /* Sesuaikan ukuran teks */
}

.footer-text p {
    margin: 5px 0;
    font-size: 14px;
    line-height: 1.6;
}
.footer-text .description {
    margin-top: 15px; /* Jarak atas agar lebih jauh dari teks di atas */
    padding-right:  50px; /* Menjorokkan paragraf ini ke dalam */
}





    </style>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="<?php echo base_url('template/assets/img/smkn 1 slawi.png');?>" alt="Logo SMK" class="footer-logo">
                <div class="footer-text">
                    <h2>SMK NEGERI 1 SLAWI</h2>
                    <p>Prestasi Adalah Tradisi</p>
                    <p class="description">SMK Negeri 1 Slawi merupakan sekolah 
                        rintisan berstandar internasional yang 
                        terletak di kota Slawi kec. Slawi kab. Tegal, 
                        Jawa Tengah. SMKN 1 Slawi mempunyai 
                        6 jurusan.</p>
                </div>
            </div>
            
            
    
            <div class="footer-middle">
                <h3>PROFIL</h3>
                <ul>
                    <li><a href="#">Sejarah</a></li>
                    <li><a href="#">Visi - Misi</a></li>
                    <li><a href="#">Sarana Prasarana</a></li>
                    <li><a href="#">Guru dan Staff</a></li>
                </ul>
            </div>
    
            <div class="footer-middle">
                <h3>INFORMASI</h3>
                <ul>
                    <li><a href="#" id="beritaterbaru">Berita</a></li>
                    <li><a href="#">Prestasi</a></li>
                </ul>
            </div>
    
            <div class="footer-right">
                <h3>LINK PENTING</h3>
                <ul>
                    <li><a href="#">Info PPDB</a></li>
                    <li><a href="#">Pengumuman</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 SMK NEGERI 1 SLAWI. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-youtube" ></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
        </div>
    </footer>
    
    
   
    





    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.count');
    
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-to');
                    const count = +counter.innerText;
    
                    const increment = target / 5000; // Ubah 200 sesuai kecepatan yang diinginkan
    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 1); // Ubah 1 ms sesuai kecepatan yang diinginkan
                    } else {
                        counter.innerText = target;
                    }
                };
    
                updateCount();
            });
        });
    </script>
    <!-- Script dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('template/assets/js/script.js'); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel CSS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>
