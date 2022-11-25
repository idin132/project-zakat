@extends('template.index')

@section('content')
    <br>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 100%;">
            <div class="container">
                <br>
                <a class="btn btn-dark" href="{{ route('pembayaran.export') }}">.xlsx</a>
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
                            @foreach ($pembayarans as $key => $item)
                            <tr>
                                <td style="font-size: 12px">{{ $item->id }}</td>
                                <td style="font-size: 12px">{{ $item->nama_zakat }}</td>
                                <td style="font-size: 12px">{{ $item->nama_muzakki }}</td>
                                <td style="font-size: 12px">{{ $item->jumlah }}</td>
                                <td style="font-size: 12px">{{ $item->metode_pembayaran }}</td>
                                <td>
                                    @if ($item->bukti_pembayaran == null)
                                        -
                                    @else
                                        <a style="font-size: 12px" href="{{ url('storage/foto/' . $item->bukti_pembayaran) }}" target="_blank"
                                            class="btn btn-dark">View</a>
                                    @endif
                                </td>
                                <td style="font-size: 12px">{{ $item->created_at }}</td>
                                <td>
                                    <form action="{{ route('pembayaran.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                            <i class="fa fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>



                                <td>

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
