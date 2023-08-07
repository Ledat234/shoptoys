<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Account</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(route('welcome.index')); ?>"> Back</a>

            </div>

        </div>

    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('auth.register')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Full Name" value="" name="name" />
                    <?php if($errors->has('name')): ?>
                        <?php echo e($errors->first('name')); ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <input type="text" class="form-control" placeholder="Country" value="" name="country" />

                <?php if($errors->has('country')): ?>
                    <?php echo e($errors->first('country')); ?>

                <?php endif; ?>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <input type="text" class="form-control" placeholder="Phone number" value="" name="numberphone" />
                <?php if($errors->has('numberphone')): ?>
                    <?php echo e($errors->first('numberphone')); ?>

                <?php endif; ?>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                <?php if($errors->has('email')): ?>
                    <?php echo e($errors->first('email')); ?>

                <?php endif; ?>

            </div>

        </div>

        <div class="form-group">

            <input type="password" class="form-control" placeholder="Password *" value="" name="password" />

            <?php if($errors->has('password')): ?>
                <?php echo e($errors->first('password')); ?>

            <?php endif; ?>
        </div>


        <div class="form-group">

            <input type="password" class="form-control" placeholder="Confirm Password *" value=""
                name="password_confirmation" />

        </div>
        <div class="form-group">

            <select class="form-control" name="role">

                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if($errors->has('role')): ?>
                <?php echo e($errors->first('role')); ?>

            <?php endif; ?>
        </div>


        <input type="submit" class="btnRegister" value="Add" />

        </div>

        </div>

    </form>

<?php $__env->stopSection(); ?>
</form>
</body>

</html>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/auth/create.blade.php ENDPATH**/ ?>