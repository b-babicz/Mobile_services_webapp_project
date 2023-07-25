@yield('header_inside')
@yield('footer')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PLMobile</title>
    <meta name="description" content="Łączymy ludzi bliżej niż inni">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
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
    <div class="container">
        <h1>Lista ofert</h1>

        @if(Auth::check() && Auth::user()->role_id == 1)
            <a href="{{ route('offers.create') }}" class="btn btn-primary mb-3">Dodaj ofertę</a>
        @endif

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nazwa produktu</th>
                    <th>Koszt miesięczny</th>
                    <th>Koszt dodatkowy</th>
                    <th>Pakiet internetowy</th>
                    <th>Ilość SMS</th>
                    <th>Ilość MMS</th>
                    <th>Ilość minut</th>
                    <th>Prędkość internetu</th>
                    <th>Roaming</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    <tr>
                        <td>{{ $offer->id }}</td>
                        <td>{{ $offer->product_name }}</td>
                        <td>{{ $offer->monthly_cost }}</td>
                        <td>{{ $offer->additional_cost }}</td>
                        <td>{{ $offer->internet_package_quantity }}</td>
                        <td>{{ $offer->sms_quantity }}</td>
                        <td>{{ $offer->mms_quantity }}</td>
                        <td>{{ $offer->calls_quantity }}</td>
                        <td>{{ $offer->internet_speed }}</td>
                        <td>{{ $offer->roaming_available ? 'Tak' : 'Nie' }}</td>
                        <td>
                            @if(Auth::check() && Auth::user()->role_id == 1)
                                <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-sm btn-primary">Edytuj</a>
                                <form action="{{ route('offers.destroy', $offer->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Usuń</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/grayscale.js') }}"></script>
</body>

</html>
