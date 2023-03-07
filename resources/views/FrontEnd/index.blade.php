@extends('FrontEnd.layouts.main')

@section('content')

<!-- Slider -->
@include('FrontEnd.layouts.slider')

<!-- Total Donasi -->
@include('FrontEnd.layouts.donasi_terkumpul')

<!-- Program -->
@include('FrontEnd.layouts.program')
<br>

<!-- Artikel -->
@include('FrontEnd.layouts.artikel')

@endsection
