@extends('template.index')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Penerimaan</h3>
    </div>
        <br>
        <a href="{{ route('penerimaan.create') }}", class="btn btn-secondary">+</a>
        <br><br>
        <table class="table" id="maintable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jumlah</th>
                    <th>Bukti</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($penerimaan as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>@if($item->bukti == null) - @else <a href="{{ url('storage/foto/'.$item->bukti) }}" target="_blank" class="btn btn-dark">View</a> @endif</td>
                    <td>


                        <form action="{{ route ('penerimaan.destroy', $item->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{route ('penerimaan.edit', $item->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
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
<script>
    
</script>
    
@endsection
