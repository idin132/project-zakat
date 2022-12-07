@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class='block'>
    <h2 class="d-flex justify-content-center"><b>Pembayaran</b></h2>
    <br><br>


    <div class="container">
        <form action="" method="post">
            @csrf

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="kategori_zakat">{{ __('Kategori Zakat') }}</label>
                        <input type="text" class="form-control" name="kategori_zakat" value="Zakat Penghasilan" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="jumlah">{{ __('Jumlah Zakat') }}</label>
                    <input type="text" class="form-control" value="32.500" name="jumlah" readonly>
                </div>
            </div>
            <br>

            <div class="sc_form_item sc_form_field label_over">
                <!-- <span>Metode Pembayaran</span> -->
                <input style="background-color: cyan;" data-toggle="modal" data-target="#modalCetak" name="metode_pembayaran" class="form-control text-center" id="metode_pembayaran" placeholder="Metode Pembayaran" readonly>
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nama">{{ __('Nama Lengkap') }}</label>
                        <input type="text" class="form-control" name="nama" value="Idin Naufal Hakim" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="no_hp">{{ __('Nomor Handphone') }}</label>
                        <input type="text" class="form-control" name="no_hp" value="082119678835" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="text" class="form-control" name="email" value="idinnaufal131204@gmail.com" readonly>
                    </div>
                </div>
            </div>


            <br><br>
            <a href="" class="btn col text-white" style="background-color: cyan;">Konfirmasi</a>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="modalCetak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <a class="nav-link">Dana</a>
            <a class="nav-link">BCA</a>
        </div>
    </div>
</div>
@endsection