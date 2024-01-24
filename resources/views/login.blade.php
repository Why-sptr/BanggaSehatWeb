<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Selamat datang di situs kami! Temukan informasi terbaru, layanan kami, dan banyak lagi.">
    <link rel="icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
    <title>Login Bangga Sehat</title>
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
    <section class="login">
        <div class="form-login">
            <img src="image/bglogin.png" alt="">
                
            <p>Silahkan Login Terlebih Dahulu</p>
            <a href="{{ route('google.redirect') }}">Login</a>
        </div>
    </section>
</body>

</html>
