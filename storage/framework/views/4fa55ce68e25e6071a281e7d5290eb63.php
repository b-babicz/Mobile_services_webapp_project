<?php echo $__env->yieldContent('header_inside'); ?>
<?php echo $__env->yieldContent('footer'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PLMobile</title>
    <meta name="description" content="Łączymy ludzi bliżej niż inni">    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Cabin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Lora.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/rticles-Cards-images.css')); ?>">
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
    <?php echo $__env->make('header_inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <h1>Witaj <?php echo e(Auth::user()->name); ?>!</h1>

        <p>W celu dokonania zamówienia prosimy o kontakt:</p>

        <p>Mail: kontakt@plmobile.pl</p>
        <p>Telefon: +48-123-456-789</p>
        <p>Adres: al. Tadeusza Rejtana 16C, 35-330 Rzeszów</p>

        <p>Dziękujemy!</p>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/grayscale.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/bartek/Desktop/laravel/laravel/resources/views/user.blade.php ENDPATH**/ ?>