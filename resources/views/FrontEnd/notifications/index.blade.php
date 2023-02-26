@extends('FrontEnd.layouts.main')


@section('content')
    <div class="container">
        <h1>Notifications</h1>
        
        <ul class="list-group">
            @foreach ($notifications as $notification)
                <li class="list-group-item">
                    <a href="{{ $notification->data['link'] }}">{{ $notification->data['message'] }}</a>
                    <!-- <span class="float-right">{{ $notification->created_at->diffForHumans() }}</span> -->
                </li>
            @endforeach
        </ul>
        
        {{ $notifications->links() }}
    </div>
@endsection
