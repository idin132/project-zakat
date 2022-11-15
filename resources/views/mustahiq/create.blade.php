@extends('template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('mustahiq.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="nama_mustahiq"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Mustahiq') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_mustahiq" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tempat, tanggal lahir') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tgl_lahir" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="usia"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="usia" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input type="nama" class="form-control" name="alamat" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="agama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="agama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Pekerjaan') }}</label>

                                <div class="col-md-6">
                                    <input type="nama" class="form-control" name="pekerjaan" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_anak"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jumlah Anak') }}</label>

                                <div class="col-md-6">
                                    <input type="nama" class="form-control" name="jumlah_anak" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ashnaf"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Ashnaf') }}</label>

                                <div class="col-md-6">
                                    <select name="ashnaf" class="form-control">
                                        <option value="amil">{{__('amil')}}</option>
                                        <option value="fakir">{{__('fakir')}}</option>
                                        <option value="fisabilillah">{{__('fisabilillah')}}</option>
                                        <option value="gharim">{{__('gharim')}}</option>
                                        <option value="ibnu sabil">{{__('ibnu sabil')}}</option>
                                        <option value="miskin">{{__('miskin')}}</option>
                                        <option value="muallaf">{{__('muallaf')}}</option>
                                        <option value="gharim">{{__('gharim')}}</option>
                                        <option value="riqab">{{__('riqab')}}</option>    
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('mustahiq.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
