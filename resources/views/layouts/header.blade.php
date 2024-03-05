
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
        </ul>
    </div>
</header>
