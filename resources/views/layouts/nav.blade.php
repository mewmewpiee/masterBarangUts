@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-black">
    <div class="container">
        <a href="/" class="navbar-brand mb-0 h1">
            <img class="img-fluid me-2" src="{{ Vite::asset('resources/images/logo-white.svg') }}" alt="logo" style="width: 40px;"> Binchilin
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="/" class="nav-link active">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('items.index') }}" class="nav-link">Items List</a></li>
            </ul>
            <hr class="d-lg-none text-white-50">
        </div>
    </div>
</nav>
