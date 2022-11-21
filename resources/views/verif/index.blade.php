@extends('template.index')

@section('content')
<br>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 110%;">
        <div class="container">
            <div class="text-center">
                <br><br>
                <h3>Table Verifikasi</h3>
            </div>
            <br>
            <a href="{{ route('verif.create') }}" class="btn btn-secondary">+</a>
            <br><br>
            <table  class="table" id="maintable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Zakat</th>
                        <th>Nama Muzakki</th>
                        <th>Jumlah</th>
                        <th>Metode Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($verif as $key => $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_zakat }}</td>
                        <td>{{ $item->nama_muzakki }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->metode_pembayaran }}</td>
                        <td>
                            @if ($item->bukti_pembayaran == null)
                            -
                            @else
                            <a href="{{ url('storage/foto/' . $item->bukti_pembayaran) }}" target="_blank" class="btn btn-dark">View</a>
                            @endif
                        </td>
                        <td><label class="label {{ ($item->status == 1) ? 'label-success' : 'label-danger' }}">
                             {{ ($item->status == 1) ? 'Pending' : 'Selesai' }}</label></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @if($item->status == 1)
                            <a href="{{ url('status',$item->id)}}">
                                <button class="btn btn-success mx-2">
                                    <i class="fa fa-check"></i>
                                </button>
                            </a>
                            <a href="/">
                                <button class="btn btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </a>
                            @else
                            <a href="{{ url('status',$item->id)}}">
                                <button class="btn btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </a>
                            @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script></script>
@endsection