@extends('FrontEnd.layouts.main')
@section('content')
<style>
    body {
        background-color: #f2f2f2;
    }

    .container {
        margin-top: 10px;
    }
</style>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h6>Profile {{ Auth::user()->name }}</h6>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                        <table class="table">
                            <tr style="font-size: 12px">
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Nomor Handphone</td>
                                <td>:</td>
                                <td>{{ $user->no_hp }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Alamat Rumah</td>
                                <td>:</td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Username</td>
                                <td>:</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <!-- <tr style="font-size: 12px">
                                <td>Password</td>
                                <td>:</td>
                                <td>{{ $user->password }}</td>
                            </tr> -->
                        </table>
                    <div class="d-flex justify-content-center">
                        <a href="/" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
