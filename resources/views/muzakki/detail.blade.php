@extends('template.index')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h3>Detail Muzakki</h3>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($muzakki as $item)
                        <table class="table">
                            <tr>
                                <td>Nama Muzakki</td>
                                <td>:</td>
                                <td>{{ $item->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $item->email}}</td>
                            </tr>
                            <tr>
                                <td>Usia </td>
                                <td>:</td>
                                <td>{{ $item->usia }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Handphone </td>
                                <td>:</td>
                                <td>{{ $item->no_hp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                        </table>
                    @endforeach
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('muzakki.index') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
