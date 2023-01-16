@extends('FrontEnd.layouts.main')
@section('content')

<div class="d-flex justify-content-center">
    <div class="card" style="width: 100%;">
        <div class="container">
            <br>
            <table  class="table"  id="maintable">
                <thead>
                    <tr style="font-size: 12px">
                        <!-- <th>No</th> -->
                        <th>Nama Zakat</th>
                        <th>Nama Muzakki</th>
                        <th>Jumlah</th>
                        <th>Metode Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $key => $item)
                    <tr>
                        <!-- <td style="font-size: 12px">{{ $item->id }}</td> -->
                        <td style="font-size: 12px">{{ $item->nama_zakat }}</td>
                        <td style="font-size: 12px">{{ $item->nama_muzakki }}</td>
                        <td style="font-size: 12px">{{ $item->jumlah }}</td>
                        <td style="font-size: 12px">{{ $item->metode_pembayaran }}</td>
                        <td style="font-size: 12px">
                            @if ($item->bukti_pembayaran == null)
                            -
                            @else
                            <a style="font-size: 10px" href="{{ url('storage/foto/' . $item->bukti_pembayaran) }}" target="_blank" class="btn btn-dark">View</a>
                            @endif
                        </td>
                        <td ><label style="font-size: 12px" class="label {{ ($item->status == 1) ? 'label-success' : 'label-danger' }}">
                             {{ ($item->status == 1) ? 'Pending' : 'Selesai' }}</label></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script></script>
@endsection
