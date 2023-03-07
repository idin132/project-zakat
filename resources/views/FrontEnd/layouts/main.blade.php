<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd.layouts.css')
    @yield('css')
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <div></div>
    </div>
    
    <!-- Content -->
    <div class="content">
    <!-- Navbar -->
    @include('FrontEnd.layouts.nav')
    @yield('content')
    
    <!-- Footer -->
    @include('FrontEnd.layouts.footer')
    @yield('footer')
    </div>

    <!-- JS -->
    @include('FrontEnd.layouts.js')
    @yield('js')
</body>

</html>