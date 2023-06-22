<!--    NAVBAR TOP  -->
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
        @if(Auth::user() and Auth::user()->admin == 1)
            <div>
                <a class="btn btn-dark btn-outline-light btn-lg" href="{{ route('admin') }}">Admin</a>
            </div>
        @else
        <div class="ghost">
            <ul class="navbar-nav navbar-left" >
                <li class="nav-item" >
                    <a class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        @endif

        <div class = "mx-auto">
            <a href="{{route('index')}}" class="navbar-brand" >FIITkea</a>
        </div>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a href="{{route('login')}}" class="nav-link">
                    @guest
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    @endguest
                    @auth
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    @endauth
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('cart')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    @guest
                        <span class="cart-basket d-flex align-items-center justify-content-center">
                        {{\App\Http\Controllers\CartController::numberOfItemsInCartGuest()}}
                        </span>
                    @endguest
                    @auth
                        <span class="cart-basket d-flex align-items-center justify-content-center">
                        {{\App\Http\Controllers\CartController::numberOfItemsInCartAuth()}}
                        </span>
                    @endauth
                </a>
            </li>
        </ul>
    </div>
</nav>
<!--    NAVBAR BOTTOM   -->
<nav class="navbar navbar-expand navbar-dark bg-dark" style="height: 48px">
    <div class="navbar-collapse collapse justify-content-center">
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar" id="navbarSupportedContent">
            <div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>-->
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a href="{{route('eshop')}}" class="nav-link">E-shop</a>
            </li>
            <li class="nav-item">
                <a href="{{route('underconstruction')}}" class="nav-link">Služby</a>
            </li>
            <li class="nav-item">
                <a href="{{route('underconstruction')}}" class="nav-link">Kontakt</a>
            </li>
        </ul>
        <!--<div class="searchcopy" id="navbarIgnore"></div>-->

    </div>
</nav>
