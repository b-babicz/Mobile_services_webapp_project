@yield('header')
@yield('footer')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PLMobile</title>
    <meta name="description" content="Łączymy ludzi bliżej niż inni">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Cabin.css">
    <link rel="stylesheet" href="css/Lora.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/rticles-Cards-images.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
        .teksty {
            background: rgba(220,220,220,0.3);
        }
    </style>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
 @include('header')
    <header class="masthead" style="background: url(&quot;img/business-ga469498fe_1280.jpg&quot;) center;">
        <div class="intro-body" style="background: url(&quot;img/business-ga469498fe_1280.jpg&quot;) center / cover, #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading teksty">PLMOBILE</h1>
                        <p class="intro-text teksty">Łączymy ludzi bliżej niż inni</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>O PLMOBILE</h2>
                    <p>Witaj w rodzinie PLMobile! Jesteśmy młodą marką na polskim rynku,<br>której dewizą jest realizacja dobrych usług za korzystną dla konsumenta cenę.</p>
                    <p>W Naszej sieci każdy jest mile widziany. Nasi klienci przede wszystkim są Naszymi partnerami w biznesie, członkami rodziny - w przeciwieństwie do innych usługodawców.</p>
                    <p>Czas na rozpoczęcie przygody razem z Nami! Zapraszamy na pokład!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center download-section content-section" id="offert" style="background: url(&quot;img/business-ga469498fe_1280.jpg&quot;) center / cover repeat;">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 class="teksty">OFERTA PLMOBILE</h1>
                <p class="teksty">Zapoznaj się z naszą ofertą - gwarantujemy, że znajdziesz coś dla siebie</p><a class="btn btn-primary btn-lg btn-default" role="button" href="/offerts">Oferta plmobile</a>
            </div>
        </div>
    </section>
    <section class="text-center content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Skontaktuj się z nami</h2>
                    <p>Jeśli masz jakieś pytania lub zastrzeżenia do naszej działalności,<br>to skontaktuj się z nami.<br>Chętnie odpowiemy Ci na wszystkie pytania.</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<a class="btn btn-primary btn-lg btn-default" role="button" href="tel:+48-123-456-789"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone-fill fa-fw">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg><span class="network-name">INFOLINIA</span></a></li>
                        <li class="list-inline-item">&nbsp;<a class="btn btn-primary btn-lg btn-default" role="button" href="mailto:kontakt@plmobile.pl"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope-exclamation-fill fa-fw">
                                    <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697ZM12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1.5a.5.5 0 0 0 1 0V11Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"></path>
                                </svg><span class="network-name">&nbsp;MAIL</span></a></li>
                        <li class="list-inline-item">&nbsp;<a class="btn btn-primary btn-lg btn-default" role="button" href="#chat"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-text-fill fa-fw">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"></path>
                                </svg><span class="network-name">&nbsp;CHAT</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBNH-u7tWZmxcr4Uiew1cbnsrdqKuaECF4&amp;q=Rejtana+16C%2C+Rzeszow%2C+Poland&amp;zoom=15" width="100%" height="450"></iframe></div>

        @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/grayscale.js"></script>
</body>

</html>
