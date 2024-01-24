<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Selamat datang di situs kami! Temukan informasi terbaru, layanan kami, dan banyak lagi.">
        <link rel="icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function changeColor(element) {
        var allElements = document.querySelectorAll('.select-tanggal');
        allElements.forEach(function(el) {
            el.classList.remove('selected');
        });

        element.classList.add('selected');
    }
</script>
<script>
    function changeColor(element) {
        var allElements = document.querySelectorAll('.select-jam');
        allElements.forEach(function(el) {
            el.classList.remove('selected');
        });

        element.classList.add('selected');
    }
</script>
{{-- Tanggal --}}

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
{{-- Booking --}}
<script>
    var selectedDate; 

    function getCSRFToken() {
        return $('meta[name="csrf-token"]').attr('content');
    }

    function updateTanggal(year, month) {
        var tanggalContainer = $("#tanggalContainer");
        tanggalContainer.html("");

        var today = new Date();
        var currentDate = today.getDate();
        var currentDay = today.getDay(); 

        var firstDayOfMonth = new Date(year, month, 1);
        var startingDay = firstDayOfMonth.getDay();

        var hari = ["Ming", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"];

        for (var i = currentDay; i < currentDay + 7; i++) {
            var dayIndex = i % 7;
            var date = currentDate + (i - currentDay);

            var option = $("<div>").addClass("select-tanggal");

            if (date < 1 || date > new Date(year, month + 1, 0).getDate()) {
                option.html("<p></p><p></p>"); 
            } else {
                option.html("<p>" + hari[dayIndex] + "</p><p>" + date + "</p>");

                if (today.getFullYear() === year && today.getMonth() === month && date === currentDate) {
                    option.addClass('current-day');
                }

                option.click(function() {
                    var clickedDate = $(this).find("p:last-child").text();
                    selectedDate = year + '-' + (month + 1).toString().padStart(2, '0') + '-' + clickedDate
                        .toString().padStart(2, '0');
                    console.log("Date selected:", selectedDate);
                    changeColor($(this));
                });
            }

            tanggalContainer.append(option);
        }
    }

    function getCurrentMonth() {
        var today = new Date();
        var options = {
            month: 'long',
            year: 'numeric'
        };
        var bulanSaatIni = today.toLocaleDateString('id-ID', options);
        $("#currentMonth").text(bulanSaatIni);
    }

    function changeColor(element) {
        $('.select-tanggal').removeClass('selected');
        element.addClass('selected');
    }

    function changeWeek(direction) {
        var today = new Date();
        var currentYear = today.getFullYear();
        var currentMonth = today.getMonth();
        var currentDate = today.getDate();

        var startDay = (today.getDay() - 1 + 7) % 7;
        if (direction === 'next') {
            currentDate += 7;
            if (currentDate > new Date(currentYear, currentMonth + 1, 0).getDate()) {
                currentDate -= 7;
            }
        } else if (direction === 'prev') {
            currentDate -= 7;
            if (currentDate < 1) {
                currentDate += 7;
            }
        }

        updateTanggal(currentYear, currentMonth, startDay);
        getCurrentMonth();
    }

    function bookNow() {
        console.log("Selected Date:", selectedDate);
        console.log("Booking button clicked");
        var selectedJam = $(".select-jam.selected").text();
        var namaPasien = $(".nama-pasien input").val();
        var nomorHpPasien = $(".nomor-pasien input").val();
        $("button").prop("disabled", true);
        var dokterId = getParameterByName('id');
        var userId = getParameterByName('user_id');

        if (!dokterId || !userId || !selectedDate) {
            alert("Error: Dokter, user, atau tanggal tidak terdefinisi.");
            return;
        }

        console.log("Booking started");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': getCSRFToken()
            }
        });

        $.ajax({
            type: "POST",
            url: "/book-dokter/" + dokterId + "/" + userId + "/" + selectedDate + "/" + selectedJam,
            data: {
                nama_pasien: namaPasien,
                hp_pasien: nomorHpPasien
            },
            success: function(response) {
                console.log("Booking success");
                if (response.redirect_url) {
                    window.location.href = response.redirect_url;
                } else {
                    alert(response.message);
                }
            },
            error: function(error) {
                console.error("Booking error:", error);
                $("button").prop("disabled", false);
                alert("Booking failed: " + error.responseJSON.message);
            }
        });

    }

    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    $(".select-jam").click(function() {
        $(".select-jam").removeClass("selected");
        $(this).addClass("selected");
    });

    $(".card-booking-dokter a").click(function() {
        $(".card-booking-dokter a").removeClass("selected");
        $(this).addClass("selected");
    });

    $("button").one("click", function() {
        bookNow();
    });

    $(document).ready(function() {
        getCurrentMonth();
        updateTanggal(new Date().getFullYear(), new Date().getMonth(), (new Date().getDay() - 1 + 7) % 7);
    });
</script>
<script>
    function redirectToProfile() {
        window.location.href = "/profile";
    }
</script>

</html>
