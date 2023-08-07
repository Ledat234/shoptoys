<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.home')); ?>" class="brand-link">
        <img src="https://img.freepik.com/premium-vector/logo-design-kids-toys_29937-4737.jpg" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" width="50px" height="50px">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img title="Account" class="img-profile rounded-circle"
                    src="https://cdn.onlinewebfonts.com/svg/img_88236.png" alt="" width="30px" height="30px"
                    style="padding: 0px">
            </div>
            <div class="info">
                <a href="<?php echo e(route('dashboard')); ?>" class="d-block">
                    <?php if(session('user')): ?>
                        <p><?php echo e(session('user')->name); ?></p>
                    <?php endif; ?>



                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('product.home')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.home')); ?>" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Manage Options
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('product.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Toys</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('publisher.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Publisher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('category.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Manage Category</p>
                            </a>
                        </li>
                        <?php if(auth()->user()->role_id == 3): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route('welcome.index')); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Account</p>
                                </a>
                            </li>
                        <?php endif; ?>


                    </ul>
                </li>

                <!-- /.sidebar -->
            </ul>
        </nav>
    </div>
</aside>
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

<?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>