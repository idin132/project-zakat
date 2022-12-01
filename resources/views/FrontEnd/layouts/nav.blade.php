<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="item-menu-header">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="item-menu-header">
            <a class="nav-link" href="#">Berita</a>
        </li>
        <li class="item-menu-header">
            <a class="nav-link" href="#">Zakat</a>
        </li>
        @if (Auth::user())
        <li class="item-menu-header">
            <form action="{{url('user/actionlogout')}}" method="post">
             @csrf
            <button type="submit" class="btn btn-dark">Logout</button>
            </form>
        </li>
        @else
        <li class="item-menu-header">
            <a class="nav-link" href="login">Login</a>
        </li>
        @endif
        
    </ul>
</div>