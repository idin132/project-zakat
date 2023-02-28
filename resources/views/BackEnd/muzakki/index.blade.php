@extends('BackEnd.template.index')

@section('content')


<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
        <br>
        <a href="{{ route('muzakki.create') }}", class="text-white">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: green;">
                <div class="card-body text-center">
                    Tambah Data
                </div>
            </div>
        </div>
        </a>
        <button class="btn btn-primary col" data-toggle="modal" data-target="#modalCetak" href="{{ route('filter.pembayaran') }}">Print<i class="fa fa-print" style="margin-left: 10px;"></i></button>

        <table class="table" id="maintable">
            <thead>
                <tr style="font-size: 12px">
                    <th>NO</th>
                    <th>Nama Muzakki</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muzakkis as $key=>$muzakki)
                <tr>
                    <td style="font-size: 12px">{{$muzakki->id}}</td>
                    <td style="font-size: 12px">{{$muzakki->nama_muzakki}}</td>
                    <td style="font-size: 12px">{{$muzakki->no_hp}}</td>
                    <td style="font-size: 12px">{{$muzakki->alamat}}</td>
                    <td style="font-size: 12px">{{$muzakki->created_at}}</td>
                    <td>


                        <form action="{{ route ('muzakki.destroy', $muzakki->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a style="font-size: 12px" href="{{ route('muzakki.show', $muzakki->id) }}" class="btn btn-primary">
                                    <i class="fa fa-info"></i>
                                  </a>
                              </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</div>
</div>

<div class="modal fade" id="modalCetak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form method="GET" target="_blank" enctype="multipart/form-data" action="{{ route('filter.muzakki') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" request>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal selesai</label>
                        <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" request>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
