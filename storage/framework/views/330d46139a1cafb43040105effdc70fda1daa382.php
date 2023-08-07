<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="list-product-title">NEW Toys</h2>

    <div class="list-product-subtitle">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if($searchs->isNotEmpty()): ?>
        <h4>Search : <strong><?php echo e($_GET['query']); ?></strong></h4>
        <div class="product-group">

            <div class="row">


                
                    <?php $__currentLoopData = $searchs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
                            <div class="img_thumbnail productlist">
                                <img class="images" src="<?php echo e(asset('image/product/' . $search->image[0]->image)); ?>"
                                    alt="">
                                <div class="caption">
                                    <h4><?php echo e($search->name); ?></h4>
                                    <strong>Category:</strong>
                                    <?php $__currentLoopData = $search->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="#"> <?php echo e($category->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <p><strong>Price: </strong> $<?php echo e($search->price); ?></p>

                                    <p class="purchase-info"><a href="<?php echo e(route('home.show', $search->id)); ?>"
                                            class="btn btn-primary btn-block text-center" role="button">View Detail</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('clien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/page/search.blade.php ENDPATH**/ ?>