
<header class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container-fluid">
        <ul class="navbar-nav">

            <li class="nav-item">
                <h5>
                    <a class="nav-link active" href="#">
                        @yield('title')
                    </a>
                </h5>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('home')}}>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('contacts')}}>Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('about')}}>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('elevi')}}>Elevi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/articles">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('files') }}>Upload Files</a>
            </li>
        </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
