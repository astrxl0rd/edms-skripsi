<!DOCTYPE html>
<html lang="en">
<title>Home</title>

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