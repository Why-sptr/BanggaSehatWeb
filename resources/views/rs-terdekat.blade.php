<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header>
        <a href="/homepage" class="logo"><img src="image/logo web.png" alt=""></a>
        <ul class="navbar">
            <li><a href="/homepage">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/cek-kesehatan">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter">Booking Dokter</a></li>
            <li><a href="/rs-terdekat" class="active">RS Terdekat</a></li>
        </ul>

        <div class="main-navbar">
            <a href="#">Login</a>
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <section class="rs-terdekat">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Ingin Mencari Rumah Sakit Terdekat</p>
        </div>
        <h1>Temukan Rumah Sakit Terdekat di Sekitar Kamu</h1>
        <button>Cari</button>
        <div class="card-rs">
            <img src="image/rs.png" alt="">
            <div class="text-rs">
                <h1>Rumah Sakit Kariadi</h1>
                <p>Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</p>
                <div class="visit">
                    <p>Kunjungi</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
        </div>
        <div class="card-rs">
            <img src="image/rs.png" alt="">
            <div class="text-rs">
                <h1>Rumah Sakit Kariadi</h1>
                <p>Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</p>
                <div class="visit">
                    <p>Kunjungi</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
        </div>
        <div class="card-rs">
            <img src="image/rs.png" alt="">
            <div class="text-rs">
                <h1>Rumah Sakit Kariadi</h1>
                <p>Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</p>
                <div class="visit">
                    <p>Kunjungi</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
        </div>
        <div class="card-rs">
            <img src="image/rs.png" alt="">
            <div class="text-rs">
                <h1>Rumah Sakit Kariadi</h1>
                <p>Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</p>
                <div class="visit">
                    <p>Kunjungi</p>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>
        </div>
        <div class="card-rs">
            <img src="image/rs.png" alt="">
            <div class="text-rs">
                <h1>Rumah Sakit Kariadi</h1>
                <p>Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</p>
                <div class="visit">
                    <p>Kunjungi</p>
                    <i class='bx bx-right-arrow-alt'></i>
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
</html>