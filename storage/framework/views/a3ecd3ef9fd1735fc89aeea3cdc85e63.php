<?php echo $__env->yieldContent('nav_login-register'); ?>
<?php echo $__env->yieldContent('footer'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('nav_login-register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
    <h3>Zarejestruj się</h3>
    <form action="/register" method="POST">
      <div class="mb-3">
        <label for="firstName" class="form-label">Imię</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Wprowadź imię" required>
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Nazwisko</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Wprowadź nazwisko" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Adres</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Wprowadź adres" required>
      </div>
      <div class="mb-3">
        <label for="postalCode" class="form-label">Kod pocztowy</label>
        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Wprowadź kod pocztowy" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Adres email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Wprowadź adres email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Hasło</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło" required>
      </div>
      <button type="submit" class="btn btn-primary">Zarejestruj</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/grayscale.js"></script>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/bartek/Desktop/laravel/laravel/resources/views/register.blade.php ENDPATH**/ ?>