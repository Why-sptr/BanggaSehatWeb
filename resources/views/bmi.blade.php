<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek BMI</title>
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
            <li><a href="/cek-kesehatan" class="active">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter">Booking Dokter</a></li>
            <li><a href="/rs-terdekat">RS Terdekat</a></li>
        </ul>

        <div class="main-navbar">
            <a href="#">Login</a>
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <section class="bmi">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Hitung BMI Kamu</p>
        </div>
        <h1>Hitung BMI Kamu Untuk Menentukan Berat Badan Yang Ideal</h1>
        <div class="cek-bmi">
            <div class="main-gender-bmi">
                <h1>Jenis Kelamin</h1>
                <div class="gender-bmi">
                    <div class="pria">
                        <img src="image/pria.png" alt="">
                        <p>Laki-Laki</p>
                    </div>
                    <div class="wanita">
                        <img src="image/wanita.png" alt="">
                        <p>Perempuan</p>
                    </div>
                </div>
            </div>
            <div class="usia-bmi">
                <h1>Usia</h1>
                <input type="number">
            </div>
            <div class="tinggi-bmi">
                <h1>Tinggi</h1>
                <input type="number">
            </div>
            <div class="berat-badan-bmi">
                <h1>Berat Badan</h1>
                <input type="number">
            </div>
        </div>
    </section>
</body>

</html>