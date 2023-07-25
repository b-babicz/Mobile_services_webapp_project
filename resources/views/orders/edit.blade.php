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
    <br/>
    <br/>
    <div class="container">
        <h1>Edytuj zamówienie</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="user_id" class="form-label">ID użytkownika</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $order->user_id }}" required>
            </div>
            <div class="mb-3">
                <label for="order_date" class="form-label">Data zamówienia</label>
                <input type="date" class="form-control" id="order_date" name="order_date" value="{{ $order->order_date }}" required>
            </div>
            <div class="mb-3">
                <label for="payment_end_date" class="form-label">Data opłaty zamówienia</label>
                <input type="date" class="form-control" id="payment_end_date" name="payment_end_date" value="{{ $order->payment_end_date }}" required>
            </div>
            <div class="mb-3">
                <label for="payment_method" class="form-label">Metoda płatności</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="PaySafeCard"{{ $order->payment_method === 'PaySafeCard' ? ' selected' : '' }}>PaySafeCard</option>
                    <option value="PayPal"{{ $order->payment_method === 'PayPal' ? ' selected' : '' }}>PayPal</option>
                    <option value="BLIK"{{ $order->payment_method === 'BLIK' ? ' selected' : '' }}>BLIK</option>
                    <option value="Bank transfer"{{ $order->payment_method === 'Bank transfer' ? ' selected' : '' }}>Bank transfer</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="order_id" class="form-label">ID zamówienia</label>
                <input type="number" class="form-control" id="order_id" name="order_id" value="{{ $order->order_id }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>
    @include('footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/grayscale.js') }}"></script>
</body>

</html>
