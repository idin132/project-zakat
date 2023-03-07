    {{-- <nav class="navbar">
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/slider_zakat_fitrah.jpeg')}}" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('berita') }}">Berita</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zakat</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('kalkulator.index') }}">Zakat Fitrah</a>
                    <a class="dropdown-item" href="{{ route('penghasilan.index') }}">Zakat Penghasilan</a>
                </div>
            </li>
            @if (Auth::user())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <button>
                        <a href="change-password">Change Password</a>
                    </button>
                    <form action="{{ url('user/actionlogout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                </div>
            </li>
            @else
            <li class="item-menu-header">
                <a class="nav-link" href="{{ route('userlogin') }}">Login</a>
            </li>
            @endif

        </ul>
    </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #65ffdc">
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo-removebg-preview.png')}}" alt="" style="max-width: 100px;">
            <!-- YUK ZAKAT -->

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Zakat
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('kalkulator.index') }}">Zakat Fitrah</a>
                        <a class="dropdown-item" href="{{ route('penghasilan.index') }}">Zakat Penghasilan</a>
                    </div>
                </li>
                @if (Auth::user())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="{{ route('user.profile', Auth::user()->id) }}" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
                        <a href="{{ route('history')}}" class="dropdown-item"><i class="fa fa-calendar-o"></i>History</a></a>
                        <a href="{{ route('change-password') }}" class="dropdown-item"><i class="fa fa-sliders"></i>Change Passowrd</a></a>
                        <div class="dropdown-divider"></div>

                        <div class="container">
                            <form action="{{ url('user/actionlogout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-dark">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userlogin') }}">Login</a>
                </li>
                @endif
            </ul>
            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('notifications.index') }}">
                        <img src="{{ asset('img/notification-icon.png') }}" alt="Notifications" />
                        {{-- <span class="badge badge-pill badge-danger">{{ auth()->user()->unreadNotifications->count() }}</span> --}}
                    </a>
                </li>
            </ul> -->

        </div>
    </nav>