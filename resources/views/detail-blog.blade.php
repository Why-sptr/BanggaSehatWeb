<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
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
    <section class="detail-blog">
        <img src="image/brokoli.png" alt="">
        <div class="text-detail-blog">
            <span>Kesehatan</span>
            <h1>Makanan Super untuk Menyegarkan Otak dan Meningkatkan Konsentrasi</h1>
            <p>Mengonsumsi makanan yang tepat bukan hanya penting untuk kesehatan fisik, tetapi juga memiliki dampak
                besar
                pada kesehatan otak. Makanan super yang kaya akan nutrisi dapat memberikan dorongan energi dan
                memperkuat
                fungsi otak, membantu meningkatkan konsentrasi dan daya ingat. Dengan memilih makanan yang benar, kita
                dapat
                merawat otak kita dengan cara yang bermanfaat, mendukung produktivitas dan kesejahteraan mental.
                <br>
                <br>
                Salah satu makanan super yang sangat bermanfaat untuk otak adalah alpukat. Kaya akan lemak sehat,
                alpukat
                memberikan energi yang stabil untuk otak dan meningkatkan fungsi kognitif. Selain itu, blueberry juga
                dianggap sebagai "superfood" untuk otak karena mengandung antioksidan yang tinggi. Antioksidan ini
                membantu
                melawan radikal bebas dan peradangan, yang dapat menyebabkan penurunan fungsi otak. Dengan menggabungkan
                alpukat dan blueberry dalam pola makan sehari-hari, Anda dapat menyegarkan otak Anda dan meningkatkan
                konsentrasi dengan cara yang lezat.
                <br>
                <br>
                Kacang-kacangan, seperti almond dan walnut, menyediakan asam lemak omega-3 yang diperlukan untuk
                membangun
                dan memelihara sel-sel otak. Sementara itu, dark chocolate yang mengandung kandungan kakao tinggi dapat
                meningkatkan aliran darah ke otak dan memberikan stimulasi untuk meningkatkan kewaspadaan. Menggabungkan
                kacang-kacangan dan dark chocolate sebagai camilan sehat dapat menjadi pilihan yang lezat dan bermanfaat
                bagi kesehatan otak. Dengan memprioritaskan makanan super ini, kita dapat merangsang otak untuk
                berfungsi
                pada tingkat optimal, mendukung fokus, dan meningkatkan konsentrasi sepanjang hari.
            </p>
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