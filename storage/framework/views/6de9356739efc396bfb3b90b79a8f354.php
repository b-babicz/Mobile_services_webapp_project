<?php echo $__env->yieldContent('header_inside'); ?>
<?php echo $__env->yieldContent('footer'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PLMobile</title>
    <meta name="description" content="Łączymy ludzi bliżej niż inni">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
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
        <h1>Edytuj ofertę</h1>
        <form action="<?php echo e(route('offers.update', $offer->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="product_name" class="form-label">Nazwa produktu</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo e($offer->product_name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="monthly_cost" class="form-label">Koszt miesięczny</label>
                <input type="number" step="0.01" class="form-control" id="monthly_cost" name="monthly_cost" value="<?php echo e($offer->monthly_cost); ?>" required>
            </div>
            <div class="mb-3">
                <label for="additional_cost" class="form-label">Koszt dodatkowy</label>
                <input type="number" step="0.01" class="form-control" id="additional_cost" name="additional_cost" value="<?php echo e($offer->additional_cost); ?>" required>
            </div>
            <div class="mb-3">
                <label for="internet_package_quantity" class="form-label">Pakiet internetowy</label>
                <input type="number" class="form-control" id="internet_package_quantity" name="internet_package_quantity" value="<?php echo e($offer->internet_package_quantity); ?>" required>
            </div>
            <div class="mb-3">
                <label for="sms_quantity" class="form-label">Ilość SMS</label>
                <input type="number" class="form-control" id="sms_quantity" name="sms_quantity" value="<?php echo e($offer->sms_quantity); ?>" required>
            </div>
            <div class="mb-3">
                <label for="mms_quantity" class="form-label">Ilość MMS</label>
                <input type="number" class="form-control" id="mms_quantity" name="mms_quantity" value="<?php echo e($offer->mms_quantity); ?>" required>
            </div>
            <div class="mb-3">
                <label for="calls_quantity" class="form-label">Ilość minut</label>
                <input type="number" class="form-control" id="calls_quantity" name="calls_quantity" value="<?php echo e($offer->calls_quantity); ?>" required>
            </div>
            <div class="mb-3">
                <label for="internet_speed" class="form-label">Prędkość internetu</label>
                <input type="number" class="form-control" id="internet_speed" name="internet_speed" value="<?php echo e($offer->internet_speed); ?>" required>
            </div>
            <div class="mb-3">
                <label for="roaming_available" class="form-label">Roaming dostępny</label>
                <select class="form-select" id="roaming_available" name="roaming_available" required>
                    <option value="1" <?php echo e($offer->roaming_available ? 'selected' : ''); ?>>Tak</option>
                    <option value="0" <?php echo e(!$offer->roaming_available ? 'selected' : ''); ?>>Nie</option>
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

<?php /**PATH /home/bartek/Desktop/laravel/laravel/resources/views/offers/edit.blade.php ENDPATH**/ ?>