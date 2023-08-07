
<?php $__env->startSection('profile'); ?>
    <div class="card">
        <div class="card-header">Update Profile</div>
        <div class="card-body">
            <form action="<?php echo e(route('update_profile')); ?>" id="edit_profile_form" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo e(old('name') ? old('name') : $user->name); ?>"
                        class="form-control" id="name" placeholder="Enter name">
                    <?php if($errors->any('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo e(old('email') ? old('email') : $user->email); ?>" name="email"
                        class="form-control" id="email" placeholder="Enter email">
                    <?php if($errors->any('email')): ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group ">
                    <label for="country">Country</label>
                    <input type="text" value="<?php echo e(old('country') ? old('country') : $user->country); ?>" name="country"
                        class="form-control" id="country" placeholder="Enter country">
                    <?php if($errors->any('country')): ?>
                        <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group ">
                    <label for="numberphone">Phone Number</label>
                    <input type="text" value="0<?php echo e(old('numberphone') ? old('numberphone') : $user->numberphone); ?>"
                        name="numberphone" class="form-control" id="numberphone" placeholder="Enter Phone Number">
                    <?php if($errors->any('numberphone')): ?>
                        <span class="numberphone"><?php echo e($errors->first('numberphone')); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('profile.profile-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/profile/edit_profile.blade.php ENDPATH**/ ?>