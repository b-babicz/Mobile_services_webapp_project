<?php echo $__env->yieldContent('nav_login-register'); ?>
<?php echo $__env->yieldContent('footer'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PLMobile</title>
    <meta name="description" content="Łączymy ludzi bliżej niż inni">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Cabin.css">
    <link rel="stylesheet" href="css/Lora.css">
    <link rel="stylesheet" href="css/Articles-Cards-images.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
    <title>Document</title></head>

<body>
    <?php echo $__env->make('nav_login-register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <h3>Zaloguj się</h3>
        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="email" class="form-label">Adres email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Wprowadź adres email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Wprowadź hasło">
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/grayscale.js"></script>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/bartek/Desktop/laravel/laravel/resources/views/login.blade.php ENDPATH**/ ?>