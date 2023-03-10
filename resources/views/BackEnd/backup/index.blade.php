@extends('BackEnd.template.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="card">
                    <div class="card-header">
                        <h6>Klik untuk melakukan backup database</h6>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-dark cnt" onclick="location.href='{{ route('backup.create') }}'">Backup Database</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection