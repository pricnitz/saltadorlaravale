<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>

<!-- Custom Cursor -->
<div class="cursor js-cursor"></div>

<!-- WhatsApp / Progress -->
<div class="progress-wrap cursor-pointer">
    <i class="fa-solid fa-whatsapp"></i>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
<div class="logo-wrapper">
    <a class="logo" href="{{ route('home') }}">
        <img 
            src="{{ asset('frontend/img/logo/logo.png') }}" 
            class="logo-img img-fluid" 
            alt="saltardor logo"
        >
    </a>
</div>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                {{-- Home --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <span class="rolling-text">Home</span>
                    </a>
                </li>

                {{-- About --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <span class="rolling-text">About</span>
                    </a>
                </li>

                {{-- Services Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        <span class="rolling-text">Services</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('service.architect') }}" class="dropdown-item"><span>Architectural</span></a></li>
                        <li><a href="{{ route('service.management') }}" class="dropdown-item"><span>Project Management</span></a></li>
                        <li><a href="{{ route('service.mep') }}" class="dropdown-item"><span>MEP Services</span></a></li>
                        <li><a href="{{ route('service.interior') }}" class="dropdown-item"><span>Interior</span></a></li>
                        <li><a href="{{ route('service.landscape') }}" class="dropdown-item"><span>Landscape Architecture</span></a></li>
                        <li><a href="{{ route('service.urban') }}" class="dropdown-item"><span>Urban Planning</span></a></li>
                    </ul>
                </li>

                {{-- Portfolio --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">
                        <span class="rolling-text">Portfolio</span>
                    </a>
                </li>

                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <span class="rolling-text">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>