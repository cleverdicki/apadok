<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <title>Apadok</title>
</head>
<body>
    <div class="navbar">
        <nav id="header-container">
            <div class="content navbar">
                <a href="" class="navbar-logo">
                    <img src="{{ asset('images/apadokLogo.png') }}" alt="Apadok">
                </a>
                @yield('navbar-menu')
            </div>
        </nav>
    </div>
    <div class="main">
        <main id="main-container">
            @yield('main')
        </main>
    </div>
    <div class="footer">
        <footer id="footer-container">
            <div class="footer-text">
                <p>Copyright 2022 Apadok</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>