<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kalori</title>
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
            <p>Hitung Kebutuhan Kalori Kamu</p>
        </div>
        <h1 class="bmih1">Hitung Kebutuhan Kalori Kamu Supaya Tercukupi</h1>
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
                <input type="number" id="ageInput">
            </div>
            <div class="tinggi-bmi">
                <h1>Tinggi</h1>
                <input type="number" id="heightInput">
            </div>
            <div class="berat-badan-bmi">
                <h1>Berat Badan</h1>
                <input type="number" id="weightInput">
            </div>
            <button onclick="calculateCalories()">Cek Hasil</button>
        </div>
    </section>
    <section class="hasil-bmi">
        <div class="main-hasil-bmi">
            <h1>Hasil</h1>
            <div class="content-hasil-bmi" id="resultCalorieContainer">
                <!-- Hasil kebutuhan kalori akan ditampilkan di sini -->
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
<script>
    function selectGender(gender) {
        // Reset background pada semua elemen gender
        var genderElements = document.querySelectorAll('.gender-bmi div');
        genderElements.forEach(function (element) {
            element.classList.remove('selected');
        });

        // Tandai background pada elemen gender yang dipilih
        var selectedElement = document.querySelector(`.gender-bmi .${gender}`);
        selectedElement.classList.add('selected');

        // Tambahkan logika untuk menangani pemilihan jenis kelamin
        console.log("Jenis Kelamin: " + gender);
    }

    function calculateCalories() {
        // Ambil nilai input dari formulir
        var age = document.getElementById('ageInput').value;
        var height = document.getElementById('heightInput').value;
        var weight = document.getElementById('weightInput').value;

        // Ambil nilai jenis kelamin yang dipilih
        var gender = document.querySelector('.gender-bmi .selected').classList.contains('pria') ? 'pria' : 'wanita';

        // Lakukan validasi input (opsional)
        if (isNaN(age) || isNaN(height) || isNaN(weight)) {
            alert("Mohon masukkan nilai yang valid untuk usia, tinggi, dan berat badan.");
            return;
        }

        // Hitung kebutuhan kalori (sesuaikan dengan rumus yang sesuai)
        var calculatedCalories = calculateCaloriesBasedOnFormula(age, height, weight, gender);

        // Tampilkan hasil di dalam elemen HTML
        var resultContainer = document.getElementById('resultCalorieContainer');
        resultContainer.innerHTML = `
            <p>Membutuhkan :</p>
            <h1>${calculatedCalories} cal</h1>
            <p>Untuk memenuhi kebutuhan kalori harian</p>
        `;
    }
    function calculateCaloriesBasedOnFormula(age, height, weight, gender) {
    // Sebagai contoh, menggunakan formula Harris-Benedict
    // Sesuaikan atau ganti dengan formula yang sesuai dengan kebutuhan Anda

    // Konstanta dalam rumus Harris-Benedict
    var baseCaloriesForMen = 88.362;
    var baseCaloriesForWomen = 447.593;
    var caloriesPerKgHeightForMen = 13.397;
    var caloriesPerKgHeightForWomen = 9.247;
    var caloriesPerKgWeightForMen = 4.799;
    var caloriesPerKgWeightForWomen = 3.098;
    var caloriesPerYear = 5.677;

    // Hitung kebutuhan kalori berdasarkan rumus Harris-Benedict
    var baseCalories = (gender === 'pria') ? baseCaloriesForMen : baseCaloriesForWomen;
    var caloriesForHeight = (gender === 'pria') ? (caloriesPerKgHeightForMen * height) : (caloriesPerKgHeightForWomen * height);
    var caloriesForWeight = (gender === 'pria') ? (caloriesPerKgWeightForMen * weight) : (caloriesPerKgWeightForWomen * weight);
    var caloriesForAge = caloriesPerYear * age;

    // Total kebutuhan kalori
    var calculatedCalories = baseCalories + caloriesForHeight + caloriesForWeight - caloriesForAge;

    return Math.round(calculatedCalories); // Bulatkan kebutuhan kalori menjadi bilangan bulat
    }
    function calculateCaloriesBasedOnFormula(age, height, weight, gender) {
        // Sebagai contoh, menggunakan formula Harris-Benedict
        // Sesuaikan atau ganti dengan formula yang sesuai dengan kebutuhan Anda

        // Konstanta dalam rumus Harris-Benedict
        var baseCaloriesForMen = 88.362;
        var baseCaloriesForWomen = 447.593;
        var caloriesPerKgHeightForMen = 13.397;
        var caloriesPerKgHeightForWomen = 9.247;
        var caloriesPerKgWeightForMen = 4.799;
        var caloriesPerKgWeightForWomen = 3.098;
        var caloriesPerYear = 5.677;

        // Hitung kebutuhan kalori berdasarkan rumus Harris-Benedict
        var baseCalories = (gender === 'pria') ? baseCaloriesForMen : baseCaloriesForWomen;
        var caloriesForHeight = (gender === 'pria') ? (caloriesPerKgHeightForMen * height) : (caloriesPerKgHeightForWomen * height);
        var caloriesForWeight = (gender === 'pria') ? (caloriesPerKgWeightForMen * weight) : (caloriesPerKgWeightForWomen * weight);
        var caloriesForAge = caloriesPerYear * age;

        // Total kebutuhan kalori
        var calculatedCalories = baseCalories + caloriesForHeight + caloriesForWeight - caloriesForAge;

        return Math.round(calculatedCalories); // Bulatkan kebutuhan kalori menjadi bilangan bulat
    }
    </script>
</html>