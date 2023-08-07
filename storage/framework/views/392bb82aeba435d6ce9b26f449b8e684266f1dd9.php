<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Account Management</h2>
            </div>
            <br><br>
            
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <div class="pull-left">
        <a class="btn btn-success" href="<?php echo e(route('auth.create')); ?>"> Add New Account</a>
    </div>
    <table class="table table-bordered" ,border="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Country</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Role</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->country); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->numberphone); ?></td>
                <td><?php echo e($user->role->name); ?></td>
                

                <td>

                    <form action="<?php echo e(route('welcome.destroy', $user->id)); ?>" method="POST">
                       
                        <a class="btn btn-primary" href="<?php echo e(route('welcome.update', $user->id)); ?>">Edit</a>
                        <a class="btn btn-primary" href="<?php echo e(route('welcome.destroy', $user->id)); ?>">Delete</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/auth/index.blade.php ENDPATH**/ ?>