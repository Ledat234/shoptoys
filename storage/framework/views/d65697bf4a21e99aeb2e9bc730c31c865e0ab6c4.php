
<?php $__env->startSection('profile'); ?>
    <div class="card">
        <div class="card-header">
            Dashboard
        </div>
        <div class="card-body">
            <h5 class="card-title">Welcome to your profile: <?php echo e($user->name); ?></h5> <br> <br>
            <p>Email: <?php echo e($user->email); ?></p>
            <p>Country: <?php echo e($user->country); ?></p>
            <p>Phone Number: 0<?php echo e($user->numberphone); ?></p>
            

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('profile.profile-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/profile/dashboard.blade.php ENDPATH**/ ?>