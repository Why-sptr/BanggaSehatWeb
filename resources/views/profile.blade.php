<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Selamat datang di situs kami! Temukan informasi terbaru, layanan kami, dan banyak lagi.">
        <link rel="icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
    <title>Edit Profile</title>
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
    <form action="{{ route('profile.update') }}" method="POST" class="edit-profile" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="profile-picture">
            <img id="preview-image" src="{{ Auth::user()->profile_picture }}" alt="Profile Picture" style="border: solid 5px #F3F3F3">
            <label id="upload-profile-label" style="cursor: pointer;">
                <i class='bx bx-plus'></i>
                <input type="file" name="profile_picture" id="profile_picture" style="display: none" accept="image/*">
            </label>
        </div>
        <div class="data-profile">
            <div class="name">
                <div class="first-name">
                    <p>Nama Pertama</p>
                    <input type="text" name="first_name" value="{{ Auth::user()->first_name }}">
                </div>
                <div class="last-name">
                    <p>Nama Terakhir</p>
                    <input type="text" name="last_name" value="{{ Auth::user()->last_name }}">
                </div>
            </div>
            <div class="usia">
                <p>Usia</p>
                <input type="text" name="usia" value="{{ Auth::user()->usia }}">
            </div>
            <div class="phone">
                <p>Nomor</p>
                <input type="text" name="nomor" value="{{ Auth::user()->nomor }}">
            </div>
            <div class="email">
                <p>Email</p>
                <input type="text" name="email" value="{{ Auth::user()->email }}">
            </div>
        </div>
        <div class="tombol-profile">
            <button type="submit">Simpan Profile</button>
            @if (auth()->check())
                <button>
                    <a href="{{ route('logout') }}">Keluar</a>
                </button>
            @else
            @endif
        </div>
    </form>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#upload-profile-label').click(function() {
            $('#profile_picture').click();
        });

        $('#profile_picture').change(function() {
            var fileName = $(this).val().split("\\").pop();

            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview-image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>

</html>
