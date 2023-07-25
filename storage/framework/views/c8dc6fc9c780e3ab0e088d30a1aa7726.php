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
        <h1>Edytuj użytkownika</h1>
        <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input type="text" class="form-control" id="surname" name="surname" value="<?php echo e($user->surname); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Adres</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo e($user->address); ?>" required>
            </div>
            <div class="mb-3">
                <label for="postal_code" class="form-label">Kod pocztowy</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo e($user->postal_code); ?>" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Miasto</label>
                <input type="text" class="form-control" id="city" name="city" value="<?php echo e($user->city); ?>" required>
            </div>
            <div class="mb-3">
                <label for="role_id" class="form-label">Rola</label>
                <select class="form-control" id="role_id" name="role_id" required>
                    <?php if(Auth::check() && Auth::user()->role_id === 1): ?>
                    <option value="1"<?php echo e($user->role_id === 1 ? ' selected' : ''); ?>>Admin</option>
                    <option value="2"<?php echo e($user->role_id === 2 ? ' selected' : ''); ?>>Użytkownik</option>
                    <?php endif; ?>
                    <option value="3"<?php echo e($user->role_id === 3 ? ' selected' : ''); ?>>Klient</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/grayscale.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/bartek/Desktop/laravel/laravel/resources/views/users/edit.blade.php ENDPATH**/ ?>