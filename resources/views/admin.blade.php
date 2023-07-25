<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PLMobile</title>
    <meta name="description" content="Łączymy ludzi bliżej niż inni">    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Cabin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Lora.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/rticles-Cards-images.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            color: #000000;
        }
    </style>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    @include('header_inside')
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <h1 style="color:#ffffff;">Witaj {{ Auth::user()->name }}!</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Użytkownicy</h5>
                <p class="card-text">Liczba klientów: {{ $statistics->user_count }}</p>
                <p class="card-text">Liczba administratorów: {{ $statistics->admin_count }}</p>
            </div>
        </div>

        <br/>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Oferty</h5>
                <p class="card-text">Liczba ofert: {{ $statistics->offer_count }}</p>
                <p class="card-text">Liczba ofert z roamingiem: {{ $statistics->offer_with_roaming_count }}</p>
            </div>
        </div>

        <br/>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Zamówienia</h5>
                <p class="card-text">Liczba zamówień z ostatnich 7 dni: {{ $statistics->orders_last_7_days_count }}</p>
                <p class="card-text">Liczba zamówień z ostatnich 30 dni: {{ $statistics->orders_last_30_days_count }}</p>
            </div>
        </div>
    </div>

    @include('footer')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/grayscale.js') }}"></script>
</body>

</html>
