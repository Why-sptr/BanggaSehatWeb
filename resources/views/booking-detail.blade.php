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
            <li><a href="/booking-dokter" class="active">Booking Dokter</a></li>
            <li><a href="/rs-terdekat">RS Terdekat</a></li>
        </ul>

        <div class="main-navbar">
            <a href="#">Login</a>
            <div class='bx bx-menu' id="menu-icon"></div>
        </div>
    </header>
    <section class="booking-detail">
        <div class="tanggal">
            <div class="main-tanggal">
                <h1>Tanggal</h1>
                <p id="currentMonth"></p>
            </div>
            <div class="item-tanggal" id="tanggalContainer"></div>
        </div>
        <div class="jam">
            <h1>Jam</h1>
            <div class="item-jam">
                <div class="select-jam">
                    09.00-10.00
                </div>
                <div class="select-jam">
                    10.00-11.00
                </div>
                <div class="select-jam">
                    11.00-12.00
                </div>
                <div class="select-jam">
                    13.00-14.00
                </div>
                <div class="select-jam">
                    14.00-15.00
                </div>
                <div class="select-jam">
                    15.00-16.00
                </div>
                <div class="select-jam">
                    16.00-17.00
                </div>
            </div>
        </div>
        <div class="data-pasien">
            <div class="nama-pasien">
                <h1>Nama Pasien</h1>
                <input type="text">
            </div>
            <div class="nomor-pasien">
                <h1>Nomor Hp Pasien</h1>
                <input type="text">
            </div>
        </div>
        <button>Booking Sekarang</button>
    </section>
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
    function changeColor(element) {
        // Hapus kelas "selected" dari semua elemen dengan kelas "select-tanggal"
        var allElements = document.querySelectorAll('.select-tanggal');
        allElements.forEach(function (el) {
            el.classList.remove('selected');
        });

        // Tambahkan kelas "selected" ke elemen yang dipilih
        element.classList.add('selected');
    }
</script>
<script>
    function updateTanggal() {
        var tanggalContainer = document.getElementById("tanggalContainer");
        tanggalContainer.innerHTML = "";

        var today = new Date();
        var startDay = new Date(today.getFullYear(), today.getMonth(), 1).getDay();
        startDay = (startDay - 1 + 7) % 7; // Menyesuaikan indeks hari dimulai dari Senin
        var hari = ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Ming"];

        for (var i = 0; i < 7; i++) {
            var dayIndex = (startDay + i) % 7;
            var option = document.createElement("div");
            option.className = "select-tanggal";
            option.innerHTML = "<p>" + hari[dayIndex] + "</p><p>" + (i + 1) + "</p>";
            option.onclick = function () {
                changeColor(this);
            };
            tanggalContainer.appendChild(option);
        }
    }

    function getCurrentMonth() {
        var today = new Date();
        var options = { month: 'long', year: 'numeric' };
        var bulanSaatIni = today.toLocaleDateString('id-ID', options);
        document.getElementById("currentMonth").textContent = bulanSaatIni;
    }


    function changeColor(element) {
        var allElements = document.querySelectorAll('.select-tanggal');
        allElements.forEach(function (el) {
            el.classList.remove('selected');
        });

        element.classList.add('selected');
    }



    window.onload = function () {
        getCurrentMonth();
        updateTanggal();
    };

</script>

</html>