<!DOCTYPE html>
<html lang="en">
<title>@yield('judul_halaman')</title>

<head>
    @include('inc.head')
</head>


<body>
    <div id="wrapper">
    
        @include('inc.nav')

        @include('inc.sidebar')

        <div class = "main">
            <!-- MAIN CONTENT -->
            @yield('konten')
        </div>
    
    </div>

    @include('inc.footer-scripts')
</body>
</html>