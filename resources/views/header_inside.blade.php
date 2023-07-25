<nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
    @if(Auth::check() && Auth::user()->role_id != 3)
        <div class="container"><a class="navbar-brand" href="/admin">PLMobile</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
    @else
    <div class="container"><a class="navbar-brand" href="/user">PLMobile</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
    @endif
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                @if(Auth::check() && Auth::user()->role_id != 3)
                    <li class="nav-item"><a class="nav-link" href="/offers">Oferty</a></li>
                    <li class="nav-item"><a class="nav-link" href="/users">Użytkownicy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/orders">Zamówienia</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="/logout">Wyloguj</a></li>
                <li class="nav-item"></li>
            </ul>

    </div>
</nav>
