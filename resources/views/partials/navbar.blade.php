@php
    $genres = App\Models\Genre::orderBy('name', 'asc')->get();
@endphp

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('index.show') }}">
                        <img src="/img/logo4png.png" alt="" width="60%" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ ($active) === 'home' ? 'active' : '' }}">
                                <a href="{{ route('index.show') }}">Homepage</a>
                            </li>
                            <li>
                                <a href="#">Genre <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown">
                                    <div style="height: 200px; overflow-y: scroll;">
                                        @foreach ($genres as $genre)
                                            <li><a href="#">{{ $genre->name }}</a></li>
                                        @endforeach
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Community</a></li>
                            <li class="{{ ($active) === 'mybooks' ? 'active' : '' }}">
                            @auth
                                <a href="{{ route('mybooks.index') }}">My Books</a>
                            @else
                                <a href="{{ route('login') }}">My Books</a>
                            @endauth
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right ">
                    @guest  {{-- User is not logged in --}}
                        <a href="{{ route('login') }}" class="btn text-black btn-link nav-link">Login</a>
                        <a href="{{ route('register') }}" class="btn text-black btn-link nav-link">Register</a>
                    @else  {{-- User is logged in --}}
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <a href=""><button type="submit" class="btn text-black btn-link nav-link">Logout</button></a>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
