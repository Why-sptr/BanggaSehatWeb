<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
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
        <a href="/homepage" class="logo"><img src="{{asset ('image/logo web.png')}}" alt=""></a>
        <ul class="navbar">
            <li><a href="/homepage">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/cek-kesehatan">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter">Booking Dokter</a></li>
            <li><a href="/rs-terdekat">RS Terdekat</a></li>
        </ul>

        <div class="main-navbar">
            <a href="#">Login</a>
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <section class="riwayat">
        <div class="hero-title">
            <img src={{ asset('image/beat.png') }} alt="">
            <p>Apa Kamu Puas Dengan Pelayanan Kami?</p>
        </div>
        <h1>
            Riwayat Konsultasi Kamu Akan Tersedia Disini
        </h1>
        <div class="search">
            <input type="text" placeholder="Ketuk disini untuk mencari">
            <button>Cari</button>
        </div>
        <div class="main-card-riwayat">
            @foreach ($queueHistory as $antrian)
                <div class="card-riwayat">
                    <img src="{{ asset($antrian->dokter->picture) }}" alt="Gambar Dokter">
                    <div class="dokter-profile">
                        <h1>{{ $antrian->dokter->name }}</h1>
                        <span>{{ $antrian->dokter->spesialis }}</span>
                        <div class="rating">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class='bx bxs-star{{ $i <= $antrian->dokter->rating ? ' filled' : '' }}'></i>
                            @endfor
                        </div>
                        <p>Rating {{ $antrian->dokter->rating }} dari 5</p>
                    </div>
                    <div class="dokter-booked">
                        <h1>Nomor Antrian :</h1>
                        <p>{{ $antrian->nomor_antrian }}</p>
                        <h1>Status :</h1>
                        <span>{{ $antrian->status }}</span>
                    </div>
                </div>
            @endforeach
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
    document.addEventListener('DOMContentLoaded', function() {
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
