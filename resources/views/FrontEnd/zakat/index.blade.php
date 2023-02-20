@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class="container">
    <div class='block'>
        <h2 class="d-flex justify-content-center"><b>Kalkulator Zakat</b></h2>
        <br><br>

        <div class="container">
            <form action="{{ route('kalkulator.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="nama_zakat">{{ __('Nama Zakat') }}</label>
                            <input type="text" class="form-control" name="nama_zakat" value="Zakat Fitrah" readonly>
                        </div>
                    </div>
                </div>
                <div class="perhitungan">
                    <div class="row">
                        <div class="col">
                            <label for="beras">{{ __('Harga Beras') }}</label>
                            <input type="number" class="form-control" name="beras" id="bil1">
                        </div>

                        <div class="col">
                            <label for="jumlah">{{ __('Jumlah') }}</label>
                            <input type="text" class="form-control" name="jumlah" id="jumlah" request>
                        </div>
                    </div>
                </div>
                <br><br>
                </div>
                @if (Auth::user())
                    <button type="submit" class="btn col text-white" style="background-color: #65ffdc;">Tambah</button>
                @else
                    <h6 class="text-center">Anda belum login, silahkan login terlebih dahulu</h6>
                    <button onclick="location.href='login'" type="button" class="btn col" style="background-color: #65ffdc;">
                        Login</button>
                @endif
            </form>
        </div>
    </div>
</div>

<br>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script type="text/javascript">
    $(".perhitungan").keyup(function() {
        var bil1 = parseInt($("#bil1").val())

        var jumlah = bil1 * 2.5;
        $("#jumlah").attr("value", jumlah)
    });
</script>
@endsection