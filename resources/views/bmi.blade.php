<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Selamat datang di situs kami! Temukan informasi terbaru, layanan kami, dan banyak lagi.">
    <link rel="icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
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
    <header class="sticky-header">
        <a href="/homepage" class="logo"><img src="image/logo web.png" alt=""></a>
        <ul class="navbar">
            <li><a href="/homepage">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/cek-kesehatan" class="active">Cek Kesehatan</a></li>
            <li><a href="/booking-dokter">Booking Dokter</a></li>
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
    <section class="bmi">
        <div class="hero-title">
            <img src="image/beat.png" alt="">
            <p>Hitung BMI Kamu</p>
        </div>
        <h1 class="bmih1">Hitung BMI Kamu Untuk Menentukan Berat Badan Yang Ideal</h1>
        <div class="cek-bmi">
            <div class="main-gender-bmi">
                <h1>Jenis Kelamin</h1>
                <div class="gender-bmi">
                    <div class="pria" onclick="selectGender('pria')">
                        <img src="image/pria.png" alt="">
                        <p>Laki-Laki</p>
                    </div>
                    <div class="wanita" onclick="selectGender('wanita')">
                        <img src="image/wanita.png" alt="">
                        <p>Perempuan</p>
                    </div>
                </div>
            </div>
            <div class="usia-bmi">
                <h1>Usia</h1>
                <input type="number" id="ageInput" placeholder="Masukkan usia">
            </div>

            <div class="tinggi-bmi">
                <h1>Tinggi</h1>
                <input type="number" id="heightInput" placeholder="Masukkan tinggi (cm)">
            </div>

            <div class="berat-badan-bmi">
                <h1>Berat Badan</h1>
                <input type="number" id="weightInput" placeholder="Masukkan berat badan (kg)">
            </div>
            <button onclick="calculateBMI()">Hitung BMI</button>
        </div>
    </section>
    <section class="hasil-bmi">
        <div class="main-hasil-bmi">
            <h1>Hasil</h1>
            <div class="content-hasil-bmi" id="resultContainer">
                <!-- Hasil BMI akan ditampilkan di sini -->
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
    function selectGender(gender) {
        var genderElements = document.querySelectorAll('.gender-bmi div');
        genderElements.forEach(function(element) {
            element.classList.remove('selected');
        });

        var selectedElement = document.querySelector(`.gender-bmi .${gender}`);
        selectedElement.classList.add('selected');

        console.log("Jenis Kelamin: " + gender);
    }

    function validateInputs() {
        var ageInput = document.getElementById('ageInput');
        var heightInput = document.getElementById('heightInput');
        var weightInput = document.getElementById('weightInput');

        if (parseInt(ageInput.value) <= 0) {
            ageInput.value = '';
            ageInput.placeholder = 'Usia tidak valid';
        }

        if (parseInt(heightInput.value) <= 0) {
            heightInput.value = '';
            heightInput.placeholder = 'Tinggi tidak valid';
        }

        if (parseInt(weightInput.value) <= 0) {
            weightInput.value = '';
            weightInput.placeholder = 'Berat badan tidak valid';
        }
    }

    function calculateBMI() {
        var age = document.getElementById('ageInput').value;
        var height = document.getElementById('heightInput').value;
        var weight = document.getElementById('weightInput').value;

        if (isNaN(age) || isNaN(height) || isNaN(weight)) {
            alert("Mohon masukkan nilai yang valid untuk usia, tinggi, dan berat badan.");
            return;
        }

        var bmiValue = (weight / Math.pow((height / 100), 2)).toFixed(1);

        var status = '';
        var description = '';

        if (bmiValue < 18.5) {
            status = 'Underweight';
            description = 'Berat badan kurang';
        } else if (bmiValue >= 18.5 && bmiValue < 24.9) {
            status = 'Normal';
            description = 'Berat badan ideal';
        } else if (bmiValue >= 25 && bmiValue < 29.9) {
            status = 'Overweight';
            description = 'Berat badan berlebih';
        } else {
            status = 'Obese';
            description = 'Berat badan sangat berlebih';
        }

        var resultContainer = document.getElementById('resultContainer');
        resultContainer.innerHTML = `
            <p>Status BMI: ${status}</p>
            <h1>${bmiValue}</h1>
            <p>${description}</p>
        `;
    }
</script>
<script>
    function redirectToProfile() {
        window.location.href = "/profile";
    }
</script>

</html>
