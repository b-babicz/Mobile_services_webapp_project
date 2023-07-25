@yield('header_inside')
@yield('footer')

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
        }
    </style>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    @include('header_inside')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Lista użytkowników</h1>
        @if(Auth::check() && Auth::user()->role_id != 3)
            <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Dodaj użytkownika</a>
        @endif

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Email</th>
                    <th>Adres</th>
                    <th>Kod pocztowy</th>
                    <th>Miasto</th>
                    <th>Rola</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->postal_code }}</td>
                        <td>{{ $user->city }}</td>
                        <td>
                            @if ($user->role_id == 1)
                                Admin
                            @elseif ($user->role_id == 2)
                                Użytkownik
                            @elseif ($user->role_id == 3)
                                Klient
                            @endif
                        </td>
                        <td>
                            @if(Auth::check() && Auth::user()->role_id === 1)
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edytuj</a>
                                @if(Auth::check() && Auth::user()->role_id === 1)
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Usuń</button>
                                @endif
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
