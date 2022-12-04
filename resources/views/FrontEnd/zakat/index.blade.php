@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class='block'>
    <h2 class="d-flex justify-content-center"><b>Kalkulator Zakat</b></h2>
    <br><br>


    <div class="container">
        <form action="" method="post">
            @csrf
            <!-- <div class="form-group">
                <label for="kategori_zakat">{{ __('Kategori Zakat') }}</label>
                <select name="kategori_zakat" id="id_zakat" class="form-control">
                    @foreach($kalkulator as $item)
                    <option value="{{ $item->kategori_zakat}}">{{ $item->kategori_zakat }}</option>
                    @endforeach
                </select>
            </div> -->
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="kategori_zakat">{{ __('kategori zakat') }}</label>
                        <select name="kategori_zakat" class="form-control">
                            <option value="Zakat Fitrah">{{__('Zakat Fitrah')}}</option>
                            <option value="Zakat Penghasilan">{{__('Zakat Penghasilan')}}</option>
                        </select>
                    </div>

                </div>
            </div>
            @if($item->id_zakat == 'ZK01')
                <div class="row">
                    <div class="col">
                        <label for="nik">{{ __('Harga Beras') }}</label>
                        <input type="text" class="form-control" name="nik" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nik">{{ __('Jumlah Zakat') }}</label>
                        <input type="text" class="form-control" name="nik" required>
                    </div>
                </div>
            </div>
            @else
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nik">{{ __('Harga Beras') }}</label>
                        <input type="text" class="form-control" name="nik" required>
                    </div>
                </div>
            </div>
            @endif
            <br><br>
            <a href="" class="btn col text-white" style="background-color: cyan;">Hitung</a>
        </form>
    </div>
</div>
</div>
@endsection