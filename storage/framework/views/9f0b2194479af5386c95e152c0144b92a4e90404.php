<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Toys Management</h2>
            </div>
            <br><br>
            <div class="pull-left">
                <a class="btn btn-success" href="<?php echo e(route('product.create')); ?>"> Add New Toys</a>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered" ,border="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Publisher</th>
            <th>Image</th>
            <th>Price</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->publisher->name); ?></td>

                <td><img class="images-detail" src="<?php echo e(asset('image/product/' . $product->image[0]->image)); ?>" alt=""
                        width=250>
                </td>

                <td><?php echo e($product->price); ?> $</td>

                <td><?php echo e($product->description); ?></td>

                <td>

                    <form action="<?php echo e(route('product.destroy', $product->id)); ?>" method="POST">
                        <a class="btn btn-info" href="<?php echo e(route('product.show', $product->id)); ?>">Show</a>
                        <a class="btn btn-primary" href="<?php echo e(route('product.edit', $product->id)); ?>">Edit</a>
                        <a class="btn btn-primary" href="<?php echo e(route('product.destroy', $product->id)); ?>">Delete</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/product/index.blade.php ENDPATH**/ ?>