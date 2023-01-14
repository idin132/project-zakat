@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class='block'>
    <h2 class="d-flex justify-content-center"><b>Pembayaran</b></h2>
    <br><br>


    <div class="container">
        <form action="{{ route('kalkulator.update', $fitrah->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nama_zakat">{{ __('Kategori Zakat') }}</label>
                        <input type="text" class="form-control" name="nama_zakat" value="{{ $fitrah->nama_zakat }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="jumlah">{{ __('Jumlah Zakat') }}</label>
                    <input type="text" class="form-control" value="{{ $fitrah->jumlah }}" name="jumlah" readonly>
                </div>
            </div>
            <br>

            <!-- <div class="sc_form_item sc_form_field label_over">
                <input style="background-color: cyan;" data-toggle="modal" data-target="#modalCetak" name="metode_pembayaran" class="form-control text-center" id="metode_pembayaran" placeholder="Metode Pembayaran" readonly>
            </div>
            <br> -->
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="metode_pembayaran">{{ __('Metode Pembayaran') }}</label>
                        <select name="metode_pembayaran" class="form-control">
                            <option value="Dana">{{__('Dana')}}</option>
                            <option value="BCA">{{__('BCA')}}</option>
                            <option value="BRI">{{__('BRI')}}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nama_muzakki">{{ __('Nama Lengkap') }}</label>
                        <input type="text" class="form-control" name="nama_muzakki" value="{{ $user->name }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="no_hp">{{ __('Nomor Handphone') }}</label>
                        <input type="text" class="form-control" name="no_hp" value="{{ $user->no_hp }}" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="bukti_pembayaran" class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                <div class="col-md-6">
                    <input type="file" class="button" id="bukti_pembayaran" name="bukti_pembayaran" required>
                </div>
            </div> -->

            <div class="row mb-3">
                <label for="bukti_pembayaran" class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                <div class="col-md-6">
                    <input id="bukti_pembayaran" type="file" class="button" name="bukti_pembayaran" value="{{ $fitrah->bukti }}" request>
                </div>
            </div>


            <br><br>
            <button type="submit" class="btn col text-white" style="background-color: cyan;">
                Konfirmasi
            </button>
            <br><br>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="modalCetak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <a href="" class="nav-link">Dana</a>
            <a href="" class="nav-link">BCA</a>
        </div>
    </div>
</div>
@endsection