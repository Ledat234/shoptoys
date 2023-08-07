
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category Management</h2>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">

            <p><?php echo e($message); ?></p>

        </div>
    <?php endif; ?>
    <div class="pull-left">
        <a class="btn btn-success" href="<?php echo e(route('category.create')); ?>"> Add New Category</a>
    </div>
    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($key + 1); ?></td>

                <td><?php echo e($category->name); ?></td>

                <td><?php echo e($category->description); ?></td>

                <td>

                    <form action="<?php echo e(route('category.destroy', $category->id)); ?>" method="POST">

                        <a class="btn btn-info" href="<?php echo e(route('category.show', $category->id)); ?>">Show</a>

                        <a class="btn btn-primary" href="<?php echo e(route('category.edit', $category->id)); ?>">Edit</a>

                        <a class="btn btn-primary" href="<?php echo e(route('category.destroy', $category->id)); ?>">Delete</a>

                    </form>

                </td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <div class="pagination">
        <?php if($categories->onFirstPage()): ?>
            <span class="disabled">&laquo;</span>
        <?php else: ?>
            <a href="<?php echo e($categories->previousPageUrl()); ?>" rel="prev">&laquo;</a>
        <?php endif; ?>
    
        <?php if($categories->hasMorePages()): ?>
            <a href="<?php echo e($categories->nextPageUrl()); ?>" rel="next">&raquo;</a>
        <?php else: ?>
            <span class="disabled">&raquo;</span>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/category/index.blade.php ENDPATH**/ ?>