@extends('BackEnd.template.index')

@section('content')
<br>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 100%;">
        <div class="container">
            <br>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalCetak" href="{{ route('filter.pembayaran') }}">Print<i class="fa fa-print" style="margin-left: 10px;"></i></button>

            <br><br>
            <table class="table" id="maintable">
                <thead>
                    <tr style="font-size: 12px">
                        <th>No</th>
                        <th>Zakat</th>
                        <th>Muzakki</th>
                        <th>Jumlah</th>
                        <th>Metode</th>
                        <th>Bukti</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($verifikasi as $key => $item)
                    <tr>
                        <td style="font-size: 12px">{{ $item->id }}</td>
                        <td style="font-size: 12px">{{ $item->nama_zakat }}</td>
                        <td style="font-size: 12px">{{ $item->nama_muzakki }}</td>
                        <td style="font-size: 12px">Rp. {{ number_format($item->jumlah) }}</td>
                        <td style="font-size: 12px">{{ $item->metode_pembayaran }}</td>
                        <td>
                            @if ($item->bukti_pembayaran == null)
                            -
                            @else
                            <a style="font-size: 12px" href="{{ url('storage/foto/' . $item->bukti_pembayaran) }}" target="_blank" class="btn btn-dark">View</a>
                            @endif
                        </td>
                        <td style="font-size: 12px">{{ $item->created_at }}</td>
                        <td>
                            <!-- <form action="{{ route('pembayaran.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                    <i class="fa fa-solid fa-trash"></i>
                                </button>
                            </form> -->
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

            <form method="GET" target="_blank" enctype="multipart/form-data" action="{{ route('filter.pembayaran') }}">
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
<script></script>
@endsection