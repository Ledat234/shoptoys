<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Publisher Management</h2>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-success" href="<?php echo e(route('publisher.create')); ?>"> Add New Publisher</a>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">

            <p><?php echo e($message); ?></p>

        </div>
    <?php endif; ?>

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Country</th>

            <th width="280px">Action</th>

        </tr>

        <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
            <tr>

                <td><?php echo e($key + 1); ?></td>

                <td><?php echo e($publisher->name); ?></td>

                <td><?php echo e($publisher->country); ?></td>

                <td>

                    <form action="<?php echo e(route('publisher.destroy', $publisher->id)); ?>" method="POST">

                        <a class="btn btn-info" href="<?php echo e(route('publisher.show', $publisher->id)); ?>">Show</a>

                        <a class="btn btn-primary" href="<?php echo e(route('publisher.edit', $publisher->id)); ?>">Edit</a>

                        <a class="btn btn-primary" href="<?php echo e(route('publisher.destroy', $publisher->id)); ?>">Delete</a>

                    </form>

                </td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/publisher/index.blade.php ENDPATH**/ ?>