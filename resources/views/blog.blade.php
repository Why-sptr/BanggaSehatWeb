<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivemobile.css') }}">
    <!-- Font -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script>
        function openTab(tabName) {
            var i, tabContent, tabLinks;
            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].classList.remove("active");
            }
            document.getElementById(tabName).classList.add("active");

            // Remove 'active' class from all tabs
            tabLinks = document.getElementsByClassName("tab");
            for (i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove("active");
            }

            // Add 'active' class to the clicked tab
            event.currentTarget.classList.add("active");
            // Log the clicked element for debugging
            console.log("Clicked Element:", event.target);

            // Add 'active' class to the clicked tab only if it is a tab element
            if (event.target.classList.contains("tab")) {
                event.target.classList.add("active");
            }
        }
    </script>
</head>

<body>
    <!-- Navbar -->
    <header class="sticky-header">
        <a href="/homepage" class="logo"><img src="image/logo web.png" alt=""></a>
        <ul class="navbar">
            <li><a href="/homepage">Home</a></li>
            <li><a href="/blog" class="active">Blog</a></li>
            <li><a href="/cek-kesehatan">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter">Booking Dokter</a></li>
            <li><a href="/rs-terdekat">RS Terdekat</a></li>
        </ul>

        <div class="main-navbar">
            <a href="#">Login</a>
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <div class="search-blog">
        <input type="text" placeholder="Ketuk disini untuk mencari">
        <button>Cari</button>
    </div>
    <section class="blog">
        <div class="main-blog">
            <a href="/detail-blog">
                <div class="top-blog">
                    <img src="image/brokoli.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Kesehatan Jantung dan Diet: Hubungan Antar Kolesterol, Gula Darah, dan Pilihan Makanan.</h1>
                </div>
            </a>
            <h2>Harus Dilihat</h2>
            <a href="/detail-blog">
                <div class="item-blog">
                    <div class="card-item-blog">
                        <img src="image/surat.png" alt="">
                        <span>Kesehatan</span>
                        <h1>Menjelajahi Kesehatan Holistik: </h1>
                        <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                        </p>
                    </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/obatartikel.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/timbangan.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/brokoli2.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/surat.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/obatartikel.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/brokoli2.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
            <a href="/detail-blog">
                <div class="card-item-blog">
                    <img src="image/timbangan.png" alt="">
                    <span>Kesehatan</span>
                    <h1>Menjelajahi Kesehatan Holistik: </h1>
                    <p>Menggabungkan Obat-Obatan Konvensional dan Pendekatan Alternatif.
                    </p>
                </div>
            </a>
        </div>
        </div>
        <div class="side-blog">
            <div class="categries">
                <h1>Kategori</h1>
                <div class="item-categories">
                    <p>Kesehatan</p>
                    <span>(10)</span>
                </div>
                <div class="item-categories">
                    <p>Mental</p>
                    <span>(10)</span>
                </div>
                <div class="item-categories">
                    <p>Obat-Obatan</p>
                    <span>(10)</span>
                </div>
                <div class="item-categories">
                    <p>Tips and Tricks</p>
                    <span>(10)</span>
                </div>
                <div class="item-categories">
                    <p>Nutrisi dan Diet</p>
                    <span>(10)</span>
                </div>
                <div class="item-categories">
                    <p>Kesehatan Reproduksi</p>
                    <span>(10)</span>
                </div>
            </div>
            <div class="tab-container">
                <div class="tab" onclick="openTab('tab1')">Populer</div>
                <div class="tab" onclick="openTab('tab2')">Terbaru</div>
                <div class="tab" onclick="openTab('tab3')">Rekomendasi</div>
            </div>

            <div id="tab1" class="tab-content active">
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
            </div>

            <div id="tab2" class="tab-content">
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
                <a href="/detail-blog">
                    <div class="main-tab">
                        <img src="image/kesehatanartikel.png" alt="">
                        <div class="text-tab">
                            <h1>Mengatasi Insomnia: Teknik Relaksasi yang Terbukti Ampuh</h1>
                            <span>Kesehatan</span>
                        </div>
                    </div>
                </a>
            </div>

            <div id="tab3" class="tab-content">
                <h2>Rekomendasi</h2>
                <p>Artikel Rekomendasi</p>
            </div>
            <a href="/detail-blog">
            <div class="top-side-blog">
                <img src="image/buah.png" alt="">
                <span>Kesehatan</span>
                <h1>Makanan Super untuk Menyegarkan Otak dan Meningkatkan Konsentrasi</h1>
            </div>
            </a>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('header');
        const scrollThreshold = 20; // Adjust this value based on when you want the header to become sticky

        function updateHeaderSticky() {
            const scrollY = window.scrollY || window.pageYOffset;
            const isSticky = scrollY > scrollThreshold;

            header.classList.toggle('sticky', isSticky);
            header.style.position = isSticky ? 'fixed' : 'relative';
            header.style.background = isSticky ? 'rgba(255, 255, 255, 0.95)' : 'rgba(255, 255, 255, 0.8)';
            header.style.backdropFilter = isSticky ? 'blur(10px)' : 'none';
            header.style.backdropFilter = isSticky ? 'blur(10px)' : 'none';
        }

        window.addEventListener('scroll', updateHeaderSticky);

        // Initial call to set initial state
        updateHeaderSticky();
    });
</script>
</html>