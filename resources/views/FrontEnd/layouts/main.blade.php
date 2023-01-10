<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd.layouts.css')
    @yield('css')
</head>

<body>
    @include('FrontEnd.layouts.nav')
    @yield('content')
    @include('FrontEnd.layouts.js')
    @yield('js')
    @include('FrontEnd.layouts.footer')
    @yield('footer')
</body>

</html>