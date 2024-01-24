<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Selamat datang di situs kami! Temukan informasi terbaru, layanan kami, dan banyak lagi.">
    <link rel="icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
    <title>Booking Dokter</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivemobile.css') }}">
    <!-- Font -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <header class="sticky-header">
        <a href="/homepage" class="logo"><img src="image/logo web.png" alt=""></a>
        <ul class="navbar">
            <li><a href="/homepage">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/cek-kesehatan">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter" class="active">Booking Dokter</a></li>
            <li><a href="/rs-terdekat">RS Terdekat</a></li>
            <li>
                @if (isset($user))
                    <a href="{{ route('riwayat', ['userId' => Crypt::encryptString($user->id)]) }}">Lihat Riwayat</a>
                @else
                @endif
            </li>
        </ul>

        <div class="main-navbar">
            @auth
                <div class="user-profile" onclick="redirectToProfile()">
                    <img src="{{ Auth::user()->profile_picture }}" alt="Profile Picture" style="border: 5px solid #f3f3f3">
                </div>
            @else
                <a href="/login">Login</a>
            @endauth
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <section class="booking-dokter">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Ingin Berkonsultasi?</p>
        </div>
        <h1>Temukan Dokter Pilihan Kamu Dan Lakukanlah Konsultasi</h1>
        <div class="item-dokter">
            <div class="main-dokter">
                <h1>Dokter Gigi</h1>
                <div class="wrap-card-booking-dokter">
                    @foreach ($dokterGigis as $dokterGigi)
                        <a href="{{ route('booking-detail', ['id' => $dokterGigi->id, 'user_id' => $userId]) }}">
                            <div class="card-booking-dokter">
                                <img src="{{ asset($dokterGigi->picture) }}" alt="Gambar Dokter">
                                <span>{{ $dokterGigi->spesialis }}</span>
                                <h1>{{ $dokterGigi->name }}</h1>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Rating 5 dari 5</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="main-dokter">
                <h1>Dokter Umum</h1>
                <div class="wrap-card-booking-dokter">
                    @foreach ($dokterUmums as $dokterUmum)
                        <a href="{{ route('booking-detail', ['id' => $dokterUmum->id, 'user_id' => $userId]) }}">
                            <div class="card-booking-dokter">
                                <img src="{{ asset($dokterUmum->picture) }}" alt="Gambar Dokter">
                                <span>{{ $dokterUmum->spesialis }}</span>
                                <h1>{{ $dokterUmum->name }}</h1>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Rating 5 dari 5</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="main-dokter">
                <h1>Dokter Bedah</h1>
                <div class="wrap-card-booking-dokter">
                    @foreach ($dokterBedahs as $dokterBedah)
                    <a href="{{ route('booking-detail', ['id' => $dokterBedah->id, 'user_id' => $userId]) }}">
                        <div class="card-booking-dokter">
                            <img src="{{ asset($dokterBedah->picture) }}" alt="Gambar Dokter">
                            <span>{{ $dokterBedah->spesialis }}</span>
                            <h1>{{ $dokterBedah->name }}</h1>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <p>Rating 5 dari 5</p>
                        </div>
                    </a>
                    @endforeach
                </div>
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
                <a href="/homepage">
                    <li>Home</li>
                </a>
                <a href="/blog">
                    <li>Blog</li>
                </a>
                <a href="/cek-kesehatan">
                    <li>Cek Kesehatan</li>
                </a>
                <a href="/booking-dokter">
                    <li>Booking Dokter</li>
                </a>
                <a href="/rs-terdekat">
                    <li>RS Terdekat</li>
                </a>
            </ul>
        </div>
        <div class="artikel">
            <ul>
                <li class="title-footer">Artikel</li>
                <a href="{{ route('blog.category', ['category' => 'kesehatan']) }}">
                    <li>Kesehatan</li>
                </a>
                <a href="{{ route('blog.category', ['category' => 'obat-obatan']) }}">
                    <li>Obat-Obatan</li>
                </a>
                <a href="{{ route('blog.category', ['category' => 'tips and tricks']) }}">
                    <li>Tips and Tricks</li>
                </a>
                <a href="{{ route('blog.category', ['category' => 'berita']) }}">
                    <li>Berita</li>
                </a>
                <a href="{{ route('blog.category', ['category' => 'olahraga']) }}">
                    <li>Olahraga</li>
                </a>
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

    document.querySelectorAll('.navbar a').forEach(link => {
        link.onclick = () => {
            menu.classList.remove('bx-x');
            navbar.classList.remove('open');
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('header');
        const scrollThreshold = 20;

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

        updateHeaderSticky();
    });
</script>
<script>
    function redirectToProfile() {
        window.location.href = "/profile";
    }
</script>

</html>
