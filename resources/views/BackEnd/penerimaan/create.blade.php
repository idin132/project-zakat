@extends('BackEnd.template.index')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40rem;">
            <div class="card-header">
                <div class="card-body">
                    <form action="{{ route('penerimaan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6">
                            <label for="id_mustahiq" class="form-label">Id Film</label>
                            <input class="form-control" list="id_mustahiq" id="nama_mustahiq" name="id_mustahiq" placeholder="Type to search...">
                            <datalist id="id_mustahiq">
                                @foreach ($mustahiq as $item)
                                <option value="{{ $item->id_mustahiq }}" selected>{{ $item->nama_mustahiq }}</option>
                                @endforeach
                            </datalist>
                        </div>

                        <!-- <select name="id_mustahiq" id="id_mustahiq" required>
                            @foreach(App\Models\mustahiq::pluck('nama_mustahiq', 'id_mustahiq') as $id_mustahiq => $name)
                            <option value="{{ $id_mustahiq }}" {{ old('id_mustahiq') == $id_mustahiq ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                            @endforeach
                        </select> -->

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">

                                <input type="nama" class="form-control" name="alamat" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input type="nama" class="form-control" name="jumlah" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="bukti" class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="button" id="bukti" name="bukti" required>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a href="{{ route('penerimaan.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection