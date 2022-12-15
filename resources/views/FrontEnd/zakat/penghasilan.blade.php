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
                            <input type="text" class="form-control" name="kategori_zakat" value="Zakat Penghasilan" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="penghasilan">{{ __('Penghasilan Perbulan') }}</label>
                        <input type="text" class="form-control" name="penghasilan" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="bonus">{{ __('Bonus/THR/Penghasilan Lainnya') }}</label>
                        <input type="text" class="form-control" name="bonus" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="beras">{{ __('Harga Beras') }}</label>
                        <input type="text" class="form-control" name="beras" required>
                    </div>
                </div>

                <br><br>
                <a href="" class="btn col text-white" style="background-color: cyan;">Hitung</a>
            </form>
        </div>
    </div>
</div>
<br>
@endsection