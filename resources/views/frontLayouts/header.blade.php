
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Medinova</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Service</a>
                    <a href="{{ route('price') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'price' ? 'active' : '' }}">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('blog') }}" class="dropdown-item {{ Route::currentRouteName() == 'blog.grid' ? 'active' : '' }}">Blog Grid</a>
{{--                            <a href="{{ route('blog-details') }}" class="dropdown-item {{ Route::currentRouteName() == 'blog.detail' ? 'active' : '' }}">Blog Detail</a>--}}
                            <a href="{{ route('team') }}" class="dropdown-item {{ Route::currentRouteName() == 'team' ? 'active' : '' }}">The Team</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item {{ Route::currentRouteName() == 'testimonial' ? 'active' : '' }}">Testimonial</a>
                            <a href="{{ route('appointment') }}" class="dropdown-item {{ Route::currentRouteName() == 'appointment' ? 'active' : '' }}">Appointment</a>
                            {{--                            <a href="{{ route('home') }}search.html" class="dropdown-item">Search</a>--}}
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>

