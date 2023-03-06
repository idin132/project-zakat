<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd.layouts.css')
    @yield('css')
</head>

<body>
<div class="loader">
        <div></div>
    </div>

    <div class="content">
    @include('FrontEnd.layouts.nav')
    @yield('content')

    @include('FrontEnd.layouts.footer')
    @yield('footer')
    </div>
    @include('FrontEnd.layouts.js')
    @yield('js')
    @include('FrontEnd.layouts.footer')
    @yield('footer')
</body>

</html>