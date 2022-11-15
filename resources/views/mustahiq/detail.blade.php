@extends('template.index')


@section('content')

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h3>Detail Mustahiq</h3>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($mustahiqs as $item)
                        <table class="table">
                            <tr>
                                <td>Nama Mustahiq</td>
                                <td>:</td>
                                <td>{{ $item->nama_mustahiq }}</td>
                            </tr>
                            <tr>
                                <td>Tempat, tanggal lahir</td>
                                <td>:</td>
                                <td>{{ $item->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Usia </td>
                                <td>:</td>
                                <td>{{ $item->usia }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td>{{ $item->agama }}</td>
                            </tr>
                            <tr>
                                <td>pekerjaan</td>
                                <td>:</td>
                                <td>{{ $item->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>jumlah anak</td>
                                <td>:</td>
                                <td>{{ $item->jumlah_anak }}</td>
                            </tr>
                            <tr>
                                <td>ashnaf</td>
                                <td>:</td>
                                <td>{{ $item->ashnaf }}</td>
                            </tr>
                        </table>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('mustahiq.index') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
