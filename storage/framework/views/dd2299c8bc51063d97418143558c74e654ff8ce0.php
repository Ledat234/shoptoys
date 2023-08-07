
<?php $__env->startSection('body'); ?>
 <div class="row">
 	<div class="col-md-4">
 		<ul class="list-group profile-nav">
		  <li class="list-group-item <?php echo e((request()->route()->getName()=='dashboard')?'active':''); ?>"><a href="<?php echo e(route('dashboard')); ?>">Dashboard </a></li>
		  <li class="list-group-item <?php echo e((request()->route()->getName()=='edit_profile')?'active':''); ?>"><a href="<?php echo e(route('edit_profile')); ?>">Edit Profile</a></li>
		  <li class="list-group-item <?php echo e((request()->route()->getName()=='change_password')?'active':''); ?>"><a href="<?php echo e(route('change_password')); ?>">Change Password</a></li>
		</ul>
 	</div>
    <div class="col-md-8">
    	<?php echo $__env->yieldContent('profile'); ?>
    </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/profile/profile-layout.blade.php ENDPATH**/ ?>