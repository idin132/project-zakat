@extends('template.index')

@section('content')

<div class="d-flex justify-content-center">
<div class="card" style="width: 100%;">
<div class="container">
    <div class="text-center">
        <h3>Table User</h3>
    </div>
        <br>
        <a href="{{ route('user.create') }}", class="btn btn-secondary">+</a>
        <br><br>
        <table class="table" id="maintable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($users as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->role}}</td>
                    <td>


                        <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-solid fa-trash"></i>
                                </button>
                                <a href="{{route ('user.edit', $item->id)}}" class="btn btn-warning">
                                    <i class="fa fa-solid fa-pencil"></i>
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
