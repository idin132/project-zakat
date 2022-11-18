@extends('template.index')

@section('content')


<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
    <div class="text-center">
        <h3>Table Muzakki</h3>
    </div>
        <br>
        <a href="{{ route('muzakki.create') }}", class="btn btn-secondary">+</a>
        <br><br>
        <table class="table" id="maintable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Muzakki</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muzakkis as $key=>$muzakki)
                <tr>
                    <td>{{$muzakki->id}}</td>
                    <td>{{$muzakki->name}}</td>
                    <td>{{$muzakki->no_hp}}</td>
                    <td>{{$muzakki->alamat}}</td>
                    <td>


                        <form action="{{ route ('muzakki.destroy', $muzakki->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{ route('muzakki.show', $muzakki->id) }}" class="btn btn-primary">
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

    
@endsection
