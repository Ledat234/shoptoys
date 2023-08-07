<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Game</h2>
            </div>
        </div>
    </div>
    <div class="list-product-subtitle">
        <p>List Game New</p>

        <div class="product-group">

            <div class="row">


                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
                        <div class="img_thumbnail productlist">
                            <img class="images" src="<?php echo e(asset('image/product/' . $product->image[0]->image)); ?>"
                                alt="">
                            <div class="caption">
                                <h4><?php echo e($product->name); ?></h4>
                                <strong>Category:</strong>
                                <?php $__currentLoopData = $product->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="#"> <?php echo e($category->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <p><strong>Price: </strong> $<?php echo e($product->price); ?></p>

                                <p class="purchase-info"><a href="<?php echo e(route('home.show', $product->id)); ?>"
                                        class="btn btn-primary btn-block text-center" role="button">View Detail</a> </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('clien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/product/home.blade.php ENDPATH**/ ?>