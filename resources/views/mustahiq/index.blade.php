@extends('template.index')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Mustahiq</h3>
    </div>
        <br>
        <a href="{{route('mustahiq.create')}}" class="btn btn-secondary">+</a>
        <br><br>
        <table class="table"id="maintable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Mustahiq</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mustahiqs as $key=>$item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_mustahiq}}</td>
                    <td>{{$item->usia}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>


                        <form action="{{ route('mustahiq.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{ route('mustahiq.edit', $item->id) }}"class="btn btn-warning">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="{{ route('mustahiq.show', $item->id) }}" class="btn btn-primary">
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
<script>
    
</script>
    
@endsection
