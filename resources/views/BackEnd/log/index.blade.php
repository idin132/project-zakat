@extends('BackEnd.template.index')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem;">
            <div class="container">
                <br>
                <table class="table" id="log">
                    <thead>
                        <tr style="font-size: 12px">
                            <th>NO</th>
                            <th>Action</th>
                            <th>Table</th>
                            <th>Waktu</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($log as $key => $item)
                            <tr>
                                <td style="font-size: 12px">{{ $item->id }}</td>
                                <td style="font-size: 12px">{{ $item->tindakan }}</td>
                                <td style="font-size: 12px">{{ $item->tabel }}</td>
                                <td style="font-size: 12px">{{ $item->waktu }}</td>
                                <td style="font-size: 12px">{{ $item->isi }}</td>
                                <td>


                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button style="font-size: 12px" type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
