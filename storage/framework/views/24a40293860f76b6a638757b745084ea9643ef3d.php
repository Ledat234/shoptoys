<?php echo $__env->make('clien.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="nav">
    <li class="nav-profile dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user" aria-hidden="true"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">


            <a href="<?php echo e(route('dashboard')); ?>" class="dropdown-item">
                <i class="fa fa-user" aria-hidden="true"></i>
                <?php if(session('user')): ?>
                    <b><?php echo e(session('user')->name); ?></b>
                <?php endif; ?>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">
                <i class='fas fa-sign-out-alt'></i> Logout

            </a>

            </a>
        </div>

</div>


<?php $__env->startSection('content'); ?>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            <?php if(!is_null($cartProducts)): ?>
                <?php $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $id = $cartProduct->id;
                        $price = $cartProduct->product->price;
                        $quantity = $cartProduct->quantity;
                        $subtotal = $price * $quantity;
                        $total += $subtotal;
                    ?>
                    <tr data-id="<?php echo e($id); ?>">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    <img src="<?php echo e(asset('image/product/' . $cartProduct->product->image[0]->image)); ?>"
                                        alt="" class="img-responsive" width="100p" />
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin"><?php echo e($cartProduct->product->name); ?></h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$<?php echo e($cartProduct->product->price); ?></td>
                        <td data-th="Quantity"><?php echo e($cartProduct->quantity); ?></td>
                        <td data-th="Subtotal" class="text-center">$<?php echo e($subtotal); ?></td>
                        <td class="actions" data-th="">
                            <form action="<?php echo e(route('cart.remove', $cartProduct->product_id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                            <!-- Add any actions/buttons here if needed -->
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" class="text-right">
                    <h3><strong>Total $<?php echo e($total); ?></strong></h3>
                </td>

            </tr>

            <tr>
                <td colspan="5" class="text-right">
                    <a href="<?php echo e(url('/game/home')); ?>" class="btn btn-danger">
                        <i class="fa fa-arrow-left"></i> Continue Shopping
                    </a>
                    <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
                </td>
            </tr>
        </tfoot>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/page/cart.blade.php ENDPATH**/ ?>