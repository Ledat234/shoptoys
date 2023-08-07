<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Toys</h2>
            </div>
        </div>
    </div>
    <div class="card-wrapper">

        <div class="card">

            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('image/product/' . $image->image)); ?>" alt="">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="img-select">
                    <?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="img-item">
                            <a href="#" data-id="<?php echo e($index + 1); ?>">
                                <img src="<?php echo e(asset('image/product/' . $image->image)); ?>" alt="" width="100px"><br>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!-- card right -->
        <div class="product-content">
            <h2 class="product-title"> <?php echo e($product->name); ?></h2>


            <div class="product-price">
                <p class="new-price">Price: <span>$<?php echo e($product->price); ?></span></p>
            </div>

            <div class="product-detail">
                <h2>about this item: </h2>

                <strong>
                    Publisher: <span> <?php echo e($product->publisher->name); ?></span>
                </strong>
            </div>
            <strong>Category:</strong>
            <?php $__currentLoopData = $product->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#"> <?php echo e($category->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <p> <?php echo e($product->description); ?></p>
            <div class="purchase-info">

                <p class="btn-holder"><a href="<?php echo e(route('add_to_cart', $product->id)); ?>"
                        class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>

            </div>

            <div class="social-links">
                <p>Share: </p>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
            <div class="purchase-info">
                <a class="btn btn-primary" href="<?php echo e(route('product.home')); ?>"> Back</a>
            </div>
        </div>
    </div>
    </div>



    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;


        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;

        }


        window.addEventListener('resize', slideImage);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('clien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/page/viewproduct.blade.php ENDPATH**/ ?>