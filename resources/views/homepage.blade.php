<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivemobile.css') }}">
    <!-- Font -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include Owl Carousel CSS dari CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Include Owl Carousel Theme Default CSS dari CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="/homepage" class="logo"><img src="image/logo web.png" alt=""></a>
        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/cek-kesehatan">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter">Booking Dokter</a></li>
            <li><a href="/rs-terdekat">RS Terdekat</a></li>
        </ul>

        <div class="main-navbar">
            <a href="/profile">Login</a>
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <!-- Main Web -->
    <main>
        <div class="greeting">
            <h2>Welcome, User</h2>
            <h1>Selamat datang di Bangga Sehat! Bersama-sama Menuju Gaya Hidup Sehat!</h1>
            <p>Konsultasikan gejala anda dengan mudah dan temukan tips and trick kesehatan yang bermanfaat lainnya</p>
            <div class="search">
                <input type="text" placeholder="Ketuk disini untuk mencari">
                <button>Cari</button>
            </div>
        </div>
        <img src="image/klinik.png" alt="">
    </main>
    <!-- Step Booking -->
    <section class="hero1">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Bagaimana caranya?</p>
        </div>
        <h1>Solusi Cepat Untuk Mengatur Jadwal Konsultasi Dengan Dokter</h1>
        <div class="head-step">
            <div class="step">
                <div class="circle">
                    <i class='bx bxs-user'></i>
                    <div class="mini-circle">1</div>
                </div>
                <h1>Cari Dokter</h1>
                <p>Cari dokter sesuai dengan gejala yang anda keluhkan saat ini</p>
            </div>
            <i class='bx bx-right-arrow-alt'></i>
            <div class="step">
                <div class="circle">
                    <i class='bx bxs-user-check'></i>
                    <div class="mini-circle">2</div>
                </div>
                <h1>Cek Profil Dokter</h1>
                <p>Periksa profile dokter apakah sudah sesuai dengan yang anda inginkan</p>
            </div>
            <i class='bx bx-right-arrow-alt'></i>
            <div class="step">
                <div class="circle">
                    <i class='bx bxs-calendar-plus'></i>
                    <div class="mini-circle">3</div>
                </div>
                <h1>Buat Jadwal</h1>
                <p>Buat jadwal konsultasi dengan dokter yang sudah anda pilih</p>
            </div>
            <i class='bx bx-right-arrow-alt'></i>
            <div class="step">
                <div class="circle">
                    <i class='bx bxs-bookmark-heart'></i>
                    <div class="mini-circle">4</div>
                </div>
                <h1>Dapatkan Konsultasi</h1>
                <p>Dapatkan konsultasi dengan dokter dengan menunjukan no antrian ke klinik</p>
            </div>
        </div>
    </section>
    <!-- Dokter Pilihan -->
    <section class="doctor-hero">
        <div class="main-doctor-text">
            <div class="doctor-text">
                <div class="hero-title">
                    <img src="image/beat.png" alt="">
                    <p>Dokter Pilihan</p>
                </div>
                <h1>Konsultasikan Secara Cepat Dengan Dokter Terekomendasi</h1>
            </div>
            <div class="doctor-button">
                <!-- Manual Next and Prev Buttons -->
                <button class="manual-prev"><i class='bx bx-chevron-left'></i></button>
                <button class="manual-next"><i class='bx bx-chevron-right'></i></button>
            </div>
        </div>
        <div class="owl-carousel head-card">
            <div class="card-doctor">
                <img src="image/dokter.png" alt="">
                <span>Dokter Umum</span>
                <p>Dr. Irfan Abdullah</p>
            </div>
            <div class="card-doctor">
                <img src="image/dokter7.png" alt="">
                <span>Dokter Umum</span>
                <p>Dr. Irfan Abdullah</p>
            </div>
            <div class="card-doctor">
                <img src="image/doktetr10.png" alt="">
                <span>Dokter Umum</span>
                <p>Dr. Irfan Abdullah</p>
            </div>
            <div class="card-doctor">
                <img src="image/dokter9.png" alt="">
                <span>Dokter Umum</span>
                <p>Dr. Irfan Abdullah</p>
            </div>
            <div class="card-doctor">
                <img src="image/dokter2.png" alt="">
                <span>Dokter Umum</span>
                <p>Dr. Irfan Abdullah</p>
            </div>
            <div class="card-doctor">
                <img src="image/dokter4.png" alt="">
                <span>Dokter Umum</span>
                <p>Dr. Irfan</p>
            </div>
        </div>


    </section>
    <!-- Hero 1 -->
    <section class="hero-content1">
        <div class="image-hero1">
            <img src="image/klinik 2.png" class="hero-content1-img" alt="">
            <img src="image/klinik 3.png" class="hero-content1-img2" alt="">
        </div>
        <div class="content1-hero">
            <div class="hero-title">
                <img src="image/beat.png" alt="">
                <p>Mengapa Harus Memilih Kami?</p>
            </div>
            <h1>Konten Berkualitas Tinggi yang Menginspirasi</h1>
            <p>Kami menyediakan konten kesehatan berkualitas tinggi yang tidak hanya informatif, tetapi juga
                menginspirasi. Temukan sumber daya yang Anda butuhkan untuk memulai atau meningkatkan gaya hidup sehat
                Anda. Kesehatan Anda adalah fokus utama kami. Kami siap menyajikan informasi terpercaya dan solusi
                praktis untuk mendukung perjalanan kesehatan Anda.</p>
        </div>
    </section>
    <!-- Hero 2 -->
    <section class="hero-content2">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Kenapa Kami Bisa Berkualitas?</p>
        </div>
        <h1>Panduan Praktis untuk Kesehatan Sehari-hari</h1>
        <div class="content2-hero">
            <div class="text-content">
                <h1>Temukan panduan praktis yang dapat diaplikasikan dalam kehidupan sehari-hari.</h1>
                <p>Selalu banyak artikel dan konten terupdate tentang kesehatan dan banyaknya dokter yang berpengalaman
                    dalam mengangani semua pasiennya. Selain itu banyak User yang puas akan pelayanan yang kami berikan.
                    Website yang mudah dioperasikan dan ramah terhadap penggunanya serta fitur yang melimpah.</p>
                <button>Baca Selengkapnya</button>
                <div class="rate">
                    <div class="count">
                        <h1>100+</h1>
                        <p>Artikel</p>
                    </div>
                    <div class="count">
                        <h1>2K+</h1>
                        <p>User</p>
                    </div>
                    <div class="count">
                        <h1>30+</h1>
                        <p>Dokter</p>
                    </div>
                </div>
            </div>
            <div class="image-hero2">
                <img src="image/health1.png" class="hero-content3-img" alt="">
                <img src="image/health2.png" class="hero-content3-img" alt="">
                <img src="image/health3.png" class="hero-content3-img" alt="">
                <img src="image/health4.png" class="hero-content3-img" alt="">
            </div>
        </div>
    </section>
    <!-- Fitur Home-->
    <section class="fitur">
        <div class="fitur-text">
            <div class="hero-title">
                <img src="image/beat.png" alt="">
                <p>Ingin mencoba alat kami?</p>
            </div>
            <h1>Kalkulator Kesehatan</h1>
            <P>Selalu banyak artikel dan konten terupdate tentang kesehatan dan banyaknya dokter yang berpengalaman
                dalam mengangani semua pasiennya. Selain itu banyak User yang puas akan pelayanan yang kami berikan.
                Website yang mudah dioperasikan dan ramah terhadap penggunanya serta fitur yang melimpah.</P>
            <a href="/cek-kesehatan">
                <button>Lihat Fitur Lainnya</button>
            </a>
        </div>
        <div class="menu-fitur">
            <div class="card-fitur">
                <img src="image/kalori.png" alt="">
                <h1>Kalori</h1>
            </div>
            <div class="card-fitur">
                <img src="image/bmi.png" alt="">
                <h1>BMI</h1>
            </div>
            <div class="card-fitur">
                <img src="image/cemas.png" alt="">
                <h1>Cemas</h1>
            </div>
            <div class="card-fitur">
                <img src="image/stress.png" alt="">
                <h1>Stress</h1>
            </div>
        </div>
    </section>
    <!-- Kategori Artikel Home -->
    <section class="artikel-home">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Ada apa saja dalam artikel?</p>
        </div>
        <h1>Pilihan Artikel Kesehatan Untuk Anda Baca</h1>
        <div class="wrapcard-artikel-home">
            <div class="card-artikel-home">
                <img src="image/kesehatan.png" alt="">
                <h1>Kesehatan</h1>
                <p>Artikel yang membahas tentang perlunya untuk menjaga kesehatan mental dan fisik.</p>
                <div class="selengkapnya">
                    <p>Baca Selengkapnya</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
            <div class="card-artikel-home">
                <img src="image/obat.png" alt="">
                <h1>Obat-Obatan</h1>
                <p>Membahas tentang obat-obatan untuk meredakan dan menyembuhkan berbagai gejala.</p>
                <div class="selengkapnya">
                    <p>Baca Selengkapnya</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
            <div class="card-artikel-home">
                <img src="image/tips.png" alt="">
                <h1>Tips and Tricks</h1>
                <p>Memberikan tips dan trik untuk diet, kesehatan, bulking dan masih banyak lainnya.</p>
                <div class="selengkapnya">
                    <p>Baca Selengkapnya</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Artikel Home -->
    <section class="artikel-home2">
        <div class="main-artikel-home2-text">
            <div class="artikel-home2-text">
                <div class="hero-title">
                    <img src="image/beat.png" alt="">
                    <p>Artikel yang wajib anda baca</p>
                </div>
                <h1>Rekomendasi Artikel</h1>
            </div>
            <div class="button-artikel-home2">
                <!-- Manual Next and Prev Buttons -->
                <button class="manual-prev2"><i class='bx bx-chevron-left'></i></button>
                <button class="manual-next2"><i class='bx bx-chevron-right'></i></button>
            </div>
        </div>
        <div class="owl-carousel wrapcard-artikel-home2">
            <div class="card-artikel-home2">
                <img src="image/surat.png" alt="">
                <span>Kesehatan</span>
                <p>Menjelajahi Kesehatan Holistik: Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.</p>
            </div>
            <div class="card-artikel-home2">
                <img src="image/obatartikel.png" alt="">
                <span>Kesehatan</span>
                <p>Menjelajahi Kesehatan Holistik: Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.</p>
            </div>
            <div class="card-artikel-home2">
                <img src="image/timbangan.png" alt="">
                <span>Kesehatan</span>
                <p>Menjelajahi Kesehatan Holistik: Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.</p>
            </div>
            <div class="card-artikel-home2">
                <img src="image/brokoli2.png" alt="">
                <span>Kesehatan</span>
                <p>Menjelajahi Kesehatan Holistik: Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.</p>
            </div>
            <div class="card-artikel-home2">
                <img src="image/obatartikel.png" alt="">
                <span>Kesehatan</span>
                <p>Menjelajahi Kesehatan Holistik: Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.</p>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="logo">
            <a href="/homepage" class="logo"><img src="image/logo2.png" alt=""></a>
            <p>Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131</p>
            <div class="sosmed">
                <i class='bx bxl-twitter'></i>
                <i class='bx bxl-facebook-circle'></i>
                <i class='bx bxl-instagram-alt'></i>
                <i class='bx bxl-whatsapp'></i>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li class="title-footer">Menu</li>
                <li>Home</li>
                <li>Blog</li>
                <li>Cek Kesehatan</li>
                <li>Booking Dokter</li>
                <li>RS Terdekat</li>
            </ul>
        </div>
        <div class="artikel">
            <ul>
                <li class="title-footer">Artikel</li>
                <li>Kesehatan</li>
                <li>Obat-Obatan</li>
                <li>Tips and Tricks</li>
                <li>Berita</li>
                <li>Olahraga</li>
            </ul>
        </div>
        <div class="kontak">
            <ul>
                <li class="title-footer">Kontak Kami</li>
                <li>+62 0899 5556 3333</li>
                <li>banggasehat.gmail.com</li>
            </ul>
        </div>
    </footer>
</body>
<!-- Include Owl Carousel JavaScript dari CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        // Inisialisasi Owl Carousel
        var owl = $(".wrapcard-artikel-home2").owlCarousel({
            items: 5,
            loop: true,
            margin: 20,
            nav: false, // Nonaktifkan navigasi bawaan
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });

        // Manual Prev Button
        $(".manual-prev2").on("click", function() {
            owl.trigger("prev.owl.carousel");
        });

        // Manual Next Button
        $(".manual-next2").on("click", function() {
            owl.trigger("next.owl.carousel");
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Initialize Owl Carousel
        var owl = $(".owl-carousel").owlCarousel({
            items: 5,
            loop: true,
            margin: 20,
            nav: false, // Disable default navigation
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        // Manual Prev Button
        $(".manual-prev").on("click", function() {
            owl.trigger("prev.owl.carousel");
        });

        // Manual Next Button
        $(".manual-next").on("click", function() {
            owl.trigger("next.owl.carousel");
        });
    });
</script>
<script>
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open');
    }

    // Close the menu when a link is clicked
    document.querySelectorAll('.navbar a').forEach(link => {
        link.onclick = () => {
            menu.classList.remove('bx-x');
            navbar.classList.remove('open');
        }
    });
</script>


</html>
