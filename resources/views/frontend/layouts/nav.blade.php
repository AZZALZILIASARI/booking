<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ config('settings.site_logo_url') }}" height="30" class="d-inline-block align-top" alt="">
            {{ config('settings.site_name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->routeIs('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item {{ request()->routeIs('destination*') ? 'active' : '' }}">
                    <a href="{{ route('destination') }}" class="nav-link">Destination</a>
                </li>
                <li class="nav-item {{ request()->routeIs('gallery*') ? 'active' : '' }}">
                    <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item {{ request()->routeIs('blog*') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>