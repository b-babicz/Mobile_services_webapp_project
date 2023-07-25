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
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Lista użytkowników</h1>
        <?php if(Auth::check() && Auth::user()->role_id != 3): ?>
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary mb-3">Dodaj użytkownika</a>
        <?php endif; ?>

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
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->surname); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->address); ?></td>
                        <td><?php echo e($user->postal_code); ?></td>
                        <td><?php echo e($user->city); ?></td>
                        <td>
                            <?php if($user->role_id == 1): ?>
                                Admin
                            <?php elseif($user->role_id == 2): ?>
                                Użytkownik
                            <?php elseif($user->role_id == 3): ?>
                                Klient
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if(Auth::check() && Auth::user()->role_id === 1): ?>
                                <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-primary">Edytuj</a>
                                <?php if(Auth::check() && Auth::user()->role_id === 1): ?>
                                    <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger">Usuń</button>
                                <?php endif; ?>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/grayscale.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/bartek/Desktop/laravel/laravel/resources/views/users/index.blade.php ENDPATH**/ ?>