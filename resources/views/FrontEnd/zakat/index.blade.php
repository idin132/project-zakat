@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class="container">
    <div class='block'>
        <h2 class="d-flex justify-content-center"><b>Kalkulator Zakat</b></h2>
        <br><br>


        <div class="container">
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="kategori_zakat">{{ __('Kategori Zakat') }}</label>
                            <input type="text" class="form-control" name="nik" value="Zakat Fitrah" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="beras">{{ __('Harga Beras') }}</label>
                        <input type="text" class="form-control" name="beras" value="Rp. 13.000" readonly>
                    </div>

                    <div class="col">
                        <label for="jumlah">{{ __('Jumlah') }}</label>
                        <input type="text" class="form-control" name="jumlah" value="Rp. 32.500" readonly>
                    </div>
                </div>
                <br><br>
                <a href="" class="btn col text-white" style="background-color: cyan;">Hitung</a>
                <br><br>
                <br>

                <div class="container text-center">
                    <div class="white-box info">
                        <div class="col-sm-6 help-process ">
                            <h2 style="color: #65FFDC;">Rp. 32.500</h2>
                            <b>
                                <p>Jumlah Zakat Yang Harus Dibayar</p>
                            </b>
                        </div>
                    </div>
                </div>
                <br><br>

            </form>
            <a href="pembayaran/fitrah" class="btn col text-white" style="background-color: cyan;">Lanjutkan</a>


            <!-- <a href="" class="btn col text-white" style="background-color: cyan;">Bayar Zakat</a> -->
        </div>
    </div>
</div>
<br>
@endsection