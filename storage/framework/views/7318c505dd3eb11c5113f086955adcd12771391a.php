<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>
        <h1>Giỏ hàng</h1>
    
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    
        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <h3><?php echo e($item->product->name); ?></h3>
                <p><?php echo e($item->product->price); ?></p>
                <!-- Hiển thị các thông tin khác của sản phẩm -->
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        <!-- Thêm các nút, form để thêm/xóa sản phẩm khỏi giỏ hàng -->
    <?php $__env->stopSection(); ?>
    
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/demohtml.blade.php ENDPATH**/ ?>