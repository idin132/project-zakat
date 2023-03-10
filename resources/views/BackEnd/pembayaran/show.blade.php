@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 40rem;">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="{{ route('pembayaran.update', $pembayaran->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="nama_zakat">{{ __('Nama Zakat') }}</label>
                                            <select name="nama_zakat" class="form-control">
                                                <option value="Zakat Fitrah">{{__('Zakat Fitrah')}}</option>
                                                <option value="Zakat Penghasilan">{{__('Zakat Penghasilan')}}</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="nama_muzakki">{{ __('Nama Muzakki') }}</label>
                                            <input type="text" class="form-control" name="nama_muzakki" value="{{ $pembayaran->nama_muzakki }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="no_hp">{{ __('No HP') }}</label>
                                            <input type="text" class="form-control" value="{{ $pembayaran->no_hp }}" name="no_hp" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="email">{{ __('Email') }}</label>
                                            <input type="text" class="form-control" value="{{ $pembayaran->email }}" name="email" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="jumlah">{{ __('Jumlah') }}</label>
                                            <input type="text" class="form-control" name="jumlah" value="{{ $pembayaran->jumlah }}" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="metode_pembayaran">{{ __('Metode Pembayaran') }}</label>
                                            <select name="metode_pembayaran" class="form-control">
                                                <option value="Dana">{{__('Dana')}}</option>
                                                <option value="BCA">{{__('BCA')}}</option>
                                                <option value="BRI">{{ __('BRI') }}</option>
                                                <option value="Cash">{{ __('Cash') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="bukti_pembayaran">{{ __('Bukti Pembayaran') }}</label>
                                            <input id="bukti_pembayaran" type="file" class="button" value="{{ $pembayaran->bukti_pembayaran }}" name="bukti_pembayaran" request>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah data sudah benar?')">Tambah</button>
                                <a href="{{ route('pembayaran.index') }}" class="btn btn-primary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
