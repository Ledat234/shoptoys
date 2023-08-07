<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <h2 style="align-content: center">
        <?php if(session('user')): ?>
            Hello <b><?php echo e(session('user')->name); ?></b> 
        <?php endif; ?>,Welcome to Page Manage
    </h2>
    <img src="https://d9n64ieh9hz8y.cloudfront.net/wp-content/uploads/20230210005621/14-game-pc-moi-thang-2-2023-lich-phat-hanh-game.jpg"
        alt="Home Admin" width="1200px">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/admin/home.blade.php ENDPATH**/ ?>